<!-- php 7-->
<?php
$country =  null;

if ($session !== null) {
  $user = $session->user;

  if ($user !== null) {
    $address = $user->getAddress();
  
    if ($address !== null) {
      $country = $address->country;
    }
  }
}


// -------------------- PHP 8.0 -------------------- 
$country = $session?->user?->getAddress()?->country;

?>