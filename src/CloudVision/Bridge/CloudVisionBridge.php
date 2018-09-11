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

namespace GuikProd\GCP\CloudVision\Bridge;

use Google\Cloud\Vision\VisionClient;
use GuikProd\GCP\Bridge\CloudVision\Interfaces\CloudVisionBridgeInterface;
use GuikProd\GCP\Bridge\Interfaces\CloudBridgeInterface;
use GuikProd\GCP\Tools\Interfaces\LoaderInterface;

/**
 * Class CloudVisionBridge.
 * 
 * @author Guillaume Loulier <guillaume.loulier@guikprod.com>
 */
final class CloudVisionBridge implements CloudBridgeInterface, CloudVisionBridgeInterface
{
    /**
     * The default name of the credentials file.
     *
     * @var null|string
     */
    private $credentialsFileName = null;

    /**
     * The default folder where is located the credentials file.
     *
     * @var null|string
     */
    private $credentialsFolder = null;

    /**
     * @var LoaderInterface
     */
    private $credentialsLoader;

    /**
     * {@inheritdoc}
     */
    public function __construct(
        string $credentialsFilename,
        string $credentialsFolder,
        LoaderInterface $loader
    ) {
        $this->credentialsFileName = $credentialsFilename;
        $this->credentialsFolder = $credentialsFolder;
        $this->credentialsLoader = $loader;
    }

    /**
     * {@inheritdoc}
     */
    public function getVisionClient(): VisionClient
    {
        $this->credentialsLoader->loadJson($this->credentialsFileName, $this->credentialsFolder);

        return new VisionClient([
            'keyFile' => $this->credentialsLoader->getCredentials()
        ]);
    }
}
