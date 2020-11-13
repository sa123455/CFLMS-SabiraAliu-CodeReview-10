<?php 

require_once 'db_connect.php';

if ($_POST) {
    $title = $_POST['title'];
    $m_image = $_POST['m_image'];
    $m_description = $_POST[ 'm_description'];
    $isbn = $_POST['isbn'];
    $a_first_name = $_POST['a_first_name'];
    $a_last_name = $_POST['a_last_name'];
    
    $m_type = $_POST['m_type'];
    $m_size = $_POST['m_size'];
    $p_first_name = $_POST['p_first_name'];
    $p_last_name = $_POST['p_last_name'];
    $p_date = $_POST['p_date'];
    $p_address = $_POST['p_address'];
    
    $m_available = $_POST['m_available'];
    $m_reserved = $_POST['m_reserved'];

   $id = $_POST['id'];

   $sql = "UPDATE media SET title = '$title',m_image = '$m_image', m_description='$m_description',isbn='$isbn',a_first_name='$a_first_name',
   a_last_name='$a_last_name',m_type='$m_type',m_size='$m_size',p_first_name='$p_first_name',p_last_name='$p_last_name',
   p_date='$p_date',p_address='$p_address',m_available='$m_available',m_reserved='$m_reserved' WHERE id = {$id}" ;
  
  if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>