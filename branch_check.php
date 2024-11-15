<?php
include('conn.php');

$bname = $_POST['bname'];
$bcity = $_POST['bcity'];
$assets = $_POST['assets'];

if ($_POST['action'] == 'Register') {
    $sql = "INSERT INTO branch (branch_name, branch_city, assestS) VALUES ('$bname', '$bcity', '$assets')";
    if (mysqli_query($conn, $sql)) {
        echo "New loan registered successfully.";
        header('location:asssignment7.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} 
elseif ($_POST['action'] == 'Update') {
    $sql = "UPDATE branch SET branch_city='$bcity', assestS='$assets' WHERE branch_name = '$bname'";
    if (mysqli_query($conn, $sql)) {
        echo "Loan details updated successfully.";
        header('location:asssignment7.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid action.";
}
?>
