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
            <h2>Admin email</h2>
        </div>

                <?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"thiscareer");
if (isset($_GET['submit'])) {
    $admin_id = $_GET['admin_id'];
    $admin_name = $_GET['admin_name'];
    $admin_email = $_GET['admin_email'];

    $admin_password = $_GET['admin_password'];
    $query = mysqli_query($connection,"update admin set
admin_name='$admin_name', admin_email='$admin_email',
admin_password='$admin_password' where admin_id='$admin_id'");
}
$query = mysqli_query($connection,"select * from admin");
while ($row = mysqli_fetch_array($query)) {
    echo "<b><a href='Admin%20contacts.php?update={$row['admin_id']}'>{$row['admin_email']}</a></b>";
                echo "<br />";
                }
                ?>
            </div><?php
if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($connection,"select * from admin where admin_id=$update");
    while ($row1 = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='get'>";
            echo "<h2>Update Form</h2>";
            echo "<hr/>";


            echo "<label>" . "Email:" . "</label>" . "<br />";
            echo"<input class='input' type='text' name='admin_email' value='{$row1['admin_email']}' />";
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