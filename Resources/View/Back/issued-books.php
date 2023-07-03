<div class="w-100">
    <div class="card">
    <div class="card-header blue">
                <span class="card-header-title">Must Return Today</span>
              </div>
        <div class="card-body yellow">
            <div class="form-row">
                <input type="hidden" id="return_date" value="">
                <input type="hidden" id="fine" value="">
                <input type="hidden" id="remark" value="">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                          <th>Book ID</th>
                            <th>Accession</th>
                            <th>{!!__("common.book_img")!!}</th>
                            <th style="width: 65px;">{!!__("common.user_img")!!}</th>
                            
                            <th>{!!__("common.short_issued_date") !!}</th>
                            <th>{!!__("common.date_to_return")!!}</th>
                            <th>{!!__("common.date_returned")!!}</th>
                            <th>Day Late
                                <i class="far fa-eye mouse" wire:click="$set('dd_filter', true)"></i>
                            </th>
                            <th style="width: 120px;">Day Left</th>
                            <th style="width: 120px;"></th>
                            <th></th>
                            <th>{!!__("common.pl_created_on")!!}</th>
                            <th style="width:120px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($today))
                            
                            @php
                            @endphp
                                <tr class="@if(\Carbon\Carbon::now()>\Carbon\Carbon::parse($item->date_to_return)) bg-odd @endif text-sm">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <img data-toggle="tooltip" data-placement="top" title=""
                                             style="width: 50px" class="img-thumbnail"
                                             src=""/>
                                    </td>
                                    @php
                                        $name=$item->user->name;
                                        $phone = $item->user->get_phone();
                                        $email = $item->user->email;
                                        $proof = $item->user->get_proof();
                                        $academics = $item->user->get_academic_details();
                                        $short_name = $name;
                                        if(\Illuminate\Support\Str::length($name)>5){
                                           $checkifspace = explode(" ",$name);
                                           if($checkifspace){
                                               $short_name=$checkifspace[0];
                                           }
                                        }
                                    @endphp
                                    <td>
                                        <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>
                                        @if(!empty($email) && $email!='--')
                                            <i class="far fa-envelope" data-toggle="tooltip" data-placement="top"
                                               title=""></i>
                                        @endif

                                        @if(!empty($phone) && $phone!='--')
                                            <i class="fas fa-phone" data-toggle="tooltip"
                                               style="font-size: 12px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($academics) && $academics!='--')
                                            <i class="fas fa-university"  data-toggle="tooltip"
                                               style="font-size: 15px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($proof) && $proof!='--' && !empty($util::fileChecker(public_path("uploads"),$proof,"")))
                                            <a target="_blank" href="">
                                                <i class="fas fa-paperclip mouse" data-toggle="tooltip"
                                                   style="font-size: 12px;margin-left: 5px;"
                                                   data-placement="top"
                                                   title="Proof"></i></a>

                                        @endif

                                    </td>
                                    
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"

                                    >{!! $item->date_returned ? Util::goodDate($item->date_returned): "<input type='text' wire:ignore class='form-control date_picker'/>" !!}</td>
                                    @php
                                        $date_to_return = Illuminate\Support\Carbon::parse($item->date_to_return);
                                        $now = Illuminate\Support\Carbon::now();
                                        $lv_delayed_days = 0;
                                        $lv_fine = 0;
                                        if(!isset($item->date_returned))
                                        {

                                            if($now>$date_to_return){ // we are late
                                                $lv_delayed_days = $date_to_return->diffInDays($now);;
                                                $lv_fine = $lv_delayed_days*$common::getSiteSettings("fine_per_day",1);
                                            }
                                         }
                                    @endphp
                                    <td></td>
                                    <td>{!! is_null($item->date_returned) ? $now>$date_to_return ? "MUST RETURN NOW" : $now->diffInDays($date_to_return) + 1 : "Returned" !!}</td>
                                    <td>{!! is_null($item->date_returned) ? ("<textarea id='remark_".$item->id."' rows=3 wire:ignore class='form-control remark_obj text-sm'>".$util::getIfNotEmpty($item->remark)."</textarea>"):
                                ($util::getIfNotEmpty($item->remark) ?? "--") !!}</td>
                                    <td>


                                    <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>

                                    </td>
                                    <td></td>
                                    <td>
                                        @if(!$item->date_returned)
                                            <button type="button"
                                                    onclick="flush_data(');"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            @if($item->payment && $item->payment->payment_status)
                                                <span class="badge badge-primary"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.paid_msg_for_admins",["inv_id"=>$item->payment->invoice_no,
                                            "amt_paid"=>$item->payment->payed_amount,"paid_date"=>$util::goodDate($item->payment->created_at),
                                            "payer_email"=>$item->payment->payer_email,"symbol"=>$common::getSiteSettings("currency_symbol")])}}"></i>
                                            @endif
                                            @if($item->payment && $item->payment->refund_status)
                                                <span class="badge badge-warning"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.refnd_msg_for_admins",["inv_id"=>$item->payment->refund_id,
                                            "amt_rfnd"=>$item->payment->refund_amount,"status"=>$item->payment->refund_status,"curr"=>$common::getSiteSettings("currency_symbol")
                                            ])}}"></i>
                                            @endif
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'','markDamageBook',
                                                        '{\'id\':')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                        @else
                                            <span class="badge badge-success"></span><br/>
                                            @if($item->sub_book->lost_by==$item->user_id)
                                                <span class="badge badge-danger"></span>
                                            @endif
                                            @if($item->sub_book->damaged_by==$item->user_id)
                                                <span data-toggle="tooltip" data-placement="top"
                                                      title="" class="badge badge-danger"><i
                                                        class="fas fa-faucet"></i></span>
                                            @endif
                                        @endif
                                    </td>

                                </tr>

                            
                            @if(!$items->count())
                                <tr>
                                    <td colspan="14">
                                        <div class="alert alert-dark"></div>
                                    </td>
                                </tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                    @if(isset($items) && $items->count())
                        
                    @endif
                </div>
            </div>
        </div>
    </div>









     <div class="card">
    <div class="card-header blue">
                <span class="card-header-title">To be Return this week</span>
              </div>
        <div class="card-body yellow">

            <div class="form-row">
                <input type="hidden" id="return_date" value="">
                <input type="hidden" id="fine" value="">
                <input type="hidden" id="remark" value="">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                           <th></th>
                            <th>Accession</th>
                            <th>{!!__("common.book_img")!!}</th>
                            <th style="width: 65px;">{!!__("common.user_img")!!}</th>
                            
                            <th>{!!__("common.short_issued_date") !!}</th>
                            <th>{!!__("common.date_to_return")!!}</th>
                            <th>{!!__("common.date_returned")!!}</th>
                            <th>Day Late
                                <i class="far fa-eye mouse" wire:click="$set('dd_filter', true)"></i>
                            </th>
                            <th style="width: 120px;">Day Left</th>
                            <th style="width: 120px;"></th>
                            <th></th>
                            <th>{!!__("common.pl_created_on")!!}</th>
                            <th style="width:120px"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(isset($items))
                            

                            @php
                            @endphp
                                <tr class="@if(\Carbon\Carbon::now()>\Carbon\Carbon::parse($item->date_to_return)) bg-odd @endif text-sm">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <img data-toggle="tooltip" data-placement="top" title=""
                                             style="width: 50px" class="img-thumbnail"
                                             src=""/>
                                    </td>
                                    @php
                                        $name=$item->user->name;
                                        $phone = $item->user->get_phone();
                                        $email = $item->user->email;
                                        $proof = $item->user->get_proof();
                                        $academics = $item->user->get_academic_details();
                                        $short_name = $name;
                                        if(\Illuminate\Support\Str::length($name)>5){
                                           $checkifspace = explode(" ",$name);
                                           if($checkifspace){
                                               $short_name=$checkifspace[0];
                                           }
                                        }
                                    @endphp
                                    <td>
                                        <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>
                                        @if(!empty($email) && $email!='--')
                                            <i class="far fa-envelope" data-toggle="tooltip" data-placement="top"
                                               title=""></i>
                                        @endif

                                        @if(!empty($phone) && $phone!='--')
                                            <i class="fas fa-phone" data-toggle="tooltip"
                                               style="font-size: 12px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($academics) && $academics!='--')
                                            <i class="fas fa-university"  data-toggle="tooltip"
                                               style="font-size: 15px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($proof) && $proof!='--' && !empty($util::fileChecker(public_path("uploads"),$proof,"")))
                                            <a target="_blank" href="">
                                                <i class="fas fa-paperclip mouse" data-toggle="tooltip"
                                                   style="font-size: 12px;margin-left: 5px;"
                                                   data-placement="top"
                                                   title="Proof"></i></a>

                                        @endif

                                    </td>
                                    
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"

                                    >{!! $item->date_returned ? Util::goodDate($item->date_returned): "<input type='text' wire:ignore class='form-control date_picker'/>" !!}</td>
                                    @php
                                        $date_to_return = Illuminate\Support\Carbon::parse($item->date_to_return);
                                        $now = Illuminate\Support\Carbon::now();
                                        $lv_delayed_days = 0;
                                        $lv_fine = 0;
                                        if(!isset($item->date_returned))
                                        {

                                            if($now>$date_to_return){ // we are late
                                                $lv_delayed_days = $date_to_return->diffInDays($now);;
                                                $lv_fine = $lv_delayed_days*$common::getSiteSettings("fine_per_day",1);
                                            }
                                         }
                                    @endphp
                                    <td></td>
                                    <td>{!! is_null($item->date_returned) ? $now>$date_to_return ? "MUST RETURN NOW" : $now->diffInDays($date_to_return) + 1 : "Returned" !!}</td>
                                    <td>{!! is_null($item->date_returned) ? ("<textarea id='remark_".$item->id."' rows=3 wire:ignore class='form-control remark_obj text-sm'>".$util::getIfNotEmpty($item->remark)."</textarea>"):
                                ($util::getIfNotEmpty($item->remark) ?? "--") !!}</td>
                                    <td>


                                    <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>

                                    </td>
                                    <td></td>
                                    <td>
                                        @if(!$item->date_returned)
                                            <button type="button"
                                                    onclick="flush_data(');"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            @if($item->payment && $item->payment->payment_status)
                                                <span class="badge badge-primary"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.paid_msg_for_admins",["inv_id"=>$item->payment->invoice_no,
                                            "amt_paid"=>$item->payment->payed_amount,"paid_date"=>$util::goodDate($item->payment->created_at),
                                            "payer_email"=>$item->payment->payer_email,"symbol"=>$common::getSiteSettings("currency_symbol")])}}"></i>
                                            @endif
                                            @if($item->payment && $item->payment->refund_status)
                                                <span class="badge badge-warning"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.refnd_msg_for_admins",["inv_id"=>$item->payment->refund_id,
                                            "amt_rfnd"=>$item->payment->refund_amount,"status"=>$item->payment->refund_status,"curr"=>$common::getSiteSettings("currency_symbol")
                                            ])}}"></i>
                                            @endif
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'','markDamageBook',
                                                        '{\'id\':')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                        @else
                                            <span class="badge badge-success"></span><br/>
                                            @if($item->sub_book->lost_by==$item->user_id)
                                                <span class="badge badge-danger"></span>
                                            @endif
                                            @if($item->sub_book->damaged_by==$item->user_id)
                                                <span data-toggle="tooltip" data-placement="top"
                                                      title="" class="badge badge-danger"><i
                                                        class="fas fa-faucet"></i></span>
                                            @endif
                                        @endif
                                    </td>

                                </tr>

                            
                            @if(!$items->count())
                                <tr>
                                    <td colspan="14">
                                        <div class="alert alert-dark"></div>
                                    </td>
                                </tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                    @if(isset($items) && $items->count())
                        
                    @endif
                </div>
            </div>
        </div>
    </div>










    <div class="card">
     <div class="card-header blue">
                <span class="card-header-title">All Book</span>
              </div>
        <div class="card-body yellow">

        <div class="card-body">
            <div class="form-row mb-10">
                <div class="col-md">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" wire:model="search_keyword" class="form-control" name=""
                               placeholder="">
                        <div class="input-group-append">
                            <a href="" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <input type="hidden" id="return_date" value="">
                <input type="hidden" id="fine" value="">
                <input type="hidden" id="remark" value="">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                           <th></th>
                            <th>Accession</th>
                            <th>{!!__("common.book_img")!!}</th>
                            <th style="width: 65px;">{!!__("common.user_img")!!}</th>
                            
                            <th>{!!__("common.short_issued_date") !!}</th>
                            <th>{!!__("common.date_to_return")!!}</th>
                            <th>{!!__("common.date_returned")!!}</th>
                            <th>Day Late
                                <i class="far fa-eye mouse" wire:click="$set('dd_filter', true)"></i>
                            </th>
                            <th style="width: 120px;">Day Left</th>
                            <th style="width: 120px;"></th>
                            <th></th>
                            <th>{!!__("common.pl_created_on")!!}</th>
                            <th style="width:120px"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(isset($items))
                            

                            @php
                            @endphp
                                <tr class="@if(\Carbon\Carbon::now()>\Carbon\Carbon::parse($item->date_to_return)) bg-odd @endif text-sm">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <img data-toggle="tooltip" data-placement="top" title=""
                                             style="width: 50px" class="img-thumbnail"
                                             src=""/>
                                    </td>
                                    @php
                                        $name=$item->user->name;
                                        $phone = $item->user->get_phone();
                                        $email = $item->user->email;
                                        $proof = $item->user->get_proof();
                                        $academics = $item->user->get_academic_details();
                                        $short_name = $name;
                                        if(\Illuminate\Support\Str::length($name)>5){
                                           $checkifspace = explode(" ",$name);
                                           if($checkifspace){
                                               $short_name=$checkifspace[0];
                                           }
                                        }
                                    @endphp
                                    <td>
                                        <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>
                                        @if(!empty($email) && $email!='--')
                                            <i class="far fa-envelope" data-toggle="tooltip" data-placement="top"
                                               title=""></i>
                                        @endif

                                        @if(!empty($phone) && $phone!='--')
                                            <i class="fas fa-phone" data-toggle="tooltip"
                                               style="font-size: 12px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($academics) && $academics!='--')
                                            <i class="fas fa-university"  data-toggle="tooltip"
                                               style="font-size: 15px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($proof) && $proof!='--' && !empty($util::fileChecker(public_path("uploads"),$proof,"")))
                                            <a target="_blank" href="">
                                                <i class="fas fa-paperclip mouse" data-toggle="tooltip"
                                                   style="font-size: 12px;margin-left: 5px;"
                                                   data-placement="top"
                                                   title="Proof"></i></a>

                                        @endif

                                    </td>
                                    
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"

                                    >{!! $item->date_returned ? Util::goodDate($item->date_returned): "<input type='text' wire:ignore class='form-control date_picker'/>" !!}</td>
                                    @php
                                        $date_to_return = Illuminate\Support\Carbon::parse($item->date_to_return);
                                        $now = Illuminate\Support\Carbon::now();
                                        $lv_delayed_days = 0;
                                        $lv_fine = 0;
                                        if(!isset($item->date_returned))
                                        {
                                            $this->notifcreator($date_to_return->diffInDays($now) + 1,$item->user_id,$item->sub_book->sub_book_id);
                                            if($now>$date_to_return){ // we are late
                                                $lv_delayed_days = $date_to_return->diffInDays($now);;
                                                $lv_fine = $lv_delayed_days*$common::getSiteSettings("fine_per_day",1);
                                            }
                                         }
                                    @endphp
                                    <td></td>
                                    <td>{!! is_null($item->date_returned) ? $now>$date_to_return ? "MUST RETURN NOW" : $now->diffInDays($date_to_return) + 1 : "Returned" !!}</td>
                                    <td>{!! is_null($item->date_returned) ? ("<textarea id='remark_".$item->id."' rows=3 wire:ignore class='form-control remark_obj text-sm'>".$util::getIfNotEmpty($item->remark)."</textarea>"):
                                ($util::getIfNotEmpty($item->remark) ?? "--") !!}</td>
                                    <td>


                                    <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>

                                    </td>
                                    <td></td>
                                    <td>
                                        @if(!$item->date_returned)
                                            <button type="button"
                                                    onclick="flush_data(');"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            @if($item->payment && $item->payment->payment_status)
                                                <span class="badge badge-primary"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.paid_msg_for_admins",["inv_id"=>$item->payment->invoice_no,
                                            "amt_paid"=>$item->payment->payed_amount,"paid_date"=>$util::goodDate($item->payment->created_at),
                                            "payer_email"=>$item->payment->payer_email,"symbol"=>$common::getSiteSettings("currency_symbol")])}}"></i>
                                            @endif
                                            @if($item->payment && $item->payment->refund_status)
                                                <span class="badge badge-warning"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.refnd_msg_for_admins",["inv_id"=>$item->payment->refund_id,
                                            "amt_rfnd"=>$item->payment->refund_amount,"status"=>$item->payment->refund_status,"curr"=>$common::getSiteSettings("currency_symbol")
                                            ])}}"></i>
                                            @endif
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'','markDamageBook',
                                                        '{\'id\':')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                        @else
                                            <span class="badge badge-success"></span><br/>
                                            @if($item->sub_book->lost_by==$item->user_id)
                                                <span class="badge badge-danger"></span>
                                            @endif
                                            @if($item->sub_book->damaged_by==$item->user_id)
                                                <span data-toggle="tooltip" data-placement="top"
                                                      title="" class="badge badge-danger"><i
                                                        class="fas fa-faucet"></i></span>
                                            @endif
                                        @endif
                                    </td>

                                </tr>

                            
                            @if(!$items->count())
                                <tr>
                                    <td colspan="14">
                                        <div class="alert alert-dark"></div>
                                    </td>
                                </tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                    @if(isset($items) && $items->count())
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>






     <div class="card">
    <div class="card-header blue">
                <span class="card-header-title">List of unreturned book</span>
              </div>
        <div class="card-body yellow">

            <div class="form-row">
                <input type="hidden" id="return_date" value="">
                <input type="hidden" id="fine" value="">
                <input type="hidden" id="remark" value="">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                           <th></th>
                            <th>Accession</th>
                            <th>{!!__("common.book_img")!!}</th>
                            <th style="width: 65px;">{!!__("common.user_img")!!}</th>
                            
                            <th>{!!__("common.short_issued_date") !!}</th>
                            <th>{!!__("common.date_to_return")!!}</th>
                            <th>{!!__("common.date_returned")!!}</th>
                            <th>Day Late
                                <i class="far fa-eye mouse" wire:click="$set('dd_filter', true)"></i>
                            </th>
                            <th style="width: 120px;">Day Left</th>
                            <th style="width: 120px;"></th>
                            <th></th>
                            <th>{!!__("common.pl_created_on")!!}</th>
                            <th style="width:120px"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(isset($items))
                            

                            @php
                            @endphp
                                <tr class="@if(\Carbon\Carbon::now()>\Carbon\Carbon::parse($item->date_to_return)) bg-odd @endif text-sm">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <img data-toggle="tooltip" data-placement="top" title=""
                                             style="width: 50px" class="img-thumbnail"
                                             src=""/>
                                    </td>
                                    @php
                                        $name=$item->user->name;
                                        $phone = $item->user->get_phone();
                                        $email = $item->user->email;
                                        $proof = $item->user->get_proof();
                                        $academics = $item->user->get_academic_details();
                                        $short_name = $name;
                                        if(\Illuminate\Support\Str::length($name)>5){
                                           $checkifspace = explode(" ",$name);
                                           if($checkifspace){
                                               $short_name=$checkifspace[0];
                                           }
                                        }
                                    @endphp
                                    <td>
                                        <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>
                                        @if(!empty($email) && $email!='--')
                                            <i class="far fa-envelope" data-toggle="tooltip" data-placement="top"
                                               title=""></i>
                                        @endif

                                        @if(!empty($phone) && $phone!='--')
                                            <i class="fas fa-phone" data-toggle="tooltip"
                                               style="font-size: 12px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($academics) && $academics!='--')
                                            <i class="fas fa-university"  data-toggle="tooltip"
                                               style="font-size: 15px;margin-left: 5px;"
                                               data-placement="top"
                                               title=""></i>
                                        @endif
                                        @if(!empty($proof) && $proof!='--' && !empty($util::fileChecker(public_path("uploads"),$proof,"")))
                                            <a target="_blank" href="">
                                                <i class="fas fa-paperclip mouse" data-toggle="tooltip"
                                                   style="font-size: 12px;margin-left: 5px;"
                                                   data-placement="top"
                                                   title="Proof"></i></a>

                                        @endif

                                    </td>
                                    
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"></td>
                                    <td class="show_g_dt"

                                    >{!! $item->date_returned ? Util::goodDate($item->date_returned): "<input type='text' wire:ignore class='form-control date_picker'/>" !!}</td>
                                    @php
                                        $date_to_return = Illuminate\Support\Carbon::parse($item->date_to_return);
                                        $now = Illuminate\Support\Carbon::now();
                                        $lv_delayed_days = 0;
                                        $lv_fine = 0;
                                        if(!isset($item->date_returned))
                                        {

                                            if($now>$date_to_return){ // we are late
                                                $lv_delayed_days = $date_to_return->diffInDays($now);;
                                                $lv_fine = $lv_delayed_days*$common::getSiteSettings("fine_per_day",1);
                                            }
                                         }
                                    @endphp
                                    <td></td>
                                    <td>{!! is_null($item->date_returned) ? $now>$date_to_return ? "MUST RETURN NOW" : $now->diffInDays($date_to_return) + 1 : "Returned" !!}</td>
                                    <td>{!! is_null($item->date_returned) ? ("<textarea id='remark_".$item->id."' rows=3 wire:ignore class='form-control remark_obj text-sm'>".$util::getIfNotEmpty($item->remark)."</textarea>"):
                                ($util::getIfNotEmpty($item->remark) ?? "--") !!}</td>
                                    <td>


                                    <figure>
                                            <img data-toggle="tooltip" data-placement="top" title=""
                                                     style="width: 45px" class="img-thumbnail"
                                                     src=""/>
                                            <figcaption class="">
                                                <span class="text-sm"></span><br/>
                                                <span class="badge badge-light">uid:</span>
                                            </figcaption>
                                        </figure>

                                    </td>
                                    <td></td>
                                    <td>
                                        @if(!$item->date_returned)
                                            <button type="button"
                                                    onclick="flush_data(');"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                            @if($item->payment && $item->payment->payment_status)
                                                <span class="badge badge-primary"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.paid_msg_for_admins",["inv_id"=>$item->payment->invoice_no,
                                            "amt_paid"=>$item->payment->payed_amount,"paid_date"=>$util::goodDate($item->payment->created_at),
                                            "payer_email"=>$item->payment->payer_email,"symbol"=>$common::getSiteSettings("currency_symbol")])}}"></i>
                                            @endif
                                            @if($item->payment && $item->payment->refund_status)
                                                <span class="badge badge-warning"></span>
                                                <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                                   title="{{__("common.refnd_msg_for_admins",["inv_id"=>$item->payment->refund_id,
                                            "amt_rfnd"=>$item->payment->refund_amount,"status"=>$item->payment->refund_status,"curr"=>$common::getSiteSettings("currency_symbol")
                                            ])}}"></i>
                                            @endif
                                            <button type="button"
                                                    onclick="lv_confirm_then_submit(this,'','markDamageBook',
                                                        '{\'id\':')"
                                                    class="btn btn-xs btn-dark mb-1">
                                            </button>
                                        @else
                                            <span class="badge badge-success"></span><br/>
                                            @if($item->sub_book->lost_by==$item->user_id)
                                                <span class="badge badge-danger"></span>
                                            @endif
                                            @if($item->sub_book->damaged_by==$item->user_id)
                                                <span data-toggle="tooltip" data-placement="top"
                                                      title="" class="badge badge-danger"><i
                                                        class="fas fa-faucet"></i></span>
                                            @endif
                                        @endif
                                    </td>

                                </tr>

                            
                            @if(!$items->count())
                                <tr>
                                    <td colspan="14">
                                        <div class="alert alert-dark"></div>
                                    </td>
                                </tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                    @if(isset($items) && $items->count())
                        
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-group-xs > .btn, .btn-xs {
            padding: .45rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }

        @media screen and (max-width: 480px) {
            .text-sm .btn {
                line-height: 12px;
            }
        }


    </style>
</div>


