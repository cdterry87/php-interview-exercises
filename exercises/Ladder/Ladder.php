<?php

declare(strict_types=1);

namespace Exercises\Ladder;

/**
 * Print a ladder.
 *
 * @method static void print(int $level)
 * @example Ladder::print(3)  -> '#  '
 *                               '## '
 *                               '###'
 */
final class Ladder
{
  public static function print(int $level): void
  {
    for($i = 1; $i <= $level; ++$i){
      print str_pad(str_repeat('#', $i), $level);
    }
  }
}
