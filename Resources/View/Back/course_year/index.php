<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">

</head> <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header blue">
                        <span class="card-header-title">{{__("course_year.mng_cy")}}</span>
                        <a href="" class="btn btn-sm btn-dark float-right">
                            <i class="fas fa-plus-circle mr-1"></i>{{__("course_year.add_cy")}}
                        </a>
                    </div>
                    <div class="card-body pt-1">

                        <div class="row margin_top_2p">
                            <div class="col-12 mt-2">
                                <!-- Include common messages -->
                            </div>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>{{__("common.id")}}</th>
                                        <th>{{__("course_year.cy")}}</th>
                                        <th>{{__("common.action")}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- If !$courseYear || $courseYear->count()==0 -->
                                        <tr>
                                            <td colspan="3">
                                                <div class="alert alert-dark">{{__("course_year.no_cy_exist")}}!</div>
                                            </td>
                                        </tr>
                                    <!-- endif -->
                                    <!-- foreach $courseYear as $cy -->
                                    <tr>
                                        <td><!-- $cy->id --></td>
                                        <td><!-- $cy->year --></td>
                                        <td>
                                            <div class="input-group">
                                                <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <!-- Form open -->
                                                <button class="btn btn-sm btn-danger action_btn" type="button" onclick="confirm_then_submit('{{__("common.cnf_del")}}', 'division_delete_{{$cy->id}}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <!-- Form close -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- endforeach -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
