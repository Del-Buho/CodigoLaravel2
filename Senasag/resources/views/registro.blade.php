<HTML class="bg-black">
	<head>
        <meta charset="UTF-8">
        <!-- <title>AdminLTE | Buscador </title> -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<title>Buscador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 		 	
	 	
	 	
    </head>
	<body>
  
    @if ( session('Usuario') )
      <div class="alert alert-danger">{{ session('Usuario') }}</div>
    @endif
    @if ( session('PasswordD') )
      <div class="alert alert-danger">{{ session('PasswordD') }}</div>
    @endif
    @if ( session('Registro') )
      <div class="alert alert-success">{{ session('Registro') }}</div>
    @endif
  <div class="container">
  <div class="abs-center">
  <form  class="border p-3 form" method="POST" action="{{ route('registro.crear')}}">
     @csrf
     @error('nombre')
        <div class="alert alert-danger">
             El campo nombre de usuario es obligatorio
        </div>
     @enderror
     @error('password1')
        <div class="alert alert-danger">
             El campo contrase&ntildea es obligatorio
        </div>
     @enderror
     @error('password2')
        <div class="alert alert-danger">
             El campo confirmar contrase&ntildea es obligatorio
        </div>
     @enderror
      <div class="form-group">
        <label >Nombre de usuario</label>
        <input type="text"  name="nombre" class="form-control">
      </div>
      <div class="form-group">
        <label>Contrase&ntildea</label>
        <input type="password" name="password1" class="form-control">
      </div>
      <div class="form-group">
        <label>Confirmar contrase&ntildea</label>
        <input type="password" name="password2" class="form-control">
      </div>
      <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox"  name="admin" class="form-check-input" value="1"> Admin
        </label>
      </div>
      <h1> </h1>
      <button type="submit" class="btn btn-primary">A&ntildeadir</button>
    </form>
  </div>
</div>

    </body>
</HTML>	                                                                                                                                                                                                                                                                                                                                                                              
