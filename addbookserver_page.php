<?php
//addserver_page.php
include("data_class.php");


/* if(isset($_POST['branch']) || isset($_POST['bookprice'])){
  $branch=$_POST['branch'];
  $bookprice=$_POST['bookprice'];
} */

$isbnno=$_POST['isbnno'];

$bookname=$_POST['bookname'];
$bookdetail=$_POST['bookdetail'];
$bookaudor=$_POST['bookaudor'];
$bookpub=$_POST['bookpub'];
@$branch=$_POST['branch'];
@$bookprice=$_POST['bookprice'];
$bookquantity=$_POST['bookquantity'];




if (move_uploaded_file($_FILES["bookphoto"]["tmp_name"],"uploads/" . $_FILES["bookphoto"]["name"])) {

    $bookpic=$_FILES["bookphoto"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addbook($isbnno,$bookpic,$bookname,$bookdetail,$bookaudor,$bookpub,$branch,$bookprice,$bookquantity);
  } 
  else {
     echo "File not uploaded";
  }