<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div id="main" class="container">
        <div class="sign-up">
            <form action="#">
                <h1>Create new account</h1><br>
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder=" Email">
                <input type="password" name="password" id="password" placeholder=" Password">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                <br> <br>
                <button> sign up </button>
            </form>
        </div>
        <div class="Login">
            <form action="#">
                <h1>Login Page</h1>
                <br>
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="password" name="password" id="password" placeholder="Password">
                <br><br>
                <button>Login</button>
                <a href="#">Forgot your Password??</a>
            </form>
        </div>


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please Login with your personal info
                    </p>
                    <button class="ghost" id="signIn">Login</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>New Here?</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="sign-up">sign up</button>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        const Registerbutton = document.getElementById('sign-up');
        const signInbutton = document.getElementById('signIn');
        const main = document.getElementById('main');

        Registerbutton.addEventListener('click', () => {
            main.classList.add("right-panel-active")
        });
        signInbutton.addEventListener('click', () => {
            main.classList.remove("right-panel-active")
        });
    </script>

</body>

</html>