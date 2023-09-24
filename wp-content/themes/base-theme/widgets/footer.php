<?php

register_sidebar(
  array(
    'name' => 'FooterWidget',
    'id' => 'footer-widget',
    'class' => '',
    'before_title' => '<h4 class="font-bold uppercase text-sm text-slate-900">',
    'after_title' => '</h4>',
    'before_widget' => '<div class="widget grid gap-2">',
    'after_widget' => '</div>'
  )
);