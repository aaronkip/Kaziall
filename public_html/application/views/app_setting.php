<div class="main-panel">
<div class="content-wrapper">
	<div class="container">
  
   <?php if ($this->session->flashdata('msg')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
         Firebase key changed changed successfully.
      </div>
  <?php } ?>

   <?php if ($this->session->flashdata('msg1')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Stripe key changed successfully.
      </div>
  <?php } ?>
  <?php if ($this->session->flashdata('msgpay')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Paypal details changed successfully.
      </div>
  <?php } ?>
  <?php if ($this->session->flashdata('msgsmtp')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        SMTP setting changed successfully.
      </div>
  <?php } ?>
   <?php if ($this->session->flashdata('msgref')) { ?>
      <div id="mydiv" class="alert alert-success"><?= $this->session->flashdata('category_success') ?>
        Referral setting changed successfully.
      </div>
  <?php } ?>
  <ul id="tabs" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">FireBase Key</a>
    </li>
    <li class="nav-item">
      <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">PayPal</a>
    </li>
    <li class="nav-item">
      <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Stripe</a>
    </li> 
    <li class="nav-item">
      <a id="tab-D" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">SMTP Setting</a>
    </li> 
    <li class="nav-item">
      <a id="tab-E" href="#pane-E" class="nav-link" data-toggle="tab" role="tab">Referral Setting</a>
    </li> 
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
          <h4 class="card-title">Set Firebase Key</h4>
          <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/firebaseSetting', $attributes); ?>
            <div class="row">
            <div class="col-md-12">
              <div id="extra">
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Firebase Server Key For Artist App</label>
                      <div class="col-sm-8">
                      <textarea class="form-control" rows="5" name="artist_key" required="" placeholder="Enter Key"><?php echo $firebase_setting->artist_key; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Firebase Server Key For Customer App</label>
                      <div class="col-sm-8">
                      <textarea class="form-control" rows="5" name="customer_key" required="" placeholder="Enter Key"><?php echo $firebase_setting->customer_key; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2" title="This is not availble in demo version.">Submit</button>
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
             <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/paySetting', $attributes); ?>
              <div class="row">
              <div class="col-md-12">
                <div id="extra">
                  <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $paypal_setting->name; ?>" name="name" required="" placeholder="Enter Key">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Paypal Username</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?php echo $paypal_setting->paypal_id; ?>" name="paypal_id" required="" placeholder="Enter Key">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Account Type</label>
                        <div class="col-sm-9">
                        <input type="radio" name="type" value="1" <?php if($paypal_setting->type==1) { echo "checked"; } ?>>Sendbox
                        <input type="radio" name="type" value="0" <?php if($paypal_setting->type==0) { echo "checked"; } ?>>Live
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            <button type="submit" class="btn btn-success mr-2"  title="This is not availble in demo version.">Submit</button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
      <div class="card-header" role="tab" id="heading-C">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
            Stripe
          </a>
        </h5>
      </div>
      <div id="collapse-C" class="collapse show" role="tabpanel" aria-labelledby="heading-C">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/StripSetting', $attributes); ?>
            <div class="row">
            <div class="col-md-12">
              <div id="extra">
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">API Key</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" value="<?php echo $stripe_keys->api_key; ?>" name="api_key" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Publishable Key</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" value="<?php echo $stripe_keys->publishable_key; ?>" name="publishable_key" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success mr-2"  title="This is not availble in demo version.">Submit</button>
          </form>
        </div>
        </div>
      </div>
    </div>

    <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
      <div class="card-header" role="tab" id="heading-D">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-D" data-parent="#content" aria-expanded="false" aria-controls="collapse-D">
            SMTP Setting
          </a>
        </h5>
      </div>
      <div id="collapse-D" class="collapse show" role="tabpanel" aria-labelledby="heading-D">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/smtpSetting', $attributes); ?>
            <div class="row">
            <div class="col-md-12">
              <div id="extra">
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email address</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" value="<?php echo $smtp_setting->email_id; ?>" name="email_id" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                      <input type="password" class="form-control" value="<?php echo $smtp_setting->password; ?>" name="password" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <p><b><u>NOTE</u>: You should need to change your SMTP setting of your gmail account. Please check to <a href="<?php echo base_url('assets/email/gmail.png') ?>" target="_blank"> click here</a></b></p>
            <button type="submit" class="btn btn-success mr-2"  title="This is not availble in demo version.">Submit</button>
          </form>
        </div>

        </div>
      </div>
    </div>

    <div id="pane-E" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-E">
      <div class="card-header" role="tab" id="heading-E">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-E" data-parent="#content" aria-expanded="false" aria-controls="collapse-E">
            Referral Setting
          </a>
        </h5>
      </div>
      <div id="collapse-E" class="collapse show" role="tabpanel" aria-labelledby="heading-E">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
            <?php $attributes = array('id' => 'form_validation','name'=>'add_coupon','class'=>'form-sample'); echo form_open_multipart('Admin/referral_setting', $attributes); ?>
            <div class="row">
            <div class="col-md-12">
              <div id="extra">
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Give Credits</label>
                      <div class="col-sm-9">
                      <input type="radio" name="type" value="1" onclick="show2();"" <?php if($referral_setting->type==1) { echo "checked"; } ?> >Yes
                      <input type="radio" name="type" value="0" <?php if($referral_setting->type==0) { echo "checked"; } ?> onclick="show1();">No
                    </div>
                  </div>
                </div>

                <div id="hide1"  <?php if($referral_setting->type==0) { ?> style="display: none;"  <?php } ?> >
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">No. of Usages</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" value="<?php echo $referral_setting->no_of_usages; ?>" name="no_of_usages" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Flat Amount Credit</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" value="<?php echo $referral_setting->amount; ?>" name="amount" required="" placeholder="Enter Key">
                    </div>
                  </div>
                </div>
                </div>
              </div>
              </div>
              <p><b>Note</b> : If total number of user increase with this count so, automatically this credit goes to respective wallet. It's kind of referral system. </p>
            <button type="submit" class="btn btn-success mr-2">Submit</button>

          </form>
          </div>
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

 function show1(){
    document.getElementById('hide1').style.display ='none';
  }
  function show2(){
    document.getElementById('hide1').style.display = 'block';
  }
</script>