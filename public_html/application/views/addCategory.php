 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                   <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/addCategoryAction', $attributes); ?>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="cat_name" class="form-control" required="" placeholder="Category Name" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Commission Rate</label>
                            <div class="col-sm-9">
                            <input type="text" name="price" class="form-control num_only" required="" placeholder="Commission in <?php echo $currency_type;?>" maxlength="5" />
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
             <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Categories</h4>
 
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  S. No
                </th>
                <th>
                 Category Name
                </th>
                <th>
                  Commission Rate
                </th>
                <th>
                  Status
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            <?php $i=0;
             foreach ($category as $category) {
              $i++;  ?>
              <tr>
                <td class="py-1">
                  <?php echo $i; ?>
                </td>
                <td>
                  <?php echo $category->cat_name; ?>
                </td>
                <td>
                 <?php echo $currency_type; echo $category->price; ?>
                </td>
                 <td>
                 <?php  if( $category->status){ ?><button class="btn active_category btn-success btn-sm">Active</button><?php }else {  ?><button class="active_category btn-danger btn btn-sm">Deactive</button> <?php }?><input  type="text"  value="<?php echo $category->id;?>" hidden>
                </td>
                 <td>
                 <div class="btn-group dropdown">
                  <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                  </button>
                  <div class="dropdown-menu">
                   <!--  <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_category');?>?id=<?php echo $category->id; ?>&status=1&request=1"><i class="fa fa-reply fa-fw"></i>Active</a>
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_category');?>?id=<?php echo $category->id; ?>&status=0&request=1"><i class="fa fa-history fa-fw"></i>Deative</a>
                     <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/editCategory');?>?id=<?php echo $category->id; ?>"><i class="fa fa-history fa-fw"></i>Edit</a>
                  </div>
                </div>
                </td>
              </tr>
            <?php
              }
            ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>