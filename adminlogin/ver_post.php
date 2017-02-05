<!DOCTYPE html>
<html>
<?php
    require_once('../auth.php');

?>
<!-- Mirrored from coderthemes.com/flacto_1.3/light_red_2_light/ui-images.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2016 00:44:38 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

		<title>Flacto - Responsive Admin Dashboard Template</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-77043005-1', 'auto');
        ga('send', 'pageview');

    </script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index-2.html" class="logo">
                            <i class="zmdi zmdi-toys icon-c-logo"></i><span>Flac<span>to</span></span>
                            <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline m-b-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="zmdi zmdi-notifications-none"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="dropdown user-box">
                                   

                                     <?php include('includes/menulogout.php'); ?>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <!-- Inicio menu lateral -->
            <?php include('includes/menulateral.php') ?>
            <!-- Fin menu lateral -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-5 m-b-20">
                                    <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <h4 class="page-title">Articulos Publicados</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <br>
                                            

                                            <div class="row">
                                            <?php
                        
if(isset($_GET['created'])){
    echo "<div class='alert alert-success'>
  <strong>Post añadido con exito</strong> al blog.
</div>";
}
require_once('../conexion.php');
                        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
                        if(!$link) {
                            die('Failed to connect to server: ' . mysql_error());       
                            }
                        
                        //Select database
                        $db = mysqli_select_db($link,DB_DATABASE);
                        if(!$db) {
                            die("Unable to select database");
                        }
                        
                        $query = "SELECT * FROM post ORDER BY id_post DESC";
                        $resultado = $link->query($query);
                        while($row = $resultado->fetch_assoc()){
                        $id = $row['id_post'];
                        $query2 = mysqli_query($link, "SELECT * FROM comentarios_post WHERE post_id = '$id'");
                        ?>
                                                <div class="col-md-4">
                                                    <div class="thumbnail">
                                                        <?php echo "<td><img src='../blog/imagenes/".$row["imagen_post"]."'  height='500' width='200'><br></td>"?>
                                                        <div class="caption">
                                                            <h3><?php echo $row["titulo_post"]; ?></h3>
                                                            
                                                            <p>
                                                                <a href="#"
                                                                   class="btn btn-primary waves-effect waves-light"
                                                                   role="button">Editar</a>
                                                                <a href="#"
                                                                   class="btn btn-danger"
                                                                   role="button">Eliminar</a>
                                                                
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                        }
?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

 <!-- end row -->


                        <!-- ===== MEDIA ==== -->

                         <!-- end row -->

                        <!-- Media alignment -->

                         <!-- end row -->

                        




                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include('includes/footer.php');?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

	</body>

<!-- Mirrored from coderthemes.com/flacto_1.3/light_red_2_light/ui-images.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2016 00:44:51 GMT -->
</html>