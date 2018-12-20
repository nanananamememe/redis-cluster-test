<?php

$rc = new \RedisCluster(null, [
    'redis:7000',
]);



$rc->setOption(\RedisCluster::OPT_SLAVE_FAILOVER, \RedisCluster::FAILOVER_DISTRIBUTE);

echo "<pre>";
print_r($rc->_masters());

print_r($rc->rawcommand(['172.16.239.10', 7000], 'cluster', 'nodes'));

$t = microtime();

$k = md5($t);

$rc->set($k, $t);

print_r($rc->get($k));
