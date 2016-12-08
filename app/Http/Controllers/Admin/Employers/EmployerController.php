<?php

namespace App\Http\Controllers\Admin\Employers;

use App\Models\AddonCurrentPosition;
use App\Models\Award;
use App\Models\AwardPunishment;
use App\Models\Children;
use App\Models\CurrentJobStatus;
use App\Models\Department;
use App\Models\DepartmentUnit;
use App\Models\EducationLevel;
use App\Models\Employer;
use App\Models\Father;
use App\Models\FirstStateJob;
use App\Models\Frame;
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
use App\Models\Sibling;
use App\Models\Spouse;
use App\Models\WifeHusbandParents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Exception\ErrorException;
use Validator;
use DB;

class EmployerController extends Controller
{
    /**
     * EmployerController constructor.
     */
    protected $firstStateJob;
    protected $employer;

    public function __construct(Employer $employer, FirstStateJob $stateJob)
    {
        $this->middleware('auth');
        $this->employer = $employer;
        $this->firstStateJob = $stateJob;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "គ្រប់គ្រង បុគ្គលិក";
        $employers = Employer::with('firstStateJob')->orderBy('name', 'ASC')->paginate(15);
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
            $this->firstStateJob->fsj_emp_id = $this->employer->id;
            $employer = Employer::create($data);
            $this->firstStateJob->save();
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
        $languages = LanguageLevel::where('ll_emp_id', $employer->id)->get();
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
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        return view('admin.employers.edit',
            compact('employer', 'subsidy', 'title', 'gender', 'status',
                'languages', 'marital_status', 'can_level', 'language',
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
            ->find($id);
//        $employer = Employer::with('firstStateJob')->join('first_state_jobs', 'users.id', '=', 'first_state_jobs.emp_id')->where('id', $id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
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
            if (!empty($employer->firstStateJob)) {
                $fsj = $employer->firstStateJob->update($data);
                if (!$fsj) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now');
                }
            } else {
                $data['fsj_emp_id'] = $employer->id;
                $fsj = FirstStateJob::create($data);
                if (!$fsj) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now');
                }
            }

            //CurrentJob
            $cjs_last_date_got_promoted = date('Y-m-d', strtotime($request->cjs_last_date_got_promoted));
            $data['cjs_last_date_got_promoted'] = $cjs_last_date_got_promoted;
            $cjs_last_date_promoted = date('Y-m-d', strtotime($request->cjs_last_date_promoted));
            $data['cjs_last_date_promoted'] = $cjs_last_date_promoted;
            if (!empty($employer->currentJob)) {
                $cjs = $employer->currentJob->update($data);
                if (!$cjs) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now');
                }
            } else {
                $data['cjs_emp_id'] = $employer->id;
                $cjs = CurrentJobStatus::create($data);
                if (!$cjs) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now');
                }
            }

            //Addon Current Position
            $acp_start_date = date('Y-m-d', strtotime($request->acp_start_date));
            $data['acp_start_date'] = $acp_start_date;
            if (!empty($employer->addOnCurrentPosition)) {
                $validator = Validator::make($data, AwardPunishment::rules(), AwardPunishment::messages());
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                $acp = $employer->addOnCurrentPosition->update($data);
                if (!$acp) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now');
                }
            } else {
                $validator = Validator::make($data, AwardPunishment::rules(), AwardPunishment::messages());
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

            //Out of Frame
            if (count($employer->outFrameNoSalary) >= 1) {
                $out_frame = OutFrameNoSalary::with('employer')->where('fn_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($out_frame as $frame) {
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
            } else {
                foreach ($request->fn_department as $key => $department) {
                    $entry = [
                        'fn_emp_id' => $employer->id,
                        'fn_department' => $department,
                        $fn_start_date = date('Y-m-d', strtotime($request->fn_start_date[$key])),
                        'fn_start_date' => $fn_start_date,
                        $fn_end_date = date('Y-m-d', strtotime($request->fn_end_date[$key])),
                        'fn_end_date' => $fn_end_date,
                    ];
                    $of = OutFrameNoSalary::create($entry);
                    if (!$of) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }

            //No Salary status
            if (count($employer->noSalaryStatus) >= 1) {
                $nss = NoSalaryStatus::with('employer')->where('nss_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($nss as $ns) {
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
            } else {
                foreach ($request->nss_department as $key => $department) {
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

            //jobHistoryPrivatePublic
            if (count($employer->jobHistoryPrivatePublic) >= 1) {
                $phj = JobsHistory::with('employer')->where('phj_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($phj as $history) {
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
            } else {
                foreach ($request->phj_ministry_institute as $key => $ministry) {
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

            //History of private job
            if (count($employer->historyPrivateJob) >= 1) {
                $hpj = HistoryPrivateJob::with('employer')->where('hpj_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($hpj as $m) {
                    $m->hpj_ministry_institute = $data['hpj_ministry_institute'][$i];
                    $m->hpj_occupation = $data['hpj_occupation'][$i];
                    $m->hpj_others = $data['hpj_others'][$i];
                    $m->hpj_start_date = date('Y-m-d', strtotime($data['hpj_start_date'][$i]));
                    $m->hpj_end_date = date('Y-m-d', strtotime($data['hpj_end_date'][$i]));
                    $hpj = $m->save();
                    $i++;
                    if (!$hpj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            } else {
                foreach ($request->hpj_ministry_institute as $key => $ministry_institute) {
                    $entry = [
                        'hpj_emp_id' => $employer->id,
                        'hpj_ministry_institute' => $ministry_institute,
                        'hpj_occupation' => $request->hpj_occupation[$key],
                        'hpj_others' => $request->hpj_others[$key],
                        $hpj_start_date = date('Y-m-d', strtotime($request->hpj_start_date[$key])),
                        'hpj_start_date' => $hpj_start_date,
                        $hpj_end_date = date('Y-m-d', strtotime($request->hpj_end_date[$key])),
                        'hpj_end_date' => $hpj_end_date
                    ];
                    $hpj = HistoryPrivateJob::create($entry);
                    if (!$hpj) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }

            //Punishment
            if (count($employer->punishments) >= 1) {
                $punishments = Punishment::with('employer')->where('pun_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($punishments as $punishment) {
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
            } else {
                foreach ($request->pun_doc_number as $key => $doc_number) {
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

            //Awards
            if (count($employer->awards) >= 1) {
                $awards = Award::with('employer')->where('aw_emp_id', '=', $employer->id)->get();
                $i = 0;
                foreach ($awards as $award) {
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
            } else {
                foreach ($request->aw_doc_number as $key => $doc_number) {
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

            //General and Temporary Educations
            $el_start_date = date('Y-m-d', strtotime($request->el_start_date));
            $data['el_start_date'] = $el_start_date;
            $el_end_date = date('Y-m-d', strtotime($request->el_end_date));
            $data['el_end_date'] = $el_end_date;
            if (!empty($employer->educationLevel)) {
                $el = $employer->educationLevel->update($data);
                if (!$el) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['el_emp_id'] = $employer->id;
                $el = EducationLevel::create($data);
                if (!$el) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Language level
            if (!empty($employer->languageLevel)) {
                $language = LanguageLevel::where('ll_emp_id', $employer->id)->get();
                foreach ($language as $lang => $value) {
                    $update_language = LanguageLevel::with('employer')->find($data['langIds'][$lang]);
                    $update_language->ll_lang_id = $data['ll_lang_id_' . $value->ll_lang_id];
                    $update_language->ll_read = $data['ll_read_' . LanguageLevel::clean($value->ll_read)];
                    $update_language->ll_write = $data['ll_write_' . LanguageLevel::clean($value->ll_write)];
                    $update_language->ll_listen = $data['ll_listen_' . LanguageLevel::clean($value->ll_listen)];
                    $update_language->ll_speak = $data['ll_speak_' . LanguageLevel::clean($value->ll_speak)];
                    $el = $update_language->save();
                    if (!$el) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            } else {
                foreach ($request->ll_lang_id as $key => $n) {
                    $data = [
                        'll_emp_id' => $employer->id,
                        'll_lang_id' => $n,
                        'll_read' => $request->ll_read[$key],
                        'll_write' => $request->ll_write[$key],
                        'll_listen' => $request->ll_listen[$key],
                        'll_speak' => $request->ll_speak[$key],
                    ];

                    $el = LanguageLevel::create($data);
                    if (!$el) {
                        DB::rollbackTransaction();
                        return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                    }
                }
            }

            //Family Status :: Father
            $f_dob = date('Y-m-d', strtotime($request->f_dob));
            $data['f_dob'] = $f_dob;
            if (!empty($employer->father)) {
                $father = $employer->father->update($data);
                if (!$father) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['f_emp_id'] = $employer->id;
                $father = Father::create($data);
                if (!$father) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Family Status :: Mother
            $m_dob = date('Y-m-d', strtotime($request->m_dob));
            $data['m_dob'] = $m_dob;
            if (!empty($employer->mother)) {
                $mother = $employer->mother->update($data);
                if (!$mother) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['m_emp_id'] = $employer->id;
                $mother = Mother::create($data);
                if (!$mother) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Family Status :: Spouse
            $sp_dob = date('Y-m-d', strtotime($request->sp_dob));
            $data['sp_dob'] = $sp_dob;
            if (!empty($employer->spouse)) {
                $spouse = $employer->spouse->update($data);
                if (!$spouse) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['sp_emp_id'] = $employer->id;
                $spouse = Spouse::create($data);
                if (!$spouse) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Family Status :: Siblings
            $sib_dob = date('Y-m-d', strtotime($request->sib_dob));
            $data['sib_dob'] = $sib_dob;
            if (!empty($employer->siblings)) {
                $siblings = $employer->siblings->update($data);
                if (!$siblings) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['sib_emp_id'] = $employer->id;
                $siblings = Sibling::create($data);
                if (!$siblings) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Family Status :: Children
            $child_dob = date('Y-m-d', strtotime($request->child_dob));
            $data['child_dob'] = $child_dob;
            if (!empty($employer->children)) {
                $children = $employer->children->update($data);
                if (!$children) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['child_emp_id'] = $employer->id;
                $children = Children::create($data);
                if (!$children) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Do Update Employer details
            $employer = $employer->update($data);
            if (!$employer) {
                DB::rollbackTransaction();
                return redirect()->back()->with('error', 'Unable to process your request right now');
            }
        } catch (ErrorException $errorException) {

        }
        DB::commit();
        return redirect()->route('admin.managements.employers.index')->with('success', "Employer was successfully updated");

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
}
