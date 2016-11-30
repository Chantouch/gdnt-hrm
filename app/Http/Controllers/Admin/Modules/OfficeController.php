<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Models\DepartmentUnit;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Exception\ErrorException;
use Flash;
use DB;
use Validator;

class OfficeController extends Controller
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
        $offices = Office::with('departmentUnit')->paginate(10);
        return view('admin.modules.offices.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department_units = DepartmentUnit::with('department')->where('status', 1)->orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.modules.offices.create', compact('department_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Exception|ErrorException
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Office::rules(), Office::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your field maybe missing.');
            }
            $office = Office::create($data);
            if (!$office) {
                DB::rollbackTransaction();
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request.');
            }
        } catch (ErrorException $errorException) {
            return $errorException;
        }
        DB::commit();
        return redirect()->route('admin.modules.offices.index')->with('success', 'Office added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $office = Office::with('departmentUnit')->find($id);
        if (empty($office)) {
//            Flash::error('Office not found');
            return redirect()->route('admin.modules.offices.index')->with('error', 'Office not found');
        }
        return view('admin.modules.offices.show', compact('office'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department_units = DepartmentUnit::with('department')->where('status', 1)->orderBy('name', 'ASC')->pluck('name', 'id');
        $office = Office::with('departmentUnit')->find($id);
        if (empty($office)) {
            Flash::error('Office not found');
            return redirect()->route('admin.modules.offices.index')->with('error', 'Office not found');
        }
        return view('admin.modules.offices.edit', compact('office', 'department_units'));
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
        $office = Office::with('departmentUnit')->find($id);
        if (empty($office)) {
            Flash::error('Office not found');
            return redirect()->route('admin.modules.offices.index')->with('error', 'Office not found');
        }
        try {
            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Office::rules(), Office::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please check your missing field');
            }
            $office = $office->update($data);
            if (!$office) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request right now');
            }

        } catch (ErrorException $errorException) {

        }

        DB::commit();
        return redirect()->route('admin.modules.offices.index')->with('success', 'Office updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::with('departmentUnit')->find($id);
        if (empty($office)) {
            Flash::error('Office not found');
            return redirect()->route('admin.modules.offices.index')->with('error', 'Office not found');
        }
        $office->delete();
        return redirect()->route('admin.modules.offices.index')->with('success', 'Office successfully deleted');
    }
}
