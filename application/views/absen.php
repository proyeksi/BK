 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Edit Data</h3>

          <?php
          if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){
            ?>
            <ul class="breadcrumb" id="crumbData">
              <?php
              foreach ($breadcrumb as $key=>$value) {
                if($value!=''){
                  ?>
                  <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a> <span class="divider"></span></li>
                  <?php }else{?>
                  <li class="active"><?php echo $key; ?></li>
                  <?php }
                }
                ?>     
              </ul>
              <?php
            }
            ?>
            
            <div class="row mt">
              <div class="col-md-12">
                <div class="content-panel">
                  <div class="row ms">
                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <label class="control-label" for="select">Tahun</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                      </div>
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      <select class="form-control" id="select">
                        <option>NIS</option>
                        <option>Nama</option>
                        <option>Kelas</option>
                        <option>Keterangan</option>
                        <option>No. HP</option>
                      </select>
                    </form>

                    <br>
                    <form class="form-inline" role="form" action="<?php echo base_url();?>siswa/input_kelas" method="post">
                      <div class="form-group">
                        <label class="control-label" for="select">Kelas</label>
                        &nbsp
                        <select name="kelas" class="form-control" id="select">
                          <?php foreach ($kelas as $data) {
                           ?>
                           <option value="<?php echo $data['id_kelas'];?>"><?php echo $data['nama_kelas']; ?></option>
                           <?php } ?>
                         </select>
                         &nbsp
                         <select name="semester" class="form-control" id="select">
                          <?php foreach ($semester as $data) {
                           ?>
                           <option value="<?php echo $data['id_tahun_ajaran'];?>"><?php echo $data['nama_semester']; ?></option>
                           <?php } ?>
                         </select>
                       </div>
                     </div>
                     <button type="submit">daftar</button>
                     <table class="footable table-bordered table-striped">

                      <thead>
                        <tr>
                          <th><i class="fa fa-bullhorn"></i> NIS</th>
                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama</th>
                          <th><i class="fa fa-bookmark"></i> Cek List</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($siswa as $data) {$nis = $data['nis'];?>
                        <tr>
                          <td><?php echo $data['nis']; ?></td>
                          <td><?php echo $data['nama'];?></td>
                          <td><input type="checkbox" name="nis[]" value="<?php echo $data['nis'];
                           ?>"></td>
                         </tr>
                         <?php } ?>
                       </tbody>
                       <tfoot>
                        <tr>
                          <td colspan="5">
                            <div class="pagination pagination-centered hide-if-no-paging"></div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </form>
                </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->
            </div><!-- /row -->
            
            
          </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->

      <!--main content end-->