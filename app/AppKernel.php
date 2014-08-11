<?php

/**
 * This file is part of the authbucket/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpFoundation\Request;

$app->register(new AuthBucket\OAuth2\Provider\AuthBucketOAuth2ServiceProvider());
$app->register(new AuthBucket\OAuth2\Tests\TestBundle\TestBundleServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\SecurityServiceProvider());
$app->register(new Silex\Provider\SerializerServiceProvider());
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

require __DIR__ . '/config/config_' . $app['env'] . '.php';
require __DIR__ . '/config/routing_' . $app['env'] . '.php';

$app->before(function (Request $request) use ($app) {
    $app['session']->start();
});
