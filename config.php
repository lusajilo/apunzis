<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-3-227-15-75.compute-1.amazonaws.com';
$CFG->dbname    = 'dj3kli0o1ah29';
$CFG->dbuser    = 'hqluautenrfdgh';
$CFG->dbpass    = '89d97a94f07eec88552d9ef9d686993a48a588d92146a7341c992c07ea0a1b34';
$CFG->prefix    = 'mdl_';
$CFG->sslproxy = true;
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://apunzis.herokuapp.com/';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
