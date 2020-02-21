 <!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Artist</h4>
             <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/addArtistAction', $attributes); ?>
              <div class="row">
              <div class="col-md-12">
                <div class="col-md-8">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" required="" placeholder="Artist Name" />
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                      <input type="email_id" name="email_id" class="form-control" required="" placeholder="Email Address" />
                    </div>
                  </div>
                </div>
                 <div class="col-md-8">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" required="" placeholder="Password" />
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