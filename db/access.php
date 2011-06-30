<?php
/* 
 * Capabilities for FirePHP block.
 * (http://docs.moodle.org/en/Development:Roles#Programming_Interface)
 */
$block_firephp_capabilities = array(

  'block/firephp:viewfirephp' => array(
    'captype'       => 'read',
    'contextlevel'  => CONTEXT_SYSTEM,
    'legacy'        => array(
      'guest'           => CAP_PREVENT,
      'student'         => CAP_PREVENT,
      'teacher'         => CAP_PREVENT,
      'editingteacher'  => CAP_PREVENT,
      'coursecreator'   => CAP_PREVENT,
      'admin'           => CAP_ALLOW,
      )
    ),
  );
?>
