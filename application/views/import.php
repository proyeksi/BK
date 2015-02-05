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
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <a href="<?php echo base_url(); ?>dokumen/download"><button class="btn btn-lg btn-block btn-info">Download</button></a><br/>
            <a href="<?php echo base_url(); ?>dokumen/import_csv"><button class="btn btn-lg btn-block btn-info">Improt CSV</button></a>
          </div>
        </div>
      </div>
    </section>
  </section>