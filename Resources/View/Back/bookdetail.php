<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
</head>
  <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Book Information</h1>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                
              <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides d-flex" style="justify-content: center;width: 100%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                  <li class="flex-active-slide" style="width: 200px; margin-right: 0px; float: left; display: block;">
                  <img alt={{$book_obj->title}} src="{{$book_obj->cover_img()}}" draggable="false">
                  </li>
                  
                  <!-- items mirrored twice, total of 12 -->
                </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"></li></ul></div>
              <div id="carousel" class="flexslider">
                
              <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                  <li class="flex-active-slide" style="width: 210px; margin-right: 5px; float: left; display: block;">
                    
                  </li>
                  
                  
                  
                  <!-- items mirrored twice, total of 12 -->
                </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="right-content">
              <h2>Book Title</h2>
               
                            <strong>By </strong><span class="">
                                
                                        <a class="btn-link"
                                           href="{{url("/")."?search=".$author."#books"}}">Author 1</a>
                                           
                                        <a class="btn-link"
                                           href="{{url("/")."?search=".$author."#books"}}">Author 2</a>
                                           
                                        <a class="btn-link"
                                           href="{{url("/")."?search=".$author."#books"}}">Author 3</a>
                                        
                        </span><br>
                       
                                        <strong>Publisher
                                            - </strong>
                                        
                                                <a class="btn-link"
                                                   href="{{url("/")."?search=".$publisher."#books"}}">Publisher 1</a>
                                                   <a class="btn-link"
                                                   href="{{url("/")."?search=".$publisher."#books"}}">Publisher 2</a>
                                                   <a class="btn-link"
                                                   href="{{url("/")."?search=".$publisher."#books"}}">Publisher 3</a>
              
              <p></p>
                                    
                                        <strong>isbn 10 - </strong><span>100203010230 ISB</span>
                                    
                            <br>
                                    
                                        <strong>ISBN13 - </strong><span>3123123123/span>
                                   
                                <br>















             













              <br>
              <form action="" method="get" class="d-flex" style="justify-content: flex-end;">
                
                
               
              <div class="mt-2 d-flex col-12" style="justify-content: flex-end;                flex-direction: column;">

                                <p class="d-inline">
                                   
                                </p></div>

                                <div id="viewer" class="row mt-2 preview_container">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="mcoll">
                                            <div class="card card-body">
                                                <div id="viewerCanvas" style="width: 100%; height: 1000px"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
           
          
                                      <div class="down-content">
                <div class="categories">
                                        <h6>Category
                                            </h6><a class="btn-link"
                                                          href="{{url('/').'?pcat='.$pcat
.'&scat='.$book_obj->category}}#books">
                                            <span>Category Name</span></a>
                                    </div>
                  
                
                <div class="share">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You may also like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">

          
              <a href="{{route("details", ['page_slug' => $common::utf8Slug($book["TITLE"])])}}
                                 ">
                <div class="featured-item">
                  <img style="width:250px;height:300px;" src="{{asset("uploads/".$util::fileChecker(public_path("uploads"),
                                       $book["CIMG"],config("app.BOOK_IMG_NOT_FOUND")))}}" alt="Item 1">
                  <h4>Book Title</h4>
                  
                </div>
              </a>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>
