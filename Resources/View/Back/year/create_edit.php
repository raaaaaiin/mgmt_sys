@extends("back.common.master")
@section("page_name")
    
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header blue"><span class="card-header-title"></span>
                        <a href=""
                           class="btn btn-sm btn-dark float-right"><i class="fas fa-plus-circle mr-1"></i></a></div>
                    <div class="card-body yellow">

                        <div class="">
                            @include("common.messages")
                            <form method="post"
                                  action="">
                                @csrf
                                @if($mode!="create")
                                    <input type="hidden" name="_method" value="PUT">
                                @endif
                                <div class="mb-2">
                                    {!! CForm::completeTextBox(__("year.wrk_yr"),
                                    "year_from",$year->year_from,__("year.pl_wrk_yr"),null,null,true,null) !!}
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="save" name="submit" class="btn btn-sm btn-dark">
                                        <i class="fas fa-save mr-1"></i>
                                    </button>
                                    <button type="submit" value="save_and_add_more" name="submit"
                                            class="btn btn-sm btn-dark"><i class="fas fa-save mr-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
