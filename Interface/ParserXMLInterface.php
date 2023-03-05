<?php

interface ParserXMLInterface
{
    /**
     * @param string $xml
     * @return array
     */
    public function parse(string $xml): array;
}