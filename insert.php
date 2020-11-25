<?php
$connection = mysql_connect("localhost", "root");
$db = mysql_select_db("weCare", $connection);
if(isset($_POST['submit']))
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into patient(name,email,contact,address) values ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
mysql_close($connection);
?>
