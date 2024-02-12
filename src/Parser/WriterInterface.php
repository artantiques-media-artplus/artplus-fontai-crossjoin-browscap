<?php
declare(strict_types=1);

namespace Crossjoin\Browscap\Parser;

/**
 * Interface WriterInterface
 *
 * @package Crossjoin\Browscap\Parser
 * @author Christoph Ziegenberg <ziegenberg@crossjoin.com>
 * @link https://github.com/crossjoin/browscap
 */
interface WriterInterface
{
    /**
     * @return WriterInterface
     */
    public function generate() : WriterInterface;
}
