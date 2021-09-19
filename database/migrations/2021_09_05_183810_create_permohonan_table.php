<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('icNo');
            $table->string('name');
            $table->string('phoneNo');
            $table->string('schoolName');
            $table->string('examType');
            $table->text('subject1');
            $table->string('grade1');
            $table->text('subject2');
            $table->string('grade2');
            $table->text('subject3');
            $table->string('grade3');
            $table->text('subject4');
            $table->string('grade4');
            $table->text('subject5');
            $table->string('grade5');
            $table->text('subject6');
            $table->string('grade6');
            $table->text('subject7');
            $table->string('grade7');
            $table->text('subject8');
            $table->string('grade8');
            $table->text('subject9');
            $table->string('grade9');
            $table->text('subject10');
            $table->string('grade10');
            $table->text('subject11');
            $table->string('grade11');
            $table->text('subject12');
            $table->string('grade12');
            $table->text('subject13');
            $table->string('grade13');
            $table->timestamp('dateSubmit');
            $table->string('status');
            $table->string('dikemaskiniOleh');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}
