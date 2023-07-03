<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head><body><div><div id="frm_user_mng_holder" class="card card-dark">
            <div class="card-header blue"><span class="card-header-title">User Details</span>
                <button class="btn btn-sm float-right" type="button" wire:click="closeUserFormBtn"><i class="text-white fas fa-times-circle"></i></button>
            </div>
            <div class="card-body yellow"><div class="row">
                        <div class="col-12"></div>
                    </div><div class="row mb-2">
                    <form class="col-12 p-0" role="form" wire:submit.prevent="saveUser"><input type="hidden" wire:model="mode">

                        <div class="form-row">
                            <div class="form-group col-md-3 col-12"><img wire:ignore="" src="" .="" class="img-thumbnail w-100"><br>
                                <input type="file" class="form-control mt-2  text-sm" wire:model.lazy="photo">
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="form-row">
                                    <div class="col-md-3 mb-2">Student Id<input type="text" class="form-control" wire:model.defer="stdid" required=""><div class="error_holder"></div></div>
                                    <div class="col-md-3 mb-2">Full Name<input type="text" class="form-control" wire:model.defer="full_name" required=""><div class="error_holder"></div></div>

                                    <div class="col-md-3 mb-2">Email<input type="email" class="form-control" wire:model.lazy="email" required=""><div></div></div>
                                    <div class="col-md-3 mb-2">Gender<select wire:model.defer="gender" class="form-control">
                                                           <option value="MALE">Male</option>
                                                           <option value="FEMALE">Female</option>

                                            </select></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">Password<input type="password" @if($mode="=&quot;create&quot;)" required="" @endif="" class="form-control" wire:model.defer="password"></div>
                                    <div class="col-md-6 mb-2">Confirm Password<input type="text" class="form-control" @if($mode="=&quot;create&quot;)" required="" @endif="" wire:model.defer="password_confirmation"></div>
                                </div>
                                <div class="form-row">

                                    <div class="col-md-6 mb-2">Course<select wire:model="selcourse" class="form-control">
                                            <option value="">-Course Name</option>
                                         
                                                <option value="">Course Name</option>
                                         
                                        </select></div>

                                    <div class="col-md-6 mb-2">
    School Year
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Course</span>
                                            </div>
                                            <select wire:model.defer="sel_year" class="form-control">
                                                <option value="">Course Year</option>
                                               
                                                           <option value="">Course Year</option>

                                            </select>

                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-dark" type="button" wire:click="assign">
                                                    <i class="far fa-plus-square"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-2">Phone<input type="text" class="form-control w-100" wire:model.defer="phone"></div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Attach Role</span>
                                            </div>
                                            <div class="form-control" style="display: inline-table;"><div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="radio" id="chk_" class="custom-control-label">Student</label>
                                                    </div><div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="radio" id="chk_" class="custom-control-label">Teacher</label>
                                                    </div><div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="radio" id="chk_" class="custom-control-label">S.A</label>
                                                    </div><div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="radio" id="chk_" class="custom-control-label">Admin</label>
                                                    </div></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 mb-2">Address<textarea class="form-control" wire:model.defer="address"></textarea></div>
                                    <div class="col-md-6 col-12 mb-2">About Me<textarea class="form-control" wire:model.defer="about_me"></textarea></div>
                                </div>
                            </div>
                        </div>

                        <br><br><div class="form-row mt-2"><table class="table table-hover table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Course Year</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody><tr>
                                                <td>ID</td>
                                                <td>Course Name</td>
                                                <td>Course Year </td>
                                                <td>
                                                    <button onclick="lv_confirm_then_submit(this,'')"="" type="button" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr><tr>
                                        <td colspan="100">
                                            <div class="alert alert-dark">No data Exist</div>
                                        </td>
                                    </tr></tbody>
                            </table>
                        </div>

                        <div class="form-row">
                            <button class="btn btn-sm btn-dark" @if(!$submit_status)="" disabled="" @endif="" type="submit"><i class="fas fa-save mr-1"></i>Save</button>
                            <button class="btn btn-sm btn-danger ml-1" data-toggle="tooltip" data-placement="top" title=""="" wire:click="clearAll">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-header blue"><span class="card-header-title">Promotion</span><small style="padding-left: 2%;">Sel ID</small><span class="card-header-title">Manage User</span><button type="button" wire:click="addUserBtn" class="btn btn-sm btn-dark float-right"><i class="fas fa-plus-circle mr-1"></i>Add User</button>
        </div>
        <div class="card-body yellow"><div class="form-row">
                    <div class="form-group col-md-5 col-12 mb-2">
                        <label>Course</label>
                        <select class="form-control" wire:model="selected_course_id">
                            <option value=""></option>
                            
                                <option value="</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-5 col-12 mb-2">
                        <label>Year</label>
                        <select class="form-control" wire:model="selected_course_year_id">
                            <option value="">Course Year</option>
                                <option value="">Course Year ID</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 col-12 mb-2">
                        <label class="d-block">-</label>
                        <button type="button" wire:click="promoteUsers()" class="btn btn-sm btn-dark mb-3" style="height: 37px;">
                            <i class="far fa-id-card mr-1"></i>Promote</button>
                    </div>

                </div>
            @endif
            <div class="form-row">
                <div class="form-group col-md-8 col-12">
                    <label>Advance FIlter</label>
                    <input type="text" class="form-control" wire:model.lazy="filter_keyword" placeholder=""="">
                </div>
                <div class="form-group col-md-4 col-12">
                    <label>Filter by ROle</label>
                    <select class="form-control" wire:model="filter_role">
                        <option value="" selected="">Non Active User</option>
                        <option value="in_active">Show non active user</option>
                        
                            <option value="</option>
                        
                    </select>
                </div>
                <div class="form-group col-12"><button type="button" onclick="confirm_and_submit(this,'deleteBulk')" class="btn btn-sm btn-dark mb-3"><i class="far fa-trash-alt mr-1"></i>Delete User</button>
                    <button type="button" wire:click="toggleUserStatus()" class="btn btn-sm btn-dark mb-3"><i class="fas fa-sort mr-1"></i>Toggle Stats</button>
                    <button type="button" wire:click="printIdCards()" class="btn btn-sm btn-dark mb-3 d-none"><i class="far fa-id-card mr-1"></i>
                    </button>

                    <form method="post" class="float-right mb-3" action="" enctype="multipart/form-data"><div class="d-inline">Input User<input type="file" name="file" class="form-control text-sm">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-dark mr-1"><i class="fas fa-upload mr-1"></i>Import User</button>
                                <a href=""="" class="btn btn-sm btn-dark"><i class="fas fa-download"></i>
                                </a>
                            </div></div>
                    </form>

                </div><div class="form-group col-12">
                    <div class="table-responsive"><table class="table table-striped table-hover table-sm mt-1">
                            <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" wire:model="selectAll"></th>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>

                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody><tr>

                                        <td><input type="checkbox" wire:model.defer="sel_uid" ,="" value=""></td>
                                        <td>ID</td>

                                        <td class="text-center"><img style="width: 50px;" src="{{asset(" uploads="" ".$user-=""></td>

                                        <td>Raineer<a target="_blank" href="" class="btn btn-link ml-1"><i class="fas fa-paperclip"></i></a></td>
                                        <td>Raineer@gmail.com</td>
                                        <td><span class="badge badge-dark">Role Name</span><span class="badge badge-dark">Course : BSCS</span>
                                                        <br></td>
                                        <td>Created At</td>
                                        <td>

                                            <button data-toggle="tooltip" data-placement="top" title=""="" @if(in_array("super="" admin",$user-=""><i class="far fa-thumbs-up"></i>
                                                @else
                                                    <i class="far fa-thumbs-down"></i>
                                                @endif
                                            </button>

                                            <button type="button" wire:click="editUser('')" class="btn btn-sm btn-dark float-left action_btn">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            <button 
                                                onclick="lv_confirm_then_submit(this,''
                                                    ,'deleteUser','{\'id\':')" type="button"
                                                class="btn btn-sm btn-danger float-left action_btn"&gt;
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </td>
                                    </tr><tr>
                                    <td colspan="100">
                                        <div class="alert alert-dark">No data Exist</div>
                                    </td>
                                </tr></tbody>
                        </table></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>