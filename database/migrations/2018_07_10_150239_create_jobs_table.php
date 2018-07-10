<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'jobs';

    /**
     * Run the migrations.
     * @table jobs
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->longText('description_en');
            $table->longText('description_fr')->nullable();
            $table->longText('description_nl')->nullable();
            $table->longText('skills_en');
            $table->longText('skills_fr')->nullable();
            $table->longText('skills_nl')->nullable();
            $table->string('image')->nullable();
            $table->string('location_en');
            $table->string('location_fr')->nullable();
            $table->string('location_nl')->nullable();
            $table->unsignedInteger('categories_id');

            $table->index(["categories_id"], 'fk_jobs_categories_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('categories_id', 'fk_jobs_categories_idx')
                ->references('id')->on('categories')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
