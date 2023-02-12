<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Concerns</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit" ><i class="fas fa-pen"></i> Replies In</button>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox <small><b>Total : </b><?= $alltotal;?></small></h3>

              <div class="card-tools">
                <form class="form-inline" method="post" action="<?=base_url()?>Mail_controller/searchmail">
                <div class="input-group input-group-sm">
                  <input type="searchmail" class="form-control" name="searchmail" placeholder="Search Mail">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php foreach($allinbox as $row){?>
                    <?php if($row['status']== 0){?>
                    <a href="read">
                    <tr>
                      <!-- <td>
                        <div class="icheck-primary">
                          <input type="checkbox"  class="sub_chk" value="<?=$row['id'];?>" id="<?=$row['id'];?>">
                          <label for="<?=$row['id'];?>"></label>
                        </div>
                      </td> -->
                      <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                      <td class="mailbox-name"><a href="<?=base_url();?>Read/<?=$row['id'];?>" class="text-secondary"><?=$row['name'];?></a></td>
                      <td class="mailbox-subject text-secondary" ><b><?=$row['subject'];?></b> - 
                        <?php $string = $row['message'];
                        $string = character_limiter($string, 40);
                        echo $string;
                        ?>
                      </td>
                      <td class="mailbox-attachment"></td>
                      <td class="mailbox-date text-secondary"><?php echo date('m/d/Y h:ia ', strtotime($row['date_added'])); ?></td>
                    </tr>
                   </a>
                  <?php }else{?>
                     <a href="read">
                    <tr>
                      <!-- <td>
                        <div class="icheck-primary">
                          <input type="checkbox"  class="sub_chk" value="<?=$row['id'];?>" id="<?=$row['id'];?>">
                          <label for="<?=$row['id'];?>"></label>
                        </div>
                      </td> -->
                      <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                      <td class="mailbox-name"><a href="<?=base_url();?>Read/<?=$row['id'];?>"><b><?=$row['name'];?></b></a></td>
                      <td class="mailbox-subject" ><b><?=$row['subject'];?></b> - 
                        <?php $string = $row['message'];
                        $string = character_limiter($string, 40);
                        echo $string;
                        ?>
                      </td>
                      <td class="mailbox-attachment"></td>
                      <td class="mailbox-date"><b><?php echo date('m/d/Y h:ia ', strtotime($row['date_added'])); ?></b></td>
                    </tr>
                   </a>
                   <?php }?>
                  <?php }?>
                  <?php if(empty($allinbox)) { ?>
                    <tr class="text-center"><td colspan="8">No Messages</td></tr>
                <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
        <?php if(!empty($links)) { ?>
                                        <div class="card-footer float-right">
                                          <nav class="pagination float-right">
                                            <?php echo $links;?>
                                          </nav>
                                        </div>
                                    <?php } ?>          </div>
          
          <!-- /.card -->
        </div>
        </section>
</div>
<?php $this->load->view('Mailbox/modal');?>