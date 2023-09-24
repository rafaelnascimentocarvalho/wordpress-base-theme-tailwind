
<header class="fixed w-full top-0 left-0 bg-slate-200">
  <div class="container-medium py-3">
    <div class="flex justify-between gap-2 items-center">
      <div class="w-full max-w-[10rem] bg-slate-600">
        <div class="aspect-[21/9]"></div>
      </div>
      <div class="flex gap-8 items-center">
      <?php

          if (has_nav_menu('main-menu')) {
            $menu_locations = get_nav_menu_locations();
            $main_menu = get_term( $menu_locations['main-menu'], 'nav_menu' );
            $main_menu = wp_get_nav_menu_items( $main_menu->term_id, array('orderby' => 'menu_order', 'order' => 'ASC') );

            if ($main_menu) {
              foreach ($main_menu as $item) {
                ?>
                <div id="menu-item-<?= $item->ID ?>">
                  <a href="<?= $item->url ?>">
                    <?= $item->title ?>
                  </a>
                </div>
                <?php
              }
            }
          }

        ?>
      </div>
    </div>
  </div>
</header>





