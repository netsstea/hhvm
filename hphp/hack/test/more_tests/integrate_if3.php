<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

function x(int $x): void {}

function y(): void {
  $x = 3;
  try {
    if (true) {
      $x = false;
      throw new Exception('x');
    } else {
      $x = 3;
      throw new Exception('x');
    }
  } catch (Exception $e) {
    x($x);
  }
}
