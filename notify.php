
<?php if(isset($_SESSION['notify_message'])){ ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:250px;height:3%;">
          <div class="modal-content" style="background-color:<?=$_SESSION['notify_color']?>;">
              <div class="modal-body">
                  <div id="left">
                      <div>
                          <center>
                              <p><font color="white"><?=$_SESSION['notify_message']?></font>
                              </p>
                          </center>
                      </div>

                  </div>
                  <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <script>
              $(function() {
                  $('#notif').modal({
                      keyboard: true
                  });
                  // remove modal backdrop
                  $('.modal-backdrop').removeClass("modal-backdrop");
              });
              function hide() {
                      $('#notif').modal('hide');
                  }
                  // hide backdrop after 2 sec
              setTimeout('hide()', 2000);
          </script>


<?php $_SESSION['notify_message'] = $_SESSION['notify_color'] = null; } ?>
