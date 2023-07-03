@extends("back.common.master")
@section("page_name")
    
@endsection
@section("content")
    <div class="content">
        <div class="container-fluid">
            @livewire("role-perm-mng")
        </div>
    </div>
@endsection
@section("css_loc")
    <style>
        table .badge {
            border-radius: 0px !important;
        }
    </style>
@endsection
