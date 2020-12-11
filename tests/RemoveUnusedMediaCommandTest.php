<?php

use PHPUnit\Framework\TestCase;
use FIREGENTO\Magento\Command\Eav\RemoveUnusedMediaCommand;

class RemoveUnusedMediaCommantTest extends TestCase
{
    public function setUp(): void
    {
        $this->command = new RemoveUnusedMediaCommand();
    }

    /**
     * @test
     */
    public function it_returns_true_on_autogenerated_catalog_product_image_paths()
    {
        $this->assertTrue($this->command->isCatalogProductImage('/A/B/ABCDEF.jpg'));
        $this->assertTrue($this->command->isCatalogProductImage('/i/m/image.jpg'));
        $this->assertTrue($this->command->isCatalogProductImage('/1/6/162387_1.jpg'));
    }

    /**
     * @test
     */
    public function it_returns_false_on_cache_and_custom_directories()
    {
        $this->assertFalse($this->command->isCatalogProductImage('/cache/i/m/image.jpg'));
        $this->assertFalse($this->command->isCatalogProductImage('/placeholder/image.jpg'));
        $this->assertFalse($this->command->isCatalogProductImage('/amshopby/resized/image.jpg'));
    }
}
