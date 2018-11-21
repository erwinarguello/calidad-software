[![Build Status](https://travis-ci.org/Dauun/calidad-software.svg?branch=master)](https://travis-ci.org/Dauun/calidad-software)

Scripts
-----

    [![Build Status](https://travis-ci.org/Dauun/calidad-software.svg?branch=master)](https://travis-ci.org/Dauun/calidad-software)

.travis.yml

    language: php
    sudo: required
    php:
    - 5.6
    - 5.5
    - 5.4
    before_script: composer install
    script: phpunit --configuration tests/phpunit.xml
    
Requerimientos
------------

Requiere PHP versión 5.3+ si se usan namespaces.
