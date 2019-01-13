<?php

namespace WF\UuidPrimaryKey\Tests\Unit;

use Ramsey\Uuid\Uuid;
use WF\UuidPrimaryKey\Tests\Models\User;
use WF\UuidPrimaryKey\Tests\TestCase;

class HasUuidPrimaryKeyTest extends TestCase
{
    /** @test */
    public function adds_uuid_key_while_creating_models()
    {
        $user = User::query()->create();
        $this->assertTrue(Uuid::isValid($user->getKey()));
    }

    /** @test */
    public function overrides_the_models_key_if_it_isnt_a_uuid()
    {
        $user = new User;
        $user->{$user->getKeyName()} = 1;
        $user->save();
        $this->assertNotEquals(1, $user->getKey());
        $this->assertTrue(Uuid::isValid($user->getKey()));
    }

    /** @test */
    public function it_doesnt_update_the_models_key_if_already_a_valid_uuid()
    {
        $user = new User;
        $user->{$user->getKeyName()} = '41f2a3b8-1727-11e9-ab14-d663bd873d93';
        $user->save();
        $this->assertEquals('41f2a3b8-1727-11e9-ab14-d663bd873d93', $user->getKey());
        $this->assertTrue(Uuid::isValid($user->getKey()));
    }
}
