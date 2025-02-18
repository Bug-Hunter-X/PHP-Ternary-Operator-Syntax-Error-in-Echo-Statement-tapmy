# PHP Ternary Operator in Echo Statement Bug

This repository demonstrates a common error in PHP when using the ternary operator directly within an `echo` statement. The incorrect usage can lead to parse errors or unexpected output.

## Bug Description
The issue stems from the lack of parentheses around the ternary expression when used within the `echo` statement.  PHP's operator precedence rules can cause the code to be parsed incorrectly without explicit grouping using parentheses.

## Solution
The solution involves simply enclosing the ternary expression within parentheses to ensure proper evaluation and correct output.