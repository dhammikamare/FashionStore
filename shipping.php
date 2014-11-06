<!DOCTYPE html> 
<html>
    <head>  
        <style> body {background-color:lightgrey} h3 {color:red} </style>
    </head> 
    <body>

        <h1 style="text-align:center">SHIPPING DETAILS</h1> 
        <h2 style="text-align:center">PROVIDE THE DETAILS REQUIRED TO COMPLETE THE ORDER</h2> 
        <h3>Compulsory details required follows with a * sign</h3>

        <form> 
            <table> 
                <tbody>

                    <tr> <td> <b>FIRST NAME*:</b> </td> <td><input type="text" name="FIRST NAME"> </td> </tr>

                    <tr> <td> <b>LAST NAME*:</b> </td> <td><input type="text" name="LAST NAME"> </td> </tr>

                    <tr> <td> <b>EMAIL ADDRESS*:</b> </td> <td><input type="text" name="EMAIL ADDRESS"> </td> </tr>

                    <tr> <td> <b>RE-ENTER E-MAIL ADDRESS*:</b> </td> <td><input type="text" name="RE-ENTER E-MAIL ADDRESS"> </td> </tr>

                    <tr> <td> <b>TELEPHONE*:</b> </td> <td><input type="text" name="TELEPHONE"> </td> </tr>

                    <tr> <td> <b>ADDRESS*:</b> </td> <td><input type="text" name="ADDRESS"> </td> </tr>

                    <tr> <td> <b>COUNTRY*:</b> </td> <td> <select name="SHIPPING COUNTRY"> <option value="AMERICA">AMERICA</option> <option value="AUSTRALIA">AUSTRALIA</option> <option value="BRAZIL">BRAZIL</option> <option value="BERMUDA">BERMUDA</option> <option value="CANADA">CANADA</option> <option value="SYRIA">SYRIA</option> <option value="SRILANKA">SRILANKA</option> </select> </td> </tr>

                    <tr> <td> <b>CITY*:</b> </td> <td><input type="text" name="CITY"> </td> </tr>

                    <tr> <td> <b>ZIP/PIN CODE*:</b> </td> <td><input type="text" name="ZIP/PIN CODE"> </td> </tr>

                    <tr> <td> <b>STATE*:</b> </td> <td><input type="text" name="STATE"> </td> </tr>

                    <tr> <td> <hr> </td> </tr>

                    <tr> <td> <b>ADVANCED SHIPPING OPTIONS:</b> </td> <td> <ul style="list-style-type:disc"> <li><input type="radio" name="Standard shipping" value="Standard shipping">Standard shipping </li> <li><input type="radio" name="Expedited Shipping" value="Medium">Expedited Shipping </li> <li><input type="radio" name="Express One day shipping" value="Large">Express One day shipping(conditions apply) </li> </ul> </td> </tr>

                    <tr> <td> <b>(please note that if this section is not completed the delivery will follow standard shipping)</b> </td> </tr>

                    <tr> <td> <hr> </td> </tr>

                    <tr> <td><b>In case of emergency in delivery please contact(close trustworthy person details preferable)*:</b> </td> <td> <b>Name:</b> <input type="text" name="Name: "><br>

                            <b>Telephone : </b><input type="text" name="Telephone:"><br> </td> </tr>

                    <tr> <td> <hr> </td> </tr>

                    <tr> <td> <b>Extra things that requires attention:</b> </td> <td> <textarea rows="3" cols="60"></textarea><br>

                            <input type="button" value="Place Order"> </td> </tr> 
                </tbody>
            </table>
        </form>

    </body>
</html>