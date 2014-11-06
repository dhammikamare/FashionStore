<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FashionStar.com  *Your Only Online Fashion Store*</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript">
<?php
if (isset($_GET['msg'])) {
    ?>
                function msg() {
                    alert("<?php echo $_GET['msg'] ?>");
                }
<?php }
?>
        </script>
    </head>
    <body onload="msg()">
    <center>
        <div class="menubar" style="background-image: url(images/menu-back.png);">
            <?php include("menubar.php"); ?>
        </div>
        <div class="container" style=" padding-top: 60px; ">
            <div  class="round_border" id="header" style=" width:980px; height: 170px; 
                  background-image: url(images/header.jpg);">
            </div>
            <div class="round_border" id="mybody" style=" background-color: whitesmoke; 
                 width: 980px; height: auto; overflow: auto; margin: 5px 0 5px 0; text-align: left; min-height: 350px;">
                <center>
                    <?php include("user.php"); ?>
                </center>
            </div>
            <div id="footer" style="float: bottom; height: 80px; ">
                <?php include("footer.php"); ?>
            </div>
        </div>
    </center>
</body>
</html>
