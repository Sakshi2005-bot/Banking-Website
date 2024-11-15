<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC Bank - Login</title>
    <link rel="stylesheet" href="assig4styles.css"/>
</head>

<body link="#F3F3F3">

    <header>
        <div class="topbanner">
            <img width="250" height="50" class="logo1" src="bank.png" alt="Bank Logo" id="logo">
            <h1 class="name"><b>HDFC BANK</b></h1>
            <nav>
            <table class="table">
                    <tr>
                        <td><a href="bank.html"> Home </a>|</td>
                        <td><a href="aboutus.html"> About Us </a></td>
                    </tr>
                </table>
            </nav>
        </div>
    </header>

    <div class="login_pg">
    <h2 id="login_title">Loan</h2>
    <form action="loan_check.php" method="post">
        <label for="lno">Loan Number</label>
        <input type="text" id="loan_no" name="loan_no" required><br>
        
        <label for="branch">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="branch">Branch</label>
        <input type="text" id="branch" name="branch_name" required><br>
        
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount" required><br>
        
        <div class="reg">
            <input type="submit" value="Register" name="action" id="login_btn">
            <input type="submit" value="Update" name="action" id="login_btn">
        </div>
    </form>
</div>


</body>

</html>
