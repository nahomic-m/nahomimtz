<html lang="en">
<head>
  <br>
  <br>
<style>
    div {
      padding: 16px;
      background-color: #00FF00;
    }
  </style>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body 


<div class="container">
 <div id = "main">
         <form action = "" method = "post">
            <label>Nombre :</label>
            <input type = "nombre" name = "name" id = "name" />
            <br>
            <br>
            <label>Contraseña:</label>
            <input type = "contraseña" contraseña = "password" id = "name" />
            <br />
            <br />
            <input type = "submit" value ="Guardar" name = "submit"/>
            <br />
         </form>
      </div>
      
      <?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = "ingreso";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO datos(nombre)VALUES ('".$_POST["name"]."')";
            
            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
   
</body>
</html>
