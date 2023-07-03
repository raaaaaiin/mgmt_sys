<div>
@php
$loading_target ="activeUser";
@endphp
<script>
const post = [];
</script>
<div class="d-flex">
   <div class="container-fluid py-4" style="min-height: 700px;">
      <div class="wrapper">
         <div class="wrapper">
            <main>

               <div class="main-section d-flex justify-content-center">
                  <div class="container">
                     <div class="main-section-data ">
                     <div class="row">
                
                    @if(!empty($notice->notice))
                        <div class="col">
                            <div class="alert alert-light" role="alert">
                                <h4 class="alert-heading">!</h4>
                                <hr/>
                                <p></p>
                            </div>
                        </div>
                    @endif
                
            </div>
                        <div class="row">
                           <div class="col-lg-3 col-md-4 pd-left-none p-3">
                              <div class="main-left-sidebar no-margin">
                                 <div class="user-data full-width">
                                    <div class="user-profile">
                                       <div class="username-dt">
                                          <div class="usr-pic">
                                             <img style="width:100%; height:100%" src="https://scontent.fmnl33-3.fna.fbcdn.net/v/t1.18169-9/19225299_140259066526178_4380946651984883390_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGgw8lPnOjKgF5tr9u4ZBZwPjWZdP3SZ0Q-NZl0_dJnRPqovNt5C3uosv1q1wr6g76elkC6maG40f9slOpOZ-Au&_nc_ohc=JRcD7tQXsmwAX8WgaxE&tn=Wkx4ImEbmHLwK9JT&_nc_ht=scontent.fmnl33-3.fna&oh=00_AfCa_MrNRer-6pgNNGwB3Lgmtj6c4qjvuZ6IXbHKD4kq9Q&oe=641D4320" alt="">
                                          </div>
                                       </div>
                                       <!--username-dt end-->
                                       <div class="user-specs">
                                          <h3>JSMJC LIBRARY</h3>
                                          <span>Library Management System with Data Analytics</span>
                                       </div>
                                    </div>
                                    <!--user-profile end-->
                                    <ul class="user-fw-status d-none">
                                       <li>
                                          <h4>Personel</h4>
                                          <span>34</span>
                                       </li>
                                       <li>
                                          <h4>Student</h4>
                                          <span>155</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <!--user-data end-->
                                 <div class="suggestions full-width">
                                    <div class="sd-title">
                                       <h3>Trend Books (All Time)</h3>
                                       <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <!--sd-title end-->
                                    <div class="suggestions-list">

                                    @php
                                    $trendbooks = $common::getBooksDetailsForFrontEndPreffTrendCateg();

                                    @endphp
                                    @if(collect($trendbooks)->isEmpty())
                                        <a  href="#">
                                        <div class="suggestion-usd">
                                          <div class="sgt-text">
                                             <h4>Data is not yet avauilable</h4>
                                          </div>
                                          <span><i class="la la-plus"></i></span>
                                       </div>
                                       </a>
                                    @endif
                                    
                                    <a  wire:click="activeUser" class="p-0" href="">
                                       <div class="suggestion-usd">
                                          <div class="sgt-text">
                                             <h4></h4>
                                             <span></span>
                                          </div>
                                          <span><i class="la la-plus"></i></span>
                                       </div>
                                       </a>
                                    


                                       <div class="view-more d-none">
                                          <a href="#" title="">View More</a>
                                       </div>
                                    </div>
                                    <!--suggestions-list end-->
                                 </div><div class="suggestions full-width">
                                    <div class="sd-title">
                                       <h3>Trend Books Yearly</h3>
                                       <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <!--sd-title end-->
                                    <div class="suggestions-list">
                                    @php
                                    $trendbooks = $common::getBooksDetailsForFrontEndPreffTrendCategYearly();

                                    @endphp
                                    @if(collect($trendbooks)->isEmpty())
                                      <a  href="#">
                                       <div class="suggestion-usd">
                                          <div class="sgt-text">
                                             <h4>Data is not yet avauilable</h4>
                                            
                                          </div>
                                          <span><i class="la la-plus"></i></span>
                                       </div>
                                       </a>
                                    @endif
                                    
                                    <a class="p-0" href="">
                                       <div class="suggestion-usd">
                                          <div class="sgt-text">
                                             <h4></h4>
                                             <span></span>
                                          </div>
                                          <span><i class="la la-plus"></i></span>
                                       </div>
                                       </a>
                                    


                                       <div class="view-more d-none">
                                          <a href="#" title="">View More</a>
                                       </div>
                                    </div>
                                    <!--suggestions-list end-->
                                 </div>
                                 <!--suggestions end-->
                                 <!--tags-sec end-->
                              </div>
                              <!--main-left-sidebar end-->
                           </div>
                           <div class="col-lg-6 col-md-8 p-3">
                            @include("back.common.spinner")
                              <div class="main-ws-sec">
                                 <div class="posts-section">
                                @if(empty($this->merged_post))
     <script>

                                    post.push(`
                                    <div class=" yellow post-bar">
                                    <div class="post_topbar">
                                          <div class="usy-dt">
                                             <img  style="width:50px;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail" src="https://scontent.fmnl33-3.fna.fbcdn.net/v/t1.18169-9/19225299_140259066526178_4380946651984883390_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGgw8lPnOjKgF5tr9u4ZBZwPjWZdP3SZ0Q-NZl0_dJnRPqovNt5C3uosv1q1wr6g76elkC6maG40f9slOpOZ-Au&_nc_ohc=JRcD7tQXsmwAX8WgaxE&tn=Wkx4ImEbmHLwK9JT&_nc_ht=scontent.fmnl33-3.fna&oh=00_AfCa_MrNRer-6pgNNGwB3Lgmtj6c4qjvuZ6IXbHKD4kq9Q&oe=641D4320" />

                                             <div class="usy-name">
                                              <h5 style="
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 16px;
    font: inherit;
    vertical-align: baseline;
    color: #000;
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 6px;
    margin-top: 2px;
">Juan Sumulong Memorial Junior College</h5>
                                               
                                             </div>
                                          </div>
                                       </div>
                                     <img  style="width:100%     margin-top: 50px;
    padding: 0; ;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail"
                                             src="" />
                                       
                                       <div class="job_descp">
                                          <center>
                                         
                                          </center>
                                          <br>
                                           <a  class="p-0 m-0" href="#" style="color:black"><h2>
                                         Ready, set, explore!</h2></a>
                                          <p  style="text-align: justify;text-justify: inter-word;">
                                            Get ready to dive into the data! It's always here and waiting for you to uncover its secrets The data is eagerly waiting for you to unlock it! Let's get exploring!

                                          </p>
                                          <ul class="skill-tags">
                                             
                                          </ul>
                                       </div>
                                       <div class="job-status-bar">
                                          
                                       </div>
                                    </div>
                                    <!--post-bar end-->
                                    `);
                                    </script>
                             @endif
                                    
                                   
                                    <script>

                                    post.push(`
                                    </div>
                                    <div class=" yellow post-bar">
                                       <div class="post_topbar">
                                          <div class="usy-dt">
                                             <img  style="width:50px;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail" wire:click="activeUser" onclick="location=''"
                                             src="" />
                                             <div class="usy-name">
                                                <a href="" style="color:#000;padding:0;"><h5 style="
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 16px;
    font: inherit;
    vertical-align: baseline;
    color: #000;
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 6px;
    margin-top: 2px;
"></h5></a>
                                                <span></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="job_descp">
                                          <center>
                                           <a  class="p-0 m-0" wire:click="activeUser" href="" style="color:black">
                                             <img style="cursor: pointer width:280px; height:300px;" style="width:200px"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail"
                                             src=""
                                             /></a>
                                          </center>
                                          <br>
                                           <a  class="p-0 m-0" wire:click="activeUser" href="" style="color:black"><h2>
                                          </h2></a>
                                          <p  style="text-align: justify;text-justify: inter-word;">
                                          @php
                                          $tmp = route("details", ['page_slug' => $common::utf8Slug($data["title"])]);
                                          @endphp
                                          {!!  str_limit($data["desc"], $limit = 350, $end = "<a  href='$tmp' >... view more</a>")  !!}

                                          </p>
                                          <ul class="skill-tags">
                                             <li></li>
                                          </ul>
                                       </div>
                                       <div class="job-status-bar">
                                          <a><i class="la la-eye"></i>Views </a>
                                       </div>
                                    </div>
                                    <!--post-bar end-->
                                    <div class="d-none">
                                    `);
                                    </script>
                                    
                                    <div id="infiniteloading">
                                    </div>
                                    <!--post-bar end-->
                                    <!--posty end-->
                                    <!--process-comm end-->
                                 </div>
                              </div>


                           </div>
                           <div class="col-lg-3 pd-right-none p-3">
                            @include("back.common.spinner")
                              <div class="right-sidebar">


                               <div class="widget widget-jobs">
                                    <div class="sd-title">
                                       <h3>Most Achiever Student</h3>
                                       <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                       <div class="job-info">
                                          <div class="job-details w-100">





                                             <h3>Most Book Borrower</h3>
                                             
                                             <div class="post_topbar p-0">
                                          <div class="usy-dt w-100">
                                             <img  style="width:25px;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail" wire:click="activeUser" onclick="location=''"
                                             src="" />
                                             <div class="usy-name">
                                                <a href="" style="color:#000;padding:0;"><h5 style="
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 16px;
    font: inherit;
    vertical-align: baseline;
    color: #000;
    text-transform: capitalize;
    font-weight: 600;
"></h5></a>
                                                <span>Book Borrowed: </span>
                                             </div>
                                          </div>
                                       </div>
                                             
                                          </div>

                                       </div>
                                       <!--job-info end-->
                                       <div class="job-info">
                                          <div class="job-details  w-100">
                                             <h3>Visit Library The Most</h3>
                                             
                                             <div class="post_topbar p-0">
                                          <div class="usy-dt w-100">
                                             <img  style="width:25px;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail" wire:click="activeUser" onclick="location=''"
                                             src="" />
                                             <div class="usy-name">
                                                <a href="" style="color:#000;padding:0;"><h5 style="
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 16px;
    font: inherit;
    vertical-align: baseline;
    color: #000;
    text-transform: capitalize;
    font-weight: 600;
"></h5></a>
                                                <span>Visit Times: </span>
                                             </div>
                                          </div>
                                       </div>
                                             
                                          </div>

                                       </div>
                                       <!--job-info end-->
                                       <div class="job-info">
                                          <div class="job-details w-100">

                                             <h3>Stayed Online The Most</h3>
                                             
                                             <div class="post_topbar p-0">
                                          <div class="usy-dt w-100">
                                             <img  style="width:25px;cursor: pointer"  data-toggle="tooltip" data-placement="top"
                                             class="img-thumbnail" wire:click="activeUser" onclick="location=''"
                                             src="" />
                                             <div class="usy-name">
                                                <a href="" style="color:#000;padding:0;"><h5 style="
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 16px;
    font: inherit;
    vertical-align: baseline;
    color: #000;
    text-transform: capitalize;
    font-weight: 600;
"></h5></a>
                                                <span>Spent Days: </span>
                                             </div>
                                          </div>
                                       </div>
                                             
                                          </div>

                                       </div>
                                       <!--job-info end-->
                                    </div>
                                    <!--jobs-list end-->
                                 </div>
                                 <!--widget-about end-->
                                 <div class="widget widget-jobs">
                                    <div class="sd-title">
                                       <h3>Most Clicked Book</h3>
                                       <i class="la la-ellipsis-v"></i>
                                    </div>



                                    <div class="jobs-list">



                                    @php
                                        $clicked =  App\Models\BookMeta::where('meta_key','Views')->orderByRaw('CONVERT(meta_value, SIGNED) desc')->LIMIT(9)->get();

                                    @endphp
                                    
                                        @if($clicked->isEmpty())
                                            <a href='#'>
                                        <div class="job-info">
                                          <div class="job-details" style="margin-bottom: 12px!important;">

                                             <h3 style="font-size: 14px!important;">No available data yet</h3>
                                          </div>
                                          <div class="hr-rate">
                                             <span><span style="color: #c6c6c6;font-size: 12px!important;" class="float-right "></span></span>
                                          </div>

                                       </div>
                                       </a>
                                        @endif
                                        
                                        <a wire:click="activeUser" class="p-0" href="">
                                        <div class="job-info">
                                          <div class="job-details" style="margin-bottom: 12px!important;">

                                             <h3 style="font-size: 14px!important;"></h3>
                                          </div>
                                          <div class="hr-rate">
                                             <span><span style="color: #c6c6c6;font-size: 12px!important;" class="float-right "> <i style="color: #c6c6c6;" class="fa fa-eye" aria-hidden="true"></i></span></span>
                                          </div>

                                       </div>
                                       </a>

                                        


                                    </div>
                                    <!--jobs-list end-->
                                 </div>
                                 <!--widget-jobs end-->

                                 <!--widget-jobs end-->
                                 <div class="widget suggestions full-width">
                                    <div class="sd-title">
                                       <h3>Most Recent Borrowed</h3>
                                       <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <!--sd-title end-->
                                    <div class="suggestions-list">
                                   @php
                        $latestborrow =  App\Models\Borrowed::orderby('id','desc')->LIMIT(8)->get();
                        @endphp
                        @if($latestborrow->isEmpty())
                                            
                                       <div class="suggestion-usd" style="padding: 10px 20px;">
                                            <div class="sgt-text">
                                             <h4 style="font-size: 14px!important;">Data is not yet available.</h4>
                                            </div>

                                            </div>
                                        @endif
                        


                                                    <div class="suggestion-usd" style="padding: 10px 20px;">
                                            <div class="sgt-text">
                                             <h4 style="font-size: 14px!important;"></h4>
                                             <span></span>
                                            </div>

                                            </div>
                                                    










                                       <div class="view-more">

                                       </div>
                                    </div>
                                    <!--suggestions-list end-->
                                 </div>
                              </div>
                              <!--right-sidebar end-->
                           </div>
                        </div>
                     </div>
                     <!-- main-section-data end-->
                  </div>
               </div>
            </main>
            <!--post-project-popup end-->
            <div id="sidebar-overlay"></div>
         </div>
         <div id="sidebar-overlay"></div>
      </div>
   </div>
</div>


<script>
var perscroll = 5;
document.getElementById("infiniteloading").innerHTML = post.slice(0, 5);

window.addEventListener('scroll',()=>{
	const {scrollHeight,scrollTop,clientHeight} = document.documentElement;
	if(scrollTop + clientHeight > scrollHeight - 5){
    perscroll = perscroll + 5;
        if(perscroll >= post){
        document.getElementById("infiniteloading").innerHTML += post.slice(perscroll-5, post.length);
        }else{
        document.getElementById("infiniteloading").innerHTML += post.slice(perscroll-5, perscroll);
        }
	}
});



</script>
</div>

