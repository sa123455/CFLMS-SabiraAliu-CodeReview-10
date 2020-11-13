
<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Media Update Page</title>
    <style>
    .col-6 {
        margin:10px auto;
    }
  
    </style>
</head>
<body>

<div class="container bg-light">
<div class="row">
<div class="col-6">


   <form action="actions/a_update.php"  method="post">
   <table class="table table-striped mt-5">
           <tr>
               <th>Title</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Image</th>
               <td><input type= "text" name="m_image"  placeholder="Image" value ="<?php echo $data['m_image'] ?>" /></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><input type ="text" name= "m_description" placeholder= "description" value= "<?php echo $data['m_description'] ?>" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type ="text" name= "isbn" placeholder= "isbn" value= "<?php echo $data['isbn'] ?>" /></td>
           </tr>
           <tr>
               <th>Author First Name</th>
               <td><input type ="text" name= "a_first_name" placeholder= "a_first_name" value= "<?php echo $data['a_first_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Author Last Name</th>
               <td><input type ="text" name= "a_last_name" placeholder= "a_last_name" value= "<?php echo $data['a_last_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Media Type</th>
               <td><input type ="text" name= "m_type" placeholder= "m_type" value= "<?php echo $data['m_type'] ?>" /></td>
           </tr>
           <tr>
               <th>Media Size</th>
               <td><input type ="text" name= "m_size" placeholder= "m_size" value= "<?php echo $data['m_size'] ?>" /></td>
           </tr>
           <tr>
               <th>PublisherFirst Name</th>
               <td><input type ="text" name= "p_first_name" placeholder= "p_first_name" value= "<?php echo $data['p_first_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher Last Name</th>
               <td><input type ="text" name= "p_last_name" placeholder= "p_last_name" value= "<?php echo $data['p_last_name'] ?>" /></td>
           </tr>
           <tr>
               <th>Publish date</th>
               <td><input type ="text" name= "p_date" placeholder= "p_date" value= "<?php echo $data['p_date'] ?>" /></td>
           </tr>
           <tr>
               <th>Publisher Address</th>
               <td><input type ="text" name= "p_address" placeholder= "p_address" value= "<?php echo $data['p_address'] ?>" /></td>
           </tr>
           <tr>
               <th>Available</th>
               <td><input type ="text" name= "m_available" placeholder= "m_available" value= "<?php echo $data['m_available'] ?>" /></td>
           </tr>
           <tr>
               <th>Reserved</th>
               <td><input type ="text" name= "m_reserved" placeholder= "m_reserved" value= "<?php echo $data['m_reserved'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               </tr>
               <tr>
               <td><button  type= "submit" class='btn btn-info'>Save Changes</button></td>
               <td><a href= "index.php"><button type= "button" class='btn btn-info'>Back</button></a></td>
           </tr>
       </table>
   </form>

  
 
</div>
</div>
</div>
    
</body>
</html>
<?php
}
?>