<footer>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
          </div>
        </div>
        <div class="col-md-12 text-center">
  <p class="copy-right text-center" style="color:rgba(245, 245, 245, 1);">
    <span class="logo">
      <img src="img/bablog.png" alt="Logo" style="width: 2rem; height: 2rem;">
    </span>
    <span class="line">|</span>
    Copyright 
    <span style="color: black; margin: 0 6px;">&copy;</span>
    <span style="margin-right: 8px;"><?php echo date('Y'); ?></span>
    <a href="index.php" style="color:rgba(245, 245, 245, 1);">Ronald's Baboyan</a>. All rights reserved.
  </p>
</div>

      </div>
    </div>
  </div>
</footer>

<?php if (isset($success)) { ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    swal("Success", "<?= addslashes($success) ?>", "success");
  }, 100);
  $('[data-bs-toggle="popover"]').popover();
});
</script>
<?php } elseif (isset($err)) { ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    swal("Error", "<?= addslashes($err) ?>", "error");
  }, 100);
});
</script>
<?php } ?>
