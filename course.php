<?php
function scoretotal($score1, $score2, $score3){
    if($score1 + $score2 + $score3 > 210){
    echo '合格点は' . $score1 + $score2 + $score3 . 'なので合格です';

}else{
    echo '合格点は' . $score1 + $score2 + $score3 . 'なので合格です';
}
}
echo(scoretotal(100, 90, 100));

function triangle($buttom, $height)
{
    $trianglearea = $buttom * $height / 2;
    return $trianglearea; 
}
$area = triangle(10,10);
print $area;


function rectangle($buttom, $height)
{
    $rectanglearea = $buttom * $height /2;
    return $rectanglearea;
}

$area2 = rectangle(10,10);
print $area2;

function trapezoid($upperbottom, $bottombase, $height)
{
    $trapezoidarea = ($upperbottom + $bottombase) * $height /2;
    return $trapezoidarea;
}
$area3 = trapezoid(10,10,10);
print $area3;

$subjects_score = array(
    'english' => 70,
    'math' => 85,
    'japanese' =>50,
    'science'  =>45,
);

$subjects_score['history'] = 80;

unset($subjects_score['science']);


try{
    throw new Exception('例外に投げます');

}catch(Exception $e){
    echo $e->getMessage(), "\n";
}finally {
    echo "この行は実行されます" . "\n";
}


$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";


define("FELANGUAGE", "Vue.js");
print FELANGUAGE;


$num = 0;

do{
  print 'num = '.$num.'<br />';
  $num ++;
}while ($num < 3);