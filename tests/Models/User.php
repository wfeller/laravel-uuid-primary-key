<?php

namespace WF\UuidPrimaryKey\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use WF\UuidPrimaryKey\HasUuidPrimaryKey;

class User extends Model
{
    use HasUuidPrimaryKey;
}
