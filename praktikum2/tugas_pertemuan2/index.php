<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container py-4">
    <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-md-8">
                <form method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                                <input name="produk" name="produk" type="radio" value="TV" required>
                                <label for="produk_0">TV</label>
                                <input name="produk" name="produk" type="radio" value="Kulkas" required>
                                <label for="produk_1">Kulkas</label>
                                <input name="produk" name="produk" type="radio" value="Mesin Cuci" required>
                                <label for="produk_2">Mesin Cuci</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <table class="table">
                    <tr class="bg-primary">
                        <th class="text-white">DAFTAR HARGA</th>
                    </tr>
                    <tr>
                        <td>TV : Rp.4.200.000</td>
                    </tr>
                    <tr>
                        <td>KULKAS : Rp.3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : Rp.3.800.000</td>
                    </tr>
                    <tr class="bg-primary">
                        <th class="text-white">HARGA DAPAT BERUBAH SETIAP SAAT</th>
                    </tr>
            </table>
            </div>
        </div>
        <table class="table">
            <tr class="table table-primary">
                <td>Nama</td>
                <td>Produk</td>
                <td>Jumlah</td>
                <td>Total Harga</td>
            </tr>
            <?php
            if (isset($_POST["submit"])) {
            $nama=$_POST["nama"];
            $produk=$_POST["produk"];
            $jumlah=$_POST["jumlah"];
                if ($produk == "TV") {
                    $harga=4200000;
                } else if ($produk == "Kulkas") {
                    $harga=3100000;
                }
                else if ($produk == "Mesin Cuci") {
                    $harga=3800000;
                }
                $total = $harga*$jumlah
            ?>
            <tr class="table table-secondary">
                <td><?= $nama ?></td>
                <td><?= $produk ?></td>
                <td><?= $jumlah ?></td>
                <td><?= $total ?></td>
                
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>