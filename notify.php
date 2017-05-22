
<?php if(isset($_SESSION['notify_message'])){ ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>


.notice {
    padding: 18px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-sm {
    padding: 13px;
    font-size: 80%;
}
.notice-lg {
    padding: 35px;
    font-size: large;
}
.notice-success {
    border-color: #80D651;
}
.notice-success>strong {
    color: #80D651;
}
.notice-info {
    border-color: #45ABCD;
}
.notice-info>strong {
    color: #45ABCD;
}
.notice-warning {
    border-color: #FEAF20;
}
.notice-warning>strong {
    color: #FEAF20;
}
.notice-danger {
    border-color: #d73814;
}
.notice-danger>strong {
    color: #d73814;
}
  </style>
  <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:250px;height:3%;">
          <div class="" style="">
              <div class="">
                  <div id="left">
                      <div>
                          <center>
                               <div class="notice notice-info">
                              <strong>Notice: </strong> <?=$_SESSION['notify_message']?>
                              </div>
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
