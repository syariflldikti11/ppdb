<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="container">

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pendaftaran</h3> 

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input type="text" class="form-control"  value="<?= $d->tahun_ajaran; ?>" readonly  >
                        
                      </div>
               <div class="form-group">
                        <label for="exampleInputEmail1">No Formulir</label>
                        <input type="text" class="form-control"  value="<?= $d->no_formulir; ?>" readonly  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" class="form-control"  value="<?= $d->nama_siswa; ?>" readonly  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                         <input type="text" class="form-control"  value="<?= $d->tempat_lahir; ?>" readonly  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="text" class="form-control"  value="<?= $d->tgl_lahir; ?>" readonly  >
                        
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">JK</label>
                         <input type="text" class="form-control"  value="<?= $d->jk; ?>" readonly  >
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input type="text" class="form-control"  value="<?= $d->agama; ?>" readonly  >
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah</label>
                        <input type="text" class="form-control"  value="<?= $d->nama_ayah; ?>" readonly  >
                      </div>
                      
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              

                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ibu</label>
                         <input type="text" class="form-control"  value="<?= $d->nama_ibu; ?>" readonly  >
                        
                      </div>
                      
                      <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" readonly rows="3" > <?= $d->alamat; ?></textarea>
                </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No Telp</label>
                        <input type="text" class="form-control"  value="<?= $d->no_telp; ?>" readonly  >
                        
                      </div>
              <div class="form-group">
                        <label for="exampleInputEmail1">Kartu Keluarga</label> <br />
                        <a href="<?= base_url(); ?>upload/<?= $d->kartu_keluarga; ?>">Lihat</a>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Akta Kelahiran</label> <br />
                        <a href="<?= base_url(); ?>upload/<?= $d->akta_kelahiran; ?>">Lihat</a>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto Diri</label>
                         <br />
                        <img src="<?= base_url(); ?>upload/<?= $d->foto; ?>" width="100px">
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                     
                        <a class="btn btn-primary" href="<?= base_url('site/cetak_pendaftaran'.'/'.$d->no_formulir); ?>">Cetak Bukti Pendaftaran</a>
                      </div>
                    
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

     

    </section>
    <!-- /.content -->
  </div>
</div>