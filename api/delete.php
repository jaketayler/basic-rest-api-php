<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../core/initialize.php');
include_once('../core/post.php');

$post = new Post($conn);

$data = json_decode(file_get_contents("php://input"));
  include_once('../core/initialize.php');
  include_once('../core/post.php');

  $post = new Post($conn);
  

  $post->id = isset($_GET['id']) ? $_GET['id'] : die();
  $post->delete();

  
 
  print_r(json_encode(array('Message' => 'Post deleted')));


