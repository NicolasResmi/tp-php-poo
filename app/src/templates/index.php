<?php include "common/header.php" ?>

<div id="transactions">
  <h4>Deliveroo</h4>
  <hr>
  <div class="container">
    <div class="row">
      <?php foreach($data["plats"] as $key => $value) { ?>
        <div class="col-md-12"><a href="/plat?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></div>
      <?php } ?>
    </div>
  </div>
</div>
<?php include "common/footer.php" ?>
