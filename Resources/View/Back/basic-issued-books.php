<div class="w-100">
    @php
        /* @var \App\Facades\Util $util */
        /* @var \App\Facades\Common $common */
    @endphp
    <div class="form-row">
        <input type="hidden" id="return_date" value="">
        <input type="hidden" id="fine" value="">
        <input type="hidden" id="remark" value="">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <td></td>
                    <td>{!!__("common.bc").CForm::generateInfoToolTip(__('common.pl_bc'),'','left')!!}</td>
                    <td>{!!__("common.book_img")!!}</td>
                    <td>{!!__("common.user_img")!!}</td>
                    <td></td>
                    <td>{!!__("common.short_issued_date").CForm::generateInfoToolTip(__('common.pl_issued_date'),'','left') !!}</td>
                    <td>{!!__("common.date_to_return").CForm::generateInfoToolTip(__('common.pl_dtr'),'','left')!!}</td>
                    <td>{!!__("common.date_returned").CForm::generateInfoToolTip(__('common.pl_dr'),'','left')!!}</td>
                    <td>{!!__("common.dd").CForm::generateInfoToolTip(__('common.pl_dd'),'','left')!!}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @if(isset($items))
                    
                        <tr class="@if(\Carbon\Carbon::now()>\Carbon\Carbon::parse($item->date_to_return)) bg-odd @endif text-sm">
                            <td></td>
                            <td></td>
                            <td>
                                <img style="width: 50px" class="img-thumbnail" src=""/>
                            </td>
                            @php
                                $name=$item->user->name;
                                $short_name = $name;
                                if(\Illuminate\Support\Str::length($name)>5){
                                   $checkifspace = explode(" ",$name);
                                   if($checkifspace){
                                       $short_name=$checkifspace[0];
                                   }
                                }
                            @endphp
                            <td>
                                <figure><img data-toggle="tooltip" data-placement="top" title=""
                                             style="width: 25px" class="img-thumbnail"
                                             src=""/>
                                    <figcaption class="">
                                        <span class="text-sm"></span><br/>
                                        <span class="badge badge-light">uid:</span>
                                    </figcaption>
                                </figure>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{!! $item->date_returned ? Util::goodDate($item->date_returned): "--" !!}</td>
                            @php
                                $date_to_return = Illuminate\Support\Carbon::parse($item->date_to_return);
                                $now = Illuminate\Support\Carbon::now();
                                $lv_delayed_days = 0;
                                $lv_fine = 0;
                                if(!isset($item->date_returned)){
                                    if($now>$date_to_return){ // we are late
                                        $lv_delayed_days = $date_to_return->diffInDays($now);
                                        $lv_fine = $lv_delayed_days*$common::getSiteSettings("fine_per_day",1);
                                    }
                                 }
                            @endphp
                            <td></td>
                            <td>{!! is_null($item->date_returned) && $item->payment && !$item->payment->payment_status ? $common::getSiteSettings("currency_symbol").' '.$lv_fine :($item->fine ? $common::getSiteSettings("currency_symbol").' '.$item->fine : "--") !!}</td>


                            <td>{!! '<i class="far fa-user-circle" data-toggle="tooltip" data-placement="left" title="'.($item->issued_by_person ? $item->issued_by_person->name : "--").'"></i>' !!}</td>

                            <td>
                                @if(!$item->date_returned && $lv_delayed_days > 0 && $common::getSiteSettings("enable_PAYPAL_SANDBOX",false))
                                    
                                    @if(!$item->payment)
                                        <button type="button"
                                                onclick="lv_confirm_then_submit(this,'',
                                                    'startPayment','{\'id\':');"
                                                class="btn btn-xs btn-dark mb-1">
                                        </button>
                                    @else
                                        @if($item->payment->payment_status)
                                            <span class="badge badge-primary"></span>
                                            <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                               title=""></i>
                                        @endif
                                    @endif
                                @else
                                    @if($item->date_returned)
                                    <span class="badge badge-success"></span><br/>
                                    @else
                                    <span class="badge badge-warning"></span><br/>
                                    @endif
                                    @if($item->sub_book->lost_by==$item->user_id)
                                        <span class="badge badge-danger"></span>
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
        </div>
        @if(isset($items) && $items->count())
            
        @endif
    </div>
</div>
