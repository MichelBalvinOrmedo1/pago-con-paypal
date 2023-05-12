<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="estilos/estilospaypal.css">

</head>

<body>
    <!-- SCRIPT PAYPAL -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <div class="container">
        <div class="form">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <label for="cardholder">Nombre</label>
                <input type="text" id="nombre" placeholder="Nombre del titular">
                <label for="cardholder">Correo</label>
                <input type="text" id="correo" placeholder="xxxx@ejemplo.com">
                <label for="cardholder">Monto a Pagar</label>
                <input type="number" id="monto-pagar" placeholder="$">


                <div id="paypal-button-container">
                    <!-- <button>Proceed</button> -->

                </div>
            </form>
        </div>
    </div>
</body>
<script src="scrip.js"></script>

</html>