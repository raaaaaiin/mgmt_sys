
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">

</head><div class="w-100">
    
    
    
    <div class="card">
        <div class="card-header blue">
            <a href=""
               class="btn btn-sm btn-dark"><i
                    class="fas fa-plus-circle mr-1"></i>Add New Book</a>
        </div>
        <div class="card-body yellow">
            <form id="saveBook" wire:submit.prevent="saveBook" onkeydown="return event.key != 'Enter';">
                
                <input type="hidden" value="" id="book_id">
                <input type="hidden" value="" id="mode">
                <div class="row">
                    <div class="col-md-3 col-12 mb-10" style="background-color: #ffffff;">
                        <div class="image_holder pb-3">
                            <img style="height:400px; width:250px" src="https://via.placeholder.com/300x450" class="img-thumbnail"/>
                            <div class="mt-2">
                               
                                <input type="file" wire:model="custom_img" class="form-control text-xs"
                                       accept=".jpeg,.png,.jpg">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                                Please Upload a picture</div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12 mb-10">
                        <div class="row">
                            <div class="col-12">
                                
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="form-group col-md-4 col-12">
                                ISBN
                                <input type="text" wire:model.lazy="isbn"
                                       class="form-control">
                                <div class="input-group-append">
                                   
                                </div>
                                
                                <div class="w-100">
                                    
                                </div>
                                
                                
                            </div>
                            <div class="form-group col-md-2 col-12">
                           Search Online
                                
                                <button class="btn btn-dark" data-toggle="tooltip" data-placement="top"
                                            type="button"
                                            wire:loading.class="disabled"
                                            wire:click="searchBookInfo()"
                                            title=""><i
                                            class=""></i>
                                    Auto Complete</button>
                            </div>
                            <div class="form-group col-md-3 col-12">
                               Category
                                <select wire:ignore wire:model="sel_cat" class="form-control">
                                    <option value="">Dewey Decimal</option>
                                    
                                        <option value=""> </option>
                                    
                                </select>
                                
                                <div class="w-100">
                                    
                                </div>
                                
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>
                           <div class="form-group col-md-3 col-12 tag_holder">
                           Media Type
                                <select class="form-control w-100"
                                        name="medtypes[]"
                                         id="medtypes">
                                    
                                        <option value=""> </option>
                                            
                                    
                                </select>

                              
                            </div>
                            
                                <div class="form-group col-12" style="border: 1px solid lightgray; padding: 10px;">
                                    <div class="form-row no-gutters">
                                        
                                            <div class="col-md-6 col-12 p-1">
                                                <div
                                                    style="border: 1px solid lightgray; min-height: 100%;padding: 4px;font-size: 15px;">
                                                    <input type="radio" name="sub_cats" class="mr-2"
                                                           wire:model.lazy="sel_sub_cat"
                                                           
                                                           value="">Dewey Category Name<br>
                                                    <span
                                                        class="font-weight-bold">Shelf No : 001</span>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            
                            <div class="form-group col-md-10 col-12">
                                Book Title
                                <input type="text" wire:model.defer="title" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>
                            <div class="form-group col-md-2 col-12">
                                Book Edition
                                <input type="text" wire:model="edition" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>
                            <style>
                            .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: calc(2.25rem + 2px);
        user-select: none;
        -webkit-user-select: none
    }
                            </style>


                            <div class="form-group col-md-3 col-12 author_holder">
                                Book Circulation
                                <select wire:model="circulation" class="form-control" name="circulation" id="circulation" style="height:calc(2.25rem + 2px)">
                                   
                                        <option value="blank">--</option>
                                        <option value="Circulation">Circulation</option>
                                        <option value="Reserved">Reserved</option>
                                        <option value="Filipiniana">Filipiniana</option>
                                        <option value="Journal">Journal</option>
                                        <option value="Magazine">Magazine</option>
                                        <option value="NewsPaper">News Paper</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-12 publisher_holder ">
                                Dewey Decimal Number
                                <input type="text" wire:model.defer="dewey" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>
                            <div class="form-group col-md-3 col-12 author_holder">
                               Author Number
                                <input type="text" wire:model.defer="authorno" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>
                            <div class="form-group col-md-3 col-12 publisher_holder ">
                               Publication Year
                                <input type="text" wire:model="publicationyear" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                                
                            </div>
                            <div class="form-group col-md-6 col-12 author_holder">
                               Placement of Production
                                <select wire:ignore class="form-control select2-multiple w-100"
                                        name="authors[]"
                                         id="author">
                                    
                                        <option
                                            value=""></option>
                                            
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-12 publisher_holder ">
                                Publishers
                                <select wire:ignore class="form-control select2-multiple w-100"
                                        name="publishers[]"
                                         id="publisher">
                                    
                                        <option
                                            value=""></option>
                                            
                                    
                                </select>
                            </div>

                             <div class="form-group col-md-3 col-12 publisher_holder ">
                               {Publishing Location
                                <input type="text" wire:model.defer="publishloc" required class="form-control">
                                
                                <div class="w-100">
                                    
                                </div>
                                
                              
                            </div>

                             <div class="form-group col-md-12 col-12 tag_holder">
                                Topical Terms
                           
                                <select wire:ignore class="form-control w-100"
                                        name="tags[]"
                                         id="tag">
                                    
                                        <option
                                            value=""></option>
                                            
                                    
                                </select>
                            </div>
                            <div class="form-group col-12">
                                Preview URL
                                <input type="text" wire:model.defer="preview_url" class="form-control">
                                
                            </div>

                            <div class="form-group col-12">
                                Upload PDF
                                <input type="file" wire:model.defer="custom_file" accept=".pdf"
                                       class="form-control text-xs">
                                <div class="input-group-append">
                                   
                                </div>
                                
                                <div class="w-100">
                                    
                                </div>
                                
                            </div>

                            <div class="form-group col-12" wire:ignore>
                                <textarea  style="height: 150px;" id="desc" class="form-control summernote_small"
                                >Description</textarea>
                            </div>
                           

                            <div class="card card-dark w-100">
                                <div class="card-header blue">
                                    <span
                                        class="card-header-title">Add Books</span>
                                    
                                        <button class="btn btn-primary ml-2 btn-sm"
                                                wire:click="printBarcode()"><i
                                                class="fas fa-print"></i> Book Barcode</button>
                                    
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-danger" type="button"
                                                wire:click="$emit('addSubBooksQnty')"><i
                                                class="fas fa-plus-circle"></i></button>
                                        <button class="btn btn-xs btn-danger" type="button"
                                                wire:click="$emit('removeSubBooksQnty')">
                                            <i
                                                class="fas fa-minus-circle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body sub_book_card p-0 pt-1 pb-1">
                                    
                                        <div class="alert m-0 p-0">
                                            <div class="alert-dark p-3">No Book Yet 
                                                <i class="fas fa-plus-circle mr-1"></i>Add Some Books
                                            </div>
                                        </div>
                                    

                                    
                                        <div class="book_sub_holder">
                                            <div class="form-row">

                                                <div class="mb-10 col-md-5 col-12">
                                                    Book ID
                                                    <input wire:ignore type="text" class="form-control book_id_cls"
                                                           placeholder=""
                                                           error_holder="'err_book_id_"
                                                           value="Book ID: 0"
                                                           name="sub_books[][book_id]">
                                                </div>
                                                <div class="col-md col-12 mb-10">
                                                    <div class="form-row" style="align-items: flex-end;">
                                                        <div class="col-md col-sm" >

                                                          

                                                        </div>
                                                        <div class="col-md-2 col-sm act_btn_holder">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend float-left">
                                                                <span
                                                                    class="input-group-text">Active</span>
                                                                </div>
                                                                <input type="checkbox"
                                                                       name="sub_books[][book_status]"
                                                                       id="book_status_"
                                                                       {{(isset($books_existing_collections[$i]["active"]) && $books_existing_collections[$i]["active"])
                                                                        ? "checked": ""}}
                                                                       
                                                                       data-toggle="toggle">
                                                            </div>
                                                        </div>
                                                        <div class="col-md col-sm">
                                                            
                                                        </div>
                                                        <div class="col-md col-sm">

                                                            <input type="text" name="sub_books[][book_price]"
                                                                   id="book_price_"
                                                                   placeholder=""
                                                                   value="Book Collection"
                                                                   class="form-control">

                                                        </div>
                                                        <div class="col-md col-sm">
                                                            
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="form-row">
                                                <div class="mb-10 col-md-1 col-12">

                                                    <img style="height: 150px;" src="https://via.placeholder.com/150x200" class="img-thumbnail"/>
                                                </div>
                                                <div class="mb-10 col-md-11 col-12">
                                                    <div class="input-group" style="height:150px">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text">Remarks</span>
                                                        </div>
                                                        <textarea class="form-control" style="    height: 125px;"
                                                                  name="sub_books[][book_remark]"
                                                        >Remarks</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">

                                                <div class="mb-10 col-md-9 col-12">
                                                    <div class="right-side-wrapper float-left">
                                                        <div class="book_condition_wrapper float-left mr-2 mb-10">


                                                        </div>
                                                        <div class="btn-cust-wrapper float-left mb-10">

                                                            
                                                                
                                                                    
                                                                        <button disabled class="btn btn-danger btn-sm">
                                                                            Already Issued
                                                                        </button>
                                                                        <a href=""
                                                                           target="_blank" data-toggle="tooltip"
                                                                           data-placement="top"
                                                                           title=""
                                                                           class="btn btn-primary btn-sm">
                                                                            Accept
                                                                        </a>
                                                                    
                                                                        
                                                                            <a target="_blank"
                                                                               href=""
                                                                               class="btn btn-success btn-sm">
                                                                                Issue Book
                                                                            </a>
                                                                        
                                                                    
                                                                
                                                                
                                                                    <button type="button"
                                                                            
                                                                            
                                                                            onclick="lv_confirm_then_submit(this,'','deleteSubBook','{\'id\':{{isset($books_existing_collections[$i]["id"])
                                                                    ?$books_existing_collections[$i]["id"]:0}}}')"
                                                                            class="btn btn-dark btn-sm mr-1"><i
                                                                            class="far fa-trash-alt"></i></button>
                                                                
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-footer pt-0 p-0">
                                    <button type="button" 
                                            wire:loading.class="disabled"
                                            
                                            class="btn btn-sm btn-dark mb-1">
                                        <i class="far fa-hdd mr-2"></i>Save</button>
                                    <button type="button" 
                                            
                                            class="btn btn-sm btn-dark mb-1">
                                        <i class="fas fa-plus-circle mr-1"></i>Save and Add New Book
                                    </button>
                                    <button class="btn btn-sm btn-danger mb-1" wire:click="savepost()"><i
                                            class="far fa-trash-alt mr-1"></i>Clear Form</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
</div>
