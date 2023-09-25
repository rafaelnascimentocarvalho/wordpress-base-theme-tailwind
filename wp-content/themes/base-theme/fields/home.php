<?php 

function home_fields() {
  add_meta_box('home_fields', 'Home Fields', 'show_home_fields', 'page', 'normal', 'high');
}

function show_home_fields($post) {
  $main_banner = get_post_meta($post->ID, 'main_banner', true);
  ?>
  <label for="main_banner">Banner title:</label>
  <input type="text" id="main_banner" name="main_banner" value="<?php echo esc_attr($main_banner); ?>">
  <?php
}

function save_home_content($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;

  $main_banner = sanitize_text_field($_POST['main_banner']);
  update_post_meta($post_id, 'main_banner', $main_banner);
}

add_action('add_meta_boxes', 'home_fields');
add_action('save_post', 'save_home_content');
