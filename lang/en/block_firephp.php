<?php
// English language file for block_firephp
$string['pluginname']     = 'FirePHP';
$string['activated']      = '<p style="background-color:yellow; color:red;">FirePHP is activated!</p>Ensure your Firebug Net AND Console panels are enabled.';
$string['deactivated']    = '<span style="color:gray;">FirePHP is deactivated.</span>';
$string['activatefirephp'] = 'Activate FirePHP';
$string['configactivatefirephp'] = <<<EOT
<h2 style="color:red;">WARNING!</h2>
<p>Using FirePHP on production sites can expose sensitive information.
You must protect the security of your application by disabeling FirePHP
logging on your live site. You can do this by removing the logging statements
before you upload your code or by restricting FirePHP logging to authorized users only.</p>

<p>Ensure your Firebug Net AND Console panels are enabled.</p>

<p>For more information see <a href="http://www.firephp.org/HQ/Use.htm" target="_blank">www.firephp.org/HQ/Use.htm</a>.</p>
EOT;
