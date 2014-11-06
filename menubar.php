<?php
//session_start();
?>

<link rel="stylesheet" type="text/css" href="css/menubar.css"/>

<div class="menubar"  style="background-image: url(images/menu.png);">

    <div align="left" style=" margin-left: 100px; z-index: 1001;">
        <a href="home.php">
            <img src="images/logo.png" width="80" height="auto" alt="logo"/>
        </a>
    </div>
    <div id="menubarbody" align="right" style="margin-top: -72px; margin-right: 60px;">
        <div >
            <?php
            if (!isset($_SESSION['UserID'])) {
                ?>
                <form id="login" action="controller/login.php" method="get" >
                    Username:
                    <input name="Email" type="text" size="30" id="username" placeholder="E-Mail Address">
                    Password:
                    <input name="Password" type="password"  size="25">
                    <input type="submit" value="Login" />

                </form>
                <a href="myaccount.php">
                    <button class="button" style="background-color: #ff944d" >Register</button></a>
                <?php
            } else {
                if (isset($_SESSION['OrderID'])) {
                    ?>
                    <a href="mycart.php?OrderID=<?php echo $_SESSION['OrderID'] ?>">
                        <button class="button" style="background-color: #ff944d" >My Cart</button></a>
                    <?php
                }
                ?>
                <a href="myaccount.php?UserID=<?php echo $_SESSION['UserID'] ?>"">
                    <button class="button" style="background-color: #ff944d" ><?php echo $_SESSION['User'] ?></button></a>
                <a href="controller/logout.php">
                    <button class="button" style="background-color: #ff944d" >Logout</button></a>
                    <?php
                }
                ?>
        </div>        
    </div>
</div>