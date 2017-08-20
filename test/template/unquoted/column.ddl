/*================================================================================*/
/* DDL SCRIPT                                                                     */
/*================================================================================*/
/*  Title    :                                                                    */
/*  FileName : php-erd-concepts.ecm                                               */
/*  Platform : MySQL 5                                                            */
/*  Version  : Concept                                                            */
/*  Date     : zondag 20 augustus 2017                                            */
/*================================================================================*/
/*================================================================================*/
/* CREATE TABLES                                                                  */
/*================================================================================*/

CREATE TABLE BAR1 (
  c1 VARCHAR(40) NOT NULL COMMENT 'This column 1. Same name as in table FOO1.',
  c2 VARCHAR(40) COMMENT 'This column 2. Same name as in table FOO1.',
  c3 VARCHAR(40),
  c4 VARCHAR(40),
  c5 VARCHAR(40),
  CONSTRAINT PK_BAR1 PRIMARY KEY (c1)
);

/*
COMMENT ON TABLE BAR1
This table is table BAR1.
*/

/*
COMMENT ON COLUMN BAR1.c1
This column 1. Same name as in table FOO1.
*/

/*
COMMENT ON COLUMN BAR1.c2
This column 2. Same name as in table FOO1.
*/

CREATE TABLE FOO1 (
  c1 VARCHAR(40) NOT NULL COMMENT 'Column 1.',
  c2 VARCHAR(40) COMMENT 'Column 2.',
  c3 VARCHAR(40) COMMENT 'Column 3.',
  CONSTRAINT PK_FOO1 PRIMARY KEY (c1)
);

/*
COMMENT ON TABLE FOO1
This is table FOO1.
*/

/*
COMMENT ON COLUMN FOO1.c1
Column 1.
*/

/*
COMMENT ON COLUMN FOO1.c2
Column 2.
*/

/*
COMMENT ON COLUMN FOO1.c3
Column 3.
*/

/*================================================================================*/
/* CREATE INDEXES                                                                 */
/*================================================================================*/

CREATE INDEX IX_BAR11 ON BAR1 (c2);

/*
COMMENT ON INDEX IX_BAR11
Indexes can have comments to.
*/

CREATE INDEX IX_BAR12 ON BAR1 (c3, c4, c5);

/*
COMMENT ON INDEX IX_BAR12
This is a multi column index.
*/
