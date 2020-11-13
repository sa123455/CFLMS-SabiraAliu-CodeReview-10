<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <style>
   .col-6 {

      margin:50px auto;
   }
   </style>
   <title>Media Library</title>

  

</head>
<body>

<div class="container">
<div class="row">
<div class="col-6 bg-info p-2">

   <form  action="actions/a_create.php" method= "post">
   
   
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title">
   </div>
   <div class="form-group">
    <label for="mediaimage">Image</label>
    <input type="text" class="form-control" name="m_image">
   </div>
   <div class="form-group">
    <label for="mediadescription">Short description</label>
    <input type="text" class="form-control" name="m_description">
   </div>
   <div class="form-group">
    <label for="Authorname">Author Firsr Name</label>
    <input type="text" class="form-control" name="a_first_name">
   </div>
   <div class="form-group">
   <label for="Authorname">Author Last Name</label>
    <input type="text" class="form-control" name="a_last_name">
   </div>
   <div class="form-group">
   <label for="isbn">ISBN</label>
    <input type="text" class="form-control" name="isbn">
   </div>
   <div class="form-group">
   <label for="mediatype">Media Type</label>
    <input type="text" class="form-control" name="m_type">
   </div>
   <div class="form-group">
   <label for="mediasize">Media size</label>
    <input type="text" class="form-control" name="m_size">
   </div>
   <div class="form-group">
   <label for="Publishername">Publisher Firsr Name</label>
    <input type="text" class="form-control" name="p_first_name">
   </div>
   <div class="form-group">
   <label for="Publishername">Publisher Last Name</label>
    <input type="text" class="form-control" name="p_last_name">
   </div>
   <div class="form-group">
   <label for="Address">Publisher Address</label>
    <input type="text" class="form-control" name="p_address">
   </div>
   <div class="form-group">
   <label for="publishdate">Publish date</label>
    <input type="date" class="form-control" name="p_date">
   </div>
   <div class="form-group">
   <label for="Available">available</label>
    <input type="text" class="form-control" name="m_available">
   </div>
   <div class="form-group">
   <label for="reserved">reserved</label>
    <input type="text" class="form-control" name="m_reserved">
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Submit</button>
   <a href= "index.php"><button type= "button" class="btn btn-primary">Home</button></a>


  
  
</form>


</div>
</div>    
</div>
</body>
</html>