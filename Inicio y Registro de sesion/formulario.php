<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/formulario.css" th:href="@{/css/index.css}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
    <script src="main.js"></script>
    <div class="modal-dialog text-center">
        
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="../Imagenes/logo.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    </div>
                    <button  class="btn btn-primary" onclick="location.href='../Home/Home.php'" ><i class="fas fa-sign-in-alt" ></i>  Iniciar sesión </button>
                </form>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/olvide.html">Olvide la contraseña</a>
                </div>
                <div class="col-12 forgot">
                    <a href="../Inicio y Registro de sesion/registro.html">Registrate</a>
                </div>
             
            </div>
        </div>
    </div>
</body>

</html>