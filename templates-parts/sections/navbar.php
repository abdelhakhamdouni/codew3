<nav class="top-navigation border-bottom">
    <div class="conteneur flex p0 border-left border-right ">
        <div class="brand flex m0 h100 border-right "><img src="https://codew.fr/wp-content/themes/codew-2/assets/img/logo_primary.png" alt=""></div>
        <!-- <ul class="menu flex">
            <li class="mx3"><a class="capitalize active" href="/">Link</a></li>
            <li class="mx3"><a class="capitalize " href="/">home</a></li>
            <li class="mx3"><a class="capitalize " href="/">services</a></li>
            <li class="mx3"><a class="capitalize " href="/">portfolio</a></li>
            <li class="mx3"><a class="capitalize " href="/">contact</a></li>
        </ul> -->

        <?php wp_nav_menu(
        array(
          "theme_location" => 'menu principal',
          'menu_class'=> 'menu flex sm-d-none'
        )
      ) ?>       
<div class="open-sidebar menu-toggler flex column border-left h100 px5">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>