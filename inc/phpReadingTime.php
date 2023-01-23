<?php

// function readingtimeFilter($content) {
//     $wordsPerMinute = 200;
//     $words = str_word_count(strip_tags($content));
//     $minutesToRead = floor($words / $wordsPerMinute);
//     $min = ($minutesToRead < 1 ? '1' : $minutesToRead);

//     return $min;
// }

use Timber\Timber;
use Timber\Post;

function bm_estimated_reading_time() {

    $post = get_post();

    $words = str_word_count( strip_tags($post->post_content) );
    $minutesToRead = floor($words / 200);
    $minutes = ($minutesToRead < 1 ? '1' : $minutesToRead);
    
    $estimated_time = $minutes . ' MIN' ;

    return $estimated_time;

}
