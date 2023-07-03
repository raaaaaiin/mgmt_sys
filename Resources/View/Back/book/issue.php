@php
    /* @var \App\Facades\Util $util */
    /* @var \App\Facades\Common $common */
@endphp
@extends("back.common.master")
@section("page_name")  @endsection
@section("content")
    @if(isset($id))
        @livewire("issue",["book_id_to_issue"=>$id])
    @else
        @livewire("issue")
    @endif
    @include("back.common.spinner")
@endsection
@section("css_loc")
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
@endsection
@section("js_loc")
<script src=""></script>
<script src=""></script>

<script src=""></script>
<script src=""></script>

    <script>
        url_json_user = "";
        url_book_user = "";
    </script>
    <script src=""></script>
    <script src=""></script>
    <script>
        $(document).ready(function () {
            $("#user_autocomplete").on("change", function () {
                $(".user_history_holder").show();
                if ($(this).val().length) {
                    $("#user_history").attr("href", '?search=' + $("#user_id").val() + ",")
                } else {
                    $(".user_history_holder").hide();
                    $("#user_history").attr("href", '#');
                }
            });
            $("#book_autocomplete").on("change", function () {
                $(".book_history_holder").show();
                if ($(this).val().length) {
                    $("#book_history").attr("href", '?search=' + $("#book_span_code").text())
                } else {
                    $(".book_history_holder").hide();
                    $("#book_history").attr("href", '#');
                }
            });

            window.addEventListener('refresh_user_book_cnt', event => {
                $.ajax({
                    url: '',
                    dataType: "json",
                    data: {
                        user_id: event.detail.user_id
                    },
                    success: function (data) {
                        $("#user_borrowed_cnt").text(data.borrowed);
                    }
                });
            });

        })


    </script>
@endsection
