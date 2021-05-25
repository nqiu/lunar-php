<?php

use com\nlf\calendar\Solar;
use com\nlf\calendar\Lunar;
use PHPUnit\Framework\TestCase;

/**
 * 运测试
 * Class YunTest
 */
class YunTest extends TestCase
{

  public function test1()
  {
    $solar = Solar::fromYmdHms(1981, 1, 29, 23, 37, 0);
    $lunar = $solar->getLunar();
    $eightChar = $lunar->getEightChar();
    $yun = $eightChar->getYun(0);
    $this->assertEquals(8, $yun->getStartYear());
    $this->assertEquals(0, $yun->getStartMonth());
    $this->assertEquals(20, $yun->getStartDay());
    $this->assertEquals('1989-02-18', $yun->getStartSolar()->toYmd());
  }

  public function test2()
  {
    $lunar = Lunar::fromYmdHms(2019, 12, 12, 11, 22, 0);
    $eightChar = $lunar->getEightChar();
    $yun = $eightChar->getYun(1);
    $this->assertEquals(0, $yun->getStartYear());
    $this->assertEquals(1, $yun->getStartMonth());
    $this->assertEquals(0, $yun->getStartDay());
    $this->assertEquals('2020-02-06', $yun->getStartSolar()->toYmd());
  }

  public function test3()
  {
    $solar = Solar::fromYmdHms(2020, 1, 6, 11, 22, 0);
    $lunar = $solar->getLunar();
    $eightChar = $lunar->getEightChar();
    $yun = $eightChar->getYun(1);
    $this->assertEquals(0, $yun->getStartYear());
    $this->assertEquals(1, $yun->getStartMonth());
    $this->assertEquals(0, $yun->getStartDay());
    $this->assertEquals('2020-02-06', $yun->getStartSolar()->toYmd());
  }

}
