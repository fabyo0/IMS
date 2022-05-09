<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissions extends Component
{
    public $role;
    public $permissions,$selectedPermissions=[],$assignedPermissions;


    public function render()
    {
        return view('livewire.settings.role-permissions');
    }

    public function mount(Role $role)
    {
      $this->role=$role;
      $this->permissions=Permission::all();

       //get the permissions assigned to the role
       $this->assignedPermissions=$this->role->permissions;

    //    dd($this->assignedPermissions);


      foreach ($this->role->permissions as $permissions) {
        array_push($this->selectedPermissions,$permissions->name);
     }

    }

    public function savePermissions()
    {
         //save the permissions for the role
         $this->role->syncPermissions($this->selectedPermissions);

         return redirect()->route('settings');

    }
}
