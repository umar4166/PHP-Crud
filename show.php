<?php 
require_once 'config.php';
include 'insert.php';
    $result=mysqli_query($conn,"SELECT * FROM info");
    ?>
    <html>
        <head>
            <title>Show Record</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Show Crud Records</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php while($row=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']?>" class="edit_btn">Edit</a> 
                        </td>
                        <td>
                            <a href="insert.php?del=<?php echo $row['id']?>" class="del_btn">Delete</a> 
                        </td>
                    </tr>
                    <?php } ?>
            </table>
            <button id="new" class="btn btn-primary" ><a href="index.php">Add New Records</a></button>
        </body>
    </html>