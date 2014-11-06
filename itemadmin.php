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
                    <td><b>Item Details</b></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>ProductID:</td><td><input type="text" name="ProductID" disabled></td>
                </tr>
                <tr>
                    <td>ItemID:</td><td><input type="text" name="ItemID"></td>
                </tr>
                <tr>
                    <td>ColourID:</td><td><select name="ColourID">
                            <option value="Default" selected>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Size:</td><td><select name="Size">
                            <option value="Default" selected>Select</option>
                            <option value="Large">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Small">Large</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Price:</td><td><input type="text" name="Price"></td>
                </tr>
                <tr>
                    <td>Quantity in stock:</td><td><input type="text" name="QtyInStock"></td>
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
