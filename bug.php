This code snippet demonstrates a common error in PHP related to using the ternary operator within an echo statement.  The ternary operator's output should always be enclosed in parentheses when used directly within an echo statement to avoid syntax errors or unexpected behavior.

```php
<?php
echo "The value is: " . $value ? 'true' : 'false';
?>
```