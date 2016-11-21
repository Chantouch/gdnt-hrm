<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Vinkla\Hashids\HashidsManager;

class RoleController extends Controller
{

    protected $hashids;

    /**
     * RoleController constructor.
     * @param HashidsManager $hashids
     */
    public function __construct(HashidsManager $hashids)
    {
        $this->hashids = $hashids;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('display_name', 'ASC')->paginate(5);
        return view('admin.roles.index', compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('admin.roles.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), Role::validate(), Role::message());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please correct missing fields');
        }

        $role = Role::create($data);

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $role_permission = Permission::join("permission_role", "permission_role.permission_id", "=", "permissions.id")
            ->where("permission_role.role_id", $id)
            ->get();
        return view('admin.roles.show', compact('role', 'role_permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $role_permissions = DB::table("permission_role")->where("permission_role.role_id", $id)
            ->pluck('permission_role.permission_id', 'permission_role.permission_id')->toArray();
        return view('admin.roles.edit', compact('role', 'permission', 'role_permissions'));
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
        $validator = Validator::make($data = $request->all(), Role::rule($id), Role::message());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Error appear in your fields');
        }
        $role = Role::find($id);
        $role->update($data);
        DB::table('permission_role')->where('permission_role.role_id', $id)->delete();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id', $id)->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted successfully');
    }
}
