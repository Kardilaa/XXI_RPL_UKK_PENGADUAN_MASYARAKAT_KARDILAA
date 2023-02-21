<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body style="background:#44B5FF">
    <div style="padding: 50px;">
        <form action="proses_register.php"  method="POST">
       
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">REGISTER</h2>
              <div class="mb-3 mt-3 text-center">
              nik  : <br>
                <input class="rounded-3 border-light" type="text" name="nik" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Username : <br>
                <input class="rounded-3 border-light" type="text" name="username" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                Password : <br>
                <input class="rounded-3 border-light" type="text" name="password" 
                style="width: 300px;">
              </div>
              <div class="mb-3 mt-3 text-center">
                No Hanphone : <br>
                <input class="rounded-3 border-light" type="text" name="telp" 
                style="width: 300px;">
                
</div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">Simpan</button> <br>
                
                </div>
              </div>
              </div>
            </form>
</body>
</html>
