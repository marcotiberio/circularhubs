<?php

add_filter('acf/load_value/name=postComponents', 'post_default_components', 10, 3);

function post_default_components($value, $post_id, $field)
{
    if ($value !== null) {
        // $value will only be NULL on a new post
        return $value;
    }
    // add default layouts
    $value = array(
        array(
            'acf_fc_layout' => 'BlockPostHeader',
        ),
    );
    return $value;
}
