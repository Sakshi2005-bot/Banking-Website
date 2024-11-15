<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                        <td>Home |</td>
                        <td> About Us |</td>
                        <td> Login</td>
                    </tr>
                </table>
            </nav>
        </div>
    </header> 
    <div class="login_pg">
        <h2 id="login_title"><center>Login</center></h2>
        <center>
            <h5 class="inv">Invalid Username or Password</h5>
        <form action="login_check.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="userid"><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="pass"><br><br>
            <input type="submit" value="Login Now" id="login_btn">
        </form>
        </center>
    </div>

</body>

</html>