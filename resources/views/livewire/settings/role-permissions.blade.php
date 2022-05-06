<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$role->name}} Role</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Permissions</a></li>
        </ol>
    </div>

       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Assign Permissions</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($permissions as $permission)
                   <div class="col-xl-4 col-xxl-6 col-6">
                       <div class="mb-3 form-check custom-checkbox checkbox-danger">
                           <input type="checkbox" class="form-check-input"  id="checkbox-{{$permission->id}}" wire:model.defer="selectedPermissions" value="{{$permission->name}}"
                           @foreach ($assignedPermissions as $assignedPermission)
                           {{ $permission->id == $assignedPermission->id ? 'checked' : ''}}
                           @endforeach
                           >
                           <label class="form-check-label" for="checkbox-{{$permission->id}}">{{$permission->name}}</label>
                       </div>
                   </div>

                   @endforeach
                   </div>
                   <button type="button" class="btn me-2 btn-primary" wire:click="savePermissions" wire:loading.remove>Save</button>

                   <div wire:loading wire:target="savePermissions">
                       <p class="text-primary fw-bold" style="font-size: 15px">updating ...</p>
                   </div>
            </div>
        </div>
    </div>
</div>
