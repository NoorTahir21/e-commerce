<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- CSS only -->
    <title>Cart</title>
</head>
<body>
 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border-rounded bg-light" style="margin-top: 80px;">
                    <h2 class="text-center">MY CART</h2>
                    </div>
                    <div class="col-lg-8">
                     <table class="table">
                    <thead>
                         <tr>
                                    
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr><br><br>
                    </thead>
                   
                            <tbody>
                                <?php
                                $total=0;
                                if (isset($_SESSION['cart'])) {
                                    
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $total=$total+$value['Price'];
                                    echo "<tr>
                                    <td>$value[item_name]</td>
                                    <td>$value[Price]</td>
                                    <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                    <form action='managecart.php' method='POST'>
                                    <td><button name='removebtn' class='btn btn-danger'>Remove</button></td>
                                    <input type='hidden' name='item_name' value='$value[item_name]'>
                                    </tr>
                                    </form>
                                    ";
                                }
                            }
                                ?>
                              
                            </tbody>
                    </table>
            
            </div>
            <div class="col-lg-4">
                <div style="margin-top: 50px;">
                <h3>Total</h3>
                <h4><?php echo $total; ?></h4>
                <form action="checkout.php">
                     <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Online payment
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                       Cash On delivery
                         </label>
                        </div><br>

                    <button type="submit" class="btn btn-success">Make Purchase</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    </body>

</html>

