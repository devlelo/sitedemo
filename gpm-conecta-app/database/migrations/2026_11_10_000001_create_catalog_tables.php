<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void {
 Schema::create('categories',function(Blueprint $t){$t->id();$t->string('name');$t->string('slug')->unique();$t->string('code',30)->unique();$t->text('description')->nullable();$t->boolean('is_active')->default(true);$t->unsignedInteger('sort_order')->default(0);$t->timestamps();});
 Schema::create('products',function(Blueprint $t){$t->id();$t->foreignId('category_id')->constrained()->restrictOnDelete();$t->string('reference',80)->unique();$t->string('name');$t->string('slug')->unique();$t->string('summary',500)->nullable();$t->text('description')->nullable();$t->json('specifications')->nullable();$t->json('keywords')->nullable();$t->string('image_path')->nullable();$t->boolean('is_published')->default(false)->index();$t->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();$t->timestamps();});
 } public function down():void {Schema::dropIfExists('products');Schema::dropIfExists('categories');}};
