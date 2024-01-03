<?php
function binarySearch($arr, $target) {
   $left = 0;
   $right = count($arr) - 1;
   while ($left <= $right) {
      $mid = floor(($left + $right) / 2);
      // Check if the target value is found at the middle index
      if ($arr[$mid] === $target) {
         return $mid;
      }
      // If the target is greater, ignore the left half
      if ($arr[$mid] < $target) {
         $left = $mid + 1;
      }
      // If the target is smaller, ignore the right half
      else {
         $right = $mid - 1;
      }
   }
   // Target value not found in the array
   return -1;
}
// Example usage 1
$sortedArray = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$targetValue = 91;
$resultIndex = binarySearch($sortedArray, $targetValue);
if ($resultIndex === -1) {
   echo "Target value not found in the array.<br>";
} else {
   echo "Target value found at index $resultIndex.<br>";
}
// Example usage 2
$targetValue = 42;
$resultIndex = binarySearch($sortedArray, $targetValue);
if ($resultIndex === -1) {
   echo "Target value not found in the array.";
} else {
   echo "Target value found at index $resultIndex.";
}
?>