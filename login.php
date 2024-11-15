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
        <h2 id="login_title">Login</h2>
        <form action="login_check.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="userid" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required><br><br>
            <input type="submit" value="Login Now" id="login_btn">
        </form>
    </div>

</body>

</html>
