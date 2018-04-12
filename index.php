<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';

use gan068\SimpleCouponGenerator\Coupon;

echo 'coupon:' . Coupon::generate(8) . PHP_EOL;
