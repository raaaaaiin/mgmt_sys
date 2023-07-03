<div>
    @php
        /* @var \App\Facades\Util $util */
        /* @var \App\Facades\Common $common */
    @endphp
    <div class="card">
        <div class="card-body yellow">
            @can("mng-transaction")
                <div class="row mb-10">
                    <div class="col-12">
                        {!! CForm::inputGroupHeader(__("common.advanced_filter")) !!}
                        <input type="text" wire:model="search_keyword" class="form-control">
                        <div class="input-group-append">

                            <select class="form-control" wire:model="sel_payment_type">
                                <option value=""></option>
                                <option value="refund"></option>
                                <option value="all"></option>
                            </select>
                            <select class="form-control" wire:model="sel_working_year">
                                <option value=""></option>
                                
                                    <option value="</option>
                                
                            </select>
                        </div>
                        {!! CForm::inputGroupFooter() !!}
                    </div>
                </div>
            @endcan
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <thead>
                    <tr class="text-sm">
                        <th scope="col">#</th>

                        <th scope="col"></th>
                        <th scope="col"
                            style="width: 60px;">{!!__("common.uid").CForm::generateInfoToolTip(__("common.user_id"),'','left')!!}</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        @can("mng-transaction")
                            <th scope="col"></th>
                            <th scope="col">{!!__("common.fee_payer_id").CForm::generateInfoToolTip(__("common.pl_payer_id"),'','left')!!}</th>
                            <th scope="col">{!!__("common.fee_paid_by_email").CForm::generateInfoToolTip(__("common.pl_fee_paid_by_email"),'','left')!!}</th>
                            <th scope="col">{!!__("common.pl_ref_url").CForm::generateInfoToolTip(__("common.ref_url"),'','left')!!}</th>
                            <th scope="col"></th>
                            <th scope="col">{!!__("common.pl_payer_name").CForm::generateInfoToolTip(__("common.payer_name"),'','left')!!}</th>
                            <th scope="col">{!!__("common.pay_id").CForm::generateInfoToolTip(__("common.pl_payer_id"),'','left')!!}</th>
                        @endcan
                        <th scope="col"
                            style="width: 103px;">{!!__("common.pl_paid_amount").CForm::generateInfoToolTip(__("common.paid_amount"),'','left')!!}</th>
                        <th scope="col"
                            style="width: 94px;">{!!__("common.pl_pay_status").CForm::generateInfoToolTip(__("common.pay_status"),'','left')!!}</th>


                        <th scope="col"
                            style="width: 81px;">{!!__("common.pl_working_year").CForm::generateInfoToolTip(__("common.working_year"),'','left')!!}</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($receipts) && $receipts->count()>0)
                        
                            <tr>
                                <td></td>
                                <td class="text-sm" style="width: 85px;"><span
                                        class="p_email_wrap"></span>
                                    @if(isset($receipt->refund_amount) && $receipt->refund_amount)
                                        <span data-toggle="tooltip" data-placement="top" title=""
                                              class="badge badge-warning"></span>
                                        <span data-toggle="tooltip" data-placement="top"
                                              title=""
                                              class="badge badge-success"></span>
                                        <span data-toggle="tooltip" data-placement="top" title=""
                                              class="badge badge-success"></span>
                                    @endif
                                </td>
                                <td class="text-sm">
                                    
                                    @can("mng-transaction")
                                        {!! CForm::generateInfoToolTip(__('common.tp_assign_trans')) !!}
                                        <input type="text" class="form-control" id="assign_">
                                        <button class="btn btn-dark btn-xs"
                                                onclick="flush_before(')"
                                                type="button"
                                        ></button>

                                    @endcan
                                </td>
                                <td class="text-sm"></td>
                                <td></td>
                                <td></td>

                                <td class="text-sm"><span
                                        class="badge badge-dark w-100">
                                    <span
                                        class="badge badge-dark w-100">
                                </td>
                                @can("mng-transaction")
                                    <td></td>
                                    <td></td>
                                    <td class="text-sm"><span class="p_email_wrap"></span></td>
                                    <td class="text-sm">
                                        @if($receipt->refund_status=="completed")
                                            <span class="badge badge-warning"></span>
                                            <span class="p_email_wrap p_refund_wrap"> </span>
                                        @else
                                            <input class="form-control" data-toggle="tooltip" data-placement="left"
                                                   title="" type="text"
                                                   id="refund_">
                                            <button class="btn btn-danger btn-xs"
                                                    onclick="start_refund('</button>
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-sm"><span class="p_email_wrap"></span></td>
                                @endcan
                                <td><span id="payed_amt_</span></td>
                                <td></td>


                                <td></td>
                                <td></td>

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
