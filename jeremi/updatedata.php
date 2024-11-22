<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tanggal'])  && isset($_POST['villa'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tanggal = $_POST['tanggal'];
        $villa = $_POST['villa'];
        $sql = "UPDATE buy SET name = '$name', email = '$email', tanggal = $tanggal, villa = $villa WHERE id = ".$_GET["id"];
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
    <h1 style="text-align: center; margin: 50px 0;">Update Data</h1>
    <div class="container">
        <?php
            require_once "conn.php";
            $sql_query = "SELECT * FROM buy WHERE id = ".$_GET["id"];
            if ($buy = $conn ->query($sql_query)) {
                while ($row = $buy -> fetch_assoc()) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $tanggal = $row["tanggal"];
                    $villa = $row["villa"];
                }
            }
        ?>
       <!-- Form Section -->
    <section style="text-align: center; margin: 50px 0;">
        <h1>SEWA VILLA</h1>
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
         
</body>
</html>