<?php

use SilverStripe\Core\Environment;
use SilverStripe\FullTextSearch\Solr\Solr;
use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);

Solr::configure_server(array(
    'host' => Environment::getEnv('SOLR_SERVER') ?: 'solr',
    'port' => Environment::getEnv('SOLR_PORT') ?: '8983',
    'path' => Environment::getEnv('SOLR_PATH') ?: '/solr',
    'version' => Environment::getEnv('SOLR_VERSION') ?: 4,
    'indexstore' => array(
        'mode' => Environment::getEnv('SOLR_MODE') ?: 'file',
        'auth' => Environment::getEnv('SOLR_AUTH') ?: null,
        'path' => Environment::getEnv('SOLR_INDEXSTORE_PATH') ?: BASE_PATH.'/.solr',
        'remotepath' => Environment::getEnv('SOLR_REMOTE_PATH') ?: null,
    )
));
