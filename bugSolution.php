```php
function processArray(array $arr): array {
  $newArray = [];
  foreach ($arr as $value) {
    if (is_array($value)) {
      $newArray[] = processArray($value);
    } else {
      $newArray[] = $value * 2;
    }
  }
  return $newArray;
}

$myArray = [1, 2, [3, 4], 5];
$myArray = processArray($myArray);
print_r($myArray);
```