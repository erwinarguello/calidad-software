[![Build Status](https://travis-ci.org/Dauun/calidad-software.svg?branch=master)](https://travis-ci.org/Dauun/calidad-software)

Configuración Travis CI
-----
:smiley_cat: Estatus de las pruebas

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
    
Archivo de pruebas
------------
:scream_cat: Scripts de las pruebas

    $consumer = new Dummy();
    $consumer->setNombre('Said');
    $consumer->setApellido('Dawn');
    $result = $consumer->nombreCompleto();
    $this->assertEquals('Said Dawn', $result);

Deploy
------------
:frog: Agregar deployment step

    deploy:
    provider: heroku
    api_key:
        secure: "37545c8f-682a-4e0b-9ece-486753b1ef3c"
    app: calidad-software


Requerimientos
------------

Requiere PHP versión 5.3+ si se usan namespaces.


