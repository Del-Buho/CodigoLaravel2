<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Buscador</title>
  </head>
	<body>
  <?php
  $admin='';
   foreach($users as $user){
    if($user->id == $id){
      $admin = $user->admin;
    }
   }
  ?>
    @if ( session('mensaje') )
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
 
<form class="form" >  
<p> <label for="tipos">Seleccione el tipo del producto</label> </p>
   <label class="radio-inline"><input type="radio" name="tipo" value = "Alimenticio">Alimenticios</label>&nbsp;	
	 <label class="radio-inline"><input type="radio" name="tipo" value = "Precuario">Precuarios</label>&nbsp;
	 <label class="radio-inline"><input type="radio" name="tipo" value = "Insumo Agricola">Insumos Agricolas</label> 
   <label class="radio-inline"><input type="radio" name="tipo" value = "Todos" checked>Todos</label> 
  </div>
<h4>Escoge una empresa</h4>
<label class="asd"><select name="idEmpresa">
            @foreach($empresas as $empresa)
              <option value={{$empresa->id}}>{{$empresa->nombre}}</option> 
            @endforeach()
          </select>
</label>
<label class="asd"><button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button></label>
</form>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
    <?php
      if($admin){
    ?>
      <th scope="col">Acciones</th>
    <?php
       }
    ?>
    </tr>
  </thead>
  <tbody>
  <?php
      $tipo = "Todos";
      $idEmpresa ="1" ;
      if(isset ($_GET['tipo'])){
        $tipo = $_GET['tipo'];
      }
    if(isset ($_GET['idEmpresa'])){
      $idEmpresa = $_GET['idEmpresa'];
    }
    
  ?>
    
    @foreach($empresas as $empresa)
    <?php
        if($empresa->id == $idEmpresa){ 
    ?>
      @foreach($relacion as $rela)
      <?php
        if($rela->empresa_id == $empresa->id){
      ?>
        @foreach($productos as $producto)
        <?php
        if( ($producto->tipo == $tipo || $tipo == "Todos") && $rela->producto_id == $producto->id ){
        ?>
          <tr>
              <th scope="row">{{$producto->id}}</th>
              <td>{{$producto->nombre}}</td>
              <td>{{$rela->cantidad}}</td>
              <td>{{$producto->tipo}}</td>
              <?php
              if($admin){
              ?>
              <td><form action="{{ route('buscador.eliminar', $producto->id) }}" class="d-inline" method="POST">
               @method('DELETE')
               @csrf
               <button class="btn btn-danger" type="eliminar">Borrar</button>
              </form>
                <a href="{{route('buscador.editar', $producto->id)}}" class="btn btn-warning btn-sm">Editar</a>
              </td>
              <?php
                }
              ?>
          </tr>

        <?php
        }
        ?>
        @endforeach()

        <?php
          }
        ?>
      @endforeach()
    <?php
        }
    ?>
    @endforeach()
  </tbody>
</table>
@foreach($empresas as $empresa2)
    <?php
       if($empresa2->id == $idEmpresa){ 
    ?>
    
        <div class="card">
          <div class="card-head"><b>Nombre de empresa: </b>&nbsp; {{$empresa2->nombre }}</div>
          <div class="card-head"><b>Telefono de la empresa: </b>&nbsp; {{$empresa2->telefono }}</div>
          <div class="card-head"><b>Direccion de la empresa: </b>&nbsp; {{$empresa2->direccion }}</div>
        </div>
      
    <?php
    }
    ?>
@endforeach()
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <center> 
     <a href="{{route('menu', $id)}}" class="btn btn-success">Volver al menu</a>
    </center>
    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
