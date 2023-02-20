<!DOCTYPE html>
<!--
Exercicio02: calcule a Área e o Perimetro de um Círculo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Geometria </title>
    </head>
    <body>
        <h1>Cálculo Geométrico de um Círculo</h1>

        <form method="$GET">
            valorRaio:<br>
            <input type="text"name="num"><br><!-- receber valor1 -->
            <br>

            <input type="submit"name="btncalcular"value="Realizando Operação">

        </form>
        <br>

        <?php
        if ($_GET) {
            $raio = $_GET['num'];

            $area = (M_PI * $raio * $raio);
            $perimetro = (2 * M_PI * $raio);
            echo"<b><span style='color:blue;'> A Área do Círculo é:</span></b>".number_format($area,2);
            echo"<br><b><span style='color:red;'> O perímetro do Círculo é:</span></b>".number_format($perimetro,2);
        }
        ?>
    </body>
</html>
