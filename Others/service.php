<?php
 
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);
 
$link = mysqli_connect('localhost', 'root', '', 'voting');
mysqli_set_charset($link,'utf8');
 
$table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));

switch ($method) {
  case 'GET':
    $sql = "select * from `$table`"; break;
  }
 
$result = mysqli_query($link,$sql);
 
if (!$result) {
  http_response_code(404);
  die(mysqli_error());
}
 
if ($method == 'GET') {
  for ($i=0;$i<mysqli_num_rows($result);$i++) {
    echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
  }
} elseif ($method == 'POST') {
  echo mysqli_insert_id($link);
} else {
  echo mysqli_affected_rows($link);
}
 
mysqli_close($link);