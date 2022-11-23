<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/login.css">
    <title>Login</title>
</head>

<body>
    <header>
    </header>
    <main>
        <main>

            <div class="total-container">
                <!--Used id for js and class for css-->
                <div class="back-box" id="back-box">
                    <div class="back-box-login" id="back-box-login">
                        <h3>¿Ya estas registrado?</h3>
                        <p>Debes iniciar sesion</p>
                        <button id="btn-start-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="back-box-register" id="back-box-register">
                        <h3>¿Aún no estas registrado?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn-register">Regístrarse</button>
                    </div>
                </div>
                <!--Formulario de Login y registro-->
                <div class="login-container" id="login-container">
                    <!--Login-->
                    <!--fix error in dir fro php-->
                    <form action="/Pokemon-Gym/php/loginUser.php" method="POST" class="form-login" id="form-login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo" name="email">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Iniciar</button>
                    </form>

                    <!--Register-->
                    <!--fix error in dir fro php-->
                    <form action="/Pokemon-Gym/php/registerUser.php" method="POST" class="form-register" id="form-register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre" name="name">
                        <input type="text" placeholder="Correo" name="email">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
    </main>
    <footer>

    </footer>
    <script src="assets/js/login.js"></script>
</body>

</html>