<?php
//----------------------------------------------------------------------------------------------------------------------
use SetBased\ErdConcepts\MySqlFix;

//----------------------------------------------------------------------------------------------------------------------
class ErdConceptMySQLTest extends PHPUnit_Framework_TestCase
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
    $this->assertEquals($expected, $result);
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
    $this->assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Test table comments with quoted identifiers.
   */
  public function testTables1()
  {
    $source = file_get_contents(realpath(__DIR__).'/source/quoted/php-erd-concepts-create.ddl');
    $expected = file_get_contents(realpath(__DIR__).'/template/quoted/table.ddl');

    $result = MySqlFix::fixTableComments($source);
    $this->assertEquals($expected, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
