<html>
<head><title>form</title></head>
<body>
<form action="<?php $_php_self?>"method="post">
<table border="2">
<tr><td>FIRST_NAME:<input type="text" name="fname"></td></tr>
<tr><td>LAST_NAME:<input type="text" name="lname"></td></tr>
<tr><td>GENDER:   <input type="radio" name="gen" value="male" >male<input type="radio"name="gen"value="female">female</td></tr>
<tr><td>ID:<input type="number" name="id"></td></tr>
<tr><td>ADDRESS:<textarea rows="5" cols="50" name="addr"></textarea></td></tr>
<tr><td>phone_no:<input type="number"name="phno"></td></tr>
<tr><td>mark1:<input type="number" name="m1"></td></tr>
<tr><td>mark2:<input type="number" name="m2"></td></tr>
<tr><td><center><input type="submit" name="add" value="save"></center></td>
<td><center><input type="submit" name="update" value="update"></center></td>
<td><center><input type="submit" name="delete" value="delete"></center></td>
<td><center><input type="submit" name="view" value="view"></center></td></tr>
</table>
</table>
</form>
</body>
</html>
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="STUDENT";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
 die("connection failed".$conn->connect_error);
}
echo "connection successfully";
if(isset($_POST["add"]))
{

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gen=$_POST["gen"];
$id=$_POST["id"];
$addr=$_POST["addr"];
$phno=$_POST["phno"];
$m1=$_POST["m1"];
$m2=$_POST["m2"];
$total=$m1+$m2;
$sql="INSERT INTO DETAILS(FIRST_NAME,LAST_NAME,GENDER,ID,ADDRESS,phone_no,mark1,mark2,TOTAL)values('$fname','$lname','$gen',$id,'$addr',$phno,$m1,$m2,$total)";
if(mysqli_query($conn, $sql))
{
echo "record inserted successfully";
}
else
{
echo "error". $sql ."<br>" .mysqli_error($conn);
}
}
if(isset($_POST["update"]))
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gen=$_POST["gen"];
$id=$_POST["id"];
$addr=$_POST["addr"];
$phno=$_POST["phno"];
$m1=$_POST["m1"];
$m2=$_POST["m2"];
$total=$m1+$m2;
$sql1="UPDATE DETAILS SET FIRST_NAME='$fname',LAST_NAME='$lname',GENDER='$gen',ADDRESS='$addr',phone_no=$phno,mark1=$m1,mark2=$m2,TOTAL=$total WHERE ID=$id";
if(mysqli_query($conn, $sql1))
{
echo "new record updated successfully";
}
else
{
echo "error". $sql1 ."<br>".mysqli_error($conn);
}
}
if(isset($_POST["delete"]))
{
$id=$_POST["id"];
$sql="delete from DETAILS WHERE ID=$id";
if(mysqli_query($conn, $sql))
{
echo "record deleted";
}
else
{
echo "error". $sql ."<br>" .mysqli_error($conn);
}
}
if(isset($_POST["view"]))
{
 $sql3="select * from DETAILS";
 $result=$conn->query($sql3);-
 if($result->num_rows>0)
 {
  echo "<table border=2>";
  echo "<tr>";
  echo "<td>";
  echo "FIRST_NAME";
  echo "</td>";
  echo "<td>";
  echo "LAST_NAME";
  echo "</td>";
  echo "<td>";
  echo "GENDER";
  echo "</td>";
  echo "<td>";
  echo "ID";
  echo "</td>";
  echo "<td>";
  echo "ADDRESS";
  echo "</td>";
  echo "<td>";
  echo "phone_no"; 
  echo "</td>";
  echo "<td>";
  echo "mark1";
  echo "</td>";
  echo "<td>";
  echo "mark2";
  echo "</td>";
  echo "<td>";
  echo "total";
  echo "</td>";
  echo "</tr>";
  while($row=$result->fetch_assoc())
  {
   echo "<tr>";
   echo "<td>";
   echo $row['FIRST_NAME'];
   echo "</td>";
   echo "<td>";
   echo $row['LAST_NAME'];
   echo "</td>";
   echo "<td>";
   echo $row['GENDER'];
   echo "</td>";
   echo "<td>";
   echo $row['ID'];
   echo "</td>";
   echo "<td>";
   echo $row['ADDRESS'];
   echo "</td>";
   echo "<td>";
   echo $row['phone_no'];
   echo "</td>";
   echo "<td>";
   echo $row['mark1'];
   echo "</td>";
   echo "<td>";
   echo $row['mark2'];
   echo "</td>";
   echo "<td>";
   echo $row['TOTAL'];
   echo "</td>";
   echo "</tr>";
  }
  echo "</table>";
 }
 else
 {
  echo "no rows selected";
 }
}
$conn->close();
?>



