<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login 01</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
            rel="stylesheet"
        >
        <link rel="stylesheet" href="./login-01/style.css">
    </head>
    <body>
        <div class="background"></div>
        <div class="centering">
            <form class="my-form" method="POST">
            <input type="hidden" name="validar">
                <div class="login-welcome-row">
                    <img
                        class="login-welcome"
                        src="../menu-06/assets/logo.png"
                        alt="Astronaut"
                    >
                    <!-- optimize the image in production -->
                    <h1>LogIn!</h1>
                </div>
                <div class="text-field">
                    <label for="email">Email:</label>
                    <input
                        aria-label="Email"
                        type="textl"
                        id="email"
                        name="email"
                        placeholder="Tu email Tete"
                        required
                    >
                    <img
                        alt="Email Icon"
                        title="Email Icon"
                        src="./login-01/assets/email.svg"
                    >
                </div>
                <div class="text-field">
                    <label for="password">Password:</label>
                    <input
                        id="password"
                        type="password"
                        aria-label="Password"
                        name="password"
                        placeholder="Te contra Tete"
                        title="Minimum 6 characters at least 1 Alphabet and 1 Number"
                      
                        required
                    >
                    <img
                        alt="Password Icon"
                        title="Password Icon"
                        src="./login-01/assets/password.svg"
                    >
                </div>
                <input type="submit" class="my-form__button" value="Login" >
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Has olvidado tu contraseña?</span>
                        <a href="#" title="Reset Password">Resetear Contraseña</a>
                    </div>
                    <div class="my-form__signup">
                        <a href="../dashboard.html" title="Create Account">Crear Cuenta</a>
                    </div>
                </div>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>

';