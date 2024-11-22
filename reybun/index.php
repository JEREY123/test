<DOCTYPE html>
    <html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL - CRUD</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Form Section -->
    <section style="text-align: center; margin: 50px 0;">
        <h1>Simple PHP CRUD with MySQL</h1>
        <div class="container">
            <form action="adddata.php" method="post">
                <div class="row">
                <div class="form-group col-lg-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="masukan">Masukan</label>
                        <input type="text" name="masukan" id="masukan" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2 d-flex align-items-end">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Table Section -->
    <section style="margin: 50px 0;">
        <h4 style="text-align: center; margin: 50px 0;">Data Nilai Kelas 12</h4>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Masukan</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'conn.php';
                    $sql_query = "SELECT * FROM beli";
                    if ($beli = $conn->query($sql_query)) {
                        while ($row = $beli->fetch_assoc()) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $masukan = $row['masukan'];
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $masukan; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>