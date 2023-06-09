<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body yellow">
                    <!-- @if(session()->has('form_setting') && session()->get('form_setting')) -->
                        <div class="row">
                            <div class="col-12">
                                <!-- @include("common.messages") -->
                            </div>
                        </div>
                    <!-- @endif -->

                    <div class="row">
                        <div class="col-12">


                            <div id="backup" class="tabcontent" style="    width: 100%!important;">
                                <h3 style="padding-top: 15px;">DB BACKUP</h3>
                                <p>Data base Back up Description</p>
                                <form method="post" action="{{route('file.db_mng')}}">
                                    <!-- @csrf -->
                                    <input name="do" type="hidden" value="backup">
                                    <input name="frm_name" type="hidden" value="backup">
                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-cloud-upload-alt mr-1"></i>
                                    </button>
                                </form>
                                <table class="table table-striped table-hover table-sm mt-2">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Db File Name</th>
                                        <th scope="col">File Size</th>
                                        <th scope="col">Created on</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- @php
                                        $items = $util::getDbBackupFiles();
                                    @endphp
                                    @if(count($items))
                                        @php $count = 1; @endphp
                                        @foreach($items as $key=>$value) -->
                                            <tr>
                                                <td>1</td>
                                                <td>Dummy.sql</td>
                                                <td>124gb</td>
                                                <td>May 20, 2023</td>
                                                <td>
                                                    <form class="d-inline" method="post"
                                                          action="{{route('file.db_mng')}}">
                                                        <input type="hidden" name="filename" value="{{$key}}">
                                                        <input type="hidden" name="do" value="restore">
                                                        <input name="frm_name" type="hidden" value="backup"/>
                                                        <button class="btn p-2" type="submit" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="{{__("common.restore_db")}}"><i
                                                                class="fas fa-sync"></i></button>
                                                    </form>
                                                    <form class="d-inline" method="post" id="delete_{{$count}}"
                                                          action="{{route('file.db_mng')}}">
                                                        <input type="hidden" name="filename" value="{{$key}}">
                                                        <input type="hidden" name="do" value="delete">
                                                        <input name="frm_name" type="hidden" value="backup"/>
                                                        <button
                                                            onclick="confirm_then_submit('')"
                                                            class="btn p-2"
                                                            type="button" data-toggle="tooltip" data-placement="top"
                                                            title="{{__("common.del_this_bck")}}"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <tr>
                                            <td colspan="100">
                                                <div
                                                    class="alert alert-dark col-12">No data exist</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- @endsection
@section("css_loc") -->
<!-- @endsection
@section("js_loc") -->
<!-- @endsection -->
