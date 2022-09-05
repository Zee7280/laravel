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
  content: "\f019";
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  float: right;
}

#main #faq .card .card-header .btn-header-link.collapsed {
  background: #fcbb21;
  color: black;
}

#main #faq .card .card-header .btn-header-link.collapsed:after {
  content: "\f019";
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

<script type="text/javascript">
$(document).ready(function(){
   
   
   
   
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
   
   <div id="main">
        <div class="container ">
            <div class="accordion row" id="faq">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/SPMANSIEmergencyChecklist.pdf?ver=1650072212557" class="btn btn-header-link"
                            aria-expanded="true" aria-controls="faq1">ANSI Safety Shower Checklist (pdf)</a>
                        </div>

                     
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/ANSI%20Dropped%20Tools.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq2">ANSI Dropped Tools (pdf)</a>
                        </div>

                      
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/regulations_brochure.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">Spills & Containment (pdf)</a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/covid-19-post-pandemic-business-playbook-manuf.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">Workplace Safety Pandemic Playbook (pdf)</a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/National%20Fire%20Code%20of%20Canada%202015.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">National Fire Code of Canada 2015 (pdf)</a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/WHMIS%20Safe%20Storage.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">WHMIS Safe Storage (pdf)</a>
                        </div>

                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/WSPS%20Workplace%20Inspection%20Checklist.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">WSPS Workplace Inspection Checklist (pdf)</a>
                        </div>

                    </div>
                    
                      <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/Mining-poster-Top-10-risk-categories-undergrou.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">Mining Poster Top 10 Injuries</a>
                        </div>

                    </div>
                    
                       <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/MTO%20Drainage%20Requirements.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">MTO Drainage Requirements</a>
                        </div>
                    </div>
                      <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/Lockout%20Energy%20Procedures.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">Lockout Energy Procedures</a>
                        </div>
                    </div>
                    
                      <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="https://img1.wsimg.com/blobby/go/6dc05787-3754-4e14-bf7a-75553639fee5/downloads/Heat%20Stress%20Chart.pdf?ver=1650072212558" class="btn btn-header-link collapsed"
                            aria-expanded="true" aria-controls="faq3">Heat Stress Chart</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm">
            <img width="768" height="992" src="{{asset('public/FAQ.png')}}" class="attachment-medium_large size-medium_large" alt="" loading="lazy">
            
            </div>
            </div>
             <!--/////////////-->
            <div class="row" style="margin-top:10%">
               <div class="col-sm">
                    <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-80c6093 elementor-widget elementor-widget-heading" data-id="80c6093" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Experience the new world of Safety 3.0</h2>		</div>
                    </div>
                    <div class="elementor-element elementor-element-1b252f7 elementor-widget elementor-widget-text-editor" data-id="1b252f7" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                    <ul><li>Remote learning saves time and money.</li><li>Less travel, less fuel burned, less money spent.</li></ul>						</div>
                    </div>
                    <div class="elementor-element elementor-element-95757a1 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="95757a1" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="equipment-box__btn">
                            <a class="uk-button uk-button-large" href="https://spatial.io/s/60b540676c51d50948986bc4" ><span>Try it Out</span></a></div>

                    </div>
                    </div>
                    </div>                    
                </div>
            
                 <div class="col-sm">
                    <img width="1024" height="517" src="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Spatial_Selfie_03-e1651406428216.png?time=1654212095" class="attachment-large size-large" alt="" loading="lazy" srcset="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Spatial_Selfie_03-e1651406428216.png 1024w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Spatial_Selfie_03-e1651406428216-300x151.png 300w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Spatial_Selfie_03-e1651406428216-768x388.png 768w" sizes="(max-width: 1024px) 100vw, 1024px">                    
                </div>
          
            </div>
            
                   <!--/////////////-->
            <div class="row" style="margin-top:10%">
               <div class="col-sm">
                    <img width="500" height="367" src="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Untitled-design-2022-04-18T222315.419.png?time=1654212095" class="attachment-large size-large" alt="" loading="lazy" srcset="https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Untitled-design-2022-04-18T222315.419.png 735w, https://secureservercdn.net/50.62.89.58/h8v.e1a.myftpupload.com/wp-content/uploads/2022/04/Untitled-design-2022-04-18T222315.419-300x150.png 300w" sizes="(max-width: 735px) 100vw, 735px">              
                   
                </div>
            
                 <div class="col-sm">
          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85f8fba" data-id="85f8fba" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e40e2b7 elementor-widget elementor-widget-heading" data-id="e40e2b7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"><a href="https://app.pipefy.com/public/form/GDJrtTxy">Know what you need before you arrive onsite.</a></h2>		</div>
				</div>
				<div class="elementor-element elementor-element-8df505d elementor-widget elementor-widget-text-editor" data-id="8df505d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p><strong>Custom Dashboard that tells you:</strong></p><ul><li>What you need</li><li>Where to get it</li><li>Where to store it.</li></ul>						</div>
				</div>
				<div class="elementor-element elementor-element-7179aa3 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="7179aa3" data-element_type="widget" data-widget_type="button.default">
    				<div class="elementor-widget-container">
        	        	 <div class="equipment-box__btn">
                                    <a class="uk-button uk-button-large" href="https://calendly.com/pictosafe/15min?month=2022-04" ><span>Book a Demo</span></a></div>
        	        	
        				</div>
    				</div>
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