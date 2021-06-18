<?php

declare(strict_types=1);

namespace Exercises\Vowels;

/**
 * Count string vowels (aeiou).
 *
 * @method static int count(string $string)
 * @example Vowels::count('Hello!')  === 2
 * @example Vowels::count('Why?')  === 0
 */
final class Vowels
{
  public static function count(string $string): int
  {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $array = str_split(strtolower($string));

    return count(array_intersect($array, $vowels));
  }
}
