@php
    /* @var \App\Facades\Util $util */
    /* @var \App\Facades\Common $common */
@endphp
@extends("back.common.master")
@section("page_name")  @endsection
@section("content")
    @include("back.common.spinner")
    
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body yellow">
                    @if(session()->has('form_setting') && session()->get('form_setting'))
                        <div class="row">
                            <div class="col-12">
                                @include("common.messages")
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            @if(\Illuminate\Support\Facades\Session::has("working_frm"))
                                @php
                                    $working_frm = \Illuminate\Support\Facades\Session::get("working_frm") ;
                                @endphp
                            @endif

                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'content_setting')"
                                        @if($working_frm=="content_setting") id="defaultOpen" @endif>
                                    <span class="hidden-xs">
                                        
                                    </span>
                                    <i class="d-block d-sm-none fas fa-text-height"></i>
                                </button>
                                <button class="tablinks" onclick="openCity(event, 'org_setting')"
                                        @if($working_frm=="org_setting") id="defaultOpen" @endif>
                                    <span class="hidden-xs">
                                        
                                    </span>
                                    <i class="d-block d-sm-none fas fa-school"></i>
                                </button>
                                <button class="tablinks" @if($working_frm=="seo_setting") id="defaultOpen" @endif
                                onclick="openCity(event, 'seo_setting')">
                                    <span class="hidden-xs"></span>
                                    <i class="d-block d-sm-none fab fa-google"></i>
                                </button>

                                <button class="tablinks" @if($working_frm=="site_setting") id="defaultOpen" @endif
                                onclick="openCity(event, 'site_setting')">
                                    <span class="hidden-xs"></span>
                                    <i class="d-block d-sm-none fas fa-cogs"></i>
                                </button>


                                <button class="tablinks" @if($working_frm=="payment_setting") id="defaultOpen" @endif
                                onclick="openCity(event, 'payment_setting')">
                                    <span class="hidden-xs"> <span
                                            class="badge badge-dark"></span></span>
                                    <i class="d-block d-sm-none fab fa-paypal"></i>
                                </button>


                                <button class="tablinks" @if($working_frm=="backup") id="defaultOpen"
                                        @endif onclick="openCity(event, 'backup')">
                                    <span class="hidden-xs"></span>
                                    <i class="d-block d-sm-none fas fa-upload"></i>
                                </button>

                                <button class="tablinks" @if($working_frm=="purchase") id="defaultOpen"
                                        @endif onclick="openCity(event, 'purchase_setting')">
                                    <span class="hidden-xs"></span>
                                    <i class="d-block d-sm-none fas fa-box-open"></i>
                                </button>

                                <button class="tablinks" @if($working_frm=="amazon_aff") id="defaultOpen"
                                        @endif onclick="openCity(event, 'amazon_aff')">
                                    <span class="hidden-xs"></span>
                                    <i class="d-block d-sm-none fas fa-box-open"></i>
                                </button>

                            </div>

                            <div id="amazon_aff" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="amazon_aff"/>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_amazon_fetching"),'w-185',
                                            "enable_amazon_fetching",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_only_amazon_fetching"),'w-185',
                                            "enable_only_amazon_fetching",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("commonv2.amz_access_key"),
                                        "amz_access_key",["amz_access_key"=>
                                        !empty($common::getSiteSettings("amz_access_key"))?
                                        $common::getSiteSettings("amz_access_key"):""],'',null,null,false,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("commonv2.amz_secret_key"),
                                        "amz_secret_key",["amz_secret_key"=>
                                        !empty($common::getSiteSettings("amz_secret_key"))?
                                        $common::getSiteSettings("amz_secret_key"):""],'',null,null,false,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("commonv2.amz_tag"),
                                        "amz_tag",["amz_tag"=>
                                        !empty($common::getSiteSettings("amz_tag"))?
                                        $common::getSiteSettings("amz_tag"):""],'',null,null,false,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text w-185"></span>
                                            </div>
                                            
                                            <select name="amz_host" class="form-control">
                                                <option value=""></option>
                                                
                                                    <option value=""
                                                            @if($common::getSiteSettings("amz_host")==$v) selected @endif></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text w-185"></span>
                                            </div>
                                            <select name="amz_region" class="form-control">
                                                <option value=""></option>
                                                
                                                    <option value=""
                                                            @if($common::getSiteSettings("amz_region")==$v) selected @endif></option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <button type="submit"
                                                class="btn btn-dark btn-sm mb-10"><i
                                                class="fas fa-save mr-1"></i></button>
                                    </div>
                                </form>
                            </div>


                            <div id="purchase_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="purchase_setting"/>
                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("purchased.purchase_code"),
                                        "purchase_code",["purchase_code"=>
                                        !empty($common::getSiteSettings("purchase_code"))?
                                        $common::getSiteSettings("purchase_code"):config("app.PURCHASE_CODE")],'',null,null,true,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        <button type="submit"
                                                class="btn btn-dark btn-sm mb-10"><i
                                                class="fas fa-save mr-1"></i></button>
                                        @if((empty($common::getSiteSettings("expired_on")) && empty($common::getSiteSettings("bought_on"))) || !empty($common::getSiteSettings("expired_on")))
                                            <a href="" target="_blank"
                                               class="btn btn-sm btn-warning mb-10">Renew
                                                Now</a>
                                        @endif
                                    </div>
                                </form>
                            </div>


                            <div id="content_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="content_setting"/>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.curr_symbol"),
                                        "currency_symbol",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.tel_code"),
                                        "telephone_code",$settings,'',null,null,true,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.google_map"),
                                        "google_map",$settings,'',null,null,true,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.no_of_testimonials").CForm::generateInfoToolTipByFieldName("pl_testimonial"),
                                        "no_of_testimonials",$settings,'',null,null,true,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.no_of_faq").CForm::generateInfoToolTipByFieldName("pl_alumni_teacher"),
                                        "no_of_faqs",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseThree" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    @if(isset($settings["no_of_testimonials"]) && $settings["no_of_testimonials"]>0)
                                                        <div class="mb-2">
                                                            {!! CForm::inputGroupHeader(__("common.testimonial_heading"),"w-100","w-100") !!}
                                                            
                                                            <textarea type="text"
                                                                      class="form-control summernote_small"
                                                                      name="testimonials[</textarea>
                                                            {!! CForm::inputGroupFooter() !!}
                                                        </div>
                                                        <div class="mb-2">

                                                            {!! CForm::inputGroupHeader(__("common.testimonial_sub_heading"),"w-100","w-100") !!}
                                                            
                                                            <textarea name="testimonials[]"
                                                                      class="form-control summernote_big">
                                                            </textarea>
                                                            {!! CForm::inputGroupFooter() !!}

                                                        </div>

                                                        <hr/>
                                                        
                                                            <div class="mb-2">
                                                                {!! CForm::inputGroupHeader(__("common.testimonial_name",["number"=>$i])) !!}
                                                                
                                                                <input type="text"
                                                                       value=""
                                                                       class="form-control"
                                                                       name="testimonials[]">
                                                                {!! CForm::inputGroupFooter() !!}
                                                            </div>
                                                            <div class="mb-2">
                                                                {!! CForm::inputGroupHeader(__("common.testimonial_img_icon",["number"=>$i])) !!}
                                                                
                                                                <input type="text"
                                                                       value=""
                                                                       class="form-control"
                                                                       placeholder=""
                                                                       name="testimonials[]">
                                                                {!! CForm::inputGroupFooter() !!}
                                                            </div>
                                                            <div class="mb-2">
                                                                {!! CForm::inputGroupHeader(__("common.testimonial_desc",["number"=>$i]),"w-100","w-100") !!}
                                                                
                                                                <textarea name="testimonials[]"
                                                                          class="form-control summernote_big">
                                                    </textarea>
                                                                {!! CForm::inputGroupFooter() !!}
                                                            </div>
                                                            <hr/>
                                                        
                                                    @else
                                                        <div
                                                            class="alert alert-dark"></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseFour" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.book_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea
                                                            class="form-control summernote_small"
                                                            name="books[</textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.book_sub_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea name="books[]"
                                                                  class="form-control summernote_big">
                                                            </textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseSix" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSix" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.contact_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea
                                                            class="form-control summernote_small"
                                                            name="contacts[</textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.cnt_sub_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea name="contacts[]"
                                                                  class="form-control summernote_big">
                                                            </textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseFive" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    @if(isset($settings["no_of_faqs"]) && $settings["no_of_faqs"]>0)
                                                        <div class="mb-2">
                                                            {!! CForm::inputGroupHeader(__("common.faq_heading"),"w-100","w-100") !!}
                                                            
                                                            <textarea
                                                                class="form-control summernote_small"
                                                                name="faqs[</textarea>
                                                            {!! CForm::inputGroupFooter() !!}
                                                        </div>

                                                        <hr/>
                                                        
                                                            <div class="mb-2">
                                                                {!! CForm::inputGroupHeader(__("common.faq_question",["number"=>$i]),"w-100","w-100") !!}
                                                                
                                                                <textarea
                                                                    class="form-control summernote_small"
                                                                    name="faqs[</textarea>
                                                                {!! CForm::inputGroupFooter() !!}
                                                            </div>
                                                            <div class="mb-2">
                                                                {!! CForm::inputGroupHeader(__("common.faq_answer",["number"=>$i]),"w-100","w-100") !!}
                                                                
                                                                <textarea
                                                                    class="form-control summernote_big"
                                                                    name="faqs[</textarea>
                                                                {!! CForm::inputGroupFooter() !!}
                                                            </div>
                                                            <hr/>
                                                        
                                                    @else
                                                        <div class="alert alert-dark">!
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseSeven" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseSeven" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.toi_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea
                                                            class="form-control summernote_small"
                                                            name="toi[</textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.toi_desc"),"w-100","w-100") !!}
                                                        
                                                        <textarea name="toi[]"
                                                                  class="form-control summernote_big">
                                                            </textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accordion">
                                        <div class="card card-dark">
                                            <div class="card-header blue">
                                                <h4 class="card-title w-100">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseEight" class="collapsed" aria-expanded="false">
                                                        <span class="float-left"
                                                              style="line-height: 39px;"></span>
                                                        <button class="btn float-right text-white"><i
                                                                class="fas fa-chevron-circle-down"></i></button>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseEight" class="panel-collapse collapse" style="">
                                                <div class="card-body yellow">
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.pp_heading"),"w-100","w-100") !!}
                                                        
                                                        <textarea
                                                            class="form-control summernote_small"
                                                            name="pp[</textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>
                                                    <div class="mb-2">
                                                        {!! CForm::inputGroupHeader(__("common.pp_desc"),"w-100","w-100") !!}
                                                        
                                                        <textarea name="pp[]"
                                                                  class="form-control summernote_big">
                                                            </textarea>
                                                        {!! CForm::inputGroupFooter() !!}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_foot_note"),
                                        "footer_note",$settings,'',null,null,false,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeSelectBox2(__("common.id_card_inst"),"",
                                           "id_card_instructions_list",$settings,'',null,null,true,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeSelectBox2(__("common.working_hour"),"",
                                           "working_hours_list",$settings,'',null,null,true,null,true) !!}
                                    </div>


                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-save mr-1"></i></button>
                                </form>
                            </div>
                            <div id="org_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="org_setting"/>

                                    <div class="input-group mb-10">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text">
                                                {!! CForm::generateInfoToolTip(__('common.pl_web_ico'),'mt-1 text-sm ml-2') !!}
                                       </span>
                                        </div>
                                        <input name="web_ico_file" accept=".ico" type="file"
                                               class="form-control text-sm">
                                    </div>

                                    <div class="input-group mb-10">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    </span></div>
                                        <input name="org_logo_tmp" accept=".jpg,jpeg,.png" type="file"
                                               class="form-control text-sm">
                                        <div class="input-group-append">
                                            {!! CForm::completeTextBox(__("common.set_style"),
                                       "org_logo_css",$settings,'',null,null,false,null) !!}
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_name"),
                                        "org_name",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_email"),
                                        "org_email",$settings,'',null,null,true,null,"email") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_phone"),
                                        "org_phone",$settings,'',null,null,true,null) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_fax"),
                                        "org_fax",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text"></span></div>
                                            <textarea class="form-control" name="org_address" required
                                            ></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text"></span></div>
                                            <textarea class="form-control" name="org_desc" required
                                            ></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_link_tw"),
                                        "tw_link",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_link_lk"),
                                        "ln_link",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_link_gp"),
                                        "gp_link",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.org_link_fb"),
                                        "fb_link",$settings,'',null,null,true,null) !!}
                                    </div>


                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-save mr-1"></i></button>
                                </form>
                            </div>
                            <div id="seo_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>

                                <form method="post" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="seo_setting"/>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.seo_meta_title"),
                                        "index_meta_title",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="input-group mb-10">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text"></span></div>
                                        <textarea rows="10" class="form-control" name="index_meta_desc" required
                                        ></textarea>
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("commonv2.google_site_v_code"),
                                        "google_site_verification",$settings,'',null,null,false,null) !!}
                                    </div>

                                    <div class="input-group mb-10">
                                        <div class="input-group-prepend"><span
                                                class="input-group-text"></span></div>
                                        <textarea rows="10" class="form-control" name="google_analytics"
                                        ></textarea>
                                    </div>


                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-save mr-1"></i></button>
                                </form>


                            </div>
                            <div id="site_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>

                                <form method="post" class="mb-2" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="site_setting"/>
                                    <button type="submit" href=""
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-shoe-prints mr-1"></i>
                                    </button>
                                </form>

                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="site_setting"/>


                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.enable_frontend"),'w-185',
                                            "enable_frontend",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.enable_autoupdate"),'w-185',
                                            "enable_auto_update",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_book_id_auto"),'w-185',
                                            "enable_book_id_auto",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("commonv2.enable_book_id_length"),
                                        "enable_book_id_length",$settings,'',null,null,false,null,"number") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.barcode_read"),'w-185',
                                            "enable_bardcode_reading_mode",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_simple_search"),'w-185',
                                            "enable_simple_search",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_image_classificaiton"),'w-185',
                                            "enable_image_classificaiton",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("commonv2.enable_user_borrow"),'w-185',
                                            "enable_user_borrow",$settings,'',null,null,true) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.enable_documentation"),'w-185',
                                            "enable_documentation",$settings,'',null,null,true) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.enable_frontend_registration")
                                ."<a target='_blank' data-toggle='tooltip' data-placement='left' title='If you are logged in, this would not work.
                                 You can open this link in incognito mode to view the register page.' class='btn btn-link btn-sm' href='".url('/register')."'>Register <i class='fas fa-external-link-alt'></i></a>",'w-185',
                                            "enable_register",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.restrict_course")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_course_rest",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.show_course")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_shw_course_rest",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.restrict_photo")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_photo_rest",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.show_photo")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_shw_photo_rest",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.restrict_proof")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_proof_rest",$settings,'',null,null,true) !!}
                                    </div>
                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.show_proof")."<span class='ml-2 badge badge-dark'>Register Page</span>",'w-185',
                                            "enable_reg_pg_shw_proof_rest",$settings,'',null,null,true) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.redirect_home_to"),
                                        "redirect_home_page",$settings,'',null,null,false,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.admin_pg_name"),
                                        "admin_page_name",$settings,'',null,null,true,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.admin_email_id"),
                                        "admin_email",$settings,'',null,null,true,null,"email") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.system_email_id"),
                                        "system_email",$settings,'',null,null,true,null,"email") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.late_fine").' in '.$common::getSiteSettings("currency_symbol"),
                                        "fine_per_day",$settings,'',null,null,false,null,"number") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.limit_qty_book_stud"),
                                        "student_book_limit",$settings,'',null,null,false,null,"number") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.limit_qty_book_teacher"),
                                        "teacher_book_limit",$settings,'',null,null,false,null,"number") !!}
                                    </div>

                                    <div class="mb-2">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text w-185"></span>
                                            </div>
                                            <select required name="default_lang" class="form-control">
                                                
                                                    <option value=""
                                                            @if($common::getDefaultLang()==$kv) selected @endif></option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeSelectBox(__("common.wrking_year"),"w-185",
                                           "working_year",$util::toArrayFromEloquentCollection($common::getAllYears(),"id","year_from"),$common::getWorkingYear(),null,null,true,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeSelectBox(__("common.default_role"),"w-185",
                                           "default_role",$util::toArrayFromEloquentCollection($common::getAllRoles(),"id","name"),
                                           isset($settings["default_role"])?$settings["default_role"]:"",null,null,true,null) !!}
                                    </div>


                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.front_primary"),
                                        "front_primary",$settings,'',null,null,true,null,"color") !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.front_secondary"),
                                        "front_secondary",$settings,'',null,null,true,null,"color") !!}
                                    </div>

                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-save mr-1"></i></button>
                                </form>

                            </div>
                            <div id="payment_setting" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="">
                                    @csrf
                                    <input name="frm_name" type="hidden" value="payment_setting"/>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.curr_code"),
                                        "currency_code",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.paypal_clientId"),
                                        "PAYPAL_CLIENT_ID",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeTextBox(__("common.paypal_clientSecret"),
                                        "PAYPAL_CLIENT_SECRET",$settings,'',null,null,true,null) !!}
                                    </div>

                                    <div class="mb-2">
                                        {!! CForm::completeToggleBox(__("common.paypal_live"),'w-185',
                                            "enable_PAYPAL_SANDBOX",$settings,'',null,null,true) !!}
                                    </div>

                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-save mr-1"></i></button>
                                </form>
                            </div>
                            <div id="backup" class="tabcontent">
                                <h3 style="padding-top: 15px;"></h3>
                                <p></p>
                                <form method="post" action="">
                                    @csrf
                                    <input name="do" type="hidden" value="backup">
                                    <input name="frm_name" type="hidden" value="backup">
                                    <button type="submit"
                                            class="btn btn-dark btn-sm mb-10"><i
                                            class="fas fa-cloud-upload-alt mr-1"></i>
                                    </button>
                                </form>
                                <table class="table table-striped table-hover table-sm mt-2">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $items = $util::getDbBackupFiles();
                                    @endphp
                                    @if(count($items))
                                        
                                        
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <form class="d-inline" method="post"
                                                          action="">
                                                        @csrf
                                                        <input type="hidden" name="filename" value="">
                                                        <input type="hidden" name="do" value="restore">
                                                        <input name="frm_name" type="hidden" value="backup"/>
                                                        <button class="btn p-2" type="submit" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title=""><i
                                                                class="fas fa-sync"></i></button>
                                                    </form>
                                                    <form class="d-inline" method="post" id="delete_"
                                                          action="">
                                                        @csrf
                                                        <input type="hidden" name="filename" value="">
                                                        <input type="hidden" name="do" value="delete">
                                                        <input name="frm_name" type="hidden" value="backup"/>
                                                        <button
                                                            onclick="confirm_then_submit('')"
                                                            class="btn p-2"
                                                            type="button" data-toggle="tooltip" data-placement="top"
                                                            title=""><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                        
                                    @else
                                        <tr>
                                            <td colspan="100">
                                                <div
                                                    class="alert alert-dark col-12"></div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("css_loc")
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link href="" rel="stylesheet">
    <link href="" rel="stylesheet">
@endsection
@section("js_loc")
    <script type="text/javascript" src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
@endsection
