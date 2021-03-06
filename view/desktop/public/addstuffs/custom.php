<?php
    require_once $dir_requires.'header.php';
    require_once $dir_requires.'navbar.php';
    require_once $dir_modal.'modal_login.php';
?>
<script type="text/javascript">
    function showPanel (panelId) {
        
    }
</script>
<div class="container">
    <form role="form" method="post" action="addstuffs.php" enctype="multipart/form-data">
        <div class="row">
            <div class="page-header"><h2>Never Sold Online Before? It's Easy</h2></div>

            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Step 1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <?php include $dir_addstuffs.'item_details.php';?>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Step 2 (Optional)
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php include $dir_addstuffs.'photo_details.php';?>
                  </div>
                </div>
              </div>
              <?php if(!$session->is_logged_in()):?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Step 3
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php include $dir_addstuffs.'custom_details.php';?>
                  </div>
                </div>
              </div>
              <?php endif;?>
            </div>
        </div><!-- /.row -->
    </form>
</div>
<br>
<?php require_once $dir_requires.'footer.php';?>