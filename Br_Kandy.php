<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel - Royal Gardens - </title>
	<link rel="stylesheet" type="text/css" href="css/BranchStyle.css"/>
	<link rel="stylesheet" type="text/css" href="css/styleHeader_footer.css">
  	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  	<script type="text/javascript" src="js/CRfunctions.js"></script>	
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
			<h1>Royal Gradens - Kandy</h1>
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

		<div class="container-form">
			<form action="#">
				<h2 class="heading heading-reser">Reservasation Online</h2>

				<div class="form-field">
					<p>Date</p>
					<input type="date">
				</div><br>
				<div class="form-field">
					<p>How many Guests </p>
					<div class="form_field_right">
						Guests
					</div>
				</div><br>
				<div class="form-field">
					<p>No Of Days </p>
					<select name="select" id="#">
						<option value="1">1 Day</option>
						<option value="2">2 Days</option>
						<option value="3">3 Days</option>
						<option value="4">4 Days</option>
						<option value="5">5 Days</option>
						<option value="6">6 Days</option>
						<option value="7">7 Days</option>
						<option value="8">9 Days</option>
					</select>
				</div><br>
				<div class="form-field">
					<p>No Of Rooms </p>
					<div class="form_field_right">
						room count 1<br>
						room count 2<br>
						room count 3
					</div>
				</div><br>
				<div class="form-field">
					<p>Sub Total</p>
					<div class="form_field_right">
						Total
					</div>
				</div><br>
				<div class="form-field">
					<p>Discount</p>
					<div class="form_field_right">
						promotional
					</div>
				</div><br>
				<div class="form-field">
					<p>Total</p>
					<div class="form_field_right">
						Total
					</div>
				</div><br>

				<p class="promotion">Pay only 30% to book now</p>

				<button class="btn_book" id="btn_book" type="button">Book Now</button>

			</form>


		</div>
	</div>
	<br>
	<h2 class="h_avail">Available Rooms</h2>
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
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			<td>count</td>
			<td>Rs.5000</td>

		</tr>
		<tr>
			<td>Double Room</td>
			<td>Wifi<br>AC<br>Cloth Rack<br>Safe<br>Desk<br>Chairs to Everyone<br>Mosquito Nets</td>

			<td>2 Person</td>

			<td>
				<p>Rooms Only </p>
				<select name="Shows" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>

			<td>count</td>
			<td>Rs.10000</td>

		</tr>
		<tr>
			<td>Triple Room</td>
			<td>Wifi<br>AC<br>Cloth Rack<br>Safe<br>Desk<br>Chairs to Everyone<br>Mosquito Nets</td>

			<td>3 Person</td>

			<td>
				<p>Rooms Only </p>
				<select name="Shows" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Bed and Breakfast </p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Half Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
				<p>Full Board</p>
				<select name="select" id="#">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>

				<td>count</td>
			<td>Rs.15000</td>

		</tr>
	</table>

</body>

</html>