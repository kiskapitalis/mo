<!-- ////////// Header ////////// -->
<div id="header" class="header-fixed">
	
	<div class="header-left">
		<button id="mobile-menu" class="mobile hamburger hamburger--squeeze is-active" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span> <!-- /hamburger-box -->
		</button> <!-- /hamburger -->
		<div id="brand">
			<a href="../index.html" class="brand-wrapper">
				<!--<img src="../img/logo.png" class="img-fluid" alt="">-->
				<span class="title">MARVEL ONLINE</span>
			</a> <!-- /brand-wrapper -->
		</div> <!-- /brand -->
		<button id="mobile-btn" type="button" class="btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
	</div> <!-- /header-left -->

	<div class="header-toggle">
	<div class="header-content header-hidden">   
	
	<div class="left">

		<button id="menu-btn" class="hamburger hamburger--squeeze is-active" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span> <!-- /hamburger-box -->
		</button> <!-- /hamburger -->

	</div> <!-- /left -->
	
	<div class="right">

		<div class="input-group">
			<input id="search" type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
			  <button id="search-btn" class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</span> <!-- /input-group-btn -->
		</div> <!-- /input-group -->

		<ul class="nav">
	
			<li class="nav-item hidden-sm-down"><button id="btn-slide" class="btn"><i class="fa fa-cog" aria-hidden="true"></i></button></li>

			<!-- alerts -->
			<li class="nav-item alerts dropdown">

			<a class="dropdown-toggle mobile-link" href="#" id="notification_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i id="icon-notification" class="fa fa-bell" aria-hidden="true"></i>
				<span class="status status-pulse hidden-sm-down"></span>
				<span class="hidden-md-up">Notifications</span>
			</a> <!-- /dropdown-toggle -->

			<div class="dropdown-menu">

			  <div class="dropdown-title">latest notifications
				<button type="button" id="btn-mute" class="btn"><i class="fa fa-bell-slash" aria-hidden="true"></i>
				</button></div>

			  <div class="notifications-scroll">

					<!--  item 1 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media">
								<img src="../img/notification/1.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Anna Moe</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 1 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 2 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p>You have new follow on twitter.</p>
								<div class="info"> 15 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 3 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<img src="../img/notification/2.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Dennis Willson</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 30 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 4 -->
					<div class="list-group-item">
						<a href="#" class="item success">
							<div class="item-media"> 
								<i class="fa fa-check" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Success:</strong> Your file is upload on server</p>
								<div class="info"> 45 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->              

					<!--  item 5 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<img src="../img/notification/3.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Matthew Bond</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 1 hour ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 6 -->
					<div class="list-group-item">
						<a href="#" class="item warning">
							<div class="item-media"> 
								<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Warning!</strong> DDos attack on servers.</p>
								<div class="info"> 1 hour 15 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->

				</div> <!-- /notifications-scroll -->

				<div class="dropdown-footer">
					<a href="#" class="all">see all</a>
				</div> <!-- /dropdown-footer -->

			</div> <!-- /dropdown-menu -->

			</li> <!-- /alerts -->              

			<!-- profile -->
			<li class="nav-item profile dropdown hidden-sm-down">
			<a class="dropdown-toggle" href="#" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img src="../img/profile/profile-header.jpg" class="img-fluid" alt="">
			</a> <!-- /dropdown-toggle -->
				<div class="dropdown-menu" aria-labelledby="profile_dropdown">
					<div class="profile-detalis ">
						<div class="profile-img">
							<img src="../img/profile/profile-drop.jpg" class="img-fluid" alt="">
						</div> <!-- /profile-img -->
						<a class="dropdown-item profile-name" href="#">Matthew Doe</a>
						<div class="profile-links">
							<a href="#" class="link">Edit Image </a>
							<a href="#" class="link">View Profile</a>   
						</div> <!-- /profile-links -->
					</div> <!-- /profile-detalis -->                      
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						Inbox
					</a> <!-- /dropdown-item -->                           
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-lock" aria-hidden="true"></i>
						Lockscreen
					</a> <!-- /dropdown-item -->     
					<div class="dropdown-divider"></div>            
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						Sign Out
					</a> <!-- /dropdown-item -->           
				</div> <!-- /dropdown-menu -->
			</li> <!-- /profile -->
			
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
			<li class="nav-item hidden-md-up"><a href="#" id="mobile-slide" class="mobile-link"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-envelope" aria-hidden="true"></i>Inbox</a></li>
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></li>

		</ul> <!-- /nav -->
	</div> <!-- /navbar-right -->

	</div> <!-- /header-content -->
	</div> <!-- /header-toggle -->

</div> <!-- /header -->