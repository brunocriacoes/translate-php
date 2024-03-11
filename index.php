<?php

putenv('LC_ALL=pt_BR');
setlocale(LC_ALL, 'pt_BR');

bindtextdomain("messages", __DIR__ ."/locale");

textdomain("messages");

echo _("Have a nice day");
echo "<hr>";
echo _("Have a nice day");
