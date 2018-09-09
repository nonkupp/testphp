<?php
include("conn/mysqlconn.php");
// define variables and set to empty values
$gender = $firstname = $lastname = $DateOfBirth = $address = $Tel = $email = $Type =$size = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender = test_input($_POST["gender"]);
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $DateOfBirth = test_input($_POST["DateOfBirth"]);
  $address = test_input($_POST["address"]);
  $Tel = test_input($_POST["Tel"]);
  $email = test_input($_POST["email"]);
  $Type = test_input($_POST["Type"]);
  $size = test_input($_POST["size"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$DateOfBirth."<br>".$address."<br>".$Tel."<br>".$Type."<br>".$size."<br>".$email."<br>".$gender."<br>";

//insert data
$sql = "INSERT INTO profile (gender,firstname,lastname,DateOfBirth,address,Tel,email,type,size)
VALUES ('$gender','$firstname','$lastname','$DateOfBirth','$address','$Tel','$email','$Type','$size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {  //run query
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<a href = "report.php"> test </a>
