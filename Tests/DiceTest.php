<?php
/**
 * Created by PhpStorm.
 * User: asunay
 * Date: 21. 8. 2016
 * Time: 11:51
 * Project: dice
 */

namespace Tests;

use AsunaY\Dice;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$dice = new Dice();

print_r($dice->roll());
