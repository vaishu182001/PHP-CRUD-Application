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

      $username = $_POST['id'];
     $name=$_POST['name'];
      $pn = $_POST['pno'];
     $address = $_POST['address'];
     $mail=$_POST['eid'];
     $password = $_POST['password1'];
     $sql = "INSERT INTO customer (id,name,phone,mail,address,password)
     VALUES ('$username','$name','$pn','$mail','$address','$password')";
     if (mysqli_query($conn, $sql))
      {
        echo "New record has been added successfully !";

         header('Location: login.html');

     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>  