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
    </div>
</div>
<div class="container" >
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-push-12 col-md-push-12 col-sm-push-12" >
            <div class="row">
                <h3 style="color:white;" class="text-center">ŞİFRE SIFIRLA</h3>
                <form method="post" action="sifremiunuttum-onay.php" role="form" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3">Email address *:</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="" placeholder="E-mail giriniz" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <input type="submit" name="sifirla" value="Sıfırla" class="btn btn-success center-block btn-block">
                        </div>
                    </div>
                </form>
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
