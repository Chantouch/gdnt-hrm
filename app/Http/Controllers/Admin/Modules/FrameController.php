<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Models\Frame;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Psy\Exception\ErrorException;
use Validator;

class FrameController extends Controller
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
        $title = "មើលក្របខណ្ឌឋានន្តរស័ក្កិ";
        $frames = Frame::paginate(10);
        return view('admin.modules.frames.index', compact('frames', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "ក្របខណ្ឌឋានន្តរស័ក្កិ";
        return view('admin.modules.frames.create', compact('title'));
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
            $validator = Validator::make($data = $request->all(), Frame::rules(), Frame::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Your field maybe missing.');
            }
            $frame = Frame::create($data);
            if (!$frame) {
                DB::rollbackTransaction();
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Unable to process your request.');
            }
        } catch (ErrorException $errorException) {
            return $errorException;
        }
        DB::commit();
        return redirect()->route('admin.modules.frames.index')->with('success', 'Frame added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "បង្ហាញក្របខណ្ឌឋានន្តរស័ក្កិ";
        $frame = Frame::find($id);
        if (empty($frame)) {
            return redirect()->route('admin.modules.frames.index')->with('error', 'Frame not found');
        }
        return view('admin.modules.frames.show', compact('frame', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "កែរប្រែក្របខណ្ឌឋានន្តរស័ក្កិ";
        $frame = Frame::find($id);
        if (empty($frame)) {
            return redirect()->route('admin.modules.frames.index')->with('error', 'Frame not found');
        }
        return view('admin.modules.frames.edit', compact('frame', 'title'));
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
        $frame = Frame::find($id);
        if (empty($frame)) {
            return redirect()->route('admin.modules.frames.index')->with('error', 'Frame not found');
        }
        try {
            DB::beginTransaction();
            $validator = Validator::make($data = $request->all(), Frame::rules(), Frame::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Please check your missing field');
            }
            $frame = $frame->update($data);
            if (!$frame) {
                DB::rollbackTransaction();
                return redirect()->back()->withInput()->with('error', 'Unable to process your request right now');
            }

        } catch (ErrorException $errorException) {

        }

        DB::commit();
        return redirect()->route('admin.modules.frames.index')->with('success', 'Frame updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frame = Frame::find($id);
        if (empty($frame)) {
            return redirect()->route('admin.modules.frames.index')->with('error', 'Frame not found');
        }
        $frame->delete();
        return redirect()->route('admin.modules.frames.index')->with('success', 'Frame successfully deleted');
    }
}
