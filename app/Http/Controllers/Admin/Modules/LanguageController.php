<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Psy\Exception\ErrorException;
use Validator;

class LanguageController extends Controller
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
        $languages = Language::paginate(10);
        return view('admin.modules.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.languages.create');
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
            $validator = Validator::make($data = $request->all(), Language::rules(), Language::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your field maybe missing.');
            }
            $language = Language::create($data);
            if (!$language) {
                DB::rollbackTransaction();
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request.');
            }
        } catch (ErrorException $errorException) {
            return $errorException;
        }
        DB::commit();
        return redirect()->route('admin.modules.languages.index')->with('success', 'Language added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = Language::find($id);
        if (empty($language)) {
            return redirect()->route('admin.modules.languages.index')->with('error', 'Language not found');
        }
        return view('admin.modules.languages.show', compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = Language::find($id);
        if (empty($language)) {
            return redirect()->route('admin.modules.languages.index')->with('error', 'Language not found');
        }
        return view('admin.modules.languages.edit', compact('language'));
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
        $language = Language::find($id);
        if (empty($language)) {
            return redirect()->route('admin.modules.languages.index')->with('error', 'Language not found');
        }
        try {
            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Language::rules(), Language::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please check your missing field');
            }
            $language = $language->update($data);
            if (!$language) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request right now');
            }

        } catch (ErrorException $errorException) {

        }

        DB::commit();
        return redirect()->route('admin.modules.languages.index')->with('success', 'Language updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::find($id);
        if (empty($language)) {
            return redirect()->route('admin.modules.languages.index')->with('error', 'Language not found');
        }
        $language->delete();
        return redirect()->route('admin.modules.languages.index')->with('success', 'Language successfully deleted');
    }
}
