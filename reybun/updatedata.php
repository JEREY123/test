<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    if(isset($_POST['name']) && isset($_POST['kelas']) && isset($_POST['nilai'])){
        $name = $_POST['name'];
        $kelas = $_POST['kelas'];
        $nilai = $_POST['nilai'];
        $sql = "UPDATE beli SET name = '$name', class = '$kelas', nilai = $nilai WHERE id = ".$_GET["id"];
        if(mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD/Update</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center; margin: 50px 0;">Update Data</h1>
    <div class="container">
        <?php
            require_once "conn.php";
            $sql_query = "SELECT * FROM beli WHERE id = ".$_GET["id"];
            if ($beli = $conn ->query($sql_query)) {
                while ($row = $beli -> fetch_assoc()) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $masukan = $row["masukan"];
                }
            }
        ?>
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
</body>
</html>