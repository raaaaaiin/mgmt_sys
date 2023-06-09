<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
<body><div><div class="card" id="notice_holder">
        <div class="card-body yellow"><div class="row">
                    <div class="col-12">
                    </div>
                </div><form id="frm_notice" wire:submit.prevent="add_notice"><div class="form-row">
                    <input type="hidden" name="mode" wire:model="mode">
                    <input type="hidden" name="id" wire:model="selected_id">

                    <div class="col-md-3 col-12 mb-2 {{$give_to_role_holder}}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date</span>
                            </div>
                            <input wire:model="issue_date_tmp" class="form-control" name="issue_date_tmp" id="issue_date_tmp">

                            
                        </div>
                    </div>
                    <div class="col-md-3 col-12 mb-2 {{$give_to_role_holder}}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">To: *Leave blank if single date only</span>
                            </div>
                            <input wire:model="to_date" class="form-control" name="to_date" id="to_date">

   div class="input-group-prepend">
                                <span class="input-group-text">Reason : Holiday Or Suspension</span>
                            </div>
                            <input wire:model.lazy="reason" class="form-control" id="reason" name="reason">


                            
                        </div>
                    </div>
                    <div class="col-md-2 col-12 mb-2 {{$give_to_user_holder}}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Coverage</span>
                            </div>
                            <select wire:model="coverage" class="form-control" id="coverage" name="coverage">
                                    <option>--</option>
                                   <option>Yearly</option>
                                   <option>This Year</option>

                            </select>
                        </div>
                    </div>

                           <div class="col-md-1 col-12">
                        <div class="input-group">
                         <div class="input-group-prepend">
                                <span class="input-group-text">Submit</span>
                            </div>
                            <button type="submit" class="btn btn-dark btn-sm">
                                <i class="fas fa-plus-circle mr-1"></i>Add Holiday
                            </button>
                        </div>
                    </div>


                </div>                                                                                                                                                                                                                   
            </form>

        </div>
    </div>
    <div class="card">
        <div class="card-body yellow">
            <div class="table-responsive"><table class="table table-hover table-sm">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" style="width: 25%;">Date</th>
                        <th scope="col" style="width: 25%;">To Date</th>
                        <th scope="col" style="width: 30%;">Reason</th>

                        <th style="width: 12%;" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody><tr>
                                <td>1</td>
                                <td>06/27/2000</td>
                                <td>06/30/20000</td>
                                <td>Birthday ko baket?</td>

                                <td><button title="{{__('common.active_and_visible')}}" class="btn btn-sm btn-primary action_btn float-left" type="button" wire:click="noticeStatus({{$notice->id}},0)"><i class="far fa-eye"></i>
                                        </button><button title="{{__('common.deactive_and_visible')}}" class="btn btn-sm btn-primary action_btn float-left" type="button" wire:click="noticeStatus({{$notice->id}},1)"><i class="far fa-eye-slash"></i></button><button wire:click="editNotice({{$notice->id}})" type="button" class="btn btn-sm btn-dark btn_edit action_btn float-left">
                                                                                                                                                                                                                                                                                                                                        <i class="far fa-edit"></i>
                                    </button>


                                </td>
                            </tr><tr>
                            <td colspan="100">
                                <div class="alert alert-dark">No notice existy</div>
                            </td>
                        </tr></tbody>
                </table>
            </div></div>
    </div>

    <script src="{{asset('js/jquery-1.12.4.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <script>
    let x;
    let y;
    $(document).ready(function() {
    $("#issue_date_tmp").datepicker({

            todayHighlight: false,
        dateFormat: 'mm/dd/yy',
        altField: "#issue_date",
        altFormat: 'mm/dd/yy',
        onSelect: function () {
         x =$("#issue_date_tmp").val();

     window.livewire.emit('data_manager', {"issue_date": x});


         $("#to_date").datepicker({

            todayHighlight: false,
        dateFormat: 'mm/dd/yy',
        minDate:x,
        altField: "#issue_date",
        altFormat: 'mm/dd/yy',
        onSelect: function () {
          y =$("#to_date").val();

    window.livewire.emit('data_manager', {"to_date": y});


         }
    }).datepicker();











         }
    }).datepicker("setDate", new Date());

});



    </script>
</div>


</body>