<!DOCTYPE html>
<html lang="en">
<head>
   <title>Formulario de solicitudes</title>
</head>
<body>
<?php
   if($_POST){
      $txtNumber = $_POST['number']; 
      $txtName = $_POST['name'];
      $txtEmail = $_POST['email'];
      $txtMessage = $_POST['message'];

      if(empty ($txtNumber)){
         echo"Debes mandar el campo number";
      } 
      if(empty ($txtName)){
         echo"Debes mandar el campo name";
      } 
       if(empty ($txtEmail)){
         echo"Debes mandar el campo de email";
      } 
      if(empty ($txtMessage)){
         echo"Debes mandar el campo de mensaje";
      } 
      
      // database connection code
       
      $con = mysqli_connect('localhost', 'root','','maravilla_viajes');
       
      // database insert SQL code
       
      $sql = "INSERT INTO requests (name, number, email, message) VALUES ('$txtName', '$txtNumber', '$txtEmail', '$txtMessage')";
       
      // insert in database
       
      $rs = mysqli_query($con, $sql);
       
      // if($rs){
      if($rs){
       
        echo "Procesando...";
       
      }else {
         echo "<h1>Ocurrió un error al momento de guardar la información!</h1> <button type='button' onclick='window.history.back()'>Volver a la Página</button>";
      }
   }
  
 ?>
<script>
   window.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {

         alert('Listo');
         window.history.back()
      }, 1000);
      
   });
</script>
</body>
</html>

