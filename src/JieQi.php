<?php

namespace com\nlf\calendar;

use com\nlf\calendar\util\LunarUtil;

/**
 * 节气
 * @package com\nlf\calendar
 */
class JieQi
{
  /**
   * 名称
   * @var string
   */
  private $name;

  /**
   * 阳历日期
   * @var Solar
   */
  private $solar;
  private $jie;
  private $qi;

  function __construct($name, $solar)
  {
    $this->setName($name);
    $this->solar = $solar;
  }

  /**
   * 获取名称
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * 设置名称
   * @param string $name 名称
   */
  public function setName($name)
  {
    $this->name = $name;
    foreach (LunarUtil::$JIE as $key) {
      if ($key == $name) {
        $this->jie = true;
        return;
      }
    }
    foreach (LunarUtil::$QI as $key) {
      if ($key == $name) {
        $this->qi = true;
        return;
      }
    }
  }

  /**
   * 获取阳历日期
   * @return Solar
   */
  public function getSolar()
  {
    return $this->solar;
  }

  /**
   * 设置阳历日期
   * @param Solar $solar 阳历日期
   */
  public function setSolar($solar)
  {
    $this->solar = $solar;
  }

  /**
   * 是否节令
   * @return true/false
   */
  public function isJie()
  {
    return $this->jie;
  }

  /**
   * 是否气令
   * @return true/false
   */
  public function isQi()
  {
    return $this->qi;
  }

  public function toString()
  {
    return $this->name;
  }

  public function __toString()
  {
    return $this->toString();
  }

}
