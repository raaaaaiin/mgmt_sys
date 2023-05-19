
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">

    </style>
</head>
<body>
<div>
    <div class="card">
        <!-- Placeholder for spinner -->
        <div class="card-body yellow">
            <!-- If session has "form_author" and "form_author" -->
            <div class="row">
                <div class="col-12">
                    <!-- Include common messages -->
                </div>
            </div>

            <form class="col-12" role="form" wire:submit.prevent="saveAuthor">
                <div class="form-row">
                    <div class="col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">author_name</span></div>
                            <div class="form-control border-0 p-0">
                                <input type="text" class="form-control" required wire:model.defer="author_name">
                            </div>
                            <div class="input-group-append">
                                <!-- Additional append content -->
                            </div>
                        </div>
                        <div class="w-100"><!-- @error('author_name') @include('back.common.validation', ['message' =>  $message ]) @enderror --></div>
                    </div>
                </div>
            </form>
            <div class="col-12 mt-2 mb-2">
                <div class="d-flex">
                    <!-- Placeholder for input group header -->
                    <input type="text" class="form-control" wire:model.debounce.800ms="search_keyword">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" wire:click="clearSearch()">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-dark">
                            <!-- If $mode == "create" -->
                            <!-- else -->
                            <!-- endif -->
                            author
                        </button>
                    </div>
                    <!-- Placeholder for input group footer -->
                </div>
                <div class="table-responsive mt-2">
                <table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">author_name</th>
            <th scope="col">books_written</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody style="background-color: white;">
        <!-- If $items->total() -->
        <!-- foreach $items as $item -->
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid lightgray;">Data</td>
            <td>Data</td>
            <td>Data</td>
            <td>
                <button type="button" class="btn float-left btn-sm btn-dark action_btn">
                    <i class="far fa-edit"></i>
                </button>
                <button type="button" class="btn float-left btn-sm btn-danger action_btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>

        <!-- endforeach -->
        <!-- else -->
        <tr>
            <td colspan="10">
                <div class="alert alert-dark">Show if no_author_exist</div>
            </td>
        </tr>
        <!-- endif -->
    </tbody>
</table>

                </div>
                <!-- Placeholder for pagination links -->
            </div>
        </div>
    </div>
</div>
