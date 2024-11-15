<?php 
include('conn.php');
$custname =$_POST['cname'];
$addr =$_POST['address'];
$city =$_POST['city'];
$sql="insert into customer (CUSTOMER_NAME,
CUSTOMER_STREET, CUSTOMER_CITY) values ( '" .
$custname . "', '" . $addr . "','" . $city . "')";
if (mysqli_query($conn, $sql)) {
    // Display the success message
    echo 'Customer added successfully';

    sleep(3);

    header('Location: bank.html');
    exit();
} else {
    echo 'Error: ';
    header('Location: asssignment7.php');
}
?>