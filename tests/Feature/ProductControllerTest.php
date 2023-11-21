<?php
/**
 * Integration tests for ProductController.
 *
 * This class performs integration tests to verify the functionality of the ProductController,
 * specifically focusing on testing the retrieval of bike products.
 *
 * @package Tests\Feature
 */

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ProductControllerTest
 *
 * Defines integration tests for the ProductController's routes and responses.
 * Uses the RefreshDatabase trait to ensure a clean state for each test.
 */
class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests the '/bikes' route for correct response and data.
     *
     * This method tests the '/bikes' route to ensure it returns a successful response
     * and the correct view with the expected data. It verifies that all bike products
     * are correctly retrieved and passed to the view.
     *
     * @return void
     */
    public function testBikesRouteReturnsAllBikeProducts()
    {
        // Arrange: Create bike products in the database.
        Product::create(['category' => 'bike', 'name' => 'Bike1']);
        Product::create(['category' => 'bike', 'name' => 'Bike2']);

        // Act: Make a GET request to the '/bikes' route.
        $response = $this->get('/bikes');

        // Assert: Check response status and view data.
        $response->assertStatus(200);
        $response->assertViewHas('bikes', function($bikes) {
            return count($bikes) == 2 && $bikes->first()->name == 'Bike1';
        });
    }
}
