<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
<div class="container">
    <div class="card">
        <div class="card-header blue">
            <a target="_blank" class="btn-link ml-2" href="https://en.wikipedia.org/wiki/List_of_Dewey_Decimal_classes">Dewey
            Ref.</a><small>Just for getting s</small>
            <div class="float-right">
                <button class="btn btn-sm btn-dark mr-1" type="button"
                        wire:click="clearClassTable()">
                </button>
                
                <button class="btn btn-sm btn-dark" type="button"
                        wire:click="clearAllCategoryOfBook()">
                </button>
            </div>
        </div>
        <div class="card-body yellow">
            <div class="container">
                <form wire:submit.prevent="saveCat">
                    <div class="form-row">
                        <div class="mb-2 col-md-12 col-12">
                           
                            <input class="form-control" wire:model.defer="cat_name" required>
                        </div>
                        <div class="mb-2 col-md-6 col-12">
                          
                            <select wire:model="sel_parent" class="form-control">
                                <option value="">Select</option>
                                    <option value="">Cat Name</option>
                            </select>
                        </div>
                       <div class="mb-2 col-md-6 col-12">
                        <select wire:model="sel_sub_parent" class="form-control">
                        <option value=""></option>
                        <option @if($item->parent==0)</option></select></div>
                        <div class="mb-2 col-md-6 col-12">
                            <input class="form-control" wire:model.defer="dewey_no" @if(!$common::getSiteSettings("enable_basic_classification")) required placeholder="500.01 ">
                        </div>
                        <div class="mb-2 col-md-5 col-12">
                            
                            <input class="form-control" type="text" wire:model.defer="shelf_no"
                                   placeholder="">
                        </div>
                        
                        <div class="mb-2 col-md-1 col-12 d-flex" style="align-items: flex-end;">
                            <button class="btn btn-sm btn-dark w-100 " style="height:calc(2.25rem + 2px);"  wire:loading.class="disabled" type="submit">
                                <i class="far fa-hdd mr-1"></i>
                                Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Calling ID</th>
                                <th>Main Category</th>
                                <th>Shelft No</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td colspan="100">
                                        <div class="alert alert-dark">No Data exist</div>
                                    </td>
                                </tr>
                         
                                    <tr class="parent level0">
                                        <td scope="row">ID</td>
                                        <td style="display: none">Dewey</td>
                                        <td colspan="2">Cat Name</td>
                                        <td>"N/A"</td>

                                        <td>Shelf No</td>
                                        <td>
                                            <button type="button" wire:click="editCat()"
                                                    class="btn float-left btn-sm btn-dark action_btn">
                                                <i class="far fa-edit"></i>
                                            </button>
                                            <button
                                                wire:loading.class="disabled"
                                                onclick=""
                                                type="button"
                                                class="btn float-left btn-sm btn-danger action_btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </td>
                                    </tr>
                                   
                                            <tr class="children level1">
                                                <td scope="row"></td>
                                                <td style="display: none"></td>
                                                <td></td>
                                                <td class="parent"></td>

                                                <td></td>
                                                <td>
                                                    <button type="button" wire:click="editCat()"
                                                            class="btn float-left btn-sm btn-dark action_btn">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <button
                                                        wire:loading.class="disabled"
                                                        onclick=""
                                                        type="button"
                                                        class="btn float-left btn-sm btn-danger action_btn">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>

                                                </td>
                                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .level0 {
        background-color:#f4d03f;
        color:#ffffff;
        }

        .level1 {
            background: #0056b3;
            color:#0056b3;
        }

        .level2 {
            background-color: #f4d03f;
            color:#ffffff;
        }
    </style>
</div>
