<?php
include("database_connection.php");
$sql = "SELECT * FROM hikka_rooms;";

//$ret = mysqli_query($con,$sql);
//echo "No of records inserted: $ret";
$result = mysqli_query($con,$sql);
$value = 1;
while($row = mysqli_fetch_array($result))
{   
    $_SESSION['price_'.$value.'_1'] = $row[3];
    $_SESSION['price_'.$value.'_2'] = $row[4];
    $_SESSION['price_'.$value.'_3'] = $row[5];
    $_SESSION['price_'.$value.'_4'] = $row[6];
    $_SESSION['Rcount_'.$value] = $row[7];
        
    $value++;
}
//Disconnect
mysqli_close($con);

?>