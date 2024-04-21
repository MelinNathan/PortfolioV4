<?php
include '../../controllers/Math.php';
include 'views/navbar.php';

echo Math::facto(7);
echo Math::power(7,2);
echo Math::choose(8,3);