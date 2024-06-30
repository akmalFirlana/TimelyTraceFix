<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'db_con.php'; ?>
    <div class="wrapper">
        <aside id="sidebar" class="expand">
            <div class="d-flex align-items-center justify-content-start mt-3"
                style="height: 50px; justify-content: center;">
                <button class="toggle-btn" type="button">
                    <img src="img/logo.svg" alt="logo" style="width: 40px;">
                </button>
                <div class="sidebar-logo">
                    <a href="../loginpage/landingpage.php">TimelyTrace</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="../CRUD/dashboard.php" class="sidebar-link">
                        <i class="fa-solid fa-house"></i>
                        <span style="font-weight: 600;">Beranda</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../input/input.php" class="sidebar-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span style="font-weight: 600;">Input</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../CRUD/Datapage.php" class="sidebar-link">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span style="font-weight: 600;">Catatan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../input/inputkelas.php" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span style="font-weight: 600;">Kelas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../FAQ/faq.php" class="sidebar-link">
                        <i class="fa-solid fa-headset"></i>
                        <span style="font-weight: 600;">FaQ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../loginpage/logout.php" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span style="font-weight: 600;">Logout</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div id="content" class="container-fluid">
            <div class="row">
                <h1 class="mt-4">Dashboard</h1>
                <div class="col-8">
                    <div class="row d-flex mb-3">
                        <div class="col-md-12 col-lg-6 mb-6">
                            <div class="card" style="height: 120px;">
                                <div class="card-body text-center d-flex align-items-center"
                                    style="justify-content: center; padding-bottom: 0px">
                                    <img src="img/Hari.svg" alt="logo" style="width: 40px; margin-right: 10px;">
                                    <h5 class="card-title mb-0 pb-0 pt-2" style="font-weight: 600;"> Siswa Terlambat
                                        <span style="font-weight: 500; color: #8B8B8B; display: flex; font-size: 14px;"> Hari ini </span>
                                    </h5>
                                </div>
                                <p class="card-text text-center mb-3"><strong><?php echo $count_today; ?> Siswa</strong>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-6">
                            <div class="card" style="height: 120px;">
                                <div class="card-body text-center d-flex align-items-center" style="justify-content: center; padding-bottom: 0px">
                                    <img src="img/rata.svg" alt="logo" style="width: 40px; margin-right: 10px;">
                                    <h5 class="card-title mb-0 pb-0 pt-2" style="font-weight: 600;"> Siswa Terlambat
                                        <span style="font-weight: 500; color: #8B8B8B; display: flex; font-size: 14px;">Rata-rata minggu ini</span></h5>
                                </div>
                                <p class="card-text text-center mb-3"><strong><?php echo round($avg_week, 2); ?> Siswa</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statistik keterlambatan siswa 7 hari terakhir</h5>
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Catatan Terakhir</h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Kelas</th>
                                                <th>Alasan</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($notes as $note): ?>
                                                <tr>
                                                    <td><?php echo $note['nama']; ?></td>
                                                    <td><?php echo $note['kelas']; ?></td>
                                                    <td><?php echo $note['alasan']; ?></td>
                                                    <td><?php echo $note['time']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <a href="../input/input.php" <button class="btn btn-primary"
                                        style="float: right; margin-right: 1rem">Tambah</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">Statistik keterlambatan siswa 7 hari
                                terakhir Menurut kelas</h5>
                            <canvas id="pieChart"></canvas>
                            <h6 class="card-title mt-3" style="font-weight: 600;">Statistik Kelas</h6>
                            <ul class="list-group list-group-flush mt-3">
                                <?php foreach ($data_class as $class_data): ?>
                                    <li class="list-group-item"><?php echo $class_data['kelas']; ?>:
                                        <?php echo $class_data['count']; ?> siswa
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <button onclick="location.href='../input/inputkelas.php'" class="btn btn-secondary mt-3 mb-5"
                            style="width: 240px; margin-right: 4rem; margin-left: 4rem; background-color: blue">Buat
                            Kelas Baru</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
        var lineCtx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode(array_column($data_last7days, 'date')); ?>,
                datasets: [{
                    label: 'Jumlah Siswa Terlambat',
                    data: <?php echo json_encode(array_column($data_last7days, 'count')); ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var pieCtx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode(array_column($data_class, 'kelas')); ?>,
                datasets: [{
                    data: <?php echo json_encode(array_column($data_class, 'count')); ?>,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',  // Dominan biru muda
                        'rgba(75, 192, 192, 0.6)',  // Biru kehijauan
                        'rgba(54, 162, 235, 0.4)',  // Biru muda transparan
                        'rgba(75, 192, 192, 0.4)',  // Biru kehijauan transparan
                        'rgba(54, 162, 235, 0.8)',  // Biru muda lebih pekat
                        'rgba(75, 192, 192, 0.8)'   // Biru kehijauan lebih pekat
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',  // Biru muda
                        'rgba(75, 192, 192, 1)',  // Biru kehijauan
                        'rgba(54, 162, 235, 1)',  // Biru muda
                        'rgba(75, 192, 192, 1)',  // Biru kehijauan
                        'rgba(54, 162, 235, 1)',  // Biru muda
                        'rgba(75, 192, 192, 1)'   // Biru kehijauan
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.raw;
                                return label;
                            }
                        }
                    }
                }
            }
        });

    </script>
</body>

</html>