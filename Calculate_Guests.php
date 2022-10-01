<?php

$_SESSION['room_1'] = $_SESSION['r_1_1'] + $_SESSION['r_1_2'] + $_SESSION['r_1_3'] + $_SESSION['r_1_4'];
$_SESSION['room_2'] = $_SESSION['r_2_1'] + $_SESSION['r_2_2'] + $_SESSION['r_2_3'] + $_SESSION['r_2_4'];
$_SESSION['room_3'] = $_SESSION['r_3_1'] + $_SESSION['r_3_2'] + $_SESSION['r_3_3'] + $_SESSION['r_3_4'];
$_SESSION['Guests'] = $_SESSION['room_1'] + $_SESSION['room_2'] + $_SESSION['room_3'];

$Roomtype1 = ($_SESSION['r_1_1'] * $_SESSION['price_1_1']) + ($_SESSION['r_1_2'] * $_SESSION['price_1_2'] ) + ($_SESSION['r_1_3'] * $_SESSION['price_1_3']) + ($_SESSION['r_1_4'] * $_SESSION['price_1_4']);
$Roomtype2 = ($_SESSION['r_2_1'] * $_SESSION['price_2_1']) + ($_SESSION['r_2_2'] * $_SESSION['price_2_2'] ) + ($_SESSION['r_2_3'] * $_SESSION['price_2_3']) + ($_SESSION['r_2_4'] * $_SESSION['price_2_4']);
$Roomtype3 = ($_SESSION['r_3_1'] * $_SESSION['price_3_1']) + ($_SESSION['r_3_2'] * $_SESSION['price_3_2'] ) + ($_SESSION['r_3_3'] * $_SESSION['price_3_3']) + ($_SESSION['r_3_4'] * $_SESSION['price_3_4']);

$_SESSION['sub_total'] = ($Roomtype1 + $Roomtype2 + $Roomtype3)*$_SESSION['select_day'];
$_SESSION['discount'] = $_SESSION['sub_total']*$_SESSION['discount_per']/100;
$_SESSION['final_total'] = $_SESSION['sub_total'] - $_SESSION['discount'];

?>
