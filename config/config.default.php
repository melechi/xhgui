<?php
/**
 * Default configuration for XHGui.
 *
 * To change these, create a called `config.php` file in the same directory,
 * and return an array from there with your overriding settings.
 */
return array(
    'save.handler' => 'mongodb',
    'db.host' => 'mongodb://mongodb:27017',
    'db.db' => 'xhprof',
    'db.options' => array(),
    'profiler.enable' => function() {
        return true;
    },
    'profiler.simple_url' => null,
    'profiler.options' => array(),
    'date.format' => 'M jS H:i:s',
    'detail.count' => 6,
    'page.limit' => 25,
);