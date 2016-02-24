<? 
/*
if (isset($_REQUEST[contact_name])){
	echo "asdfg";
	$headers = 'From: New-Lead-2 <noreply@hamefits.com>' . "\r\n" .
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
	$message = " 
	 <table  style='direction:rtl;margin:0 auto;float:right;width:632px;background-color:#ffffff' >
	 	<tbody dir='rtl'>
	 	<tr>
	 	<td align='center' style='font-size:22px;color:#57565e!important;padding-right:6px;padding-left:6px' valign='top' >
			<div style='text-align: right;'>שם: $_REQUEST[contact_name] </div>
			<div style='text-align: right;'>איימייל: $_REQUEST[contact_email] </div>
			<div style='text-align: right;'>טלפון: $_REQUEST[contact_phone] </div>
			<div style='text-align: right;'>הודעה: $_REQUEST[contact_message] </div>
		</td>
		</tr>
		</tbody>
	</table>";
	mail("yoni@sayyes.co.il", '', $message, $headers);
}
*/
include 'inc/he.inc';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="סיי סופטווב בית תוכנה ופרסום באינטרנט. בית תוכנה מקצועי לפיתוח, אפיון והטמעת תוכנה. מערכות אינטרנטיות וסלולריות. התמחות בפתרונות תוכנה מבוססי קוד פתוח. פיתוח מיזמים באינטרנט, מערכות ארגוניות עסקיות ERP ו-CRM, מערכות ניהול ידע, מנגנוני פורטלים גדולים.">
    <meta name="author" content="">
	<title>סיי סופטווב  - בית תוכנה, פרסום ומיתוג אינטרנט, סיי יס</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<link href="css/he.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img height="120px" src="img/logo.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team"><?=$menu_about?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cust"><?=$menu_cust?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><?=$menu_service?></a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#portfolio"><?=$menu_works?></a>
                    </li>-->
                    
                    <li>
                        <a class="page-scroll" target="_blank" href="http://sayyes.co.il/%D7%91%D7%99%D7%AA%20%D7%AA%D7%95%D7%9B%D7%A0%D7%94%20%D7%A1%D7%99%D7%99%20%D7%AA%D7%95%D7%9B%D7%A0%D7%99%D7%AA%D7%9F%20%D7%AA%D7%99%D7%A7%20%D7%A2%D7%91%D7%95%D7%93%D7%95%D7%AA.pdf">תיק עבודות</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#about"><?=$menu_ex?></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#contact"><?=$menu_contact?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <!-- Header -->
<header>
    <div class="">
        <div class="intro-text">   
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			 
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item item1 active">
		                	<div class="intro-heading"><?=$slider_tit1?></div>
	                      	<div class="intro-lead-in"><?=$slider_txt1?></div>
			               <!-- <a href="#services" class="page-scroll btn btn-xl"><?=$slider_more?></a>-->
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>
			               
			    </div>
			
			    <div class="item item2">
								<div class="intro-heading"><?=$slider_tit2?></div>
								<div class="intro-lead-in"><?=$slider_txt2?></div>
			                <!-- <a href="#services" class="page-scroll btn btn-xl"><?=$slider_more?></a>-->
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>
			                
			    </div>
			
			    <div class="item item3">
			                <div class="intro-heading"><?=$slider_tit3?></div>
							<div class="intro-lead-in"><?=$slider_txt3?></div>
			                <!-- <a href="#services" class="page-scroll btn btn-xl"><?=$slider_more?></a>-->
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>
			               
			    </div>
			  </div>
			
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			 
        </div>
    </div>
    
</header>

	 <!-- Clients Aside -->
    <section class="clients" id="cust">
        <div class="container">
            <div class="row">
            	<div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$tit_cust?></h2>
                    <h3 class="section-subheading text-muted"><?=$sectit_cust?></h3>

                </div>
                 <div class=" col-sm-2">
                    <a href="#">
                        <img src="img/11.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class=" col-sm-2">
                    <a href="#">
                        <img src="img/1.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class=" col-sm-2">
                    <a href="#">
                        <img src="img/6.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class=" col-sm-2">
                    <a href="#">
                        <img src="img/2.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                  <div class="col-sm-2">
                    <a href="#">
                        <img src="img/8.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class=" col-sm-2">
                    <a href="#">
                        <img src="img/isra2.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
               
              
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$tit_service?></h2>
                    <h3 class="section-subheading text-muted"><?=$sectit_service?></h3>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?=$service3?></h4>
                    <p class="text-muted"><?=$service3_txt?></p>
                </div>

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?=$service2?></h4>
                    <p class="text-muted"><?=$service2_txt?></p>
                </div>

                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?=$service1?></h4>
                    <p class="text-muted"><?=$service1_txt?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <!--<section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$tit_works?></h2>
                    <h3 class="section-subheading text-muted"><?=$setit_works?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?=$works1?></h4>
                        <p class="text-muted"><?=$works1_txt?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4><?=$works2?></h4>
                        <p class="text-muted"><?=$works3_txt?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4><?=$works3?></h4>
                        <p class="text-muted"><?=$works3_txt?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4><?=$works4?></h4>
                        <p class="text-muted"><?=$works4_txt?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4><?=$works5?></h4>
                        <p class="text-muted"><?=$works5_txt?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4><?=$works6?></h4>
                        <p class="text-muted"><?=$works6_txt?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$menu_ex?></h2>
                    <h3 class="section-subheading text-muted"><?=$setit_ex?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?=$date1?></h4>
                                    <h4 class="subheading"><?=$date_tit1?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?=$date_txt1?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                     <h4><?=$date2?></h4>
                                    <h4 class="subheading"><?=$date_tit2?></h4>
                                </div>
                                 <div class="timeline-body">
                                    <p class="text-muted"><?=$date_txt2?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                      <h4><?=$date3?></h4>
                                    <h4 class="subheading"><?=$date_tit3?></h4>
                                </div>
                                 <div class="timeline-body">
                                    <p class="text-muted"><?=$date_txt3?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                      <h4><?=$date4?></h4>
                                    <h4 class="subheading"><?=$date_tit4?></h4>
                                </div>
                                 <div class="timeline-body">
                                    <p class="text-muted"><?=$date_txt4?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$menu_about?></h2>
                    <h3 class="section-subheading text-muted"><?=$setit_about?></h3>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" height="200px" class="img-responsive img-circle" alt="">
                        <h4><?=$about_img?></h4>
                        <p class="text-muted" style="text-align: center"><?=$about_img_txt?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
               </div>
                <div class="col-sm-8">
                    <div class="team-member">
                        <p class="text-muted"><?=$about_txt?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <div class="team-member">
                        <p class="text-muted" ><?=$about_txt2?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/4.jpg" height="200px" class="img-responsive img-circle" alt="">
                        <h4><?=$about_img2?></h4>
                        <p class="text-muted" style="text-align: center"><?=$about_img_txt2?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
               </div>
            </div>

        </div>
    </section>


	 <!-- Clients Aside -->
    <section class="clients" id="cust">
        <div class="container">
            <div class="row">
            	<div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$tit_tec?></h2>
                    <h3 class="section-subheading text-muted"><?=$sectit_tec?></h3>

                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/1.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/2.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/3.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/4.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/5.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/6.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/7.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/tec/8.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
   
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$tit_contact?></h2>
                    <h3 class="section-subheading text-muted"><?=$setit_contact?></h3>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
            	<div class="col-sm-6">
            		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13520.871303888853!2d34.829093295610306!3d32.09039806137293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4a2604959329%3A0x1b76a720b993ec62!2z15PXqNeaINeW15DXkSDXlifXkdeV15jXmdeg16HXp9eZIDc2LCDXkdeg15kg15HXqNenLCDXmdep16jXkNec!5e0!3m2!1siw!2s!4v1429964540784?hl=he-IL" width="100%" height="210" frameborder="0" style="border:0"></iframe>          		
            	</div>
            	<div class="col-sm-6">
            		<p class="cols" ">
														נייד:<br>
														פקס:<br>
														אימייל:
					</p>
            		<p class="cols2" >
						+972-54-2000-181<br>
						+972-153542000181<br>
						<a href="mailto:yoni.luria@gmail.com" class="link1">yoni.luria@gmail.com</a>
					</p>
            	</div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted"><?=$setit_contact2?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="<?=$contact_message?> *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="<?=$contact_name?> *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="<?=$contact_email?> *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="<?=$contact_phone?> *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl"><?=$contact_btn?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"><?=$copyright?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                           <iframe src="http://zuze.co.il/"></iframe>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
						<iframe src="http://ecool.co.il/"></iframe>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
               <iframe src="http://crownsplendor.com/"></iframe>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
               <iframe src="http://eyesline.co.il/"></iframe>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <iframe src="http://b-teacher.co.il/"></iframe>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
            	<iframe src="http://bukharim.com/"></iframe>
                <!--<div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <!--<h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
