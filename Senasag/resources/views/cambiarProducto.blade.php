<HTML class="bg-black">
	<head>
        <meta charset="UTF-8">
        <!-- <title>AdminLTE | Buscador </title> -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<title>Buscador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 		 	
	 	
	 	
    </head>
	<body>
  @if ( session('mensaje') )
      <div class="alert alert-success">{{ session('mensaje') }}</div>
  @endif

<div class="container">
  <div class="abs-center">
  <form class="border p-3 form" method="POST" action="{{ route('cambiarProducto', $id2) }}">
    @method('PUT')
    @csrf
      @error('nombreProc')
          <div class="alert alert-danger">
          El campo nombre del producto es obligatorio
          </div>
    @enderror
    @error('cantidad')
          <div class="alert alert-danger">
            El campo cantidad es obligatorio
          </div>
    @enderror
  
	<h4>Nuevos datos del Producto</h4>
	<div class="form-group">
        <label >Selecciona una empresa </label>
        <select name="idEmpresa">
            @foreach($empresas as $empresa)
              <option value={{$empresa->id}}>{{$empresa->nombre}}</option> 
            @endforeach()
        </select>
      </div>
      <div class="form-group">
        <label>Nombre del producto</label>
        <input name="nombreProc" class="form-control">
      </div>
	<div class="form-group">
        <label>Cantidad</label>
        <input name="cantidad" class="form-control">
      </div>
	<div class="form-group">
	<p> <label for="tipo">Seleccione el tipo del producto</label> </p>
       <label class="radio-inline"><input type="radio" name="tipo" value = "Alimenticio" checked>Alimenticio</label>&nbsp;	
      <label class="radio-inline"><input type="radio" name="tipo" value = "Precuario" >Precuario</label>&nbsp;
      <label class="radio-inline"><input type="radio" name="tipo" value = "Insumo Agricola" >Insumo Agricola</label> 
  </div>

      <button type="submit" class="btn btn-primary">Cambiar</button>
    </form>
  </div>
</div>
    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
