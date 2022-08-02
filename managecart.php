<?php
session_start();
    if (isset($_POST['cartbtn'])) {
    	if (isset($_SESSION['cart'])) {
    		$myitems=array_column($_SESSION['cart'], 'item_name');
    		if (in_array($_POST['item_name'], $myitems)) {
    			echo "<script>
    			alert('item already added');
    			window.location.href='products.php';
    			</script>";
    		}
    		else {
    		$count=count($_SESSION['cart']);
    		$_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
    		echo "<script>
    		 	alert('item added');
    		 	window.location.href='products.php';
    		 	</script>";
}
    	}
    	else
    		 {
    		 	$_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);

    		 	echo "<script>
    		 	alert('item added');
    		 	window.location.href='products.php';
    		 	</script>";
    		 }
    }
    if (isset($_POST['removebtn'])) {
    	foreach ($_SESSION['cart'] as $key => $value) {
    		if ($value['item_name']==$_POST['item_name']) {
    		unset($_SESSION['cart'][$key]);	
    		$_SESSION['cart']==array_values($_SESSION['cart']);
    		echo "
    		<script>
    		alert('item removed');
    		window.location.href='cart.php'
    		</script>";
    		}

    	}
    }

?>