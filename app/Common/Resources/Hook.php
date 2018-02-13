<?php

namespace App\Common\Resources;

use function call_user_func_array;
use ErrorException;

/**
 * Trait Hook
 * @package App\Common\Resources
 */
trait Hook
{
    /**
     * @param array $options
     * @return bool
     * @throws ErrorException
     */
    public function save(array $options = [])
    {
        $this->trigger('beforeSave', $options);

        /** @noinspection PhpUndefinedClassInspection */
        $saved = parent::save($options);

        $this->trigger('afterSave', $options);

        return $saved;
    }

    /**
     * @param string $hook
     * @param array $options
     * @throws ErrorException
     */
    private function trigger($hook, $options)
    {
        if (method_exists($this, $hook)) {
            $before = call_user_func_array([$this, $hook], $options);
            if ($before === false) {
                throw new ErrorException("Fail to resolve event `{$hook}`");
            }
        }
    }
}
