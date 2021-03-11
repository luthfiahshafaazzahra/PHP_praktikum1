<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>

<body>
    <div class="bg-success p-5">
        <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mt-3">
            <div class="card" >
                <div class="card-header bg-success text-white">
                    <h6>Belanja Online</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="form_belanja.php">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer</label>
                            <div class="col-sm-10">
                                <input type="text" name="customer" id="customer" class="form-control" value=""
                                    placeholder="Nama Customer">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pilih Produk</label>
                            <div class="col-sm-10 col-form-label">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="tv" value="TV">
                                    <label class="form-check-label">TV</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="kulkas"
                                        value="KULKAS">
                                    <label class="form-check-label">KULKAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="mesin_cuci"
                                        value="MESIN CUCI">
                                    <label class="form-check-label">MESIN CUCI</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlah" id="jumlah" class="form-control" value=""
                                    placeholder="Jumlah">
                            </div>
                        </div>

                        <div class="offset-2 pl-1">
                            <input type="submit" class="btn btn-success" value="KIRIM" name="proses">
                        </div>
                    </form>
                </div>
            </div>
		</div>
		<div class="col-md-3 mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-success text-white">
                    Hasil
                </div>
                <ul class="list-group list-group-flush">
                <?php
                  $proses = $_POST['proses'];
                  $customer = $_POST['customer'];
                  $produk = $_POST['produk'];
                  $jumlah = $_POST['jumlah'];

                  if ($produk == "TV") {
                      $total = $jumlah * 4200000;
                  } else if ($produk == "KULKAS") {
                      $total = $jumlah * 3100000;
                  } else if ($produk == "MESIN CUCI") {
                      $total = $jumlah * 3800000;
                  }
                  echo'<li class="list-group-item">Nama Customer : ' . $customer.'</li>';
                  echo'<li class="list-group-item">Produk Pilihan :' . $produk.'</li>';
                  echo'<li class="list-group-item">Jumlah Beli :' . $jumlah.'</li>';
                  echo'<li class="list-group-item">Total Belanja : Rp ' . number_format($total, 2, ',' , '.').' </li>';
                ?>
                </ul>
            </div>
		</div>
		<div class="col-md-3 mt-3 ">
			<div class="card" style="width: 18rem;">
                <div class="card-header bg-success text-white">
                    Daftar Harga
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 4.200.000,00</li>
                    <li class="list-group-item">KULKAS : Rp 3.100.000,00</li>
                    <li class="list-group-item">MESIN CUCI : Rp 3.800.000,00</li>
                </ul>
                <div class="card-footer bg-success text-white" >
                HARGA DAPAT BERUBAH SETIAP SAAT
                </div>
        </div>
		</div>
	</div>
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