<?php
  
 $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "wtdatabase";  
      
    $mysqli = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
  
// SQL query to select data from database
    if(isset($_POST['submit']))
    {
        $pc=$_POST['pl'];
         $sql = "SELECT * FROM product where category ='$pc' ";
         $result = $mysqli->query($sql);
        $mysqli->close(); 
    }
   ?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
        body{
            background: yellow;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Products Available</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Id</th>
                <th>Product Description</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['description'];?></td>
                <td><?php echo $rows['category'];?></td>
                <td><?php echo $rows['stock'];?></td>
                <td><?php echo $rows['price'];?></td>

            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>