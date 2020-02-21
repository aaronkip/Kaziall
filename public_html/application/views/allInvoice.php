   <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img class="menu-icon" src="<?php echo base_url('/assets/images/menu_icons/money.png'); ?>" alt="menu icon" height="30">
                    </div>
                    <div class="float-right">

                      <p class="card-text text-right">Total Amount</p>
                      <div class="fluid-container">
                        <h6 class="card-title font-weight-bold text-right mb-0"> <?php echo $currency_type; if(isset($t_amount->total_amount)) {  echo round($t_amount->total_amount, 2); } else { echo "0"; } ?></h6>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    Artist Amount
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img class="menu-icon" src="<?php echo base_url('/assets/images/menu_icons/money.png'); ?>" alt="menu icon" height="30">
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Total Commission</p>
                      <div class="fluid-container">
                        <h6 class="card-title font-weight-bold text-right mb-0"><?php echo $currency_type; if(isset($c_amount->category_amount)) {  echo round($c_amount->category_amount, 2);  } else { echo "0"; } ?></h6>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    Commission Amount
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img class="menu-icon" src="<?php echo base_url('/assets/images/menu_icons/money.png'); ?>" alt="menu icon" height="30">
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Paid Amount</p>
                      <div class="fluid-container">
                        <h6 class="card-title font-weight-bold text-right mb-0"><?php echo $currency_type; echo round($p_amount->total_amount, 2) ?></h6>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    Total Paid Amount
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img class="menu-icon" src="<?php echo base_url('/assets/images/menu_icons/money.png'); ?>" alt="menu icon" height="30">
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Unpaid Amount</p>
                      <div class="fluid-container">
                        <h6 class="card-title font-weight-bold text-right mb-0"><?php echo $currency_type; echo round($u_amount->total_amount, 2) ?></h6>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    Total Unpaid Amount
                  </p>
                </div>
              </div>
            </div>
          </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Invoices</h4>
          <div class="table-responsive">
            <table id="example" class="table table-striped">
              <thead>
                <tr>
                  <th>S. No.</th>
                  <th>Invoice Id</th>
                  <th>User Name</th>
                  <th>Artist Name</th>
                  <th>Coupon Code</th>
                  <th>Working Min</th>
                  <th>Commission Amount</th>
                  <th>Artist Amount</th>
                  <th>Total Amount</th>
                  <th>Payment Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php $i=0; foreach ($getInvoices as $get_invoice) {
                $i++;
                ?>
                <tr>
                  <td ><?php echo $i; ?></td>
                  <td ><?php echo $get_invoice->invoice_id; ?></td>
                  <td ><?php echo $get_invoice->userName; ?></td>
                  <td ><?php echo $get_invoice->ArtistName; ?></td>
                  <td ><?php echo $get_invoice->coupon_code; ?></td>
                  <td><?php echo $get_invoice->working_min; ?></td>
                  <td><?php echo $currency_type; echo round($get_invoice->category_amount, 2); ?></td>
                  <td><?php echo $currency_type; echo $get_invoice->artist_amount; ?></td>
                  <td><?php echo $currency_type; echo $get_invoice->total_amount; ?></td>   
                   <td>
                   <?php if($get_invoice->payment_type==0)
                   {
                     ?>
                   <label class="badge badge-primary">Online</label>
                   <?php
                    }
                    elseif($get_invoice->payment_type==1) {
                       ?>
                   <label class="badge badge-primary">Cash</label>
                   <?php } ?>
                  </td>             
                  <td>
                   <?php if($get_invoice->flag==0)
                   {
                     ?>
                   <label class="badge badge-warning">Pending</label>
                   <?php
                    }
                    elseif($get_invoice->flag==1) {
                       ?>
                   <label class="badge badge-primary">Paid</label>
                   <?php } ?>
                  </td>  
                  <td>
                 <div class="btn-group dropdown">
                  <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_invoice');?>?id=<?php echo $get_invoice->id; ?>&status=1"><i class="fa fa-reply fa-fw"></i>Paid</a>
                    <a class="dropdown-item" href="<?php echo base_url('/Admin/change_status_invoice');?>?id=<?php echo $get_invoice->id; ?>&status=0"><i class="fa fa-history fa-fw"></i>Cancel</a>
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
</div>
<!-- content-wrapper ends -->