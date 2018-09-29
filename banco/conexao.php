<?php
 function abrirConexao(){
   $con= mysqli_connect('localhost', 'root', '', 'ecollab');

   if (mysqli_connect_errno()) {
     printf("Connect failed:", mysqli_connect_error());
   }
   
   return $con;
}

 function FecharConexao($con){
  mysqli_close($con);
}
?>