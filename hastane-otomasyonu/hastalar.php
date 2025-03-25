<?php
$con = mysqli_connect("localhost", "root", "", "hospitalms");

if (!$con) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

$query = "SELECT * FROM patreg";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta Listesi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
</head>
<body>
    
    <div class="container mt-4">
        <h1>Hasta Listesi</h1>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ad Soyad</th>
                    <th scope="col">Cinsiyet</th>
                    <th scope="col">Email</th>
                    <th scope="col">İletişim</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cnt = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $gender = $row['gender'];
                    $email = $row['email'];
                    $contact = $row['contact'];

                    echo "<tr>
                            <td>$cnt</td>
                            <td>$fname $lname</td>
                            <td>$gender</td>
                            <td>$email</td>
                            <td>$contact</td>
                          </tr>";
                    $cnt++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
