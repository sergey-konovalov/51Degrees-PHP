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
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E131($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H131($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(|; \\w+)\\)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#MSIE \\d+\\.\\d#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=Opera/)[\\d+.]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent));
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.00')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,424540,913, 'Opera/9.80 (Windows NT 6.1; WOW64; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.289 Version/12.00', '15364-17285-17216-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0; bg)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.00')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,424540,913, 'Opera/9.80 (Windows NT 6.1; U; compatible; MSIE 7.0; Windows NT 6.0; bg) Presto/2.10.289 Version/12.00', '15364-17285-17216-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.01')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,424540,913, 'Opera/9.80 (Windows NT 6.1; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.289 Version/12.01', '15364-17285-17216-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.02')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,874223,913, 'Opera/9.80 (Windows NT 6.1; WOW64; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.289 Version/12.02', '15364-17285-19961-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0; bg)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.02')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,874223,913, 'Opera/9.80 (Windows NT 6.1; U; compatible; MSIE 7.0; Windows NT 6.0; bg) Presto/2.10.289 Version/12.02', '15364-17285-19961-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0; en)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.02')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,874223,913, 'Opera/9.80 (Windows NT 6.1; WOW64; U; compatible; MSIE 7.0; Windows NT 6.0; en) Presto/2.10.289 Version/12.02', '15364-17285-19961-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.14')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,1031303,913, 'Opera/9.80 (Windows NT 6.1; WOW64; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)) Presto/2.12.388 Version/12.14', '15364-17285-21172-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '11.64')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,771743,913, 'Opera/9.80 (Windows NT 6.1; WOW64; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.229 Version/11.64', '15364-17285-18347-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0; en)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '11.64')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,771743,913, 'Opera/9.80 (Windows NT 6.1; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; en) Presto/2.10.229 Version/11.64', '15364-17285-18347-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.12')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,971236,913, 'Opera/9.80 (Windows NT 6.1; WOW64; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)) Presto/2.12.388 Version/12.12', '15364-17285-20412-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,957609,913, 'Opera/9.80 (Windows NT 6.1; WOW64; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)) Presto/2.12.388 Version/12.11', '15364-17285-21814-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '12.10')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,904096,913, 'Opera/9.80 (Windows NT 6.1; WOW64; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)) Presto/2.12.388 Version/12.10', '15364-17285-21951-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '11.62')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,733196,913, 'Opera/9.80 (Windows NT 6.1; U; Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.229 Version/11.62', '15364-17285-18331-18092');
    $ls = $ns;
  }
  $ns = E131($segments, array(0 => array(0 => 'Windows NT 6.0)'), 1 => array(0 => 'MSIE 7.0'), 2 => array(0 => '9.80'), 3 => array(0 => '11.61')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,685628,913, 'Opera/9.80 (Windows NT 6.1; U; &quot;Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0); en) Presto/2.10.229 Version/11.61', '15364-17285-3403-18092');
    $ls = $ns;
  }
  return $dl;
}