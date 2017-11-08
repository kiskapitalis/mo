	<!-- ////////// Right Sidebar ////////// -->
	<div id="right-sidebar">

	<!-- Nav tabs -->
	<ul id="sidebar-tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#chat" role="tab">chat</a>
		</li> <!-- /nav-item -->

		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#todo" role="tab">todo</a>
		</li> <!-- /nav-item -->
	</ul> <!-- /sidebar-tabs -->

	<!-- Tab panes -->
	<div class="tab-content">

	<div id="chat" class="tab-pane active" role="tabpanel">

		<div class="tab-header">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="button">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button> <!-- /btn -->
				</span> <!-- input-group-btn -->
			</div> <!-- /input-group -->
		</div> <!-- /tab-header -->
		
		<div class="chat-wrapper">
			<div class="chat-scroll">

				<div class="conversation">
				<h6 class="chat-title">Latest Conversation</h6>
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile1.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Andrew Doe</div> 
							<div class="status status-online"></div> 
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile2.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Anna Doe</div> 
							<div class="status status-busy"></div> 
							<p>Nunc sit amet ante lobortis</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile3.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Barbara Doe</div> 
							<div class="status status-away"></div> 
							<p>Donec suscipit lacus in sem interdum lacinia.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->  
				</div> <!-- /conversation -->
				
				<div class="contact">
				<h6 class="chat-title">Contacts</h6>
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile4.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Andrew Doe</div> 
							<div class="status status-offline"></div> 
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile5.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Anna Doe</div> 
							<div class="status status-offline"></div> 
							<p>Nunc sit amet ante lobortis</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile6.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Barbara Doe</div> 
							<div class="status status-offline"></div> 
							<p>Donec suscipit lacus in sem interdum lacinia.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->
				</div> <!-- /contact -->

			</div> <!-- /chat-scroll -->
		</div> <!-- /chat-wrapper -->

		<div class="tab-footer">
			<div class="wrapper">  
				<h6>Matthew Doe</h6>
				<div class="dropdown dropup">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="status status-online"></span>Online</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item"><span class="status status-away"></span>Away</a>
						<a href="#" class="dropdown-item"><span class="status status-busy"></span>Busy</a>
						<a href="#" class="dropdown-item"><span class="status status-offline"></span>Offline</a>
						<a href="#" class="dropdown-item"><span class="status status-online"></span>Online</a>
					</div> <!-- /dropdown-menu -->
				</div> <!-- /dropdown -->
			</div> <!-- /wrapper -->
		</div> <!-- /tab-footer -->
		
		<div class="chat-msg">

			<div class="contact-detalis">
				<h6>Andrew Doe</h6>
				<button id="close_chat" class="btn"><i class="fa fa-times" aria-hidden="true"></i></button>
				<p>last active 2 Hours ago</p>
			</div> <!-- /contact-detalis -->
			
			<div class="msg-content">
			<div class="msg-wrapper">
				<div class="msg-scroll">   
					<ul class="list-unstyled">
						<li class="quest">
							<div class="msg">Lorem ipsum.</div>
						</li> <!-- /quest -->      
						<li class="self"> 
							<div class="msg"> Phasellus auctor volutpat ante, ac tincidunt lacus ullamcorper. </div>
						</li> <!-- /self -->               
						<li class="quest">
							<div class="msg"> Aliquam elementum non eget. </div> 
						</li> <!-- /quest -->    
						<li class="self"> 
							<div class="msg"> Cras condimentum. </div> 
						</li> <!-- /self -->                      
					</ul> <!-- /ul -->
				</div> <!-- /msg-scroll -->
			</div> <!-- /msg-wrapper -->
			</div> <!-- /msg-content -->

			<div class="tab-footer">
				<div class="wrapper">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Message">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</span> <!-- /input-group-btn -->
					</div> <!-- /input-group -->
				</div> <!-- /wrapper -->
			</div> <!-- /tab-footer -->  

		</div> <!-- /chat-msg -->

		</div> <!-- /tab-pane -->

		<div class="tab-pane" id="todo" role="tabpanel">

			<div class="tab-header">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Add new task">
					<span class="input-group-btn">
						<button class="btn btn-secondary" type="button">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</button> <!-- /btn -->
					</span> <!-- input-group-btn -->
				</div> <!-- /input-group -->
			</div> <!-- /tab-header -->

			<div class="todo-content">
				<div class="todo-wrapper">
					<div class="todo-scroll">

						<div class="todo-item">
							<h6>Today</h6>
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox01" class="check" type="checkbox"/>
									<label for="checkbox01">Upload images</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox02" class="check" type="checkbox"/>
									<label for="checkbox02">Change password for admin</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox03" class="check" type="checkbox"/>
									<label for="checkbox03">Update database</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->          
						</div> <!-- /todo-item -->                  

						<div class="todo-item">
							<h6>Done</h6>
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox04" class="check" type="checkbox"/>
									<label for="checkbox04">Send e-mail for Barbara</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                       
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox05" class="check" type="checkbox"/>
									<label for="checkbox05">Create new database</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox06" class="check" type="checkbox"/>
									<label for="checkbox06">Add new post</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->
						</div> <!-- /todo-item -->    

					</div> <!-- /todo-scroll -->
				</div> <!-- /todo-wrapper -->
			</div> <!-- /todo-content -->

		</div> <!-- /tab-pane -->

	</div> <!-- /tab-content -->

	</div> <!-- /right-sidebar -->