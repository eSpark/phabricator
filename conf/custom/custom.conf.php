<?php

return array(

	     // Important! This will put Phabricator into setup mode to help you
             // configure things.
             // 'phabricator.setup' => true,

	     // This will be the base domain for your install, and must be configured.
	     // Use "https://" if you have SSL. See below for some notes.
	     'phabricator.base-uri' => 'http://ph.esparklearning.com/',

	     // Connection information for MySQL.
	     'mysql.host' => 'localhost',
	     'mysql.user' => 'phabricator',
	     'mysql.pass' => 'phabricator',

	     // Basic email domain configuration.
	     'metamta.default-address' => 'noreply@ph.esparklearning.com',
	     'metamta.domain'          => 'ph.esparklearning.com',

	     // NOTE: Check default.conf.php for detailed explanations of all the
	     // configuration options, including these.

	     'phabricator.timezone' => 'America/Chicago',

	     // This directory needs to be world-writeable
	     'storage.local-disk.path' => '/var/phabricator/storage',

	     'log.access.path'             => '/var/phabricator/log',

	     // I installed Pygments using easy_install
	     'pygments.enabled' => true,
	     'syntax.filemap' => array('@\.module$@' => 'php',
				       '@\.inc@' => 'php',
				       '@\.install@' => 'php',
				       '@\.engine@' => 'php',
				       '@\.test@' => 'php',
				       '@\.drush@' => 'php',
			    ),

	     'auth.email-domains' => array('esparklearning.com'),

             // These are automated files in Xcode
             'differential.generated-paths' => array('/.xib$/', // generated graphically in IB
                                                     '/.project.pbxproj$/'), // project metadata
	     
	     // Google OAuth configuration
	     // This project is owned by luke@esparklearning.com
	     'google.auth-enabled' => true,
	     'google.application-id' => '926878497902.apps.googleusercontent.com',
	     'google.application-secret' => '5ezViBm05L6l8hEYqpwzlMvj',
	     'google.registration-enabled' => true,
	     'google.auth-permanent' => false,

             'maniphest.enabled' => false,
             'phabricator.uninstalled-applications' =>
             array('PhabricatorApplicationManiphest' => true,
                   'PhabricatorApplicationOwners' => true,
                   'PhabricatorApplicationFlags' => true,
                   'PhabricatorApplicationDiviner' => true)

) + phabricator_read_config_file('production');

