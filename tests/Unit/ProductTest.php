<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Unit Test for Product Model.
 *
 * Tests the functionalities of the Product model, particularly focusing on database interactions.
 * This test ensures that the Product model can correctly store and retrieve data from the database.
 *
 * @category Unit Test
 * @package Tests\Unit
 */
class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests if the application can retrieve products belonging to the 'bike' category.
     *
     * The test creates a product with the category 'bike' and verifies that this product
     * can be retrieved correctly using the Product model's query scope.
     *
     * @return void
     */
    public function testCanRetrieveBikeCategoryProducts()
    {
        // Arrange: Create a product with 'bike' category
        Product::create([
            'category' => 'bike',
            'name' => 'Test Bike',
            'price' => 100.00
        ]);

        // Act: Retrieve products of 'bike' category
        $products = Product::where('category', 'bike')->get();

        // Assert: Check if the retrieved products match the expected criteria
        $this->assertCount(1, $products);
        $this->assertEquals('Test Bike', $products->first()->name);
    }
}
