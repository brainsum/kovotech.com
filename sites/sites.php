<?php

/**
 * @file
 * Configuration file for Drupal's multi-site directory aliasing feature.
 *
 * Drupal searches for an appropriate configuration directory based on the
 * website's hostname and pathname. A detailed description of the rules for
 * discovering the configuration directory can be found in the comment
 * documentation in 'sites/default/default.settings.php'.
 *
 * This file allows you to define a set of aliases that map hostnames and
 * pathnames to configuration directories. These aliases are loaded prior to
 * scanning for directories, and they are exempt from the normal discovery
 * rules. The aliases are defined in an associative array named $sites, which
 * should look similar to the following:
 *
 * $sites = array(
 *   'devexample.com' => 'example.com',
 *   'localhost.example' => 'example.com',
 * );
 *
 * The above array will cause Drupal to look for a directory named
 * "example.com" in the sites directory whenever a request comes from
 * "example.com", "devexample.com", or "localhost/example". That is useful
 * on development servers, where the domain name may not be the same as the
 * domain of the live server. Since Drupal stores file paths into the database
 * (files, system table, etc.) this will ensure the paths are correct while
 * accessed on development servers.
 *
 * To use this file, copy and rename it such that its path plus filename is
 * 'sites/sites.php'. If you don't need to use multi-site directory aliasing,
 * then you can safely ignore this file, and Drupal will ignore it too.
 */

/**
 * Multi-site directory aliasing:
 *
 * Edit the lines below to define directory aliases. Remove the leading hash
 * signs to enable.
 */
#$sites['www.rraister.com'] = 'rraister.sk';
#$sites['rraister.sk.muntiac.brain.sk'] = 'rraister.sk';

#$sites['www.plast-ex.sk'] = 'plast-ex.sk';
#$sites['plast-ex.sk.muntiac.brain.sk'] = 'plast-ex.sk';

#$sites['www.velvetcatering.sk'] = 'velvetcatering.sk';
#$sites['velvetcatering.sk.muntiac.brain.sk'] = 'velvetcatering.sk';

#$sites['www.pdo.hu'] = 'pdo.hu';
#$sites['pdo.hu.muntiac.brain.sk'] = 'pdo.hu';

#$sites['www.csaksiman.hu'] = 'csaksiman.hu';
#$sites['csaksiman.hu.muntiac.brain.sk'] = 'csaksiman.hu';

#$sites['www.lenhladko.sk'] = 'lenhladko.sk';
#$sites['lenhladko.sk.muntiac.brain.sk'] = 'lenhladko.sk';

#$sites['www.jenhladce.cz'] = 'jenhladce.cz';
#$sites['jenhladce.cz.muntiac.brain.sk'] = 'jenhladce.cz';

$sites['www.kovotech.com'] = 'kovotech.com';
$sites['kovotech.gubo.brainsum.com'] = 'kovotech.com';
$sites['localhost'] = 'kovotech.com';

#$sites['medicalproducts.sk.muntiac.brain.sk'] = 'medicalproducts.sk';
#$sites['www.bnm-slovakia.sk'] = 'medicalproducts.sk';
#$sites['bnm-slovakia.sk'] = 'medicalproducts.sk';

#$sites['www.rinzle.sk'] = 'rinzle.sk';
#$sites['rinzle.sk.muntiac.brain.sk'] = 'rinzle.sk';


#$sites['www.prihradzi.sk'] = 'prihradzi.sk';
#$sites['prihradzi.sk.muntiac.brain.sk'] = 'prihradzi.sk';


#$sites['www.reebok-club.sk'] = 'reebok-club.sk';
#$sites['reebok-club.sk.muntiac.brain.sk'] = 'reebok-club.sk';
#$sites['reebok-club.sk.d7.muntiac.brain.sk'] = 'reebok-club.sk';

//$sites['www.bid.slovaklines.sk'] = 'bid.slovaklines.sk'; // moved to muntiac2 2013. aug.
//$sites['bid.slovaklines.sk.muntiac.brain.sk'] = 'bid.slovaklines.sk';

#$sites['www.marketservice.hu'] = 'marketservice.hu';
#$sites['marketservice.hu.muntiac.brain.sk'] = 'marketservice.hu';

#$sites['www.apolloklub.sk'] = 'apolloklub.sk';
#$sites['apolloklub.sk.muntiac.brain.sk'] = 'apolloklub.sk';

# disabled on 2016-08-03
#$sites['www.prijazerekvetoslavov.sk'] = 'prijazerekvetoslavov.sk';
#$sites['prijazerekvetoslavov.sk.muntiac.brain.sk'] = 'prijazerekvetoslavov.sk';

