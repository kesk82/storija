<?php

function skke_print_age($date) {
  // date_default_timezone_set("Europe/Sarajevo");
  $post_age = intval((time() - $date) / 60);

  if ($post_age > 1439) {
    echo "Prije " . intval($post_age/60/24) . "d";
  } elseif ($post_age > 59) {
    echo "Prije " . intval($post_age/60) . "h";
  }
  else {
      echo "Prije " . $post_age . "m";
  }
}

function skke_get_cat_obj() {
  global $post;
  $post_cats = get_the_category($post->ID);

  if (is_array($post_cats)) {
    foreach($post_cats as $cat) {
      if ($cat->slug === 'istaknuto') {
        continue;
      }
      else {
        return $cat;
      }
    }
  }
  return null;
}

function skke_get_srcset($postid) {
  $r = "";

  $post_thumb_id = get_post_thumbnail_id($postid);

  $r .= wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-xxl')[0] . ' ' . wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-xxl')[1] . 'w, ';
  $r .= wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-xl')[0] . ' ' . wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-xl')[1] . 'w, ';
  $r .= wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-l')[0] . ' ' . wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-l')[1] . 'w, ';
  $r .= wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-m')[0] . ' ' . wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-m')[1] . 'w, ';
  $r .= wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-s')[0] . ' ' . wp_get_attachment_image_src($post_thumb_id, 'storia-thumb-s')[1] . 'w';

  return $r;
}