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
function E131(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
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
function _H131($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=MacOutlook/)[\\d\\.]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mac OS X )[\\d\\.]+#', $useragent));
  $ns = E131($segments, array(0 => array(0 => '14.12.0.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,431062,913, 'MacOutlook/14.12.0.X (Intel Mac OS X 10.6.8)', '17595-17296-18108-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.0.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.0.X (Intel Mac OS X 10.8.2)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.1.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.1.X (Intel Mac OS X 10.8.2)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.2.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.2.X (Intel Mac OS X 10.8.2)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.2.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.2.X (Intel Mac OS X 10.8.3)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.1.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.1.X (Intel Mac OS X 10.8.3)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.4.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.4.X (Intel Mac OS X 10.8.3)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.4.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.4.X (Intel Mac OS X 10.8.4)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.5.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.5.X (Intel Mac OS X 10.8.4)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.5.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.5.X (Intel Mac OS X 10.8.3)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.2.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.2.X (Intel Mac OS X 10.8.4)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.6.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.6.X (Intel Mac OS X 10.8.4)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.7.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.7.X (Intel Mac OS X 10.8.4)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.6.'), 1 => array(0 => '10.8.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.6.X (Intel Mac OS X 10.8.5)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.7.'), 1 => array(0 => '10.8.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,1297307,913, 'MacOutlook/14.3.7.X (Intel Mac OS X 10.8.5)', '17595-18207-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.0.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.0.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.1.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.1.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.2.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.2.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.4.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.4.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.5.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.5.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.6.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.6.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.7.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,1297307,913, 'MacOutlook/14.3.7.X (Intel Mac OS X 10.7.5)', '17595-17297-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.0.'), 1 => array(0 => '10.7.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.0.X (Intel Mac OS X 10.7.3)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.1.'), 1 => array(0 => '10.7.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.1.X (Intel Mac OS X 10.7.3)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.2.'), 1 => array(0 => '10.7.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.2.X (Intel Mac OS X 10.7.4)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.2.'), 1 => array(0 => '10.7.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.2.X (Intel Mac OS X 10.7.3)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.1.'), 1 => array(0 => '10.7.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.1.X (Intel Mac OS X 10.7.4)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.7.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.7.4)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.4.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.4.X (Intel Mac OS X 10.7.5)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.5.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.5.X (Intel Mac OS X 10.7.5)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.7.5)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.2.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,829002,913, 'MacOutlook/14.2.2.X (Intel Mac OS X 10.7.5)', '17595-17297-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.8.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.8.0)', '17595-18207-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.8.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.8.1)', '17595-18207-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.4.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,829002,913, 'MacOutlook/14.2.4.X (Intel Mac OS X 10.8.2)', '17595-18207-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.8.2)', '17595-18207-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.5.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,829002,913, 'MacOutlook/14.2.5.X (Intel Mac OS X 10.8.2)', '17595-18207-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.2.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.2.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.1.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.1.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.4.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.4.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.5.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.5.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.6.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.6.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.3.7.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,1297307,913, 'MacOutlook/14.3.7.X (Intel Mac OS X 10.6.8)', '17595-17296-21586-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.14.0.'), 1 => array(0 => '10.7.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,806592,913, 'MacOutlook/14.14.0.X (Intel Mac OS X 10.7.2)', '17595-17297-21582-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.14.0.'), 1 => array(0 => '10.7.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,806592,913, 'MacOutlook/14.14.0.X (Intel Mac OS X 10.7.3)', '17595-17297-21582-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.14.0.'), 1 => array(0 => '10.7.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,806592,913, 'MacOutlook/14.14.0.X (Intel Mac OS X 10.7.4)', '17595-17297-21582-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.14.0.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,806592,913, 'MacOutlook/14.14.0.X (Intel Mac OS X 10.7.5)', '17595-17297-21582-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.0.0.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,784117,913, 'MacOutlook/14.0.0.X (Intel Mac OS X 10.8.2)', '17595-18207-21585-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.0.0.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,784117,913, 'MacOutlook/14.0.0.X (Intel Mac OS X 10.8.3)', '17595-18207-21585-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.0.0.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,784117,913, 'MacOutlook/14.0.0.X (Intel Mac OS X 10.8.4)', '17595-18207-21585-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.2.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,829002,913, 'MacOutlook/14.2.2.X (Intel Mac OS X 10.6.8)', '17595-17296-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.3.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,829002,913, 'MacOutlook/14.2.3.X (Intel Mac OS X 10.6.8)', '17595-17296-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.5.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,829002,913, 'MacOutlook/14.2.5.X (Intel Mac OS X 10.6.8)', '17595-17296-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.2.4.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,829002,913, 'MacOutlook/14.2.4.X (Intel Mac OS X 10.6.8)', '17595-17296-21584-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.8.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.8.2)', '17595-18207-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.8.3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.8.3)', '17595-18207-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.8.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.8.4)', '17595-18207-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.7.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.7.2)', '17595-17297-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.7.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.7.4)', '17595-17297-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.7.5)', '17595-17297-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.0.0.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,784117,913, 'MacOutlook/14.0.0.X (Intel Mac OS X 10.6.8)', '17595-17296-21585-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.10.0.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,790731,913, 'MacOutlook/14.10.0.X (Intel Mac OS X 10.6.8)', '17595-17296-18379-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.0.0.'), 1 => array(0 => '10.7.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,784117,913, 'MacOutlook/14.0.0.X (Intel Mac OS X 10.7.5)', '17595-17297-21585-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.13.0.'), 1 => array(0 => '10.6.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,795355,913, 'MacOutlook/14.13.0.X (Intel Mac OS X 10.6.8)', '17595-17296-21581-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.14.0.'), 1 => array(0 => '10.5.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,47912,806592,913, 'MacOutlook/14.14.0.X (Intel Mac OS X 10.5.8)', '17595-17295-21582-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.13.0.'), 1 => array(0 => '10.5.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,47912,795355,913, 'MacOutlook/14.13.0.X (Intel Mac OS X 10.5.8)', '17595-17295-21581-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => '14.13.0.'), 1 => array(0 => '10.7.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,795355,913, 'MacOutlook/14.13.0.X (Intel Mac OS X 10.7.2)', '17595-17297-21581-18092');
    $ls = $ns;
  }
  return $dl;
}