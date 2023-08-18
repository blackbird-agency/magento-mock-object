<?php

namespace Blackbird\MagentoMockObject\Api;

interface DataObjectInterface
{
    public function addData(array $arr);
    public function setData($key, $value = null);
    public function unsetData($key = null);
    public function getData($key = '', $index = null);
    public function getDataByPath($path);
    public function getDataByKey($key);
    public function setDataUsingMethod($key, $args = []);
    public function getDataUsingMethod($key, $args = null);
    public function hasData($key = '');
    public function toArray(array $keys = []);
    public function convertToArray(array $keys = []);
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true);
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true);
    public function toJson(array $keys = []);
    public function convertToJson(array $keys = []);
    public function toString($format = '');
    public function isEmpty();
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"');
    public function debug($data = null, &$objects = []);
}
