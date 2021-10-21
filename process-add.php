<?php
    $name=$_POST['name'];
    $type=$_POST['type'];
    $barcode=$_POST['barcode'];
    $dose=$_POST['dose'];
    $code=$_POST['code'];
    $cost_price=$_POST['cost_price'];
    $selling_price=$_POST['selling_price'];
    $expiry=$_POST['expiry'];
    $company_name=$_POST['company_name'];
    $production_date=$_POST['production_date'];
    $expiration_date=$_POST['expiration_date'];
    $place=$_POST['place'];
    $quantity=$_POST['quantity'];

    include 'config.php' ;
    $sql = "INSERT INTO drugs (name, type, barcode, dose, code,cost_price,selling_price,
    expiry,company_name,production_date,expiration_date,place,quantity)
    VALUES ('$name','$type',' $barcode',' $dose','$code','$cost_price','$selling_price',' $expiry',
    ' $company_name','$production_date',' $expiration_date','$place',' $quantity')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }

    mysqli_close($conn);

?>