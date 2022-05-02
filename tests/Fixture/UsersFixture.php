<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'user_id' => 1,
                'user_name' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
