  <DOCTYPE html>
    <html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VILLA</title>

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
        <h1>Sewa Villa</h1>
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
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="villa">Villa</label>
                        <select name="villa" id="villa" class="form-control" required>
                          <option value="">Pilih Villa</option>
                          <option value="De Pointe Resort & Resto" <?php if($villa = "De Pointe Resort & Resto"){ echo "Selected"; } ?> >De Pointe Resort & Resto</option>
                          <option value="Glamping at Taman Wisata Alam Sevillage Puncak" <?php if($villa = "Glamping at Taman Wisata Alam Sevillage Puncak"){ echo "Selected"; } ?> >Glamping at Taman Wisata Alam Sevillage Puncak</option>
                          <option value="LOT449 Glass House" <?php if($villa = "LOT449 Glass House"){ echo "Selected"; } ?> >LOT449 Glass House</option>
                          <option value="Villa AWLS & Resort Puncak" <?php if($villa = "Villa AWLS & Resort Puncak"){ echo "Selected"; } ?> >Villa AWLS & Resort Puncak</option>
                          <option value="De Boekit Villas" <?php if($villa = "De Boekit Villas"){ echo "Selected"; } ?> >De Boekit Villas</option>
                          <option value="Pesona Rinjani" <?php if($villa = "Pesona Rinjani"){ echo "Selected"; } ?> >Pesona Rinjani</option>
                          <option value="Damar Langit Resort" <?php if($villa = "Damar Langit Resort"){ echo "Selected"; } ?> >Damar Langit Resort</option>
                          <option value="Villa dan Cafe air Ulijahalill" <?php if($villa = "Villa dan Cafe air Ulijahalill"){ echo "Selected"; } ?> >Villa dan Cafe air Ulijahalill</option>
                          <option value="Pakalangan Gamping Resorts" <?php if($villa = "Pakalangan Gamping Resorts"){ echo "Selected"; } ?> >Pakalangan Gamping Resorts</option>
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
        <h4 style="text-align: center; margin: 50px 0;">Data Pembelian Villa</h4>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Villa</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'conn.php';
                    $sql_query = "SELECT * FROM buy";
                    if ($buy = $conn->query($sql_query)) {
                        while ($row = $buy->fetch_assoc()) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $tanggal = $row['tanggal'];
                            $villa = $row['villa'];
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $villa; ?></td>
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