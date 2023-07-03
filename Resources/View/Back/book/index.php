@extends("back.common.master")
@section("page_name")  @endsection
@section("content")
    @if(isset($id))
        @livewire("book",["edit_id"=>$id])
    @else
        @livewire("book")
    @endif
@endsection

@section("css_loc")
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link href="" rel="stylesheet">
@endsection
@section("js_loc")
    <script src=""></script>
    <script src=""></script>
    <script type="text/javascript" src=""></script>
    <script src=""></script>
    <script>
        $('.select2-multiple').select2({tags: true, tokenSeparators: [',']});
        $('#author').on('select2:select', function (e) {
            window.livewire.emit('data_manager', {"authors": $('#author').val()});
        });
        $('#publisher').on('select2:select', function (e) {
            window.livewire.emit('data_manager', {"publishers": $('#publisher').val()});
        });
        window.addEventListener('select_2_refresh', event => {
            $('.select2-multiple').select2({tags: true, tokenSeparators: [',']});
            $('#tag').select2({tags: true, tokenSeparators: [',']});
            $('#medtypes').select2({tags: true, tokenSeparators: [',']});
        });
        $('#tag').select2({tags: true, tokenSeparators: [',']});
        $('#tag').on('select2:select', function (e) {
            window.livewire.emit('data_manager', {"tags": $('#tag').val()});
        });
        $('#medtypes').select2({tags: true, tokenSeparators: [',']});
        $('#medtypes').on('select2:select', function (e) {
            window.livewire.emit('data_manager', {"medtypes": $('#medtypes').val()});
        });

        function refesh_desc() {
            $('#desc').summernote({
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: true,
                callbacks: {
                    onBlur: function (e) {
                        window.livewire.emit('data_manager', {"desc": $('#desc').summernote('code')});
                    }
                }
            });
        }

        $(document).ready(function () {
            refesh_desc();
        });

        window.addEventListener('refresh_desc', event => {
            refesh_desc();
        });
        window.addEventListener('desc_changed', event => {
            debugger;
            $('#desc').summernote('code', event.detail.desc);
        });
    </script>
@endsection
