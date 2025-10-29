<footer>
<div class="footer-bottom">
  <div class="con">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-8 col-md-pull-8 text-center">
        <p class="copy-right" style="color: white; text-align: center;">
  <span class="logo">
    <img src="img/bablog.png" alt="Logo" style="width:1rem; height:1rem; vertical-align: middle;">
  </span>
  <span class="line" style="margin: 0 6px;">|</span>
  Copyright <span style="color: rgba(8, 8, 8, 1);">&copy;</span> 
  <?php echo date('Y');?> 
  <a href="index.php" style="color: rgba(249, 249, 249, 1); text-decoration: none;">Ronald's Baboyan</a>. 
  All rights reserved.
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
