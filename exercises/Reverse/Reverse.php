<?php

declare(strict_types=1);

namespace Exercises\Reverse;

/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Reverse::int(12) === 21
 * @example Reverse::int(912) === 219
 * @example Reverse::int(120) === 21
 * @example Reverse::int(-12) === -21
 * @example Reverse::int(-120) === -21
 * @example Reverse::string('qwerty')  === 'ytrewq'
 * @example Reverse::string('apple')  === 'elppa'
 */
final class Reverse
{
  public static function int($int)
  {
    $sign = $int <=> 0;
    $number = (string) abs($int);
    return (int) implode(array_reverse(str_split($number))) * $sign;
  }

  public static function string($string)
  {
    return implode(array_reverse(str_split($string)));
  }
}
