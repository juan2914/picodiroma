<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: inicio.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to inicio.php"); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
    ($_SESSION['user']);
    $query = " 
        SELECT 
            (SELECT persona_nombre from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS nombre ,
            (SELECT persona_paterno from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS paterno ,
            (SELECT persona_materno from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS materno ,
            (SELECT persona_telefono from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS telefono,
            (SELECT persona_rfc from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS rfc,
            (SELECT persona_correo from persona where idpersona = (SELECT idpersona from cliente where idcliente = reg.idcliente)) AS correo,
            clabe,
            (SELECT dom_calle from domicilio where iddomicilio = (SELECT idpersona from cliente where idcliente = reg.idcliente)) as calle,
            (SELECT dom_numero from domicilio where iddomicilio = (SELECT idpersona from cliente where idcliente = reg.idcliente)) as numero,
            (SELECT dom_colonia from domicilio where iddomicilio = (SELECT idpersona from cliente where idcliente = reg.idcliente)) as colonia,
            (SELECT dom_alcaldia from domicilio where iddomicilio = (SELECT idpersona from cliente where idcliente = reg.idcliente)) as alcaldia,
            contrato,
            monto,
            (SELECT descripcion FROM moneda WHERE IDMONEDA = reg.moneda) AS moneda,
            apertura,
            proximo_pago,
            monto_proximo 
        FROM registro reg
        where reg.idcliente = ".$_SESSION['user']['idcliente']."
    "; 

     
    try 
    { 
        // These two statements run the query against your database table. 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) 
    { 
        // Note: On a production website, you should not output $ex->getMessage(). 
        // It may provide an attacker with helpful information about your code.  
        die("Failed to run query: " . $ex->getMessage()); 
    } 
         
    // Finally, we can retrieve all of the found rows into an array using fetchAll 
    $rows = $stmt->fetchAll(); 
?> 

<!DOCTYPE html>
<html>
<?php
  require("static/header.php"); 
?>
    <body>
<div class="wrapper">


<br><br>
<div class="=container text-left ml-5 mt-5">
     <?php
      foreach($rows as $row): ?> 
            <h3><p id="modal-btn" style="cursor: pointer;">Hola <a href="#"><?php echo $row['nombre'].' '.$row['paterno'].' '.$row['materno'] ; ?></a></p></h3>
<?php endforeach; ?> 
</div>

<div id="my-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
      <div class="modal-body">
        <p><?php echo $row['nombre'].' '.$row['paterno'].' '.$row['materno'].', '.$row['rfc'] ; ?></p>
        <p><?php echo $row['telefono'] . ', '. $row['correo']?></p>
        <p><?php echo $row['calle'].' '.$row['numero'].' '. $row['colonia'].' '. $row['alcaldia'] ?></p>
        <p><?php echo $row['clabe']?></p>

      </div>
    </div>
  </div>

<script type="text/javascript">
        // Get DOM Elements
        const modal = document.querySelector('#my-modal');
        const modalBtn = document.querySelector('#modal-btn');
        const closeBtn = document.querySelector('.close');

        // Events
        modalBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', outsideClick);

        // Open
        function openModal() {
          modal.style.display = 'block';
        }

        // Close
        function closeModal() {
          modal.style.display = 'none';
        }

        // Close If Outside Click
        function outsideClick(e) {
          if (e.target == modal) {
            modal.style.display = 'none';
          }
        }
</script>


<div class="container mt-5 table-shadow">
    <div class="container text-left">
    </div>

        <div class="table-responsive text-nowrap text-center">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col"># Contrato</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Moneda</th>
                  <th scope="col">Apertura</th>
                  <th scope="col">Proximo Pago</th>
                  <th scope="col">Monto Proximo Pago</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($rows as $row): ?> 
                <tr> 
                        <th scope="row"><a href="detalles.php"><?php echo $row['contrato']; ?></a></th>
                        <td>$<?php echo $row['monto']; ?></td>
                        <td><?php echo $row['moneda']; ?></td>
                        <td><?php echo $row['apertura']; ?></td>
                        <td><?php echo $row['proximo_pago']; ?></td>
                        <td>$<?php echo $row['monto_proximo']; ?></td>                
                  
                </tr>
              <?php endforeach; ?> 
              </tbody>
            </table>

          </div><!--
            <div class="float-right mt-4 button-shadow">
                <button type="button" name="registro" class="btn btn-outline-primary">
                    <a href="registro.jsp">Registrar Nuevo</a>
                </button>
            </div>-->
        </div>
</div>
    <?php
  require("static/footer.php"); 
?>
            </body>


</html>