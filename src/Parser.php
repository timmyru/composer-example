<?php
/**
 * Created by PhpStorm.
 * User: Lera
 * Date: 09.06.2019
 * Time: 5:49
 */

namespace artemka\parser;

class Parser implements ParserInterface
{
 public function process(string $url, string $tag)
 {
     return [
       'just',
       'do',
       'it',
     ];
 }
}