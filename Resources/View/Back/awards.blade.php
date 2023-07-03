<div>
    <div class="card" id="notice_holder">
        <div class="card-body yellow">

            @if(session()->has("form_notice") && session()->has("form_notice"))
                <div class="row">
                    <div class="col-12">
                        @include("common.messages")
                    </div>
                </div>
            @endif

            <form id="frm_notice" wire:submit.prevent="add_notice">
                @csrf
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
                                <option value="">----</option>
                                            
                                                <option value="</option>
                                            

                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-12 mb-2 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Section</span>
                            </div>
                            <select wire:model.defer="sel_year" class="form-control">
                                  
                                                    @if($obj->course_id)
                                                           <option value="</option>
                                                            
                                                           
                                                    @endif
                                                
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
                                
                                    <option
                                        value="</option>
                                



                            </select>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i
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
                                <i class="fas fa-plus-circle mr-1"></i>
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
                        <th scope="col"></th>
                        <th scope="col" style="width: 20%;">Notice Title</th>
                        <th scope="col" style="width: 50%;"></th>
                        <th scope="col"></th>
                        <th scope="col">Course</th>
                        <th scope="col">Section</th>
                        <th style="width: 12%;" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($notices->total())
                        
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    
                                        
                                            <span
                                                class="badge bg-info text-dark"></span>
                                       
                                  
                                </td>
                                <td>
                                    
                                        
                                            <span
                                                class="badge bg-info text-dark"></span>
                               
                                    
                                </td>
                                <td>
                                 
                                            <span
                                                class="badge bg-dark"></span>
                                        
                                  
                                </td>
                                <td>
                                    @if($notice->active)
                                        <button title=""
                                                class="btn btn-sm btn-primary action_btn float-left" type="button"
                                                wire:click="noticeStatus(,0)"><i class="far fa-eye"></i>
                                        </button>
                                    @else
                                        <button title=""
                                                class="btn btn-sm btn-primary action_btn float-left" type="button"
                                                wire:click="noticeStatus(,1)"><i
                                                class="far fa-eye-slash"></i></button>
                                    @endif
                                    <button wire:click="editNotice()" type="button"
                                            class="btn btn-sm btn-dark btn_edit action_btn float-left">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    

                                </td>
                            </tr>
                        
                    @else
                        <tr>
                            <td colspan="100">
                                <div class="alert alert-dark"></div>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


