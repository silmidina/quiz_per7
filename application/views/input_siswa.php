<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-4">Input Data Siswa</h2>
        <form action="<?php echo site_url('siswa/inputData'); ?>" method="post">
            <div class="form-group">
                <label>Nama Siswa:</label>
                <input type="text" class="form-control" name="nama_siswa" required>
            </div>
            <div class="form-group">
                <label>NIS:</label>
                <input type="text" class="form-control" name="nis" required>
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempat_lahir" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea class="form-control" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Agama:</label>
                <select class="form-control" name="agama" required>
                    <option value="">-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>