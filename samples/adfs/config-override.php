<?php

$config['production'] =  false;
$config['theme.header'] = 'Sample IdP';
$config['enable.adfs-idp'] = true;
# We must enable this in the config file, rather than through touching `enable` in filesystem since the module
# is explicitly disabled on the default config.php
$config['module.enable']['exampleauth'] = true;
$config['enable.adfs-idp'] = true;
