<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$banner = new FieldsBuilder('banner');
$banner
    ->addText('title')
    ->addWysiwyg('content')
    ->addImage('background_image')
    ->setLocation('page_type', '==', 'front_page');
    //->setLocation('post_type', '==', 'page')
        //->or('post_type', '==', 'post');

add_action('acf/init', function() use ($banner) {
    acf_add_local_field_group($banner->build());
});
