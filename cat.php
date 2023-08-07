<?php
require_once('header.php');
require_once('connection.php');


//
$catId=$_GET['id'];    
    $sql = "SELECT * FROM `product` WHERE `pcatid` = '$catId'";

    
    $dblink = $c->connectToMySQL();

    $re = $dblink->query($sql);

    if($re->num_rows>0){
        ?>
        <div class="container">
            <div class="row justify-content-center">
        <?php
        while($row=$re->fetch_assoc()){
            ?>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            
          </div>
          <img src="https://images.unsplash.com/photo-1608848461950-0fe51dfc41cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80"
            class="card-img-top" alt="Laptop" width="50%"/>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><?=$row['pcatid']?></p>
              <!-- <p class="small text-danger"><s>$1099</s></p> -->
              <!-- Only use discount in first day and day 15 of every month -->
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0"><a href="detail.php?id=<?=$row['pid']?>s" class="text-muted"><?=$row['pname']?></a></p></h5>
              <h5 class="text-dark mb-0">&#36; <?=$row['pprice']?></h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold"><?=$row['pquan']?></span></p>
              <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="d-grid gap-2 my-4">
                <a href="cart.php?id=<?=$row['pid']?>" class="btn btn-warning bold-btn">add to cart</a>
            </div>
          </div>
        </div>
      </div>
     
    <?php
        }
    ?>
        </div>
    </div>
    <?php
    }else{
        echo "Not found";
    }

?>