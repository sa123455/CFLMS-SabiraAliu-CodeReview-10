<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Media Library</title>
    <style>
    img {width:100px;
    height:100px;}
   /*  https://images.unsplash.com/photo-1502078534399-8190479363f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80 */
   /* https://images.unsplash.com/photo-1548778052-311f4bc2b502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60 */
    </style>
</head>
<body>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
      
  <h1 class="display-4">Everything You need!</h1>
    <p class="lead ml-5">Media Library</p>
   </div>
  </div>


<div class="container">
<div class="row">

</div>
<div class="col-11">
<a href= "create.php"><button type="button" class="btn btn-info" >Add Media</button></a>
<a href= "available.php"><button type="button" class="btn btn-info" >Available Media</button></a>



<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">image</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Description</th>
      <th scope="col">ISBN</th>
      <th scope="col">Type</th>
      <th scope="col">size</th>
    </tr>
  </thead>
   <tbody>

   <?php
   $sql = "SELECT * FROM media";
   $result = $connect->query($sql);
   if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo  "<tr>
       <td><img src='$row[m_image]'></td>
           <td>" .$row['title']."</td>
           <td>" .$row['a_first_name']." " .$row['a_last_name']."</td>
           <td>" .$row['m_description']."</td>
           <td>" .$row['isbn']."</td>
           <td>" .$row['m_type']."</td>
           <td>" .$row['m_size']."</td>
           <td>
               <a href='update.php?id=" .$row['id']."'><button type='button'class='btn btn-info'>Edit</button></a>
               <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>
               <a href='publisher.php'><button type='button'class='btn btn-success'>Publisher Info</button></a>
           </td>
       </tr>" ;
   }
} else  {
   echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
}

   
   ?>
   
  </tbody> 
</table>

</div>
</div>
    
</body>
</html>