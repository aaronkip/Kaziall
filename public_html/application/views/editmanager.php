 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Manager</h4>
                   <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/edit_manager', $attributes); ?>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" value="<?php echo $admin->name; ?>" class="form-control" required="" placeholder="Enter Name" />
                            <input type="hidden" name="id" value="<?php echo $admin->id; ?>" class="form-control" required="" placeholder="Enter Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                            <input type="email" name="email" value="<?php echo $admin->email; ?>" class="form-control" required="" placeholder="Enter Email" readonly />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                            <input type="password" name="password" value="<?php echo $admin->password; ?>" class="form-control" required="" placeholder="Enter Password" />
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
  </div>
</div>