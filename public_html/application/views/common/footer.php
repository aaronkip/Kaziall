 <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.samyotech.com/" target="_blank">Fabartist</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Artist & Customers <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
   <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url('assets/node_modules/chart.js/dist/Chart.min.js'); ?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/maps.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
      $('.res_table').DataTable();

        jQuery('#allusers').dataTable({ 
          });

        jQuery('#notification_table1').dataTable({                    
          "lengthMenu": [ [10, 50, 100, -1], [10, 50, 100, "All"] ],
          });
      } );

     $(document).ready(function () { 
        $("#catCommission").click(function() {
         $("#extra").hide();
        });
        $("#flatCommission").click(function() {
         $("#extra").show();
        });
      });
  </script>

    <script type="text/javascript">  
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function()  {
       var id;
        $(document).on('click' ,'.active_rating',function(){ 
        jQuery(this).parent().addClass('tets'); 

        var rating_id= $('.tets').find('input[type=text]').val();     
        //=$(".yourClass : input").val();     
        //console.log(rating_id);
        var label_string=$(this).text().trim();
      if(label_string=="Approve")  
        {      
          id=0; 
           $(this).toggleClass("btn-danger btn-success");
           $(this).text("Pending"); 
        }  
        else if(label_string == "Pending")    
        {    
          id=1; 
          $(this).toggleClass("btn-danger btn-success");
          $(this).text("Approve");        
        } 
         var id_String = 'id='+ id; 

        $.ajax ({ 
           type: "POST", 
           url: base_url+'Admin/change_status_rating',

            data: {
                  id: id,
                  rating_id :rating_id
              },
              cache: false,      
            success: function(html) 
            {           
            // console.log(html);
             } 
         });     
         jQuery(this).parent().removeClass('tets');    
         //return false;  
        });      
    }); 

    $(document).ready(function()  {
       var id;
        $(document).on('click' ,'.active_user',function(){ 
        jQuery(this).parent().addClass('tets'); 

        var user_id= $('.tets').find('input[type=text]').val();     
        //=$(".yourClass : input").val();     
        //console.log(rating_id);
        var label_string=$(this).text().trim();
      if(label_string=="Active")  
        {      
          id=0; 
           $(this).toggleClass("btn-danger btn-success");
           $(this).text("Deactive"); 
        }  
        else if(label_string == "Deactive")    
        {    
          id=1; 
          $(this).toggleClass("btn-danger btn-success");
          $(this).text("Active");        
        } 
         var id_String = 'id='+ id; 

        $.ajax ({ 
           type: "POST", 
           url: base_url+'Admin/change_status_artist',

            data: {
                  id: id,
                  user_id :user_id
              },
              cache: false,      
            success: function(html) 
            {           
            // console.log(html);
             } 
         });     
         jQuery(this).parent().removeClass('tets');    
         //return false;  
        });      
    });

$(document).ready(function()  {
       var id;
        $(document).on('click' ,'.active_category',function(){ 
        jQuery(this).parent().addClass('tets'); 

        var user_id= $('.tets').find('input[type=text]').val();     
        //=$(".yourClass : input").val();     
        //console.log(rating_id);
        var label_string=$(this).text().trim();
      if(label_string=="Active")  
        {      
          id=0; 
           $(this).toggleClass("btn-danger btn-success");
           $(this).text("Deactive"); 
        }  
        else if(label_string == "Deactive")    
        {    
          id=1; 
          $(this).toggleClass("btn-danger btn-success");
          $(this).text("Active");        
        } 
         var id_String = 'id='+ id; 

        $.ajax ({ 
           type: "POST", 
           url: base_url+'Admin/change_status_category',

            data: {
                  id: id,
                  user_id :user_id
              },
              cache: false,      
            success: function(html) 
            {           
            // console.log(html);
             } 
         });     
         jQuery(this).parent().removeClass('tets');    
         //return false;  
        });      
    });

$(document).ready(function () {
  //called when key is down
  $(".num_only").bind("keydown", function (event) {
  if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
  event.keyCode == 190 ||  event.keyCode == 110 ||
  // Allow: Ctrl+A
  (event.keyCode == 65 && event.ctrlKey === true) ||
    // Allow: Ctrl+C
        (event.keyCode == 67 && event.ctrlKey === true) ||
        // Allow: Ctrl+V
                (event.keyCode == 86 && event.ctrlKey === true) ||
                // Allow: home, end, left, right
                        (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });
});
$('#numberbox').keyup(function(){
  if ($(this).val() > 99){
    alert("No numbers above 99. Please use less then 100");
    $(this).val('99');
  }
});
</script>
</body>

</html>