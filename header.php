<?php
require('database.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AV web solution</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="ss/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style11.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <!--  font awesomw icon -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   </head>
   <body>
      <!-- <aside id="left-panel" class="left-panel" >
         <nav class="navbar navbar-expand-sm navbar-default">
            
               <div id="main-menu" class="main-menu collapse navbar-collapse text-center">
                  <ul class="nav navbar-nav">
                     <li class="menu-title text-center" style="margin-top: 10px;">
                     	 <a href="hrm-dashboard.php" class="home-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
                     	 <a href="operationm.php" class="home-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
                     	 <a href="bill.php" class="home-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
						 <a href="report.php" class="home-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
						 <a href="po_status.php" class="home-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
						 s<a href="bill.php" class="hom1-icon" style="width: 20%;"><i class="fas fa-home"></i></a><hr>
                      </li>

                     <li class="menu-item-has-children dropdown">
                        <a href=""><i class="fa fa-calendar-times-o" aria-hidden="true"></i></a>
                     </li> 
                  
                     <li class="menu-item-has-children dropdown">
                        <a > <i class="fal fa-calendar-alt"></i></a>
                     </li> 

                     <li class="menu-item-has-children dropdown">
                        <a ><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                     </li>
                     <li class="menu-item-has-children dropdown">
                        <a ><i class="far fa-user"></i></a>
                     </li> 

                     <li class="menu-item-has-children dropdown">
                        <a ><i class="fa fa-bullhorn" aria-hidden="true"></i></a>
                     </li>
                     <li class="menu-item-has-children dropdown">
                        <a><i class="fas fa-hotel"></i></a>
                     </li> 
                 </ul>
               </div> 
         </nav>
      </aside> -->
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left" >
               <div class="navbar-header">
                  <span>Menu</span>
                  <a id="menuToggle" class="menutoggle toggle-icon"><i class="fa fa-bars"></i></a>
               </div>
            </div>

            <div class="top-right">
               <div class="header-menu row" style="background-color: #000; opacity: 0.8;">
                  
                     <div class="col-3">

                           <a class="navbar-brand" href=""><img src="images/logo3.jpg" alt="Logo" style="height: 47px; width: 70px;"></a>
                        
                     </div>
                     
                     <div class="col-9">
                        <div class="user-area dropdown float-right row">
                           <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user.png" height="36px" width="40px"> <b style="margin-left: 10px; color: #fff; width: 100%;">Welcome <?php echo $_SESSION['USER_NAME']?></b></a>
                           <div class="user-menu dropdown-menu">
                              <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                              <a class="nav-link" href="changepass.php"><i class="fa fa-lock"></i>Change password</a>
                           </div>
                        </div>
                     </div>    
               </div>
            </div>
         </header>
         
      <html>