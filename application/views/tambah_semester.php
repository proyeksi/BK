<section id="main-content">
  <section class="wrapper">

    <h3><i class="fa fa-angle-right"></i> Tambah Semester</h3>
    <?php
    if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){
      ?>




      <ul class="breadcrumb" id="crumbData2">
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

      <?php if (isset($data_error)) {
        print_r($error); 
      } ?>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">


            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>siswa/tambah_semester" 
              enctype="multipart/form-data" id="formSemester">
              <fieldset id="garisField1">
                <fieldset id="garisField2">
  
            <div class="form-group">
            <label class="col-lg-2 control-label">Awal Semester</label>
            <div class="input-group date col-lg-3" data-date-format="dd-mm-yyyy">
            <input type="text" class="form-control">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
            </div>
             <div class="form-group">
            <label class="col-lg-2 control-label">Akhir Semester</label>
            <div class="input-group date col-lg-3" data-date-format="dd-mm-yyyy">
            <input type="text" class="form-control">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
            </div>
             <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Tahun Ajaran</label>
            <div class="col-lg-2" id="inputTahunajar">
              <input type="text" class="form-control" placeholder="">
            </div>
            </div>
            <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Jenis</label>
      <div class="col-lg-2" id="inputJenis">
        <select class="form-control">
          <option>Ganjil</option>
          <option>Genap</option>
        </select>
      </div>
    </div>
            <button type="submit" id="btnUpload" class="btn btn-warning btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
          </fieldset>
          </fieldset>
          </form>
          <br>
          <section id="unseen">
          <table class="footable table" data-page-size="10">
          <thead>
            <tr>
              <td id="colNomer">Id</td>
              <td id="colNama">Nama</td>
              <td id="colTanggal">Awal semester</td>
              <td id="colTanggal">Akhir semester</td>
              <td id="colTanggal">Tahun ajaran</td>
              <td id="colNama">Jenis</td>
              <td id="colAksi">Aksi</td>
            </tr>
          </thead>
           <tbody>
            <?php
                foreach ($semester as $dataSemester) {?>
              <tr>
                <td id="colNomer">
                  <?php echo $dataSemester['id_tahun_ajaran'];?>
                </td>
                <td id="colNama">
                  <?php echo $dataSemester['nama_semester'];?>
                </td>
                <td id="colTanggal">
                  <?php echo $dataSemester['awal_semester'];?>
                </td>
                <td id="colTanggal">
                  <?php echo $dataSemester['akhir_semester'];?>
                </td>
                <td id="colTanggal">
                  <?php echo $dataSemester['tahun_ajaran'];?>
                </td>
                <td id="colNama">
                  <?php echo $dataSemester['jenis'];?>
                </td>
                <td id="colAksi">
                  edit hapus
                </td>
              </tr>
            <?php      
                }
             ?>
           </tbody>
             <tfoot>
                    <tr>
                      <td colspan="7">
                        <div class="pagination pagination-centered hide-if-no-paging"></div>
                      </td>
                    </tr>
            </tfoot>
          </table>
        </section>
        </div>
      </div>
    </div>
  </section>
</section>