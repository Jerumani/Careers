<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoginAs</title>
    <style>
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
            width: 70%;
            height: 50%;
            font-family: "Cooper Black";
            align-content: left;
        }
        * {box-sizing: border-box;}
        .btn-group button {
            background-color: #4CAF50; /* Green background */
            border: 1px solid green; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            width: 50%; /* Set a width if needed */
            display: block; /* Make the buttons appear below each other */
        }

        .btn-group button:not(:last-child) {
            border-bottom: none; /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #3e8e41;
        }

    </style>
</head>
<body>

<form id="quiz" name="quiz">
    <p>Please enter the registration key in order to register</p>
    <input id="textbox" type="text" name="question">

    <input id="button" type="button" value="Allow Register" onclick="check();">
</form>

</body><script>
    function check() {
        var question= document.quiz.question.value;
        var correct=0;

        if(question==="Registration") {
            correct + 1;

            var txt = "Hello";
            document.write("<p>Register here:" + txt.link("http://localhost:63342/Careers/InstRegister.php?_ijt=55hhol0580sj9batefkm8db329") + "</p>");
        }</script>
</html>