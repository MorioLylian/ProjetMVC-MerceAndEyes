<?php

namespace Tests\Feature;

use Tests\TestCase;
use OrderStatusesTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
     
     
    public function testCreatingANewOrder()
    {
        
        $this->seed();

        
        $this->seed(OrderStatusesTableSeeder::class);

      
    }
}