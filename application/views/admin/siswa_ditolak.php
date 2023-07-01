<div class="content-wrapper">
    <div class="container">


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= $judul; ?></h3> 
<div class="box-tools">
               
              
             
              </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">

                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
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
                                <th>KK</th>
                                <th>Akta</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                $no=1;
                foreach ($dt_calon_siswa as $d):?>
                  
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
                        <td><a href="<?= base_url(); ?>upload/<?= $d->kartu_keluarga; ?>">Lihat</a></td>
                        <td><a href="<?= base_url(); ?>upload/<?= $d->akta_kelahiran; ?>">Lihat</a></td>
                        <td><a href="<?= base_url(); ?>upload/<?= $d->akta_kelahiran; ?>"><img src="<?= base_url(); ?>upload/<?= $d->foto; ?>" width="100px"></a></td>
                        <td><div align="center"><a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Setujui" 
onclick="return confirm('anda yakin ingin menerima siswa ini')"
href="<?php echo base_url('admin/setujui/'.$d->no_formulir);?>" 
><i class="fa fa-check fa-sm"></i></a> <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Tolak" 
onclick="return confirm('anda yakin ingin menolak siswa ini')"
href="<?php echo base_url('admin/tolak/'.$d->no_formulir);?>" 
><i class="fa fa-close fa-sm"></i></a></div></td>
                       
                    </tr>
                   <?php endforeach; ?>
                          
                        </tbody>
                      
                    </table>
                </div>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
</div></div>
<!-- /.content -->

