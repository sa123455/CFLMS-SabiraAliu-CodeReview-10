<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <title>Restaurant</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }
       img {
           width:80px;
           height:50px;
       } 

   </style>

</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
      
  <h1 class="display-4">Everything You need!</h1>
    <p class="lead ml-5">Available Media</p>
   
    
          
  </div>
  </div>
  <div class="container">
  <div class="row text-center">
  <a href= "index.php">Home</a>
  </div>
  </div>
  <br>


<?php

echo "<div class='container'>";
echo "<div class='row'>";

$sql = "SELECT * FROM media WHERE m_available='yes'";
$result = $connect->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
           
        echo "<div class='col-lg-4 col-md-12 '>";
       echo "<div class='card mb-5' style='width: 18rem;'>";
        echo "<img src='$row[m_image]' class='card-img-top img-fluid'> ";

        echo "<div class='card-body'>";
        echo "<h5 class='card-title text-danger'>$row[title]</h5>";
        echo "<p class='card-title text-secondary'>Author: $row[a_first_name] $row[a_last_name]</p>";
        echo "<p class='card-title text-secondary'>Short description: $row[m_description]</p>";
        echo "<p class='card-title text-secondary'>isbn: $row[isbn]</p>";
        echo "<p class='card-title text-secondary'>Media type: $row[m_type]</p>";
        echo "<p class='card-title text-secondary'>File size: $row[m_size]</p>";
        echo "<p class='card-title text-secondary'>Publish date: $row[p_date]</p>";
        echo "</div>  </div> </div> " ;
    }


  
  
   
    }
    else  {
           echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
    }
    echo "</div> </div>";
   
    ?>





</body>
</html>
<?php ob_end_flush(); ?>