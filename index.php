<?php

require_once __DIR__ . '/src/MagicClass.php';

use App\MagicClass;
use App\Point;
use App\Vector;

// $magic = new MagicClass();
// $magic->nonExistentMethod();
// $magic->nonExistentProperty;
// $magic->nonExistentProperty = 'value';
// isset($magic->nonExistentProperty);
// unset($magic->nonExistentProperty);
// echo $magic;
// $serialized = serialize($magic);
// $unserialized = unserialize($serialized);
// MagicClass::nonExistentStaticMethod();

$T1 = new Point(1, 2);
echo "T1: $T1\n";

$V1 = new Vector(3, 4);
echo "V1: $V1\n";

$V2 = new Vector(0, 0);
echo "V2: $V2\n";

$V3 = new Vector(-4, 3);
echo "V3: $V3\n";

echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

if ($V3->isPerpendicularTo($V1)) {
    echo "V3 и V1 перпендикулярны.\n";
}

$T1->moveVector($V1);
echo "T1 после переноса V1: $T1\n";
