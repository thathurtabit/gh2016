<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive() && is_post_type_archive('portfolio')) {
    return __('Work', 'sage');
  } elseif (is_archive() && !is_post_type_archive('portfolio')) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return __('Search', 'sage');
  } elseif (is_404()) {
    return __('404', 'sage');
  } else {
    return get_the_title();
  }
}
