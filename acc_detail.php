<?php
include('conn.php');
$anum =$_GET['anum'];
$sql="select acc_number, branch_name, balance from account where acc_number='$anum'";
$res=mysqli_query($conn,$sql);
$acc_number=''; //blank variable to store information
$bname='';
$bal='';
if($result=mysqli_fetch_assoc($res))
{$acc_number=$result['acc_number'];
$bname=$result['branch_name'];
$bal=$result['balance'];} 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC Bank</title>
    <link rel="stylesheet" style="text/css" href="deetsstyle.css"/>
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
                        <td> <a href="aboutus.html">About Us </a>|</td>
                        <td><a href="http://localhost/lab7/assign3.php"> Open A/C </a></td>
                    </tr>
                </table>
            </nav>
        </div>
    </header>
    <center>
    <div class="cust_deets">
        <p class="para">Account Number: <?php echo $acc_number; ?><br></p>
        <p class="para">Branch Name: <?php echo $bname; ?><br></p>
        <p class="para">Balance: <?php echo $bal; ?><br></p>
    </div>
    </center>
</body>