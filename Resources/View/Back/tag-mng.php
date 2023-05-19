<?php
/* @var \App\Facades\Util $util */
/* @var \App\Facades\Common $common */
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">

    </style>
</head>
<div class="card">

    <div class="card-body yellow">
        <?php /* // @if(session()->has("form_tag") && session()->has("form_tag")) ?>
            <div class="row">
                <div class="col-12">
                    <?php // @include("common.messages") ?>
                </div>
            </div>
        <?php // @endif */ ?>

        <form class="col-12" role="form" wire:submit.prevent="saveTag">
            <div class="form-row">

                <div class="col-12 mb-2">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><?php /* echo __("commonv2.tag_name"); */?>Search for Tag name</span></div>
                        <div class="form-control border-0 p-0">
                            <input type="text" class="form-control" required wire:model.defer="tag_name">
                        </div>
                        <div class="input-group-append">
                           
                        </div>
                    </div>
                    <div class="w-100"><?php /* @error('tag_name') @include('back.common.validation', ['message' =>  $message ]) @enderror */ ?></div>
                </div>
            </div>
        </form>
        <div class="col-12 mt-2">
            <div class="d-flex mb-2">
                <?php /* {!! CForm::inputGroupHeader(__("common.filter")) !!} */ ?>
                <input type="text" class="form-control" wire:model.debounce.800ms="search_keyword">
                <div class="input-group-append">
                    <button class="btn btn-danger" type="button" wire:click="clearSearch()">
                        <i class="far fa-trash-alt"></i>
                    </button> 
                    <button type="submit" class="btn btn-sm btn-dark">
                    <i class="fas fa-plus-circle"></i>
                        <?php /* if($mode=="create"): ?>
                            <i class="fas fa-plus-circle"></i>
                            <?php echo __("common.create"); ?>
                        <?php else: ?>
                            <i class="fas fa-save"></i>
                            <?php echo __("common.update"); ?>
                        <?php endif; ?>
                        <?php echo __("commonv2.tag"); */ ?>
                    </button>
                </div>
                <?php /* {!! CForm::inputGroupFooter() !!} */ ?>
            </div>
            <div class="table-responsive">
            <table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col"><?php echo "Id"; ?></th>
            <th scope="col"><?php echo "Tag_name"; ?></th>
            <th scope="col"><?php echo "Books"; ?></th>
            <th scope="col"><?php echo "Action"; ?></th>
        </tr>
    </thead>
    <tbody style="background-color: white;">
        <!-- Placeholder for items -->
        <!-- If $items->total() -->
        <!-- foreach $items as $item -->
        <tr>
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
            <td>a</td>
            <td>b</td>
            <td style="border-right: 1px solid lightgray;">
                <!-- Placeholder for books_titles -->
                <!-- If count($books_titles) -->
                <!-- foreach $books_titles as $book -->
                <!-- if not $loop->last --><!-- endif -->
                <!-- endforeach -->
                <!-- else -->
                <span class="text-sm">C</span>
                <!-- endif -->
            </td>
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
                <div class="alert alert-dark"><!-- __("commonv2.no_tag_exist") --></div>
            </td>
        </tr>
        <!-- endif -->
    </tbody>
</table>

            </div>
            <?php /* echo $items->links(); */ ?>
        </div>
    </div>
</div>
