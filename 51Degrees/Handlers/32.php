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
 * Calculates the edit distance between the two strings.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The edit distance between the two strings.
 */
function E32($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H32($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Apple Mac OS X v10.6.2 CoreMedia v1.0.0.10C540';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.4 CoreMedia v1.0.0.10F569';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.5 CoreMedia v1.0.0.10H574';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.4 CoreMedia v1.0.0.10F2108';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.6 CoreMedia v1.0.0.10J567';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.7 CoreMedia v1.0.0.10J869';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.7 CoreMedia v1.0.0.10J3250';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.6 CoreMedia v1.0.0.10J3210';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.3 CoreMedia v1.0.0.10D2125';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.7 CoreMedia v1.0.0.10J4139';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.8 CoreMedia v1.0.0.10K540';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.8 CoreMedia v1.0.0.10K549';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6 CoreMedia v1.0.0.10A432';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.3 CoreMedia v1.0.0.10D575';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'Apple Mac OS X v10.6.4 CoreMedia v1.0.0.10F3061';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,176505,119024,913, $ua, '17595-17296-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11C74 (Macintosh; U; Intel Mac OS X 10_7_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50 (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50b (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11D50d (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11E53 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11C2002 (Macintosh; U; Intel Mac OS X 10_7_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11D2001 (Macintosh; U; Intel Mac OS X 10_7_3; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2620 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2705 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11E2617 (Macintosh; U; Intel Mac OS X 10_7_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63 (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11G56 (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63b (Macintosh; U; Intel Mac OS X 10_7_5; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63 (Macintosh; U; Intel Mac OS X 10_7_5; de_de)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.11G63 (Macintosh; U; Intel Mac OS X 10_7_5; fr_fr)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,356240,119024,913, $ua, '17595-17297-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12A269 (Macintosh; U; Intel Mac OS X 10_8; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12B19 (Macintosh; U; Intel Mac OS X 10_8_1; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C54 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C60 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3006 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3012 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C2034 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C60 (Macintosh; U; Intel Mac OS X 10_8_2; de_de)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12C3103 (Macintosh; U; Intel Mac OS X 10_8_2; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12D78 (Macintosh; U; Intel Mac OS X 10_8_3; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12E55 (Macintosh; U; Intel Mac OS X 10_8_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12E55 (Macintosh; U; Intel Mac OS X 10_8_4; de_de)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12E3067 (Macintosh; U; Intel Mac OS X 10_8_4; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12E55 (Macintosh; U; Intel Mac OS X 10_8_4; fr_fr)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.12F37 (Macintosh; U; Intel Mac OS X 10_8_5; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,615842,119024,913, $ua, '17595-18207-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.10A406e (Apple TV; U; CPU OS 6_0 like Mac OS X; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,126175,119024,913, $ua, '17595-18120-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.10A831 (Apple TV; U; CPU OS 6_0_1 like Mac OS X; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,126175,119024,913, $ua, '17595-18120-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.10B329a (Apple TV; U; CPU OS 6_1_3 like Mac OS X; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,126175,119024,913, $ua, '17595-18120-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.9B830 (Apple?TV; U; CPU OS 5_1_1 like Mac OS X; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,126175,119024,913, $ua, '17595-18120-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0.10B809 (Apple TV; U; CPU OS 6_1_4 like Mac OS X; en_us)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(47831,126175,119024,913, $ua, '17595-18120-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0. (AAS-2.2.2; U; Windows NT 6.1)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,94698,119024,913, $ua, '15364-7133-18215-18092');
  }
  $ua = 'AppleCoreMedia/1.0.0. (AAS-2.2.2; U; Windows NT 6.0)';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,50308,119024,913, $ua, '15364-17285-18215-18092');
  }
  $ua = 'Apple iPhone v1.1.4 CoreMedia v1.0.0.4A102';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(116348,75510,119024,913, $ua, '12280-17779-18215-18092');
  }
  $ua = 'Apple iPhone v1.1.5 CoreMedia v1.0.0.4B1';
  $ns = E32($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(116348,75510,119024,913, $ua, '12280-17779-18215-18092');
  }
  return $dl;
}