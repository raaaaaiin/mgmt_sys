@php
$loading_target ="activeUser";
@endphp

<aside class="main-sidebar sidebar-light-primary elevation-1" style="position:fixed">
<style>a{color: #607d8b;
        padding:10px;
}</style>
    <!-- Brand Logo -->
    <a href=""  style="background-color:#0B5793;padding-left:0px" class="brand-link" >
        <img style="margin-left:-3px;max-height: 45px;margin-top: -7px;" src=""
             alt=""
             class="brand-image"
        >
        <span
            class="brand-text font-weight-light" style="color:#0B5793"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img style="max-width: none;" src=""
                     class="img-thumbnail border-0 p-0"
                     alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
                
                    <span class="badge badge-primary"></span>
                
                @php
                    $assigned_on=$common::getStandardDivisionAssignedToLoggedInUser();
                @endphp
                @if($assigned_on)
                    
                        
                            <span
                                class="badge badge-primary">
                                </span>
                            <br/>
                        
                    
                @endif
            </div>
        </div>
        <style>
       

        ::-webkit-scrollbar {
  width: 9px;
}
::-webkit-scrollbar-track {
  background: transparent;
}
::-webkit-scrollbar-thumb {
  background-color: rgba(155, 155, 155, 0.5);
  border-radius: 20px;
  border: transparent;
}

</style>
        <!-- Sidebar Menu -->
        <nav class="mt-2" style="height:75vh; overflow-y:auto; overflow-x: hidden; ">
        @include("back.common.spinner")
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent text-sm" data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

               
                @can("view-newsfeed")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("news-feed*")) active @endif">
                            <i class="nav-icon fa-thin fa-table-tree"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("view-timeline")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("timeline*")) active @endif">
                            <i class="nav-icon fa-thin fa-table-rows"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("view-discover-books")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("discover*")) active @endif">
                            <i class="nav-icon fa-thin fa-table-cells"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-checkout")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("checkoutself*")) active @endif">
                            <i class="nav-icon fa-thin fa-file-invoice"></i>
                            <p>
                               Items
                            </p>
                        </a>
                    </li>
                @endcan
                @can("view-prof")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("profile*")) active @endif">
                            <i class="nav-icon fa-thin fa-table-layout"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-dashboard")
               <li class="nav-item">
                    <a href=""
                       wire:click="activeUser" class="nav-link @if(request()->is("dashboard")) active @endif">
                        <i class="nav-icon fa-thin fa-chart-line"></i>
                        <p>
                            
                        </p>
                    </a>
                </li>
                @endcan
                @can("view-transaction")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("transaction*")) active @endif">
                            <i class="nav-icon fab fa-paypal"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan

                @can("mng-note")

                    <li class="nav-item has-treeview @if(request()->is("notes-mng*")) menu-open @endif">
                        <a href="#" class="nav-link  @if(request()->is("notes-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-notes"></i>
                            <p>
                                
                                <i class="right fa-thin fa-caret-down"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("notes-mng")) active @endif">
                                    <i class="fab fa-thin fa-note nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("notes-mng/create")) active @endif">
                                    <i class="fab fa-thin fa-book-open nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>

                        </ul>
                    </li>

                @endcan


                @can("mng-class")
                    <li class="nav-item has-treeview @if(request()->is("author-mng*")
                || request()->is("publisher-mng*") || request()->is("classification-mng*") || request()->is("tag-mng*")) menu-open @endif">
                        <a href="#"
                            class="nav-link @if(request()->is("author-mng/*")
                || request()->is("publisher-mng/*") || request()->is("classification-mng/*") || request()->is("tag-mng/*")) active @endif">
                            <i class="nav-icon fa-thin fa-square-info"></i>
                            <p>
                                
                                <i class="right fa-thin fa-caret-down"></i>
                            </p>
                        </a>


                        <ul class="nav nav-treeview">
                            @can("mng-author")
                                <li class="nav-item">
                                    <a href=""
                                       wire:click="activeUser" class="nav-link @if(request()->is("author-mng") || request()->is("author-mng/*")) active @endif">
                                        <i class="fab fa-thin fa-book-user nav-icon"></i>
                                        <p></p>
                                    </a>
                                </li>
                            @endcan
                            @can("mng-publisher")
                                <li class="nav-item">
                                    <a href=""
                                       wire:click="activeUser" class="nav-link @if(request()->is("publisher-mng") || request()->is("publisher-mng/*")) active @endif">
                                        <i class="fab fa-thin fa-book-circle-arrow-up nav-icon"></i>
                                        <p></p>
                                    </a>
                                </li>
                            @endcan
                            @can("mng-tag")
                                <li class="nav-item">
                                    <a href=""
                                       wire:click="activeUser" class="nav-link @if(request()->is("tag-mng") || request()->is("tag-mng/*")) active @endif">
                                        <i class="fab fa-thin fa-book-bookmark nav-icon"></i>
                                        <p></p>
                                    </a>
                                </li>
                            @endcan
                            @can("mng-classification")
                                <li class="nav-item">
                                    <a href=""
                                       wire:click="activeUser" class="nav-link @if(request()->is("classification-mng")) active @endif">
                                        
                                        <i class="fab fa-thin fa-shelves nav-icon"></i>
                                        <p>
                                            
                                        </p>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                @endcan




                @can("mng-class")
                    <li class="nav-item has-treeview @if(request()->is("standard")
                || request()->is("course*") || request()->is("course-year/*") || request()->is("course-year") || request()->is("year") || request()->is("year/*")
                ) menu-open @endif">
                        <a href="#"
                            class="nav-link @if(request()->is("year") || request()->is("course-year") || request()->is("course")) active @endif">
                            <i class="nav-icon fa-thin fa-school"></i>
                            <p>
                                
                                <i class="right fa-thin fa-caret-down"></i>
                            </p>
                        </a>


                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("course") || request()->is("course/*")) active @endif">
                                    <i class="fab fa-thin fa-chalkboard nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("course-year") || request()->is("course-year/*")) active @endif">
                                    <i class="fab fa-thin fa-calendar-week nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("year") || request()->is("year/*")) active @endif">
                                    <i class="fab fa-thin fa-calendar-star nav-icon"></i>
                                    <p>
                                        
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan
                @can("mng-book")
                    <li class="nav-item has-treeview @if(request()->is("books*") || request()->is("sub-books*") || request()->is("cycle-books*") || request()->is("issued-books*")) menu-open @endif">
                        <a href="#"
                            class="nav-link @if(request()->is("books*") || request()->is("sub-books*") || request()->is("cycle-books*") || request()->is("issued-books*")) active @endif">
                            <i class="nav-icon fa-thin fa-books"></i>
                            <p>
                                
                                <i class="right fa-thin fa-caret-down"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("books") || request()->is("books/*")) active @endif">
                                    <i class="fab fa-thin fa-book-arrow-up nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("sub-books") || request()->is("sub-books/*")) active @endif">
                                    <i class="fab fa-thin fa-book nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("cycle-books") || request()->is("cycle-books/*")) active @endif">
                                    <i class="fab fa-thin fa-book-circle-arrow-right nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=""
                                   wire:click="activeUser" class="nav-link @if(request()->is("issued-books") || request()->is("issued-books/*")) active @endif">
                                    <i class="fab fa-thin fa-book-circle-arrow-up nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                @can("mng-slide")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("slider-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-gallery-thumbnails"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan

                @can("mng-subscriber")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("subscriber-mng*")) active @endif">
                            <i class="nav-icon fas fa-paw"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-notice")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("notice-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-flag"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-holidays")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("holidays-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-tree-christmas"></i>
                            <p>
                                Holidays
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-awards")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("awards-mng*")) active @endif">
                           <i class="nav-icon fa-thin fa-trophy-star"></i>
                            <p>
                               Awards
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-log")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("log-mng*")) active @endif">
                           
                           <i class="nav-icon fa-thin fa-person-walking"></i>
                            <p>
                                Log
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-user")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("user-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-users"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan

                @can("mng-role-permission")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("role-perm-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-key"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan

                @can("mng-enquiry")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("enquiry-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-message-exclamation"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-slider")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("slider-mng*")) active @endif">
                            <i class="nav-icon fa-thin fa-gallery-thumbnails"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-backup")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("backup*")) active @endif">
                            <i class="nav-icon fa-thin fa-server"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-report")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("reports*")) active @endif">
                            <i class="nav-icon fa-thin fa-file-exclamation"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                <!-- @can("mng-setting")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("setting*")) active @endif">
                            <i class="nav-icon fa-thin fa-gear"></i>

                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan
                @can("mng-translation")
                    <li class="nav-item">
                        <a href=""
                           wire:click="activeUser" class="nav-link @if(request()->is("lang-mng*")) active @endif">

                            <i class="nav-icon fas fa-language"></i>
                            <p>
                                
                            </p>
                        </a>
                    </li>
                @endcan -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
