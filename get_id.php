<?php
include("database_connection.php");
$sql = "SELECT Cust_Name FROM customer;";

//$ret = mysqli_query($con,$sql);
//echo "No of records inserted: $ret";
$result = mysqli_query($con,$sql);
$value = 1;
while($row = mysqli_fetch_array($result))
{   
    echo "<script type = 'text/javascript'>
    var x = document.getElementById('IdSelect');
    var option = document.createElement('option');
    option.text = '$row[0]  ';
    option.value = '$value';
    x.add(option,x[$value]);
    </script>";
    $value++;
}
//Disconnect
mysqli_close($con);

?>