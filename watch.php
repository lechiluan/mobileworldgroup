<div class="container">
    <h3><u><b>Watch</b></u></h3>
</div>
<div class="container">
    <?php
		include_once("connection.php");
		$result = pg_query($conn, "SELECT * FROM product Where Cat_ID='C03'");

    	if (!$result) { //add this check.
        die('Invalid query: '.pg_errormessage($conn));
        }
	    while($row = pg_fetch_array($result, NUll, PGSQL_ASSOC)){
	?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=productdetail&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$<?php echo  $row['price']?></ins> <del class="oldPrice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="cartfuntion.php?ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
				?>
</div>