<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Institutions</title>
    <style>
        input[type=text], input[type=password] {
            width: 200px;
            border-radius: 2px;
            border: 1px solid #CCC;
            padding: 12px 20px;
            margin: 8px 0;
            color: #333;
            font-size: 14px;
            box-sizing: border-box;
            display: inline-block;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }






        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text */
        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 50%;
            }
        }


        body{
            background: url(Registermage.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 370px;
            height: 500px;

            border: 1px solid black;

            margin: 0 auto;
            padding: 5px;
            font-size: 20px;
            width: 50%;
            height: 80%;
            font-family: "sans-serif";
            align-content: left;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Log in</h1>
<form name = "InstitutionLogin" onsubmit="formValidation()" action="InstLoginConnect.php" method="get">
        <label ><b>InstitutionName</b></label><br>
        <input type="text" placeholder="Enter Institution Name" name="inst_name" required><br>

        <label ><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="inst_password" required><br>

        <input type="submit" class="btn btn-lg btn-success btn-block" onclick="validatePassword()"name="login" value="Login"/>


    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
<script>
    function formValidation() {
        var x = document.forms["InstitutionLogin"]["email"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }

        var y = document.forms["InstitutionLogin"]["inst_password"].value;
        if(y == ""){
            alert("Password must be given");
            return false;
        }

    }


    var Password = document.getElementById("inst_password");
    var ConfirmPassword = document.getElementById("Confirm Password");

    function validatePassword(){
        if(Password!= ConfirmPassword) {
            alert("Passwords don't match!TRY AGAIN!!")
            return false;
        }

    }

    Password.onchange = validatePassword;
    ConfirmPassword.onkeyup = validatePassword;
</script>
</body>
</html>