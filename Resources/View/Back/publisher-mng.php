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
<div>
    <div class="card">
        <div class="card-body yellow">
            <!-- If session()->has("form_publisher") && session()->has("form_publisher") -->
            <div class="row">
                <div class="col-12">
                    <!-- Include common messages -->
                </div>
            </div>
            <!-- endif -->
            <form class="col-12" role="form" wire:submit.prevent="savePublisher">
                <div class="form-row">
                    <div class="col-12 mb-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Publisher Name</span></div>
                            <div class="form-control border-0 p-0">
                                <input type="text" class="form-control" required wire:model.defer="publisher_name">
                            </div>
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                        <div class="w-100">
                            <!-- @error('publisher_name') @include('back.common.validation', ['message' => $message ]) @enderror -->
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-12 mt-2">
                <div class="d-block mb-2">
                    <!-- {!! CForm::inputGroupHeader(__("common.filter")) !!} -->
                    <input type="text" class="form-control" wire:model.debounce.800ms="search_keyword">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" wire:click="clearSearch()">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-dark">
                            <!-- @if($mode=="create") -->
                                <i class="fas fa-plus-circle"></i>
                                <!-- {{__("common.create")}} -->
                            <!-- @else -->
                                <i class="fas fa-save"></i>
                                <!-- {{__("common.update")}} -->
                            <!-- @endif -->
                            <!-- {{__("common.publisher")}} -->
                        </button>
                    </div>
                    <!-- {!! CForm::inputGroupFooter() !!} -->
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Books Published</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #fff;">
                            <!-- If $items->total() -->
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>
                                        <!-- @php $books_titles = $item->books()->pluck("books.title")->toArray(); @endphp -->
                                        <!-- @if(count($books_titles)) -->
                                            <!-- @foreach($books_titles as $book) -->
                                                <!-- <a target="_blank" href="{{url('/')."/details/".$common::utf8Slug($book)}}" class="btn-link text-sm">{{Str::title($book)}}</a> -->
                                                <!-- @if(!$loop->last),@endif -->
                                            <!-- @endforeach -->
                                        <!-- @else -->
                                            <span class="text-sm">--</span>
                                        <!-- @endif -->
                                    </td>
                                    <td>
                                        <button type="button" wire:click="editPublisher({{$item->id}})" class="btn float-left btn-sm btn-dark action_btn">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button 
                                            type="button" class="btn float-left btn-sm btn-danger action_btn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            <!-- else -->
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-dark">{{__("commonv2.no_publisher_exist")}}</div>
                                </td>
                            </tr>
                            <!-- endif -->
                        </tbody>
                    </table>
                </div>
                <!-- {{$items->links()}} -->
            </div>
        </div>
    </div>
</div>