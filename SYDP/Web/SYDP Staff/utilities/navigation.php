		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" style="background-color:rgb(16,53,100);">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<center><div></div>
							<div class="image">
								<img src="../../../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Arvin Jhon I. Vertudez
								<small><?php $acc_name = $_SESSION['Logged_In']; echo $acc_name?></small>
							</div>
							</center>
						</a>
					</li>

				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>

					<li><a href="index.php"><i class="fa fa-th-large"></i> <span>Dashboard</span></a></li>
			
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-users"></i>
						    <span>Application</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="t_scholarapplication.php">Application for Scholar</a></li>
						    <li><a href="v_listofapplicantpending.php">Step 1 Applicant Pending</a></li>
						    <li><a href="v_listofapplicantstep2req.php">Step 2 Requirement</a></li>
						    <li><a href="v_listofapplicantstep3interview.php">Step 3 Final Interview</a></li>
						    <li><a href="v_listofapplicantstep3passed.php">Step 3 Passed</a></li>
						    <li><a href="v_listofapplicantapproved.php">List of Approved Application</a></li>

						  		
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-users"></i>
						    <span>List of Scholar</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="v_listofscholar.php">Scholar</a></li>
						    <li><a href="#">Scholar not Continued</a></li>
						    <li><a href="#">Graduate</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-users"></i>
						    <span>Stipen</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="v_stipenpending.php">List of Scholar pending stipen</a></li>
						    <li><a href="v_stipenforrelease.php">Releasing Stipen</a></li>
						  	<li><a href="v_stipenclaimed.php">Claimed Stipen</a></li>
						  	<li><a href="#">Unclaimed Stipen</a></li>		
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-users"></i>
						    <span>Renewal</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="v_renewalpending.php">Renewal Pending</a></li>
						  	<li><a href="#">Approved</a></li>	
						</ul>
					</li>

				
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->