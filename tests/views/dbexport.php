<?php

/**
 * PHPPgAdmin6
 */

/**
 * @param Psr\Container\ContainerInterface $container
 */
function dbexportFactory($container)
{
    $do_render = false;

    return new \PHPPgAdmin\Controller\DbexportController($container);
}
