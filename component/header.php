<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>eMarket</title>
</head>

<body>
    <div id="header" style="background-color: #232F3E; color:#fff;">
        <!-- header-top-start -->
        <div class="header-top pt-2 pb-3" style="border-bottom: 1px solid #394452">
            <div class=" container-fluid px-5">
                <div class="row " style="font-size: small;">
                    <div class=" col-9">
                        <div class="hidden-sm hidden-xs welcome-msg">
                            <b>Welcome to Emarket !</b> Wrap new offers / gift every single day on Weekends – New Coupon code: Happy2017

                        </div>
                    </div>
                    <div id="lang" class=" col-3 d-flex justify-content-end">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                $ US Doller
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                
                                <li><a class="dropdown-item" href="#">Euro</a></li>
                                <li><a class="dropdown-item" href="#">pound</a></li>
                                <li><a class="dropdown-item" href="#">us doller</a></li>
                            </ul>
                        </div>

                        <div class="mx-3">|</div>

                        <div class="dropdown">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                ENGLISH
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">ENGLISH</a></li>
                                <li><a class="dropdown-item" href="#">Hindi</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-start -->
        <div id="header-middle" class="container-fluid header-middle my-3 mx-0 px-0 ">
            <nav class=" navbar navbar-expand-lg navbar-dark">

                <div class="row justify-content-center mx-4 py-0" style="width: 100%; " >
                    <div class="col-lg-2 ml-4"><a class="navbar-brand" href="#"><img src="../img/logo.jpg" alt=""></a></div>
                    <div class="col-lg-10">
                    <div class="row justify-content-space-between" style="font-size:14px;">
                        <div class="col-lg-7">
                        
                        <div id="middle-header-left" class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight:600;" >

                                <li class="nav-item" >
                                    <a class="nav-link " href="../index.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">PAGES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">SHOP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">COLLECIONS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">MARKETPLACE</a>
                                </li>
                            </ul>

                        </div>
                        </div>

                        <div id="middle-header-right" class="col-lg-5 " style="display:flex; justify-content:end;">

                        <div class="row justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse ">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
    
                                    <a class="nav-link " aria-current="page" href="../register.php"><i class="fa fa-lock" aria-hidden="true"></i> login & Register</a>
                                </li>
                                <li class="nav-link">|</li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#"><i class="fa fa-phone" aria-hidden="true"></i> Hotline (+123)4 567 890</a>
                                </li>

                            </ul>

                        </div>
                        </div>


                    </div>
                    </div>
                    </div>
                    
                </div>







            </nav>
        </div>
        <!-- header-bottom-start -->
        <div class="header-bottom ">
            <div class="container-fluid pb-4">
                <div class="navbar navbar-expand-lg navbar-dark">
                <div class="row" style="width:100%;">
                    <div class="col-md-3 col-sm-3 " id="navbar">
                    

                        <button  id="bottom-left-btn" class=" btn btn-secondary d-flex align-items-center justify-content-center" style="background-color: #FF3C20;  border-bottom-right-radius: 0; width:78%; height:40px; font-size:14px; " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            

                                <span><i class="fa fa-bars fa-lg" aria-hidden="true"></i></span>

                                <span class="mx-4" style="font-weight: bold; font-size:17px;">ALL CATEGORIES </span>
                                <span class="mb-1"><i class="fa fa-angle-down " aria-hidden="true"></i></span>
                            


                        </button>
                     

                    </div>

                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="search-header-w">
                                <div class="sosearchpro-wrapper so-search">
                                    <form action="" method="get">
                                        <div class="search input-group form-group">
                                            <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                <select selected="" class="btn btn-light" id="exampleFormControlSelect1" style=" font-size:12px; font-weight:400; width: 180px; height: 40px; border-top-right-radius: 0;border-bottom-right-radius: 0;">
                                                    <option>ALL CATEGORIES</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search" style="height: 40px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="button-search btn btn-default btn-lg d-flex align-items-center justify-content-center" style="height: 40px;width: 100px; background: #FF3C20; border-top-left-radius: 0;border-bottom-left-radius: 0;;color:#fff;">
                                                    <i class="fa fa-search fa-md"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="bottom-header-right" class="col-md-3 ">
                        <ul class=" mb-0" style="list-style: none; ">
                            <li><a href=""> <i class="fa fa-refresh fa-2x" aria-hidden="true"></i></a></li>

                            <li><a href=""> <i class="fa fa-heart fa-2x" aria-hidden="true"></i></a></li>
                            <div class="d-flex align-items-center" >
                            <span id="cart" class="rounded-circle">
                            <i  class="fa fa-shopping-bag  fa-lg"></i>
                            </span>
                            <li  class=" fw-bolder">MY CART <span style="color:#FF3C20;">-$0.00</span><a href="" > </a></li>
                            </div>
                           


                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- header-bottom-end -->
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>