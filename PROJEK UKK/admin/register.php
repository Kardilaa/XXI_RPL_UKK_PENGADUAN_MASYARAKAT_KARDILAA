<!DOCTYPE html>
<head>
    <title>masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body style="font-family: 'Poppins', sans-serif;background: #44B5FF">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="home-outline"Style="font-size:40px">Home</span></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="data_pengaduan2.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="grid-outline"Style="font-size:40px">Pengaduan</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                    <li>
                        <a href="register.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="create-outline"Style="font-size:40px">logout</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                    <li>
                        <a href="../logout.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"><ion-icon name="log-out-outline"Style="font-size:40px">logout</span> </a></ion-icon>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                           
                    </li>
                   
            </div>
        </div>
    <div style="padding: 50px;">
        <form action="proses_register.php"  method="POST">
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6" style="background:maroon;">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center text-white" style="font-family: 'Yeseva One', cursive;">R E G I S T E R</h2>
              <div class="mb-3 mt-3 text-center text-white">
                ID : <br>
                <input class="rounded-3 border-light" type="text" name="id_petugas" placeholder="insert your nik" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Name : <br>
                <input class="rounded-3 border-light" type="text" name="nama_petugas" placeholder="insert your name" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Username : <br>
                <input class="rounded-3 border-light" type="text" name="username" placeholder="username" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Nomor Telepon : <br>
                <input class="rounded-3 border-light" type="text" name="telp" placeholder="insert your phone number" style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Password : <br>
                <input class="rounded-3 border-light" type="password" name="password" placeholder="insert your password" style="width: 300px;"required>
              </div>
              <div class="mb-3 mt-3 text-center text-white">
                Level : <br>
                <input class="rounded-3 border-light" type="text" name="level" placeholder="insert you Level" style="width: 300px;"required>
              </div>
              <div class="mb-3 mt-3 text-center ">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </div>
            </form>
        </div>
</div>
</body>
</html>