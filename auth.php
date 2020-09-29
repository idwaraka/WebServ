<html>
<body>
<?php
// define variables and set to empty values
$name = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["u1name"]);
  $email = test_input($_POST["p1name"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($name==$email) {
  header('Location: http://localhost:8080/dwaraka/form1.html');
 exit;
echo "<h2>login successful</h2>";

}else{
 header('Location: http://localhost:8080/dwaraka/index1.html');
}
?>
</body>
</html>