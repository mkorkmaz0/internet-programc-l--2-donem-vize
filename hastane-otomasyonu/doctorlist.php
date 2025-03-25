<?php
// Veritabanı bağlantısı
$con = mysqli_connect("localhost", "root", "", "hospitalms");

if (!$con) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

$doctor_contact = "";
if (isset($_POST['doctor_search_submit'])) {
    $doctor_contact = mysqli_real_escape_string($con, $_POST['doctor_contact']);
    $query = "SELECT * FROM doctb WHERE email LIKE '%$doctor_contact%'";
} else {
    $query = "SELECT * FROM doctb";
}

$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktorları Görüntüle</title>
    <!-- Bootstrap ve W3CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
    <h3 class="w3-bar-item">Menü</h3>
    <a href="index.php" class="w3-bar-item w3-button">Anasayfa</a>
    <a href="doctorlist.php" class="w3-bar-item w3-button">Doktorları Görüntüle</a>
    <a href="hastalar.php" class="w3-bar-item w3-button">Hastaları Görüntüle</a>
    <a href="randevu_detaylari.php" class="w3-bar-item w3-button">Randevuları Görüntüle</a>
    <a href="recete_listesi.php" class="w3-bar-item w3-button">Reçeteleri Görüntüle</a>
    <a href="#list-add-doc" class="w3-bar-item w3-button">Doktor Ekle</a>
    <a href="#list-del-doc" class="w3-bar-item w3-button">Doktor Sil</a>
</div>

    <div class="container mt-4">
        <h2>Doktorları Görüntüle</h2>

        <!-- Arama Formu -->
        <form class="form-group" action="doctorlist.php" method="post">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="doctor_contact" placeholder="Enter Email ID" class="form-control" value="<?php echo $doctor_contact; ?>">
                </div>
                <div class="col-md-2">
                    <input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search">
                </div>
            </div>
        </form>

        <!-- Doktor Listesi Tablosu -->
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doktor Adı</th>
                    <th scope="col">Uzmanlık</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kullanıcı Adı</th>
                    <th scope="col">Ücretler</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $cnt = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $doctorname = $row['doctorname'];
                    $spec = $row['spec'];
                    $email = $row['email'];
                    $username = $row['username'];
                    $docFees = $row['docFees'];
                    echo "<tr>
                            <td>$cnt</td>
                            <td>$doctorname</td>
                            <td>$spec</td>
                            <td>$email</td>
                            <td>$username</td>
                            <td>$$docFees</td>
                          </tr>";
                    $cnt++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Bağlantıyı kapatma
mysqli_close($con);
?>
