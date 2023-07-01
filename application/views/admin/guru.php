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
               
               <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addguru" href="#">Tambah  </a>
             
              </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                  <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                              
                                <th>Jenjang</th>
                                <th>Jabatan</th>
                                <th>Opsi</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                $no=1;
                foreach ($dt_guru as $d):?>
                  
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->nama_guru; ?></td>
                        <td><?= $d->tempat_lahir; ?></td>

                        <td><?= $d->tgl_lahir; ?></td>
                        <td><?= $d->jenjang; ?></td>
                        <td><?= $d->jabatan; ?></td>
                        <td><div align="center"><a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_guru/'.$d->id_guru);?>" 
><i class="fa fa-trash fa-sm"></i></a> <a class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-toggle="modal" data-target="#edit"   
          data-id="<?= $d->id_guru ?>"
          data-nama_guru="<?= $d->nama_guru ?>"
          data-tempat_lahir="<?= $d->tempat_lahir ?>"
          data-tgl_lahir="<?= $d->tgl_lahir ?>"
          data-jenjang="<?= $d->jenjang ?>"
          data-jabatan="<?= $d->jabatan ?>"
          > 
<i class="fa fa-edit fa-sm"></i></a></div></td>
                       
                    </tr>
                   <?php endforeach; ?>
                          
                        </tbody>
                      
                    </table>
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

<div class="modal fade" id="addguru" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open_multipart('admin/simpan_guru'); ?>
                  
                     
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Guru</label>
                        <input type="text" class="form-control"  name="nama_guru"  required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir"  required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir"  required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenjang</label>
                        <input type="text" class="form-control"  name="jenjang"  required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control"  name="jabatan"  required  >
                        
                      </div>
                      
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit"  class="btn btn-primary btn-pill" value="Tambah">
                  </div>
                  </form>
                </div>
              </div>
            </div>


                     <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Edit Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/update_guru'); ?>
                   <input type="hidden" class="form-control" id="id"  name="id_guru" required>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Guru</label>
                        <input type="text" class="form-control"  name="nama_guru" id="nama_guru"  required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir" id="tempat_lahir"   required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" id="tgl_lahir"   required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenjang</label>
                        <input type="text" class="form-control"  name="jenjang" id="jenjang"   required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control"  name="jabatan" id="jabatan"  required  >
                        
                      </div>
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit"  class="btn btn-primary btn-pill" value="Update">
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <script>
    $(document).ready(function() {
      
        $('#edit').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal   = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama_guru').attr("value",div.data('nama_guru'));
            modal.find('#tempat_lahir').attr("value",div.data('tempat_lahir'));
            modal.find('#tgl_lahir').attr("value",div.data('tgl_lahir'));
            modal.find('#jenjang').attr("value",div.data('jenjang'));
            modal.find('#jabatan').attr("value",div.data('jabatan'));
        });
    });
</script>