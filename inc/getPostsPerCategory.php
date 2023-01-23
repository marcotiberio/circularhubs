<?php

function getPostCount()
{
    $posts = get_posts('post_type=post&category=5');
    $count = count($posts);
    echo $count;
}
