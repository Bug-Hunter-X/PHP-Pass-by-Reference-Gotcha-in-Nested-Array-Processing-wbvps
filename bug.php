```php
function processArray(array &$arr): void {
  foreach ($arr as &$value) {
    if (is_array($value)) {
      processArray($value);
    } else {
      $value = $value * 2;
    }
  }
}

$myArray = [1, 2, [3, 4], 5];
processArray($myArray);
print_r($myArray);
```