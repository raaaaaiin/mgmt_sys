<section class="navbar-area sticky" style="width:100vw">

    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="" style="padding:0px">
                        @if(!empty($common::getSiteSettings('org_logo')))
                            <img class="logo_img"
                                 src=""
                                 alt="">
                        @else
                            <img class="logo_img" href=""
                                 src=""
                                 alt="">
                        @endif
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                            aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                    @livewire('search-users')
                    @include("back.common.spinner")
                        <ul class="navbar-nav" style="margin-left: auto;">
                            <li class="nav-item active"><a class="page-scroll"
                                                           href="@if(request()->is("/")) #home @else </a>
                            </li>
                            
                            @if(Auth::check())
                                <li class="nav-item"><a class=""
                                                        href="</a>
                                </li>
                            @else
                            
                               
                           
                                <li class="nav-item"><a class="" wire:click="activeUser" href="</a>
                                </li>
                            @endif
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>

                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
