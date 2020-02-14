<?php
$local_cache = 'watsons_cookie_cache.db';
$cookie = isset($_POST['cookie']) ? $_POST['cookie'] : null;

if($cookie) {
  preg_match_all('/QueueITAccepted-SDFrts345E-V3_watsonprdhk=.*/', $cookie, $matches);
  $cookie = $matches[0][0];
  file_put_contents($local_cache, $cookie, LOCK_EX);
  echo $cookie;
} else {
  echo 'error';
}
?>
