<header class="header">

   <div class="flex">

   <h1 class="text-light" style="margin-top:-5px;"><a href="index.html" style="color:white;">Dow</a></h1>
   <button style="width: 120px;height: 30px;position: absolute;margin-left: 90px;
        margin-top: -15px;font-size: 13px;background-color: transparent;
        border: none;color: lightgrey;">
          <span style="font-size: 12px;color:white;">Best online shop</span><br>
          Kenya
        </button>

        <button id="btnAll">
          All
        <img src="assets/img/arow.png" alt="" style="width: 15px;height: 15px;">

        <div id="divItem">

        </div>
        </button>

        <input type="text" name="search" placeholder="Search for products and services" id="search">
        <button style="position:absolute;margin-left:840px;
        height: 36px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;
        border: grey;margin-top: -10px;">
        <img src="images/se.png" alt="">
        </button>
        <button id="helpMain">Help
      <i class="bi bi-caret-down"></i>

      <div id="help">
      <a href="#" style="position:absolute;margin-top:10px;
        margin-left:-50px;font-size:20px;color:black;">Placeholder</a>
        
        <a href="#" style="position:absolute;margin-top:50px;
        margin-left:-50px;font-size:20px;color:black;">placeholder</a>


        <a href="#" style="position:absolute;margin-top:100px;
        margin-left:-70px;font-size:20px;color:white;background-color:#fd5c28;
        width:140px;height:40px;text-decoration:none;"><i class="bi bi-chat-left-text" style="font-style:normal;
        "> chat</i></a>
        </div>
     </button>
     <button id="moreMain">More <i class="bi bi-caret-down"></i>

       <div id="more">

        </div>
    </button>
    <button id="dsign">
      <i class="bi bi-box-arrow-in-right" style="font-size:18px;font-style:normal;"> Login</i>
   </button>

   
        







      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      <img src="images/ca.png" alt="" style="margin-top:-10px;margin-left:980px;">
      <a href="cart.php" class="cart" style="margin-top:-30px;margin-left:-10px;"><span style="font-size:15px;color:white;background-color:#fd5c28"><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
<header   style="position:fixed;width:100%;background: #fd5c28;
   height:30px;margin-top:-2px; z-index:99;">
    <div class="container d-flex justify-content-between">

      <div style="position: absolute;margin-left: -100px;margin-top: 4px;">
        <p style="color: white;">
          Call or whatsapp us to order
          <span style="position: absolute;margin-left: 10px;
          font-weight:bold;">0757561782</span>
        </p>
         
      </div>
      <a href="">
      <p style="position: absolute;margin-left: 80%;color: white;font-size: 14px;margin-top: 5px;">
        Sell with us
      </p>
    </a>
    </div>
  </header><!-- End Header -->