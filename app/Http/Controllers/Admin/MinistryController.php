<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ministry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Flash;
use Vinkla\Hashids\Facades\Hashids;
use Vinkla\Hashids\HashidsManager;

class MinistryController extends Controller
{

    protected $hashid;

    public function __construct(HashidsManager $hashid)
    {
        $this->middleware('auth');
        $this->hashid = $hashid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ministries = Ministry::with('departments')->paginate(10);
        return view('admin.modules.ministries.index', compact('ministries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.ministries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), Ministry::rules(), Ministry::message());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your fields maybe missed');
        }

        Ministry::create($data);

        return redirect()->route('admin.modules.ministries.index')->with('success', 'Ministry added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministry = Ministry::with('departments')->findOrFail($id);
        return view('admin.modules.ministries.show', compact('ministry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministry = Ministry::findOrFail($id);
        return view('admin.modules.ministries.edit', compact('ministry'));
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
        $ministry = Ministry::with('departments')->findOrFail($id);
        if (empty($ministry)) {
            Flash::error('Ministry not found');
            return redirect(route('admin.modules.ministries.index'));
        }

        $validator = Validator::make($data = $request->all(), Ministry::rules(), Ministry::message());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your fields maybe have some missed');
        }

        $ministry = $ministry->update($data);

        return redirect()->route('admin.modules.ministries.index')->with('success', 'Ministry has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ministry = Ministry::with('departments')->findOrFail($id);
        if (empty($ministry)) {

            Flash::error('Ministry no found');
            return redirect()->route('admin.modules.ministries.index')->with('error', 'Ministry not found');
        }

        $ministry->delete($id);

        return redirect()->route('admin.modules.ministries.index')->with('success', 'Ministry deleted successfully');
    }
}
