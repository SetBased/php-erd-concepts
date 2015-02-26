<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\ErdConcepts;

use SetBased\Affirm\Affirm;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Class MySql
 *
 * @package SetBased\ErdConcepts\MySql
 */
class MySql
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Maximum length of the comment column in database.
   */
  const MAX_COMMENT_LENGTH = 60;
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Add comments to the column definitions from comment blocks.
   *
   * @param string $theSourceCode Code of the source file with definitions of the tables and comment blocks.
   *
   * @return string
   * @throws \Exception
   */
  static public function fixComments( $theSourceCode )
  {
    $source_lines = explode( "\n", $theSourceCode );
    if ($source_lines===false) Affirm::assertFailed( "Internal error." );

    $map = array();
    for ($i = 0; $i<count( $source_lines ); $i++)
    {
      if (preg_match( '/^CREATE TABLE `(\w+)`/', $source_lines[$i], $matches ))
      {
        $table_name = $matches[1];
        $i++;
        while (preg_match( '/^\s+`(\w+)`/', $source_lines[$i], $matches ))
        {
          $map[$table_name][$matches[1]] = $i;
          $i++;
        }
      }
    }

    $comments = array();
    for ($i = 0; $i<count( $source_lines ); $i++)
    {
      if (preg_match( '/^COMMENT ON COLUMN `(\w+)`.`(\w+)`/', $source_lines[$i], $matches ))
      {
        $i++;
        $comments[$matches[1]][$matches[2]] = $source_lines[$i];
      }
    }

    foreach ($comments as $table_name => $columns)
    {
      if ($map[$table_name])
      {
        foreach ($columns as $column_name => $comment)
        {
          if ($map[$table_name][$column_name])
          {
            $line_number = $map[$table_name][$column_name];

            if (strlen( $comment )>self::MAX_COMMENT_LENGTH)
            {
              $comment = trim( substr( $comment, 0, self::MAX_COMMENT_LENGTH - 3 ) ).'...';
            }

            $source_lines[$line_number] = substr( $source_lines[$line_number], 0, -1 );
            $source_lines[$line_number] .= " COMMENT '".self::escapeMysqlString( $comment )."',";
          }
          else
          {
            Affirm::assertFailed( "Column '%s' is not define in '%s' table statements.",
                                  $column_name,
                                  $table_name );
          }
        }
      }
      else
      {
        Affirm::assertFailed( "Table '%s' is not define in statements.", $table_name );
      }
    }

    $new_source_code = implode( "\n", $source_lines );
    if ($new_source_code===false) Affirm::assertFailed( "Internal error." );

    return $new_source_code;
  }

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * @param string $string
   *
   * @return string
   */
  static protected function escapeMysqlString( $string )
  {
    return mysql_real_escape_string( $string );
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
