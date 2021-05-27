<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

require_once __DIR__ . '/../vendor/autoload.php';

$dotEnv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$requiredEnvVars = [];
$dotEnv->required($requiredEnvVars);
$dotEnv->load();

const APP_NAME = 'base-app';
define(
    'APP_ROOT',
    dirname(__DIR__ . '/..') . '/'
);
const LOG_FILE_PATH = APP_ROOT . 'logs/app.log';

function getContainer(): ContainerInterface
{
    static $container;

    if ($container) {
        return $container;
    }

    // In this basic config, wiring cache (for speed increase) is not enabled.
    // See here for how to enable it: http://php-di.org/doc/performances.html
    $containerBuilder = new ContainerBuilder();
    $containerBuilder->addDefinitions(__DIR__ . '/container.php');
    $container = $containerBuilder->build();
    return $container;
}

function get(string $id)
{
    return getContainer()->get($id);
}

function getLogger(): LoggerInterface
{
    return get(LoggerInterface::class);
}
