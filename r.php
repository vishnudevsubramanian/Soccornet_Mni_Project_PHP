

<html>
<head>
<script type="text/javascript">
<!--
function warn()
{
alert("Are u sure want to delete?");
//document.write("this is a warning message!");
}
//-->
</script>
</head>
<body  background="black" >
<center><table border="4" bgcolor="pink">
<tr>
<td colspan="2"><center><b><h1>BOOK DETAIL</h1></b></center></tr></td>
<form action="<?php $_PHP_SELF ?>" method="POST">

<tr><td>book_id:<input type="text" name="book_id"><br><br></tr></td>
<tr><td>book_name:<input type="text" name="book_name"><br><br></tr></td>
<tr><td>author:<input type="text" name="author"><br><br></tr></td>
<tr><td>price:<input type="number" name="price"><br><br></tr></td>
<tr><td><input type="submit" name="save" value="save"></tr></td>
<tr><td><input type="submit" name="update" value="update">
<tr><td><input type="submit" name="delete" value="delete" onclick="warn()">
<tr><td><input type="submit" name="view" value="view">

</table></center>
</form>
</body>
</html>






<?php
$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db="BOOKS";
$conn=mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if($conn->connect_error)
{
die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
if(isset($_POST["save"]))
{
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$author=$_POST['author'];
$price=$_POST['price'];

$sql="INSERT INTO cus(book_id,book_name,author,price)VALUES($book_id,'$book_name','$author',$price)";
if(mysqli_query($conn,$sql))
{
echo "record created";
}
else
{
echo "error : " . $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST['view']))
{
$sql2="SELECT book_id,book_name,author,price FROM cus";
$result=mysqli_query($conn,$sql2);
if($result->num_rows > 0)
{
echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "book_id";
echo "</td>";
echo "<td>";
echo "book_name";
echo "</td>";
echo "<td>";
echo "author";
echo "</td>";
echo "<td>";
echo "price";
echo "</td>";
echo "</tr>";

       while($row=mysqli_fetch_assoc($result))
       {
       echo "<tr>";
     echo "<td>";
    echo "$row[book_id]"; 
     echo "</td>";
echo "<td>";
echo "$row[book_name]";
echo "</td>";
echo "<td>";
echo "$row[author]";
echo "</td>";
echo "<td>";
echo "$row[price]";
echo "</td>";
echo "</tr>";
}
echo "</table>";

      // echo "book_id: " . $row["book_id"] . " book_name: " . $row["book_name"] . "author: " . $row["author"] . "price: " . $row["price"] . "<br>";

 
 
//}
}
}
if(isset($_POST["update"]))
{
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$author=$_POST['author'];
$price=$_POST['price'];

$sql="UPDATE cus  SET book_name= '$book_name',author='$author',price=$price  WHERE book_id= $book_id";
if(mysqli_query($conn,$sql))
{
echo "updated sucessfully";
}
else
{
echo "error : " . $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST["delete"]))
{
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$author=$_POST['author'];
$price=$_POST['price'];
$sql="DELETE FROM cus WHERE book_id=$book_id";
if(mysqli_query($conn,$sql))
{
echo "deleted sucessfully";
}
else
{
echo "error : " . $sql . "<br>" . mysqli_error($conn);
}
}

?>


0

Reply
Forward

