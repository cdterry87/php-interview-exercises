<?php

declare(strict_types=1);

namespace Exercises\ArrayGroup;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 * @method static any[] group(any[] $array, int $size)
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
  public static function groupAlt($array, $size)
  {
    return array_chunk($array, $size);
  }
  
  public static function group($array, $size)
  {
    $result = [];
    $max = count($array);

    for($i = 0; $i < $max; $i += $size){
      $result[] = array_slice($array, $i, $size);
    }

    return $result;
  }
}
