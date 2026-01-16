<header>
  <div class="container header-content">
    <nav>
      <ul class="nav-list">
        <li><a href="events.php" <?php if(basename($_SERVER['PHP_SELF']) == 'events.php') echo 'class="active"'; ?>>▦ Events</a></li>
        <li><a href="create.php" <?php if(basename($_SERVER['PHP_SELF']) == 'create.php') echo 'class="active"'; ?>>✛ Create</a></li>
        <li><a href="scan.php" <?php if(basename($_SERVER['PHP_SELF']) == 'scan.php') echo 'class="active"'; ?>>◉ Scan</a></li>
        <li><a href="records.php" <?php if(basename($_SERVER['PHP_SELF']) == 'records.php') echo 'class="active"'; ?>>▢ Records</a></li>
      </ul>
    </nav>
  </div>
</header>
