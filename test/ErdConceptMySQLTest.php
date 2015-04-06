<?php
//----------------------------------------------------------------------------------------------------------------------
use SetBased\ErdConcepts\MySqlFix;

//----------------------------------------------------------------------------------------------------------------------
class ErdConceptMySQLTest extends PHPUnit_Framework_TestCase
{
  private $mySource;

  public function setUp()
  {
    $this->mySource = file_get_contents(realpath( __DIR__ ).'/php-erd-concepts_create.ddl');
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   */
  public function testColumns()
  {
    $template = file_get_contents(realpath( __DIR__ ).'/templates/column_template.ddl');

    $result = MySqlFix::fixColumnComments($this->mySource);
    $this->assertEquals($template, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   */
  public function testTables()
  {
    $template = file_get_contents(realpath( __DIR__ ).'/templates/table_template.ddl');

    $result = MySqlFix::fixTableComments($this->mySource);
    $this->assertEquals($template, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   */
  public function testIndex()
  {
    $template = file_get_contents(realpath( __DIR__ ).'/templates/index_template.ddl');

    $result = MySqlFix::fixIndexComments($this->mySource);
    $this->assertEquals($template, $result);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
