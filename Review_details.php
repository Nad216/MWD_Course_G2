<?php
include("database_connection.php");
$sql = "SELECT * FROM reviews;";

$result = mysqli_query($con,$sql);
$value = 1;
while($row = mysqli_fetch_array($result))
{
$Review_content = $row[2];
$Review_name = $row[1];
$Review_rating = $row[3];

echo    "<div class='slide'>
          <div class='review_content'>
           <div class='review_details'>
             <!--Review details--->
             <p>$Review_content</p>
              </div><br>
            <div class='review_name'>
              <!--Review details--->
              <h4>$Review_name</h4>
            </div><br>
            <div class='review_stars'>
              <!--Review details--->";
if ($Review_rating < 2)
{
echo         "<a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>";
} else if($Review_rating < 3)
{
echo         "<a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>";
}else if($Review_rating < 4)
{
echo         "<a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>";
}else if($Review_rating < 5)
{
echo         "<a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bx-star'></i></a>";
}
else if($Review_rating == 5)
{
echo         "<a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>
              <a href='#'><i class='bx bxs-star'></i></a>";
}

echo      "</div><br>
          </div>
        </div>";
if($value >= 8){
  $value = 1000000000000;
}
else
{$value++;}
}

?>