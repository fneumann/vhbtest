<?php

// must be set for shib_login to work
$_SERVER['HTTP_SHIB_APPLICATION_ID'] = 'vhb';
$_SERVER['Shib-Application-ID'] = 'vhb';
$_SERVER['Shib-Session-ID'] = '_abc1234567890def';
$_SERVER['REDIRECT_Shib_Application_ID'] = 'vhb';

// personal data (mapping is configured in Shibboleth settings of ILIAS
//$_SERVER['eduPersonPrincipalName'] = 'vhbtest@uni-erlangen.de';
$_SERVER['eduPersonPrincipalName'] = '123457X25@vhb.org';
$_SERVER['givenName'] = 'Vhb';
$_SERVER['sn'] = 'Test';
$_SERVER['mail'] = 'noreply@databay.de';

// data for VhbShibAuth plugin
$_SERVER['eduPersonEntitlement'] = implode(';', [
    'urn:mace:vhb.org:entitlement:vhb-access',

    'urn:mace:vhb.org:entitlement:lms:student:uni-erlangen.de:LV_SINGLE',
//    'urn:mace:vhb.org:entitlement:lms:evaluation:uni-erlangen.de:LV_SINGLE',
//    'urn:mace:vhb.org:entitlement:lms:appr:uni-erlangen.de:LV_SINGLE',

//    'urn:mace:vhb.org:entitlement:lms:student:uni-erlangen.de:LV_463_1227_1_67_1',
//    'urn:mace:vhb.org:entitlement:lms:evaluation:uni-erlangen.de:LV_463_1227_1_67_1',
//    'urn:mace:vhb.org:entitlement:lms:appr:uni-erlangen.de:LV_463_1227_1_67_1',
]);

chdir("../../public");
require_once('shib_login.php');