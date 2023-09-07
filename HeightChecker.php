class Solution {

/**
 * @param Integer[] $heights
 * @return Integer
 */
function heightChecker($heights) {
    // Create the expected array by sorting the heights array
    $expected = $heights; // Make a copy of heights
    sort($expected);

    // Initialize a variable to count the differences
    $count = 0;

    // Compare heights and expected arrays
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
        }
    }

    return $count;
}
}

// Test cases
$solution = new Solution();
$heights1 = [1, 1, 4, 2, 1, 3];
$heights2 = [5, 1, 2, 3, 4];
$heights3 = [1, 2, 3, 4, 5];

echo $solution->heightChecker($heights1) . "\n"; // Output: 3
echo $solution->heightChecker($heights2) . "\n"; // Output: 5
echo $solution->heightChecker($heights3) . "\n"; // Output: 0
