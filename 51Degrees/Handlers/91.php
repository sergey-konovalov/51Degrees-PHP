<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the matching score between the two strings for this handler.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The score between the two strings.
 */
function E91(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 2, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H91($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=TIANYU-KTOUCH/)[^/]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#.+#', $useragent));
  $ns = E91($segments, array(0 => array(0 => 'A930'), 1 => array(0 => 'TIANYU-KTOUCH/A930/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(375175,78704,78711,913, 'TIANYU-KTOUCH/A930/Screen-240X320', '17899-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'D772'), 1 => array(0 => 'TIANYU-KTOUCH/D772/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/D772/Screen-176X220', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'DT200'), 1 => array(0 => 'TIANYU-KTOUCH/DT200/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/DT200/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A610'), 1 => array(0 => 'TIANYU-KTOUCH/A610/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A610/Screen-176X220', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'D159'), 1 => array(0 => 'TIANYU-KTOUCH/D159/Screen-128X128')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/D159/Screen-128X128', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'D175'), 1 => array(0 => 'TIANYU-KTOUCH/D175/Screen-128X160')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/D175/Screen-128X160', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'X90'), 1 => array(0 => 'TIANYU-KTOUCH/X90/MIDP2.0/CLDC1.1/Screen-320X240')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/X90/MIDP2.0/CLDC1.1/Screen-320X240', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A927'), 1 => array(0 => 'TIANYU-KTOUCH/A927/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A927/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'FT05'), 1 => array(0 => 'TIANYU-KTOUCH/FT05/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/FT05/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B858'), 1 => array(0 => 'TIANYU-KTOUCH/B858/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/B858/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'V320'), 1 => array(0 => 'TIANYU-KTOUCH/V320/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/V320/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B922'), 1 => array(0 => 'TIANYU-KTOUCH/B922/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/B922/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'C350'), 1 => array(0 => 'TIANYU-KTOUCH/C350/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/C350/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B2012'), 1 => array(0 => 'TIANYU-KTOUCH/B2012/Screen-128X128')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/B2012/Screen-128X128', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B2016'), 1 => array(0 => 'TIANYU-KTOUCH/B2016/Screen-128X128')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/B2016/Screen-128X128', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'D172'), 1 => array(0 => 'TIANYU-KTOUCH/D172/Screen-128x160')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/D172/Screen-128x160', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A660'), 1 => array(0 => 'TIANYU-KTOUCH/A660/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A660/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A662'), 1 => array(0 => 'TIANYU-KTOUCH/A662/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A662/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H711'), 1 => array(0 => 'TIANYU-KTOUCH/H711/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/H711/Screen-176X220', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A662'), 1 => array(0 => 'TIANYU-KTOUCH/A662/MIDP2.0/CLDC1.1/Screen-240X400')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A662/MIDP2.0/CLDC1.1/Screen-240X400', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A168'), 1 => array(0 => 'TIANYU-KTOUCH/A168/MIDP2.0/CLDC1.1/Screen-320X430')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A168/MIDP2.0/CLDC1.1/Screen-320X430', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'V760'), 1 => array(0 => 'TIANYU-KTOUCH/V760/MIDP2.0/CLDC1.1/Screen-240X400')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/V760/MIDP2.0/CLDC1.1/Screen-240X400', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'DT28'), 1 => array(0 => 'TIANYU-KTOUCH/DT28/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/DT28/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'W990'), 1 => array(0 => 'TIANYU-KTOUCH/W990/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/W990/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A995'), 1 => array(0 => 'TIANYU-KTOUCH/A995/MIDP2.0/CLDC1.1/Screen-320x430')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A995/MIDP2.0/CLDC1.1/Screen-320x430', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'D173'), 1 => array(0 => 'TIANYU-KTOUCH/D173/Screen-128x160')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/D173/Screen-128x160', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A903'), 1 => array(0 => 'TIANYU-KTOUCH/A903/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/A903/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'C800'), 1 => array(0 => 'TIANYU-KTOUCH/C800/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/C800/MIDP2.0/CLDC1.1/Screen-240x320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H800'), 1 => array(0 => 'TIANYU-KTOUCH/H800/MIDP2.0/CLDC1.1/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/H800/MIDP2.0/CLDC1.1/Screen-176X220', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'Q981'), 1 => array(0 => 'TIANYU-KTOUCH/Q981/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/Q981/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'M600'), 1 => array(0 => 'TIANYU-KTOUCH/M600/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,78704,78711,913, 'TIANYU-KTOUCH/M600/MIDP2.0/CLDC1.1/Screen-240X320', '15364-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H699'), 1 => array(0 => 'TIANYU-KTOUCH/H699/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(475979,78704,78711,913, 'TIANYU-KTOUCH/H699/Screen-176X220', '17891-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'X260'), 1 => array(0 => 'TIANYU-KTOUCH/X260/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(499360,78704,78711,913, 'TIANYU-KTOUCH/X260/Screen-176X220', '17884-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'V908'), 1 => array(0 => 'TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(436047,78704,78711,913, 'TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320', '17885-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H999'), 1 => array(0 => 'TIANYU-KTOUCH/H999/MIDP2.0/CLDC1.1/Screen-320X240')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(509338,78704,78711,913, 'TIANYU-KTOUCH/H999/MIDP2.0/CLDC1.1/Screen-320X240', '17888-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H677'), 1 => array(0 => 'TIANYU-KTOUCH/H677/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(503557,78704,78711,913, 'TIANYU-KTOUCH/H677/Screen-176X220', '17893-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H688'), 1 => array(0 => 'TIANYU-KTOUCH/H688/Screen-176X220')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(514346,78704,78711,913, 'TIANYU-KTOUCH/H688/Screen-176X220', '17892-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H877'), 1 => array(0 => 'TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(503485,78704,78711,913, 'TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240', '17889-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'E62'), 1 => array(0 => 'TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(508158,78704,78711,913, 'TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400', '17901-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B2010'), 1 => array(0 => 'TIANYU-KTOUCH/B2010/Screen-128X128')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(514569,78704,78711,913, 'TIANYU-KTOUCH/B2010/Screen-128X128', '17898-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'B832'), 1 => array(0 => 'TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(79668,78704,78711,913, 'TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320', '17897-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'H777'), 1 => array(0 => 'TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(511212,78704,78711,913, 'TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240', '17890-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'V388'), 1 => array(0 => 'TIANYU-KTOUCH/V388/MIDP2.0/CLDC1.1/Screen-240X320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(511284,78704,78711,913, 'TIANYU-KTOUCH/V388/MIDP2.0/CLDC1.1/Screen-240X320', '17886-17895-17896-18092');
    $ls = $ns;
  }
  $ns = E91($segments, array(0 => array(0 => 'A7726'), 1 => array(0 => 'TIANYU-KTOUCH/A7726/MIDP2.0/CLDC1.1/Screen-240x320')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(495573,78704,78711,913, 'TIANYU-KTOUCH/A7726/MIDP2.0/CLDC1.1/Screen-240x320', '17900-17895-17896-18092');
    $ls = $ns;
  }
  return $dl;
}