<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Models\DepartmentUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Flash;
use Psy\Exception\ErrorException;
use Validator;

class DepartmentUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department_units = DepartmentUnit::with('offices')->where('status', 1)->paginate(10);
        return view('admin.modules.department_units.index', compact('department_units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::with('ministry')->where('status', 1)->orderBy('name')->pluck('name', 'id');
        return view('admin.modules.department_units.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Exception|ErrorException
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($data = $request->all(), DepartmentUnit::rules(), DepartmentUnit::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please review your missing fields');
            }

            $department_unit = DepartmentUnit::create($data);

            if (!$department_unit) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request right now');
            }

        } catch (ErrorException $errorException) {
            return $errorException;
        }

        DB::commit();
        return redirect()->route('admin.modules.department-units.index')->with('success', 'Department unit added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
