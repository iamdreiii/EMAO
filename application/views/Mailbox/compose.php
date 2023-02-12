<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose Email</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
              <?= form_open('Compose');?>
              <div class="card-body">
                <div class="form-group">
                  <input type="email" name="to_mail" class="form-control" placeholder="To:" id="to_mail">
                  <?php echo form_error('to_mail');?>
                </div>

                <div class="form-group">
                  <input class="form-control" placeholder="Subject:" id="subject" type="text" name="subject">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px"></textarea>
                </div>
                <!-- <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div> -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <!-- <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button> -->
                  <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-default" onclick="document.getElementById('compose-textarea').value = '';document.getElementById('to').value = '';document.getElementById('subject').value = ''" ><i class="fas fa-times" ></i> Discard</button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <br>