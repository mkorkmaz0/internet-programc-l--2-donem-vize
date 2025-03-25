<?php
// Veritabanı bağlantısı
$con = mysqli_connect("localhost", "root", "", "hospitalms");

// Bağlantı kontrolü
if (mysqli_connect_errno()) {
    echo "Bağlantı hatası: " . mysqli_connect_error();
    exit();
}

// Veritabanından reçeteleri çekme
$query = "SELECT * FROM prestb";
$result = mysqli_query($con, $query);
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçeteler</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Reçete Listesi</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doktor</th>
                    <th scope="col">Ad Soyad</th>
                    <th scope="col">Randevu Tarihi</th>
                    <th scope="col">Randevu Saati</th>
                    <th scope="col">Hastalık</th>
                    <th scope="col">Alerji</th>
                    <th scope="col">Reçete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Veritabanından alınan verilerin tabloya eklenmesi
                while ($row = mysqli_fetch_array($result)) {
                    $doctor = $row['doctor'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $appdate = $row['appdate'];
                    $apptime = $row['apptime'];
                    $disease = $row['disease'];
                    $allergy = $row['allergy'];
                    $pres = $row['prescription'];
                ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $doctor; ?></td>
                        <td><?php echo $fname . ' ' . $lname; ?></td>
                        <td><?php echo $appdate; ?></td>
                        <td><?php echo $apptime; ?></td>
                        <td><?php echo $disease; ?></td>
                        <td><?php echo $allergy; ?></td>
                        <td><?php echo $pres; ?></td>
                    </tr>
                <?php
                    $cnt++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Veritabanı bağlantısını kapatma
mysqli_close($con);
?>
