<?php if(isset($_SESSION['msg_info'])): ?>
  <div class="alert alert-info" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p><?php echo $_SESSION['msg_info']; ?></p>
  </div>
<?php endif; ?>
<?php if(isset($_SESSION['msg_errors'])): ?>
  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p><?php echo $_SESSION['msg_errors']; ?></p>
  </div>
<?php endif; ?>
<?php if(isset($_SESSION['msg_success'])): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p><?php echo $_SESSION['msg_success']; ?></p>
  </div>
<?php endif; ?>
<?php if(isset($_SESSION['msg_warning'])): ?>
  <div class="alert alert-warning" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p><?php echo $_SESSION['msg_warning']; ?></p>
  </div>
<?php endif; ?>