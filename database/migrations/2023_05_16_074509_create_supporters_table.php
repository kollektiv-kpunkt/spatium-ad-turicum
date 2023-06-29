<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->enum("status", ["pending", "active", "inactive"])->default("pending");
            $table->string("email")->unique();
            $table->boolean('optin')->default(false);
            $table->string('source')->nullable();
            $table->json("data")->nullable()->default(json_encode([]));
            $table->dateTime("email_verified_at")->nullable()->default(null);
            $table->string("email_verification_token");
            $table->integer('verification_email_count')->default(0);
            $table->boolean("public")->default(false);
            $table->string('locale', 5)->default(config('app.locale'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supporters');
    }
};
