<div class="modal fade" id="addmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?=base_url('Dispersal_controller/addmonitor')?>" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Animal For Monitoring</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="start_time">Type<small>(Species)</small></label> <br>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-paw"></i></span>
                </div>
                <select class="form-control" name="type" >
                  <option selected="true" disabled="disabled">Animal Type</option>
                  <option value="cow">Cow</option>
                  <option value="carabao">Carabao</option>
                  <option value="goat">Goat</option>
                  <option value="pig">Pig</option>
                </select>
              </div>
            </div>
            <label for="start_time">Exposed<small>(When were the animal first exposed to male animal?)</small></label> <br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
              </div>
              <input class="form-control" type="date" name="exposed" placeholder="Start exposed" required="start_time">
            </div>
           
            <label for="start_time">First-calvers?<small>(Is it the animal's first pregnancy?)</small></label> <br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-paw"></i></span>
              </div>
              <select class="form-control" name="firstcalving" >
              <option value="no">No</option>
              <option value="yes">Yes</option>
              </select>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="owner" placeholder="Owner's Full Name" required="owner"value="">
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <textarea class="form-control" name="address" placeholder="Owner's Address"></textarea>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Email" required="email" value="">
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input type="contact" class="form-control" name="contact" placeholder="Contact #" required="contact" value="" pattern="09.........">
            </div>
          
          <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </div>
        </form>
    </div>
  </div>
</div>

