<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/megamenu.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <title>Document</title>
    <style>
        .head{
            height:40px;
            border-bottom:2px solid #e6e5e3;
        }
        .search{
            border-radius:5px;border:1px solid gray;
            height:30px; 
        }
        .icon{
            font-size:23px;
            color:skyblue;
            margin:1.2%;
        }
        ul.dropdown-menu.custom-menu.show {
            display: none;
        }
        ul.dropdown-menu.custom-menu.show .dropdown-item {
            display: none;
        }
        .collapse{font-size:14px; font-weight: 600;;}
        
        li.nav-item.dropdown ul.dropdown-menu.custom-menu {
            display: none;
            border-radius: 0;
            background-color: rgba(26, 28, 40, 0.9);
            font-size: 14px;
            left:-215px;
            padding: 0px 20px;
        }

        li.nav-item.dropdown:hover ul.dropdown-menu.custom-menu{
            display: block;
        }  
     
        .custom-menu .dropdown-item{            
            color:#eeeeee;
            padding: 15px 0;
            border-top: 1px solid #404455;
            border-left: 3px solid transparent;
        }

        .custom-menu .dropdown-item:hover{
            color:#45aed6;
            margin-left: -20px;
            padding-left: 20px;
            border-left: 3px solid #45aed6;
            background: transparent; 
        }
        .dropdown-menu.custom-menu-lelt{
            display: none;
            border-radius: 0;
            background-color: rgba(26, 28, 40, 0.9);
            font-size: 14px;
            width:300px;
            padding: 0px 20px; 
        }

        .dropdown.dropdown-left:hover .dropdown-menu.custom-menu-lelt{
            display: block;
            position: absolute;
            left:280px;
            top:0px;        
        }

        li.dropdown-list-left {
            padding: 15px 0px;
            border-bottom: 1px solid #404455;
            border-left: 3px solid transparent;

        }

        li.dropdown-list-left .dropdown-left-menu{
            text-decoration: none;
            color:#eeeeee;
        }

        li.dropdown-list-left .dropdown-left-menu:hover{
            color:#45aed6;
        }

        li.dropdown-list-left:hover{            
            margin-left: -20px;
            padding-left: 20px;
            border-left: 3px solid #45aed6;
            background: transparent;
        }
        .logo{
            height:60px;width:140px;
        }
    </style>
</head>
<body> 
                                
    <header>
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 head">
                    <div class="row">
                    <div class="col-sm-4 text-center pt-2">
                <span><a href="tel: +91 7839336690" style="color:skyblue; text-decoration:none;">
                <i class="fa fa-mobile-alt fs-4 text-danger"></i> +91 7839336690</a></span>
            </div>
            <div class="col-sm-4 text-center pt-2">
                <a href="mailto:someone@example.com" style="color:skyblue;text-decoration:none;"><i class="fa fa-envelope email-icon fs-4"></i> <span class="before-text">info.cradlefeed@gmail.com</span></a>
            </div>
                <div class="col-lg-4 text-center">
                    <span class="fa fa-facebook icon" title="7839336690"></span>
                    <span class="fa fa-twitter icon"></span>
                    <span class="fa fa-linkedin icon"></span>
                    <span class="fa fa-youtube icon"></span>
                    <span class="fa fa-instagram icon" title="Neha@#"></span>
                </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="border-bottom:2px solid #d9d9d9">
                    <nav class="navbar navbar-expand-lg navbar-light" style="min-height:100px;">
                        <div class="container-fluid ps-5">
                        <img src="images/logo1.png" class="logo" alt="">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>                        
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"  role="button"
                                             aria-expanded="false">
                                            About Us
                                        </a>
                                        <ul class="dropdown-menu custom-menu" >
                                            <li><a class="dropdown-item" href="#">Information about the School</a></li>
                                            <li><a class="dropdown-item" href="#">Philosophy</a></li>
                                            <li class=" dropdown dropdown-left active"><a class="dropdown-item dropdown-toggle" style="position:relative;" href="#">CMS Education</a>
                                                <ul class="dropdown-menu custom-menu-lelt" >
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu"  href="#">Divine Education</a></li>
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu" href="#">Human Education</a></li>
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu" href="#">Material Education</a></li>
                                                </ul>   
                                            </li>
                                            <li><a class="dropdown-item" href="#">CMS Administration</a></li>
                                            <li><a class="dropdown-item" href="#">Campuses</a></li>
                                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                                            <li><a class="dropdown-item" href="#">Achievements</a></li>
                                            <li><a class="dropdown-item" href="#">Cambridge Professional Development Centre</a></li>
                                            <li><a class="dropdown-item" href="#">Education Impact</a></li>
                                            <li><a class="dropdown-item" href="#">School Safety</a></li>                                
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Faculty</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                                            aria-expanded="false">
                                            School Founder
                                        </a>
                                        <ul class="dropdown-menu custom-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Dr Jagdish Gandhi</a></li>
                                            <li><a class="dropdown-item" href="#">Dr Bharti Gandhi</a></li>
                                            <li><a class="dropdown-item" href="#">Assets of Dr Jagdish Gandhi & Dr Bharti Gandhi</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Admin/image_gallery">Image Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Vedio Gallery</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"  role="button"
                                             aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul class="dropdown-menu custom-menu" >
                                            <li><a class="dropdown-item" href="#">Information about the School</a></li>
                                            <li><a class="dropdown-item" href="#">Philosophy</a></li>
                                            <li class=" dropdown dropdown-left active"><a class="dropdown-item dropdown-toggle" style="position:relative;" href="#">CMS Education</a>
                                                <ul class="dropdown-menu custom-menu-lelt" >
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu"  href="#">Divine Education</a></li>
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu" href="#">Human Education</a></li>
                                                    <li class="dropdown-list-left"><a class="dropdown-left-menu" href="#">Material Education</a></li>
                                                </ul>   
                                            </li>
                                            <li><a class="dropdown-item" href="#">CMS Administration</a></li>
                                            <li><a class="dropdown-item" href="#">Campuses</a></li>
                                            <li><a class="dropdown-item" href="#">Alumni</a></li>
                                            <li><a class="dropdown-item" href="#">Achievements</a></li>
                                            <li><a class="dropdown-item" href="#">Cambridge Professional Development Centre</a></li>
                                            <li><a class="dropdown-item" href="#">Education Impact</a></li>
                                            <li><a class="dropdown-item" href="#">School Safety</a></li>                                
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Registration">Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- <div class="col-lg-1"></div> -->
                </div>
               </div>
            </div>
        </div>
            </header>
