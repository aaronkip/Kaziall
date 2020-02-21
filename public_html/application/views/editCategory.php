 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Category</h4>
                   <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/editCategoryAction', $attributes); ?>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="cat_name" value="<?php echo $category->cat_name ?>" class="form-control" required="" placeholder="Category Name" />
                            <input type="hidden" name="id" value="<?php echo $category->id ?>" class="form-control" required=""  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                            <input type="number" name="price" value="<?php echo $category->price ?>" class="form-control" required="" placeholder="Price" />
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