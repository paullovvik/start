<?php
/**
 * Created by PhpStorm.
 * User: lovvik
 * Date: 9/19/14
 * Time: 4:01 PM
 */

namespace example\tests;

use example\Start;

class StartTest extends \PHPUnit_Framework_TestCase {

  public function testMethod1()
  {
    $start = new Start();
    $this->assertTrue($start->method1());
  }

  public function testMethod1False() {
    $start = new Start();
    $this->assertFalse($start->method1(FALSE));
  }

}
