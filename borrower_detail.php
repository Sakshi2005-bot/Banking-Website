<?php
include('conn.php');
$uname =$_GET['uname'];
$sql="select customer_name, customer_street,
customer_city from customer where
customer_name='$uname'";
$res=mysqli_query($conn,$sql);
$cust_name=''; //blank variable to store information
$addr='';
$city='';
if($result=mysqli_fetch_assoc($res))
{$cust_name=$result['customer_name'];
$addr=$result['customer_street'];
$city=$result['customer_city'];} 
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
                        <td>Home |</td>
                        <td> About Us |</td>
                        <td><a href="http://localhost/lab7/login.php"> Login |</a></td>
                        <td><a href="http://localhost/lab7/assign3.php"> Open A/C </a></td>
                    </tr>
                </table>
            </nav>
        </div>
    </header>
    <center>
    <div class="cust_deets">
        <p class="para">Customer Name: <?php echo $cust_name; ?><br></p>
        <p class="para">Address: <?php echo $addr; ?><br></p>
        <p class="para">City: <?php echo $city; ?><br></p>
    </div>
    </center>
</body>