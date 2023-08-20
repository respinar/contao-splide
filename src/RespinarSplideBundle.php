<?php

declare(strict_types=1);

/*
 * This file is part of Contao Splide.
 *
 * (c) Hamid Peywasti 2023 <abbaszadeh.h@gmail.com>
 *
 * @license MIT
 */

namespace Respinar\SplideBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RespinarSplideBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}