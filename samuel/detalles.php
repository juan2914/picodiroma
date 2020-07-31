<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: index.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to index.php"); 
    } 
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
      foreach($rows as $row): 
?>
<!DOCTYPE html>
<html>
<?php
  require("static/header.php"); 
?><br>
    <body onload="changeColor()">
        <div class="wrapper">
<div class="container border border-dark mt-5">
  <div class="portapagare" >
    <object id="pdfviewer" data="" type="application/pdf" width="100%" height="100%"></object> 
  </div> 
  <?php endforeach; ?> 

  <script type="text/javascript">
    function changeColor(){
    var b = document.getElementById("pdfviewer");
    b.setAttribute("data", "pdf/"+<?php echo$row["contrato"]?>+".pdf");}
  </script>

<a href="principal.php"><button class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" name ="btnChange">
                      Volver</button></a>
</div>
</div>
   <!-- Footer -->
<?php
  require("static/footer.php"); 
?>
    </body>
    

</html>
