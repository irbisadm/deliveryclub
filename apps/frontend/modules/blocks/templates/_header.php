<?php use_helper('I18N') ?>
<div id="topline">
      <div></div>
    </div>
    <header>
      <div class="container-fluid">
        <a href="index.php" id="brand">Delivery<span>club!</span></a>
        <form action="" method="post" class="search visible-phone">
          <input type="text" name="search" value="">
          <input type="submit" value="">
        </form>
        <nav>
          <ul>
            <li><a href="/" class="active"><img src="/images/frontend/icon/home.png" alt=""></a></li>
            <li><a href="#"><?=__('Рестораны')?></a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle"><?=__('Бизнес-ланч')?></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="gallery.html"><?=__('Чешская кухня')?></a></li>
                <li><a tabindex="-1" href="gallery.html"><?=__('Итальянская кухня')?></a></li>
                <li><a tabindex="-1" href="gallery.html"><?=__('Здоровое питание')?></a></li>
              </ul>
            </li>
            <li><a href="contact.html"><?=__('Контакты')?></a></li>
          </ul>
          <form action="" method="post" class="search hidden-phone">
            <input type="text" name="search" value="">
            <input type="submit" value="">
          </form>
        </nav>
      </div>
    </header> 
