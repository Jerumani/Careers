<?php
session_start();
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'thiscareer';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$inst_name='inst_name';

$inst_name = $_SESSION["inst_name"];




$sql = 'SELECT inst_name, inst_email, inst_password FROM institutions where inst_id ='. $inst_name;

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style >
        body {
            background-image: url("brownbricks.jpg");
            font-size: 15px;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
            background-color: aquamarine;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }

        table td {
            transition: all .5s;
        }

        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>

<div class = bg>
    <div style="background-color: white" class="header">

        <div class="header-right">
            <a href = "Initialhomepage.html">Home</a>
            <a class="active" href="instprofile.php">Information</a>



            <a href="instprofile.php?logout='1'" >Logout</a>


        </div>
    </div>
    <div class="my_tables" style="background-color: beige">
        <h1>Institution</h1>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <table class="data-table">
            <caption class="title">Profile</caption>
            <thead>
            <tr>
                <th>Institution Name</th>
                <th>Email</th>
                <th>Password</th>


                 <th>Edit</th>

            </tr>
            </thead>

            <?php

            while ($row = mysqli_fetch_array($query))
            {

                echo '<tr>
					<td>'.$row['inst_name'].'</td>
					<td>'.$row['inst_email'].'</td>
					<td>'.$row['inst_email'].'</td>
					
					 <td><a href="Instituteview.php? id= '.$row['inst_name'].'">Edit</a></td>

					
				</tr>';

            }?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</body>
</html>
