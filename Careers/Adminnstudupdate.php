<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body{
            background: url(wallp.jpg) no-repeat center center fixed;
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
            font-family: "sans-serif";
            align-content: left;
        }
        * {box-sizing: border-box;}

    </style>
</head>
<body>
<div class="maindiv">
    <div class="divA">
        <div class="title">
            <h2>Update Institutions</h2>
        </div>
        <div class="divB">
            <div class="divD">
                <p>Click On Menu</p>
                <?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection,"thiscareer");
                if (isset($_GET['submit'])) {
                    $inst_id = $_GET['id'];
                    $inst_name = $_GET['username'];
                    $inst_email = $_GET['email'];

                    $inst_password= $_GET['inst_password'];
                    $query = mysqli_query($connection,"update users set
username='$username', email='$email',
 where id='$id'");
                }
                $query = mysqli_query($connection,"select * from users");
                while ($row = mysqli_fetch_array($query)) {
                    echo "<b><a href='Adminnstudupdate.php?update={$row['id']}'>{$row['username']}</a></b>";
                    echo "<br />";
                }
                ?>
            </div><?php
            if (isset($_GET['update'])) {
                $update = $_GET['update'];
                $query1 = mysqli_query($connection,"select * from users where id=$update");
                while ($row1 = mysqli_fetch_array($query1)) {
                    echo "<form class='form' method='get'>";
                    echo "<h2>Update Form</h2>";
                    echo "<hr/>";
                    echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
                    echo "<br />";
                    echo "<label>" . "Name:" . "</label>" . "<br />";
                    echo"<input class='input' type='text' name='username' value='{$row1['username']}' />";
                    echo "<br />";
                    echo "<label>" . "Email:" . "</label>" . "<br />";
                    echo"<input class='input' type='text' name='email' value='{$row1['email']}' />";
                    echo "<br />";



                }
            }
            if (isset($_GET['submit'])) {
                echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
            }
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div><?php
mysqli_close($connection);
?>
</body>
</html>