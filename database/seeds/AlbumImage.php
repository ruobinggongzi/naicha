<?php

use think\migration\Seeder;

class AlbumImage extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $this->table('album_image')->insert([
            ['id' => 1, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/f2efb0888bef8fd157f2f1c8755e6f80.png'],
            ['id' => 2, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/953cfabd3bf5c3a482bbe9ac66c8fa21.jpg'],
            ['id' => 3, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/b87144fdb530687b9558d921e83d48ab.jpg'],
            ['id' => 4, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/670b2f18751fd29970efe26398391274.png'],
            ['id' => 5, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/a0e3ce31f804d56b14271a16dcbdc10b.png'],
            ['id' => 6, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/6bbf72a71c1bcf6e443d14fefedd103f.jpg'],
            ['id' => 7, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/58bfad062b532a1d3c42099f819068cb.png'],
            ['id' => 8, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/9aeaf37dc32d926285f2fc3427de02df.jpg'],
            ['id' => 9, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/0a1e8b506b4bbe1a73f16d70b2eece7e.jpg'],
            ['id' => 10, 'album_id' => 2, 'admin_user_id' => 1, 'path' => '2019/05/15/aa69a3bcffcc52b0e365ca65243ec835.jpg'],

        ])->save();
    }
}