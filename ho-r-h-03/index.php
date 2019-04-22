<?php
include('class/user_class.php');
$obj_user=new user();
date_default_timezone_set("Asia/Kolkata");
$current_date=date('Y-m_d H:i:s');

$data_logo=$obj_user->basic_fetch_by_id('td_logo','deleted_id','0');
$data_contact_details=$obj_user->basic_fetch_by_id('td_contact','active_status','1');
$data_slider=$obj_user->basic_fetch_by_id('td_slider','active_status','1');
$data_about_us=$obj_user->basic_fetch_by_id('td_about_us','active_status','1');
$data_fac=$obj_user->basic_fetch_by_id('td_facillities','active_status','1');
$data_fac_details=$obj_user->basic_fetch_by_id('td_facilities_details','active_status','1');
$data_menu=$obj_user->basic_fetch_by_id('td_menu','active_status','1');
//$data_menu_details=$obj_user->basic_fetch_by_id('td_menu_details','active_status','1');
$data_gallery=$obj_user->basic_fetch_by_id('td_gallery','active_status','1');
$data_feedback=$obj_user->basic_fetch_by_id('td_feedback','active_status','1');
$data_events=$obj_user->basic_fetch_by_id('td_event','active_status','1');

$data_page_wise_content=$obj_user->basic_fetch_by_two_id('td_page_content','active_status','1','page_id','6');

if(isset($_POST['submit_enquery']))
{
		$first_name=addslashes(trim($_POST['first_name']));
		$last_name=addslashes(trim($_POST['last_name']));
		$name=$first_name.' '.$last_name; 
		$phone=addslashes(trim($_POST['phone'])); 
		$email=addslashes(trim($_POST['email']));
		//$subject=addslashes(trim($_POST['subject']));
		$message=addslashes(trim($_POST['message']));

		$data=array
		(
		'name'=>$name,
		'phone'=>$phone,
		'email'=>$email,
		'message'=>$message,
		'date'=>$current_date
		);

		$result=$obj_user->basic_insert("td_enquery",$data);
		echo "<script language='javascript' type='text/javascript'>
		window.location = 'index.php';
		</script>";


}


?>
<!DOCTYPE HTML>
<html>

<head>
<style>
section.stats {
	padding:100px 0;
	background:url(img/page/<?php echo $data_page_wise_content[0]['image'];?>);
	background-repeat:no-repeat;
	background-position:center;
	background-attachment:fixed;
	background-size:100% 100%;
	-webkit-background-size:100% 100%;
	-moz-background-size:100% 100%;
	-o-background-size:100% 100%;
	-ms-background-size:100% 100%;
}
</style>
<title>HOTEL-3</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Safari Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- font files -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"-->
<!-- /font files -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/header.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- js files -->
</head>

<body>



<!-- top bar -->
<div class="top-bar">
	<div class="container">
		<ul class="top-contacts">
			<li class="top-unhover"><p><span class="fa fa-phone-square" aria-hidden="true"></span> <?php echo $data_contact_details[0]['phone'];?></p>
			<li class="top-hover"><p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="#"><?php echo $data_contact_details[0]['email_id'];?></a></p>
		</ul>
		<ul class="top-links">
			<li><a target="_blank" href="<?php echo $data_contact_details[0]['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="<?php echo $data_contact_details[0]['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="<?php echo $data_contact_details[0]['linked_in'];?>"><i class="fa fa-rss"></i></a></li>
			<li><a target="_blank" href="<?php echo $data_contact_details[0]['pinterest'];?>"><i class="fa fa-vk"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>		
</div>
<!-- /top bar -->
<!-- navigation -->
<div class="nav-links">	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage"><h1><?php echo $data_logo[0]['company_name'];?></h1></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index-2.html">Home</a></li>
						<li><a href="#team">Menu</a></li>
					<li><a href="#service">Facilities</a></li>
					
					<li><a href="#team">Events</a></li>
					<li><a href="#work">Gallery</a></li>
					<li><a href="#stats">Statistics</a></li>	
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- <form class="search-container" action="#" method="post">
			<input id="search-box" type="text" class="search-box" name="q" />
			<label for="search-box"><span class="fa fa-search search-icon" aria-hidden="true"></span></label>
			<input type="submit" id="search-submit" />
		</form> -->
	</nav>
</div>
<!-- /navigation -->
<!-- banner section -->
<section class="banner">
	<div class="slider">
	<ul class="slider-main">
		<?php 
		        foreach($data_slider as $value_slider)
		        {
		?>
		<li class="slider-panel"> 
			<img alt="W3layouts" title="W3layouts" src="img/slider/<?php echo $value_slider['image'];?>" class="img-responsive">
			<div class="banner-info">
				<div class="row">
					<div class="col-lg-12">
						 <h3><?php echo $value_slider['title'];?></h3>
						<a href="#" data-toggle="modal" data-target="#<?php echo $value_slider['slider_id'];?>">Read More</a>
					</div>
				</div>		
			</div>
		</li>
		<?php
		        }
		?>
		
	</ul>
	<div class="slider-extra">
		<ul class="slider-nav">
		    <?php
		           for($i=1;$i<=count($data_slider);$i++)
		           {
		    ?>
			<li class="slider-item"><p class="sl"><?php echo $i; ?></p></li>
			<?php 
			       }
			?>
			
		</ul>
		<div class="slider-page"> <a class="slider-pre" href="javascript:;;">&lt;</a> <a class="slider-next" href="javascript:;;">&gt;</a> </div>
	</div>
	<?php 
		        foreach($data_slider as $value_slider_pop)
		        {
	?>

<div class="modal fade" id="<?php echo $value_slider_pop['slider_id'];?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $value_slider_pop['slider_id'];?>" aria-hidden="true">
	  
			<div class="modal-dialog modal-lg">
					<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel"><?php echo $value_slider_pop['title']; ?></h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<img src="img/slider/<?php echo $value_slider_pop['image'];?>" class="img-responsive" alt="w3layouts" title="w3layouts">
									</div>
									<div class="col-lg-6 col-md-6">
										<p class="banner-p1" style="text-align: justify;"><?php echo $value_slider_pop['sub_title']; ?></p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-lg btn-success" data-dismiss="modal">Close</button>
							</div>
					</div>
			</div>
		
    </div>
   <?php
              }
   ?>


</div>
</section>

<?php
        $data_page_content=$obj_user->basic_fetch_by_id('td_page_content','page_id','1');
?>
<section class="service" id="service">
	<div class="container">
		<h2 class="text-center"><?php echo $data_page_content[0]['title'];?></h2>
		<p class="text-center"><?php echo $data_page_content[0]['content'];?></p>
		<div class="row">
			<?php
			       $icount=0;
			       foreach($data_fac as $value_fac)
			       { 
			       	  ++$icount;
			?>

			<div class="col-lg-4 col-md-4 serv-w3ls">
				<i class="<?php echo $value_fac['icon'];?>" aria-hidden="true"></i>
				<h4><?php echo $value_fac['title'];?></h4>
				<p class="serv-p">
                                    <?php echo $value_fac['content'];?> 
				</p> 
				     <?php
				            if($icount<count($data_fac))
				            {
				     ?>
				      <span class="line1"></span>
				     <?php 
				            }
				     ?>
			</div>
			<?php
			       }
			?>
			
			
		</div>
	</div>
</section>
<!-- /services section -->
<!---728x90--->
<!-- event section-->
<section class="event">
	<div class="container-fluid">
		<?php  
		        $icount=0;
		        foreach($data_fac_details  as $value_fac_details)
		        {
		          ++$icount;
		          if($value_fac_details['date']!='0000-00-00')
		          {
		          	  $date=date('M Y',strtotime($value_fac_details['date']));
		          }
		
		      if($icount%2!=0){ 
		 ?>
		   
		<div  class="row event-agile1"  class="row event-agile2"   >
			<div class="col-lg-6 col-md-6 event-w3ls">
				<div class="event-info">
					<p class="event-p1"><?php echo $date; ?> | <?php echo $value_fac_details['title']; ?></p>
					<h3><?php echo $value_fac_details['sub_title']; ?></h3>
					<p class="event-p2" style="text-align: justify;"><?php echo $value_fac_details['content']; ?></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 event-w3ls">
				<div class="hover01 column">
					<div>
						<figure><img src="img/facilities/<?php echo $value_fac_details['image']; ?>" alt="w3layouts" title="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}
		   else
		   {
		?>
                   <div class="row event-agile2">	
			<div class="col-lg-6 col-md-6 event-w3ls">
				<div class="hover01 column">
					<div>
						<figure><img src="img/facilities/<?php echo $value_fac_details['image']; ?>" alt="w3layouts" title="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 event-w3ls">
				<div class="event-info">
					<p class="event-p1"><?php echo $date; ?> | <?php echo $value_fac_details['title']; ?></p>
					<h3><?php echo $value_fac_details['sub_title']; ?></h3>
					<p class="event-p2" style="text-align: justify;"><?php echo $value_fac_details['content']; ?></p>

				</div>
			</div>
		</div>
		<?php
		   }
		
       }
         $data_page_content=$obj_user->basic_fetch_by_id('td_page_content','page_id','2');
   ?>
</div>	
</section>

<section class="team" id="team">
	<div class="container">
		<h3 class="text-center"><?php echo $data_page_content[0]['title'];?></h3>
		<p class="text-center"><?php echo $data_page_content[0]['content'];?></p>
		<div class="row">
			
			<?php
			       foreach($data_events as $value_events)
			       {
			?>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="view view-third">
                    <img src="img/event/<?php echo $value_events['image'];?>" alt="w3layouts" title="w3layouts" class="img-responsive">
                    <div class="mask">
                        <h4><?php echo $value_events['name'];?></h4>
                         <p class="info"><?php echo $value_events['post'];?></p> 
                    </div>
                </div>	
			</div>
			<?php
			       }
			$data_page_content=$obj_user->basic_fetch_by_id('td_page_content','page_id','3');
			?>
			
		</div>
	</div>
</section>
<!-- /team section -->
<!-- work section -->



<section class="work" id="work">
	<h3 class="text-center"><?php echo $data_page_content[0]['title'];?></h3>
	<p class="text-center"><?php echo $data_page_content[0]['content'];?></p>
	<div class="gallery-grids">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
				
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
				<?php 
				       foreach($data_menu as $value_menu)
				       {
				?>
				<li role="presentation"><a href="#<?php echo $value_menu['menu'];?>" role="tab" id="<?php echo $value_menu['menu'];?>-tab" data-toggle="tab" aria-controls="hotel"><?php echo $value_menu['menu'];?></a></li>
				<?php
				       }
				?>

				
			</ul>

			<div id="myTabContent" class="tab-content">

				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<div class="tab_img">
						<?php
						       foreach($data_gallery as $value_gallery)
						       {
						?>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="img/gallery/<?php echo $value_gallery['image'];?>" class="lightninBox" data-lb-group="1">
								<img src="img/gallery/<?php echo $value_gallery['image'];?>" class="img-responsive" alt="" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5><?php echo $value_gallery['name'];?></h5>
									<p><?php echo $value_gallery['sub_title'];?></p>
								</div>
							</a>
						</div>
						<?php
						       }
						?>
				<div class="clearfix"> </div>
                    </div>
				</div>
                <?php 
				       foreach($data_menu  as $value_menu_tab)
				       {
				?>
				<div role="tabpanel" class="tab-pane fade" id="<?php echo $value_menu_tab['menu'];?>" aria-labelledby="<?php echo $value_menu_tab['menu'];?>-tab">
				
					<div class="tab_img">
					<?php
				         $menu_id=$value_menu_tab['menu_id'];
				         $data_gallery=$obj_user->basic_fetch_by_id('td_gallery','menu_id',$menu_id);
				?>
						<?php
						       foreach($data_gallery as $value_gallery)
						       {
						?>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="img/gallery/<?php echo $value_gallery['image'];?>" class="lightninBox" data-lb-group="1">
								<img src="img/gallery/<?php echo $value_gallery['image'];?>" class="img-responsive" alt="" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									<h5><?php echo $value_gallery['name'];?></h5>
									<p><?php echo $value_gallery['sub_title'];?></p>
								</div>
							</a>
						</div>
						<?php
						       }
						?>
				<div class="clearfix"> </div>
                    </div>
				</div>
				<?php
					}
				?>
					
				</div>
			</div>
		</div>
	</div>	
</section>




<?php
     $data_page_content=$obj_user->basic_fetch_by_id('td_page_content','page_id','4'); 
?>
<section class="test">
	<div class="container">
		<h3 class="text-center">Reviews & Feedback</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php
			         $count_feed=count($data_feedback);
			         $count_feed=ceil($count_feed/2);
			         
			         for($i=0;$i<$count_feed;$i++)
			         {
			?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" <?php if($i==0){ ?>class="active" <?php }?> ></li>
		   <?php
		              }
		   ?>
				<!-- <li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li> -->
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php
			 for($i=0;$i<$count_feed;$i++)
			         {
			?>
				<div <?php if($i==0){  ?> class="item active" <?php } else {?> class="item" <?php } ?>>
					    <div class="row">


					    <?php 
					           $counter=$i*2;
					          $data_limit_feedback=$obj_user->limit_feedback($counter);
					          foreach($data_limit_feedback as $value_feedback)
					          {
					    ?>
									<div class="col-lg-6 col-md-6">
                                      
										<div class="test-details">	
												<div class="test-w3ls">
													<p class="test-p1"><?php echo $value_feedback['feedback'];?></p>
												</div>
												<div class="test-agile">
													<img src="img/feedback/<?php echo $value_feedback['image'];?>" alt="w3layouts" title="w3layouts" class="img-circle img-responsive">
													<h4><?php echo $value_feedback['name'];?></h4>
													<div class="clearfix"></div>	
												</div>
										 </div>	

									</div>

							<?php
							   }
							?>
									
					      </div>
				  </div>	
				<?php
				     }
				?>
				 
			</div>
		</div>
	</div>	
</section>




<section class="stats" id="stats">
	<div class="container">	
		<div class="row">
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-1">
				<div class="numscroller" data-slno='1' data-min='0' data-max='<?php echo $data_logo[0]['company']?>' data-delay='3' data-increment="1"><?php echo $data_logo[0]['company_icon']?></div>
				<i class="<?php echo $data_logo[0]['company_icon']?>" aria-hidden="true"></i>
				<h4>Companies</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-2">
				<div class="numscroller" data-slno='1' data-min='0' data-max='<?php echo $data_logo[0]['awards']?>' data-delay='3' data-increment="1"><?php echo $data_logo[0]['awards']?></div>
				<i class="<?php echo $data_logo[0]['awards_icon']?>" aria-hidden="true"></i>
				<h4>Awards Won</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-3">
				<div class="numscroller" data-slno='1' data-min='0' data-max='<?php echo $data_logo[0]['clients']?>' data-delay='3' data-increment="1"><?php echo $data_logo[0]['clients']?></div>
				<i class="<?php echo $data_logo[0]['clients_icon']?>" aria-hidden="true"></i>
				<h4>Happy Clients</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-4">
				<div class="numscroller" data-slno='1' data-min='0' data-max='<?php echo $data_logo[0]['rating']?>' data-delay='3' data-increment="1"><?php echo $data_logo[0]['rating']?></div>
				<i class="<?php echo $data_logo[0]['rating_icon']?>" aria-hidden="true"></i>
				<h4>Ratings</h4>
			</div>
		</div>
	</div>
</section>
<!-- /statistics section -->
<!-- contact section -->
<section class="contact" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 contact-wthree1">
			<h3 class="head1">Contact Info</h3>
			<div class="contact-w3ls">
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Visit Us</h4>
							<p><?php echo $data_contact_details[0]['address'];?></p>
						</div>	
					</div>	
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Mail Us</h4>
							<p><a href="mailto:email@example.com"><?php echo $data_contact_details[0]['email_id'];?></a></p>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-mobile" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Call Us</h4>
							<p><?php echo $data_contact_details[0]['phone'];?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 contact-agile1">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
					</div>
					<div class="col-xs-8 contact-agile2">
						<div class="address">
							<h4>Our Working Hours</h4>
							<p><?php echo $data_contact_details[0]['day_from'];?> - <?php echo $data_contact_details[0]['day_to'];?> : <?php echo $data_contact_details[0]['time_from'];?> - <?php echo $data_contact_details[0]['time_to'];?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 contact-wthree2">
			<h3 class="head2">Your Comments</h3>
			<form action="#" method="post">
				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control first-name" name="first_name" placeholder="First Name" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="text" class="form-control last-name" name="last_name" placeholder="Last Name" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="email" class="form-control mail" name="email" placeholder="Your Email" required/>
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 slideanim">
						<input type="tel" class="form-control pno" name="phone" placeholder="Your Phone Number" required/>
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12 slideanim">
						<textarea class="form-control" rows="6" name="message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-group col-lg-12 slideanim">
						<button type="submit" name="submit_enquery" class="btn btn-lg btn-outline">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /testimonial section -->
<!-- statistics section -->

<!-- /contact section -->
<!-- map section -->
<div class="map">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
</div>
<!-- /map section -->
<!-- footer section -->
<div class="footer">
	<div class="container">
		<div class="col-lg-6 col-md-6 footer-w3ls1">
			<p>&copy; 2016 Safari. All rights reserved | Design by <a href="http://www.divinotech.in/" target="_blank">Divinotech pvt Ltd </a></p>
		</div>
		<div class="col-lg-6 col-md-6 footer-w3ls2">
			<ul class="bottom-links">
				<li><a target="_blank" href="<?php echo $data_contact_details[0]['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
				<li><a target="_blank" href="<?php echo $data_contact_details[0]['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
				<li><a target="_blank" href="<?php echo $data_contact_details[0]['linked_in'];?>"><i class="fa fa-rss"></i></a></li>
				<li><a target="_blank" href="<?php echo $data_contact_details[0]['pinterest'];?>"><i class="fa fa-vk"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/main.js"></script> 
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- js for statistics -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- /js for statistics -->
<!-- js for portfolio -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio -->
<!-- js for search button -->
<script src="js/index.js"></script>
<!-- /js for search button -->
<!-- js for banner -->
<script src="js/zslider-1.0.1.js"></script>
<script type="text/javascript">
		var slider = $('.slider').zslider({
			imagePanels: $('.slider-panel'),
			ctrlItems: $('.slider-item'),
			ctrlItemHoverCls: 'slider-item-selected',
			//panelHoverShowFlipBtn: false,
			flipBtn: {
				container: $('.slider-page'),
				preBtn: $('.slider-pre'), 
				nextBtn: $('.slider-next')
			},
			callbacks: {
				animate: function(imagePanels, ctrlItems, fromIndex, toIndex) {
					return true;
				}
			}
		});
	</script>
<!-- /js for banner -->
<!-- /js files -->
</body>

<!-- Mirrored from p.w3layouts.com/demos/july-2016/22-07-2016/safari/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2017 09:30:58 GMT -->
</html>