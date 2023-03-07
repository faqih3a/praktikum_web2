<?php require_once "proses_registrasi.php";?>
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
    <div class="container">
        <fieldset>
            <legend>Form Registrasi IT Data Science </legend>
        <form method="post">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="prodi" name="prodi" class="custom-select" required="required">
            <?php foreach ($prodi as $key => $value) { ?>
                <option value="<?= $key;?>"><?= $value;?></option>;
           <?php }?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web & Programming</label> 
            <div class="col-8">

                <?php foreach ($skills as $key => $value) {?>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="<?= $key;?>" type="checkbox" class="custom-control-input" value="<?= $key;?>" > 
                    <label for="<?= $key;?>" class="custom-control-label"><?= $key;?></label>
                </div>

            <?php }?>
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat" class="col-4 col-form-label">Tempat Domisili</label> 
            <div class="col-8">
            <select id="tempat" name="tempat" class="custom-select" required="required">

            <?php foreach ($domisili as $dom) { ?>
                <option value="<?= $dom;?>"><?= $dom;?></option>;
           <?php }?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <hr>
        <table class="table table-bordered">
            <tr class="text-uppercase table-primary">
                <th>nim</th>
                <th>nama</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
                <th>Skill</th>
                <th>Domisili</th>
                <th>email</th>


            </tr>
            <?php 
            if(isset($_POST["submit"])) {
                $nim = $_POST["nim"];
                $nama = $_POST["nama"];
                $email = $_POST["email"];
                $jenis_kelamin = $_POST["jk"];
                $domisili = $_POST["tempat"];
                $prodi = $_POST["prodi"];
                $skills = $_POST["skill"];
            ?>
            <tr>
                <td><?= $nim; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $prodi;?></td>
                <td><?php foreach($skills as $skill){echo $skill ." ";}?></td>
                <td><?= $domisili;?></td>
                <td><?= $email; ?></td>
                

            </tr>
            <?php }?>
        </table>

</fieldset>
</div>
</body>
</html>