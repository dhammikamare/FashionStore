<?php
//session_start();
?>
<!--link rel="stylesheet" type="text/css" href="css/user.css"/-->
<div class="borderaround" >
    <!--div class="h1">
        <font size="5"><b>User Registration</b></font></div-->
    <form name="user" action="controller/userregister.php" method="get">
        <table>
            <tr>
                <td class="h1">
                    <font size="5"><b>User Registration</b></br></font></td>
                <td></td>
            </tr>
            <?php
            $Title = '';
            $FirstName = '';
            $LastName = '';
            $Address = '';
            $Email = '';
            $Password = '';
            $Telephone = '';
            $Gender = '';
            $TypeOfWear = '';
            if (isset($_GET['UserID'], $_SESSION['UserID'])) {
                //if ($_GET['UserID'] == $_SESSION['UserID']) {
                include("controller/dbconnect.php");
                $sql = "SELECT * FROM USER WHERE UserID = " . $_GET['UserID'] . "";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)) {
                    $Title = $row['Title'];
                    $FirstName = $row['FirstName'];
                    $LastName = $row['LastName'];
                    $Address = $row['Address'];
                    $Email = $row['Email'];
                    $Password = $row['Password'];
                    $Telephone = $row['Telephone'];
                    $Gender = $row['Gender'];
                    $TypeOfWear = $row['TypeOfWear'];
                }
                mysql_close($con);
                echo '<input id="UserID" type="hidden" name="UserID" value=' . $_GET['UserID'] . ' >';
                //}
            }
            ?>
            <tr>
                <td><b>Title:</b></td>		
                <td><input type="text" name="Title" value="<?php echo $Title ?>"><br></td></tr>
            <tr>
                <td><b>First Name:</b></td>	
                <td><input type="text" name="FirstName" value="<?php echo $FirstName ?>"><br></td></tr>
            <tr>
                <td><b>Last Name:</b></td>	
                <td><input type="text" name="LastName" value="<?php echo $LastName ?>"><br></td></tr>
            <tr>
                <td><b>Address:</b></td>	
                <td><input type="text" name="Address" value="<?php echo $Address ?>"><br></td></tr>
            <tr>
                <td><b>Email:</b></td>	
                <td><input type="text" name="Email" value="<?php echo $Email ?>"><br></td></tr>
            <tr>
                <td><b>Password:</b></td>	
                <td><input type="password" name="Password" value="<?php echo $Password ?>"><br></td></tr>
            <tr>
                <td><b>Telephone:</b></td>	
                <td><input type="numbers" name="Telephone" value="<?php echo $Telephone ?>"><br></td></tr>
            <tr>
                <td><b>Gender:</b></td>	
                <td><b>Male</b> <input type="radio" name="Gender" value="M"  <?php
                    if ($Gender == 'M') {
                        echo 'checked="true"';
                    }
                    ?> >  
                    <b>Female</b>  <input type="radio" name="Gender" value="F" <?php
                    if ($Gender == 'F') {
                        echo 'checked="true"';
                    }
                    ?>><br></td></tr>
            <tr>
                <td><b>Type of wear:</b></td>	
                <td><select name="TypeOfWear">
                        <option value="Formal">Formal</option>
                        <option value="Casual">Casual</option>
                        <option value="Sporty">Sporty</option>
                        <option value="Party">Party</option>					
                    </select>
            </tr>
            <tr>
                <td><a href="home.php">
                        <button class="button" style="background-color: #ff944d" >Cancel</button></a></td>
                <td><input class ="button" style="background-color: #ff944d" type="submit" value="Submit"></td></tr>
        </table>
    </form>
</div>