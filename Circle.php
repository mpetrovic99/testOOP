<?php

class Circle {

  protected $r;

  //surface of circle
  function sOfCircle ($r) {

    $s = 2 * $r * pi();
    return $s;

  }

  //perimeter of circle
  function pOfCircle ($r) {

    $p = 2 * $r * pi();
    return $p;

  }

}
