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
function E117(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 100000, $score);
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
function _H117($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#^[^\\(]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#darwin#', $useragent));
  $ns = E117($segments, array(0 => array(0 => 'coccoc/1.0 '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,430407, 'coccoc/1.0 (http://help.coccoc.vn/) AppEngine-Google; (+http://code.google.com/appengine; appid: s~doingfly)', '18254-7480-18245-18091');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Python-urllib/2.7 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Python-urllib/2.7 AppEngine-Google; (+http://code.google.com/appengine; appid: s~pulsecontentserver)', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'AppEngine-Google; (+http://code.google.com/appengine; appid: s~getfavicon27)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'AppEngine-Google; (+http://code.google.com/appengine; appid: tmobile-internet)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'AppEngine-Google; (+http://code.google.com/appengine; appid: tmobile-w4z)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Public Hub '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'Public Hub (+http://pubsubhubbub.appspot.com; 1 subscribers) AppEngine-Google; (+http://code.google.com/appengine; appid: pubsubhubbub)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'AppEngine-Google; (+http://code.google.com/appengine; appid: vi-mobile)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,913, 'AppEngine-Google; (+http://code.google.com/appengine; appid: s~google.com:mobile-checker)', '15364-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Xenu Link Sleuth/1.3.8 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,272128,430407, 'Xenu Link Sleuth/1.3.8 AppEngine-Google; (+http://code.google.com/appengine; appid: s~runningcheese01)', '15364-7480-18245-18091');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'NetworkedBlogs '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,913, 'NetworkedBlogs (+http://www.networkedblogs.com;) AppEngine-Google; (+http://code.google.com/appengine; appid: s~networkedblogshr)', '18254-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'PulseParser/0.1 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,913, 'PulseParser/0.1 AppEngine-Google; (+http://code.google.com/appengine; appid: s~hr-pulsesubscriber)', '18254-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'PulseParser/0.3 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,913, 'PulseParser/0.3 AppEngine-Google; (+http://code.google.com/appengine; appid: s~hr-pulsesubscriber)', '18254-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Feed-Fetcher AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,913, 'Feed-Fetcher AppEngine-Google; (+http://code.google.com/appengine; appid: s~ziin-me)', '18254-7480-18245-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Python-urllib/2.7 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,55546,913, 'Python-urllib/2.7 AppEngine-Google; (+http://code.google.com/appengine; appid: s~hr-pulsesubscriber)', '15364-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Python-urllib/2.5 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,55546,913, 'Python-urllib/2.5 AppEngine-Google; (+http://code.google.com/appengine; appid: ggghelper)', '15364-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Python-urllib/1.17 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,55546,913, 'Python-urllib/1.17 AppEngine-Google; (+http://code.google.com/appengine; appid: s~hr-pulsesubscriber)', '15364-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'heimoicom/1.0 '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,55546,913, 'heimoicom/1.0 (+http://heimoicom.appspot.com/) AppEngine-Google; (+http://code.google.com/appengine; appid: s~heimoisrv)', '15364-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Mozilla/5.0 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,55546,913, 'Mozilla/5.0 AppEngine-Google; (+http://code.google.com/appengine; appid: s~ziin-me)', '15364-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'facebookexternalhit/1.0 '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,483391, 'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php) AppEngine-Google; (+http://code.google.com/appengine; appid: rtweetme)', '18254-7480-18245-18093');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Feedfetcher-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,272128,487929, 'Feedfetcher-Google; (+http://www.google.com/feedfetcher.html; 2 subscribers; feed-id=X) AppEngine-Google; (+http://code.google.com/appengine; appid: voxelshader)', '18254-7480-18245-18189');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Python-urllib/2.7 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(273084,272122,55546,913, 'Python-urllib/2.7 AppEngine-Google; (+http://code.google.com/appengine; appid: s~servicescdt)', '18254-7480-17470-18092');
    $ls = $ns;
  }
  $ns = E117($segments, array(0 => array(0 => 'Mozilla-Firefox5.0 AppEngine-Google; '), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,272122,285127,913, 'Mozilla-Firefox5.0 AppEngine-Google; (+http://code.google.com/appengine; appid: s~zhoulixia86)', '15364-7480-17207-18092');
    $ls = $ns;
  }
  return $dl;
}