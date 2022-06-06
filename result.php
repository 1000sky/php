<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);


print "私の名前は、" . $name;
print "ご希望の商品は" . $goods;
print "注文数は、" . $number;