/*================================================================================*/
/* DDL SCRIPT                                                                     */
/*================================================================================*/
/*  Title    :                                                                    */
/*  FileName : php-erd-concepts.ecm                                               */
/*  Platform : MySQL 5                                                            */
/*  Version  : Concept                                                            */
/*  Date     : Thursday, May 18, 2023                                             */
/*================================================================================*/
/*================================================================================*/
/* CREATE TABLES                                                                  */
/*================================================================================*/

CREATE TABLE BAR1 (
  c1 VARCHAR(40) NOT NULL,
  c2 VARCHAR(40),
  c3 VARCHAR(40),
  c4 VARCHAR(40),
  c5 VARCHAR(40),
  CONSTRAINT PK_BAR1 PRIMARY KEY (c1)
) COMMENT 'This table is table BAR1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Sed enim ut sem viverra. Proin libero nunc consequat interdum. Donec et odio pellentesque diam volutpat commodo sed. Dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et tortor consequat. Fringilla ut morbi tincidunt augue interdum velit. Purus ut faucibus pulvinar elementum integer. Sit amet volutpat consequat mauris nunc congue. Arcu odio ut sem nulla pharetra diam sit amet nisl.

Dui ut ornare lectus sit. At quis risus sed vulputate odio ut enim. Est ante in nibh mauris cursus mattis. Id volutpat lacus laoreet non. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Netus et malesuada fames ac turpis. Pulvinar mattis nunc sed blandit libero volutpat. Aliquam faucibus purus in massa. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Pellentesq...';

/*
COMMENT ON TABLE BAR1
This table is table BAR1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Sed enim ut sem viverra. Proin libero nunc consequat interdum. Donec et odio pellentesque diam volutpat commodo sed. Dictum non consectetur a erat nam. Tempus quam pellentesque nec nam aliquam sem et tortor consequat. Fringilla ut morbi tincidunt augue interdum velit. Purus ut faucibus pulvinar elementum integer. Sit amet volutpat consequat mauris nunc congue. Arcu odio ut sem nulla pharetra diam sit amet nisl.

Dui ut ornare lectus sit. At quis risus sed vulputate odio ut enim. Est ante in nibh mauris cursus mattis. Id volutpat lacus laoreet non. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Netus et malesuada fames ac turpis. Pulvinar mattis nunc sed blandit libero volutpat. Aliquam faucibus purus in massa. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Pellentesque habitant morbi tristique senectus. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Varius vel pharetra vel turpis nunc. Elit eget gravida cum sociis natoque penatibus. Arcu bibendum at varius vel pharetra. Volutpat odio facilisis mauris sit. Risus quis varius quam quisque id. Quam vulputate dignissim suspendisse in est ante in nibh mauris. Arcu ac tortor dignissim convallis aenean et tortor at. Amet venenatis urna cursus eget nunc scelerisque viverra.
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
  c1 VARCHAR(40) NOT NULL,
  c2 VARCHAR(40),
  c3 VARCHAR(40),
  CONSTRAINT PK_FOO1 PRIMARY KEY (c1)
) COMMENT 'This is table FOO1.'
engine=innodb;

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

CREATE TABLE FOO2 (
  c1 VARCHAR(40),
  c2 VARCHAR(40),
  c3 VARCHAR(40)
) COMMENT 'This is table FOO2. Same as FOO1, but without a primary key.';

/*
COMMENT ON TABLE FOO2
This is table FOO2. Same as FOO1, but without a primary key.
*/

/*
COMMENT ON COLUMN FOO2.c1
Column 1.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
*/

/*
COMMENT ON COLUMN FOO2.c2
Column 2.
*/

/*
COMMENT ON COLUMN FOO2.c3
Column 3.
*/

/*================================================================================*/
/* CREATE INDEXES                                                                 */
/*================================================================================*/

CREATE INDEX IX_BAR11 ON BAR1 (c2);

/*
COMMENT ON INDEX IX_BAR11
Indexes can have comments too.
*/

CREATE INDEX IX_BAR12 ON BAR1 (c3, c4, c5);

/*
COMMENT ON INDEX IX_BAR12
This is a multi column index.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
*/

CREATE UNIQUE INDEX IX_BAR13 ON BAR1 (c5);

/*
COMMENT ON INDEX IX_BAR13
A unique index.
*/
