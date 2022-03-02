  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/data-table.js"></script>
  <script src="../../js/jquery.dataTables.js"></script>
  <script src="../../js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="../../vendors/pdfobjectjs/pdfobject.js"></script>

  </body>
  </html>

  <!-- Confirmation Submission Bug Resolve -->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

<script>
$(document).ready(function() {
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{

  var session_id = '<?php echo $employeeID ?>'; 
  var session_login = 2; // for employee

  console.log(session_id);

 $.ajax({
  url:"../../functions/notification.php",
  method:"POST",
  data:{view:view,session_id:session_id,session_login:session_login},
  dataType:"json",
  success:function(data) {
   $('.dropdown-notif').html(data.notification);
     if(data.unseen_notification < 1)
   {
    $('span.count').hide();
   }
  }
 });
}

load_unseen_notification();
// load new notifications
$(document).on('click', '#notificationDropdown', function() {
  $('span.count').html('');
 load_unseen_notification('yes');
});
  // setInterval(function(){
  //   load_unseen_notification();;
  //   }, 5000);
});

</script>




