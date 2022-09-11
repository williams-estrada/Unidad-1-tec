<?php
    echo "<form action=\"pagar.php\" method=\"POST\">
    <a href=\"index.php\"><input type=\"button\" value=\"Cerrar Sesion\" style=\"height:40px;width:110px\"></a>
    <h3 align=\"center\"><br/>PRODUCTOS</h3>
        <table align=\"center\">
            <thead>
                <tr>
                    <th><h4>Hamburguesa</h4></th>
                    <th><h4>CocaCola</h4></th>
                    <th><h4>PapasFritas</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src=\"Hamburguesa.png\"
                    width=\"200\"
                    height=\"200\"><br/>
                    Descripción: Comida<br/>
                    Precio: $80<br/>
                    Cantidad: 
                    <input type=\"number\" value=\"0\" name=\"pComida\"
                    min=\"0\" max=\"150\">
                    </td>

                    <td><img src=\"CocaCola.png\"
                    width=\"200\"
                    height=\"200\"><br/>
                    Descripción: Bebida<br/>
                    Precio: $20<br/>
                    Cantidad: 
                    <input type=\"number\" value=\"0\" name=\"pBebida\"
                    min=\"0\" max=\"150\">
                    </td>

                    <td><img src=\"PapasFritas.png\"
                    width=\"200\"
                    height=\"200\"><br/>
                    Descripción: Comida Rapida<br/>
                    Precio: $40<br/>
                    Cantidad: 
                    <input type=\"number\" value=\"0\" name=\"pComidaR\"
                    min=\"0\" max=\"150\">
                    </td>
                </tr>
            </tbody>
        </table>
        <br/>
        <p align=\"center\"><input type=\"submit\" value=\"Total a Pagar\" style=\"height:40px;width:110px\"></p><br/>
    </form>
    ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/menu.css">
</head>
</html>