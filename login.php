<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <form action="action_login.php" method="POST">
    <div class="login_main">
        <div class="login_from">
            <div class="login_text"><u>Login From</u></div>
            <div class="login_user">
                <div class="login_user_icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <input type="text" class="login_user_text" placeholder="Email or Phone" name="email">
            </div>
            <div class="login_user">
                <div class="login_user_icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input type="password" class="login_user_text" placeholder="Password" name="password">
                <div class="iconeye"><i class="fa-solid fa-eye" ></i></div>
                </div>
                
            <div class="login_forgot"> <input type="checkbox" >Forgot password?</div>
                
                    <button type="submit" class="login_login">Login</button>
                
            <p class="sign_p">Not an account? <span class="span_sign">Sign in</span></p>
        </div>
    </div>
</form>
</body>
</html>