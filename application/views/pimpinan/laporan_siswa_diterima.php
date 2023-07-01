<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <table width="100%" border="0">
  <tr>
    <td width="16%">
     <img src="<?= base_url(); ?>assets/images/logopaud.jpg" alt="" class="user-image" width="80%"> </td>
    <td width="84%"><p align="center"><b><font size="+3">PAUD NURUL ISTIQOMAH</font></b><br>
  
        <font size="-1"> Perumahan Lobam Bestari RT03 RW07 <br />
       Kec. Sri Kuala Lobam Kab. Bintan</font>     
    </td>
  </tr>
</table>
<div style='mso-element:para-border-div;border:none;border-top:solid windowtext 3.0pt;
padding:1.0pt 0cm 0cm 0cm'>
<p />
<div align="center"><strong>LAPORAN SISWA DITERIMA</strong></div>
<p>
    <script>
  window.print();
  </script>
   </p>

 <br />
<table class="w3-table-all">
                                   <thead>
                                        <tr class="w3-black" >
                          
                                <th>No</th>
                                  <th>No Formulir</th>
                                  <th>Tahun Ajaran</th>
                                  <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>JK</th>
                              
                                <th>Agama</th>
                                <th>Nama Ibu</th>
                                <th>Nama Ayah</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                               
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                $no=1;
                foreach ($dt_laporan as $d):?>
                  
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->no_formulir; ?></td>
                        <td><?= $d->tahun_ajaran; ?></td>
                        <td><?= $d->nama_siswa; ?></td>
                        <td><?= $d->tempat_lahir; ?></td>

                        <td><?= $d->tgl_lahir; ?></td>
                        <td><?= $d->jk; ?></td>
                        <td><?= $d->agama; ?></td>
                        <td><?= $d->nama_ibu; ?></td>
                        <td><?= $d->nama_ayah; ?></td>
                        <td><?= $d->alamat; ?></td>
                        <td><?= $d->no_telp; ?></td>
                       
                       
                    </tr>
                   <?php endforeach; ?>
                          
                        </tbody>
                      
                    </table>
<p>&nbsp;</p>
<p align="right">Bintan, <?= date('d-m-Y'); ?></p>
<p align="right">&nbsp;</p>
<p align="right">
  Pimpinan
</p>
<p>&nbsp;</p>
</body>
</html>
