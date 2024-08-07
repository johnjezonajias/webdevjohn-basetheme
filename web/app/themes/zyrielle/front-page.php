<?php

$context = Timber::context();
$timber_post = Timber::get_post();

// Fetch ACF fields directly from the front page.
$context['banner'] = [
    'title'             => get_field( 'title', $post->ID ),
    'content'           => get_field( 'content', $post->ID ),
    'background_image'  => get_field( 'background_image', $post->ID ),
];

$context['post'] = $timber_post;
Timber::render( 'front-page.twig', $context );
