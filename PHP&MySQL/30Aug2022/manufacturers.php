<?php include_once("dbconfig.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Manufacturers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Manufacturer List</h1>
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Manufacturer Name</th>
                <th>Address</th>
                <th>Contact</th>
            </tr>
            <?php
                $sql = "SELECT * FROM Manufacturer";
                $result = $db->query($sql);
                while($row = $result->fetch_assoc()){
            ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['contact_no'] ?></td>
            </tr>

            <?php
                }
            ?>
        </table>
        <a href="ev1_q3.php" class="btn btn-primary">Manufacturer Entry</a>
        <a href="manufacturers_delete.php" class="btn btn-primary">Manufacturer Delete</a>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>