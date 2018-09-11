<?php

declare(strict_types=1);

/*
 * This file is part of the GCP-Components project.
 *
 * (c) Guillaume Loulier <guillaume.loulier@guikprod.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuikProd\GCP\Bridge\Interfaces;

use GuikProd\GCP\Tools\Interfaces\LoaderInterface;

/**
 * Interface CloudBridgeInterface.
 *
 * @author Guillaume Loulier <guillaume.loulier@guikprod.com>
 */
interface CloudBridgeInterface
{
    /**
     * CloudBridgeInterface constructor.
     *
     * @param string $credentialsFilename
     * @param string $credentialsFolder
     * @param LoaderInterface $loader
     */
    public function __construct(
        string $credentialsFilename,
        string $credentialsFolder,
        LoaderInterface $loader
    );
}
