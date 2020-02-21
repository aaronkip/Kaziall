<div class="main-panel">
<div class="content-wrapper">
	<div class="container">
  
   <?php if ($this->session->flashdata('msg')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
         Commission changed successfully.
      </div>
  <?php } ?>

   <?php if ($this->session->flashdata('msg1')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Currency Type changed successfully.
      </div>
  <?php } ?>
  <ul id="tabs" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Commision</a>
    </li>
    <li class="nav-item">
      <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Currency</a>
    </li>
   <!-- <li class="nav-item">
      <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Referral Discount</a>
    </li> -->
  </ul>

  <div id="content" class="tab-content" role="tablist">
    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
      <div class="card-header" role="tab" id="heading-A">
        <h5 class="mb-0">
          <a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
            Commission
          </a>
        </h5>
      </div>
      <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
        <div class="card-body">
          <h4 class="card-title">Commission Type</h4>
          <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/commissionSetting', $attributes); ?>
            <div class="row">
            <div class="col-md-12">
              <div class="col-md-8">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Commission Based on</label>
                  <div class="col-sm-8">
                    <!--   -->
                    <input type="radio" id="flatCommission" value="1" name="commission_type" <?php if($commission_setting->commission_type==1){ echo "checked"; } ?> />Flat
                    <input type="hidden" name="id" value="<?php echo $commission_setting->id; ?>" class="form-control" required=""/>
                  </div>
                </div>
              </div>
              <!-- <?php if($commission_setting->commission_type==0) { ?>  -->
              <!-- <div id="extra" style='display:none'>
              <?php } if($commission_setting->commission_type==1) { ?>  -->
              <div id="extra">
              <!-- <?php } ?> -->
                <div class="col-md-8">
                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Commission</label>
                      <div class="col-sm-8">
                      <input type="text" id="numberbox" name="flat_amount" value="<?php echo $commission_setting->flat_amount; ?>" class="form-control" required="" placeholder="Commission" />
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Commission Type</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="flat_type">
                        <option value="1">Percentage (%)</option>
                       <!--  <option value="2"<?php if ($commission_setting->flat_type == 2) echo ' selected="selected"'; ?>>Flat Cost (<?php echo $currency_type; ?>)</option> -->
                      </select>
                    </div>
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

    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
      <div class="card-header" role="tab" id="heading-B">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
            Currency
          </a>
        </h5>
      </div>
      <div id="collapse-B" class="collapse show" role="tabpanel" aria-labelledby="heading-B">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
             <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/currency_setting', $attributes); ?>
            <div class="row">
             <div class="col-md-12">
                <div class="row">
                  <label class="col-md-4 col-form-label">Currency Type</label>
                  <div class="col-md-8">
                    <select class="form-control" name="currency">
                      <?php foreach ($currency_setting as $currency_setting) { ?> 
                      <option value="<?php echo $currency_setting->id; ?>"<?php if ($currency_setting->status == 1) echo ' selected="selected"'; ?>><?php echo $currency_setting->currency_name; ?> (<?php echo $currency_setting->currency_symbol; ?>)</option>
                      <?php } ?>
                    </select>
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

    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
      <div class="card-header" role="tab" id="heading-C">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
            Currency
          </a>
        </h5>
      </div>
      <div id="collapse-C" class="collapse show" role="tabpanel" aria-labelledby="heading-C">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
             <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/set_discount', $attributes); ?>
            <div class="row">
             <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                   <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Set Discount</label>
                      <div class="col-sm-8">
                      <input type="number" maxlength="2" name="discount" value="<?php echo $set_discount->discount; ?>" class="form-control" required="" placeholder="Set Discount" />
                    </div>
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
</div>
</div>
<script type="text/javascript">
  setTimeout(function() {
     $('#mydiv').fadeOut('fast');
  }, 5000); // <-- time in milliseconds
</script>