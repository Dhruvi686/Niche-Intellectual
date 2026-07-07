<nav class="navbar">
  <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>" class="logo">▶◀ TEMPLATE DSGN</a>
  
  <button class="menu-toggle" id="menuToggle">☰</button>
  
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=1">ABOUT</a></li>
    <li><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?pg=lnks">DOWNLOAD</a></li>
    <li><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=2">PRICING</a></li>
    <li><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=3">FEATURES</a></li>
    <li><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?pg=cont">CONTACT</a></li>
    <li>
      <?php if (empty($_SESSION['usr'])) { ?>
        <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?pg=log" class="signin-btn">SIGN IN</a>
      <?php } else { ?>
        <a href="../logout.php" class="signin-btn">LOGOUT</a>
      <?php } ?>
    </li>
  </ul>
</nav>

<script>
document.getElementById('menuToggle').addEventListener('click', function() {
  document.getElementById('navLinks').classList.toggle('active');
});
</script>
