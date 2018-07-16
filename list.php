<?php include("connection.php");

function displayView($fieldname) {
    if ($fieldname != '') {
        echo $fieldname;
    } else {
        echo "N/A";
    }
}

function dateView($date_blank) {
    if ($date_blank == "0000-00-00" || $date_blank == '') {
        echo "N/A";
    } else {
        echo $date_blank = date("d-m-Y H:i:s", strtotime($date_blank));
        ;
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
    <h1>Gurudwara Nanaksar Sahib</h1>  
    <h6>Welcome : <?php echo $_SESSION['name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logout.php">Logout</a></h6>  
<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
     <?php 
     $query="SELECT `id`, `name`, `phone`, `email`, `country`, `state`, `city`, `country_code`, `ip_address`, `created_at`, `updated_at` FROM `users` ORDER BY id desc ";
     $data= mysqli_query($link, $query) or die(mysqli_error($link));   
  ?>  
  <tr>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Country</th>
              <th>State</th>
              <th>City</th>
              <th>IP Address</th>
              <th>Created At</th>
          </tr>
      </thead>
      <tbody>
          <?php     while ( $row= mysqli_fetch_array($data))
          { ?>
          <tr>
              <td><?php echo $row['name']; ?></td>
              <td>+<?php echo displayView($row['country_code']); ?>-<?php echo displayView($row['phone']); ?></td>
              <td><?php echo displayView($row['email']); ?></td>
              <td><?php echo displayView($row['country']); ?></td>
              <td><?php echo displayView($row['state']); ?></td>
              <td><?php echo displayView($row['city']); ?></td>
              <td><?php echo displayView($row['ip_address']); ?></td>
              <td><?php echo dateView($row['created_at']); ?></td>
          </tr>
          <?php } ?>
      </tbody>
      
        </table>

  <!-- Load jQuery from CDN so can run demo immediately -->
   <script src="js/datatables/datatables.min.js"></script>
      <script src="js/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
      <script src="js/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
      <script src="js/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
      <script src="js/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
      <script src="js/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
      <script src="js/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
      <script src="js/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
      <script src="js/datatables/datatables-init.js"></script>
</div>
</div>
