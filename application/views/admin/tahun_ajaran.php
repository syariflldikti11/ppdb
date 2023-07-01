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
                                  <th>Tahun Ajaran</th>
                                <th>Status</th>
                                <th>Opsi</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                $no=1;
                foreach ($dt_tahun_ajaran as $d):?>
                  
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d->tahun_ajaran; ?></td>
                        <td><?= $d->status; ?></td>

                       
                        <td><div align="center"><a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Delete" 
onclick="return confirm('anda yakin ingin menghapus data ini')"
href="<?php echo base_url('admin/delete_tahun_ajaran/'.$d->id_tahun_ajaran);?>" 
><i class="fa fa-trash fa-sm"></i></a> <a class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"  data-tooltip="tooltip"
  data-bs-placement="top"
  title="Edit" href="javascript:;"
       data-toggle="modal" data-target="#edit"   
          data-id="<?= $d->id_tahun_ajaran ?>"
          data-tahun_ajaran="<?= $d->tahun_ajaran ?>"
          data-status="<?= $d->status ?>"
        
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
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah Tahun Ajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open_multipart('admin/simpan_tahun_ajaran'); ?>
                  
                     
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input type="text" class="form-control"  name="tahun_ajaran"  required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="status" class="form-control">
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        
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
                    <h5 class="modal-title" id="exampleModalFormTitle">Edit Tahun Ajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open('admin/update_tahun_ajaran'); ?>
                   <input type="hidden" class="form-control" id="id"  name="id_tahun_ajaran" required>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input type="text" class="form-control"  name="tahun_ajaran" id="tahun_ajaran" required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="status" class="form-control">
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                        
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
            modal.find('#tahun_ajaran').attr("value",div.data('tahun_ajaran'));
            modal.find('#status').attr("value",div.data('status'));
           
        });
    });
</script>