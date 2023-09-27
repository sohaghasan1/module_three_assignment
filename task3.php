<?php 

$grades = [85, 92, 78, 88, 95];
function grade_sort($grades){
    arsort($grades);
    print_r($grades);
}
grade_sort($grades);

