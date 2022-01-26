<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "wtdatabase";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

     if(isset($_POST['submit']))
   { 

      $id = $_POST['id'];
     
      $descp = $_POST['descp'];
     $cat = $_POST['cat'];
     $stock=$_POST['stc'];
     $price = $_POST['prc'];
     
     $sql = "UPDATE product SET description='$descp',category='$cat',stock='$stock',price='$price' WHERE ID='$id'";
     if (mysqli_query($conn, $sql))
      {
        echo "Successfully Updated !";
        header('Location: HomepageofAdmin.html');
    }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>  