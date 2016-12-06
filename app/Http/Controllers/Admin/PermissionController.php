<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = "មើលការអនុញ្ញាត ទាំងអស់";
        $permissions = Permission::orderBy('display_name', 'ASC')->paginate(10);
        return view('admin.permissions.index', compact('permissions', 'title'));
    }

    public function show($id)
    {
        $title = "មើលការអនុញ្ញាត";
        $permission = Permission::find($id);
        return view('admin.permissions.show', compact('permission', 'title'));
    }
}
