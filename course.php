<?php
function scoretotal($score1, $score2, $score3){
    if($score1 + $score2 + $score3 >210){
    echo '合計点は' . $score1 + $score2 + $score3 . 'なので合格です';
    }else{
    echo '合計点は' . $score1 + $score2 + $score3 . 'なので不合格です';
    }
    }
    echo(scoretotal(110,90,80));

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
