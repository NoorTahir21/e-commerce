<?php 
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include_once "header.php";
include_once "connection.php";
?>
<style>
    .demo-wrap {
  overflow: hidden;
  position: relative;
}

.demo-bg {
  opacity: 0.6;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: auto;
}

</style>
<div>
   <div class="demo-wrap">
  <img class="demo-bg" src="img/bg.jpg" alt="">
        <div class="banner-image">
            <div class="container">
            <center>
                <div class="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p> 
                    <a href="products.php" class="btn btn-danger
                    btn-lg active">Shop Now</a>  
                </div>
            </center>
            </div>
             
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a  style="text-decoration: none;" href="products.php#cameras" ><div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#watches" style="text-decoration: none;" ><div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption" style="text-decoration: none;">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#shirts" style="text-decoration: none;"><div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </body>
            <?php include_once "footer.php";?>