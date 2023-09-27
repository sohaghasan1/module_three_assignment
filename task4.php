<?php 

$studentGrades  = array(
    "Rahim" => array(
        "Math" => 78,
        "English" => 56,
        "Science" => 98
    ),
    "Karim" => array(
        "Math" => 76,
        "English" => 69,
        "Science" => 84
    ),
    "Abdul" => array(
        "Math" => 64,
        "English" => 79,
        "Science" => 88
    )

);

function average_grade($studentGrades){
   foreach($studentGrades as $name=>$student){
        echo "Student: $name <br>";
        foreach($student as $sub=>$mark){
            echo"- $sub = $mark <br/>";
        }   
        $count = count($student);
        $total_mark = array_sum($student);
        $average = $total_mark / $count;
        echo "- Average mark= $average <br> <br> <br> <br>";
   }
}
average_grade($studentGrades);