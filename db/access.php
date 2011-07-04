<?php
/* 
 * Capabilities for FirePHP block.
 * (http://docs.moodle.org/en/Development:Roles#Programming_Interface)
 */
$capabilities = array(

  'block/firephp:viewfirephp' => array(
    'captype'       => 'read',
    'contextlevel'  => CONTEXT_SYSTEM,
    'archetypes'        => array(
      'guest'           => CAP_PREVENT,
      'student'         => CAP_PREVENT,
      'teacher'         => CAP_PREVENT,
      'editingteacher'  => CAP_PREVENT,
      'manager'         => CAP_PREVENT
      )
    ),
  );
