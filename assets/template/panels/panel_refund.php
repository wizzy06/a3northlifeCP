<div class="col-lg-4">
  <div class="card-box">
    <h4 class="header-title m-t-0">Remboursement</h4>
    <div class="dropper-in"></div>
    <div class="widget-chart text-center">
      <select class="form-control select2">
        <option>Joueur</option>
        <?php
        foreach ($dataPlayer as $array => $data) {
          echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
        }
        ?>
      </select>
      <div class="dropper"></div>
      <div class="input-group m-t-12">
        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Valeur">
        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
      </div>
      <div class="dropper"></div>
      <input type="text" class="form-control" placeholder="Raison">
      <div class="dropper"></div>
      <div class=" pull-right">
        <button type="submit" class="btn btn-purple waves-effect waves-light">Rembourser</button>
      </div>
      <div class="dropper-out"></div>
      <div class="dropper-out"></div>
    </div>
  </div>
</div><!-- end col -->
