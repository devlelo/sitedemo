<?php
namespace Tests\Feature;
use Tests\TestCase;
class SmokeTest extends TestCase {
 public function test_homepage_is_available(): void { $this->get('/')->assertOk()->assertSee('GPM CONECTA'); }
 public function test_catalog_is_public(): void { $this->get('/catalogo')->assertOk()->assertSee('Catálogo'); }
}
