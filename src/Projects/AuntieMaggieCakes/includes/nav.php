<!-- <nav> -->

  <nav class="large">
    <div class="nav-wrapper">
      <div class="container-fluid">
        <a href="#" class="brand-logo">Auntie Maggie Cakes</a>
        <a href="#" data-activates="mobileMenu" class="button-collapse"><i class="material-icons black-text">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#top" class="black-text">Home</a></li>
          <li><a href="#about" class="black-text">Little about me</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown">Cake select<i class="material-icons right black-text">arrow_drop_down</i></a>

            <!-- DESKTOP -->

            <ul id="dropdown" class="dropdown-content">
              <?php
              $q = 'SELECT * FROM AuntieMaggieCakes WHERE parent_id=0';
              $r = mysqli_query($dbc,$q);
              while ($row = mysqli_fetch_array($r)) {
              ?>
              <li><a href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a>
              <?php
              }
              ?>
            </ul>
          </li>
          <li><a href="#contact" class="black-text">Contact</a></li>
        </ul>

        <ul id="mobileMenu" class="side-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">Little about me</a></li>
          <!-- Dropdown Trigger -->
          <li><a href="">Cake select</a>
            <ul class="right-align">

              <!-- MOBILE -->

              <li class="divider"></li>
              <?php
              $q = 'SELECT * FROM AuntieMaggieCakes WHERE parent_id=0';
              $r = mysqli_query($dbc,$q);
              while ($row = mysqli_fetch_array($r)) {
              ?>
              <li><a href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a>
              <?php
              }
              ?>
              <li class="divider"></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
