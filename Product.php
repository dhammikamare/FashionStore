<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/product.css"/>
    </head>
    <body>
        <div id="borderaround" >
            <table  id="h1">
                <tr>
                    <td><b>Product Details</b></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>ProductID:</td><td><input type="text" name="ProductID"></td>
                </tr>
                <tr>
                    <td>Name:</td><td><input type="text" name="Name"></td>
                </tr>
                <tr>
                    <td>Brand:</td><td><select name="Brand">
                            <option value="Default" selected>Select</option>
                            <option value="Love21">Love 21</option>
                            <option value="Forever21">Forever 21</option>
                            <option value="21Men">21 Men</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Variety:</td><td><select name="Brand">
                            <option value="Default" selected>Select</option>
                            <option value="Dresses">Dresses</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Jeans">Jeans</option>
                            <option value="Shirts">Shirts</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><input type="radio" name="Category" value="Male">Small
                        <input type="radio" name="Category" value="Female">Medium</td>
                </tr>
                <tr>
                    <td>Type of wear:</td><td><select name="TypeOfWear">
                            <option value="Default" selected>Select</option>
                            <option value="Formal">Formal</option>
                            <option value="Casual">Casual</option>
                            <option value="Sports">Sports</option>
                            <option value="Party">Party</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Material:</td><td><select name="Material">
                            <option value="Default" selected>Select</option>
                            <option value="Polyester">Polyester</option>
                            <option value="Silk">Silk</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Front Image:</td><td><input type="text" name="FrontImg"></td>
                </tr>
                <tr>
                    <td>Back Image:</td><td><input type="text" name="BackImg"></td>
                </tr>
                <tr>
                    <td>Description:</td><td><input type="text" name="Description"></td>
                </tr>

            </table>
            <table id="buttons">
                <tr> 
                    <td><input type="submit" value="Insert" id="insert"></td>
                    <td><a href="delete.php?ItemId=24"><button type="button" id="delete">Delete</button></a></td>
                    <td><input type="submit" value="Update" id="update"></td>
                </tr>
            </table>
        </div>
    </body>
</html>
