<?php
    $con = mysqli_connect('localhost','root','','bookdb');
    $id = $_POST['id'];
    $category = $_POST['category'];
    $bookname = $_POST['bookname'];
    $membershipcard = $_POST['membershipcard'];

    $input = mysqli_query($con,"INSERT INTO bookdetails (id,category,bookname,membershipcard)VALUES('$id','$category','$bookname','$membershipcard')");
    if($input){
        echo 'Book details added in a table';
    } else {
        echo 'Error';
    }

?>