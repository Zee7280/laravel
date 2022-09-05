<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Categories Layout-1</title>
  <meta content="Templines" name="author">
  <meta content="Antek" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/template/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/template/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/template/img/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('public/template/img/favicon/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#222222">
  <link rel="stylesheet" href="{{ asset('public/template/css/libs.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/css/main.css') }}">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  
</head>

<script type="text/javascript">
$(document).ready(function(){
   
    $('.gNO89b').submit();
   
   
   // alert(ip);
});
   function getData(link){
      
       var ip = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
         var formData = new FormData();
        formData.append("ip", ip);
        formData.append("link", link);
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
<body class="page-categories">
<?php 
//print_r($data);

?>
       <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <!-- Loader end-->
    
  <div class="page-wrapper">
   @include('header')

   <main class="page-main">
   
            <div class="section-blog">
                <div class="uk-container">
                    <div class="section-header">
                        <div class="section-title">
                            <div class="uk-text-meta">We Promise To Find You The Right Equipment</div>
                            <div class="uk-h2">Search & Updates</div>
                        </div>
                        <!--<a class="uk-button uk-button-default uk-button-large" href="page-blog-article.html"><span>View all news</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a>-->
                    </div>
                    <div class="section-content">
                        <div data-uk-slider>
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class=" uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m">
                                    <!--uk-slider-items-->
                                    @if(count($data))
                                    
                                    
                                    @foreach($data as $res)
                                    <li style="margin-bottom:30px">
                                        <div class="blog-item blog-item--slider">
                                            <div class="blog-item__media"><a onclick="getData('<?=$res->link;?>')" href="#"><img src="{{$res->image}}" alt=""></a>
                                                <div class="blog-item__category">{{$res->model}}</div>
                                            </div>
                                            <div class="blog-item__body">
                                                <div class="blog-item__info">
                                                    <div class="blog-item__date">{{$res->created_at}}</div>
                                                    <div class="blog-item__author">By <a onclick="getData()" href="{{$res->link}}">{{$res->supplier}}</a></div>
                                                </div>
                                                <div class="blog-item__title" style="    font-size: calc(18px + 2 * (100vw / 1920));">{{$res->name}}</div>
                                                <div class="blog-item__intro">{{$res->description}}.</div>
                                            </div>
                                            <!--<div class="blog-item__bottom"> <a class="link-more" href="page-blog-article.html"><span>Read More</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>-->
                                        </div>
                                    </li>
                                   
                                    @endforeach
                                   
                             
                                </ul>
                            </div>
                             @else

                                    <!--<h5>No result found...</h5>-->
                                    <iframe height="1000px" style="width:100%" src="https://www.google.com/webhp?igu=1&q=<?=$res;?>" ></iframe>
                                    @endif
                            <div class="uk-hidden@m">
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('footer')

  </div>
  <script src="{{ asset('public/template/js/libs.js') }}"></script>
  <script src="{{ asset('public/template/js/main.js') }}"></script>
</body>

</html>