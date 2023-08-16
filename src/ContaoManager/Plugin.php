<?php

declare(strict_types=1);

/*
 * This file is part of Contao Splide.
 *
 * (c) Hamid Peywasti 2023 <abbaszadeh.h@gmail.com>
 * 
 * @license MIT
 */

namespace Respinar\SplideBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Respinar\SplideBundle\RespinarSplideBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RespinarSplideBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
