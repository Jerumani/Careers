
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>REGISTRATION</title>
    <style>
        h1{
            color: darkblue;
            font-family: "Serif";
            align-content: center;
            font-size: 50px;
            border-bottom: 5px solid black;
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
            height: 50%;
            font-family: "Cooper Black";
            align-content: left;
        }
        * {box-sizing: border-box;}



        input[type='email'],
        input[type='password'] {
            width: 200px;
            border-radius: 2px;
            border: 1px solid #CCC;
            padding: 10px;
            color: #333;
            font-size: 14px;
            margin-top: 10px;
        }
        input[type='submit']{
            padding: 10px 25px 8px;
            color: #fff;
            background-color: #0067ab;
            text-shadow: rgba(0,0,0,0.24) 0 1px 0;
            font-size: 16px;
            box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
            border: 1px solid #0164a5;
            border-radius: 2px;
            margin-top: 10px;
            cursor:pointer;
        }
        input[type='submit']:hover {
            background-color: #024978;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: dodgerblue;
            color: white;

        }

        .btn:hover {
            opacity: 1;
        }

    </style>
</head>
<body>

<div class="form">
    <h1> REGISTRATION FORM</h1>
    <form name="Registration" method="post" action="InstRegConnect.php">
        <label > Institution Name: </label> <br>
        <input type = "text" name="inst_name" placeholder = "Type your user name here" size = 60 /><br>
        <label> Password: </label><br>
        <input type = "password"  name = "inst_password" placeholder="Input your password" size="60" onkeyup="CheckPasswordStrength(this.value)"/><br>
        <span id="password_strength"></span>
        <label > Confirm Password: </label><br>
        <input type ="password" id = "confirmpassword" required name = "confirmpassword" placeholder = "Confirm your password" size = 60 /><br>




        <label > E-mail address: </label><br>
        <input type = "email" name="inst_email" placeholder="Enter your email" size = 60 /><br>

        <input type="submit" class="btn btn-lg btn-success btn-block" onclick="checkPassword()"name="register" value="Registering"/>

    </form>
    <script>
        function checkPassword() {

            if (document.getElementById('password').value !== document.getElementById('confirmpassword').value) {
                alert("Passwords do not match!");
                document.getElementById('password').value = "";
                document.getElementById('confirmPassword').value = "";

                return false;
            }
        }

        function CheckPasswordStrength(password) {

            var password_strength = document.getElementById("password_strength");


            if (password.length == 0) {
                password_strength.innerHTML = "";

                return;

            }


            var regex = new Array();

            regex.push("[A-Z]");

            regex.push("[a-z]");

            regex.push("[0-9]");

            regex.push("[$@$!%*#?&]");


            var passed = 0;

            for (var i = 0; i < regex.length; i++) {

                if (new RegExp(regex[i]).test(password)) {

                    passed++;

                }

            }


            if (passed > 2 && password.length > 8) {

                passed++;

            }


            var color = "";

            var strength = "";

            switch (passed) {


                case 0:


                case 1:

                    strength = "Weak";

                    color = "orange";


                    break;

                case 2:

                    strength = "Good";
                    color = "darkorange";

                    break;

                case 3:

                case 4:

                    strength = "Strong";

                    color = "yellow";

                    break;

                case 5:

                    strength = "Very Strong";

                    color = "red";

                    break;

            }

            password_strength.innerHTML = strength;

            password_strength.style.color = color;
        }







    </script>
</div>
</body>
</html>