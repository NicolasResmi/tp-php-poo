<?php include "header.php" ?>

<div class="container content">
  <h3>Plats <a class="btn btn-default" href="/admin/plats/add">Ajouter un plat</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Nom</th>
              <th>Prix</th>
              <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["plats"] as $key => $value) { ?>
            <tr>
              <td><a href="/admin/plats/update?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></td>
              <td><?php echo $value["prix"] ?></td>
              <td><a href="/admin/plats/update?id=<?php echo $value["id"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
