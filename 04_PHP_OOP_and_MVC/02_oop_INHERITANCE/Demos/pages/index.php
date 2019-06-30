<?php 
include 'Page.php';
include 'HomePage.php';

$home_page = new HomePage('Home page', 'Home Page Content', 'Home Page Footer', 'Slider', 'Banner');

echo $home_page->render_header();

echo $home_page->render_content();

echo $home_page->render_footer();