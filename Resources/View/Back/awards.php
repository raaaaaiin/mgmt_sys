<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div>
    <div class="card" id="notice_holder">
        <div class="card-body yellow">

            <!-- @if(session()->has("form_notice") && session()->has("form_notice")) -->
                <div class="row">
                    <div class="col-12">
                        <!-- @include("common.messages") -->
                    </div>
                </div>
            <!-- @endif -->

            <form id="frm_notice" wire:submit.prevent="add_notice">
               
                <div class="form-row">
                    <input type="hidden" name="mode" wire:model="mode"/>
                    <input type="hidden" name="id" wire:model="selected_id"/>
                    <div class="col-md-12 col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Awards Title</span>
                            </div>
                            <textarea wire:model.lazy="noticetitle" class="form-control" name="notice"
                                      id="notice"
                                      rows="1"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Awards Description</span>
                            </div>
                            <textarea wire:model.lazy="notice" class="form-control" name="notice"
                                      id="notice"
                                      rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-md-3 col-12 mb-2 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Course</span>
                            </div>
                            <select wire:model="selcourse" class="form-control">
                                <option value="">
                                    <!-- ---- -->
                                </option>
                                            <!--  -->
                                                <option value="">Course Name</option>
                                            <!--  -->

                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-12 mb-2 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Section</span>
                            </div>
                            <select wire:model.defer="sel_year" class="form-control">
                                  <!--  -->
                                                   <!-- /@if($obj->course_id) -->
                                                           <option value="">Section</option>
                                                            
                                                           
                                                    <!-- @endif -->
                                                <!--  -->
                            </select>



                        </div>
                    </div>





                  






                    <div class="col-md-6 col-12 mb-2 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Assign to User</span>
                            </div>
                            <select wire:ignore class="form-control select2-multiple"
                                    name="give_to_user[]"
                                    id="give_to_user" >
                                <!--  -->
                                    <option
                                        value="">To User</option>
                                <!--  -->
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                                <span class="input-group-text">Show on<i
                                                        class="fas fa-info-circle ml-1 mt-1" data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""></i> </span>
                            </div>
                            <select wire:model="show_in" name="show_in" class="form-control">
                                <option value="back_end">Timeline & Profile</option>
                                <option value="front_end">Profile</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <button type="submit" class="btn btn-dark btn-sm">
                                <i class="fas fa-plus-circle mr-1"></i>Post Award
                            </button>
                        </div>
                    </div>


                </div>
            </form>

        </div>
    </div>
    <div class="card">
        <div class="card-body yellow">
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col" style="width: 20%;">Notice Title</th>
                        <th scope="col" style="width: 50%;">Description</th>
                        <th scope="col">Assign to role</th>
                        <th scope="col">Course</th>
                        <th scope="col">Section</th>
                        <th style="width: 12%;" scope="col">Add</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- @if($notices->total()) -->
                        <!--  -->
                            <tr>
                                <td>User</td>
                                <td>Award Title</td>
                                <td>Description</td>
                                <td>
                                    
                                        
                                            <span
                                                class="badge bg-info text-dark">Student</span>
                                       
                                  
                                </td>
                                <td>
                                    
                                        
                                            <span
                                                class="badge bg-info text-dark">BSCS</span>
                               
                                    
                                </td>
                                <td>
                                 
                                            <span
                                                class="badge bg-dark">201</span>
                                        
                                  
                                </td>
                                <td>
                                    <!-- @if($notice->active) -->
                                        <button title=""
                                                class="btn btn-sm btn-primary action_btn float-left" type="button"
                                                wire:click="noticeStatus(,0)"><i class="far fa-eye"></i>
                                        </button>
                                    <!-- @else -->
                                        <button title=""
                                                class="btn btn-sm btn-primary action_btn float-left" type="button"
                                                wire:click="noticeStatus(,1)"><i
                                                class="far fa-eye-slash"></i></button>
                                    <!-- @endif -->
                                    <button wire:click="editNotice()" type="button"
                                            class="btn btn-sm btn-dark btn_edit action_btn float-left">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    

                                </td>
                            </tr>
                        <!--  -->
                    <!-- @else -->
                        <tr>
                            <td colspan="100">
                                <div class="alert alert-dark">No data exist</div>
                            </td>
                        </tr>
                    <!-- @endif -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



                </div>
            </div>
        </div>
    </div>
<!-- @endsection -->
<!-- @section("css_loc") -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
<!-- @endsection -->
<!-- @section("js_loc") -->
    <script src=""></script>
<!-- @endsection -->
