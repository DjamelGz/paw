<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <title>Student Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>admin</h1>
               <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>-->
                <span> use your email and password</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="*****">
                <button>Sign In</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Student</h1>
                <span> use your email and password</span>
                <input type="email" placeholder="Email">
                <input type="text" placeholder="*****">
                <button >Sign In</button>
            </form> <!-- ici en met de la poo-->
                </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Admin!</h1>
                    
                    <button class="hidden" id="login">student</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Student!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">admin</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>