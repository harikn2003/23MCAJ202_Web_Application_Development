<?php
// Step 1: Store student names in an array
$students = array("John", "Alice", "Mark", "Sophia", "David", "Emma");

// Step 2: Display original array
echo "<h3>Original Student List:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 3: Sort the array in ascending order using asort()
asort($students);
echo "<h3>Sorted in Ascending Order (asort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Step 4: Sort the array in descending order using arsort()
arsort($students);
echo "<h3>Sorted in Descending Order (arsort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>
