<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Sentence;

class SentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Sentences
        $sentences = Sentence::all();
        foreach ($sentences as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Sentence::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new sentences
        $sentences = [
            [
                'name' => 'detail',
                'tr' => [
                    'content' => 'DETAY',
                ],
                'en' => [
                    'content' => 'DETAIL',
                ],
            ],
            [
                'name' => 'information-text',
                'tr' => [
                    'content' => '<a href=":link:">Bilgilendirme metni\'ni</a> okudum kabul ediyorum',
                ],
                'en' => [
                    'content' => 'I have read and agree to the terms in the <a href=":link:"><strong>information text.</strong></a>',
                ],
            ],
        ];

        // Create
        foreach ($sentences as $sentence) {
            Sentence::create($sentence);
        }
    }
}
