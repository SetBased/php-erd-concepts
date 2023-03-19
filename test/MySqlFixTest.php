<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\ErdConcepts\Test;

use PHPUnit\Framework\TestCase;
use SetBased\ErdConcepts\MySqlFix;

/**
 * Unit test for class MySqlFix.
 */
class MySqlFixTest extends TestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   Creates empty directories for storing results.
   */
  public static function setUpBeforeClass(): void
  {
    $dirs = [realpath(__DIR__).'/result/quoted/',
             realpath(__DIR__).'/result/unquoted/'];
    foreach ($dirs as $dir)
    {
      if (!is_dir($dir))
      {
        mkdir($dir, recursive: true);
      }
    }
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test column comments with quoted identifiers.
   */
  public function testColumns1()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/quoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/quoted/column.ddl');

    $result = MySqlFix::fixColumnComments($source);
    file_put_contents(realpath(__DIR__).'/result/quoted/column.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test column comments without quoted identifiers.
   */
  public function testColumns2()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/unquoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/unquoted/column.ddl');

    $result = MySqlFix::fixColumnComments($source);
    file_put_contents(realpath(__DIR__).'/result/unquoted/column.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test index comments with quoted identifiers.
   */
  public function testIndex1()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/quoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/quoted/index.ddl');

    $result = MySqlFix::fixIndexComments($source);
    file_put_contents(realpath(__DIR__).'/result/quoted/index.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test index comments without quoted identifiers.
   */
  public function testIndex2()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/unquoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/unquoted/index.ddl');

    $result = MySqlFix::fixIndexComments($source);
    file_put_contents(realpath(__DIR__).'/result/unquoted/index.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test table comments with quoted identifiers.
   */
  public function testTables1()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/quoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/quoted/table.ddl');

    $result = MySqlFix::fixTableComments($source);
    file_put_contents(realpath(__DIR__).'/result/quoted/table.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test table comments without quoted identifiers.
   */
  public function testTables2()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/unquoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/unquoted/table.ddl');

    $result = MySqlFix::fixTableComments($source);
    file_put_contents(realpath(__DIR__).'/result/unquoted/table.ddl', $result);
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
