@extends("back.common.master")
@section("page_name")  @endsection
@section("content")
    @if(isset($search))
        @livewire("issued-books",["search_keyword"=>$search])
    @else
        @livewire("issued-books")
    @endif
@endsection
@section("css_loc")
    <link rel="stylesheet" href="">
@endsection
@section("js_loc")
<script src=""></script>
<script src=""></script>

<script src=""></script>
<script src=""></script>

    <script src=""></script>
@endsection
