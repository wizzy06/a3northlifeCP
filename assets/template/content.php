

<div class="wrapper">
  <div class="container">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <h4 class="page-title">Panel admin <?php echo $perms; ?></h4>
      </div>
    </div>



    <div class="row">

      <?php
      switch ($perms) {
        case 0:
          include 'panels/panel_refund.php';
          include 'panels/panel_inventory.php';
          include 'panels/panel_license.php';
          break;
        case 1:
          include 'panels/panel_inventory.php';
          include 'panels/panel_license.php';
          break;
        case 2:
          include 'panels/panel_inventory.php';
          break;

        default :

          break;
      }
      ?>



    </div>
    <!-- end row -->


    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="header-title m-t-0 m-b-30">Base de donnée</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>P.ID</th>
                  <th>Joueur</th>
                  <th>Argent</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $banned = '<span class="label label-danger">Banni</span>';
                $admin = '<span class="label label-success">Administrateur</span>';
                $modo = '<span class="label label-warning">Modérateur</span>';
                $giver = '<span class="label label-primary">Donnateur</span>';
                foreach ($dataPlayer as $array => $data) {
                  echo "<tr>";
                  if (is_int($array)) {
                    $array += 1;
                    echo "<td>".$array."</td>";
                  }
                  foreach ($data as $info => $value) {
                    if (is_int($data)) {
                      echo "<td>".$value."</td>";
                    }
                    if (is_string($value)) {
                      switch ($value) {
                        case 'Banni':
                        echo '<td>'.$banned.'</td>';
                        break;
                        case 'Administrateur':
                        echo '<td>'.$admin.'</td>';
                        break;
                        case 'Modérateur':
                        echo '<td>'.$modo.'</td>';
                        break;
                        case 'Donnateur':
                        echo '<td>'.$giver.'</td>';
                        break;

                        default:
                        echo "<td>".$value."</td>";
                        break;
                      }
                    }

                  }
                  echo '<td><a href="#">Modifier</a></td>';
                }

                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div><!-- end col -->

    </div>
    <!-- end row -->
