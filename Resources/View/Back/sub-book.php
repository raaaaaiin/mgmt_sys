<div class="w-100">
    @php
        /* @var \App\Facades\Util $util */
        /* @var \App\Facades\Common $common */
    @endphp
    
    @include("back.common.spinner")
    <div class="card">
        <div class="card-header blue">
            <div class="float-right">
                @if($enable_bulk_operation)
                    <button class="btn btn-dark btn-sm"
                            wire:click="$set('enable_bulk_operation',false)"></button>
                @else
                    <button class="btn btn-dark btn-sm"
                            wire:click="$set('enable_bulk_operation',true)"></button>
                @endif
            </div>
        </div>
        <div class="card-body yellow">

            @if($enable_bulk_operation)
                <div class="form-row no-gutters mb-10">
                    <div class="col-md">
                        <form method="post" class="m-1 frm_export"
                              action=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="input-group">

                                <input type="file" name="file" accept=".csv"
                                       class="form-control text-xs file_upload"
                                >
                                <div class="input-group-append">
                                    <button class="btn btn-xs btn-dark mr-1" type="submit"><i
                                            class="fa fa-upload mr-1"
                                            aria-hidden="true"></i>
                                        
                                    </button>
                                    <a style="padding-top: 5%;" target="_blank" href=""
                                       class="btn btn-xs btn-dark" href=""><i
                                            class="fas fa-download mr-1"></i>
                                        
                                    </a>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="form-row no-gutters mb-9">
                    <div class="col-md-12 col-12">
                        <div class="form-row no-gutters">
                            <div class="mb-2 col-12 col-md-4">
                                {!! CForm::inputGroupHeader(__("common.category")) !!}
                                <select wire:model="sel_parent_cat" class="form-control">
                                    <option value=""></option>
                                    
                                        <option value="</option>
                                    
                                </select>
                                {!! CForm::inputGroupFooter() !!}
                            </div>
                            <div class="mb-2 col-12 col-md-6">
                                {!! CForm::inputGroupHeader(__("commonv2.sub_cat")) !!}
                                <select wire:model="sel_sub_cat" class="form-control">
                                    <option value=""></option>
                                    @if($sel_parent_cat)
                                        
                                            <option value="</option>
                                        
                                    @endif
                                </select>
                                {!! CForm::inputGroupFooter() !!}
                            </div>
                            <div class="mb-2 col-12 col-md-2">
                                <button class="btn btn-dark" type="button" wire:click="bulkSaveCategory"><i
                                        class="fas fa-plus-circle mr-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="form-row no-gutters mb-10">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" wire:model.debounce.500ms="search_keyword" class="form-control" name=""
                               placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-row">

                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                        <tr>
                            @if($enable_bulk_operation)
                                <td>#</td>
                            @endif
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="width: 80px;">
                                <input data-toggle="tooltip" data-placement="top" title=""
                                       class="mt-1 ml-1" type="checkbox" wire:model="show_inactive"></td>
                        </tr>
                        </thead>
                        <tbody>

                        
                            <tr>
                                @if($enable_bulk_operation)
                                    <td><input type="checkbox" wire:model.defer="sel_sb_id_bulk" value="">
                                    </td>
                                @endif
                                <td></td>
                                <td><img style="width: 200px;" class="img-thumbnail"
                                         src=""/>
                                </td>
                                <td><span class="pr-1 w-50pc"></span>
                                    <a class="search_tbl_iss_lst w-50pc" href="">
                                        <i class="fas fa-search mr-1"></i>
                                    </a>
                                </td>
                                <td><span
                                        class="w-50pc"></span>
                                    
                                    @if(count($get_borrowed_books))
                                        <a target="_blank" class="search_tbl_iss_lst w-50pc"
                                           href=""><i
                                                class="fas fa-search mr-1 text-green"></i></a>
                                    @endif
                                </td>
                                <td class="text-sm"></td>
                                <td class="text-sm"></td>
                                <td class="text-sm"><a target="_blank"
                                                       href="</a>
                                    <div>
                                        @if($common::getShelfNo($item->category)!=="--")
                                            <span
                                                class="text-sm font-weight-bold"></span>
                                    </div>
                                    @else -- @endif
                                </td>
                                <td class="text-sm">
                                    @if($item->category)
                                        
                                        <i class="fas fa-greater-than" style="font-size: 10px;"></i>
                                    @endif
                                    <a target="_blank"
                                       href=""
                                       class="btn-link text-sm">
                                        
                                    </a>
                                </td>
                                <td class="text-sm">
                                    
                                    @if(count($citems))
                                        
                                            <a target="_blank"
                                               href=""
                                               class="btn-link text-sm"></a>
                                            @if(!$loop->last),@endif
                                        
                                    @else
                                        <span class="text-sm">--</span>
                                    @endif
                                </td>
                                <td>
                                    @if(isset($item->custom_file))
                                        <a href=""
                                           target="_blank"><i class="fas fa-external-link-alt"></i></a>
                                    @else
                                        --
                                    @endif
                                </td>
                                <td class="text-sm">
                                <div class="d-flex">
                                    <button class="btn btn-warning cm_edit" type="button"
                                            onclick="lv_confirm_then_submit(this,'','toggleActiveMainBook',
                                                '{\'id\':')">@if($item->active)<i
                                            class="far fa-eye"></i>@else <i
                                            class="fas fa-eye-slash"></i> @endif</button>
                                    <a class="btn btn-dark cm_edit" href=""><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <button data-toggle="tooltip" data-placement="left"
                                            title=""
                                            type="button"
                                            onclick="lv_confirm_then_submit(this,'')"
                                            class="btn btn-danger cm_del"><i
                                            class="far fa-trash-alt"></i></button>
                                     </div>      

                                </td>
                            </tr>
                        
                        @if(isset($items) && !count($items))
                            <tr>
                                <td colspan="100">
                                    <div class="alert alert-dark"></div>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    @if(isset($items))
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

