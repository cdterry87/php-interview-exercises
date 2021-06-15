<?php

declare(strict_types=1);

namespace Exercises\FizzBuzz;

/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void print(int $limit)
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
final class FizzBuzz
{
  public static function print(int $limit): void
  {
    $word = '';
    for($i = 1; $i <= $limit; ++$i) {
      $isDivisibleBy3 = $i % 3 === 0;
      $isDivisibleBy5 = $i % 5 === 0;

      if ($isDivisibleBy3) {
        $word .= 'fizz';
      } 
      if ($isDivisibleBy5) {
        $word .= 'buzz';
      }

      if (!$isDivisibleBy3 && !$isDivisibleBy5) {
        $word .= $i;
      }
    }
    echo $word;
  }
}
