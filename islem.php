<?php
    include 'connect.php';
    ob_start();
    session_start();
    
<?php
    include 'connect.php';
    ob_start();
    session_start();
    if(isset($_POST['kullaniciGiris']))
    {
        $email = $_POST['email'];
        $password =  $_POST['password'];

        $kullaniciSor=$conn->prepare("SELECT * FROM kullanici wHERE kullanici_mail=:mail AND kullanici_sifre=:sifre");
        $kullaniciSor->execute(array(
            'mail'=> $email,
            'sifre'=> $password

        ));
        $say=$kullaniciSor->rowCount();
        if($say==1) {
            $_SESSION['kullanici_mail']=$email;
            header("Location:index.php");
            exit;

        }
        else
        {
            header("Location:welcome.php?durum=no");
            exit;
        }
    }
    if(isset($_POST['kullaniciUyeOl']))
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $email=$_POST['email'];
        if ($password == $repassword)
        {
            $statement = $conn->prepare("INSERT INTO kullanici(name, password, email)
    VALUES(:fname, :pass, :email)");
            $statement->execute(array(
                "fname" => $name,
                "pass" => $password,
                "email" => $email
            ));
        }
        else
        {
            header("Location:welcome.php?durum=no");
        }


    }
if(isset($_POST['sifremiunuttum']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $email=$_POST['email'];
    if ($password == $repassword)
    {
        $statement = $conn->prepare("INSERT INTO kullanici(name, password, email)
    VALUES(:fname, :pass, :email)");
        $statement->execute(array(
            "fname" => $name,
            "pass" => $password,
            "email" => $email
        ));
    }
    else
    {
        header("Location:welcome.php?durum=no");
    }


}
/*if(isset($_POST['sifirla']))
{
    $email=$_POST['email'];
    header("Location:sifremiunuttum-onay.php");
    exit;

}*/

?>
    if(isset($_POST['kullaniciUyeOl']))
    {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $email=$_POST['email'];
        if ($password == $repassword)
        {
            $statement = $conn->prepare("INSERT INTO kullanici(name, password, email)
    VALUES(:fname, :pass, :email)");
            $statement->execute(array(
                "fname" => $name,
                "pass" => $password,
                "email" => $email
            ));
        }
        else
        {
            header("Location:welcome.php?durum=no");
        }


    }
if(isset($_POST['sifremiunuttum']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $email=$_POST['email'];
    if ($password == $repassword)
    {
        $statement = $conn->prepare("INSERT INTO kullanici(name, password, email)
    VALUES(:fname, :pass, :email)");
        $statement->execute(array(
            "fname" => $name,
            "pass" => $password,
            "email" => $email
        ));
    }
    else
    {
        header("Location:welcome.php?durum=no");
    }


}
/*if(isset($_POST['sifirla']))
{
    $email=$_POST['email'];
    header("Location:sifremiunuttum-onay.php");
    exit;

}*/

?>
