
<?php
  require("db_connect.php");
  
$sql = "INSERT INTO ordersnack (food, drink, sideDish, quantity, payMethod, date, moreInfo)
VALUES ('".$_POST['food']."', '".$_POST['drink']."', '".implode(',', $_POST['sideDish'])."', '".$_POST['quantity']."','".$_POST['paying']."','".$_POST['date']."','".$_POST['message']."')";
$result = $conn->query($sql);

if($result === TRUE) {
    echo  "USPJEŠNO";
    header("Location: index.php?message=success");
} else {
    echo $result;
    echo "ne valja";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>