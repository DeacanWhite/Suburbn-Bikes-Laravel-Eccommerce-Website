<?php

/**
 * Functional Test for Add to Cart Feature
 *
 * This class tests the functionality of adding a product to the shopping cart.
 * It involves creating a mock product, adding it to the cart, and then asserting
 * the presence and correctness of the product in the cart.
 *
 * @package Tests\Feature
 */

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class AddToCartTest
 *
 * @package Tests\Feature
 * @description Tests adding a product to the shopping cart
 */
class AddToCartTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests adding a product to the shopping cart.
     *
     * The test first creates a mock product with specific attributes.
     * It then simulates adding this product to the cart and checks if
     * the product is successfully added to the session cart.
     * Assertions check the cart's content for the correct product data.
     *
     * @return void
     */
    public function testAddProductToCart()
    {
        // Arrange: Create a mock product
        $product = Product::create([
            'name' => 'Test Product',
            'price' => 50.00,
            'category' => 'test-category'
        ]);

        // Act: Add the product to the cart
        $response = $this->get('/add-to-cart/'.$product->prodNo);

        // Assert: Check if the product is in the cart with correct details
        $cart = session('cart');
        $this->assertIsArray($cart);
        $this->assertArrayHasKey($product->prodNo, $cart);
        $this->assertEquals('Test Product', $cart[$product->prodNo]['name']);
    }
}
