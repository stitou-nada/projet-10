<?php
    include 'configuration.php';

    $sqlGetData = 'SELECT id, Prenom, Nom, Age  FROM persone';
    $result = mysqli_query($connect ,$sqlGetData);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<body>
    <div>
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Age</th>
         
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value['Prenom']?></td>
                <td><?= $value['Nom']?></td>
                <td><?= $value['Age']?></td>
          
                <td>
                    <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html