<?php

namespace App\Http\Controllers\Admin\Employers;

use App\Models\AddonCurrentPosition;
use App\Models\AwardPunishment;
use App\Models\CurrentJobStatus;
use App\Models\Department;
use App\Models\DepartmentUnit;
use App\Models\EducationLevel;
use App\Models\Employer;
use App\Models\FirstStateJob;
use App\Models\Frame;
use App\Models\JobsHistory;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\Ministry;
use App\Models\Occupation;
use App\Models\Office;
use App\Models\OutFrameNoSalary;
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
        $employers = Employer::with('firstStateJob')->orderBy('name', 'ASC')->paginate(15);
        return view('admin.employers.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        return view('admin.employers.create', compact('marital_status', 'can_level', 'language', 'ministry', 'types', 'occupation', 'department', 'department_unit', 'frame', 'office'));
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
        $employer = Employer::find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        return view('admin.employers.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $employer = Employer::with('firstStateJob')->with('currentJob')
            ->with('addOnCurrentPosition')->with('educationLevel')
            ->with('languageLevel')
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
        if (empty($employer->firstStateJob)) {
            return view('admin.employers.edit', compact('employer', 'can_level', 'language', 'types', 'marital_status', 'ministry', 'occupation', 'department', 'department_unit', 'frame', 'office'))->with('error', 'Employer not found');
        }
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        return view('admin.employers.edit', compact('employer', 'languages', 'marital_status', 'can_level', 'language', 'types', 'ministry', 'occupation', 'department', 'department_unit', 'frame', 'office'));
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
            ->with('languageLevel')
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

            //OutFrameNoSalary
            $fn_start_date = date('Y-m-d', strtotime($request->fn_start_date));
            $data['fn_start_date'] = $fn_start_date;
            $fn_end_date = date('Y-m-d', strtotime($request->fn_end_date));
            $data['fn_end_date'] = $fn_end_date;
            if (!empty($employer->outFrameNoSalary)) {
                $ofns = $employer->outFrameNoSalary->update($data);
                if (!$ofns) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['fn_emp_id'] = $employer->id;
                $ofns = OutFrameNoSalary::create($data);
                if (!$ofns) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //jobHistoryPrivatePublic
            $phj_start_date = date('Y-m-d', strtotime($request->phj_start_date));
            $data['phj_start_date'] = $phj_start_date;
            $phj_end_date = date('Y-m-d', strtotime($request->phj_end_date));
            $data['phj_end_date'] = $phj_end_date;
            if (!empty($employer->jobHistoryPrivatePublic)) {
                $phj = $employer->jobHistoryPrivatePublic->update($data);
                if (!$phj) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['phj_emp_id'] = $employer->id;
                $phj = JobsHistory::create($data);
                if (!$phj) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            }

            //Award and Punishment
            $ap_published_date = date('Y-m-d', strtotime($request->ap_published_date));
            $data['ap_published_date'] = $ap_published_date;
            if (!empty($employer->awardPunishment)) {
                $ap = $employer->awardPunishment->update($data);
                if (!$ap) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['ap_emp_id'] = $employer->id;
                $ap = AwardPunishment::create($data);
                if (!$ap) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
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
                    $update_language = LanguageLevel::find($data['langIds'][$lang]);
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

            //Family Status
            if (!empty($employer->wifeHusbandParent)) {
                $whp = $employer->wifeHusbandParent->update($data);
                if (!$whp) {
                    DB::rollbackTransaction();
                    return redirect()->back()->with('error', 'Unable to process your request right now, Please contact system admin');
                }
            } else {
                $data['whp_emp_id'] = $employer->id;
                $whp = WifeHusbandParents::create($data);
                if (!$whp) {
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
