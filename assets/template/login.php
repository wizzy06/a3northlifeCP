        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
          <div class="dropper-out"></div><div class="dropper-in"></div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="post" action="index.php">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="usr" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="pwd" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                                <div class="dropper">
                                  <?php
                                  if (!empty($error)) {
                                  echo $error;
                                  }
                                  ?>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->
        </div>
        <!-- end wrapper page -->



    	<script>
            var resizefunc = [];
        </script>
