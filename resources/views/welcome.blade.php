<!--<!DOCTYPE html>-->
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->

<!--        <title>Laravel</title>-->

        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

        <!-- Styles -->
<!--        <style>-->
<!--            html, body {-->
<!--                background-color: #fff;-->
<!--                color: #636b6f;-->
<!--                font-family: 'Nunito', sans-serif;-->
<!--                font-weight: 200;-->
<!--                height: 100vh;-->
<!--                margin: 0;-->
<!--            }-->

<!--            .full-height {-->
<!--                height: 100vh;-->
<!--            }-->

<!--            .flex-center {-->
<!--                align-items: center;-->
<!--                display: flex;-->
<!--                justify-content: center;-->
<!--            }-->

<!--            .position-ref {-->
<!--                position: relative;-->
<!--            }-->

<!--            .top-right {-->
<!--                position: absolute;-->
<!--                right: 10px;-->
<!--                top: 18px;-->
<!--            }-->

<!--            .content {-->
<!--                text-align: center;-->
<!--            }-->

<!--            .title {-->
<!--                font-size: 84px;-->
<!--            }-->

<!--            .links > a {-->
<!--                color: #636b6f;-->
<!--                padding: 0 25px;-->
<!--                font-size: 13px;-->
<!--                font-weight: 600;-->
<!--                letter-spacing: .1rem;-->
<!--                text-decoration: none;-->
<!--                text-transform: uppercase;-->
<!--            }-->

<!--            .m-b-md {-->
<!--                margin-bottom: 30px;-->
<!--            }-->
<!--        </style>-->
<!--    </head>-->
<!--    <body>-->
<!--        <div class="flex-center position-ref full-height">-->
<!--            @if (Route::has('login'))-->
<!--                <div class="top-right links">-->
<!--                    @auth-->
<!--                        <a href="{{ url('/home') }}">Home</a>-->
<!--                    @else-->
<!--                        <a href="{{ route('login') }}">Login</a>-->

<!--                        @if (Route::has('register'))-->
<!--                            <a href="{{ route('register') }}">Register</a>-->
<!--                        @endif-->
<!--                    @endauth-->
<!--                </div>-->
<!--            @endif-->

<!--            <div class="content">-->
<!--                <div class="title m-b-md">-->
<!--                    Laravel-->
<!--                </div>-->

<!--                <div class="links">-->
<!--                    <a href="https://laravel.com/docs">Docs</a>-->
<!--                    <a href="https://laracasts.com">Laracasts</a>-->
<!--                    <a href="https://laravel-news.com">News</a>-->
<!--                    <a href="https://blog.laravel.com">Blog</a>-->
<!--                    <a href="https://nova.laravel.com">Nova</a>-->
<!--                    <a href="https://forge.laravel.com">Forge</a>-->
<!--                    <a href="https://vapor.laravel.com">Vapor</a>-->
<!--                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </body>-->
<!--</html>-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta content="Templines" name="author">
    <meta content="Antek" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/Picto.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/Picto.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/Picto.png') }}">
    <link rel="manifest" href="{{ asset('public/assets/Picto.png') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#222222">
    <link rel="stylesheet" href="{{ asset('public/template/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/template/css/main.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    #main {
  margin: 50px 0;
}

#main #faq .card {
  margin-bottom: 5px;
  border: 0;
}

#main #faq .card .card-header {
  border: 0;
  -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
          box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
  border-radius: 2px;
  padding: 0;
}

#main #faq .card .card-header .btn-header-link {
  color: black;
  display: block;
  text-align: left;
  background: #FFE472;
  color: #222;
  padding: 20px;
}

#main #faq .card .card-header .btn-header-link:after {
  content: "\f107";
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  float: right;
}

#main #faq .card .card-header .btn-header-link.collapsed {
  background: #fcbb21;
  color: black;
}

#main #faq .card .card-header .btn-header-link.collapsed:after {
  content: "\f106";
}

#main #faq .card .collapsing {
  background: #FFE472;
  line-height: 30px;
}

#main #faq .card .collapse {
  border: 0;
}

#main #faq .card .collapse.show {
  background: #FFFF;
  line-height: 30px;
  color: #222;
}
</style>
</head>
<?php  $userId='';?>
 @auth
 <?php $userId=Auth::user()->email;?>
 @endauth
<script type="text/javascript">
$(document).ready(function(){
   var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
    //alert();
});
    function getData(link){
      var userid='<?=$userId;?>';
       var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
         var formData = new FormData();
        formData.append("ip", ip);
        formData.append("link", link);
        formData.append("userid", userid);
  $.ajax({
            type:'post',      
            url:'<?=url('api/insert-data');?>',                
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data:formData,
            processData:false,
            contentType:false,               
            success:function(res){
                if(res.status){
                  window.location.href = link;
                  
                    //$('#saved_msg').html('<p style="color:#EA4335;">'+res.message+'.</p>');

                }

           setTimeout(function(){
            $('#saved_msg').html(' ');
                     },8000);
            },
            error:function(jqXHR, exception){
                var html='';
                console.log(jqXHR.responseJSON.errors);
                $.each( jqXHR.responseJSON.errors, function( key, value ) {
               html+= '<p style="color:#EA4335;">'+value+'</p>';
                });
                
            $('#saved_msg').html(html);

                },
           
        });
   }
</script>

<body class="page-home">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
@include('header')
        <main class="page-main">
            <div class="section-slideshow">
                <div class="uk-position-relative uk-light" tabindex="-1" data-uk-slideshow="animation: fade; min-height: 400; max-height: 700;">
                    <ul class="uk-slideshow-items">
                        <li class="slideshow-item"><img src="{{ asset('public/H1.png') }}" alt data-uk-cover>
                            <div class="slideshow-item__content">
                                <div class="uk-position-center uk-position-small uk-text-center">
                                    <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                                    <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200" style="margin-top:25%">Keep your workers and your equipment safe.</p>
                                    <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Make Your Workplace Safe With PICTOSAFE</h2>
                                     <div class="equipment-box__btn"><a class="uk-button uk-button-large" href="https://pictosafe.com/submit-request/" ><span>Try Us Free</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="slideshow-item"><img src="{{ asset('public/template/img/slideshow-2.jpg') }}" alt data-uk-cover>
                            <div class="slideshow-item__content">
                                <div class="uk-position-center uk-position-small uk-text-center">
                                    <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                                    <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">Top-Of-The-Line Equipment Ready At Flexible Rates Around</p>
                                    <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Your One-Stop Source For All<br> Equipment Rental Needs</h2>
                                	 
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--<div class="uk-visible@m"><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>-->
                </div>
            </div>
            <div class="section-find">
                <div class="uk-container">
                    <div class="find-box">
                        <div class="find-box__title"> <span>Find The Right Equipment</span></div>
                        <div class="find-box__form">
                           
                                 <form enctype="multipart/form-data" action="{{ route('search-category') }}"  method="post" name="user_form"  id="user_form">
                                     @csrf
                                <div class="uk-grid uk-grid-medium uk-flex-middle uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                                    <div>
                                        <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="{{ asset('public/template/img/icons/truck.svg') }}" alt="truck" data-uk-svg></span><select class="uk-select uk-form-large" name="category">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $res)
                                                <option value="{{$res->category_name}}">{{$res->category_name}}</option>
                                                @endforeach
                                                <!--<option value="">Category 2</option>-->
                                                <!--<option value="">Category 3</option>-->
                                            </select></div>
                                    </div>
                                    <div>
                                        <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="{{ asset('public/template/img/icons/derrick.svg') }}" alt="derrick" data-uk-svg></span><input class="uk-input uk-form-large uk-width-1-1" name="name" type="text" placeholder="Equipment Name"></div>
                                    </div>
                                    <!--<div>-->
                                    <!--    <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"> <img src="{{ asset('public/template/img/icons/location.svg') }}" alt="location" data-uk-svg></span><input class="uk-input uk-form-large uk-width-1-1" type="text" placeholder="What’s Your Location"></div>-->
                                    <!--</div>-->
                                    <!--<div>-->
                                    <!--    <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><img src="{{ asset('public/template/img/icons/calendar.svg') }}" alt="calendar" data-uk-svg></span><input class="js-calendar uk-input uk-form-large uk-width-1-1" type="text" placeholder="Rental Duration Period"></div>-->
                                    <!--</div>-->
                                    <!--<div>-->
                                    <!--    <div class="uk-inline uk-width-1-1"><label> <input class="uk-radio" type="radio" name="delivery" checked><span>Antek Delivery</span></label><label> <input class="uk-radio" type="radio" name="delivery"><span>Self Pickup</span></label></div>-->
                                    <!--</div>-->
                                    <div><button class="uk-button uk-button-secondary uk-button-large uk-width-1-1" type="submit"><span>Find My Equipment</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                     <div class="section-stats" >
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="stats-item">
                                <div class="stats-item__header">
                                   <div class="elementor-widget-wrap elementor-element-populated">
							        	<div class="elementor-element elementor-element-580b38cd elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="580b38cd" data-element_type="widget" data-widget_type="icon-box.default">
                        				<div class="elementor-widget-container">
                        		            	<link rel="stylesheet" href="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">		<div class="elementor-icon-box-wrapper">
                        						<div class="elementor-icon-box-icon">
                        				            <a style="font-size:28px;color:#fcbb21" class="elementor-icon elementor-animation-" href="https://yoursafetyguys.com">
                        			                	<i aria-hidden="true" class="fas fa-tools"></i>				</a>
                        			        </div>
                        						<div class="elementor-icon-box-content">
                                				<h3 style="color:white" class="elementor-icon-box-title">
                                					<a href="https://yoursafetyguys.com">
                                						Find Your PPE</a>
                        			        	</h3>
                        						<p style="color:white" class="elementor-icon-box-description">
                        						        Search for it here, we work with Top PPE Manufacturers.					</p>
                        						</div>
                        		          </div>
                        				</div>
                        				    </div>
                        					</div>
                                </div>
                               
                            </div>
                        </div>
                
                            <div>
                            <div class="stats-item">
                            <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-511686a0 elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="511686a0" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon" >
                            <a style="font-size:28px;color:#fcbb21" class="elementor-icon elementor-animation-" href="https://calendly.com/pictosafe/15min">
                            <i aria-hidden="true"  class="far fa-calendar-check"></i>				</a>
                            </div>
                            <div class="elementor-icon-box-content">
                            <h3 style="color:white" class="elementor-icon-box-title">
                            <a href="https://calendly.com/pictosafe/15min">
                            Safety 3.0					</a>
                            </h3>
                            	<p style="color:white" class="elementor-icon-box-description">
                            The easy way to save time and money, get the right equipment first.					</p>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        <div>
                            <div class="stats-item" style="background-color:#fcbb21;height:100%;">
                               
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8989768" data-id="8989768" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-689d49b4 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="689d49b4" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon" style="padding-top:20px">
                                    <a style="font-size:40px;color:black" class="elementor-icon elementor-animation-" href="https://calendly.com/pictosafe/15min">
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-down"></i>				</a>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                    <h5 class="elementor-icon-box-title">
                                    <a  style="font-size:28px" href="https://calendly.com/pictosafe/15min">
                                    Newest Tech For Safety 3.0					
                                    </a>
                                    </h5>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                            
                            
                        </div>
                        
                                <div>
                            <div class="stats-item" style="background-color:#fcbb21;height:100%;">
                               
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8989768" data-id="8989768" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-689d49b4 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="689d49b4" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon" style="padding-top:20px">
                                    <a style="font-size:40px;color:black" class="elementor-icon elementor-animation-" href="https://yoursafetyguys.com">
                                    <i aria-hidden="true" class="fas fa-handshake"></i>				</a>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                    <h5 class="elementor-icon-box-title">
                                    <a  style="font-size:28px" href="https://yoursafetyguys.com">
                                   Safe & Trusted Companies					
                                    </a>
                                    </h5>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                            
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
             <div class="section-why-choose-us">
                <div class="uk-container">
                    <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                        <div>
                           <img src="{{ asset('public/2.png') }}" alt="block-icon">
                                      <div class="equipment-box__btn"><a class="uk-button uk-button-large" href="#" ><span>TOP FIELD EXPERTS</span></a></div>
                        </div>
                        <div>
                            <div class="section-title">
                                <div class="uk-text-meta">KEEP YOUR WORKERS SAFE</div>
                                <div class="uk-h2">WE ARE PICTOSAFE THE BEST SOLUTION.</div>
                            </div>
                            <div class="elementor-widget-container">
                                <ul class="list-checked">
                                    <li>Worker Safety</li>
                                    <li>Inventory Reporting</li>
                                    <li>Perimeter Safety</li>
                                    <li>Labore dolore magna aliqua veniam nostrud</li>
            					</ul>
            				</div>
            				<div class="elementor-element elementor-element-1d3319e4 elementor-widget elementor-widget-text-editor" data-id="1d3319e4" data-element_type="widget" data-widget_type="text-editor.default">
                				<div class="elementor-widget-container">
                							<div class="" data-block="true" data-editor="c0bq4" data-offset-key="rc2p-0-0"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="rc2p-0-0"><strong><span class="x-el x-el-span c1-27 c1-28 c1-b c1-7i c1-3o c1-4c c1-7j">Get Instant Access to :</span></strong></div></div><ul class="public-DraftStyleDefault-ul" data-offset-key="8edcg-0-0"><li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c0bq4" data-offset-key="8edcg-0-0"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8edcg-0-0"><span data-offset-key="8edcg-0-0">PPE. Where to get it and how to store it.</span></div></li><li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c0bq4" data-offset-key="6s86l-0-0"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6s86l-0-0"><span data-offset-key="6s86l-0-0">Safety Forms. Keep certificates and site requirements in one place.</span></div></li><li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c0bq4" data-offset-key="a7o9n-0-0"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="a7o9n-0-0">Upload Pictures or Video. No second guessing.</div></li><li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c0bq4" data-offset-key="3jiki-0-0"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3jiki-0-0"><span data-offset-key="3jiki-0-0">Incident Reports and Inventory Levels.</span></div></li></ul><p>Find what you need and where you can get it. Save Time. Save Money</p>						</div>
                				</div>
                				<div class="elementor-element elementor-element-063b568 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="063b568" data-element_type="widget" data-widget_type="icon-list.default">
                    				<div class="elementor-widget-container">
                        				 <ul class="list-checked">
                                                <li>Enterprise Safety Solutions</li>
                                       
                                         </ul>
                    			
                    				</div>
                    				</div>
                    				<div class="elementor-element elementor-element-7be77c7b elementor-widget elementor-widget-text-editor" data-id="7be77c7b" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<ul><li>Disruptions in travel for construction cost millions each year.</li><li>Know your site needs before you get there.</li><li>Keep workers and the environment safe.</li></ul>						</div>
				</div>
                            <div class="section-content">
                                <div class="equipment-box__btn">
				                    <a class="uk-button uk-button-large" href="https://yoursafetyguys.com/home-1?blog=y" ><span class="elementor-button-icon elementor-align-icon-left">
				                    <i aria-hidden="true" class="fab fa-blogger"></i></span>&nbsp; <span>Safety Tips</span></a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<div class="section-category">-->
            <!--    <div class="uk-container">-->
            <!--        <div class="section-title uk-text-center">-->
            <!--            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>-->
            <!--            <div class="uk-h2">Browse Machinery Categories</div>-->
            <!--        </div>-->
            <!--        <div class="section-content">-->
            <!--            <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-1.jpg') }}" alt="Excavators" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>Excavators</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-2.jpg') }}" alt="Scissor Lift" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>Scissor Lift</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-3.jpg') }}" alt="forklift / Boomlift" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>forklift / Boomlift</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-4.jpg') }}" alt="Compaction Roller" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>Compaction Roller</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-5.jpg') }}" alt="Compaction Roller" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>Compaction Roller</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">-->
            <!--                            <div class="category-item__media"><img src="{{ asset('public/template/img/category-6.jpg') }}" alt="all types containers" />-->
            <!--                                <div class="uk-transition-fade">-->
            <!--                                    <div class="uk-overlay-primary uk-position-cover"></div>-->
            <!--                                    <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="category-item__title"> <span>all types containers</span></div>-->
            <!--                        </a></div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="page-categories-1.html"><span>More categories</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="section-stats" style="background-image: url('{{ asset('public/3d.jpg') }}');">
                <div class="uk-container uk-container-xlarge">
                    <div class="uk-grid uk-child-width-1-2@l uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="stats-item1">
                                <div class="stats-item__header">
                                    <div class="stats-item__numb">Lost PPE + lost time = Lost $</div>
                                    <!--<div class="stats-item__icon"><img src="{{ asset('public/template/img/icons/ico-stats-1.svg') }}" data-uk-svg alt="Helping Projects Done"></div>-->
                                </div>
                                <div class="section-content">
                                <div class="equipment-box__btn">
				                    <a class="uk-button uk-button-large" href="https://yoursafetyguys.com/home-1?blog=y" > <span>Sign Up</span></a></div>

                            </div>
                                <!--<div class="stats-item__desc">Best thing about Antek is to earn some extra revenue on their equipments.</div>-->
                            </div>
                        </div>
                 
                   
                        <div>
                            <div class="stats-item1">
                                <div class="stats-item__header">
                                  <div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-9097b75 elementor-widget elementor-widget-text-editor" data-id="9097b75" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p><span style="color:white" class="x-el x-el-span c1-b7 c1-b8 c1-b c1-c c1-d c1-e c1-f c1-g"><strong class="x-el x-el-span c1-3o c1-3p c1-b c1-a9 c1-66 c1-6y c1-aa">Don’t let slowdowns cost, you can:</strong></span></p><ul style="color:white"><li class="x-el x-el-span c1-b7 c1-b8 c1-b c1-c c1-d c1-e c1-f c1-g" >Find where to get equipment. Track, prepare logs and record updates</li><li class="x-el x-el-span c1-b7 c1-b8 c1-b c1-c c1-d c1-e c1-f c1-g">Map your perimeter</li><li class="x-el x-el-span c1-b7 c1-b8 c1-b c1-c c1-d c1-e c1-f c1-g">Real Time Event and Incident Reports</li></ul>						</div>
				</div>
				<div class="elementor-element elementor-element-e3b3e9e elementor-widget elementor-widget-image" data-id="e3b3e9e" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container" style="width:140px">
								<a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjUzNSIsInRvZ2dsZSI6ZmFsc2V9">
							<img width="250" height="250" src="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/image-section-03-min.png?time=1654212095" class="attachment-large size-large" alt=""  loading="lazy" srcset="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/image-section-03-min.png 250w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/image-section-03-min-150x150.png 150w" sizes="(max-width: 250px) 100vw, 250px">								</a>
									</div>
				</div>
					</div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="section-about">-->
            <!--    <div class="uk-container">-->
            <!--        <div class="section-content">-->
            <!--            <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>-->
            <!--                <div><img src="{{ asset('public/template/img/img-about.png') }}" alt="img-about"></div>-->
            <!--                <div>-->
            <!--                    <div class="section-title">-->
            <!--                        <div class="uk-text-meta">About Antek Equipments Rental</div>-->
            <!--                        <div class="uk-h2">We Offer Smarter & More<br> Affordable Access To Rent<br> Construction Equipment</div>-->
            <!--                    </div>-->
            <!--                    <p>Aiusmod tempor incididunt ut labore sed dolore magna aliquay dnim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>-->
            <!--                    <ul class="about-list">-->
            <!--                        <li> <strong>The Facilities<br> Less Expensive</strong><span>Velit esse cillum dolore ipsum eu fugiat nulla pariatur. </span></li>-->
            <!--                        <li> <strong>Innovating<br> The Heavy Fleets</strong><span>Excepteur sint occaecat cupidat non proident sunt iny.</span></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="section-steps">-->
            <!--    <div class="uk-container uk-container-large">-->
            <!--        <div class="section-title uk-text-center">-->
            <!--            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>-->
            <!--            <div class="uk-h2">Get Your Rentals In Easy Steps</div>-->
            <!--        </div>-->
            <!--        <div class="section-content">-->
            <!--            <div class="steps-list uk-position-relative" tabindex="-1" data-uk-slider="finite: true">-->
            <!--                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">-->
            <!--                    <li>-->
            <!--                        <div class="steps-item">-->
            <!--                            <div class="steps-item__box" data-uk-tooltip="title: Best thing about Antek is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">-->
            <!--                                <div class="steps-item__icon"><img src="{{ asset('public/template/img/icons/ico-step-1.png') }}" alt="icon-step"></div>-->
            <!--                                <div class="steps-item__title"><b>1</b><span>Search Your Equipment</span></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="steps-item">-->
            <!--                            <div class="steps-item__box" data-uk-tooltip="title: Best thing about Antek is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">-->
            <!--                                <div class="steps-item__icon"><img src="{{ asset('public/template/img/icons/ico-step-2.png') }}" alt="icon-step"></div>-->
            <!--                                <div class="steps-item__title"><b>2</b><span>compare Your selection</span></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="steps-item">-->
            <!--                            <div class="steps-item__box" data-uk-tooltip="title: Best thing about Antek is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">-->
            <!--                                <div class="steps-item__icon"><img src="{{ asset('public/template/img/icons/ico-step-3.png') }}" alt="icon-step"></div>-->
            <!--                                <div class="steps-item__title"><b>3</b><span>Reserve the equipment </span></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <div class="steps-item">-->
            <!--                            <div class="steps-item__box" data-uk-tooltip="title: Best thing about Antek is to earn some extra revenue on their equipments.; pos: bottom-center; animation: uk-animation-slide-bottom-small; duration: 500; pos: bottom">-->
            <!--                                <div class="steps-item__icon"><img src="{{ asset('public/template/img/icons/ico-step-4.png') }}" alt="icon-step"></div>-->
            <!--                                <div class="steps-item__title"><b>4</b><span> Get Start Your Project</span></div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <div class="uk-hidden@l">-->
            <!--                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="section-cta">-->
            <!--    <div class="uk-container-expand">-->
            <!--        <div class="section-cta__box">-->
            <!--            <div class="section-cta__img"><img src="{{ asset('public/template/img/img-cta.png') }}" alt=""></div>-->
            <!--            <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>-->
            <!--            <div class="section-cta__support">-->
            <!--                <div class="support"> <a class="support__link" href="tel:236-799-5500">-->
            <!--                        <div class="support__icon"><i class="fas fa-headset"></i></div>-->
            <!--                        <div class="support__desc">-->
            <!--                            <div class="support__label">Get Quick Support</div>-->
            <!--                            <div class="support__phone">236-799-5500</div>-->
            <!--                        </div>-->
            <!--                    </a></div>-->
            <!--            </div>-->
            <!--            <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get started</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
           
            <!--<div class="section-equipment">-->
            <!--    <div class="uk-container">-->
            <!--        <div class="equipment-box">-->
            <!--            <div class="equipment-box__media"><img src="{{ asset('public/template/img/img-equipment.jpg') }}" alt=""></div>-->
            <!--            <div class="equipment-box__desc">-->
            <!--                <div class="equipment-box__title">Worried About The Idling Equipment Parking At Yard?</div>-->
            <!--                <div class="equipment-box__text">Start listing your equipment(s) with us today!</div>-->
            <!--                <div class="equipment-box__btn"><a class="uk-button uk-button-large" href="page-blog-list.html"><span>Learn more</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="section-reviews">-->
            <!--    <div class="uk-container">-->
            <!--        <div class="section-title uk-text-center">-->
            <!--            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>-->
            <!--            <div class="uk-h2">Read Customers Thoughts</div>-->
            <!--        </div>-->
            <!--        <div class="section-content">-->
            <!--            <div data-uk-slider="autoplay: true">-->
            <!--                <div class="uk-position-relative" tabindex="-1">-->
            <!--                    <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-2@m">-->
            <!--                        <li>-->
            <!--                            <div class="review-item">-->
            <!--                                <div class="review-item__box">-->
            <!--                                    <div class="review-item__title">Satisfied With The Facilities At Antek Construction Equipment Rental </div>-->
            <!--                                    <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>-->
            <!--                                    <div class="review-item__user">-->
            <!--                                        <div class="review-item__avatar"><img src="{{ asset('public/template/img/review-avatar-1.png') }}" alt="review-avatar"></div>-->
            <!--                                        <div class="review-item__info">-->
            <!--                                            <div class="review-item__name">Donald H. James</div>-->
            <!--                                            <div class="review-item__position">Rental Customer</div>-->
            <!--                                        </div>-->
            <!--                                        <div class="review-item__stars"> <img src="{{ asset('public/template/img/icons/stars.svg') }}" alt="stars"></div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <div class="review-item">-->
            <!--                                <div class="review-item__box">-->
            <!--                                    <div class="review-item__title">Satisfied With The Facilities At Antek Construction Equipment Rental </div>-->
            <!--                                    <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>-->
            <!--                                    <div class="review-item__user">-->
            <!--                                        <div class="review-item__avatar"><img src="{{ asset('public/template/img/review-avatar-2.png') }}" alt="review-avatar"></div>-->
            <!--                                        <div class="review-item__info">-->
            <!--                                            <div class="review-item__name">Katherine A. Fogg</div>-->
            <!--                                            <div class="review-item__position">Rental Customer</div>-->
            <!--                                        </div>-->
            <!--                                        <div class="review-item__stars"> <img src="{{ asset('public/template/img/icons/stars.svg') }}" alt="stars"></div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <div class="review-item">-->
            <!--                                <div class="review-item__box">-->
            <!--                                    <div class="review-item__title">Satisfied With The Facilities At Antek Construction Equipment Rental </div>-->
            <!--                                    <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>-->
            <!--                                    <div class="review-item__user">-->
            <!--                                        <div class="review-item__avatar"><img src="{{ asset('public/template/img/review-avatar-1.png') }}" alt="review-avatar"></div>-->
            <!--                                        <div class="review-item__info">-->
            <!--                                            <div class="review-item__name">Donald H. James</div>-->
            <!--                                            <div class="review-item__position">Rental Customer</div>-->
            <!--                                        </div>-->
            <!--                                        <div class="review-item__stars"> <img src="{{ asset('public/template/img/icons/stars.svg') }}" alt="stars"></div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="section-blog">
                <div class="uk-container">
                    <div class="section-header">
                        <div class="section-title">
                            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
                            <div class="uk-h2">Latest Products & Updates</div>
                        </div>
                        <!--<a class="uk-button uk-button-default uk-button-large" href="page-blog-article.html"><span>View all news</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a>-->
                    </div>
                    <div class="section-content">
                        <div data-uk-slider>
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class=" uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m">
                                   @foreach($data as $res)
                                    <li style="margin-bottom:30px">
                                        <div class="blog-item blog-item--slider">
                                            <div class="blog-item__media" style="width:200px"><a onclick="getData('<?=$res->link;?>')" href="#"><img src="{{$res->image}}"  alt=""></a>
                                                <div class="blog-item__category">{{$res->model}}</div>
                                            </div>
                                            <div class="blog-item__body">
                                                <div class="blog-item__info">
                                                    <div class="blog-item__date">{{$res->created_at}}</div>
                                                    <div class="blog-item__author">By <a href="{{$res->link}}">{{$res->supplier}}</a></div>
                                                </div>
                                                <div style="    font-size: calc(17px + 2 * (100vw / 1920));" class="blog-item__title">{{$res->name}}</div>
                                                <div class="blog-item__intro">{{$res->description}}.</div>
                                            </div>
                                            <!--<div class="blog-item__bottom"> <a class="link-more" href="page-blog-article.html"><span>Read More</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>-->
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="uk-hidden@m">
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div id="main">
              <div class="container">
                 <div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">Protect Your Worker's Safety</a>
                        </div>

                        <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                               <p><strong class="x-el x-el-span c1-3o c1-3p c1-b c1-a9 c1-66 c1-6y c1-aa">Get Instant Access to :</strong></p>
                               <ul><li>What PPE you need and Where to get it</li><li>Custom Safety Dashboard</li><li>Mobile Check-In and Routing</li><li>Safety Requirements by Site</li></ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Industry Specific Safety Guides</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                               <p><strong>Join our Training Rooms for:</strong></p>
                               <ul><li>Real solutions for workers from Experts</li><li>Interactive Virtual Reality Orientation and Training</li><li>Safety Videos and Training Trips from the Worksite</li></ul>
                                </div>
                            </div>
                        </div>
                             <div class="card">
                            <div class="card-header" id="faqhead3">
                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                aria-expanded="true" aria-controls="faq3">R.I.S.E.</a>
                            </div>

                            <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                <div class="card-body">
                                    <p><a href="https://www.hintonscaffold.com/rise/#:~:text=Learn%20more%20about%20hosting%20a%20RISE%20training%20session%20for%20your%20students%20or%20employees%20and%20submit%20your%20request.">Realistic Immersive Safety Education:&nbsp;</a></p>
                                <p>Get ready for&nbsp;<strong>RISE</strong>— the interactive construction safety and hazard awareness training program delivered by virtual reality. Providing current and prospective construction workers with Realistic, Immersive Safety Education, RISE is an exciting new initiative developed by Hinton Scaffold Solutions and supported by the&nbsp;<a href="https://www.ontario.ca/page/ministry-labour-training-skills-development">Ontario Ministry of Labour, Training and Skills Development</a>&nbsp;through its new Skills Development Fund.<img loading="lazy" class="alignnone size-medium wp-image-702" src="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-300x168.png" alt="" width="300" height="168" srcset="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-300x168.png 300w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-1024x574.png 1024w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-768x430.png 768w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-1536x861.png 1536w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner.png 1649w" sizes="(max-width: 300px) 100vw, 300px"></p>
                             <!--<img loading="lazy" class="alignnone size-medium wp-image-702" src="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-300x168.png" alt="" width="300" height="168" srcset="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-300x168.png 300w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-1024x574.png 1024w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-768x430.png 768w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner-1536x861.png 1536w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/risebanner.png 1649w" sizes="(max-width: 300px) 100vw, 300px">-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-bottom:20px">
               
                <div class="elementor-custom-embed">
        			<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Ottawa%2C%20Ontario%2C%20Canada&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="Ottawa, Ontario, Canada" aria-label="Ottawa, Ontario, Canada"></iframe>
        		</div>
        	</div>
        </main>
        
     @include('footer')
    </div>
    <script src="{{ asset('public/template/js/libs.js') }}"></script>
    <script src="{{ asset('public/template/js/main.js') }}"></script>
</body>

</html>

