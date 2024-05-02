<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-4">Data Siswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <td><?php echo $row->nama_siswa; ?></td>
                        <td><?php echo $row->nis; ?></td>
                        <td><?php echo $row->kelas; ?></td>
                        <td><?php echo $row->tanggal_lahir; ?></td>
                        <td><?php echo $row->tempat_lahir; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->jenis_kelamin; ?></td>
                        <td><?php echo $row->agama; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?php echo site_url('siswa'); ?>" class="btn btn-primary">Input Data Siswa Baru</a>
    </div>
</body>

</html>