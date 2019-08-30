<?php include "header.php" ?>

<div class="container content">
  <h3>Carte de crédit<a class="btn btn-default" href="/admin/paiements/add">Ajouter un user</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>card</th>
         
              <th>cv</th>
         
              <th>expityMonth</th>
          
              <th>expityYear</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["paiements"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["card"] ?></td>
         
           
              <td><?php echo $value["cv"] ?></td>
            
              <td><?php echo $value["expityMonth"] ?></td>
           
              <td><?php echo $value["expityYear"] ?></td>
              <td><a href="/admin/paiements/update?id=<?php echo $value["expityYear"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
