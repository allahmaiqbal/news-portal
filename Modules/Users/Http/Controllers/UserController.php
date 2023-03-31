<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Roles\Services\PermissionService;
use Modules\Users\Entities\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = [];
        $data['users'] = User::query()
            ->with('roles')
            ->paginate(25);

        return view('users::index')
            ->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = [];
        $data['roles'] = Role::all();

        return view('users::create')
            ->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'roles' => 'nullable|array',
            'roles .*' => 'nullable|exists:roles,name',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ])->assignRole($request->roles);

        return redirect()
            ->back()
            ->withSuccess('User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show($id, PermissionService $permissionService)
    {
        $data = [];

        $data['user'] = User::query()
            ->with([
                'roles:id,name',
            ])
            ->findOrFail($id);

        $data['assigned_permission_area_groups'] = $permissionService->availablePermissionAreaGroupsByUser($data['user']);

        $data['assigned_partial_permission_groups'] = $permissionService->availablePartialPermissionGroupsByUser($data['user']);

        return view('users::show')
            ->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $data = [];
        $data['roles'] = Role::all();
        $data['user'] = User::query()
            ->with([
                'roles:name',
            ])
            ->findOrFail($id);

        return view('users::edit')
            ->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:255|unique:users,phone,' . $id,
            'password' => 'nullable|min:8|confirmed',
            'roles' => 'nullable|array',
            'roles .*' => 'nullable|exists:roles,name',
        ]);

        $update_fields_from_request = ['name', 'email', 'phone'];

        // if password is not null, then update password
        if (!empty($request->password)) {
            $update_fields_from_request[] = 'password';
            $request->merge(['password' => bcrypt($request->password)]);
        }

        // find
        $user = User::query()
            ->findOrFail($id);

        // update user
        $user->update($request->only($update_fields_from_request));

        // sync roles
        $user->syncRoles($request->roles);

        return redirect()
            ->route('users.index')
            ->withSuccess('User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        User::query()
            ->findOrFail($id)
            ->delete();

        return redirect()
            ->route('users.index')
            ->withSuccess('User deleted successfully');
    }
}
