<?php

class Triangle {

  protected $a;
  protected $b;
  protected $c;
  protected $va;

  //surface of triangle
  function sOfTriangleA($a, $b, $c, $va) {

    if (($a * $a) + ($b * $b) === $c * $c) {
      $p = $a * $b / 2;
      return $p;
    } else {
      $p = $a * $va / 2;
      return $p;
    }

  }

  //perimeter of triangle
  function pOfTriangle ($a, $b, $c) {
    $p = $a + $b + $c;
    return $p;
  }

}
