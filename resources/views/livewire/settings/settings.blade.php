<div>
            {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        <!-- roles-->
        <div class="col-xl-6">
             <div class="card" style="max-height: 25rem;">
                <div class="card-header">
                    <h4 class="card-title">Organization  Roles</h4>
                    <div>
                        <button type="button" class="mb-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                            <i class="fas fa-plus me-2"></i>
                            Add New Role
                        </button>
                        <div class="modal fade" id="newRoleModal"  aria-hidden="true" wire:ignore.self>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Register Role</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label">Role Name</label>
                                            <input type="text" class="form-control" wire:model.defer="role_name">

                                            @error('role_name')
                                            <div class="mt-2">
                                                <span class="text-danger fw-bold">{{$message}}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" wire:click="newRole" wire:loading.remove>Save changes</button>

                                        <div wire:loading wire:target="newRole">
                                            <p class="text-success fw-bold" style="font-size: 15px">saving ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="card-body" style="overflow-y: auto;">
                    <div class="">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>#</strong></th>
                                    <th><strong>Roles</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td><strong>{{$loop->iteration}}</strong></td>
                                    <td>{{$role->name}}</td>
                                     <td>
                                         <div class="d-flex">
                                            <a href="{{route('settings.role-permissions',$role->id)}}" class="me-3 btn-xs sharp btn-secondary light">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="#" wire:click="deleteRole({{$role->id}})" class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
             </div>
          </div>
          <!-- end of roles-->
          <div class="col-xl-6">
            <div class="card" style="max-height: 25rem;">
                <div class="card-header">
                    <h4 class="card-title">Mr.Kuku Projects</h4>
                    <div>
                        <button type="button" class="mb-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProjectModal">
                            <i class="fas fa-plus me-2"></i>
                            Add Project
                        </button>
                        <div class="modal fade" id="newProjectModal"  aria-hidden="true" wire:ignore.self>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Register Project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label">Project Name</label>
                                            <input type="text" class="form-control" wire:model.defer="project_name">

                                            @error('project_name')
                                            <div class="mt-2">
                                                <span class="text-danger fw-bold">{{$message}}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" wire:click="newProject" wire:loading.remove>Save changes</button>

                                        <div wire:loading wire:target="newProject">
                                            <p class="text-success fw-bold" style="font-size: 15px">saving ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="card-body"style="overflow-y: auto;">
                    <div class="">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>Project Name</strong></th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($projects as $project)
                              <tr>
                                <td><strong>{{$loop->iteration}}</strong></td>
                                <td>{{$project->name}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="me-3 btn-xs sharp btn-secondary light">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#" wire:click="deleteProject({{$project->id}})" class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card" style="max-height: 25rem;">
               <div class="card-header">
                   <h4 class="card-title">Office Locations</h4>
                   <div>
                       {{-- <a href="{{route('investors.index')}}" class="btn btn-primary me-3 btn-sm">Add New Role</a> --}}
                       <button type="button" class="mb-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#newLocationModal">
                           <i class="fas fa-plus me-2"></i>
                           Add Location
                       </button>
                       <div class="modal fade" id="newLocationModal"  aria-hidden="true" wire:ignore.self>
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title">Register Location</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal">
                                       </button>
                                   </div>
                                   <div class="modal-body">

                                       <div class="mb-3">
                                           <label class="form-label">Location Name</label>
                                           <input type="text" class="form-control" wire:model.defer="location">

                                           @error('location')
                                           <div class="mt-2">
                                               <span class="text-danger fw-bold">{{$message}}</span>
                                           </div>
                                           @enderror
                                       </div>

                                       <div class="mb-3">
                                        <label class="form-label">Contract Sign Minimum Amount</label>
                                        <input type="number" class="form-control" wire:model.defer="min_amount">

                                        @error('min_amount')
                                        <div class="mt-2">
                                            <span class="text-danger fw-bold">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Contract Sign Maximum Amount</label>
                                        <input type="number" class="form-control" wire:model.defer="max_amount">

                                        @error('max_amount')
                                        <div class="mt-2">
                                            <span class="text-danger fw-bold">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>


                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-primary" wire:click="newLocation" wire:loading.remove>Save changes</button>

                                       <div wire:loading wire:target="newLocation">
                                           <p class="text-success fw-bold" style="font-size: 15px">saving ...</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       </div>
               </div>
               <div class="card-body" style="overflow-y: auto;">
                   <div class="">
                       <table class="table table-responsive-md">
                           <thead>
                               <tr>
                                   <th><strong>#</strong></th>
                                   <th><strong>Offices</strong></th>
                                   <th><strong>Min Amount</strong></th>
                                   <th><strong>Max Amount</strong></th>
                                   <th></th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($offices as $office)
                               <tr>
                                   <td><strong>{{$loop->iteration}}</strong></td>
                                   <td>{{$office->location}}</td>
                                   <td>{{number_format($office->min_amount)}} Tshs</td>
                                   <td>{{number_format($office->max_amount)}} Tshs</td>
                                    <td><a href="#" wire:click="deleteOffice({{$office->id}})"  class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>
         </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card" style="max-height: 25rem;">
               <div class="card-header">
                   <h4 class="card-title">{{env('APP_NAME')}} Users</h4>
                   <div>
                       <button type="button" class="mb-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUserModal">
                           <i class="fas fa-plus me-2"></i>
                           Add User
                       </button>
                       <div class="modal fade" id="newUserModal"  aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Register User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3 row">
                                       <div class="col-lg-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" wire:model.defer="f_name">

                                        @error('f_name')
                                        <div class="mt-2">
                                            <span class="text-danger fw-bold">{{$message}}</span>
                                        </div>
                                        @enderror
                                       </div>
                                       <div class="col-lg-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" wire:model.defer="l_name">

                                        @error('l_name')
                                        <div class="mt-2">
                                            <span class="text-danger fw-bold">{{$message}}</span>
                                        </div>
                                        @enderror
                                       </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Office assigned</label>
                                        <select  class="form-control"  wire:model.defer="a_office">
                                         <option value="" selected disabled>Please select</option>
                                            @foreach ($offices as $office)
                                        <option value="{{$office->id}}">{{$office->location}}</option>
                                        @endforeach

                                    </select>
                                    @error('a_office')
                                    <div class="mt-2">
                                        <span class="text-danger fw-bold">{{$message}}</span>
                                    </div>
                                    @enderror
                                    </div>
                                    <div style="margin-top: 1.5rem;">
                                        <label class="form-label">Role assigned</label>
                                        <select class="form-control"  wire:model="a_role">
                                        <option value="" selected disabled>Please select</option>
                                        @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach

                                    </select>
                                    @error('a_role')
                                    <div class="mt-2">
                                        <span class="text-danger fw-bold">{{$message}}</span>
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" wire:click="newUser" wire:loading.remove>Register User</button>

                                    <div wire:loading wire:target="newUser">
                                        <p class="text-success fw-bold" style="font-size: 15px">saving ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>
               </div>
               <div class="card-body" style="overflow-y: auto;">

              @if (session()->has('deleteUserError'))
              <div class="alert alert-danger alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <strong>Error!</strong> {{ session('deleteUserError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>
              @endif

              @if (session()->has('deleteUser'))
              <div class="alert alert-success alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                <strong>Success!</strong> {{ session('deleteUser') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>
              @endif

                   <div class="">
                       <table class="table table-responsive-md">
                           <thead>
                               <tr>
                                   <th><strong>#</strong></th>
                                   <th><strong>Name</strong></th>
                                   <th><strong>Username</strong></th>
                                   <th><strong>Office</strong></th>
                                   <th></th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($users as $user)
                               <tr>
                                   <td><strong>{{$loop->iteration}}</strong></td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->username}}</td>
                                   <td>{{$user->office->location}}</td>
                                    {{-- <td>
                                        <a href="{{route('settings.role-permissions',$role->id)}}" class="me-3 btn-xs sharp btn-secondary light">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#" wire:click="deleteUser({{$user->id}})" class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </td> --}}
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item text-secondary" href="#" >Reset Password</a>
                                                <a class="shadow dropdown-item sharp text-primary" href="#" wire:click="deleteUser({{$user->id}})">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>
         </div>
    </div>
</div>
