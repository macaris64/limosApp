<?php
    include 'connect.php';
    ob_start();
    session_start();
    
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
