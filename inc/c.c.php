<?php
/**
 * @copyright 2014
 * @description: config.config
 * @file: c.c.php
 * @charset: UTF-8
 * @create: 2014-10-14
 * @version 1.0
**/

!defined('SYSTEM') && die('ERROR-C_C');
// log
get_mod('log') -> set_conf(array(
    'LOG_DATAURL' => SYSTEM_DATA.'log/'
));
// smarty
get_mod('smarty') -> set_conf(array(
    'SMARTY_COMPILE_CHECK' => TRUE,
    'SMARTY_DEBUG' => FALSE,
    'SMARTY_CACHE' => FALSE,
    'SMARTY_USE_SUB_DIRS' => TRUE,
    'SMARTY_CACHE_LIFE_TIME' => 300,
    'SMARTY_LEFT_DELI' => '<{',
    'SMARTY_RIGHT_DELI' => '}>',
    'SMARTY_DATA_CONFIG' => SYSTEM_DATA.'smarty/config/',
    'SMARTY_DATA_CACHE' => SYSTEM_DATA.'smarty/cache/',
    'SMARTY_TPL' => SYSTEM_TPL.'default/',
    'SMARTY_DATA_TPL_C' => SYSTEM_DATA.'smarty/tpl_c/'
));
// mysql
/*
get_mod('mysqli') -> set_conf(array(
    'MYSQLI_HOST' => 'localhost',
    'MYSQLI_USER' => 'root',
    'MYSQLI_PASS' => 'root',
    'MYSQLI_DBNAME' => 'demo',
    'MYSQLI_TABLE_PREFIX' => de_,
    'MYSQLI_PORT' => 3306,
    'MYSQLI_CHARSET' => 'utf8'
));
*/
/*
get_mod('mysqli') -> set_conf(array(
    'MYSQLI_ISCACHE' => FALSE,      //缓存
    'MYSQLI_CACHE_TIME' => 1200,
    'MYSQLI_CACHE' => array(
        'CACHE_TYPE' => 'MEMCACHED',
        'MEMCACHED_DATA' => array(
            'MEMCACHE_HOST' => '127.0.0.1',
            'MEMCACHE_PORT' => 11211,
            'MEMCACHE_TIME_OUT' => 5,
            'MEMCACHE_EXPIRE' => 0,
            'MEMCACHE_FLAG' => 0
        )
    ),
    'MYSQLI_ISRW' => FALSE,     //读写分离
    'MYSQLI_WRITE' => array(
        'MYSQLI_HOST' => 'localhost',
        'MYSQLI_USER' => 'root',
        'MYSQLI_PASS' => 'root',
        'MYSQLI_DBNAME' => 'demo',
        'MYSQLI_TABLE_PREFIX' => 'de_',
        'MYSQLI_PORT' => 3306,
        'MYSQLI_CHARSET' => 'utf8'
    ),
    'MYSQLI_READ' => array(
        'MYSQLI_HOST' => 'localhost',
        'MYSQLI_USER' => 'root',
        'MYSQLI_PASS' => 'root',
        'MYSQLI_DBNAME' => 'demo',
        'MYSQLI_TABLE_PREFIX' => 'de_',
        'MYSQLI_PORT' => 3306,
        'MYSQLI_CHARSET' => 'utf8'
    )
));
*/
// session
/*
get_mod('sess') -> set_conf(array(
    'SESS_TYPE' => 'MYSQLI',
    'SESS_PATH' => NULL,
    'SESS_NAME' => 'PHPSESSID',
    'SESS_TABLE_NAME'   => 'session',
    'SESS_ID_NAME'      => 'sess_id',
    'SESS_DATA_NAME'    => 'sess_data',
    'SESS_TIME_NAME'    => 'sess_time',
    'SESS_IP_NAME'      => 'sess_ip',
    'SESS_U_ID_NAME'    => 'sess_u_id',
    'SESS_U_NAME'       => 'u_id',
    'MAX_LIFE_TIME'     => 1440,
    'SESS_MYSQLI_MARK'  => 'session_mysqli',
    'SESS_MYSQLI_CONF'  => array(
        'MYSQLI_HOST'   => '127.0.0.1',
        'MYSQLI_USER'   => 'root',
        'MYSQLI_PASS'   => 'root',
        'MYSQLI_DBNAME' => 'demo',
        'MYSQLI_TABLE_PREFIX' => 'de_'
    )
));
*/
// cache.memcached
/*
get_mod('cache') -> set_conf(array(
    'CACHE_TYPE' => 'MEMCACHED',
    'MEMCACHED_DATA' => array(
        'MEMCACHE_HOST' => 'localhost',
        'MEMCACHE_PORT' => 11211,
        'MEMCACHE_TIME_OUT' => 5,
        'MEMCACHE_EXPIRE' => 0,
        'MEMCACHE_FLAG' => 0
    )
));
*/
?>