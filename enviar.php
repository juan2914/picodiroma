<!DOCTYPE html>
<html>
<head>
<title>Enviar Email con Bootstrap Modal Popup Ajax & PHP</title>
<!-- Último minificado bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery libraria incluida -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Último minificado bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php 

require("./conexion.php");   


?>
<style>
.btn-success{margin: 10px;}
</style>



 <?php    //$_SESSION['carrito'] = array(); 
          
if(!empty($_GET['id'] )){
  if(!empty($_SESSION['carrito'])){
    array_push($_SESSION['carrito'], $_GET['id'] );
     /*     $tam = count($_SESSION['carrito'], COUNT_RECURSIVE);
      $i=0;

      for($i; $i< $tam ; $i++){
        print_r($_SESSION['carrito'][$i].', ');
      }*/
  }
  else{
    $_SESSION['carrito'] = array();
    array_push($_SESSION['carrito'], $_GET['id'] );
    /*$tam = count($_SESSION['carrito'], COUNT_RECURSIVE);
      $i=0;

      for($i; $i< $tam ; $i++){
        print_r($_SESSION['carrito'][$i].', ');
      }*/
  }
  }  $tam = count($_SESSION['carrito'], COUNT_RECURSIVE);

      //print_r($_SESSION['carrito']);        
   ?>

           <form class="row md-12">
            <div class="site-blocks-table ">
               <table class="table  text-center" >
                <thead>
               
                    <th class="product-thumbnail col-1">Imagen</th>
                     <th class="product-quantity col-1">Nombre</th>
                    <th class="product-name col-1">Cuadro numero</th>
                    <th class="product-price col-1">Precio</th>
                
                  
            
                  </tr>
               
           <?php     


  for($i=0; $i<$tam;$i++ ){
    $query = " 
        SELECT 
         (SELECT nombre FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS nombre,
         (SELECT descripcion FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS descripcion,
         (SELECT imagen FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS imagen,

      
         (SELECT id_producto FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS producto,

         (SELECT precio FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS precio


              FROM producto US where id_producto = ".$_SESSION['carrito'][$i] ." ; 
                         "; 
        try 
        { 
            // Execute the query against the database 
            //genera un dato en lenguaje sql
            $stmt = $db->prepare($query);
            //ejecutar la consulta y devuelve unavariable 
            $stmt->execute(); 
        } 
        //error almomento de ejecutar el query
        catch(PDOException $ex) 
        { 
          
           die("Failed to run query: " . $ex->getMessage()); 
        } 

  $rows=$stmt->fetch();
     






?>
  
  

                      <tr>

                     <td class="product-thumbnail  ">
                      <img style="width: 100px;height: 150px;" src=<?php echo $rows['imagen']; ?> >
                    </td>

                    <td class="product-name ">
                      <h2 class="h5 text-black  ml-2 mt-5"><?php echo $rows['nombre']; ?></h2>
                    </td>

                    <td><h2 class="h5 text-black  ml-2 mt-5"><?php echo $rows['producto']; ?> </h2>
                    </td>

                    <td><h2 class="h5 text-black  ml-2 mt-5">$ <?php echo $rows['precio']; ?></h2></td>
                  

                   
                  </tr>
           
                
                
         

  

<?php
  }    
  ?>
</table></div></form>


 </div>



            
            <div class="row">
              <div class="col-12">

                <h2 class="h3 mb-2 text-black-center">Tu orden</h2>
                <div class="p-4 p-lg-6 border" style="align-items: center;">
                     

</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="index.php">Inicio</a></li>

</ul>
</div>

<div class="panel-body">

<!-- Button to trigger modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
    Abrir Formulario de Contacto
</button>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Cabecera -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Formulario de Contacto</h4>
            </div>
            
            <!-- Modal Cuerpo contenido -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingrese su nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Ingrese su mensaje"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Pie de Página -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="EnviarFormulario()">Enviar Ahora</button>
            </div>
        </div>
    </div>
</div>



</div>
<div class="panel-footer"><a href="https://www.baulphp.com" target="_blank">BaulPHP</a></div>
</div><!--Panel cierra-->
  
</div>
<script>
function EnviarFormulario(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
		alert('Por Favor ingrese su nombre.');
        $('#inputName').focus();
		return false;
	}else if(email.trim() == '' ){
		alert('Por favor ingrese su email.');
        $('#inputEmail').focus();
		return false;
	}else if(email.trim() != '' && !reg.test(email)){
		alert('Por favor ingrese un email valido.');
        $('#inputEmail').focus();
		return false;
	}else if(message.trim() == '' ){
		alert('Por favor ingrese su mensaje.');
        $('#inputMessage').focus();
		return false;
	}else{
        $.ajax({
            type:'POST',
            url:'EnviarForm.php',
            data:'ContactoEnviar=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'bien'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Gracias por contactarnos, nos pondremos en contacto con usted pronto.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Ha ocurrido algún problema, por favor intente de nuevo.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>

</body>
</html>