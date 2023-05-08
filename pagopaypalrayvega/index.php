<!DOCTYPE html>
<html>
<head>
  <title>pagos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

  <form id="main-contact-form" class="contact-form" name="contact-form" action="correo.php" method="POST">
      <div class="col-sm-5 col-sm-offset-1">
          <div class="form-group">
             <label>Nombre :</label>
             <input type="text" id="cardholder" placeholder="Nombre del titular">
           </div>

           <div class="form-group">
              <label>Email :</label>
              <input type="text" id="cardholder" placeholder="xxxx@ejemplo.com" >
           </div> 

           <div class="form-group">
               <label>monto a pagar :</label>
               <input type="number" id="monto-pagar" placeholder="$">           </div>
 
           <div id="paypal-button-container">
                <!-- <button>Proceed</button> -->

            </div>

            </body>
    <script src="script.js"></script>
</html>