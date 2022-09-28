<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Dan.. dumm.. </title>
  <link rel="stylesheet" type="text/css" href="css/styleMain.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script type="text/javascript" src="js/CRfunctions.js"></script>
</head>

<body>
  <!--header--->
  <header>

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
        <div class="top_content" id="tpcont1"">
          <div class="top_images">
            <img src="Img/1.jpg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>| Book Today |</h3>
            <h4>Don’t just dream of a vacation. Just do it!</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont2">
          <div class="top_images">
            <img src="Img/1.jpg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>| 222222 |</h3>
            <h4>Don’t just dream of a vacation. Just do it!</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont3">
          <div class="top_images">
            <img src="Img/1.jpg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>| 333333 |</h3>
            <h4>Don’t just dream of a vacation. Just do it!</h4>
          </div>
        </div>
        <div class="top_content" id="tpcont4">
          <div class="top_images">
            <img src="Img/1.jpg">
          </div>
          <div class="top_images_effect"></div>
          <div class="top_details">
            <h3>| 444444 |</h3>
            <h4>Don’t just dream of a vacation. Just do it!</h4>
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
    <div class="hotel_section">
      <div class="hotel_container">
        <img src="Img/1.jpg">
        <h4>Location</h4>
      </div>
      <div class="hotel_container">
        <img src="Img/1.jpg">
        <h4>Location</h4>
      </div>
      <div class="hotel_container">
        <img src="Img/1.jpg">
        <h4>Location</h4>
      </div>
      <div class="hotel_container">
        <img src="Img/1.jpg">
        <h4>Location</h4>
      </div>
    </div>
  </section>
  <!--Hotels--->
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