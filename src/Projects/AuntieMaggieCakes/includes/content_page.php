<?php

$q = 'SELECT * FROM AuntieMaggieCakes';
$r = mysqli_query($dbc,$q);

while($row = mysqli_fetch_array($r)) {

?>
<div id="<?php echo $row['item_id']; ?>"></div>

<div class="hr"><img src="img/hr.png" alt=""></div>

<div class="container">
  <div class="row content">
    <h4 class="title center-align"><?php echo $row['name']; ?></h4>
    <div class="col m12 l4">
      <a href="img/cakes/<?php echo $row['image']; ?>.jpg" data-lightbox="images" data-title="<?php echo $row['name']; ?>">
        <img src="img/cakes/<?php echo $row['image']; ?>.jpg" alt="<?php echo $row['name']; ?>">
      </a>
    </div>
    <div class="col m12 l6">
      <p class="flow-text"><?php echo $row['info']; ?></p>
    </div>
    <div class="col m12 l2 center-align blue-grey-text darken-4">
      <h4>&pound; <?php echo $row['price']; ?></h4>
    </div>
  </div>
</div>




<?php
}
?>
