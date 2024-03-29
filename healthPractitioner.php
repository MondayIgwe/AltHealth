<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:Admin_login');
    }

      //Connect to Life health Care Database  
      require_once 'Connect_DB.php';
      
     //Query the database for user
    $query = $PDOdb->prepare("SELECT * FROM login;");
    $query->execute();
    
    //Fetch the username and password for login
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    
       foreach($rows as $row){
        echo $row['username']." "."Login Succesful!";
        }
?>
<html>
    <head>    
        <title>Welcome to Life health Care</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <style>
        body {background-color: lightyellow;}
        </style>
    </head>
    <body> 
    <center><h1><b>Welcome! Health Practitioner</b></h1></center>
    <center>
         <div class="header">
           <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
           <nav>
           <ul>
                <div class="icon-bar">
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
               </div>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="HP_BookAppointments.php">Book Appointments for a Patient</b></a></li></object>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="HP_ViewAppointments.php">View Appointments</b></a></li></object>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="Admin_add_new_patitent.php">Add a New Patient</b></a></li></object>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="invoice.php">Generate Invoice</b></a></li></object>      
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="Generate_reports.php">Generate Reports</b></a></li></object> 
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="index.php">Log out</b></a></li></object>
           </ul>
        </nav>
        </div>
    </center>
    <div>         
    <div id="main" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="content-full">    
                    <article id="post-93" class="post-93 page type-page status-publish hentry wpautop">
                        <section class="post-entry">
                            <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element">
        <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
	<div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.3">
        <ul>	<!-- SLIDE  -->
	<li data-index="rs-27" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""	
        <script type="text/javascript">
        if (setREVStartSize!==undefined) setREVStartSize(
                {c: '#rev_slider_8_1', responsiveLevels: [1240,1024,778,480], gridwidth: [1300,1024,778,480], gridheight: [500,500,500,300], sliderLayout: 'fullwidth'});

        var revapi8,
                tpj;	
        (function() {			
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
	function onLoad() {				
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#rev_slider_8_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_8_1");
	}else{
		revapi8 = tpj("#rev_slider_8_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//www.healthcaresuccess.com/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
		        onHoverStop:"off",
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1300,1024,778,480],
			gridheight:[500,500,500,300],
			lazyType:"none",
			shadow:0,
			spinner:"spinner0",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}; 
	}; 
       }()); 
       </script>
       </div><!-- END REVOLUTION SLIDER --></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1476304999487 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1476305012332"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="specialty-copy wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1477334928019"><div class="wpb_wrapper">
       <div class="wpb_text_column wpb_content_element  vc_custom_1551978232797" >
       <div class="wpb_wrapper">
       </div>
       </div>
        </div>    
        </div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix">
       </div><div id="free-consultation" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1478028778201 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3"><div class="vc_column-inner vc_custom_1475794162846"><div class="wpb_wrapper">
       <div  class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1476135954858  free-consult-img">		
       <figure class="wpb_wrapper vc_figure">
       <div class="vc_single_image-wrapper   vc_box_border_grey">
       </figure>
       <div class="container">
         <di
        v class="row">
   
        <p><h2><span style="color: #003f8a;"><b>Administrative Management</b></span></h2>
        <p><font size="4">Perform administrative activities on Client booking, generate reports and administer clinic 
                    daily activities. gGiven patients the power to book medical appointments online, while maintaining control of their schedule. 
                    Patients are able to select their medical appointments and make preferred appointment time, whilst the clinic approves or denies the request. 
                    Improving both patient and staff communication satisfaction with ans easy Online Booking system.
           </font></p>
        <br>    
           <br> 
           <div>  
             <img src="images/booking.jpg" alt="Supplememnts" width="350" height="170" align="left">
      </div>
      </div>
      </div>
           <br />
           <br />
           <br />
           <br />

    <div id="text-48" class="widget_text"><h2 class="widget-title"><b>Get In Touch</b></h2>			
    <div class="textwidget"><div class="footer-phone"><a href="tel:27-756-1907" class="invoca"><b>+27-756-1907</b></a></div>
   <p><strong><a href="mailto:info@healthcaresuccess.com">info@lifehealthcare.co.za</a></strong></p>
   <div id="footer-address"><strong>LifeHealthcare</strong><br />
   <font size="3">Unit 495 The William Nicole & Broadacres<br />
   Johannesburg,<br />
   South Africa, 2191</font><br />
   </form>
   </body>
    <br />
    <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>
