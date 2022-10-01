<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel - Royal Gardens </title>
  <link rel="stylesheet" type="text/css" href="css/styleMain.css">
  <link rel="stylesheet" type="text/css" href="css/styleHeader_footer.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script type="text/javascript" src="js/CRfunctions.js"></script>
</head>

<body background="Img/Back_Pattern.jpg">
  <!--header--->
  <header>
    <?php include ("Header.php");
    ?>		
    <script type="text/javascript" src="js/Headerfunctions.js"></script>
  </header>
  
  <!--Top--->
  <section class="top">
    <div class="top_slider">
      <script type="text/javascript">
        var countaa = 1;
      </script>
      <input type="radio" name="radio_btn" class="top_radio" id="topradio1">
      <input type="radio" name="radio_btn" class="top_radio" id="topradio2">
      <input type="radio" name="radio_btn" class="top_radio" id="topradio3">
      <input type="radio" name="radio_btn" class="top_radio" id="topradio4">
      <div class="top_slides">
        <div class="top_content" id="tpcont1">
          <div class="top_images">
            <img src="Img/Home_top_1.jfif">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>| Book Today |</h3>
            <h4>Don’t just dream of a vacation. Just do it!</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont2">
          <div class="top_images">
            <img src="Img/Home_top_2.webp">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>Our Locations</h3>
            <h4>Kandy | Hikkaduwa | Trinco | Yala</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont3">
          <div class="top_images">
            <img src="Img/Home_top_3.jpeg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>Amazing Deals - Just for You!</h3>
            <h4>Check Our Deals</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont4">
          <div class="top_images">
            <img src="Img/Home_top_4.jpg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>Luxury is not a place <br> it's an experience.</h3>
            <h4>Located at the perfect place for a perfect vacation.</h4>
          </div>
        </div>
        <div class="navigate_manual">
          <label for="top_radio1" class="manual-btn"></label>
          <label for="top_radio2" class="manual-btn"></label>
          <label for="top_radio3" class="manual-btn"></label>
          <label for="top_radio4" class="manual-btn"></label>
        </div>        
        <div class="navigate_auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>
    </div>
  </section>
  <!--Deals--->
  <section class="deals">
    <br>
    <h2>Deals and Special Offers</h2>
    <div class="deal_section">
      <div class="deal_container">
        <img src="Img/2.jpg">
        <div class="shape1"></div>
        <div class="shape2"></div>
        <h4>Location</h4>
        <h5>20%</h5>
      </div>
      <div class="deal_container">
        <img src="Img/2.jpg">

        <div class="shape1"></div>
        <div class="shape2"></div>
        <h4>Location</h4>
        <h5>20%</h5>
      </div>
    </div>
    </div>
  </section>
  <!--Hotels--->
  <section class="hotel">
    <br>
    <h2>Our Locations</h2>
    <div class="hotel_section_group">
      <div class="hotel_section">
        <div class="hotel_container">
          <a href="Br_Kandy.php">
          <img src="Img/HOME_Kandy.jpg">
          <div class="hotel_images_effect"></div>
          <h4>Kandy</h4></a>
        </div>
        <div class="hotel_container">
          <a href="Br_Hikkaduwa.php">
          <img src="Img/HOME_Hikkaduwa.jpg">
          <div class="hotel_images_effect"></div>
          <h4>Hikkaduwa</h4></a>
        </div>
        <div class="hotel_container">
          <a href="Br_Trinco.php">
          <img src="Img/HOME_Trincomalee.jpg">
          <div class="hotel_images_effect"></div>
          <h4>Trinco</h4></a>
        </div>
        <div class="hotel_container">
          <a href="Br_Yala.php">
          <img src="Img/HOME_Yala.jpg">
          <div class="hotel_images_effect"></div>
          <h4>Yala</h4></a>
        </div>
      </div>
    </div>
  </section>
  <!--review--->
  <section class="review">
    <div class="slider">
      <input type="radio" name="radio_btn" class="radio" id="radio1">
      <input type="radio" name="radio_btn" class="radio" id="radio2">
      <input type="radio" name="radio_btn" class="radio" id="radio3">
      <input type="radio" name="radio_btn" class="radio" id="radio4">
      <input type="radio" name="radio_btn" class="radio" id="radio5">
      <input type="radio" name="radio_btn" class="radio" id="radio6">
      <input type="radio" name="radio_btn" class="radio" id="radio7">
      <input type="radio" name="radio_btn" class="radio" id="radio8">
      <div class="slides" id="slides">
        <?php include ("Review_details.php");?>
      </div>      
    </div>
  </section>  

  
</body>

</html>