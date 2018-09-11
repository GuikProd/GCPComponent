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

namespace GuikProd\GCP\CloudVision\Interfaces;

use Google\Cloud\Vision\Image;
use GuikProd\GCP\Bridge\CloudVision\Interfaces\CloudVisionBridgeInterface;

/**
 * Interface CloudVisionAnalyserHelperInterface.
 *
 * @author Guillaume Loulier <guillaume.loulier@guikprod.com>
 */
interface CloudVisionAnalyserHelperInterface
{
    /**
     * CloudVisionAnalyserHelperInterface constructor.
     *
     * @param CloudVisionBridgeInterface $cloudVisionBridgeInterface
     */
    public function __construct(CloudVisionBridgeInterface $cloudVisionBridgeInterface);

    /**
     * Allow to send an image and define the analyse mode.
     *
     * @param string $imagePath      The path to the image.
     * @param string $analyseMode    The mode used by Vision to analyse the image.
     *
     * @return Image                 The object representation of the analyse.
     *
     * @see Image                    Documentation purpose.
     */
    public function analyse(string $imagePath, string $analyseMode): Image;
}
