<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<div align="center"><strong>BUKTI PENDAFTARAN</strong></div>
<p>
    <script>
  window.print();
  </script>
   </p>
  <center><img src="<?= base_url(); ?>upload/<?= $d->foto; ?>" width="150px"></center>
 <br />
<table width="100%" border="0">
  <tr>
    <td width="12%">No Formulir</td>
    <td width="88%">: <?= $d->no_formulir; ?></td>
  </tr>
  <tr>
    <td>Tahun Ajaran</td>
    <td>: <?= $d->tahun_ajaran; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>: <?= $d->nama_siswa; ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>: <?= $d->tempat_lahir; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>: <?= $d->tgl_lahir; ?></td>
  </tr>
  <tr>
    <td>JK</td>
    <td>: <?= $d->jk; ?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>: <?= $d->agama; ?></td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td>: <?= $d->nama_ayah; ?></td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
    <td>: <?= $d->nama_ibu; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>: <?= $d->alamat; ?></td>
  </tr>
  <tr>
    <td>No Telp</td>
    <td>: <?= $d->no_telp; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="right">Bintan, <?= date('d-m-Y'); ?></p>
<p align="right">&nbsp;</p>
<p align="right">
  <?= $d->nama_siswa; ?>
</p>
<p>&nbsp;</p>
</body>
</html>
