<?php
namespace StandardExceptions\IO;

/**
* Use this exception when an IO operation tries to read the content of
* a file but cannot do so due to filesystem permissions.
*
* @package  Standard-Exceptions
* @author   Mathieu Dumoulin aka CrazyCodr <crazyone@crazycoders.net>
* @license  MIT
*/
class FileNotReadableException extends \RuntimeException
{
    
}