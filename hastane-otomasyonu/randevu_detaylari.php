<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Detayları</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            margin-top: 30px;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center">Randevu Detayları</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hasta Adı</th>
                    <th scope="col">Cinsiyet</th>
                    <th scope="col">Randevu Tarihi</th>
                    <th scope="col">Doktor</th>
                    <th scope="col">İletişim</th>
                    <th scope="col">Durum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ali Yılmaz</td>
                    <td>Erkek</td>
                    <td>25 Mart 2025, 10:00</td>
                    <td>Dr. Ahmet Demir</td>
                    <td>5551234567</td>
                    <td><span class="badge badge-success">Onaylı</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Aylin Çelik</td>
                    <td>Kadın</td>
                    <td>26 Mart 2025, 11:30</td>
                    <td>Dr. Ayşe Korkmaz</td>
                    <td>5559876543</td>
                    <td><span class="badge badge-warning">Beklemede</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fatih Aydın</td>
                    <td>Erkek</td>
                    <td>27 Mart 2025, 14:00</td>
                    <td>Dr. Mehmet Öz</td>
                    <td>5556543210</td>
                    <td><span class="badge badge-danger">İptal</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gülseren Yılmaz</td>
                    <td>Kadın</td>
                    <td>28 Mart 2025, 15:30</td>
                    <td>Dr. Elif Sarı</td>
                    <td>5553210987</td>
                    <td><span class="badge badge-success">Onaylı</span></td>
                </tr>
                <!-- Diğer randevular burada listelenecek -->
            </tbody>
        </table>
    </div>

    <!-- jQuery, Popper.js ve Bootstrap JS dosyalarını yükle -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
