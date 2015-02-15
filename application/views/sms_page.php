
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-inbox"></i> Pesan</h3>
            
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

            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="content-panel">

    <div class="row pesan">
        
        <div class="col-sm-9 col-md-10 col-lg-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-pencil">
                </span>Buat Pesan</a></li>
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span>
                    Inbox&nbsp;<span class="badge">42</span></a></li>
                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-comment"></span>
                    Outbox&nbsp;<span class="badge">42</span></a></li>
                 <li><a href="#sent" data-toggle="tab"><span class="glyphicon glyphicon-send"></span>
                    Sent Item&nbsp;<span class="badge">42</span></a></li>
               
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    


                    <form class="form-horizontal" method="get" id="formPesan">
                    

                      <div class="form-group">
                      <label for="select" class="col-md-1 control-label">No. HP</label>
                          <div class="col-sm-2 col-md-3 col-lg-3">
                          <input type="text" class="form-control" name="nomerHp">
                          </div>
                      </div>

                      <div class="form-group">
                            <label for="textArea" class="col-md-1 control-label">Pesan</label>
                            <div class="col-lg-6">
                              
                              <textarea class="form-control" rows="3" id="textArea" name="textPesan"></textarea>
                              <span class="help-block">Tuliskan pesan pada kolom di atas ini.</span>
                            </div>
                      </div>

                      <div class="form-group">
                          <div class="col-lg-5 col-lg-offset-1">
                          <button class="btn btn-danger">Batal</button>
                          <button type="submit" class="btn btn-default">Kirim</button>
                          </div>
                      </div>  

                    </form>
                               
                              
                   
                </div>

                <div class="tab-pane fade in" id="profile">
                    <table class="footable table-bordered" data-page-size="7">
                            
                              <thead>
                              <tr>
                                  <th data-type="numeric" id="colNomer"> No</th>
                                  <th class="hidden-phone" id="colHP"><i class="fa fa-mobile fa-2x"></i>&nbsp; No. HP</th>
                                  <th id="colPesan"><i class="fa fa-envelope"></i>&nbsp; Pesan</th>
                                  <th id="colTanggal"><i class=" fa fa-calendar"></i>&nbsp; Tanggal</th>
                                  <th id="colAksi"><i class=" fa fa-wrench"></i>&nbsp; Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td id="colIsi">1</td>
                                  <td id="colIsi">Lorem Ipsum dolor</td>
                                  <td id="colIsi">12000.00$ </td>
                                  <td id="colIsi"><span class="label label-info label-mini">Due</span></td>
                                  <td id="colIsi">
                                      <button class="btn btn-success btn-xs"><i class="fa fa-reply"></i></button>
                                      <button class="btn btn-danger btn-xs tooltips" data-placement="top" data-original-title="Hapus" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
    <tr>
      <td colspan="5">
        <div class="pagination pagination-centered hide-if-no-paging"></div>
      </td>
    </tr>
  </tfoot>
                          </table>
                </div>

                <div class="tab-pane fade in" id="messages">

                   <table class="footable table-bordered" data-page-size="7">
                            
                              <thead>
                              <tr>
                                  <th data-type="numeric" id="colNomer"> No</th>
                                  <th class="hidden-phone" id="colHP"><i class="fa fa-mobile fa-2x"></i>&nbsp; No. HP</th>
                                  <th id="colPesan"><i class="fa fa-envelope"></i>&nbsp; Pesan</th>
                                  <th id="colTanggal"><i class="fa fa-calendar"></i>&nbsp; Tanggal</th>
                                 
                                  <th id="colAksi"><i class=" fa fa-wrench"></i>&nbsp; Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td id="colIsi">1</td>
                                  <td id="colIsi">Lorem Ipsum dolor</td>
                                  <td id="colIsi">12000.00$ </td>
                                  <td id="colIsi">12000.00$ </td>
                                 
                                  <td id="colIsi">
                                      <button class="btn btn-danger btn-xs tooltips" data-placement="right" data-original-title="Hapus" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
    <tr>
      <td colspan="6">
        <div class="pagination pagination-centered hide-if-no-paging"></div>
      </td>
    </tr>
  </tfoot>
                          </table>

                </div>
                
                <div class="tab-pane fade in" id="sent">

                   <table class="footable table-bordered" data-page-size="7">
                            
                              <thead>
                              <tr>
                                  <th data-type="numeric" id="colNomer"> No</th>
                                  <th class="hidden-phone" id="colHP"><i class="fa fa-mobile fa-2x"></i>&nbsp; No. HP</th>
                                  <th id="colTanggal"><i class="fa fa-calendar"></i>&nbsp; Tanggal</th>
                                  <th id="colPesan"><i class="fa fa-envelope"></i>&nbsp; Pesan</th>
                                  
                                  <th id="colTanggal"><i class=" fa fa-wifi"></i>&nbsp; Status</th>
                                  <th id="colAksi"><i class=" fa fa-wrench"></i>&nbsp; Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td id="colIsi">1</td>
                                  <td id="colIsi">Lorem Ipsum dolor</td>
                                  <td id="colIsi">12000.00$ </td>
                                  <td id="colIsi">12000.00$ </td>
                                  <td id="colIsi"><span class="label label-info label-mini">Due</span></td>
                                  <td id="colIsi">
                                      <button class="btn btn-danger btn-xs tooltips" data-placement="right" data-original-title="Hapus" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
    <tr>
      <td colspan="6">
        <div class="pagination pagination-centered hide-if-no-paging"></div>
      </td>
    </tr>
  </tfoot>
                          </table>

                </div>

            </div>
            
            <div class="row-md-12">

            </div>
        </div>
    </div>


                  
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->   

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Delete Data</h4>
      </div>
      <br>
      <div class="modal-body">
        <form>
          <p>Hapus Data ?</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Ya</button>
      </div>
    </div>
  </div>
</div>
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

     