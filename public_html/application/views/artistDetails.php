<div class="main-panel">
<div class="content-wrapper">
  <div class="container">
  <ul id="tabs" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Profile</a>
    </li>
    <li class="nav-item">
      <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Appointments</a>
    </li>
    <li class="nav-item">
      <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Services</a>
    </li>
    <li class="nav-item">
      <a id="tab-D" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">Invoice</a>
    </li>
    <li class="nav-item">
      <a id="tab-E" href="#pane-E" class="nav-link" data-toggle="tab" role="tab">Rating</a>
    </li>
  </ul>

  <div id="content" class="tab-content" role="tablist">
    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
      <div class="card-header" role="tab" id="heading-A">
        <h5 class="mb-0">
          <a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
            Profile
          </a>
        </h5>
      </div>
      <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
        <div class="card-body">
          <div class="col-12 grid-margin">
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">

                      <?php if($user->image) { ?> 
                        <img class="img-sm rounded-circle" src="<?php echo base_url().$user->image; ?>" alt="profile image">
                      <?php } else { ?>
                        <img class="img-sm rounded-circle" src="<?php echo base_url('/assets/images/faces/face1.jpg'); ?>" alt="profile image">
                      <?php } ?>
                        
                      </div>
                      <div class="ticket-details col-12">
                         <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap"><?php echo ucfirst($user->name); ?> :</p>
                          <p class="font-weight-bold mr-1 mb-0">Description :</p>
                          <p class="font-weight-medium mb-0 ellipsis"><?php echo ucfirst($user->about_us); ?></p>
                        </div> 
                        <div class="row text-muted d-flex">
                        <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Gender. :</p>
                            <p class="Last-responded mr-2 mb-0"><?php if($user->gender==0) echo 'Female'; if($user->gender==1) echo 'Male'; if($user->gender==2) echo 'Other'; ?></p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Address :</p>
                            <p class="Last-responded mr-2 mb-0"><?php echo ucfirst($user->location); ?></p>
                          </div>
                        </div>

                        <div class="row text-muted d-flex">
                        <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Price :</p>
                            <p class="Last-responded mr-2 mb-0">$ <?php echo $user->price; ?></p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Total job done :</p>
                            <p class="Last-responded mr-2 mb-0"><?php print_r($jobDone); ?></p>
                          </div>
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Success :</p>
                            <p class="Last-responded mr-2 mb-0"><?php echo round($percentages, 2); ?> %</p>
                          </div>
                        </div>

                        <div class="row text-muted d-flex">
                        <div class="col-4 d-flex">
                            <p class="mb-0 mr-2 font-weight-bold">Total Request :</p>
                            <p class="Last-responded mr-2 mb-0"><?php print_r($total); ?></p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>      
            </div>
        </div>
        <div class="card-body">
        <h4>Gallery</h4>
          <div class="col-lg-12 grid-margin stretch-card">
          <table id="example" class="table table-striped res_table">
            <thead>
              <tr>
              <th>
                  S. No.
                </th>
                <th>
                  Image
                </th>
                <th>
                  Added Date
                </th>
              </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($get_gallery as $get_gallery) { $i++;
              ?>
              <tr>
                <td class="py-1">
                  <?php echo $i; ?>
                </td>
                <td>
                <a href="<?php echo base_url().$get_gallery->image; ?>" target="_blank"><img height="50" width="50" src="<?php echo base_url().$get_gallery->image; ?>"></a>
                </td>
                <td>
                   <?php echo date('d M, Y', $get_gallery->created_at); ?>
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

    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
      <div class="card-header" role="tab" id="heading-B">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
            Appointments of <?php echo $artist_name; ?>
          </a>
        </h5>
      </div>
      <div id="collapse-B" class="collapse show" role="tabpanel" aria-labelledby="heading-B">
        <div class="card-body">
          <div class="col-lg-12 grid-margin stretch-card">
          <table id="example" class="table table-striped res_table">
            <thead>
              <tr>
               <th>
                  S. No.
                </th>
                <th>
                  Customer Name
                </th>
                <th>
                  Timing
                </th>
                <th>
                  Appointment Date
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($get_appointments as $get_appointments) {
            $i++;  ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $get_appointments->name; ?></td>
                <td>
                  <?php echo $get_appointments->booking_time; ?>
                </td>
                <td>
                   <?php echo $get_appointments->booking_date; ?>
                </td>
                 <td>
                 <?php if($get_appointments->booking_flag==0)
                 {
                   ?>
                 <label class="badge badge-warning">Pending</label>
                 <?php
                  }
                  elseif($get_appointments->booking_flag==1) {
                     ?>
                 <label class="badge badge-primary">Accept</label>
                 <?php
                   } 
                   elseif($get_appointments->booking_flag==2) {
                     ?>
                 <label class="badge badge-danger">Decline</label>
                 <?php
                   } 
                   elseif($get_appointments->booking_flag==3) {
                     ?>
                 <label class="badge badge-info">In_process</label>
                 <?php
                   } 
                   elseif($get_appointments->booking_flag==4) {
                     ?>
                 <label class="badge badge-success">Completed</label>
                 <?php
                   } ?>
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

    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
      <div class="card-header" role="tab" id="heading-C">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-C" data-parent="#content" aria-expanded="false" aria-controls="collapse-C">
            Products of <?php echo $artist_name; ?>
          </a>
        </h5>
      </div>
      <div id="collapse-C" class="collapse show" role="tabpanel" aria-labelledby="heading-C">
        <div class="card-body">
         <div class="col-lg-12 grid-margin stretch-card"> 
          <table id="example" class="table table-striped res_table">
            <thead>
              <tr>
                <th>S. No.</th>
                <th>Service Name</th>
                <th>Price</th>
                <th> Service Image</th>
              </tr>
            </thead>
            <tbody>
             <?php $i=0; foreach ($get_products as $get_products) {
              $i++; ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td>
                  <?php echo $get_products->product_name; ?>
                </td>
                <td>
                  <?php echo $currency_type; echo $get_products->price; ?>
                </td>
                <td>
                   <img height="50" width="50" src="<?php echo base_url().$get_products->product_image; ?>">
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
    <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
      <div class="card-header" role="tab" id="heading-D">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-D" data-parent="#content" aria-expanded="false" aria-controls="collapse-D">
            Invoice
          </a>
        </h5>
      </div>
      <div id="collapse-D" class="collapse show" role="tabpanel" aria-labelledby="heading-D">
        <div class="card-body">
           <div class="col-lg-12 grid-margin stretch-card">
          <table id="example" class="table table-striped res_table">
            <thead>
              <tr>
                <th>
                  S. No.
                </th>
                <th>
                  User Name
                </th>
                <th>
                  Booking Date
                </th>
                <th>
                  Working Min
                </th>
                <th>
                  Total Amount
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
             <?php $i=0; foreach ($get_invoice as $get_invoice) {
             $i++; ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $get_invoice->userName; ?></td>
                <td>
                  <?php echo date('M d, Y H:i', $get_invoice->created_at); ?>
                </td>
                <td>
                  <?php echo $get_invoice->working_min; ?>
                </td>
                <td>
                  <?php echo $currency_type; echo $get_invoice->total_amount; ?>
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
                 <?php
                   } 
                   ?>
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

    <div id="pane-E" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-E">
      <div class="card-header" role="tab" id="heading-E">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" href="#collapse-E" data-parent="#content" aria-expanded="false" aria-controls="collapse-E">
            Rating
          </a>
        </h5>
      </div>
      <div id="collapse-E" class="collapse show" role="tabpanel" aria-labelledby="heading-E">
        <div class="card-body">
           <div class="col-lg-12 grid-margin stretch-card">
          <table id="example" class="table table-striped res_table">
            <thead>
              <tr>
                <th>S. No.</th>
                <th>User Name</th>
                <th>
                  Rating 
                </th>
                <th>
                  Comment
                </th>
                <th>
                  Comment
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
             <?php $i=0; foreach ($get_reviews as $get_reviews) { $i++;
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $get_reviews->name; ?></td>
                <td>
                  <?php echo $get_reviews->rating; ?>
                </td>
                <td>
                  <?php echo $get_reviews->comment; ?>
                </td>
                <td>
                  <?php echo date('M d, Y h:i A', $get_reviews->created_at); ?>
                </td>
                <td>
                <?php  if( $get_reviews->status){ ?><button class="btn active_rating btn-success">Approve</button><?php }else {  ?><button class="active_rating btn-danger btn">Pending</button>    <?php }?><input  type="text"  value="<?php echo $get_reviews->id;?>" hidden>
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
</div>