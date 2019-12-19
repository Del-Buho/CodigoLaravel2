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
    @if ( session('mensaje2') )
      <div class="alert alert-danger">{{ session('mensaje2') }}</div>
    @endif
  <div class="container">
  <div class="abs-center">
  <form  class="border p-3 form" method="POST" action="{{ route('empresa.crear2')}}">
     @csrf
     @error('nombreEmp')
        <div class="alert alert-danger">
             El campo nombre de empresa es obligatorio
        </div>
     @enderror
     @error('telefono')
        <div class="alert alert-danger">
             El campo telefono es obligatorio
        </div>
     @enderror
     @error('direccion')
        <div class="alert alert-danger">
             El campo direccion es obligatorio
        </div>
     @enderror
      <div class="form-group">
        <label >Nombre de empresa</label>
        <input type="text"  name="nombreEmp" class="form-control">
      </div>
      <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" class="form-control">
      </div>
	<div class="form-group">
        <label>Direccion</label>
        <input type="text" name="direccion" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">A&ntildeadir</button>
    </form>
  </div>
</div>

    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
