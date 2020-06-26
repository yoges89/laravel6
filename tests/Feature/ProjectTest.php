<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Test class for the first time.
 */
class ProjectTest extends TestCase {

  use WithFaker, RefreshDatabase;

  /**
   * First test method to test the laravel app.
   *
   * @test
   */
  public function a_user_can_create_project() {
    $attributes = [
      'title' => $this->faker->sentence,
      'description' => $this->faker->paragraph,
    ];

    $this->post('/projects', $attributes);

    $this->assertDatabaseHas('projects', $attributes);

  }

}
