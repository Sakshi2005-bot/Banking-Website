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
            <table class="table">
                    <tr>
                        <td><a href="bank.html"> Home </a>|</td>
                        <td><a href="aboutus.html"> About Us </a></td>
                    </tr>
                </table>
        </div>
    </header>

    <div class="login_pg">
    <h2 id="login_title">Branch</h2>
    <form action="branch_check.php" method="post">
        <label for="lno">Branch Name</label>
        <input type="text" id="bname" name="bname" required><br>
        
        <label for="branch">Branch City</label>
        <input type="text" id="bcity" name="bcity" required><br>

        <label for="branch">Assets</label>
        <input type="text" id="assets" name="assets" required><br>
        
        <div class="reg">
            <input type="submit" value="Register" name="action" id="login_btn">
            <input type="submit" value="Update" name="action" id="login_btn">
        </div>
    </form>
</div>


</body>

</html>
