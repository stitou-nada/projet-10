<?php
  include 'configuration.php';
include 'employeManager.php';
$employeManager = new EmployeManager();
$data = $employeManager->getEmployes($connectData);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index-css/fonts/icomoon/style.css">

    <link rel="stylesheet" href="index-css/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index-css/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="index-css/css/style.css">

  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
    <a href="insert.php">  <h2  class="mb-5">Ajouter</h2> </a>

      <div class="table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              

              <th scope="col">id</th>
              <th scope="col">Prenom</th>
              <th scope="col">Nom</th>
              <th scope="col">Date de naissance</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          
              <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['Prenom']?></td>
                <td><?= $value['Nom']?></td>
                <td><?= $value['Date_de_naissance']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>

    
  </body>
</html>