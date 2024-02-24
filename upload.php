<html>
 <head>
  <title>INSERT MOBILES</title>
 </head>
 <body bgcolor="skyblue">
  <center>
  <form action="<?php $_PHP_SELF?>" method="POST">
  <table border="10" height="520" width="500">
  <tr>
  <td colspan="2"><center><b><h2>ADD VIDEO<h2></b></center></td>
  </tr>
  <tr>
  <td>CATEGORY:</td><td><input type="text" name="cat"><br>
  </td></tr>
  <tr>
  <td>NAME:</td><td><input type="text" name="name"><br>
  </td></tr>
  <tr>
  <td>
  VIDEO:</td><td> <input type="file" name="video" />
  </td>
  </tr>
  <tr>
  <td colspan="2">
  <center><input type="submit" name="add"><br>
  </td>
  </tr>
  </center>
  </table>
  </form>
 </body>
</html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db= "FOOTBALL_REG";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if ($conn->connect_error) {
die("connection failed: ".$conn->connect_error);
}
//echo "connected successfully";
if (isset($_POST["add"])) {
$cat= $_POST["cat"];
$name= $_POST["name"];
$video=$_POST["video"];
$date=date('Y,m,d');
$sql= "INSERT INTO UPLOAD (CATEGORY,NAME,VIDEO,DATE) VALUES ('$cat','$name','$video','$date')";
if(mysqli_query($conn,$sql))
{
 echo "inserted";
}
else
{
echo "failed";
echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
}
?>
