<?php

namespace App\Http\Controllers\Admin\Employers;

use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Exception\ErrorException;
use Validator;
use DB;

class EmployerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::orderBy('name', 'ASC')->paginate(5);
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
        $employer = Employer::find($id);
        if (empty($employer)) {
            return redirect()->route('admin.managements.employers.index')->with('error', 'Employer not found');
        }
        $validator = Validator::make($data = $request->all(), Employer::rules(), Employer::messages());
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
