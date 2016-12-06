<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Models\Department;
use App\Models\Ministry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Exception\ErrorException;
use Validator;
use Flash;
use DB;

class DepartmentController extends Controller
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
        $title = "មើលអង្គភាពទាំងអស់";
        $departments = Department::with('departmentUnits')->paginate(10);
        return view('admin.modules.departments.index', compact('departments', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "បង្កើតអង្គភាពថ្មី";
        $ministry = Ministry::where('status', 1)->orderBy('name')->pluck('name', 'id');
        return view('admin.modules.departments.create', compact('ministry', 'title'));
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
            $validator = Validator::make($data = $request->all(), Department::rules(), Department::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Some fields maybe missing');
            }

            $department = Department::create($data);

            if (!$department) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request');
            }

        } catch (ErrorException $errorException) {
            return $errorException;
        }

        DB::commit();
        return redirect()->route('admin.modules.departments.index')->with('success', 'Department has been added to system');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "បង្ហាញអង្គភាព";
        $ministry = Ministry::where('status', 1);
        $department = Department::with('departmentUnits')->findOrFail($id);
        return view('admin.modules.departments.show', compact('department', 'ministry', 'title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "កែរប្រែអង្គភាព";
        $ministry = Ministry::with('department')->where('status', 1)->orderBy('name')->pluck('name', 'id');
        $department = Department::with('departmentUnits')->findOrFail($id);
        return view('admin.modules.departments.edit', compact('department', 'ministry', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Exception|ErrorException
     */
    public function update(Request $request, $id)
    {
        $department = Department::with('departmentUnits')->findOrFail($id);
        try {

            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Department::rules(), Department::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please review your fields again');
            }

            $department = $department->update($data);

            if (!$department) {
                DB::rollbackTransaction();
                return redirect()->withInput()->with('error', 'Unable to process your request');
            }


        } catch (ErrorException $errorException) {
            return $errorException;
        }

        DB::commit();
        return redirect()->route('admin.modules.departments.index')->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::with('departmentUnits')->findOrFail($id);
        if (empty($department)) {
            Flash::error('Department not found');
            return redirect()->route('admin.modules.departments.index')->with('error', 'Department not found.');
        }

        $department->delete();

        return redirect()->route('admin.modules.departments.index')->with('success', 'Successfully deleted department');;
    }
}
