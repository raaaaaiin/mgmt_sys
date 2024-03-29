<div>
    @php
        /* @var \App\Facades\Util $util */
        /* @var \App\Facades\Common $common */
    @endphp
    @if(session()->has("form_enquiries") && session()->has("form_enquiries"))
        <div class="row">
            <div class="col-12">
                @include("common.messages")
            </div>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        @if($contact->read)
                            <button type="button" wire:click="read(,0)"
                                    class="btn btn-sm btn-dark enqir_btn">
                                <i class="fas fa-envelope-open-text" style="font-size: 18px;"></i>
                            </button>
                        @else
                            <button type="button" wire:click="read(,1)" style="width: 37px;float: left;"
                                    class="btn btn-sm btn-dark border-radius-0 enqir_btn">
                                <i class="far fa-envelope"></i>
                            </button>
                        @endif
                        <button

                            onclick="lv_confirm_then_submit(this,'')"
                            type="button"
                            class="btn btn-sm btn-danger border-radius-0 enqir_btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>

                    </td>
                </tr>
            
            @if($contacts->isEmpty())
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
