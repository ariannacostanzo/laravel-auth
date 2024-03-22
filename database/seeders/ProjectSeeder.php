<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $projects = [
        //     [
        //         'title' => 'Spotify',
        //         'slug' => 'spotify',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso Spotify.',
        //         'image' => 'https://play-lh.googleusercontent.com/kDXJ6XA2Cm47lzDCvvu6HNCu0PWmTwZKiY0ldCWrCgXGT3Ms-lbP_WN1v5vknspnLT15=w526-h296-rw',
        //     ],
        //     [
        //         'title' => 'Giallo Booleano',
        //         'slug' => 'giallo-booleano',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso Giallo Zafferano.',
        //         'image' => 'https://www.fastweb.it/var/storage_feeds/CMS/articoli/417/41759733089e3b264e27297d70915fd1/640x360.jpg',
        //     ],
        //     [
        //         'title' => 'Boolflix',
        //         'slug' => 'boolflix',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso Netflix.',
        //         'image' => 'https://www.lucarosati.it/cms/wp-content/uploads/2022/03/homepage-netflix.png',
        //     ],
        //     [
        //         'title' => 'Boolzap',
        //         'slug' => 'boolzap',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso WhatsApp.',
        //         'image' => 'https://cdn-production-opera-website.operacdn.com/staticfiles/assets/images/sections/2023/hero-top/whatsapp/opera__feature--messenger.0f421c7f581d.png',
        //     ],
        //     [
        //         'title' => 'Boolando',
        //         'slug' => 'boolando',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso Zalando.',
        //         'image' => 'https://www.vestilanatura.it/wp-content/uploads/2021/04/zalando-second-hand.jpg',
        //     ],
        //     [
        //         'title' => 'DC Comics',
        //         'slug' => 'dc-comics',
        //         'description' => 'Questo sito si propone come un\'imitazione del famoso DC Comics.',
        //         'image' => 'https://static.dc.com/dc/files/default_images/dc-homepage2.jpg',
        //     ],
        // ];

        // foreach ($projects as $project) {
        //     $new_project = new Project();
        //     $new_project->fill($project);
        //     $new_project->save();
        // }
    }
}
