<?php 
session_start();

if (isset($_POST['reser_date']))
{
	include ('sessionvar_date.php');
	$_SESSION['select_day'] = $_POST['select_day'];
	$_SESSION['reser_date'] = $_POST['reser_date'];
}
else if (isset($_POST['select_1_1']))
{
	include ('sessionvar.php');
	$_SESSION['r_1_1'] = $_POST['select_1_1'];
	$_SESSION['r_1_2'] = $_POST['select_1_2'];
	$_SESSION['r_1_3'] = $_POST['select_1_3'];
	$_SESSION['r_1_4'] = $_POST['select_1_4'];
	$_SESSION['r_2_1'] = $_POST['select_2_1'];
	$_SESSION['r_2_2'] = $_POST['select_2_2'];
	$_SESSION['r_2_3'] = $_POST['select_2_3'];
	$_SESSION['r_2_4'] = $_POST['select_2_4'];
	$_SESSION['r_3_1'] = $_POST['select_3_1'];
	$_SESSION['r_3_2'] = $_POST['select_3_2'];
	$_SESSION['r_3_3'] = $_POST['select_3_3'];
	$_SESSION['r_3_4'] = $_POST['select_3_4'];
}
else
{
	include ('sessionvar_date.php');
	include ('sessionvar.php');
}

include ('Calculate_Guests.php');

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel - Royal Gardens - Trinco</title>
	<link rel="stylesheet" type="text/css" href="css/BranchStyle.css"/>	
	<link rel="stylesheet" type="text/css" href="css/styleHeader_footer.css">
  	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  	<script type="text/javascript" src="js/CRfunctions.js"></script>	
  	<script type="text/javascript" src="js/BRfunctions.js"></script>
	  <script type="text/javascript">	
	  var delay = 1000;

		setTimeout(setguests, delay);
		function setguests() {  
			selectElement('select_1_1', <?php echo $_SESSION['r_1_1'] ?>);			  		
    		selectElement('select_1_2', <?php echo $_SESSION['r_1_2'] ?>);
    		selectElement('select_1_3', <?php echo $_SESSION['r_1_3'] ?>);
    		selectElement('select_1_4', <?php echo $_SESSION['r_1_4'] ?>);
    		selectElement('select_day', "<?php echo $_SESSION['select_day'] ?>");		
		}		

</script>
</head>

<body>
	<!--header start--->
	<header>
    <?php include ("Header.php");
    ?>		
    <script type="text/javascript" src="js/Headerfunctions.js"></script>
  	</header>
	<div class="top"></div>
	<!--header end--->
	<div class="container">
		<div class="container-time">
			<h1>Royal Gradens - Trinco</h1>
			<h2 class="heading">Time Open</h2>
			<h3 class="heading-days">Monday-Friday</h3>
			<p>7am - 11am (breakfast)</p>
			<p>11am - 10pm (Lunch/Dinner)</p>

			<h3 class="heading-days">Saturday and Sunday</h3>
			<p>9am - 1am (breakfast)</p>
			<p>1am - 10pm (Lunch/Dinner)</p>

			<hr>

			<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>
		</div>
		<!--Form Start-->
		<div class="container-form">
			<form method="post" action="#">
				<h2 class="heading heading-reser">Reservasation Online</h2>

				<div class="form-field">
					<p>Date	</p>	
					<input type="date" name="reser_date" id="reser_date" value="<?php echo $_SESSION['reser_date'] ?>">
				</div><br>
				<div class="form-field">
					<p>How many Guests </p>
					<div class="form_field_right">
						<input class="form_psutext" name="Guests" hidden value=""><?php echo $_SESSION['Guests']; ?>
					</div>
				</div><br>
				<div class="form-field">
					<p>No Of Days </p>
					<select name="select_day" id="select_day">
						<option value="0">Select</option>
						<option value="1">1 Day</option>
						<option value="2">2 Days</option>
						<option value="3">3 Days</option>
						<option value="4">4 Days</option>
						<option value="5">5 Days</option>
						<option value="6">6 Days</option>
						<option value="7">7 Days</option>
						<option value="8">8 Days</option>
						<option value="9">9 Days</option>
						<option value="10">10 Days</option>
					</select>
				</div><br>
				<div class="form-field">
					<p>No Of Rooms </p>
					<div class="form_field_right">
						 <input class="form_psutext" name="room_1" hidden><?php echo "Single - ",$_SESSION['room_1']; ?><br>
						 <input class="form_psutext" name="room_2" hidden><?php echo "Double - ",$_SESSION['room_2']; ?><br>						 
						 <input class="form_psutext" name="room_3" hidden><?php echo "Triple - ",$_SESSION['room_3']; ?>
					</div>
				</div><br>
				<div class="form-field">
					<p>Sub Total</p>
					<div class="form_field_right">
					Rs. <?php echo number_format($_SESSION['sub_total'],2,".",","); ?>
					</div>
				</div><br>
				<div class="form-field">
					<p>Discount <?php echo $_SESSION['discount_per']; ?>%</p>
					<div class="form_field_right">
					Rs. <?php echo number_format($_SESSION['discount'],2,".",","); ?>
					</div>
				</div><br>
				<div class="form-field">
					<p>Total</p>
					<div class="form_field_right">
					Rs. <?php echo number_format($_SESSION['final_total'],2,".",","); ?>					
					</div>
				</div><br>

				<p class="promotion">Pay only 20% to book now. <?php echo $_SESSION['reser_date']; ?></p><br>

				<button class="btn_book" id="btn_book" type="submit" onchange="setguests();">Book Now</button>
				
			</form>
			<!--Form End-->

		</div>
	</div>
	<br>
	<form name="table_submit" action="#" method="post">
	<h2 class="h_avail">Available Rooms	
	<button class="btn_book" id="set" type="submit" onchange="setguests();">Calculate</button></h2>
	<table class="table_room">
		<tr>
			<th>Room Type</th>
			<th>Available Facilities</th>
			<th>Max</th>
			<th>Select Rooms</th>
			<th>Available</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>Single Room</td>
			<td>Wifi<br>AC<br>Cloth Rack<br>Safe<br>Desk<br>Chairs to Everyone<br>Mosquito Nets</td>

			<td>1 Person</td>

			<td>
				<p>Rooms Only </p>
				<select name="select_1_1" id="select_1_1">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select_1_2" id="select_1_2">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select_1_3" id="select_1_3">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select_1_4" id="select_1_4">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			<td>count</td>
			<td>
				Rs. <?php echo number_format($_SESSION['price_1_1'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_1_2'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_1_3'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_1_4'],2,".",","); ?><br> </td>

		</tr>
		<tr>
			<td>Double Room</td>
			<td>Wifi<br>AC<br>Cloth Rack<br>Safe<br>Desk<br>Chairs to Everyone<br>Mosquito Nets</td>

			<td>2 Person</td>

			<td>
				<p>Rooms Only </p>
				<select name="select_2_1" id="select_2_1">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select_2_2" id="select_2_2">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select_2_3" id="select_2_3">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select_2_4" id="select_2_4">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			<td>count</td>
			<td>
				Rs. <?php echo number_format($_SESSION['price_2_1'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_2_2'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_2_3'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_2_4'],2,".",","); ?><br> </td>

		</tr>
		<tr>
			<td>Triple Room</td>
			<td>Wifi<br>AC<br>Cloth Rack<br>Safe<br>Desk<br>Chairs to Everyone<br>Mosquito Nets</td>

			<td>3 Person</td>

			<td>
				<p>Rooms Only </p>
				<select name="select_3_1" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select_3_2" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select_3_3" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select_3_4" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			<td>count</td>
			<td>
				Rs. <?php echo number_format($_SESSION['price_3_1'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_3_2'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_3_3'],2,".",","); ?><br>
				Rs. <?php echo number_format($_SESSION['price_3_4'],2,".",","); ?><br> </td>

		</tr>
	</table>
	</form>

</body>

</html>