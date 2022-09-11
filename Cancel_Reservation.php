<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Reservation</title>
    <script type="text/javascript" src="CRfunctions.js"></script>
</head>
<body>
    <form>
        <div class="select_search" onclick="setvisibility()">
            Select by - <input type="radio" name="RbSearch" id="RbSearch_id" value="ID"> Reservation ID
            <input type="radio" name="RbSearch" id="RbSearch_nic" value="NIC"> NIC No
            <input type="radio" name="RbSearch" id="RbSearch_name" value="Name"> Name <br>
        </div>
        <div class="search">                
            Search 
            <select id="IdSelect" style="visibility: hidden;">
                <option value="0">Select ID</option>                
            </select>
            <select id="NicSelect" style="visibility: hidden;">
                <option value="0">Select NIC</option>
            </select>
            <select id="NameSelect" style="visibility: hidden;">
                <option value="0">Select Name</option>
            </select>
        </div>
    </form>    
    <?php include("get_id.php"); ?>
</body>
</html>