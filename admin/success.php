<?php 
session_start();
if (empty($_SESSION['user_id'])) {
	header("location:login.php");
}
include_once "header.php";
include_once "connection.php";
?>
 <body>
        <div class="container-fluid content ">
            <div class="col-md-12">
                <div class="jumbotron" style="background-color: #59b956;">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php" style="text-decoration: none; color: #000;">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
    </body>
</html>
