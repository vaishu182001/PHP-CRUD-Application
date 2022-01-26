<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "wtdatabase";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

     if(isset($_POST['change']))
   { 

      $username = $_POST['id'];
     
      $pn = $_POST['pno1'];
     $address = $_POST['add1'];
     $mail=$_POST['eid1'];
     $password = $_POST['password2'];
     
     $sql = "UPDATE customer SET phone='$pn',mail='$mail',address='$address',password='$password' WHERE id='$username'";
     if (mysqli_query($conn, $sql))
      {
        echo "Successfully Updated !";
        header('Location: mainpage.php');
    }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>  