<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
    <style>
        /* Custom styles for the table */
        table.table tbody {
            background-color: white;
        }
        table.table tbody tr {
            border-bottom: 1px solid #dee2e6;
        }
    </style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header blue">
                    <span class="card-header-title">Course Yeasr</span>
                    <a href="{{route("course.create")}}" class="btn btn-sm btn-dark float-right">
                        <i class="fas fa-plus-circle mr-1"></i>Add Course
                    </a>
                </div>
                <div class="card-body pt-1">
                    <div class="row mt-2">
                        <div class="col-12">
                            <!-- Include common messages -->
                        </div>
                    </div>

                    <div class="table-responsive mt-2">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody style="background-color: white;">
                                <!-- If !$courses || $courses->count()==0 -->
                                     
                                <!-- endif -->

                                <!-- foreach $courses as $course -->
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <ul class="list-group">
                                            <!-- foreach \App\Models\Course_Year::where("course_id",$course->id)->get() as $obj -->
                                                <!-- if $obj->course_id -->
                                                    <li class="list-group-item">
                                                        <!-- $common::getCourseYearName($obj->course_year_id) -->
                                                        <a href="{{route('user-mng.index')}}?page_mode=promotion&course_id={{$course->id}}&course_year={{$obj->course_year_id}}" style="font-size: 15px;float: right;"
                                                           data-toggle="tooltip" data-placement="top"
                                                           title="Promote the users to the next academic year Or Archive them">
                                                            <i class="fab fa-accessible-icon"></i> Promotions</a>
                                                    </li>
                                                <!-- endif -->
                                            <!-- endforeach -->
                                        </ul>
                                    </td>

                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-dark action_btn">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <!-- Form open -->
                                            <button class="btn btn-sm btn-danger action_btn" type="button">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <!-- Form close -->
                                        </div>
                                    </td>
                                </tr>

                                <!-- endforeach -->
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-dark">No Year Exist</div>
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
