<?php

namespace App\Http\Livewire\Settings;

use App\Models\Offices;
use App\Models\Projects;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class Settings extends Component
{
   public $roles,$role_name;
   public $offices,$location,$min_amount,$max_amount;
   public $projects,$project_name;

    public function render()
    {
        return view('livewire.settings.settings');
    }

    public function mount(){

        $this->roles=Role::all();
        $this->offices=Offices::all();
        $this->projects=Projects::all();

    }

    public function newRole()
    {
        $this->validate([
            'role_name' => 'required|string'
        ]);

        Role::create(['name'=>ucfirst($this->role_name)]);


        $this->reset('role_name');

        //update roles
        $this->roles=Role::all();

        $this->dispatchBrowserEvent('closeRoleModal');

    }

    public function deleteRole($role_id)
    {
        Role::findById($role_id)->delete();

        //update roles
        $this->roles=Role::all();

    }

    public function newLocation()
    {
        $this->validate([
            'location' => 'required|string',
            'min_amount' => 'required|integer',
            'max_amount' => 'required|integer'

        ]);

        Offices::create([
            'location'=>ucfirst($this->location),
             'min_amount'=> $this->min_amount,
             'max_amount' => $this->max_amount
        ]);


        $this->reset('location','min_amount','max_amount');

        //update offices
        $this->offices=Offices::all();

        $this->dispatchBrowserEvent('closeOfficeModal');
    }

    public function deleteOffice($office_id)
    {
        Offices::find($office_id)->delete();

        //update offices
        $this->offices=Offices::all();

    }

    public function newProject()
    {
        $this->validate([
            'project_name' => 'required|string'
        ]);

        Projects::create(['name'=>ucfirst($this->project_name)]);


        $this->reset('project_name');

        //update project
        $this->projects=Projects::all();

        $this->dispatchBrowserEvent('closeProjectModal');

    }

    public function deleteProject($project_id)
    {
        Projects::find($project_id)->delete();

        //update project
        $this->projects=Projects::all();
    }



}
