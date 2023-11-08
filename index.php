<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src\style.css">
    <title>Login form test</title>
</head>
<body>

<!--Basic structure of login form-->
<video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
    <source src="src/video/first-screen.mp4" type="video/mp4">
</video>
<div class="content" >
    <!--heading -->
    <div class="text" style=" margin-right: 250px;font-size:30px;">Please login</div>

    <form action="#">
        <label class="text-label" for="div">Email</label>
        <!--Place to input email-->
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" class="in-put" style="background-color:#ffffff;color: black;" placeholder="Enter Email"
                   required>
        </div>

        <div style="margin-top: 10px;">
            <!--Place to input password-->
            <div style="margin-top: 15px;">
                <label class="text-label" for="div">Password</label>
            </div>

            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" style="background-color:#ffffff;color: black" placeholder="Enter Password">
            </div>
        </div>

        <div>
            <!--login button -->
            <button style="background-color:#ffffff;color: blue">Log in</button>
            <div class="or">Or</div>
            <button style="margin-top: 10px;color: white">Sign up</button>
        </div>
        <pre class="text-label" style="font-size: 15px">Forget password? Restore</pre>
    </form>
</div>
</body>
</html>

