<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | Registrasi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/regis.css" rel="stylesheet">
</head>

<body>
    <section class="get-in-touch p-5">
        <h1 class="title">Registrasi Pendaftar</h1>
        <form action="proses_regis.php" method="POST" enctype="multipart/form-data" class="contact-form row" autocomplete="false">
            <div class="form-field col-lg-6">
                <input id="nama" name="nama" class="input-text js-input" type="text" autocomplete="false" required>
                <label class="label" for="nama">Nama Lengkap</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="alamat" name="alamat" class="input-text js-input" type="text" autocomplete="false" required>
                <label class="label" for="alamat">Alamat</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="sekolah" name="sekolah_asal" class="input-text js-input" type="text" autocomplete="false" required>
                <label class="label" for="sekolah">Sekolah Asal</label>
            </div>
            <div class="form-field col-lg-6 ">
                <select name="agama" style="padding:6px; width:320px; font-size:18px; border-radius:15px;">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
                <label class="label mb-4" for="agama">Agama</label>
            </div>
            <div class="form-field col-lg-12">

                <label class="gender-label" for="gender">Jenis Kelamin</label><br>
                <input type="radio" class="btn-check js-input" name="jenis_kelamin" value="laki-laki" autocomplete="false" required>
                <label class="btn" for="male">Laki-Laki</label>

                <input type="radio" class="btn-check js-input" name="jenis_kelamin" value="perempuan" autocomplete="false" required>
                <label class="btn" for="female">Perempuan</label>
            </div>
            <div class="form-field col-lg-12">
                <label for="foto">Foto</label><br><br>
                <input type="file" name="foto" value=""><br><br>
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn" name="submit" type="submit" value="submit">
            </div>
        </form>
    </section>

</body>

</html>