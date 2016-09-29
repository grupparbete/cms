<?php

include "head.php";

?>

<div class="container">

  <?php 

  if (isset($_SESSION["redir"])) {
    echo "<p class='heads-up'>{$_SESSION['redir']}</p>";
    unset($_SESSION["redir"]);
  }

  ?>

  <h1>Meny</h1>
  <div class="row">
  <?php foreach ($v as $row) { ?>
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <img src="img/<?php echo $row['img']; ?>" alt="Coffe">
        <div class="caption">
          <h1><?php echo $row['menu_header']; ?></h1>
          <?php if (isset($_SESSION["userID"])) { ?><a class="btn btn-danger" href="<?php echo $base ?>/delMenu/<?php echo $row['menu']; ?>" role="button">Tag bort detta</a><?php } ?>
        </div>
      </div>
    </div>
    <?php } if (isset($_SESSION["userID"])) { ?>
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <div class="caption">
          <h4>Lägg till ett meny item</h4>
          	<form id="post_art" action="<?php echo $base ?>/menu/add" method="post" enctype= "multipart/form-data">
              <div class="form-group" >
                <label for="InputTitle">Titeln</label>
                <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Titeln" required maxlength="30" minlength="1">
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
</body>
<div style="position: fixed; bottom: 0px; width: 100%">
  <?php 
  
    include "footer.php";

  ?> 
</div>  