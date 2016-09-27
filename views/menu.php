<?php

include "head.php";

?>

<div class="container">
  <h1>Menu</h1>
  <div class="row">
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <img src="img/menu1.jpg" alt="...">
        <div class="caption">
          <h1>Coffee Latte</h1>
        </div>
      </div>
    </div>
    <?php if (isset($_SESSION["userID"])) { ?>
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <div class="caption">
          <h4>Add an menu item</h4>
          	<form id="post_art" action="<?php echo $base ?>/menu/add" method="post" enctype= "multipart/form-data">
              <div class="form-group" >
                <label for="InputTitle">Titeln</label>
                <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Titeln" required>
              </div>
              <div class="form-group">
                <label for="InputFile">Bilden</label>
                <input type="file" name="img" id="InputFile">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
	          </form>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

  <?php 
  
    include "footer.php";

  ?> 