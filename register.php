<?php include("connection.php");
$name=trim($_POST['name']);
$phone=trim($_POST['phone']);
$email=trim($_POST['email']);
$country=trim($_POST['country']);
$state=trim($_POST['state']);
$city=trim($_POST['city']);
$country_code=trim($_POST['country_code']);
$ip_address=get_client_ip();
$query="insert into users(name,phone,email,country,state,city,country_code,ip_address)values('$name','$phone','$email','$country','$state','$city','$country_code','$ip_address');";   
$data= mysqli_query($link, $query) or die(mysqli_error($link));   
if($data)
{
   echo "1" ;
}

?>
