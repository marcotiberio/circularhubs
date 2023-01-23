<?php

add_action('pre_get_posts', 'alm_exclude_password_protected_posts');

function alm_exclude_password_protected_posts($alm_query)
{
    if (isset($alm_query->query['alm_id']) && ! $alm_query->is_singular()) {
          $alm_query->set('has_password', false);
    }
}
