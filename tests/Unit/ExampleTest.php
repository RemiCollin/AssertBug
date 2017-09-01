<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
	use DatabaseMigrations;
	
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    /** @test */
    public function assert_has_test()
    {
        $db = app("db");
        $data = [
        	[
        		"a" => "b", 
        	],
        	[
        		"c" => "d",
        	],
        ];
        $db->table('tests')->insert($data);
        $db->table('tests')->get()->dd();

    }
}
