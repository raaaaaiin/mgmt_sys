<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head><body><style>
    /*.badge {*/
    /*    padding-left: 10px;*/
    /*    padding-top: 5px;*/
    /*    padding-bottom: 5px;*/
    /*    margin: 2px;*/
    /*    padding-right: 10px;*/
    /*}*/


    .badge .close {
        padding-right: 11px;
        padding-left: 5px;
        margin-right: -10px;
        font-size: inherit;
        color: inherit;
        text-shadow: none;
    }


</style><div><div class="row">
        <div class="card card-dark card-outline col-12">
            <div class="card-body pb-0"><div class="row">
                        <div class="col-12"></div>
                    </div><div class="row">

                    <div class="card col-md-6 col-12">
                        <div class="card-body yellow">
                            <form role="form" wire:submit.prevent="saveRole">
                                <div class="input-group">
                                    <input type="text" placeholder="Role Name" wire:model.lazy="role_name" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-dark" type="submit"><i class="fas fa-save mr-1"></i>Save Role</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label>Select Role : </label>
                                    <form role="form" wire:submit.prevent="deleteRole">
                                        <div class="input-group">
                                            <select class="custom-select" wire:model="role_id">
                                                <option value="">Role Name</option><option value="{{$role_obj->id}}">Role Name</option></select>
                                            <div class="input-group-append">
                                                <button type="button" @if(in_array($role_id,$common::getlistofdefaultroles(true)))="" disabled="" @endif="" wire:click="editRoleName({{$role_id}})" class="btn btn-sm btn-dark">
                                                    <i class="far fa-edit"></i>
                                                </button>

                                                <button @if(in_array($role_id,$common::getlistofdefaultroles(true)))="" disabled="" @endif="" onclick="lv_confirm_then_submit(this,'{{__(" common.cnf_del_role")}}','deleterole','{\'id\':{{$role_id}}}')"="" type="button" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-group col-6">
                                    <label class="d-none d-sm-block">Select Permission</label>
                                    <label class="d-block d-sm-none">Permission</label>
                                    <form role="form" wire:submit.prevent="deletePermission">
                                        <div class="input-group">
                                            <select class="custom-select" wire:model="permission_id">
                                                <option value="">Permission Name</option><option value="{{$permission_obj->id}}"></option></select>
                                            <div class="input-group-append">
                                                <button type="button" @if(in_array($permission_id,$common::getlistofdefaultpermissions(true)))="" disabled="" @endif="" wire:click="editPermissionName({{$permission_id}})" class="btn btn-sm btn-dark">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                                <button type="button" @if(in_array($permission_id,$common::getlistofdefaultpermissions(true)))="" disabled="" @endif="" onclick="lv_confirm_then_submit(this,'{{__(" common.cnf_del_perm")}}','deletepermission','{\'id\':{{$permission_id}}}')"="" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <button type="button" wire:click="assignPermissionToRole" class="btn btn-sm btn-block btn-dark">Assign Permission</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card col-md-6 col-12">
                        <div class="card-body yellow">
                            <form role="form" wire:submit.prevent="savePermission">
                                <div class="input-group">
                                    <input type="text" placeholder="Permission Name" wire:model.lazy="permission_name" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-dark" type="submit"><i class="fas fa-save mr-1"></i>Save Perm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <form role="form" wire:submit.prevent="">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Select User</label>
                                        <select class="custom-select" wire:model="user_id">
                                            <option value="">Student Name</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{Str::title($user-&gt;name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="d-none d-sm-block">Select Permission</label>
                                        <label class="d-block d-sm-none">{{__("commonv2.chs_role_frm_here_small")}}</label>
                                        <select class="custom-select" wire:model="assigned_role_id">
                                            <option value="">Permission Name</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{Str::title($role-&gt;name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <button type="button" wire:click="attachRoleToUser" class="btn btn-sm btn-block btn-dark">Assign to role</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-0">
                <div class="table-responsive"><table class="table table-striped table-hover table-sm mt-2">
                        <thead>
                        <tr>
                            <th scope="col">Roles</th>
                            <th scope="col">Permission</th>
                            <th style="width: 20%;" scope="col">User Attached</th>
                        </tr>
                        </thead>
                        <tbody><tr>
                                <td><span class="badge rounded-pill bg-danger">Admin</span>
                                </td>
                                <td><span class="badge rounded-pill badge-dark">Raineer

                                            </span><li class="list-group-item d-flex justify-content-between align-items-center">Perm<button type="button" <i="" class="fas fa-trash-alt">
                                                                                    
                                                                           </button></li></td>
                                <td><span class="badge bg-info text-dark">Info</span><span class="badge bg-info rounded-pill text-dark">
                                                {{$item-&gt;name}}
                                                
                                            </span><li class="list-group-item d-flex justify-content-between align-items-center">Name<button>
                                  <i class="fas fa-trash-alt"></i>
                                                    </button></li></td>
                            </tr></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>