<?php
    include 'config.php';
    include 'employee.php';
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employee = $employeeManager->getEmployee($conn, $id);

    }

    if(isset($_POST['update'])){
        $employee = new Employee();

        $employee->setFirstName($_POST['fname']);
        $employee->setLastName($_POST['lname']);
        $employee->setGender($_POST['gender']);
        $employee->setAge($_POST['age']);

        $employeeManager->editEmployee($conn, $employee, $id);

        header('Location: index.php');
        
    }
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
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName" value=<?php echo $employee['Prenom']?> name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" value=<?php echo $employee['Nom']?> name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="inputAge">Age</label>
				<input type="number" required="required" class="form-control" id="inputAge" value=<?php echo $employee['Age']?> name="age" placeholder="Age">
				<span></span>
			</div>
    
			<div class="form-actions">
					<input name="update" type="submit" value="Update">
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>