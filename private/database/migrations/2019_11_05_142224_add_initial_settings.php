<?php

use Illuminate\Database\Migrations\Migration;

class AddInitialSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        setting()->set('title_tr', 'Naret');
        setting()->set('meta_description_tr', 'Naret');

        setting()->set('title_en', 'Naret');
        setting()->set('meta_description_en', 'Naret');

        setting()->set('social_facebook', 'http://facebook.com');
        setting()->set('social_twitter', 'http://twitter.com');
        setting()->set('social_instagram', 'http://instagram.com');
        setting()->set('social_youtube', 'http://youtube.com');

        setting()->set('email', 'bilgi@naret.com.tr');

        setting()->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
