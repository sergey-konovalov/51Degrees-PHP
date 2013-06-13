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
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The edit distance between the two strings.
 */
function E86($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H86($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Mozilla/4.0 (Brew MP 1.0.2; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-6780';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(333648,268780,17936,913, $ua, '13723-22283-4223-18092');
  }
  $ua = 'Mozilla/4.0 (Brew MP 1.0.2; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP6780';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(333648,268780,17936,913, $ua, '13723-22283-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-6760 Novarra-Vision/8.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP6760 Novarra-Vision/8.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP6760, Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP6760';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP6760';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-6760';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sanyo  SCP-6760';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(117459,108321,17936,913, $ua, '12321-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Boost SCP-2700';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(295345,108321,168272,913, $ua, '12297-5208-4628-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Boost SCP-2700 Novarra-Vision/8.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(295345,108321,168272,913, $ua, '12297-5208-4628-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Sprint SCP-2700';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(295345,108321,168272,913, $ua, '12297-5208-4628-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) Sprint SCP-2700 Novarra-Vision/8.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(295345,108321,168272,913, $ua, '12297-5208-4628-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP3810 Novarra-Vision/8.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300195,108321,17936,913, $ua, '12370-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP3810';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300195,108321,17936,913, $ua, '12370-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP3810, Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Boost SCP3810';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300195,108321,17936,913, $ua, '12370-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-3810';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300195,108321,17936,913, $ua, '12370-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (Brew MP 1.0.2; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint SCP-3820';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(294985,268780,17936,913, $ua, '13663-22283-4223-18092');
  }
  $ua = 'Mozilla/4.0 (Brew MP 1.0.2; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sanyo  SCP-3820';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(294985,268780,17936,913, $ua, '13663-22283-4223-18092');
  }
  $ua = 'Mozilla/4.0 (Brew MP 1.0.2; U; en-us; Sanyo; NetFront/3.5.1/AMB) Sprint E4100';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(268787,268780,17936,913, $ua, '15634-22283-4223-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; Polaris/6.0/AMB) PL2700';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(395144,108321,168272,913, $ua, '12590-5208-4628-18092');
  }
  $ua = 'Mozilla/4.0 (MobilePhone SCP-3100/CA/1.0) NetFront/3.1 MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(388874,121281,241959,913, $ua, '12651-6476-4977-18092');
  }
  $ua = 'Mozilla/4.0 (MobilePhone SCP-3100/US/1.0) NetFront/3.1 MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(388874,121281,241959,913, $ua, '12651-6476-4977-18092');
  }
  $ua = 'Mozilla/4.0 (BREW 3.1.5; U; en-us; Sanyo; NetFront/3.5.1/AMB) PL3810';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277356,108321,17936,913, $ua, '15751-5208-4223-18092');
  }
  $ua = 'Mozilla/4.0 (MobilePhone SCP-8400/US/1.0) NetFront/3.3 MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(399103,121281,36475,913, $ua, '14702-6476-3601-18092');
  }
  $ua = 'Sanyo-SCP6600CA NetFront/3.1 MMP/2.0 Mozilla/4.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(383690,22118,241959,913, $ua, '15312-17017-4977-18092');
  }
  $ua = 'KDDI-AM01 UP.Browser/ KJ/ Mozilla/4.0 (REX; U; en-us; Sanyo; SCP-6750/US; NetFront/3.4/AMB)';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(389890,378044,22204,913, $ua, '12676-19941-3976-18092');
  }
  $ua = 'SANYO-S750/2.130 UP.Browser/7.0.2.1.sn.1.222 (GUI) MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244271,22118,64676,913, $ua, '12015-17017-4222-18092');
  }
  $ua = 'SANYO-S750/1.810 UP.Browser/7.0.2.1.sn.1.159 (GUI) MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244271,22118,64676,913, $ua, '12015-17017-4222-18092');
  }
  $ua = 'SANYO-S750/1.720 UP.Browser/7.0.2.1.sn.1.159 (GUI) MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244271,22118,64676,913, $ua, '12015-17017-4222-18092');
  }
  $ua = 'SANYO-S750/2.280 UP.Browser/7.0.2.1.sn.1.222.a (GUI) MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244271,22118,64676,913, $ua, '12015-17017-4222-18092');
  }
  $ua = 'SANYO-S103/1.803 UP.Browser/7.0.2.1.sn.1.289 (GUI) MMP/2.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(293065,22118,64676,913, $ua, '12261-17017-4222-18092');
  }
  $ua = 'Sanyo-SCP7000CA NetFront/3.1 MMP/2.0 Mozilla/4.0';
  $ns = E86($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(294985,22118,241959,913, $ua, '13663-17017-4977-18092');
  }
  return $dl;
}