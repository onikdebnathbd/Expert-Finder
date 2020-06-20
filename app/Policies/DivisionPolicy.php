<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class  DivisionPolicy
{
    use HandlesAuthorization;

    //This function will return true or false. if true then admins will be able to access otherwise not
    protected function getPermission($admin, $permission_id) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $permission_id) {
                    return true;
                }
            }
        }
        return false;
    }

    //This function will return true when the permission id of an authorized users role will be 21(view division) otherwise false
    public function viewAny(Admin $admin)
    {
        return $this->getPermission($admin, 21);
    }

    //This function will return true when the permission id of an authorized users role will be 22(create division) otherwise false
    public function create(Admin $admin)
    {
        return $this->getPermission($admin, 22);
    }

    //This function will return true when the permission id of an authorized users role will be 23(edit division) otherwise false
    public function update(Admin $admin)
    {
        return $this->getPermission($admin, 23);
    }

    //This function will return true when the permission id of an authorized users role will be 24(delete division) otherwise false
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin, 24);
    }

    //This function will return true when the permission id of an authorized users role will be 25(publish division) otherwise false
    public function publish(Admin $admin)
    {
        return $this->getPermission($admin, 25);
    }

    //This function will return true when the permission id of an authorized users role will be 21(view division) & 22(create division) both
    //or only 21(view division) or only 22(create division) otherwise false
    public function view_create($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 21 && $permission->id == 22) || $permission->id == 21 || $permission->id == 22) {
                    return true;
                }
            }
        }
        return false;
    }

    //This function will return true when the permission id of an authorized users role will be 23(edit division) & 24(delete division) both
    //or only 23(edit division) or only 24(delete division) otherwise false
    public function edit_delete($admin) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if (($permission->id == 23 && $permission->id == 24) || $permission->id == 23 || $permission->id == 24) {
                    return true;
                }
            }
        }
        return false;
    }
}
