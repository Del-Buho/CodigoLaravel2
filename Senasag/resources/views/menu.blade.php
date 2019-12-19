<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Menu</title>
  </head>
   <body>
 <style>
body {
  background-image: url('images/fondo1.jpg');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> 
</div>
   
<h1></h1>

<center>
<h3>Seleciona una opcion</h3>

</center>
<h1> </h1>

<center>
  <a href="{{route('buscador', $id)}}" class="btn btn-primary">Buscar los productos de una empresa</a>
</center>
<h1> </h1>
<?php
  $admin='';
   foreach($users as $user){
    if($user->id == $id){
      $admin = $user->admin;
    }
   }
   if($admin){
?>
<center>
  <a href="{{route('agregarProducto', $id)}}" class="btn btn-info">Agregar un producto</a>
</center>

<h1> </h1>
<center>
  <a href="{{route('agregarEmpresa', $id)}}" class="btn btn-success">Agregar una empresa</a>
</center>
<h1> </h1>
<center>
  <a href="{{route('registro')}}" class="btn btn-warning">A&ntildeadir usuario</a>
</center>
<?php
   }
?>
<h1> </h1>
<center>
<a href="/"> <button type="submit" class="btn btn-danger">log out</button>
</center>      
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
