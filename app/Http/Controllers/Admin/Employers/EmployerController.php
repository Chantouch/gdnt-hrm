<?php

namespace App\Http\Controllers\Admin\Employers;

use App\Models\AddonCurrentPosition;
use App\Models\Award;
use App\Models\AwardPunishment;
use App\Models\Children;
use App\Models\CurrentJobStatus;
use App\Models\DegreeSpecialize;
use App\Models\Department;
use App\Models\DepartmentUnit;
use App\Models\EducationLevel;
use App\Models\Employer;
use App\Models\Father;
use App\Models\FirstStateJob;
use App\Models\Frame;
use App\Models\GeneralEducation;
use App\Models\HistoryPrivateJob;
use App\Models\JobsHistory;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\Ministry;
use App\Models\Mother;
use App\Models\NoSalaryStatus;
use App\Models\Occupation;
use App\Models\Office;
use App\Models\OutFrameNoSalary;
use App\Models\Punishment;
use App\Models\ShortCourse;
use App\Models\Sibling;
use App\Models\Spouse;
use App\Models\WifeHusbandParents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Psy\Exception\ErrorException;
use Validator;
use DB;

class EmployerController extends Controller
{
    /**
     * EmployerController constructor.
     */

    protected $employer;


    public function __construct(Employer $employer)
    {
        $this->middleware('auth');
        $this->employer = $employer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "គ្រប់គ្រង បុគ្គលិក";
        $employers = Employer::with('firstStateJob')->orderBy('name', 'ASC')->paginate(10);
        return view('admin.employers.index', compact('employers', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "បន្ថែម បុគ្គលិកថ្មី";
        $marital_status = Employer::marital_status();
        $ministry = Ministry::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $occupation = Occupation::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $department = Department::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $department_unit = DepartmentUnit::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $frame = Frame::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $office = Office::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $types = AwardPunishment::types();
        $language = Language::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $can_level = LanguageLevel::level();
        $gender = Employer::gender();
        $subsidy = Employer::subsidy();
        $status = Employer::status();
        return view('admin.employers.create', compact('marital_status', 'title', 'subsidy', 'gender', 'status', 'can_level', 'language', 'ministry', 'types', 'occupation', 'department', 'department_unit', 'frame', 'office'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            //dd($data);
            $validator = Validator::make($data, Employer::rules(), Employer::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please review your fields again');
            }
            $passport_expired_date = date('Y-m-d', strtotime($request->passport_expired_date));
            $data['passport_expired_date'] = $passport_expired_date;
            $id_card_expired = date('Y-m-d', strtotime($request->id_card_expired));
            $data['id_card_expired'] = $id_card_expired;
            $dob = date('Y-m-d', strtotime($request->dob));
            $data['dob'] = $dob;
            $start_date = date('Y-m-d', strtotime($request->fsj_start_date));
            $data['fsj_start_date'] = $start_date;
            $employer = Employer::create($data);
            $emp_id = $employer->id;
            //First state job section
            if ($request->has('fsj_occupation_id') || $request->has('fsj_ministry_id') || $request->has('fsj_frame_id')) {
                $data['fsj_emp_id'] = $emp_id;
                $first_state_job = FirstStateJob::create($data);
                if (!$first_state_job) {
                    DB::rollbackTransaction();
                    return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request');
                }
            }
            //Current position
            if ($request->has('cjs_frame_id') || $request->has('cjs_department_id') || $request->has('cjs_occupation_id')) {
                $data['cjs_emp_id'] = $emp_id;
                $current_position = CurrentJobStatus::create($data);
                if (!$current_position) {
                    DB::rollbackTransaction();
                    return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request');
                }
            }
            //Addon for current position
            if ($request->has('acp_position') || $request->has('acp_equal_position') || $request->has('acp_department')) {
                $data['acp_emp_id'] = $emp_id;
                $addon_current_position = AddonCurrentPosition::create($data);
                if (!$addon_current_position) {
                    DB::rollbackTransaction();
                    return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request');
                }
            }

            //Out of frame status
            foreach ($request->fn_department as $key => $department) {
                if (!empty($department)) {
                    $entry = [
                        'fn_emp_id' => $emp_id,
                        'fn_department' => $department,
                        'fn_start_date' => date('Y-m-d', strtotime($request->fn_start_date[$key])),
                        'fn_end_date' => date('Y-m-d', strtotime($request->fn_end_date[$key])),
                    ];
                    $of = OutFrameNoSalary::create($entry);
                    if (!$of) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }


            //No Salary Status
            foreach ($request->nss_department as $key => $department) {
                if (!empty($department)) {
                    $entry = [
                        'nss_emp_id' => $emp_id,
                        'nss_department' => $department,
                        $nss_start_date = date('Y-m-d', strtotime($request->nss_start_date[$key])),
                        'nss_start_date' => $nss_start_date,
                        $nss_end_date = date('Y-m-d', strtotime($request->nss_end_date[$key])),
                        'nss_end_date' => $nss_end_date,
                    ];
                    $nss = NoSalaryStatus::create($entry);
                    if (!$nss) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }

            //Public Status jobs
            foreach ($request->hpj_ministry_institute as $key => $ministry_institute) {
                if (!empty($ministry_institute)) {
                    $entry = [
                        'hpj_emp_id' => $emp_id,
                        'hpj_ministry_institute' => $ministry_institute,
                        'hpj_occupation' => $request->hpj_occupation[$key],
                        'hpj_others' => $request->hpj_others[$key],
                        'hpj_start_date' => date('Y-m-d', strtotime($request->hpj_start_date[$key])),
                        'hpj_end_date' => date('Y-m-d', strtotime($request->hpj_end_date[$key])),
                    ];
                    $hpj = HistoryPrivateJob::create($entry);
                    if (!$hpj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
            //Private Status jobs
            foreach ($request->hpj_ministry_institute as $key => $ministry_institute) {
                if (!empty($ministry_institute)) {
                    $entry = [
                        'hpj_emp_id' => $emp_id,
                        'hpj_ministry_institute' => $ministry_institute,
                        'hpj_occupation' => $request->hpj_occupation[$key],
                        'hpj_others' => $request->hpj_others[$key],
                        'hpj_start_date' => date('Y-m-d', strtotime($request->hpj_start_date[$key])),
                        'hpj_end_date' => date('Y-m-d', strtotime($request->hpj_end_date[$key])),
                    ];
                    $hpj = HistoryPrivateJob::create($entry);
                    if (!$hpj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
            //Punishment
            foreach ($request->pun_doc_number as $key => $doc_number) {
                if (!empty($doc_number)) {
                    $entry = [
                        'pun_emp_id' => $emp_id,
                        'pun_doc_number' => $doc_number,
                        'pun_department' => $request->pun_department[$key],
                        'pun_punish_type' => $request->pun_punish_type[$key],
                        'pun_description' => $request->pun_description[$key],
                        $pun_published_date = date('Y-m-d', strtotime($request->pun_published_date[$key])),
                        'pun_published_date' => $pun_published_date
                    ];
                    $punishment = Punishment::create($entry);
                    if (!$punishment) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
            //Award
            foreach ($request->aw_doc_number as $key => $doc_number) {
                if (!empty($doc_number)) {
                    $entry = [
                        'aw_emp_id' => $emp_id,
                        'aw_doc_number' => $doc_number,
                        'aw_department' => $request->aw_department[$key],
                        'aw_type' => $request->aw_type[$key],
                        'aw_description' => $request->aw_description[$key],
                        $aw_published_date = date('Y-m-d', strtotime($request->aw_published_date[$key])),
                        'aw_published_date' => $aw_published_date
                    ];
                    $award = Award::create($entry);
                    if (!$award) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //General Education
            foreach ($request->ge_level_edu as $key => $level) {
                if (!empty($level)) {
                    $entry = [
                        'ge_emp_id' => $emp_id,
                        'ge_level_edu' => $level,
                        'ge_degree' => $data['ge_degree'][$key],
                        'ge_school' => $data['ge_school'][$key],
                        'ge_country' => $data['ge_country'][$key],
                        'ge_end_date' => date('Y-m-d', strtotime($data['ge_end_date'][$key])),
                        'ge_start_date' => date('Y-m-d', strtotime($data['ge_start_date'][$key]))
                    ];
                    $general_education = GeneralEducation::create($entry);
                    if (!$general_education) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Degree Specialize
            foreach ($request->ds_level_edu as $key => $level) {
                if (!empty($level)) {
                    $entry = [
                        'ds_emp_id' => $emp_id,
                        'ds_level_edu' => $level,
                        'ds_degree' => $data['ds_degree'][$key],
                        'ds_school' => $data['ds_school'][$key],
                        'ds_country' => $data['ds_country'][$key],
                        'ds_end_date' => date('Y-m-d', strtotime($data['ds_end_date'][$key])),
                        'ds_start_date' => date('Y-m-d', strtotime($data['ds_start_date'][$key]))
                    ];
                    $degree_specialize = DegreeSpecialize::create($entry);
                    if (!$degree_specialize) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Short Courses
            foreach ($request->courses_level_edu as $key => $level) {
                if (!empty($level)) {
                    $entry = [
                        'courses_emp_id' => $emp_id,
                        'courses_level_edu' => $level,
                        'courses_degree' => $data['courses_degree'][$key],
                        'courses_school' => $data['courses_school'][$key],
                        'courses_country' => $data['courses_country'][$key],
                        'courses_end_date' => date('Y-m-d', strtotime($data['courses_end_date'][$key])),
                        'courses_start_date' => date('Y-m-d', strtotime($data['courses_start_date'][$key]))
                    ];
                    $short_course = ShortCourse::create($entry);
                    if (!$short_course) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Languages
            foreach ($request->ll_lang_id as $key => $ll_lang) {
                if (!empty($ll_lang)) {
                    $data = [
                        'll_emp_id' => $emp_id,
                        'll_lang_id' => $ll_lang,
                        'll_read' => $request->ll_read[$key],
                        'll_write' => $request->ll_write[$key],
                        'll_listen' => $request->ll_listen[$key],
                        'll_speak' => $request->ll_speak[$key],
                    ];

                    $language = LanguageLevel::create($data);
                    if (!$language) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Family status: Father
            if ($request->has('f_full_name')) {
                if ($request->get('f_full_name') != '') {
                    $data['f_emp_id'] = $emp_id;
                    $father = Father::create($data);
                    if (!$father) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Family status: Mother
            if ($request->has('m_full_name')) {
                if ($request->get('m_full_name') != '') {
                    $data['m_emp_id'] = $emp_id;
                    $mother = Mother::create($data);
                    if (!$mother) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Family status: Siblings
            foreach ($request->sib_full_name as $key => $name) {
                if (!empty($name)) {
                    $entry = [
                        'sib_emp_id' => $emp_id,
                        'sib_full_name' => $name,
                        'sib_fn_en' => $request->sib_fn_en[$key],
                        'sib_dob' => $request->sib_dob[$key],
                        'sib_gender' => $request->sib_gender[$key],
                        'sib_job' => $request->sib_job[$key]
                    ];
                    $sibling = Sibling::create($entry);
                    if (!$sibling) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            //Spouse
            if ($request->has('sp_full_name')) {
                if ($request->get('sp_full_name') != '') {
                    $data['sp_emp_id'] = $emp_id;
                    $spouse = Spouse::create($data);
                    if (!$spouse) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }
//            ///Family Status: Children
            foreach ($request->child_full_name as $key => $child_full_name) {
                if (!empty($name)) {
                    $entry = [
                        'child_emp_id' => $emp_id,
                        'child_full_name' => $child_full_name,
                        'child_fn_en' => $request->child_fn_en[$key],
                        'child_dob' => $request->child_dob[$key],
                        'child_gender' => $request->child_gender[$key],
                        'child_job' => $request->child_job[$key],
                        'child_subsidy' => $request->child_subsidy[$key],
                    ];
                    $children = Children::create($entry);
                    if (!$children) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }

            if (!$employer) {
                DB::rollbackTransaction();
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request');
            }
        } catch (ErrorException $errorException) {

        }
        DB::commit();
        return redirect()->route('admin.managements.employers.index')->with('success', 'Employer successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "បង្ហាញមើលបុគ្គលិក";
        $employer = Employer::find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        return view('admin.employers.show', compact('employer', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $title = "កែប្រែបុគ្គលិកចាស់";
        $employer = Employer::with('firstStateJob')->with('currentJob')
            ->with('addOnCurrentPosition')->with('educationLevel')
            ->with('languageLevel')->with('mother')->with('father')
            ->with('siblings')
            ->find($id);
        $marital_status = Employer::marital_status();
        $ministry = Ministry::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $occupation = Occupation::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $department = Department::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $department_unit = DepartmentUnit::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $frame = Frame::where('status', 1)->orderBy('name')->pluck('name', 'id')->all();
        $office = Office::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $types = AwardPunishment::types();
        $language = Language::where('status', 1)->orderBy('name')->pluck('name', 'id');
        $can_level = LanguageLevel::level();
        $gender = Employer::gender();
        $subsidy = Employer::subsidy();
        $status = Employer::status();

        //if (empty($employer->firstStateJob)) {
        //  return view('admin.employers.edit', compact('employer', 'can_level', 'language', 'types', 'marital_status', 'ministry', 'occupation', 'department', 'department_unit', 'frame', 'office'))->with('error', 'Employer not found');
        //}

        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'សមាជិកពុំមាននៅក្នងប្រព័ន្ធនេះទេ។');
        }
        return view('admin.employers.edit',
            compact('employer', 'subsidy', 'title', 'gender', 'status',
                'marital_status', 'can_level', 'language',
                'types', 'ministry', 'occupation', 'department',
                'department_unit', 'frame', 'office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $employer = Employer::with('firstStateJob')->with('currentJob')
            ->with('addOnCurrentPosition')->with('educationLevel')
            ->with('languageLevel')->with('mother')->with('father')
            ->with('siblings')->with('children')->with('jobHistoryPrivatePublic')
            ->with('degree_specializes')->with('general_educations')
            ->find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'សមាជិកពុំមាននៅក្នងប្រព័ន្ធនេះទេ។');
        }
        $validator = Validator::make($data = $request->all(), Employer::rule($id), Employer::messages());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please fill your missing field');
        }
        try {
            DB::beginTransaction();
            $passport_expired_date = date('Y-m-d', strtotime($request->passport_expired_date));
            $data['passport_expired_date'] = $passport_expired_date;
            $id_card_expired = date('Y-m-d', strtotime($request->id_card_expired));
            $data['id_card_expired'] = $id_card_expired;
            $dob = date('Y-m-d', strtotime($request->dob));
            $data['dob'] = $dob;
            $start_date = date('Y-m-d', strtotime($request->start_date));
            $data['start_date'] = $start_date;

            //First State Job
            $start_date = date('Y-m-d', strtotime($request->fsj_start_date));
            $data['fsj_start_date'] = $start_date;
            $fsj_permanent_staff_date = date('Y-m-d', strtotime($request->fsj_permanent_staff_date));
            $data['fsj_permanent_staff_date'] = $fsj_permanent_staff_date;
            if (!empty($employer->firstStateJob)) {
                if ($request->has('fsj_frame_id') || $request->has('fsj_occupation_id') || $request->has('fsj_ministry_id')) {
                    $fsj = $employer->firstStateJob->update($data);
                    if (!$fsj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            } else {
                $data['fsj_emp_id'] = $employer->id;
                if ($request->has('fsj_frame_id') || $request->has('fsj_occupation_id') || $request->has('fsj_ministry_id')) {
                    $fsj = FirstStateJob::create($data);
                    if (!$fsj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            }

            //CurrentJob
            $cjs_last_date_got_promoted = date('Y-m-d', strtotime($request->cjs_last_date_got_promoted));
            $data['cjs_last_date_got_promoted'] = $cjs_last_date_got_promoted;
            $cjs_last_date_promoted = date('Y-m-d', strtotime($request->cjs_last_date_promoted));
            $data['cjs_last_date_promoted'] = $cjs_last_date_promoted;
            if (!empty($employer->currentJob)) {
                if ($request->has('cjs_frame_id') || $request->has('cjs_occupation_id')
                    || $request->has('cjs_department_id') || $request->has('cjs_department_unit_id')
                ) {
                    $cjs = $employer->currentJob->update($data);
                    if (!$cjs) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            } else {
                if ($request->has('cjs_frame_id') || $request->has('cjs_occupation_id')
                    || $request->has('cjs_department_id') || $request->has('cjs_department_unit_id')
                ) {
                    $data['cjs_emp_id'] = $employer->id;
                    $cjs = CurrentJobStatus::create($data);
                    if (!$cjs) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            }

            //Addon Current Position
            $acp_start_date = date('Y-m-d', strtotime($request->acp_start_date));
            $data['acp_start_date'] = $acp_start_date;
            if (!empty($employer->addOnCurrentPosition)) {
                if ($request->has('acp_start_date') || $request->has('acp_position')
                    || $request->has('acp_equal_position') || $request->has('acp_department')
                ) {
                    $validator = Validator::make($data, AddonCurrentPosition::rules(), AddonCurrentPosition::messages());
                    if ($validator->fails()) {
                        return redirect()->back()->withInput()->withErrors($validator);
                    }
                    $acp = $employer->addOnCurrentPosition->update($data);
                    if (!$acp) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            } else {
                if ($request->has('acp_start_date') || $request->has('acp_position')
                    || $request->has('acp_equal_position') || $request->has('acp_department')
                ) {
                    $validator = Validator::make($data, AddonCurrentPosition::rules(), AddonCurrentPosition::messages());
                    if ($validator->fails()) {
                        return redirect()->back()->withInput()->withErrors($validator);
                    }
                    $data['acp_emp_id'] = $employer->id;
                    $acp = AddonCurrentPosition::create($data);
                    if (!$acp) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now');
                    }
                }
            }

            //Out of Frame
            if (count($employer->outFrameNoSalary) >= 1) {
                $out_frame = OutFrameNoSalary::with('employer')->where('fn_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($out_frame as $frame) {
                    if (!empty($frame)) {
                        $frame->fn_department = $data['fn_department'][$i];
                        $frame->fn_start_date = date('Y-m-d', strtotime($data['fn_start_date'][$i]));
                        $frame->fn_end_date = date('Y-m-d', strtotime($data['fn_end_date'][$i]));
                        $of = $frame->save();
                        $i++;
                        if (!$of) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->fn_department as $key => $department) {
                    if (!empty($department)) {
                        $entry = [
                            'fn_emp_id' => $employer->id,
                            'fn_department' => $department,
                            'fn_start_date' => date('Y-m-d', strtotime($request->fn_start_date[$key])),
                            'fn_end_date' => date('Y-m-d', strtotime($request->fn_end_date[$key])),
                        ];
                        $of = OutFrameNoSalary::create($entry);
                        if (!$of) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //No Salary status
            if (count($employer->noSalaryStatus) >= 1) {
                $nss = NoSalaryStatus::with('employer')->where('nss_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($nss as $ns) {
                    if (!empty($ns)) {
                        $ns->nss_department = $data['nss_department'][$i];
                        $ns->nss_start_date = date('Y-m-d', strtotime($data['nss_start_date'][$i]));
                        $ns->nss_end_date = date('Y-m-d', strtotime($data['nss_end_date'][$i]));
                        $nss = $ns->save();
                        $i++;
                        if (!$nss) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->nss_department as $key => $department) {
                    if (!empty($department)) {
                        $entry = [
                            'nss_emp_id' => $employer->id,
                            'nss_department' => $department,
                            $nss_start_date = date('Y-m-d', strtotime($request->nss_start_date[$key])),
                            'nss_start_date' => $nss_start_date,
                            $nss_end_date = date('Y-m-d', strtotime($request->nss_end_date[$key])),
                            'nss_end_date' => $nss_end_date,
                        ];
                        $nss = NoSalaryStatus::create($entry);
                        if (!$nss) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //History of Public job
            if (count($employer->jobHistoryPrivatePublic) >= 1) {
                $phj = JobsHistory::with('employer')->where('phj_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($phj as $history) {
                    if (!empty($history)) {
                        $history->phj_ministry_institute = $data['phj_ministry_institute'][$i];
                        $history->phj_occupation = $data['phj_occupation'][$i];
                        $history->phj_department = $data['phj_department'][$i];
                        $history->phj_others = $data['phj_others'][$i];
                        $history->phj_start_date = date('Y-m-d', strtotime($data['phj_start_date'][$i]));
                        $history->phj_end_date = date('Y-m-d', strtotime($data['phj_end_date'][$i]));
                        $job = $history->save();
                        $i++;
                        if (!$job) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->phj_ministry_institute as $key => $ministry) {
                    if (!empty($ministry)) {
                        $entry = [
                            'phj_emp_id' => $employer->id,
                            'phj_ministry_institute' => $ministry,
                            'phj_occupation' => $request->phj_occupation[$key],
                            'phj_department' => $request->phj_department[$key],
                            'phj_type' => $request->phj_type[$key],
                            'phj_others' => $request->phj_others[$key],
                            $phj_start_date = date('Y-m-d', strtotime($request->phj_start_date[$key])),
                            'phj_start_date' => $phj_start_date,
                            $phj_end_date = date('Y-m-d', strtotime($request->phj_end_date[$key])),
                            'phj_end_date' => $phj_end_date
                        ];
                        $phj = JobsHistory::create($entry);
                        if (!$phj) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //History of private job
            if (count($employer->historyPrivateJob) >= 1) {
                $history_private_jobs = HistoryPrivateJob::with('employer')->where('hpj_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($history_private_jobs as $history_private_job) {
                    if (!empty($history_private_job)) {
                        $history_private_job->hpj_ministry_institute = $data['hpj_ministry_institute'][$i];
                        $history_private_job->hpj_occupation = $data['hpj_occupation'][$i];
                        $history_private_job->hpj_others = $data['hpj_others'][$i];
                        $history_private_job->hpj_start_date = date('Y-m-d', strtotime($data['hpj_start_date'][$i]));
                        $history_private_job->hpj_end_date = date('Y-m-d', strtotime($data['hpj_end_date'][$i]));
                        $history_private_job = $history_private_job->save();
                        $i++;
                        if (!$history_private_job) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->hpj_ministry_institute as $key => $ministry_institute) {
                    if (!empty($ministry_institute)) {
                        $entry = [
                            'hpj_emp_id' => $employer->id,
                            'hpj_ministry_institute' => $ministry_institute,
                            'hpj_occupation' => $request->hpj_occupation[$key],
                            'hpj_others' => $request->hpj_others[$key],
                            'hpj_start_date' => date('Y-m-d', strtotime($request->hpj_start_date[$key])),
                            'hpj_end_date' => date('Y-m-d', strtotime($request->hpj_end_date[$key])),
                        ];
                        $hpj = HistoryPrivateJob::create($entry);
                        if (!$hpj) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Punishment
            if (count($employer->punishments) >= 1) {
                $punishments = Punishment::with('employer')->where('pun_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($punishments as $punishment) {
                    if (!empty($punishment)) {
                        $punishment->pun_doc_number = $data['pun_doc_number'][$i];
                        $punishment->pun_department = $data['pun_department'][$i];
                        $punishment->pun_punish_type = $data['pun_punish_type'][$i];
                        $punishment->pun_description = $data['pun_description'][$i];
                        $punishment->pun_published_date = date('Y-m-d', strtotime($data['pun_published_date'][$i]));
                        $punishment = $punishment->save();
                        $i++;
                        if (!$punishment) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->pun_doc_number as $key => $doc_number) {
                    if (!empty($doc_number)) {
                        $entry = [
                            'pun_emp_id' => $employer->id,
                            'pun_doc_number' => $doc_number,
                            'pun_department' => $request->pun_department[$key],
                            'pun_punish_type' => $request->pun_punish_type[$key],
                            'pun_description' => $request->pun_description[$key],
                            $pun_published_date = date('Y-m-d', strtotime($request->pun_published_date[$key])),
                            'pun_published_date' => $pun_published_date
                        ];
                        $punishment = Punishment::create($entry);
                        if (!$punishment) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Awards
            if (count($employer->awards) >= 1) {
                $awards = Award::with('employer')->where('aw_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($awards as $award) {
                    if (!empty($award)) {
                        $award->aw_doc_number = $data['aw_doc_number'][$i];
                        $award->aw_department = $data['aw_department'][$i];
                        $award->aw_type = $data['aw_type'][$i];
                        $award->aw_description = $data['aw_description'][$i];
                        $award->aw_published_date = date('Y-m-d', strtotime($data['aw_published_date'][$i]));
                        $award = $award->save();
                        $i++;
                        if (!$award) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->aw_doc_number as $key => $doc_number) {
                    if (!empty($doc_number)) {
                        $entry = [
                            'aw_emp_id' => $employer->id,
                            'aw_doc_number' => $doc_number,
                            'aw_department' => $request->aw_department[$key],
                            'aw_type' => $request->aw_type[$key],
                            'aw_description' => $request->aw_description[$key],
                            $aw_published_date = date('Y-m-d', strtotime($request->aw_published_date[$key])),
                            'aw_published_date' => $aw_published_date
                        ];
                        $award = Award::create($entry);
                        if (!$award) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //General and Temporary Educations
            if (count($employer->general_educations) >= 1) {
                $general_educations = GeneralEducation::with('employer')->where('ge_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($general_educations as $general_education) {
                    if (!empty($general_education)) {
                        $general_education->ge_level_edu = $data['ge_level_edu'][$i];
                        $general_education->ge_degree = $data['ge_degree'][$i];
                        $general_education->ge_school = $data['ge_school'][$i];
                        $general_education->ge_start_date = date('Y-m-d', strtotime($request->ge_start_date[$i]));
                        $general_education->ge_country = $data['ge_country'][$i];
                        $general_education->ge_end_date = date('Y-m-d', strtotime($request->ge_end_date[$i]));
                        $general_education = $general_education->save();
                        $i++;
                        if (!$general_education) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->ge_level_edu as $key => $level) {
                    if (!empty($level)) {
                        $entry = [
                            'ge_emp_id' => $employer->id,
                            'ge_level_edu' => $level,
                            'ge_degree' => $data['ge_degree'][$key],
                            'ge_school' => $data['ge_school'][$key],
                            'ge_country' => $data['ge_country'][$key],
                            'ge_end_date' => date('Y-m-d', strtotime($data['ge_end_date'][$key])),
                            'ge_start_date' => date('Y-m-d', strtotime($data['ge_start_date'][$key]))
                        ];
                        $general_education = GeneralEducation::create($entry);
                        if (!$general_education) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Degree Specialize
            if (count($employer->degree_specializes) >= 1) {
                $degree_specializes = DegreeSpecialize::with('employer')->where('ds_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($degree_specializes as $degree_specialize) {
                    if (!empty($degree_specialize)) {
                        $degree_specialize->ds_level_edu = $data['ds_level_edu'][$i];
                        $degree_specialize->ds_degree = $data['ds_degree'][$i];
                        $degree_specialize->ds_school = $data['ds_school'][$i];
                        $degree_specialize->ds_start_date = date('Y-m-d', strtotime($request->ds_start_date[$i]));
                        $degree_specialize->ds_country = $data['ds_country'][$i];
                        $degree_specialize->ds_end_date = date('Y-m-d', strtotime($request->ds_end_date[$i]));
                        $degree_specialize = $degree_specialize->save();
                        $i++;
                        if (!$degree_specialize) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->ds_level_edu as $key => $level) {
                    if (!empty($level)) {
                        $entry = [
                            'ds_emp_id' => $employer->id,
                            'ds_level_edu' => $level,
                            'ds_degree' => $data['ds_degree'][$key],
                            'ds_school' => $data['ds_school'][$key],
                            'ds_country' => $data['ds_country'][$key],
                            'ds_end_date' => date('Y-m-d', strtotime($data['ds_end_date'][$key])),
                            'ds_start_date' => date('Y-m-d', strtotime($data['ds_start_date'][$key]))
                        ];
                        $degree_specialize = DegreeSpecialize::create($entry);
                        if (!$degree_specialize) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Short Courses
            if (count($employer->short_courses) >= 1) {
                $short_courses = ShortCourse::with('employer')->where('courses_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($short_courses as $short_course) {
                    if (!empty($short_course)) {
                        $short_course->courses_level_edu = $data['courses_level_edu'][$i];
                        $short_course->courses_degree = $data['courses_degree'][$i];
                        $short_course->courses_school = $data['courses_school'][$i];
                        $short_course->courses_start_date = date('Y-m-d', strtotime($request->courses_start_date[$i]));
                        $short_course->courses_country = $data['courses_country'][$i];
                        $short_course->courses_end_date = date('Y-m-d', strtotime($request->courses_end_date[$i]));
                        $short_course = $short_course->save();
                        $i++;
                        if (!$short_course) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->courses_level_edu as $key => $level) {
                    if (!empty($level)) {
                        $entry = [
                            'courses_emp_id' => $employer->id,
                            'courses_level_edu' => $level,
                            'courses_degree' => $data['courses_degree'][$key],
                            'courses_school' => $data['courses_school'][$key],
                            'courses_country' => $data['courses_country'][$key],
                            'courses_end_date' => date('Y-m-d', strtotime($data['courses_end_date'][$key])),
                            'courses_start_date' => date('Y-m-d', strtotime($data['courses_start_date'][$key]))
                        ];
                        $short_course = ShortCourse::create($entry);
                        if (!$short_course) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Language level
            if (count($employer->languageLevel) >= 1) {
                $languages = LanguageLevel::with('employer')->where('ll_emp_id', $employer->id)->get();
                $i = 0;
                foreach ($languages as $language) {
                    if (!empty($language)) {
                        $language->ll_lang_id = $data['ll_lang_id'][$i];
                        $language->ll_read = $data['ll_read'][$i];
                        $language->ll_write = $data['ll_write'][$i];
                        $language->ll_listen = $data['ll_listen'][$i];
                        $language->ll_speak = $data['ll_speak'][$i];
                        $language = $language->save();
                        $i++;
                        if (!$language) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->ll_lang_id as $key => $ll_lang) {
                    if (!empty($ll_lang)) {
                        $data = [
                            'll_emp_id' => $employer->id,
                            'll_lang_id' => $ll_lang,
                            'll_read' => $request->ll_read[$key],
                            'll_write' => $request->ll_write[$key],
                            'll_listen' => $request->ll_listen[$key],
                            'll_speak' => $request->ll_speak[$key],
                        ];

                        $language = LanguageLevel::create($data);
                        if (!$language) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Family Status :: Father
            $f_dob = date('Y-m-d', strtotime($request->f_dob));
            $data['f_dob'] = $f_dob;
            if (!empty($employer->father)) {
                if ($request->has('f_full_name')) {
                    if ($request->get('f_full_name') != '') {
                        $father = $employer->father->update($data);
                        if (!$father) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                if ($request->has('f_full_name')) {
                    if ($request->get('f_full_name') != '') {
                        $data['f_emp_id'] = $employer->id;
                        $father = Father::create($data);
                        if (!$father) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Family Status :: Mother
            $m_dob = date('Y-m-d', strtotime($request->m_dob));
            $data['m_dob'] = $m_dob;
            if (!empty($employer->mother)) {
                if ($request->has('m_full_name')) {
                    if ($request->get('m_full_name') != '') {
                        $mother = $employer->mother->update($data);
                        if (!$mother) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                if ($request->has('m_full_name')) {
                    if ($request->get('m_full_name') != '') {
                        $data['m_emp_id'] = $employer->id;
                        $mother = Mother::create($data);
                        if (!$mother) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Family Status :: Spouse
            $sp_dob = date('Y-m-d', strtotime($request->sp_dob));
            $data['sp_dob'] = $sp_dob;
            if (!empty($employer->spouse)) {
                if ($request->has('sp_full_name')) {
                    if ($request->get('sp_full_name') != '') {
                        $spouse = $employer->spouse->update($data);
                        if (!$spouse) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                if ($request->has('sp_full_name')) {
                    if ($request->get('sp_full_name') != '') {
                        $data['sp_emp_id'] = $employer->id;
                        $spouse = Spouse::create($data);
                        if (!$spouse) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Family Status :: Siblings
            if (count($employer->siblings) >= 1) {
                $siblings = Sibling::with('employer')->where('sib_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($siblings as $sibling) {
                    if (!empty($sibling)) {
                        $sibling->sib_full_name = $data['sib_full_name'][$i];
                        $sibling->sib_fn_en = $data['sib_fn_en'][$i];
                        //$sibling->sib_dob = $data['sib_dob'][$i];
                        $sibling->sib_gender = $data['sib_gender'][$i];
                        $sibling->sib_job = $data['sib_job'][$i];
                        $sibling->sib_dob = date('Y-m-d', strtotime($data['sib_dob'][$i]));
                        $sibling = $sibling->save();
                        $i++;
                        if (!$sibling) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->sib_full_name as $key => $name) {
                    if (!empty($name)) {
                        $entry = [
                            'sib_emp_id' => $employer->id,
                            'sib_full_name' => $name,
                            'sib_fn_en' => $request->sib_fn_en[$key],
                            'sib_dob' => $request->sib_dob[$key],
                            'sib_gender' => $request->sib_gender[$key],
                            'sib_job' => $request->sib_job[$key]
                        ];
                        $sibling = Sibling::create($entry);
                        if (!$sibling) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Family Status :: Children
            if (count($employer->children) >= 1) {
                $children = Children::with('employer')->where('child_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($children as $child) {
                    if (!empty($child)) {
                        $child->child_full_name = $data['child_full_name'][$i];
                        $child->child_fn_en = $data['child_fn_en'][$i];
                        //$child->child_dob = $data['child_dob'][$i];
                        $child->child_gender = $data['child_gender'][$i];
                        $child->child_job = $data['child_job'][$i];
                        $child->child_dob = date('Y-m-d', strtotime($data['child_dob'][$i]));
                        $child->child_subsidy = $data['child_subsidy'][$i];
                        $child = $child->save();
                        $i++;
                        if (!$child) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            } else {
                foreach ($request->child_full_name as $key => $child_full_name) {
                    if (!empty($child_full_name)) {
                        $entry = [
                            'child_emp_id' => $employer->id,
                            'child_full_name' => $child_full_name,
                            'child_fn_en' => $request->child_fn_en[$key],
                            'child_dob' => $request->child_dob[$key],
                            'child_gender' => $request->child_gender[$key],
                            'child_job' => $request->child_job[$key],
                            'child_subsidy' => $request->child_subsidy[$key],
                        ];
                        $children = Children::create($entry);
                        if (!$children) {
                            DB::rollbackTransaction();
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                        }
                    }
                }
            }

            //Do Update Employer details
            $employee = $employer->update($data);
            if (!$employee) {
                DB::rollbackTransaction();
                return redirect()->back()->with('error', 'Unable to process your request right now');
            }
        } catch (ErrorException $errorException) {

        }
        DB::commit();
        return redirect()->route('admin.managements.employers.index')->with('success', "បុគ្គលិកមានឈ្មោះ: $employer->full_name បានកែប្រែដោយជោគជ័យ។");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$employer = Employer::find($id);
        $employer = Employer::with('firstStateJob')->with('currentJob')->with('addOnCurrentPosition')->with('educationLevel')->find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $employer->delete();
        return redirect()->route('admin.managements.employers.index')->with('success', "Employer name $employer->full_name was deleted successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function permanently_delete($id)
    {
        $employer = Employer::with('firstStateJob')->with('currentJob')->with('addOnCurrentPosition')->with('educationLevel')->findOrFail($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $employer->forceDelete();
        return redirect()->route('admin.managements.employers.index')->with('success', "Employer was deleted successfully");
    }

}