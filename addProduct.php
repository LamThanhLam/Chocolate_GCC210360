<?php
require_once('header.php');
require_once('connection.php');
if(isset($_POST['btnAdd'])){
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pinfo = $_POST['pinfo'];
    $pdate = $_POST['pdate'];
    $quan = $_POST['pquan'];
    // $pimage = $_POST['pimage'];
    $pcatid = $_POST['pcatid'];

    $image = str_replace(' ','-',$_FILES['pimage']['name']);
    $flag = move_uploaded_file($_FILES['pimage']['tmp_name'],'./images/'.$image);

    if($flag){
        $sql = "INSERT INTO `product`(`pname`, `pprice`, `pinfo`, `pimage`, `pquan`, `pcatid`, `pdate`) VALUES 
        (?,?,?,?,?,?,?)";
        
        $c = new Connect();
        $dblink = $c->connectToPDO();
        $re = $dblink->prepare($sql);
        $valueArray = [$pname, $pprice, $pinfo,$image,$quan, $pcatid,$pdate];
        $stmt = $re->execute($valueArray);
        if($stmt) echo "Congrats";
    }else{
        echo "Image is copied failed";
    }

    
}

?>
        <div class="container">
            <h2>Adding Product</h2>
            <form action="" name="formReg" method="POST"
            enctype="multipart/form-data"
            >
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Product name:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="pname">
                    </div>
                    <!-- <label for="" class="col-lg-4">Password:</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control">
                    </div> -->
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Price:</label>
                    <div class="col-lg-8">
                        <input type="number" class="form-control" name="pprice">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Description:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="pinfo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Date:</label>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" name="pdate">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Quantity:</label>
                    <div class="col-lg-8">
                        <input type="number" class="form-control" name="pquan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Image:</label>
                    <div class="col-lg-8">
                        <input type="file" class="form-control" name="pimage">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-lg-2">Cat Id:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="pcatid">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="d-grid mx-auto col-3">
                        <input type="submit" value="Add" class="btn btn-primary" name="btnAdd">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>