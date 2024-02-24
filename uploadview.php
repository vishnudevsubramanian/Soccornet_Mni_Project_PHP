<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="FOOTBALL_REG";
 $conn=mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 if($conn->connect_error)
 {
  die("connection failed: " . $conn->connect_error);
 }
 //echo "CONNECTED SUCCESSFULLY";
  $sql2="SELECT * FROM UPLOAD";
//echo $sql2;
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=20>";
   echo "<tr>";
   echo "<td>";
   echo "CATEGORY";
   echo "</td>";
   echo "<td>";
   echo "NAME";
   echo "</td>";
   echo "<td>";
   echo "VIDEO";
   echo "</td>";
   echo "<td>";
   echo "DATE";
   echo "</td>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";	
    echo "$row[CATEGORY]";
    echo "</td>";
    echo "<td>";
    echo "$row[NAME]";
    echo "</td>";
    echo "<td>";
    echo "<video><source src=$row[VIDEO] width=200 height=200></video>";
    echo "</td>";
    echo "<td>";
    echo "$row[DATE]";
    echo "</td>";
    echo "</tr>";
   }
  echo "</table>";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
   //echo "NO ROWS SELECTED";
  }
?>
