<?php

declare(strict_types=1);

namespace Exercises\Capitalize;

/**
 * Capitalize each word.
 *
 * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */
final class Capitalize
{
  public static function get(string $string) : string
  {
    return ucwords($string);
  }

  public static function getAlt(string $string) : string
  {
    $words = array_map(function ($word) {
      return strtoupper($word[0]) . substr($word, 1);
    }, explode(' ', $string));

    return implode(' ', $words);
  }
}
