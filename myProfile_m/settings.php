
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
if(!isset($_SESSION['email'])){header("location: ../index.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mediconnect is an HealthCare social networking website .</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
									<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Home</span>
																			<ul class="dropdown">
																				<li><a href="profile.php" class="deutsch">Profile</a></li>
																				<li><a href="editor.php" class="english">Ask Q</a></li>
																				<li><a href="index.php" class="espana">Home   </a></li>
																				<li><a class="russian">Logout</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				if(obj.val==="Logout"){alert(obj.val);
																																						
																 			}
																			 // if(obj.val==="Logout"){
																				// <?php
																 			// 	session_start();
																	 		// 		session_destroy();
																				// 	header("location :../index.php");
																 			// 	?>
																					
																				// }
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});
																	// $(".russian").click(function(){
																	// 		<?php
																	// 				session_start();
																	// 				session_destroy();
																	// 				header("location :../index.php");
																	// 				?>
																					
																	// });

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Describe your medical issue. </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>You can ask a doctor for free,</p>
															<p><span>2 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Get personalized advice from  </p>
															<p><span>2 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Booked</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Request send</p>
											<p><span>3 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Scheduled</p>
											<p><span>4 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Posts</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Appointments</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Comments</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Profile</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
						<div class="clearfix"></div>
					</div>
						<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Basic Info</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
														<h2 class="inner-tittle">Basic Info</h2>
															<div class="graph-form">
																	<div class="validation-form">
																				<!---->
																					
																					<form>
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Firstname</label>
																						  <input type="text" placeholder="Firstname" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Lastname</label>
																						  <input type="text" placeholder="Lastname" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Email</label>
																						  <input type="text" placeholder="Email" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Url</label>
																						  <input type="text" placeholder="Current Website Url" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						  <div class="col-md-12 form-group2 group-mail">
																						  <label class="control-label">Language</label>
																						<select>
																							<option value="">English</option>
																							<option value="">Japanese</option>
																							<option value="">Russian</option>
																							<option value="">Arabic</option>
																							<option value="">Spanish</option>
																						</select>
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 ">
																						  <label class="control-label">Your Comment</label>
																						  <textarea placeholder="Your Comment..." required="">Your Comment.....</textarea>
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Phone Number</label>
																						  <input type="text" placeholder="Phone Number" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Mobile Number</label>
																						  <input type="text" placeholder="Mobile Number" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						 <div class="vali-form vali-form1">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Create a password</label>
																						  <input type="password" placeholder="Create a password" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Repeated password</label>
																						  <input type="password" placeholder="Repeated password" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						 <div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Number</label>
																						  <input type="text" placeholder="Number" required="">
																						   <p class=" hint-block check">Numeric values from 0-***</p>
																						</div>
																						 <div class="clearfix"> </div>
																					   
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label ">Date</label>
																						  <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group">
																						  <div class="checkbox1">
																							<label class="check">
																							  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
																							  Are you a winner?
																							</label>
																						  </div>
																						</div>
																						 <div class="clearfix"> </div>
																						  <div class="col-md-12 form-group2 group-mail">
																						  <label class="control-label">Select</label>
																						<select>
																							<option value="">Contrary</option>
																							<option value="">Contrary1</option>
																							<option value="">Contrary2</option>
																							<option value="">Contrary3</option>
																							<option value="">Contrary4</option>
																						</select>
																						</div>
																						 <div class="clearfix"> </div>
																					  
																						<div class="col-md-12 form-group button-2">
																						  <button type="submit" class="btn btn-primary">Submit</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																					  <div class="clearfix"> </div>
																					</form>
																				
																				<!---->
																			 </div>

																		</div>
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										   <p>&copy 2018 MediConnect . All Rights Reserved | Design by <a >MediConnect.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>MConnect</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.php"><img src="images/my_pic.jpg"></a>
									  <a href="index.php"><span class=" name-caret"><?php 
echo $_SESSION['email'] ; ?></span></a>
									 <p> Computer Engineer</p>
									<ul>
									<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										<!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Ask Doctors</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Articles</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Records</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Insurance</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Questions</span></a></li> -->
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Details</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.php"> Categories</a></li>
											<li id="menu-academico-avaliacoes" ><a href="calender.php">Calendar</a></li>
										  </ul>
										</li>
		<li><a href="editor.php"><i class="lnr lnr-pencil"></i> <span>Ask Question</span></a></li>
 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Account</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="profile.php">View Profile</a></li>
											<li id="menu-academico-avaliacoes" ><a href="validation.html">Edit Profile</a></li>
										  </ul>
										</li>
					<li><a href="appointment.html"><i class="lnr lnr-pencil"></i> <span>Appointment</span></a></li>
							<li><a href="appointment.html"><i class="fa fa-smile-o"></i> <span>My Posts</span></a></li>
									<li><a href="chart.html"><i class="lnr lnr-chart-bars"></i> <span>Network</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="map.php"><i class="lnr lnr-map"></i>World Maps</a></li>
										<li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
 <script src="js/bootstrap.min.js"></script>
</body>
</html>