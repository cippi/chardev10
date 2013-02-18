<?php

$build = (int)file_get_contents(  __DIR__ . "/.build" );

$staticTables = implode(" ", array(
    "chardev_item_stats",
    "chardev_itemset_stats",
    "chardev_spellinfo",
    "chardev_data_stats"
));

$path = __DIR__ . "/";
exec("mysqldump -uroot chardev_mop > {$path}chardev_mop_b{$build}.sql && gzip {$path}chardev_mop_b{$build}.sql");
exec("mysqldump -uroot chardev_mop_static > {$path}chardev_mop_static_b{$build}.sql && gzip {$path}chardev_mop_static_b{$build}.sql");