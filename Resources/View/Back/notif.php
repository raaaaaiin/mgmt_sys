@extends("back.common.master")
@section("page_name") {{__("common.issued_book_list")}} @endsection
@section("content")

        @livewire("notification")

@endsection
@section("css_loc")
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <style>

    </style>
@endsection
@section("js_loc")
    <script src="{{asset('js/book_issued.js')}}"></script>
@endsection
