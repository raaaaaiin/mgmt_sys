<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
<div>
    <div class="row">
        <div class="col-md-12 col-12 mb-10">
            <form id="issueBook">
                <div class="card">
                    <div class="card-header"><span class="card-header-title">Issue Book</span></div>
                    <div class="card-body">
                        <div class="form-row mb-10">
                            <div wire:ignore class="mb-10 col-md col-6">
                                <div class="form-row mb-10">
                                    Search User"<a data-toggle='tooltip' 
                                    data-placement='top' title='Try User Id : 370 or 369'
                                  class='pl-1'><i class='fas fa-info-circle'></i></a>") !!}
                                    <input id="user_autocomplete" placeholder="" type="text"
                                           class="form-control">
                            </div>
                                <div class="form-row">
                           <div class="col-md-3">
                                        <img id="user_image" src=""  class="ui-state-default img-thumbnail">
                                    </div>
                                    <div class="col-md-9">
                                        <input type="hidden" id="user_id">
                                        <input type="hidden" id="user_course_id">
                                        <input type="hidden" id="user_year_id">
                                        <ul class="list-group text-sm">
                                            <li class="list-group-item text-capitalize"
                                                style="padding-left: 7px;">User ID
                                                <span class="user_field_val"
                                                      id="spn_user_id">:05</span></li>
                                            <li class="list-group-item text-capitalize">Course : <span
                                                    class="user_field_val"
                                                    id="user_course">BSCS</span>
                                                | Year:<span class="user_field_val"
                                                                               id="user_year">801</span>
                                            </li>
                                            <li class="list-group-item">Email : <span
                                                    class="user_field_val"
                                                    id="user_email">ma@gma.co</span>
                                            </li>
                                            <li class="list-group-item address_li">Address : <span
                                                    class="user_field_val"
                                                    id="user_address">Antip rizs</span>
                                            </li>
                                            <li class="list-group-item address_li">Borrowed : <span
                                                    class="user_field_val"
                                                    id="user_borrowed_cnt">Borrowed</span>
                                            </li>
                                            <li class="list-group-item address_li">Limit allowed : <span
                                                    class="user_field_val"
                                                    id="user_limit">N/A</span>
                                            </li>
                                            <li class="list-group-item user_history_holder">History
                                                <a target="_blank" href="" id="user_history" class="float-right"><i
                                                        class="fas fa-search mr-1"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                            </div>
                            
                                <div class="mb-10 col-md col-6">
                                    <div wire:ignore class="form-row mb-10">
                                        Search Book.'<i class="fas fa-barcode ml-1"></i>
                                        <input id="book_ids" wire:model.defer="tmp_barcode_book_id"
                                               placeholder="" type="text"
                                               class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark btn-sm" wire:click="attach()" type="button"><i
                                                    class="fas fa-cart-plus"></i></button>
                                        </div>
                                       
                                    </div>
                                    <div class="form-row"
                                         style="height: 200px;overflow-y: auto;border: 1px solid lightgray;padding: 10px;">
                                        <ul class="list-group w-100">
                                        
                                                <li class="list-group-item" style="padding: 0.5rem;">
                                                    <button type="button" class="btn btn-danger btn-xs float-right"
                                                            wire:click="deleteTmpSelectedBookId()">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <img class="img-thumbnail" src=""
                                                         style="width: 30px;display: block;float: left;margin-right: 2%;padding-top: 5px;"/>
                                                    <span class="text-sm">
                                                        Book TItle
                                                        <span class="badge badge-dark">Book ID</span>
                                                    </span>
                                                </li>
                                                <div class="alert alert-dark text-sm">No books selected yet.</div>
                                     

                                           </ul>
                                    </div>
                                </div>
                                <div wire:ignore class="mb-10 col-md col-6">
                                    <div class="form-row mb-10">
                                        <input id="book_autocomplete" placeholder=""
                                               type="text" class="form-control">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <img id="book_image" src="https://via.placeholder.com/400x400"
                                                 class="ui-state-default img-thumbnail">
                                        </div>
                                        <div class="col-md-9">
                                            <input type="hidden" id="book_id">
                                            <input type="hidden" id="book_m_id">
                                            <ul class="list-group text-sm">
                                                <li class="list-group-item text-capitalize" style="padding-left: 7px;">
                                                    Book Code <span class="book_field_val"
                                                                                       id="book_span_code"></span>
                                                </li>
                                                <li class="list-group-item text-capitalize">Book Title
                                                    : <span class="book_field_val"
                                                            id="book_title">N/a</span>
                                                </li>
                                                <li class="list-group-item text-capitalize">Category <span
                                                        class="book_field_val"
                                                        id="book_category">N/a
                                 </span> | Book Condition : <span class="book_field_val"llll
                                                                                          id="book_condition">N/aa</span>
                                                    | Book price : <span class="book_field_val"
                                                                                          id="book_price">N/a</span>
                                                </li>
                                                <li class="list-group-item">Remark : <span
                                                        class="book_field_val"
                                                        id="book_remark">N/a</span>
                                                </li>
                                                <li class="list-group-item book_history_holder">Last History
                                                    <a target="_blank" href="" id="book_history" class="float-right"><i
                                                            class="fas fa-search mr-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="form-row mb-10">
                            <div wire:ignore class="col-md mb-10">
                               
                                <input type="text" id="issue_date_tmp" class="form-control"/>
                                <input type="hidden" id="issue_date"/>
                            </div>
                            <div wire:ignore class="col-md mb-10">
                                <input type="text" id="return_date_tmp" class="form-control"/>
                                <input type="hidden" id="return_date"/>
                            </div>
                            <div class="col-md mb-10">
                                <button type="button" @if(!$allow_issue) disabled @endif
                                @if($common::getSiteSettings("enable_bardcode_reading_mode")) wire:click="bulkissueBook"
                                        @else wire:click="issueBook" @endif
                                        class="btn btn-danger">Issue Book</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <textarea class="form-control" wire:model.lazy="sel_remark"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-12 mb-10">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</td>
                                <th scope="col">User Id</td>
                                <th scope="col">User image</td>
                                <th scope="col">Full Name</td>
                                <th scope="col">Book Id</td>
                                <th scope="col">Book Img</td>
                                <th scope="col">Req Book</td>
                                <th scope="col">Created on</td>
                                <th scope="col">Borrow On</td>
                                <th scope="col">Return Date</td>
                                <th scope="col">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <input type="hidden" id="return_dt"/>
                                <tr>s
                                    <td>ID</td>
                                    <td>User ID</td>
                                    <td><img style="width: 50px;"
                                             src=""
                                             class="img-thumbnail"/></td>
                                    <td>User Name</td>
                                    <td style="font-size: 20px;">Book Id</td>
                                    <td><img style="width: 50px;" src=""
                                             class="img-thumbnail"/></td>
                                    <td>Book Title</td>
                                    <td>Created at</td>
                                    <td>Expected Borrow date</td>
                                    <td><input id="retdate" type="text" class="return_dt form-control" value="12/27/2000"></td>
                                    <script>
                                    
                                    </script>
                                    <td>
                                        <button class="btn btn-dark btn-sm" type="button"
                                                wire:click="issueBookRequested()">
                                            <i class="far fa-check-circle"></i></button>
                                        <button class="btn btn-danger btn-sm" type="button"
                                                wire:click="cancelRequest()"><i
                                                class="far fa-times-circle"></i></button>
                                    </td>
                                </tr>
                          
                                <tr><td colspan="100"><div class="alert alert-dark">No books</div></td></tr>
                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
