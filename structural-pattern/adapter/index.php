<?php

require 'Adaptee.php';
require 'Adapter.php';

$adapter = new Adapter(new Adaptee());
echo $adapter->request();