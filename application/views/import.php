<section id="main-content">
  <section class="wrapper">

    <h3><i class="fa fa-angle-right"></i> Import Data Siswa</h3>
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
            <div class="row import">
        
        <div class="col-sm-7 col-md-8 col-lg-11">
            <br>
            <form method="post" action="<?php echo base_url(); ?>dokumen/import_csv" enctype="multipart/form-data">
              <!-- <button class="btn btn-lg btn-block btn-info">Improt CSV</button> -->
              
              <div class="well" id="wellUsr">
                <input type="file" name="userfile" size="36" id="usrFile">
              </div>
               <br>
              <button type="submit" id="btnUpload" class="btn btn-default btn-block"><i class="fa fa-cloud-upload"></i>  Upload & Export</button>
            </form><br/>
            <a href="<?php echo base_url(); ?>dokumen/download"><button class="btn btn-block btn-warning"><i class="fa fa-cloud-download"></i> Download</button></a>
          </div>
        </div>
      </div>
    </section>
  </section>