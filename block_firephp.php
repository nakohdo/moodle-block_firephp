<?php
// FirePHP block
/* This blocks loads the FirePHP library (http://www.firephp.org).
 * When activated, it logs some global Moodle variables to the Firebug console
 * for easy inspection using FirePHP's powerful Variable Viewer.
 *
 * WARNING:
 * Using FirePHP on production sites can expose sensitive information.
 * You must protect the security of your application by disabeling FirePHP logging on your live site.
 * You can do this by removing the logging statements before you upload your code
 * or by restricting FirePHP logging to authorized users only.
 *
 * For more information see www.firephp.org/HQ/Use.htm.
 *
 * Developer: http://docs.moodle.org/en/User_talk:Frank_Ralf
 */

class block_firephp extends block_base {

  function init() {
    // init Moodle
    $this->title   = get_string('pluginname', 'block_firephp');

    // init FirePHP
    require_once 'FirePHPCore/FirePHP.class.php';
//    if (ob_get_level()== 0){ // only start output buffering if not yet anabled
//    ob_end_flush();
//    ob_end_clean();
    ob_start();
//    }
//    ini_set('output_buffering', 1);
 }

  function get_content() {

    global $CFG, $USER, $SITE, $COURSE, $PAGE;

    if ($this->content !== NULL) {
      return $this->content;
    }

    $this->content = new stdClass;

    $context = get_context_instance(CONTEXT_SYSTEM, $COURSE->id);

    if ((has_capability('block/firephp:viewfirephp', $context))
        AND
        (!empty($CFG->block_firephp_active))) {

      // loading FirePHP object
      $firephp = FirePHP::getInstance(TRUE);

      // setting options (defaults)
      $fp_options = array(
        'maxObjectDepth'      => 10,
        'maxArrayDepth'       => 20,
        'useNativeJsonEncode' => TRUE,
        'includeLineNumbers'  => TRUE);

      $firephp->setOptions($fp_options);

      // error & exception handling
       $firephp->registerErrorHandler();
       $firephp->registerExceptionHandler();

      // dump global Moodle variables to FireBug console
      $firephp->info($CFG, 'CFG: ');
      $firephp->info($USER, 'User: ');
      $firephp->info($SITE, 'Site: ');
      $firephp->info($COURSE, 'Course: ');
      $firephp->info($PAGE, 'Page: ');

      $this->content->text = get_string('activated', 'block_firephp');
    }
    else{
      // deactivate logging
      // $firephp->setEnabled(FALSE); // doesn't seem to work/be needed
      $this->content->text = get_string('deactivated', 'block_firephp');
    }

    // footer
    $this->content->footer = '';
    // empty output buffer
//    ob_end_flush();
    return $this->content;
  }

  function has_config(){
    return TRUE;
  }

  function config_save($data) {
  // default behavior: save all variables as $CFG properties
    foreach ($data as $name => $value) {
      set_config($name, $value);
    }
    return TRUE;
  }
  function instance_allow_multiple() {
    return FALSE;
  }
}
