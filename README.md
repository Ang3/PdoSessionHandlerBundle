PdoSessionHandlerBundle
==============================

[![Build Status](https://travis-ci.org/Ang3/PdoSessionHandlerBundle.svg?branch=master)](https://travis-ci.org/Ang3/PdoSessionHandlerBundle) [![Latest Stable Version](https://poser.pugx.org/ang3/pdo-session-handler-bundle/v/stable)](https://packagist.org/packages/ang3/pdo-session-handler-bundle) [![Latest Unstable Version](https://poser.pugx.org/ang3/pdo-session-handler-bundle/v/unstable)](https://packagist.org/packages/ang3/pdo-session-handler-bundle) [![Total Downloads](https://poser.pugx.org/ang3/pdo-session-handler-bundle/downloads)](https://packagist.org/packages/ang3/pdo-session-handler-bundle)

This bundle helps you in the configuration of a PDO session handler (see [symfony documentation](https://symfony.com/doc/3.4/doctrine/pdo_session_storage.html)).

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require ang3/pdo-session-handler-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
  public function registerBundles()
  {
    $bundles = array(
      // ...
      new Ang3\PdoSessionHandlerBundle\Ang3PdoSessionHandlerBundle(),
    );

    // ...
  }

  // ...
}
```

Do not forget to update your database schema in order to create "sessions" table:

```console
$ php bin/console doctrine:schema:update --dump-sql
$ php bin/console doctrine:schema:update --force
```

Step 3: Configure your app
-------------------------

Update the "handler id" in your configuration file ```config.yml```:

```yaml
# app/config/config.yml
framework:
  # ...
  session:
    handler_id: Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler
```

That's all.