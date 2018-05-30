<?php

  function loop_array($array = array(), $parent_id = 0) {

    if(!empty($array[$parent_id])) {
      echo '<ul class="navbar-nav">';
      foreach ($array[$parent_id] as $items) {
      echo '<li class="nav-item">';
      echo '<a href="'.$items['link'].'">';
      echo $items['name'];
      echo '</a>';
      loop_array($array, $items['id']);
      echo '</li>';
    }
      echo '</ul>';
    }
  }

  function display_menus() {

    // $connect = mysqli_connect("localhost", "root", "", "navbars");
    // $q = $connect->query("SELECT * FROM navbar01");

    $connect = mysqli_connect("mysql.cba.pl", "wwproject.c0.pl", "Previad4d2006", "wwproject_c0_pl");
    
    $q = $connect->query("SELECT * FROM AuntieMaggieCakes");

    $array = array();

    if(mysqli_num_rows($q)) {

      while($rows = mysqli_fetch_array($q)) {

        $array[$rows['parent_id']][] = $rows;
      }
      loop_array($array);
    }
  }
