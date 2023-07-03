@extends("back.common.master")
@section("page_name")  @endsection
@section("content")








    @livewire("sub-book")
@endsection
@section("css_loc")
    <style>

    </style>
@endsection

@section("js_loc")
    <script>
        $(document).ready(function () {
            flush_data = function ($id) {
                let element = $("#cat_" + $id);
                if (element.length) {
                    window.livewire.emit("data_manager", {"cat_detail": element.val()});
                }

            }
        });
    </script>
@endsection
