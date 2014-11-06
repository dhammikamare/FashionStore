<link rel="stylesheet" type="text/css" href="css/search.css"/>
<div class="borderaround" >
    <form action="home.php">
        <table>
            <tr>
                <td class="h1" style="border: 5px solid #dc143c ; background-color: #dc143c"><b>Find your choice: </b></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <table>
                        <th><b>By type of wear:</b></th>
                        <tr><td><input type="radio" name="TypeOfWear" value="Formal">Formal<br></td></tr>
                        <tr><td><input type="radio" name="TypeOfWear" value="Casual">Casual<br></td></tr>
                        <tr><td><input type="radio" name="TypeOfWear" value="Party">Party<br></td></tr>
                        <tr><td><input type="radio" name="TypeOfWear" value="Sporty">Sporty<br></td></tr>
                    </table>
                </td>	
                <td>
                    <table>
                        <th><b>By Category:</b></th>
                        <tr><td><input type="radio" name="Category" value="Women">Women<br></td></tr>
                        <tr><td><input type="radio" name="Category" value="Men">Men<br></td></tr>
                        <tr><td><input type="radio" name="Category" value="Kids">Kids<br></td></tr>
                        <tr><td><br></td></tr>
                    </table>
                </td>
                <td>
                    <table>
                        <th><b>By Material:</b></th>
                        <tr><td><input type="radio" name="Material" value="Cotton">Cotton<br></td></tr>
                        <tr><td><input type="radio" name="Material" value="Polyester">Polyester<br></td></tr>
                        <tr><td><input type="radio" name="Material" value="Silk">Silk<br></td></tr>
                        <tr><td><br></td></tr>
                    </table>
                </td>	
                <td>
                    <table>
                        <th><b>By Variety:</b></th>
                        <tr>
                            <td>
                                <select name="Variety">
                                    <option value="null">Choose</option>
                                    <option value="Shirt">Shirt</option>
                                    <option value="TShirt">T-Shirt</option>
                                    <option value="Dress">Dress</option>
                                    <option value="Jackets">Jackets</option>
                                    <option value="Trouser">Trouser</option>
                                    <option value="Shorts">Shorts`</option>
                            </td></tr>

                    </table>
                </td>

                <!--td><b>By price range:</b></td>
                <td>
                    <select name="Price">
                        <option value="null">Choose</option>
                        <option value="10">0-10$</option>
                        <option value="20">10-20$</option>
                        <option value="30">20-30$</option>
                        <option value="40">30-40$</option>
                        <option value="50">40-50$</option>
                        <option value="60">50-60$</option>
                        <option value="70">60-70$</option>
                        <option value="80">70-80$</option>
                        <option value="90">80-90$</option>
                        <option value="100">90-100$</option>
                    </select>
                </td-->
                <td><a href="items.php">
                        <button class="button" style="background-color: #dc143c" >Show ALL</button></a></td>
                <td><input class ="button" style="background-color: #dc143c" type="submit" value="Search"></td>
            </tr>
        </table>
    </form>
</div>