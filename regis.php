<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "wtdatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
     

  $username = $_POST['id'];
  $name=$_POST['name'];
    $pn = $_POST['pno'];
     $address = $_POST['address'];
     $mail=$_POST['eid'];
     $password = $_POST['password1'];
  
   $sql="insert into customer(id,name,phone,mail-id,address,password) values('$username','$name','$pn','$mail','$address','$password')";
   if ($con->query($sql) === TRUE)
    {
  
  header('Location: login.html');
 } else {
  echo "Error: " . $sql . "<br>" . $con->error;
 }
 

$con->close();

?>