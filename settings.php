<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_configcheckbox('block_firephp_active',
            get_string('activatefirephp', 'block_firephp'),
            get_string('configactivatefirephp',
            'block_firephp'), 0));
}
