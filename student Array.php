<?php
$students = [
    [
        "name" => "Denisson",
        "age" => 20,
        "grades" => [85, 90, 78]
    ],
    [
        "name" => "Denis",
        "age" => 22,
        "grades" => [88, 76, 92]
    ],
    [
        "name" => "Moffo",
        "age" => 21,
        "grades" => [95, 89, 84]
    ]
];

function calculateAverageGrade($grades) {
    $total = array_sum($grades); 
    $count = count($grades); 
    return $count > 0 ? $total / $count : 0;
}

foreach ($students as $student) {
    $averageGrade = calculateAverageGrade($student['grades']); 
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Average Grade: " . number_format($averageGrade, 2) . "<br><br>"; 
}
?>