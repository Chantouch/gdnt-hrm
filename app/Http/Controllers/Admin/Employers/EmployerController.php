<?php

namespace App\Http\Controllers\Admin\Employers;

use App\Models\Employer;
use App\Models\FirstStateJob;
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
        $employers = Employer::with('firstStateJob')->orderBy('name', 'ASC')->paginate(5);
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
        return view('admin.employers.create', compact('marital_status'));
    }


    public function storeEmp(Request $request)
    {
        DB::beginTransaction();
        $this->employer->full_name = $request->full_name;
        $this->employer->email = $request->email;
        $this->employer->emp_id = $request->emp_id;
        $this->employer->save();

        $this->firstStateJob->start_date = $request->start_date;
        $this->firstStateJob->department_unit_id = $request->department_unit_id;
        $this->firstStateJob->department_id = $request->department_id;
        $this->firstStateJob->ministry_id = $request->ministry_id;
        $this->firstStateJob->occupation_id = $request->occupation_id;
        $this->firstStateJob->office_id = $request->office_id;
        $this->firstStateJob->frame_id = $request->frame_id;
        $this->firstStateJob->emp_id = $this->employer->id;
        $this->firstStateJob->save();
        DB::commit();
        return redirect()->route('admin.managements.employers.index')->with('success', 'Employer successfully added');
    }

    public function editEmp($idEmp)
    {
        $employer = Employer::join('first_state_jobs', 'users.id', '=', 'first_state_jobs.emp_id')->find($idEmp);
//        $employer = Employer::with('firstStateJob')->find($idEmp);
//        $state_job = FirstStateJob::with('employer')->find($idJob);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $marital_status = Employer::marital_status();
        return view('admin.employers.edit', compact('employer', 'marital_status'));
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
            $employer = Employer::create($data);
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employer = Employer::find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $marital_status = Employer::marital_status();
        return view('admin.employers.edit', compact('employer', 'marital_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $employer = Employer::find($id);
        $employer = Employer::with('firstStateJob')->join('first_state_jobs', 'users.id', '=', 'first_state_jobs.emp_id')->where('id', $id);
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
        $employer = Employer::find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $employer->delete();
        return redirect()->route('admin.managements.employers.index')->with('success', "Employer name $employer->full_name was deleted successfully");
    }
}
