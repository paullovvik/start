<?php
 
use Org\Start\Start;
 
class StartTest extends PHPUnit_Framework_TestCase {
 
  public function testMethod1()
  {
    $start = new Start;
    $this->assertTrue($start->method1());
  }
 
}
