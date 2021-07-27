<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Panel Management</title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/select2.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
  
    </head>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="index.php" class="logo">
                        <img src="images/logo.png" height="35" alt="" /> 
                    </a>
                    <div class="pull-right">
                        <a href="" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                    
                       
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile">
                            <img class="img-circle" src="<? echo $r["avatar"]; ?>" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><? echo $r["username"]; ?></h4>
                            <small class="text-muted"><? echo $r["phone"]; ?></small>
                        </div>
                    </div><!-- media -->
                    
                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
 <li class="parent"><a href=""><i class="fa fa-shield"></i> <span>Setting Admin</span></a>
                            <ul class="children">
				<li><a href="admin.php?op=77771">Setting Username Admin</a></li>
                                <li><a href="admin.php?op=77772">Setting Password Admin</a></li>
                                                
                                <li><a href="admin.php?op=77773">View Admin Log</a></li> 
                               
                            </ul>
                        </li>
                        
                        <li class="parent"><a href=""><i class="fa fa-gear"></i> <span>Setting Website</span></a>
                            <ul class="children">
				<li><a href="admin.php?op=2">Setting Web</a></li>
 <li><a href="admin.php?op=3">Setting <? echo $phname; ?></a></li>
                                
                                <li><a href="admin.php?op=4">Setting <? echo $ghname; ?></a></li>     
                                                
                                <li><a href="admin.php?op=4444">Setting <? echo $ghbname; ?></a></li> 
                                <li><a href="admin.php?op=9">Setting Profit</a></li>
                              
                                <li><a href="admin.php?op=11">Setting Content</a></li>
                                <li><a href="admin.php?op=100000">Upload Gallery</a></li>
                                <li><a href="admin.php?op=100001">My Gallery</a></li>
                      
                               
                            </ul>
                        </li>
<li class="parent"><a href=""><i class="fa fa-bank"></i> <span>Setting Payment</span></a>
                            <ul class="children">
				
<li><a href="admin.php?op=29">Setting Payment Processing</a></li>
                                <li><a href="admin.php?op=2929">Add payment Processing</a></li>
      
                               
                            </ul>
                        </li>
<li class="parent"><a href=""><i class="fa fa-heart"></i> <span><? echo $skgh; ?> GENERATOR</span></a>
                            <ul class="children">
				         
<li><a href="admin.php?op=49">Create GH Manual</a></li>
<li><a href="admin.php?op=202">History GH Manual</a></li>

                               
                            </ul>
                        </li>

  <? if($dpph=='1'){
echo "
	 <li class=\"parent\"><a href=\"\"><i class=\"fa fa-dollar\"></i> <span>Fee Admin Manager</span></a>
                            <ul class=\"children\">
							<li><a href=\"admin.php?op=41\">Fee Admin Pending</a></li>
                                <li><a href=\"admin.php?op=42\">Fee Admin Problem</a></li>
                                <li><a href=\"admin.php?op=43\">Fee Admin Success</a></li>
                               
                            </ul>
                        </li>
						
"; } else {} ?>
                        <li class="parent"><a href=""><i class="fa fa-bars"></i> <span>PH Transactions</span></a>
                            <ul class="children">
                                <li><a href="admin.php?op=13">PH Pending</a></li>
                                <li><a href="admin.php?op=14">PH Problem</a></li>
                                <li><a href="admin.php?op=15">PH Success</a></li>
                                <li><a href="admin.php?op=16">PH Not Yet Pairing</a></li>
                                 <li><a href="admin.php?op=166">PH Freeze / Pause</a></li>
                                <li><a href="admin.php?op=260">Cancelling PH </a></li>
                            </ul>
                        </li>
						
						 <li class="parent"><a href=""><i class="fa fa-money"></i> <span>GH Transactions</span></a>
                            <ul class="children">
                                <li><a href="admin.php?op=17">GH Pending</a></li>
                                <li><a href="admin.php?op=18">GH Problem</a></li>
                                <li><a href="admin.php?op=19">GH Success</a></li>
                                <li><a href="admin.php?op=20">GH Not Yet Pairing</a></li>
                                <li><a href="admin.php?op=220">GH Freeze / Pause</a></li>
                                <li><a href="admin.php?op=230">Cancelling GH </a></li>

                               
                            </ul>
                        </li>
<li><a href="admin.php?op=44"><i class="fa fa-key"></i> <span>RESOLVING PROBLEM</span></a></li>
  
 
						 <li class="parent"><a href=""><i class="fa fa-user"></i> <span>Member Management</span></a>
                            <ul class="children">
							
                                <li><a href="admin.php?op=21">Active Member</a></li>
                                <li><a href="admin.php?op=22">Suspend Member</a></li>
                                <li><a href="admin.php?op=23">Suspending Member</a></li>
                               

<li><a href="admin.php?op=25">Search Member</a></li>
                            </ul>
                        </li>

 <li class="parent"><a href=""><i class="fa fa-trophy"></i> <span>Manager Management</span></a>
                            <ul class="children">
							
                               
                               
                                <li><a href="admin.php?op=26">Upgrade Member to Manager</a></li>
                                <li><a href="admin.php?op=27">Data Member Manager</a></li>

                            </ul>
                        </li>
						
			 
						
								 <li class="parent"><a href=""><i class="fa fa-wechat"></i> <span>Testimonial Management</span></a>
                            <ul class="children">
							
                                <li><a href="admin.php?op=363636">Approve Testimonial</a></li>
                                <li><a href="admin.php?op=36363636">Active Testimonial</a></li>
                                
                               
                            </ul>
                        </li>
								 
						
								 <li class="parent"><a href=""><i class="fa fa-bullhorn"></i> <span>News Management</span></a>
                            <ul class="children">
							
                                <li><a href="admin.php?op=35">Create News</a></li>
                                <li><a href="admin.php?op=36">Edit News</a></li>
                                
                               
                            </ul>
                        </li>
						
							 <li class="parent"><a href=""><i class="fa fa-envelope"></i> <span>Messages Management</span></a>
                            <ul class="children">
				
                                <li><a href="admin.php?op=39">Messages From Member</a></li>
                               
                            </ul>
                        </li>
							 <li class="parent"><a href=""><i class="fa fa-envelope"></i> <span>EX Messages Management</span></a>
                            <ul class="children">
				
                                <li><a href="admin.php?op=399">Messages From EX Member</a></li>
                               
                            </ul>
                        </li>
					
						
						
						


						
						 <li><a href="logout"><i class="fa fa-refresh"></i> <span>Logout</span></a></li>
                       
						
                      
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Dashboard</li>
                                </ul>
                                <h4>Dashboard</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">

   

