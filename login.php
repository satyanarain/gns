<?php include("connection.php");
if(isset($_POST['submit']))
{
    
$name=trim($_POST['name']);
//echo $name= mysqli_real_escape_string($name);    
$password= md5($_POST['password']);    
$query="select name,password from admin where name='$name' and password='$password'";   
$data= mysqli_query($link, $query) or die(mysqli_error($link));   
 $row= mysqli_num_rows($data); 
 $data= mysqli_fetch_array($data); 
 
 if($row > 0)
 {
   $_SESSION['name']=$data['name'];    
   header('location:list.php'); 
 } else {
 $_SESSION['MSG']="Your user id or password not match!" ; 
 }
 }
?>
<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
         <title>Gurudwara Nanaksar Sahib</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/intlTelInput.min.js"></script>
      
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="build/css/intlTelInput.min.css">
        <link rel="stylesheet" href="build/css/custom.css">
      
</head>
<div class="container">
    
   
    
    
    
 <form autocomplete="off" id="myform" class="needs-validation" novalidate action="" method="post">
     
     <?php 
     
     if(isset($_POST['submit']) && $_POST['name']!='' && $_POST['password']!='')
{
  
     if(isset($_SESSION['MSG']))
     { 
    ?>
   <div class="form-group">
    <div class="alert-new-success" id="successMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo $_SESSION['MSG'];    session_unset( $_SESSION['MSG']); ?></strong>
    </div>
    </div>
     <?php }
}
     ?>
     <div class="form-group">
         <label for="validationCustom03">Name <span style="color:#ff0000">*</span></label>
         <input type="text" name="name" class="form-control" id="name" placeholder="Name" onkeypress="userLogin1()">
        
     </div>
     <div class="form-group">
         <label for="validationCustom04">Password <span style="color:#ff0000">*</span></label>
         <input  name="password" type="password" id="password" style="width:100%;" required onkeypress="userLogin2()">
        
     </div>
        <button class="btn btn-primary" type="submit" name="submit" onclick="userLogin()"><i class="fa fa-paper-plane"></i> Login</button>
</form>
 <!-- Load jQuery from CDN so can run demo immediately -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
 <script>
  $(document).ready(function()
{ 
setTimeout(function() {
          $('#successMessage').fadeOut('fast');
        }, 5000);

} ) ;  

$( document ).ready( function () {
			$( "#myform" ).validate( {
				rules: {
					name: "required",
					
					password: {
						required: true,
						minlength: 5
					},
					
				},
				messages: {
					name: "Please enter your firstname",
					
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

} ) ;  

function userLogin()
{
var name= $("#name").val();
var password= $("#password").val();  
 if(name=='') 
 {
   $("#name").removeClass('form-control')    
   $("#name").addClass('form-control red')  
   $("#password").removeClass('form-control')    
   $("#password").addClass('form-control red')  

 }else
 {
   $("#name").removeClass('form-control red')    
   $("#name").addClass('form-control')  
   $("#password").removeClass('form-control red')    
   $("#password").addClass('form-control')   
 }
 
}
function userLogin1()
{
var name= $("#name").val();

 if(name!='') 
 {

   $("#name").removeClass('form-control red')    
   $("#name").addClass('form-control')  
   
 }
 
}
function userLogin2()
{
var password= $("#password").val(); 

 if(password!='') 
 {
   $("#password").removeClass('form-control red')    
   $("#password").addClass('form-control')   
   
 }
 
}




</script>
	</div>
</div>