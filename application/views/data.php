 
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">

          <h3><i class="fa fa-angle-right"></i> Data Siswa</h3>
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
            <div class="row data">
              <div class="col-lg-12">
                <div class="content-panel">

                  <div class="row ms">    
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2" >
                      <select class="form-control" id="select">
                        <option>NIS</option>
                        <option>Nama</option>
                        <option>Kelas</option>
                        <option>Keterangan</option>
                        <option>No. HP</option>
                      </select>
                    </div>

                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3" >
                      <div class="right-inner-addon">
                       <i class="fa fa-search"></i>
                       <input type="search" class="form-control" placeholder="Search" id="query"/>
                     </div>
                   </div>
                 </div>
                 <section id="unseen">
                  <table class="footable table-bordered table-striped" data-page-size="10">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th class="numeric">No. HP</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     if ($data != 'kosong') {
                       foreach ($data as $tampil) {
                        echo "<tr>";
                        echo '<td>'.$tampil['nis'].'</td>';
                        echo '<td>'.$tampil['nama'].'</td>';
                        echo '<td>'.$tampil['kelas'].'</td>';
                        echo '<td>'.$tampil['no_hp'].'</td>';
                        echo '</tr>';
                      }
                    }?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5">
                        <div class="pagination pagination-centered hide-if-no-paging"></div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </section>
            </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
        

      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->