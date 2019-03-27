<?php

$brackets1 = "";
$brackets2 = "()";
$brackets3 = "{[}]]}][(";
$brackets4 = "{[{]()}}";

function isCorrect($some_brackets)
{
    $open_round_brackets_count = 0;
    $closed_round_brackets_count = 0;
    $open_square_brackets_count = 0;
    $closed_square_brackets_count = 0;
    $open_figure_brackets_count = 0;
    $closed_figure_brackets_count = 0;
    $brackets_array = str_split($some_brackets);
    foreach($brackets_array as $bracket){
        if($bracket == '('){
            $open_round_brackets_count++;
        }
        elseif ($bracket == ')'){
            $closed_round_brackets_count++;
        }
        elseif ($bracket == '['){
            $open_square_brackets_count++;
        }
        elseif ($bracket == ']'){
            $closed_square_brackets_count++;
        }
        elseif ($bracket == '{'){
            $open_figure_brackets_count++;
        }
        elseif ($bracket == '}'){
            $closed_figure_brackets_count++;
        }
    }
    $is_bracket_count_equal = False;
    if($open_round_brackets_count == $closed_round_brackets_count
    and $open_square_brackets_count == $closed_square_brackets_count
    and $open_figure_brackets_count == $closed_figure_brackets_count){
        $is_bracket_count_equal = True;
    }
    if($is_bracket_count_equal == True){
        echo "You done good, brackets typed correctly.\r\n";
    }
    else{
        echo "You did something wrong, brackets fubar.\r\n";
    }
    return $is_bracket_count_equal;
}

assert(isCorrect($brackets1) === True);
assert(isCorrect($brackets2) === True);
assert(isCorrect($brackets3) === False);
assert(isCorrect($brackets4) === True);