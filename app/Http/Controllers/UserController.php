<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function usersPage()
    {
        return view('admin.users.users',[
            'users' => User::all(),
        ]);

    }

    public function editPage(User $user)
    {
        return view('admin.users.edit',[
            'user' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request, User $user)

    {
        $request->validate([
            'name' => 'required|unique:users,name,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id
        ]);

        $user->update($request->all());
        $user->syncRoles($request->roles);
        // $rolesPermissions=[];
        // foreach(Role::whereIn('name', $request->roles)->get() as $role){
        //     foreach($role->permissions as $perm)
        //     if(!in_array($perm, $rolesPermissions)){
        //         $rolesPermissions[]= $perm->name;
        //     }
        // }
        // $newPermissions = [];
        // foreach($request->permissions as $perm){
        //      if(! in_array($perm, $rolesPermissions)){
        //         $newPermissions[] = $perm;
        //      }
        // }
        $user->syncPermissions( $request->permissions);
        return redirect()->route('admin.users');
    }
}
