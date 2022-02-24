<?php
    
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
              
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getFirstName()?></td>
                <td><?= $value->getLastName()?></td>
                <td><?= $value->getAge()?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value->getId() ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $value->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>