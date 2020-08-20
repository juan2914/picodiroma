<?php



require("./conexion.php");


$query = "INSERT INTO `cuadro`( `nombre`, `descripcion`,`imagen`)  VALUES (:nombre, :descripcion, concat('./assets/img/portfolio/',:imagen))";

   $query_param=array
         ('nombre'=>$_POST['nombre'],'descripcion'=>$_POST['descripcion'],  'imagen'=>$_POST['imagen']);    



print($query);

  $stmt = $db->prepare($query);

  $db->beginTransaction();
  //ejecutar la consulta y devuelve unavariable 
  $result = $stmt->execute($query_param); 


$cuadro =$db->lastInsertId();
printf ("Nuevo registro con el id %d.\n", $db->lastInsertId());




$db->commit();	

$query = "INSERT INTO `precio`( `id_producto`, `precio`)  VALUES (:id_producto,:precio)";

   $query_param=array
         ('id_producto'=>$_POST['id_producto'],'precio'=>$_POST['precio']);    



print($query);

  $stmt = $db->prepare($query);

  $db->beginTransaction();
  //ejecutar la consulta y devuelve unavariable 
  $result = $stmt->execute($query_param); 





$pre =$db->lastInsertId();
printf ("Nuevo registro con el id %d.\n", $db->lastInsertId());

$db->commit();


header("Location: ./registroproducto.php? cuadro=".$cuadro."&pre=". $pre."");
die("Redirect to: ./registroproducto.php");


?>