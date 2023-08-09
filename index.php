<?php
require_once('header.php');
?>
        <section class="py-5 text-center container "
        style="background-image: url('img/pexels-joão-jesus-925743.jpg'); height:600px">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Million Dollar Shop</h1>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Ut facilisis est sit amet tortor viverra, eget convallis leo ornare. 
                        Nunc molestie placerat diam ut cursus. Praesent lacus lorem, semper viverra 
                        lectus ut, euismod eleifend ante. Curabitur purus diam, tristique nec justo 
                        a, vehicula aliquet est. Pellentesque vitae vierra nisi. Praesent ac est sit 
                        amet nisi lobortis rutrum tincidunt sit amet elit. Ut placerat tincidunt erat 
                        et luctus.
                         .</p>
                    <h2 class="pb-2 border-bottom">Hot Products</h2>
                    <?php
                    require_once('connection.php');
                    $sql = "SELECT * FROM `product`";

                    $c = new Connect();
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
                                <img src="images/<?php echo $row['pimage']?>"
                                class="card-img-top" alt="Laptop" width="50%"/>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><?=$row['pcatid']?></p>
                                        <!-- <p class="small text-danger"><s>$1099</s></p> -->
                                        <!-- Only apply discount in first day and day 15 of every month -->
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
                </div>
            </div>
            <div class="b-example-divider"></div>
            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                        <a href="index.php">Back to top</a>
                    </p>
                    <p>&copy; 2022-2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a
                    href="#">Terms</a></p>
                </div>
            </footer>
        </section>


    </body>
</html>