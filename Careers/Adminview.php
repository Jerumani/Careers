<?php
 include ('Adminviewing.php');
if(isset($_GET['edit'])){
    $inst_id=$_GET['edit'];
    $update=true;
    $rec=mysqli_query($connection, "SELECT * FROM institutions WHERE inst_id=$inst_id");
    $record = mysqli_fetch_array($rec);
    $inst_name= $record['inst_name'];
    $inst_email=$record['inst_email'];

}
?>
<html>
<head>
    <title>List of Institutions</title>
    <style>

        body{
            background: url(wallp.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 150px;
            height: 150px;
            margin: 0 auto;
            padding: 5px;
            font-size: 20px;
            width: 30%;
            height: 30%;
            font-family: "Droid Serif";
            color: black;
            align-content: left;
        }
        p {
            font-family: "Droid Serif";
            font-size: 20px;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
            background-color: aquamarine;
        }
        table td {
            transition: all .5s;
        }
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
<body>
<h1>Institutions</h1>
<!--To retrieve the database records and display them on the page, add this code immediately above the input form:-->
<?php $results = mysqli_query($connection, "SELECT * FROM institutions"); ?>


<table class="data-table">
    <caption class="title"></caption>

    <thead>
    <tr>
        <th>Institution Id</th>
        <th>Institution Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['inst_id']; ?></td>
            <td><?php echo $row['inst_name']; ?></td>
            <td><?php echo $row['inst_email']; ?></td>
            <td>
                <a href="Adminviewing.php?edit=<?php echo $row['inst_id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="Adminviewing.php?del=<?php echo $row['inst_id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<form method="post" action="Adminviewing.php" >
    <input type="hidden" name="inst_id" value="<?php echo $inst_id;?>">
    <div class="input-group">
        <label>Institution Name: </label><br>
        <input type="text" name="inst_name" value="<?php echo $inst_name; ?>">
    </div>

    <div class="input-group">
        <label>Email: </label><br>
        <input type="email" name="inst_email" value="<?php echo $inst_email; ?>">
    </div>

    <?php if ($update == true): ?>
        <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
        <button class="btn" type="submit" name="save" >Save</button>
    <?php endif ?>
</form>
</body>
</html>
