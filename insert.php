
<?php

require("./conexion.php");


$query = "INSERT INTO `direccion`( `calle`, `colonia`, `num_int`, `ext`, `id_cp`, `estado`, `delegacion`)  VALUES (:calle, :colonia, :num_int, :ext, :cp , :estado,:delegacion)";

   $query_param=array
         ('calle'=>$_POST['calle'], 'colonia'=>$_POST['colonia'],  'num_int'=>$_POST['num_int'],  'ext'=>$_POST['ext'],  'cp'=>$_POST['cp'],  'estado'=>$_POST['estado'],  'delegacion'=>$_POST['delegacion']);    





  $stmt = $db->prepare($query);
  $db->beginTransaction();
  //ejecutar la consulta y devuelve unavariable 
  $result = $stmt->execute($query_param); 





$direcciones =$db->lastInsertId();
printf ("Nuevo registro con el id %d.\n", $db->lastInsertId());

$db->commit();

$query = "INSERT INTO `cuenta`( `usuario`, `email`, `password`)  VALUES (:usuario, :email, md5(:pass))";

   $query_param=array
         ('usuario'=>$_POST['user'], 'email'=>$_POST['email'],  'pass'=>$_POST['pass']);    





  $stmt = $db->prepare($query);
  $db->beginTransaction();
  //ejecutar la consulta y devuelve unavariable 
  $result = $stmt->execute($query_param); 





$cuentas =$db->lastInsertId();
printf ("Nuevo registro con el id %d.\n", $db->lastInsertId());

$db->commit();

header("Location: ./registro?nombre=".$_POST['nombre']."&apellidos=".$_POST['apellidos']."&telefono=".$_POST['telefono']."&cuentas=".$cuentas."&direcciones=".$direcciones."");
die("Redirect to: ./registro");

?>