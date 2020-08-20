<!DOCTYPE html>
<html lang="en">
    <?php
  


require("./conexion.php");
    // This variable will be used to re-display the user's username to them in the 
    // login form if they fail to enter the correct password.  It is initialized here 
    // to an empty value, which will be shown if the user has not submitted the form. 
    

         
    // This if statement checks to determine whether the login form has been submitted 
    // If it has, then the login code is run, otherwise the form is displayed 
    if(!empty($_GET)) 
    { 
        // This query retreives the user's information from the database using 
        // their username. 
        $query = " 
             INSERT INTO `producto`( `id_cuadro`, `id_precio`) VALUES (
             :cuadro,   
             :pre)"; 
        
        // The parameter values 
        $query_param=array
         (':cuadro' => $_GET['cuadro'], 
         	':pre' => $_GET['pre'], 
         	
         	); 
        try 
        { 
            // Execute the query against the database 
            //genera un dato en lenguaje sql
            $stmt = $db->prepare($query);
            //ejecutar la consulta y devuelve unavariable 
            $result = $stmt->execute($query_param); 
        } 
        //error almomento de ejecutar el query
        catch(PDOException $ex) 
        { 
          
           die("Failed to run query: " . $ex->getMessage()); 
        } 

    } 
 header('location:productos.php'); 
    ?>

	<body>




	</body>

</html>