<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id_major'];
$sql = "Select * FROM major WHERE id_major='".$id."'";

  $result = $conn->query($sql);
  $row = $result -> fetch_assoc();

 ?>

 <body>
     <h1>Bang du lieu nganh</h1>
     <form action="major_edit_save.php" method="post">
         ID: <input type="text" name="id_major" readonly value=" <?php echo $row['$id_major'];?>"><br>
         Nganh: <input type="text" name="major_name" value=" <?php echo $row['$major_name'];?>"><br>

        <input type="submit">
     </form>
</body>
</html>   