<?php

namespace App\Common\Resources;

use ErrorException;

/**
 * Trait File
 * @package App\Common\Resources
 */
trait File
{
    /**
     * @var array
     */
    protected $files = [];

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws ErrorException
     */
    public function getFile($name)
    {
        if (!isset($this->files[$name])) {
            throw new ErrorException("There is no file `{$name}`");
        }
        return $this->files[$name];
    }

    /**
     * @param $name
     * @return mixed
     * @throws ErrorException
     */
    public function getFilePath($name)
    {
        $file = $this->getFile($name);
        if (!isset($file['path'])) {
            throw new ErrorException("There file `{$name}` does not have a valid 'path'");
        }
        return $file['path'];
    }

    /**
     * @param $name
     * @return array
     * @throws ErrorException
     */
    public function getFileExtensions($name)
    {
        $file = $this->getFile($name);
        if (!isset($file['extensions'])) {
            return ['*'];
        }
        return str_to_array('|', strtolower($file['extensions']));
    }

    /**
     * @param $name
     * @return mixed
     * @throws ErrorException
     */
    public function getFileQueue($name)
    {
        $file = $this->getFile($name);
        if (!isset($file['queue'])) {
            return false;
        }
        return $file['queue'];
    }
}
