<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>


<body>

<div class="container">
    <div class="signup">sign up</div>
    <div class="login">log in</div>
    <div class="signup-form">
        <input type="text" placeholder="Choose a Username" class="input" id="USERNAME_S" name="username"><br>
        <input type="password" placeholder="Choose a Password" class="input" id="PASSWORD1_S" name="password1"><br>
        <input type="password" placeholder="Confirm the Password" class="input" id="PASSWORD2_S" name="password2"><br>
        <div class="btn" id="btn1">create account</div>
    </div>

    <div class="login-form">
        <input type="text" class="input" placeholder="UserName" id="USERNAME_L"><br>
        <input type="password" class="input" placeholder="Password" id="PASSWORD_L"><br>
        <div class="btn" id="btn2">log in</div>

        <span><a href="#">I Forget my Username or Password</a></span>
    </div>
</div>


<script>
    window.onload=function () {

        var username_s=document.getElementById('USERNAME_S');
        var password1_s=document.getElementById('PASSWORD1_S');
        var password2_s=document.getElementById('PASSWORD2_S');

        var btn1=document.getElementById('btn1');
        var btn2=document.getElementById('btn2');

        btn1.onclick=function () {

            if (password1_s.value!=password2_s.value){
                alert("密码不一致，请重新输入！");
                password2_s.value=''
            }

        }
    }
</script>




</body>
</html>
