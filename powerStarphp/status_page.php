<?php include './mail-handler.php'; ?>
<!DOCTYPE html>
<?php include './partials/header.php'; ?>
  <body>
    <?php include './partials/notification.php'; ?>
    <header class="text-center">
      <h1 class="display-3 theme-bg theme-header-space"><?php echo $heading;?></h1>
    </header>
    <div class="text-center theme-body-space">
      <h3><?php echo $status ?></h3>
      <div class="spinner-grow text-danger" role="status">
       <span class="visually-hidden">Loading...</span>
      </div>
        <p> You will be redirected in 5 seconds. If not <a href="./index.php">click here</a></p>
    </div>
    <?php include './partials/footer.php'; ?>
    <script>
         setTimeout(function(){
            window.location.href = './index.php';
         }, 5000);
      </script>
  </body>
  </html>