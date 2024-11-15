<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC Bank</title>
    <link rel="stylesheet" style="text/css" href="assig4styles.css"/>
    </style>
</head>

<body link="#F3F3F3">

<header>
        <div class="topbanner">
            <img width="250" height="50" class="logo1" src="bank.png" alt="Bank Logo" id="logo">
            <center>
                <h1 class="name"><b>HDFC BANK</b></h1>
            </center>
            <nav>
                <table class="table">
                    <tr>
                        <td><a href="bank.html">Home </a>|</td>
                        <td><a href="aboutus.html"> About Us </a>|</td>
                        <td><a href="http://localhost/lab7/assign3.php"> Open A/C </a>|</td>
                        <td><a href="loan.php"> Loan </a>|</td>
                        <td><a href="branch.php"> Branch </a></td>
                    </tr>
                </table>
            </nav>
        </div>
    </header>
    <center>
    <h2 id="acc_title">Dashboard</h2>
    </center>
    <div class="dashboard">
            <?php
            include('conn.php');
            $sql="select customer_name, depositor.account_no, balance from depositor
            inner join account on depositor.account_no = account.acc_number" ;
            $res=mysqli_query($conn, $sql);
            //replace code for table in html page with the following code:
            echo '<table border="1"><caption><b>Depositors</b></caption><tr><th>Name</th><th>A/C No.</th><th>
            Balance</th><th>Details</th></tr>';
            while($result=mysqli_fetch_assoc($res))
            {
            echo '<tr><td>'.$result['customer_name'] . '</td><td>'.$result['account_no'].'</td><td>'.$result['balance'].'</td><td><a href="depositor_detail.php?uname='.$result['customer_name'].' "class="Detailslink">View Details</a></td></tr>';
            }
            echo '</table>';
            ?>
            <?php
            include('conn.php');
            $sql="select customer_name, loan_number, amount from borrower
            inner join loan on borrower.loan_number = loan.loan_no" ;
            $res=mysqli_query($conn, $sql);
            echo '<table border="1"><caption><b>Borrowers</b></caption><tr><th>Name</th><th>A/C No.</th><th>Amount</th><th>Details</th></tr>';
            while($result=mysqli_fetch_assoc($res))
            {
            echo '<tr><td>'.$result['customer_name'].'</td><td>'.$result['loan_number'].'</td><td>'.$result['amount'].'</td><td><a href="borrower_detail.php?uname='.$result['customer_name'].' " class="Detailslink">View Details</a></td></tr>';
            }
            echo '</table>';
            ?>
    </div>
    <div class="dashboard2">
            <?php
            include('conn.php');
            $sql="select acc_number, branch_name, balance from account" ;
            $res=mysqli_query($conn, $sql);
            //replace code for table in html page with the following code:
            echo '<table border="1"><caption><b>Account Details</b></caption><tr><th>A/C No.</th><th>Branch</th><th>
            Balance</th><th>View Details</th></tr>';
            while($result=mysqli_fetch_assoc($res))
            {
            echo '<tr><td>'.$result['acc_number'] . '</td><td>'.$result['branch_name'].'</td><td>'.$result['balance'].'</td><td><a href="acc_detail.php?anum='.$result['acc_number'].' "class="Detailslink">View Details</a></td></tr>';
            }
            echo '</table>';
            ?>
            <?php
            include('conn.php');
            $sql="select branch_name, branch_city, assestS from branch" ;
            $res=mysqli_query($conn, $sql);
            echo '<table border="1"><caption><b>Branch Details</b></caption><tr><th>Branch Name</th><th>City</th><th>Assets</th></tr>';
            while($result=mysqli_fetch_assoc($res))
            {
            echo '<tr><td>'.$result['branch_name'].'</td><td>'.$result['branch_city'].'</td><td>'.$result['assestS'].'</td></tr>';
            }
            echo '</table>';
            ?>
    </div>

</body>

</html>