<?php

include "head.php";

?>
    <div class="container">

      <div class="welcome-header">
        <img src="img/coffee-shop.jpg" class="img-responsive header-img img-rounded" alt="header">
        <div class="header-text">
          <h1 class="huge-header">Välkommen</h1>
          <p class="lead">Till Irish Cuppers</p>
        </div>
        <div class="header-info">
          <h2>Vi serverar det hetaste kaffet i staden</h2>
            <div class="boxes">
              <div class="box1">
                <h3>Kolla in alla våra erbjudanden här: </h3> 
                <img class="thumbnail main-pic" src="img/menu9.jpg" alt="Lul">
                <a href="menu" class="btn btn-success">Till menyn</a></p>
              </div>
              <div class="box2">
                <h3>Eller checka in allt nytt som händer:</h3>
                <img class="thumbnail main-pic" src="img/menu4.jpg" alt="Lul">
                <a href="news" class="btn btn-info">Till nyheter</a>
              </div>
              <div class="box3">
                <h3>Dagens bakelse</h3>
                <img class="thumbnail main-pic" src="img/menu3.jpg" alt="Lul">
              </div>
            </div>
        </div>
      </div>

      <?php 
      
        include "footer.php";

      ?> 
    </div>

  </body>
</html>
