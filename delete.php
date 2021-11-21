<?php
    $con = mysqli_connect('localhost','root','','bookdb');

    $check = mysqli_query($con,"DELETE FROM bookdetails WHERE id=".$_POST['id']);

    if($check > 0){
        echo "Data added";
    }else{
        echo "Error";
    }

?>
<!-- WHERE id=".$_POST['id']); -->