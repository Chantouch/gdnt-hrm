<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Models\Occupation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Psy\Exception\ErrorException;
use Validator;

class OccupationController extends Controller
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
        $occupations = Occupation::paginate(10);
        return view('admin.modules.occupations.index', compact('occupations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.occupations.create');
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
            $validator = Validator::make($data = $request->all(), Occupation::rules(), Occupation::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your field maybe missing.');
            }
            $occupation = Occupation::create($data);
            if (!$occupation) {
                DB::rollbackTransaction();
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request.');
            }
        } catch (ErrorException $errorException) {
            return $errorException;
        }
        DB::commit();
        return redirect()->route('admin.modules.occupations.index')->with('success', 'Occupation added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occupation = Occupation::find($id);
        if (empty($occupation)) {
            return redirect()->route('admin.modules.occupations.index')->with('error', 'Occupation not found');
        }
        return view('admin.modules.occupations.show', compact('occupation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occupation = Occupation::find($id);
        if (empty($occupation)) {
            return redirect()->route('admin.modules.occupations.index')->with('error', 'Occupation not found');
        }
        return view('admin.modules.occupations.edit', compact('occupation'));
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
        $occupation = Occupation::find($id);
        if (empty($occupation)) {
            return redirect()->route('admin.modules.occupations.index')->with('error', 'Occupation not found');
        }
        try {
            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Occupation::rules(), Occupation::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please check your missing field');
            }
            $occupation = $occupation->update($data);
            if (!$occupation) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request right now');
            }

        } catch (ErrorException $errorException) {

        }

        DB::commit();
        return redirect()->route('admin.modules.occupations.index')->with('success', 'Occupation updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occupation = Occupation::find($id);
        if (empty($occupation)) {
            return redirect()->route('admin.modules.occupations.index')->with('error', 'Occupation not found');
        }
        $occupation->delete();
        return redirect()->route('admin.modules.occupations.index')->with('success', 'Occupation successfully deleted');
    }
}
