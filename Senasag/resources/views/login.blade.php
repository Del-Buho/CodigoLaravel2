<HTML class="bg-black">
	<head>
        <meta charset="UTF-8">
        <!-- <title>AdminLTE | Login </title> -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

		<title>Senasag Web</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
   </head>
    <body class="bg-black">
        <h1> </h1>
        @if ( session('mensaje') )
             <div class="alert alert-danger">{{ session('mensaje') }}</div>
        @endif
        <div class="container">
        <div class="abs-center">
            <div class="form-box" id="login-box">
                <center>  
                    <div class="header" style="background-color:#008f39;">  Senasag Login </div>
                </center>
                    <form class="border p-3 form" method="POST" action="{{ route('login.validar') }}">
                        @csrf
                        @error('username')
                            <div class="alert alert-danger">
                                El campo Usuario es obligatorio
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger">
                                El campo Contrase&ntilde;a es obligatorio
                            </div>
                        @enderror
                        <div class="body bg-gray">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Usuario" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Contrase&ntilde;a" />
                            </div>          
                    </div>
                        <div class="footer">
                    <center>                                                            
                            <button type="submit" class="btn btn-success" >Acceder</button>
                    </center>
                        </div>
                    </form>
            </div>
        </div>
        </div>  
    </body>
</HTML>


