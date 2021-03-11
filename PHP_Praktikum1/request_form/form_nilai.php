<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style></style>
  <title>Form Get</title>
</head>

<body>
<div class=" p-5" style="background-color: #12cad6 ;">
    <h2 class="text-center text-white">Sistem Penilaian</h2>
</div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 mt-3">
        <div class="card">
          <div class="card-header" style="background-color: #12cad6;">
            <h5 class="text-white">Form Nilai Siswa</h5>
          </div>
          <div class="card-body ">
            <form method="GET" action="form_nilai.php">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="" size="30" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Mata Kuliah</label>
                    <select name="matkul" class="custom-select">
                      <option value="DDP">Dasar-Dasar Pemrograman</option>
                      <option value="BDI">Basis Data I</option>
                      <option value="WEB1">Pemrograman Web</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nilai UTS</label>
                    <input type="text" name="nilai_uts" value="" size="6" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Nilai UAS</label>
                    <input type="text" name="nilai_uas" value="" size="6" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Nilai Tugas Praktikum</label>
                    <input type="text" name="nilai_tugas" value="" size="6" class="form-control" />
                  </div>
                </div>
              </div>
              <input type="submit" value="Simpan" name="proses" style="background-color: #12cad6;">
            </form>
          </div>
        </div>

      </div>
      <div class="col-md-4 mt-3">
        <div class="card">
          <div class="card-header text-white" style="background-color: #12cad6;">
            <h5>Hasil</h5>
          </div>
          <ul class="list-group list-group-flush">
            <?php
                    $proses = $_GET['proses'];
                    $nama = $_GET['nama'];
                    $matkul = $_GET['matkul'];
                    $nilai_uts = $_GET['nilai_uts'];
                    $nilai_uas = $_GET['nilai_uas'];
                    $nilai_tugas = $_GET['nilai_tugas'];

                    $total_nilai = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;
                
                    echo'<li class="list-group-item">Nama :'.$nama.'</li>';
                    echo'<li class="list-group-item">Mata Kuliah : ' . $matkul;'</li>';
                    echo'<li class="list-group-item"> Nilai UTS : '.$nilai_uts.'</li>';
                    echo '<li class="list-group-item">Niali UAS : '.$nilai_uas.' </li>';
                    echo'<li class="list-group-item">Nilai Praktikum : '.$nilai_tugas.' </li>';
                    echo'<li class="list-group-item">Nilai Total :  '.$total_nilai.'</li>';
                ?>
          </ul>

        </div>

      </div>
    </div>
</div>
    <br />
    <div class=" p-3" style="background-color: #12cad6;">
    <p class="text-center text-white">

      <b>
        Develop by
        <a href="https://github.com/luthfiahshafaazzahra" class="text-white" target="_blank">Luthfiah </a>
        &copy;2021
      </b>
    </p>
    
    
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>