<?php 

        header("Location: inicio.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to inicio.php"); 

?>