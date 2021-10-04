<nav class="top-navigation border-bottom">
    <div class="conteneur flex-center ">
        <div class="brand flex-center "><img src="<?= get_stylesheet_directory_uri().'/assets/img/logo_primary.png' ?>" alt=""></div>
        <!-- <ul class="menu flex-center">
            <li class="mx3"><a class="capitalize active" href="/">Link</a></li>
            <li class="mx3"><a class="capitalize " href="/">home</a></li>
            <li class="mx3"><a class="capitalize " href="/">services</a></li>
            <li class="mx3"><a class="capitalize " href="/">portfolio</a></li>
            <li class="mx3"><a class="capitalize " href="/">contact</a></li>
        </ul> -->

        <?php wp_nav_menu(
        array(
          "theme_location" => 'menu principal',
          'menu_class'=> 'menu flex-center'
        )
      ) ?>
        <div class="open-sidebar menu-toggler flex-center column">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>