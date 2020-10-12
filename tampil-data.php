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
<div class="jumbotron">
         <a type="button" class="btn btn-primary" value="Tampil Data" href="insert.php">TAMBAH DATA</a>
         <br>
         <br>
         <h3>Daftar Data Dalam Database</h3>
         <hr class="my-4">
            
    <?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i = 0;
    ?>

        <div class="form-group">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-active">
                            <th scope="row">Nama</th>
                            <th scope="row">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
   
   
   <?php                
        while($brs = mysqli_fetch_assoc($r)){

        echo  "<tr><td>".$brs['nama']."</td>
               <td><a href='edit.php?id=".$brs['id']."'>EDIT</a> || <a href='delete.php?id=".$brs['id']."'>DELETE</a></td></tr>";
    }

?>
                    </tbody>
                    </table> 
        </div>


</body>
</html>

