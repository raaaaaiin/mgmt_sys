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
            background-color: #fff;
        }
    </style>
</head>
<div class="container">
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
                                    <th>ID</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff;">
                                <!-- If !$courseYear || $courseYear->count()==0 -->
                                    
                                <!-- endif -->
                                <!-- foreach $courseYear as $cy -->
                                <tr>
                                    <td>ID</td>
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td>Year</td>
                                    <td>
                                        <div class="input-group">
                                            <a href="{{ route('course-year.edit', $cy->id) }}" class="btn btn-sm btn-dark action_btn">
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
                                    <td colspan="3">
                                        <div class="alert alert-dark">No year existing</div>
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
