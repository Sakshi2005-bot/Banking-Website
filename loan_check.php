<?php
include('conn.php');

$loan_no = $_POST['loan_no'];
$cname = $_POST['name'];
$branchn = $_POST['branch_name'];
$amount = $_POST['amount'];

if ($_POST['action'] == 'Register') {
    $sql = "INSERT INTO loan (loan_no, branch_name, amount) VALUES ('$loan_no', '$branchn', '$amount')";
    $sql1 = "INSERT INTO borrower (customer_name, loan_number) VALUES ('$cname', '$loan_no')";
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
        echo "New loan registered successfully.";
        header('location:asssignment7.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} 
elseif ($_POST['action'] == 'Update') {
    $sql = "UPDATE loan SET branch_name='$branchn', amount='$amount' WHERE loan_no='$loan_no'";
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
