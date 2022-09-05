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
  
   <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/jqvmap/dist/jqvmap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body class="page-categories">
    
       <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <!-- Loader end-->
    
  <div class="page-wrapper">
   @include('header')

    <main class="page-main">
      <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{ asset('public/template/img/bg/bg_categories.jpg') }}">
          <div class="page-head__content" data-uk-parallax="y: 0, 100">
            <div class="uk-container">
              <div class="header-icons"><span></span><span></span><span></span></div>
              <div class="page-head__title"> Submit Ticket</div>
              <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li><span>Submit Ticket</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div>
       <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow-sm ">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
           
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Add Ticket</h1>
                </div>
                <form enctype="multipart/form-data" method="post" name="user_form"  id="user_form">
                    @csrf
                  <div class="form-group">
                <div class="form-row">
                     <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Description</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="description"    />
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Company Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="company"    />
                    </div>
                </div>
                <div class="form-row">
                     <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Email</label>
                        <input type="email" class="form-control" id="exampleInputFirstName" name="email"    />
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Phone</label>
                        <input type="number" class="form-control" id="exampleInputFirstName" name="phone"    />
                    </div>
                </div>
                    <div class="pp-input-wrap pp-input-md"><b class="pp-label-text">I need help with</b>
                    <div class="markdown"><p>Standard PPE:</p></div><div class="pp-checkbox">
                        <input name="customFields.vertical_checklist" id="vertical_checklist_Hardhat" tabindex="0" type="checkbox" value="Hardhat">
                        <label for="vertical_checklist_Hardhat" title="">Hardhat</label>
                        </div><div class="pp-checkbox"><input name="protective" id="vertical_checklist_Protective Eyewear" tabindex="0" type="checkbox" value="Protective Eyewear"><label for="vertical_checklist_Protective Eyewear" title="">Protective Eyewear</label>
                        </div><div class="pp-checkbox"><input name="safety" id="vertical_checklist_Safety Boots" tabindex="0" type="checkbox" value="Safety Boots"><label for="vertical_checklist_Safety Boots" title="">Safety Boots</label>
                        </div><div class="pp-checkbox"><input name="hi" id="vertical_checklist_Hi Vis Clothing" tabindex="0" type="checkbox" value="Hi Vis Clothing"><label for="vertical_checklist_Hi Vis Clothing" title="">Hi Vis Clothing</label>
                        </div><div class="pp-checkbox"><input name="ear" id="vertical_checklist_Ear Protection" tabindex="0" type="checkbox" value="Ear Protection"><label for="vertical_checklist_Ear Protection" title="">Ear Protection</label>
                        </div><div class="pp-checkbox"><input name="mask" id="vertical_checklist_Protective Mask" tabindex="0" type="checkbox" value="Protective Mask"><label for="vertical_checklist_Protective Mask" title="">Protective Mask</label>
                        </div><div class="pp-checkbox"><input name="gloves" id="vertical_checklist_Gloves" tabindex="0" type="checkbox" value="Gloves"><label for="vertical_checklist_Gloves" title="">Gloves</label>
                        </div><div class="pp-checkbox"><input name="other" id="vertical_checklist_Other" tabindex="0" type="checkbox" value="Other">
                        <label for="vertical_checklist_Other" title="">Other</label></div></div>
                    </br>
                    <div class="form-group">
                    <div id="saved_msg" ><span></span></div>

                        <button type="button" onclick="Insertcategory()" class="btn btn-primary btn-block">
                        Submit
                        </button>
                  </div>
                </form>
                <div class="text-center"></div>
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
      <div class="section-cta">
        <div class="uk-container-expand">
          <div class="section-cta__box">
            <div class="section-cta__img"><img src="{{ asset('public/template/img/img-cta.png') }}" alt=""></div>
            <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>
            <div class="section-cta__support">
              <div class="support"> <a class="support__link" href="tel:236-799-5500">
                  <div class="support__icon"><i class="fas fa-headset"></i></div>
                  <div class="support__desc">
                    <div class="support__label">Get Quick Support</div>
                    <div class="support__phone">236-799-5500</div>
                  </div>
                </a></div>
            </div>
            <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get started</span><img src="{{ asset('public/template/img/icons/arrow.svg') }}" alt="arrow" data-uk-svg></a></div>
          </div>
        </div>
      </div>
    </main>
        @include('footer')

  </div>
  <script src="{{ asset('public/template/js/libs.js') }}"></script>
  <script src="{{ asset('public/template/js/main.js') }}"></script>
  
  <script>

function Insertcategory(){

            var bi_form = document.querySelector('#user_form');
            var fd = new FormData(bi_form);
  $.ajax({
            type:'post',      
            url:'<?=url('api/insert-ticket');?>',                
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data:fd,
            processData:false,
            contentType:false,               
            success:function(res){
                if(res.status){
                    $('#saved_msg').html('<p style="color:green;">'+res.message+'.</p>');
                    $('#user_form')[0].reset();

                }else{
                    $('#saved_msg').html('<p style="color:#EA4335;">'+res.message+'.</p>');

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
</body>

</html>