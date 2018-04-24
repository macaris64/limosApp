<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <title>Document</title>
    <title>Hello, world!</title>
</head>
<body background="images/welcome.jpg" ">
<div class="myHeader" style="margin-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="images/limos.png" class="img-responsive center-block">
            </div>
            <div class="col-12">
                <p class="text-center" style="color:whitesmoke;">yeni nesil sipariş</p>
            </div>
        </div>
        <div class="row text-center" style="color:orange;">
            <?php

                if ($_GET['durum']=="no") {

                    echo "Kullanıcı Bulunamadı...";

                } elseif ($_GET['durum']=="exit") {

                    echo "Başarıyla Çıkış Yaptınız.";

                }
            ?>
        </div>
    </div>
</div>
<div class="container" >
    <div class="row">
        <div class="col-xs-6 col-md-6 col-lg-push-3 col-md-push-3 col-sm-push-3" >
            <a href="#" data-toggle="modal" data-target="#kullaniciModal"><img src="images/kullanici.png" class="img-responsive" style="border: 4px solid black; background-color: #3c9de8;"></a>

        </div>
        <div class="col-xs-6 " >
            <a href="#" data-toggle="modal" data-target="#garsonModal"><img src="images/garson.png" class="img-responsive" style="border: 4px solid black;  background-color: #f44336;"></a>
        </div>
    </div>
    <div class="row ">
        <div class="col-xs-6 col-md-6 col-lg-push-3 col-md-push-3 col-sm-push-3">
            <a href="#" data-toggle="modal" data-target="#kasaModal"><img src="images/kasa.png" class="img-responsive" style="border: 4px solid black;   background-color: #4dff03;"></a>
        </div>
        <div class="col-xs-6 ">
            <a href="#" data-toggle="modal" data-target="#mutfakModal"><img src="images/mutfak.png" class="img-responsive" style="border: 4px solid black; background-color: #ec971f;"></a>
        </div>
    </div>
    <div class="row ">
        <div class="col-xs-6 col-md-6 col-lg-push-3 col-md-push-3 col-sm-push-3">
            <a href="#" data-toggle="modal" data-target="#valeModal"><img src="images/vale.png" class="img-responsive" style="border: 4px solid black; background-color: #f3cd03;"></a>
        </div>
        <div class="col-xs-6 ">
            <a href="#" data-toggle="modal" data-target="#infoModal"><img src="images/info.png" class="img-responsive" style="border: 4px solid black; background-color: #a6e1ec;"></a>
        </div>

    </div>
</div>

<!-- KULLANICI -->
<div class="modal fade" id="kullaniciModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Kullanıcı</h3>

            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home1" >Giriş Yap</a></li>
                    <li><a data-toggle="tab" href="#login1">Kayıt Ol</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home1" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <form method="post" action="islem.php" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="kullaniciGiris" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="login1" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Your Name *:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Retype Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="kullaniciUyeOl" value="Üye Ol" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- GARSON -->
<div class="modal fade" id="garsonModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Garson</h3>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home2">Giriş Yap</a></li>
                    <li><a data-toggle="tab" href="#login2">Kayıt Ol</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home2" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Login Now" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="login2" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Your Name *:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Retype Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Signup Now" value="Signup Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- KASA -->
<div class="modal fade" id="kasaModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Kasa</h3>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home3">Giriş Yap</a></li>
                    <li><a data-toggle="tab" href="#login3">Kayıt Ol</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home3" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Login Now" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="login3" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Your Name *:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Retype Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Signup Now" value="Signup Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- MUTFAK -->
<div class="modal fade" id="mutfakModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Mutfak</h3>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home4">Giriş Yap</a></li>
                    <li><a data-toggle="tab" href="#login4">Kayıt Ol</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home4" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Login Now" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="login4" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Your Name *:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Retype Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Signup Now" value="Signup Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- VALE -->
<div class="modal fade" id="valeModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Vale</h3>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home5">Giriş Yap</a></li>
                    <li><a data-toggle="tab" href="#login5">Kayıt Ol</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home5" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Login Now" value="Login Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="login5" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <div class="row">
                            <form  method="post" action="" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Your Name *:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Please Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email address *:</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" placeholder="Please Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" placeholder="Please Enter Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Retype Password *:</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="repassword" value="" placeholder="Please Enter Retype Your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" name="Signup Now" value="Signup Now" class="btn btn-info"> <input type="reset" name="Reset" value="Reset" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<!-- INFO -->
<div class="modal fade" id="infoModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-primary">LIMOS - Info</h3>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                    <li class="active"><a data-toggle="tab" href="#home6">Bilgi</a></li>
                    <li><a data-toggle="tab" href="#login6">Emeği Geçenler</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home6" class="tab-pane fade in active">
                        <!-- Signup Form Code Here -->
                        <div class="row">
                            <div class="col-xs-12">
                                <p>LIMOS Restaurant Otomasyonu , müşterilerin anlık olarak mobil ortamdan sipariş verebilmeleri ve
                                interaktif bir ortam yaratma amacıyla tasarlanmıştır.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="login6" class="tab-pane fade">
                        <!-- Login Form Code Here -->
                        <ul class="nav nav-tabs" style="margin-bottom: 10px;">
                            <li class="active"><a data-toggle="tab" href="#home7">Nur Ece Sarıkahya</a></li>
                            <li><a data-toggle="tab" href="#home8">Yeşim Daştan</a></li>
                            <li><a data-toggle="tab" href="#home9">Ayşenur Yanıkr</a></li>
                            <li><a data-toggle="tab" href="#home10">Mehmet ACAR</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home7" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Nur Ece Sarıkahya</p>
                                    </div>
                                </div>
                            </div>
                            <div id="home8" class="tab-pane fade ">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Yeşim Daştan</p>
                                    </div>
                                </div>
                            </div>
                            <div id="home9" class="tab-pane fade ">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Ayşenur Yanık</p>
                                    </div>
                                </div>
                            </div>
                            <div id="home10" class="tab-pane fade ">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a href="https://www.linkedin.com/feed/mehmetacar" target="_blank"><p>Mehmet Acar</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<footer class="footer" style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;" >
    <div class="container"">
        <div class="row">
            <div class="col-xs-12">
                <p class="text-center text-muted" style="color:whitesmoke;">&copy;2018 LIMOS Inc</p>
            </div>
        </div>
    </div>

</footer>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></body>
</html>