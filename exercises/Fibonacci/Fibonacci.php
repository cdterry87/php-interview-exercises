<?php

declare(strict_types=1);

namespace Exercises\Fibonacci;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 *
 * @method static int get(int $index)
 * @example Fibonacci::get(7) === 13
 */
final class Fibonacci
{
  public static function get(int $index): int
  {
    $fib = [];
    for($i = 0; $i <= $index; ++$i) {
      if ($i <= 1) {
        $fib[] = $i;
      } else {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
      }
    }

    return $fib[$index];
  }
}
