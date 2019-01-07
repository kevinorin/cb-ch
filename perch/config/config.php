<?php

    define('PERCH_LICENSE_KEY', 'P11201-MVU387-UHN539-PQC879-CHJ024');

    define("PERCH_DB_USERNAME", 'celticdbuser');
    define("PERCH_DB_PASSWORD", 'seawynde');
    define("PERCH_DB_SERVER", "celticdb.celtichoney.com");
    define("PERCH_DB_DATABASE", "celticdb");
    define("PERCH_DB_PREFIX", "perch_");
    
    define('PERCH_EMAIL_FROM', 'kirk@objectivesubject.com');
    define('PERCH_EMAIL_FROM_NAME', 'Kirk Pettinga');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>