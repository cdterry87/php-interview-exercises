<?php

declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @method static bool check(string $string)
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
  public static function check(string $string) : bool
  {
    return $string === implode(array_reverse(str_split($string)));
  }
}
