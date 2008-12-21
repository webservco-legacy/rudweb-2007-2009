<?php
/* -------------------------------------------------- MODEL -------------------------------------------------- */
/* database interface */
interface rw_iDB
{
  public function rw_DB_function();
}
/* database abstract class */
abstract class rw_aDB implements rw_iDB
{
  public function rw_DB_function() {}
}
/* main database class - used in application */
class rw_DB extends rw_aDB
{
  public function rw_DB_function() {}
}
/* database class for mysql */
class rw_DB_mysql extends rw_DB {}
/* database class for postgresql */
class rw_DB_postges extends rw_DB {}
/* -------------------------------------------------- VIEW -------------------------------------------------- */
/* viewer interface */
interface rw_iVIEW
{
  public function rw_VIEW_function();
}
/* viewer abstract class */
abstract class rw_aVIEW implements rw_iVIEW
{
  public function rw_VIEW_function() {}
}
/* main viewer class - used in application */
class rw_VIEW extends rw_aVIEW
{
  public function rw_VIEW_function() {}
}
/* viewer class for html */
class rw_VIEW_html extends rw_VIEW {}
/* viewer class for pdf */
class rw_VIEW_pdf extends rw_VIEW {}
/* -------------------------------------------------- CONTROLLER -------------------------------------------------- */
$database = new rw_DB;
if(isset($_POST['db_action'])) {$database->rw_DB_function();}
$viewer = new rw_VIEW;
$viewer->rw_VIEW_function();

/* -------------------------------------------------- TEST -------------------------------------------------- */

?>