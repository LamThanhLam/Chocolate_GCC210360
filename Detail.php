<h1>Details</h1>
<?php 
    include_once("connection.php");
	if(isset($_GET["id"]))
	{	$id = $_GET["id"];
		$result = mysqli_query($conn,"SELECT * FROM product WHERE Product_ID='$id'");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $pro_id = $row['Product_ID'];
		$pro_name = $row ['Product_Name'];	
        $pro_image = $row ['Pro_image'];
        $pro_price = $row ['Price'];
        $pro_smalldes = $row ['SmallDesc'];
        $pro_bigdes = $row ['DetailDesc'];
    }

?>
<h2><?php echo $pro_name ?></h2>
    <div>
        <img style="height:300px;" src="product-imgs/<?php echo $pro_image ?>">

    </div>    
    <ul style="list-style-type: none ;" class="list_group">
        Price <li class="list-group-item"><?php echo $pro_price?> $</li>
    
        Short description<li class="list-group-item"><?php echo $pro_smalldes ?></li>

        Detail description<li class="list-group-item"><?php echo $pro_bigdes ?></li>
    </ul>
    <?php

        ?>
</div>