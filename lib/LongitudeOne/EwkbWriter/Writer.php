<?php
/**
 * This file is part of the ewkb-writer project.
 *
 * PHP 8.1 | 8.2 | 8.3
 *
 * Copyright Alexandre Tranchant <alexandre.tranchant@gmail.com> 2024
 * Copyright Longitude One 2024
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

declare(strict_types=1);

namespace LongitudeOne\EwkbWriter;

use LongitudeOne\EwkbWriter\Adapter\AdapterInterface;
use LongitudeOne\Spatial\PHP\Types\SpatialInterface;

/**
 * Writer class.
 * This class is the main class of the library.
 */
class Writer implements WriterInterface
{
    /**
     * Writer constructor.
     *
     * @param AdapterInterface $adapter The converter
     */
    public function __construct(private readonly AdapterInterface $adapter)
    {
    }

    /**
     * Convert a spatial interface to a format specified by the internal adapter.
     *
     * @param SpatialInterface $spatial The spatial interface to convert
     *
     * @return string a binary string representing the spatial interface in the format specified by the internal adapter
     */
    public function convert(SpatialInterface $spatial): string
    {
        return $this->adapter->convert($spatial);
    }
}