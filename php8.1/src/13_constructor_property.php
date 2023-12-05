<!-- php 7 -->
<?php
class Point {
    public float $x;
    public float $y;
    public float $z;
  
    public function __construct(
      float $x = 0.0,
      float $y = 0.0,
      float $z = 0.0
    ) {
      $this->x = $x;
      $this->y = $y;
      $this->z = $z;
    }
  }


  // -----------------------PHP 8.0 ----------------------
  class Point {
    public function __construct(
      public float $x = 0.0,
      public float $y = 0.0,
      public float $z = 0.0,
    ) {}
  }
?>

