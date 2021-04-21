<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $doctrineTable = $sm->listTableDetails('votes');

            if ( $doctrineTable->hasIndex('votes_student_id_index')) {
                $table->dropIndex('votes_student_id_index');
            }
                $table->index(['student_id']);
            if ( $doctrineTable->hasIndex('votes_subscription_id_index')) {
                $table->dropIndex('votes_subscription_id_index');
            }
                $table->index(['subscription_id']);

            if($doctrineTable->hasIndex('votes_year_index')) {
                $table->dropIndex('votes_year_index');
            }
                $table->index(['year']);
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $doctrineTable = $sm->listTableDetails('subscriptions');

            if($doctrineTable->hasIndex('subscriptions_elected_1nd_index')) {
                $table->dropIndex('subscriptions_elected_1nd_index');
            }
            $table->index(['elected_1nd']);

            if($doctrineTable->hasIndex('subscriptions_elected_2nd_index')) {
                $table->dropIndex('subscriptions_elected_2nd_index');
            }
            $table->index(['elected_2nd']);
        });

        Schema::table('students', function (Blueprint $table) {

            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $doctrineTable = $sm->listTableDetails('students');

            if($doctrineTable->hasIndex('students_registration_index')) {
                $table->dropIndex('students_registration_index');
            }
            $table->index(['registration']);
            if($doctrineTable->hasIndex('students_name_index')) {
                $table->dropIndex('students_name_index');
            }

            $table->index(['name']);
            if($doctrineTable->hasIndex('students_social_name_index')) {
                $table->dropIndex('students_social_name_index');
            }
            $table->index(['social_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
