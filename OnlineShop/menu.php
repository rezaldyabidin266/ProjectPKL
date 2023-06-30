<nav class="navbar navbar-expand-lg navbar-light bg-transparant">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-3">
      <?php if(isset($_SESSION["pelanggan"])): ?>
      <li class="nav-item">
    <a class="nav-link font-weight-bold text-info" href="logout.php">Logout</a>
      </li>
  <!--Selain(belumLogin|belum ada session pelanggan)-->
    <?php else:?>
    <li class="nav-item">
    <a class="nav-link font-weight-bold text-info" href="order.php">Login Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-info" href="daftar.php">Daftar Member</a>
      </li>
      
  <?php endif ?>

    </ul>
  </div>
</nav>
