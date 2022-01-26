<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "wtdatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
<?php      

   session_start();
 if (isset($_POST['id']) and isset($_POST['password']))
 {
    
   // Assigning POST values to variables.
    $username = $_POST['id'];
     $password = $_POST['password'];

   // CHECK FOR THE RECORD FROM TABLE
     $sql = "SELECT * FROM customer WHERE id='$username' and password='$password'";
 
       $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if ($count == 1){
            $_SESSION['uname'] = $username;
            header('Location: mainpage.php');

        }
        else{
           header('Location: login.html');
           }
 }
?>