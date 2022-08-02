<?php 
include_once "header.php";
session_start();
if (empty($_SESSION['user_id'])) {
  header("location:login.php");
}
?>
 <div class="container content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

     
        </div>
            <hr>
            <div class="container">
                <div class="row" id="cameras">
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/5.jpg" alt="Camera" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title">Cannon EOS</h4>
                        <h5 class="card-text">Price: Rs. 36000.00</h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Cannon EOS">
                        <input type="hidden" name="Price" value=" 36000.00">
                      </div>
                        </div></form>
                    </div>
                    <div class="col-md-3  home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/2.jpg" alt="Camera" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Nikon EOS </h4>
                        <h5 class="card-text">Price: Rs. 40,000.00</h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Nikon EOS">
                         <input type="hidden" name="Price" value=" 40,000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3  home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/3.jpg" alt="Camera" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Sony DSLR</h4>
                        <h5 class="card-text">Price: Rs. 50000.00</h5>
                       <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Sony DSLR">
                         <input type="hidden" name="Price" value=" 50000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/4.jpg" alt="Camera" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Olympus DSLR</h4>
                        <h5 class="card-text">Price: Rs. 50000.00</h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Olympus DSLR">
                         <input type="hidden" name="Price" value=" 50000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                </div><br><br>
                <div class="row" id="watches">
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/9.jpg" alt="watch" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Titan Model #301</h4>
                        <h5 class="card-text">Price: Rs. 13000.00</h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Titan Model #301">
                         <input type="hidden" name="Price" value=" 13000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/10.jpg" alt="watch" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Titan Model #201</h4>
                        <h5 class="card-text">Price: Rs. 3000.00 </h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Titan Model #201">
                         <input type="hidden" name="Price" value=" 3000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/11.jpg" alt="watch" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">THMT Milan</h4>
                        <h5 class="card-text">Price: Rs. 8000.00 </h5>
                       <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="THMT Milan">
                         <input type="hidden" name="Price" value=" 8000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/12.jpg" alt="watch" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">Faber Luba #111 </h4>
                        <h5 class="card-text">Price: Rs. 18000.00 </h5>
                       <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Faber Luba #111">
                         <input type="hidden" name="Price" value=" 18000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                </div> <br><br>
                <div class="row" id="shirts">
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/8.jpg" alt="shirt" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold">H&W </h4>
                        <h5 class="card-text">Price: Rs. 800.00 </h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="H&W">
                         <input type="hidden" name="Price" value=" 800.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/6.jpg" alt="shirt" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold"> Luis Phil</h4>
                        <h5 class="card-text">Price: Rs. 1000 </h5>
                       <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Luis Phil">
                         <input type="hidden" name="Price" value=" 1000.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/13.jpg" alt="shirt" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold"> John Zok</h4>
                        <h5 class="card-text">Price: Rs. 1500 </h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="John Zok">
                         <input type="hidden" name="Price" value=" 1500.00">
                      </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3 home-feature">
                        <form action="managecart.php" method="POST">
                        <div class="card">
                      <img class="card-img-top" src="img/14.jpg" alt="shirt" style="height: 200px;width: 250px;">
                      <div class="card-body text-center">
                        <h4 class="card-title text-bold"> Jhalsani</h4>
                        <h5 class="card-text">Price Rs. 1300.00 </h5>
                        <button type="submit" name="cartbtn" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="item_name" value="Jhalsani">
                         <input type="hidden" name="Price" value=" 1300.00">
                      </div>
                        </div>
                    </form>
                    </div>
                </div>
         
            </div>
        </div>
