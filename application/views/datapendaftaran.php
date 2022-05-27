<!DOCTYPE html>
<html>
    <head>
    <title>Pendaftaran Online</title>


</head>
    <body style="background-color: lightpink;">
        <center>
        <h3 style="padding: 5px; background-color: Salmon ; font-family: Georgia;"> Data Pendaftaran Online </h3>
        <table border="3" width="1200" >
            <tr>
                <tr bgcolor="#9F9EA0" align="center" >
                <th width="25px">No</th>
                <th width="35px">NIP</th>
                <th width="150px">Nama Lengkap</th>
                <th width="150px">Nama Panggilan</th>
                <th width="100px">TTL</th>
                <th width="200px">Alamat</th>
                <th width="150px">Nomor HP</th>
                <th width="75px">Agama</th>
                <th width="75px">Sekolah</th>
                <th width="75px">Jurusan</th>
                <th width="75px">Facebook</th>
            </tr>
            </tr>

            <?php 
            $no=1;
            foreach ($mahasiswa as $mhs):?>
                
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mhs['NIP']; ?></td>
                <td><?php echo $mhs['Nama_Lengkap']; ?></td>
                <td><?php echo $mhs['Nama_Panggilan']; ?></td>
                <td><?php echo $mhs['TTL']; ?></td> 
                <td><?php echo $mhs['Alamat']; ?></td>
                <td><?php echo $mhs['No_HP']; ?></td>
                <td><?php echo $mhs['Agama']; ?></td>
                <td><?php echo $mhs['Sekolah']; ?></td>
                <td><?php echo $mhs['Jurusan']; ?></td>
                <td><?php echo $mhs['Facebook']; ?></td>
            </tr>
            <?php endforeach ;?>

            <tr>
                <td colspan="10" align="center">
                    <a href="<?php echo site_url('Pendaftaran/tambah'); ?>">Tambah</a>
                </td>
            </tr>
        </table>
        </center>
    </body>
    </html>
