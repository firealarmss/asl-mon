<?php
$headerConf = [];
$bodyConf = [];
$asl_config = [];
$footerConf = [];
//
// Header options
$headerConf['aslEn'] = true;
$headerConf['piStarEn'] = false;
$headerConf['xlxRefEn'] = false;
$headerConf['p25RefEn'] = false;
$headerConf['ysfRefEn'] = false;
$headerConf['dvsEn'] = false;
$headerConf['m17RefEn'] = false;
//
//  Allstarlink Configuration
$asl_config['nodes'] = ['1998', '1999'];
$asl_config['AMI_PASS'] = 'password';
$asl_config['AMI_USER'] = 'admin';
$asl_config['AMI_HOST'] = '127.0.0.1';
$asl_config['AMI_PASS'] = '5038';
//
// Body page configurations
$bodyConf['version'] = '1.0.0';
