
<?php
$title = 'Login';

//include header template
include 'header.php';


?><center>

<?php


    echo $_SESSION["user"];
    
        
            include("db_connect.php");

            $curruser=$_SESSION['user'];
            $sql = mysqli_query($conn,"select * from order_place where user='$curruser'");
   
            echo "<table>";
            echo "<tr>";
            echo "<th>Order_id</th>";
            echo "<th>Camera</th>";

            echo "<th>lens</th>";
            echo "<th>from</th>";

            echo "<th>to</th>";
            echo "</tr>";
          
            
           
 
while($row = mysqli_fetch_array($sql))
{


echo "<tr>";
echo "<td>" . $row['order_id'] ."</td>";
echo "<td>" . $row['camera'] ."</td>";
echo "<td>" . $row['lens'] ."</td>";
echo "<td>" . $row['fromdate'] ."</td>";
echo "<td>" . $row['todate'] ."</td>";

echo "</tr>";


}
echo "</table>";
    
        ?></center>