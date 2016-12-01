<div class="col-lg-4">
  <div class="card-box">
    <h4 class="header-title m-t-0">Inventaire</h4>
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
      <select class="form-control select2">
        <option>Armes</option>
        <?php
        foreach ($dataPlayer as $array => $data) {
          echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
        }
        ?>
      </select>
      <div class="dropper"></div>
      <select class="form-control select2">
        <option>Vehicules</option>
        <?php
        foreach ($dataPlayer as $array => $data) {
          echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
        }
        ?>
      </select>
      <div class="dropper"></div>
      <div class=" pull-right">
        <button type="submit" class="btn btn-purple waves-effect waves-light">Inspecter</button>
      </div>
      <div class="dropper-out"></div>
      <div class="dropper-out"></div>
    </div>
  </div>
</div><!-- end col -->
