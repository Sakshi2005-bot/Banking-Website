<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC Bank</title>
    <link rel="stylesheet" href="assign3styles.css"/>
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
                        <td><a href="Bank.html">Home </a>|</td>
                        <td><a href="aboutus.html"> About Us </a>|</td>
                        <td><a href="http://localhost/lab7/login.php"> Login </a></td>
                    </tr>
                </table>
            </nav>
        </div>
    </header>
    <div class="login_pg">
        <h2 id="login_title"><center>Create Account</center></h2>
        <form action="insert_customer.php" method="post">
            <label for="cname"><b>Customer Name:</b></label>
            <input type="text" id="cname" name="cname" required><br>
            <label for="address"><b>Address:</b></label>
            <input type="text" id="address" name="address" required><br>
            <label for="city"><b>City:</b></label>
            <input type="text" id="city" name="city" required><br>
            <center><input type="submit" value="Create" id="login_btn"></center>
        </form>
    </div>

</body>

</html>