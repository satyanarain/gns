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
        echo $date_blank = date("d-m-Y", strtotime($date_blank));
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
 </head>
<div class="container">
    <h1>Gurudwara Nanaksar Sahib</h1>  
    <h6>Welcome : <?php echo $_SESSION['name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logout.php">Logout</a></h6>  
<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
     <?php 
     $query="SELECT `id`, `name`, `phone`, `email`, `country`, `state`, `city`, `country_code`, `ip_address`, `created_at`, `updated_at` FROM `users` WHERE 1 ";
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
              <td><?php echo displayView($row['phone']); ?></td>
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

     <style>
        
.dataTables_wrapper {
  padding-top: 10px;
}
.dt-buttons {
  display: inline-block;
  margin-bottom: 15px;
  padding-top: 5px;
}
.dt-buttons .dt-button {
  background: #1976d2 none repeat scroll 0 0;
  border-radius: 4px;
  color: #ffffff;
  margin-right: 3px;
  padding: 5px 15px;
}
.dt-buttons .dt-button:hover {
  background: #2f3d4a none repeat scroll 0 0;
}
.dataTables_info,
.dataTables_length {
  display: inline-block;
}
.dataTables_length {
  margin-top: 10px;
}
.dataTables_length select {
  background-color: transparent;
  background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
  background-position: center bottom, center calc(99%);
  background-repeat: no-repeat;
  background-size: 0 2px, 100% 1px;
  border: 0 none;
  padding-bottom: 5px;
  transition: background 0s ease-out 0s;
}
.dataTables_length select:focus {
  background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  outline: medium none;
  transition-duration: 0.3s;
}
.dataTables_filter {
  float: right;
  margin-top: 10px;
}
.dataTables_filter input {
  background-color: transparent;
  background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
  background-position: center bottom, center calc(99%);
  background-repeat: no-repeat;
  background-size: 0 2px, 100% 1px;
  border: 0 none;
  border-radius: 0;
  box-shadow: none;
  float: none;
  margin-left: 10px;
  transition: background 0s ease-out 0s;
}
.dataTables_filter input:focus {
  background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  outline: medium none;
  transition-duration: 0.3s;
}
table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
  background: transparent none repeat scroll 0 0;
}
table.dataTable thead .sorting_asc::after {
  content: "";
  cursor: pointer;
  font-family: fontawesome;
  margin-left: 10px;
}
table.dataTable thead .sorting_desc::after {
  content: "";
  cursor: pointer;
  font-family: fontawesome;
  margin-left: 10px;
}
table.dataTable thead .sorting::after {
  color: rgba(50, 50, 50, 0.5);
  content: "";
  cursor: pointer;
  font-family: fontawesome !important;
  margin-left: 10px;
}
.dataTables_wrapper .dataTables_paginate {
  float: right;
  padding-top: 0.25em;
  text-align: right;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
  border: 1px solid #ddd;
  box-sizing: border-box;
  color: #333333;
  cursor: pointer;
  display: inline-block;
  min-width: 1.5em;
  padding: 0.5em 1em;
  text-align: center;
  text-decoration: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  background-color: #1976d2;
  border: 1px solid #1976d2;
  color: #ffffff !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
  background: transparent none repeat scroll 0 0;
  border: 1px solid #ddd;
  box-shadow: none;
  color: #333333;
  cursor: default;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background-color: #1976d2;
  border: 1px solid #1976d2;
  color: white;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background-color: #333333;
  outline: medium none;
}
.dataTables_wrapper .dataTables_paginate .ellipsis {
  padding: 0 1em;
}
.tablesaw-bar .btn-group label {
  color: #333333 !important;
}
.dt-bootstrap {
  display: block;
}
.paging_simple_numbers .pagination .paginate_button {
  background: #ffffff none repeat scroll 0 0;
  padding: 0;
}
.paging_simple_numbers .pagination .paginate_button:hover {
  background: #ffffff none repeat scroll 0 0;
}
.paging_simple_numbers .pagination .paginate_button a {
  border: 0 none;
  padding: 2px 10px;
}
.paging_simple_numbers .pagination .paginate_button.active a,
.paging_simple_numbers .pagination .paginate_button:hover a {
  background: #1976d2 none repeat scroll 0 0;
  color: #ffffff;
}
          
          
          </style>  
    
      
   </div>
</div>
