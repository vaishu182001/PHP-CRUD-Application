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

      $pid = $_POST['id'];
     $descp=$_POST['descp'];
      $cat = $_POST['cat'];
     $stock = $_POST['stc'];
     $price=$_POST['prc'];
     
     $sql = "INSERT INTO product (ID,description,category,stock,price)
     VALUES ('$pid','$descp','$cat','$stock','$price')";
     if (mysqli_query($conn, $sql))
      {
        echo "New product has been added successfully !";

         header('Location: HomepageofAdmin.html');
    }

     
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
    }
?>  