<?php

sleep(2);

$fakePostsDatabase = array(

	array(
		'post_title' => '1st post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '2nd post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '3rd post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '4th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '5th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '6th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '7th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '8th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '9th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '10th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '11th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '12th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '13th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '14th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '15th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '16th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '17th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '18th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '19th post',
		'post_content' => 'The content for the first post'
	),
	array(
		'post_title' => '20th post',
		'post_content' => 'The content for the first post'
	),
);

if(isset($_GET['page']) && isset($_GET['items_per_page']) && $_GET['page'] > 0 && $_GET['items_per_page'] > 0)
{
	$offset = (($_GET['page'] - 1) * $_GET['items_per_page']);
	$length = $_GET['items_per_page'];

	$posts = array_slice($fakePostsDatabase, $offset, $length);	
	$result = array('total_posts' => count($fakePostsDatabase), 'posts' => $posts);
	$result = json_encode($result);
	
	echo $result;
}
