<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/DRTouristaNEW/main.css">
        <title>LOGIN</title>
        <style>
            @font-face {
            font-family: Aloja;
            src: url(assets/fonts/Aloja-Light.woff);
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="header">
                <div class="logo"><img class="drtlogo" src="assets/img/DRT_LOGO-02.webp" alt=""></div>
                <div class="drtourista">DRTourista
                    <div class="drtmun">MUNICIPALITY OF<br>DO&#209;A REMEDIOS TRINIDAD</div>
                </div>
            </div>
        </div>
        <div class="loginform">
            <form action="login_access.php" method="post">
                <table class="login_tbl">
                    <tr>
                        <th colspan="2" style="text-align: center; font-size:30px; font-weight: bold;">LOGIN</th>
                    </tr>
                    <tr><td colspan='2'><?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?></td></tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr><td colspan="2" style="text-align: center;"><input name="add" type="submit" value="Login"></td></tr>
                    <tr><td colspan="2" style="text-align: center;"><a href="">Forgot Password?</a></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>
