# PHP Pass-by-Reference in Nested Arrays

This example demonstrates a common pitfall in PHP when using pass-by-reference with nested arrays.  The `processArray` function intends to double each element, but due to how pass-by-reference works with nested structures, it produces unexpected output.

The `bug.php` file contains the buggy code. The `bugSolution.php` file shows a corrected version.

## Understanding the Issue

PHP's pass-by-reference mechanism can lead to unintended side effects when dealing with nested structures. In this case, modification within the nested array affects the original array, which is not always the desired behavior.  This is because the reference persists even within the recursive call.

## Solution

The solution involves a clearer handling of references, ensuring independent manipulation of nested array elements.