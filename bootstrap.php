<?php
 require ('database/Connection.php');
 require ('database/QueryBuilder.php');
 $config =  require ('database/config.php');

 return new QueryBuilder(Connection::make($config['database']));
?>