<?php include_once("dbconfig.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <title>EV-1_Q-4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Product Table</h1>
        
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price (> 5000)</th>
                <th>Manufacture ID</th>
            </tr>
            <?php
            // Outputting Data
                $sql = "SELECT * FROM show_products";
                $result = $db->query($sql);
                while($data = $result->fetch_object()){
            ?>
            <tr>
                <td><?php echo $data->id ?></td>
                <td><?php echo $data->name ?></td>
                <td><?php echo $data->price ?></td>
                <td><?php echo $data->manufacturer_id ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>