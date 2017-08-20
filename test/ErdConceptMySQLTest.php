<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\ErdConcepts\Test;

use PHPUnit\Framework\TestCase;
use SetBased\ErdConcepts\MySqlFix;

/**
 * Unit test for class MySqlFix.
 */
class ErdConceptMySQLTest extends TestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test column comments with quoted identifiers.
   */
  public function testColumns1()
  {
    $source   = file_get_contents(realpath(__DIR__).'/source/quoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/quoted/column.ddl');

    $result = MySqlFix::fixColumnComments($source);
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
    self::assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
