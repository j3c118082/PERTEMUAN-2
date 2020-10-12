<!DOCTYPE html>
<html lang="en">
<head>
	<title>Galih W Priambudi</title>
	    <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="">CRUD PRAKTIKUM 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Tambah Data</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Tampil Data <span class="sr-only">(current)</a>
      </li>
        </div>
      </li>
    </ul>

  </div>
</nav>
<form>

<div class="jumbotron">
         <h3>Hapus Data?</h3>
         <hr class="my-4">
            <div class="form-group">
                   
<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="mr-auto">Konfrimasi Hapus!</strong>
    <small>INF 55</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
  <?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=".$_GET["id"]);
    $brs = mysqli_fetch_assoc($r);
    echo "Apakah Anda yakin akan menghapus nama ".$brs['nama']." dari tabel?";
?>          
            <br>
            <br>
            <input type="hidden" name="idDelete" value="<?php echo $_GET["id"]; ?>">
          <button type="submit" name="jawaban" class="btn btn-primary"   value="ya">IYA</button>
        <button type="submit" name="jawaban" class="btn btn-secondary" value="tidak">TIDAK</a>
  </div>
</div>
</form>
</div>
<?php
    if(isset($_GET['jawaban'])){
        if($_GET['jawaban']=="tidak")
            header("location:tampil-data.php");
        else{
            $r = mysqli_query($kon,"DELETE FROM `mahasiswa` WHERE `id` = ".$_GET['idDelete']);
            header("location:tampil-data.php");
            
        }
            
    }
?>


</body>
</html>