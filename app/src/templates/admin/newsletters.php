<?php include "header.php" ?>

<div class="container content">
  <h3>Comptes utilisateurs <a class="btn btn-default" href="/admin/newsletters/add">Ajouter un user</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Email</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["newsletters"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["email"] ?></td>
              <td><a href="/admin/newsletters/update?id=<?php echo $value["email"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
