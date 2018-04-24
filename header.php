<?php
ob_start();
session_start();
include 'connect.php';
$kullanicisor=$conn->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
    'mail' => $_SESSION['kullanici_mail']
));

$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

    Header("Location:welcome.php?durum=izinsiz");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>limos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items :4,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [480,2],
                navigation : true

            });
        });
    </script>
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function(i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });
    </script>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/bootstrap.js"></script>
</head>
<body style="background-color: #f1f1f1;">

<script>
    $('#myModal88').modal('show');
</script>
<!-- header -->
<div class="header" style="background-color: #ffffff;">
    <div class="w3ls-header""><!--header-one-->
        <div class="w3ls-header-left">
            <p style="color: orange;">Hoşgeldiniz : <?php echo $kullanicicek['kullanici_isim']; echo ' ';  echo $kullanicicek['kullanici_soyisim'];?></p>
        </div>
    </div>
    <div class="header-two"><!-- header-two -->
        <div class="container">
            <div class="header-logo">
                <h1><a href="index.php"><span>limos</span> <i></i></a></h1>
                <h6>bol bol yiyin</h6>
            </div>
            <div class="header-search">
                <form action="#" method="post">
                    <input type="search" name="Search" placeholder="Ürün ara..." required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
            </div>
            <div class="header-cart">
                <div class="my-account">
                    <a href="garsonCagir.php"><button class="btn btn-success btn-xs"><i class="fa fa-phone" aria-hidden="true"></i>garsoon?</button></a>
                    <br>
                </div>
                <div class="cart">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div><!-- //header-two -->
    <div class="header-three"><!-- header-three -->
        <div class="container">
            <div class="menu">
                <div class="cd-dropdown-wrapper">
                    <a class="cd-dropdown-trigger" href="#0">LIMOS</a>
                    <nav class="cd-dropdown">
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <div class="container col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <img src="images/adam.jpg" class="img-responsive img-circle center-block" width="100px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center" style="margin-bottom: 10px;">
                                        <h4>Mehmet ACAR</h4>
                                        <h6>Masa 2</h6>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-xs-12">
                                        <div class="col-xs-4" style="margin-bottom: 10px;">
                                            <div class="col-xs-2">
                                                <img src="images/kral.png">
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>KRAL ADAYI</h4>
                                            </div>

                                        </div>
                                        <div class="col-xs-4" style="margin-bottom: 10px;">
                                            <div class="col-xs-2">
                                                <img src="images/l.png">
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>1500 Limos Puanı</h4>
                                            </div>

                                        </div>
                                        <div class="col-xs-4" style="margin-bottom: 10px;">
                                            <div class="col-xs-2">
                                                <img src="images/coin.png" alt="">
                                            </div>
                                            <div class="col-xs-8">
                                                <h4>1000 Limos Coin</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" >
                                    <div class="col-xs-12">
                                        <li><a href="profil.php" style="color:#f3cd03;">Profilim</a> </li>
                                        <li><a href="garsonCagir.php" style="color:#3c9de8;">garsoon??</a> </li>
                                        <li><a href="valeCagir.php" style="color:#42d406;">valee??</a> </li>
                                        <li><a href="offers.html">Sıcak Fırsatlar</a></li>
                                        <li><a href="kategoriDetay.php">Çorbalarr</a></li>
                                        <li><a href="kategoriDetay.php">Aperatifler</a></li>
                                        <li><a href="kategoriDetay.phpl">Ana Yemekler</a></li>
                                        <li><a href="kategoriDetay.php">Yan Yemekler</a></li>
                                        <li><a href="kategoriDetay.php">Tatlılar</a></li>
                                        <li><a href="kategoriDetay.php">İçecekler</a></li>
                                        <li><a href="logout.php">Çıkış</a></li>

                                    </div>
                                </div>
                            </div>




                        </ul> <!-- .cd-dropdown-content -->
                    </nav> <!-- .cd-dropdown -->
                </div> <!-- .cd-dropdown-wrapper -->
            </div>
            <div class="move-text">
                <div class="marquee"><a href="#">
                        Tavuk İskender 10 TL
                        <span>Et Sote 15 TL </span>
                        <span>Helva 8 TL</span>
                    </a>
                </div>
                <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
                <script>
                    $('.marquee').marquee({ pauseOnHover: true });
                    //@ sourceURL=pen.js
                </script>
            </div>
        </div>
    </div>
</div>
<!-- //header -->
