<?php

add_filter('timber/twig', function (\Twig_Environment $twig) {
    $twig->getExtension('Twig_Extension_Core')->setEscaper('wp_kses_custom', function ($twig, $string, $charset) {
        /** get allowed html array */
        $allowed_tags = wp_kses_allowed_html('post');
        /** add custom html tags to array */
        $allowed_tags['input'] = array(
            'type' => true,
            'name' => true,
            'value' => true,
            'placeholder' => true,
            'id' => true,
            'class' => true,
            'required' => true,
        );
        $allowed_tags['form'] = array(
            'id' => true,
            'class' => true,
        );
        $allowed_tags['select'] = array(
            'name' => true,
            'value' => true,
            'id' => true,
            'class' => true,
            'required' => true,
        );
        $allowed_tags['checkbox'] = array(
            'name' => true,
            'value' => true,
            'id' => true,
            'class' => true,
            'required' => true,
        );
        $allowed_tags['option'] = array(
            'value' => true,
        );
        return wp_kses($string, $allowed_tags);
    });
    return $twig;
});
