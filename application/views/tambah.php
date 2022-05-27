<!DOCTYPE html>
<html>
<head>
        <title> Data Pendaftran </title>
</head>

<body style="background-color: lightpink; font-family: Georgia;">
    <h3>Form Data Pendaftaran Mahasiswa <h3>
    
        <form method="post" action="<?php echo site_url('Pendaftaran/proses_tambah'); ?>">
            <table>
                <tr>
                    <td>NIP</td>
                    <td><input typr="text" name="NIP"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input typr="text" name="Nama_Lengkap"></td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td><input typr="text" name="Nama_Panggilan"></td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td><input typr="text" name="TTL"></td>
                </tr>
                <tr>
                    <td valign="top">Alamat</td>
                    <td>
                        <textarea name="Alamat" cols="50" rows="4 "></textarea>

                        </td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td><input typr="text" name="No_HP"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input typr="text" name="Agama"></td>
                </tr>
                <tr>
                    <td>Sekolah</td>
                    <td><input typr="text" name="Sekolah"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input typr="text" name="Jurusan"></td>
                </tr>
                <tr>
                    <td>Facebook</td>
                    <td><input typr="text" name="Facebook"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="simpan">
                    </td>
                </tr>
            </table>
        </form>
</body>
