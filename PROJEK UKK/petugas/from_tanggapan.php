
<!doctype html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body bg-secondary.bg-gradient>
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
     <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
      <li class="nav-item">
        <a href="home.php" class="nav-link align-middle px-0"> <span class="ms-1 d-none d-sm-inline"> 
     <i class="fs-4 bi-house"></i>Home</span>
         </a>
         </li>
         <li>
    <a href="datapengaduan.php" class="nav-link px-0 align-middle">
     <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Pengaduan</span> </a>          
     </li>
     <li>
    <a href="#" class="nav-link px-0 align-middle">
    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Laporan Pengaduan</span></a>
                    </li>
                    
                    <li>
                        <a href="logout.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="kaa.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Member</span>
                    </a>
                    
                </div>
            </div>
        </div>
 <form action ="proses_tambahdata.php" method="POST" enctype="multipart/form-data">
     <h1> Tanggapan</h1> 
     <div class="mb-3">
              <center> 
                <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
               <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3" style="width: 300px;"></textarea></center>
                </div>  
            </form>
    
  </body>
</html>
