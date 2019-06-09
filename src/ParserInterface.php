<?php
/**
 * Created by PhpStorm.
 * User: Lera
 * Date: 09.06.2019
 * Time: 5:32
 */

namespace artemka\parser;

interface ParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process (string $url, string $tag) : array;
}