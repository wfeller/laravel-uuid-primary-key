<?php

namespace WF\UuidPrimaryKey;

use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

trait HasUuidPrimaryKey
{
    protected static function bootHasUuidPrimaryKey()
    {
        static::creating(function ($model) {
            /** @var \Illuminate\Database\Eloquent\Model|HasUuidPrimaryKey $model */
            $model->setUuidKey(false);
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function setUuidKey($force = false)
    {
        $key = $this->getKey();
        if ($force || ! is_string($key) || ! Uuid::isValid($key)) {
            $this->{$this->getKeyName()} = Str::orderedUuid()->toString();
        }
    }
}
