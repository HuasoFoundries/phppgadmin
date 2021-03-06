<?php

/**
 * PHPPgAdmin6
 */

/**
 * @param Psr\Container\ContainerInterface $container
 */
function serversFactory($container)
{
    $do_render = false;

    $controller = new \PHPPgAdmin\Controller\ServersController($container);

    if ($do_render) {
        $controller->render();
    }

    return $controller;
}
