<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "123456789", "deneme");
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM user_name
  WHERE first_name LIKE '%".$search."%'
  
 ";
}
else
{
    $query = "
  SELECT * FROM user_name ORDER BY user_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer id</th>
     <th>Customer name</th>

    </tr>
 ';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
   <tr>
    <td>'.$row["user_id"].'</td>
    <td>'.$row["first_name"].'</td>
   
   </tr>
  ';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}

?>
