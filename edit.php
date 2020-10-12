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
  <a class="navbar-brand" href="home.php">CRUD PRAKTIKUM 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Tambah Data  <span class="sr-only">(current)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil-data.php">Tampil Data</a>
      </li>
        </div>
      </li>
    </ul>

  </div>
</nav>

<form>
    <div class="jumbotron">
         <h3>Form Edit Data</h3>
         <hr class="my-4">
            <div class="form-group">
            <?php
        include "koneksi.php";
        if(isset($_GET['sub']))
            $x = $_GET['idnya'];
        else    
            $x = $_GET['id'];
        
    ?>
                    <label class="col-form-label" for="inputDefault">Nama</label>
                    <input type="text" name="nm" class="form-control" placeholder="Masukan Nama Anda dengan lengkap"value="<?php 
         if(isset($_GET['sub'])) 
             echo $_GET['nm'];
         else{     
            $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=$x");
            $brs = mysqli_fetch_assoc($r);        
            echo $brs['nama'];
            }
        ?>">
                    <small id="nmHelp" class="form-text text-muted">Masukan nama Anda dengan benar, pastikan tidak salah dalam pengetikan dan tidak boleh kosong.</small>
            </div>

            <button type="submit" name="sub" class="btn btn-primary"   value="Simpan">SIMPAN</button>
            <a type="button" name="sub" class="btn btn-secondary" value="Tampil Data" href="tampil-data.php">TAMPIL DATA</a>
            <br>
    <input type="hidden" name="idnya" value="<?php echo $x; ?>">
    <?php
        if(isset($_GET['sub']) ){
            if($_GET['sub']=='kembali ke daftar data'){
                header("location:tampil-data.php");
            }
            else{
              if(strlen($_GET['nm'])){    
                //include "koneksi.php"; //di atas sudah ya
                mysqli_query($kon,"UPDATE `mahasiswa` SET `nama` = '".$_GET['nm']."' 
                                   WHERE `id` = ".$_GET['idnya']);
                echo "<br><i>Data <b>'".$_GET['nm']."'</b> telah disimpan sebagai perubahan pada database</i>";
                echo "<br>Silahkan klik tombol <i><b>TAMPIL DATA</b></i> untuk melihat hasilnya";
                //header("location:tampil_data_link_insert.php");
              }
             else{
                 echo "<br><b><i>Data Nama</i></b> baru tidak boleh kosong :)";
             }    
            }
        }
    ?>
        </div>
    </form>
</form>
</body>
</html>