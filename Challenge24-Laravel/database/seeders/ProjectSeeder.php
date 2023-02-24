<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
        [
            'image' => 'https://fastly.picsum.photos/id/6/5000/3333.jpg?hmac=pq9FRpg2xkAQ7J9JTrBtyFcp9-qvlu8ycAi7bUHlL7I',
            'name' => 'Mathew and Johnson',
            'subtitle' => 'Deep reaserch and developement',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/6/5000/3333.jpg?hmac=pq9FRpg2xkAQ7J9JTrBtyFcp9-qvlu8ycAi7bUHlL7I'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/3/5000/3333.jpg?hmac=GDjZ2uNWE3V59PkdDaOzTOuV3tPWWxJSf4fNcxu4S2g',
            'name' => 'Weismann and Fielder',
            'subtitle' => 'Database structures specialists',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/3/5000/3333.jpg?hmac=GDjZ2uNWE3V59PkdDaOzTOuV3tPWWxJSf4fNcxu4S2g'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/24/4855/1803.jpg?hmac=ICVhP1pUXDLXaTkgwDJinSUS59UWalMxf4SOIWb9Ui4',
            'name' => 'Geldenberscher strom',
            'subtitle' => 'Legacy library scientifics',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/24/4855/1803.jpg?hmac=ICVhP1pUXDLXaTkgwDJinSUS59UWalMxf4SOIWb9Ui4'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/36/4179/2790.jpg?hmac=OCuYYm0PkDCMwxWhrtoSefG5UDir4O0XCcR2x-aSPjs',
            'name' => 'Soren & Hendricksen',
            'subtitle' => 'Visual representatives of nature',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/36/4179/2790.jpg?hmac=OCuYYm0PkDCMwxWhrtoSefG5UDir4O0XCcR2x-aSPjs'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/60/1920/1200.jpg?hmac=fAMNjl4E_sG_WNUjdU39Kald5QAHQMh-_-TsIbbeDNI',
            'name' => 'Johan Schwartz',
            'subtitle' => 'Quality e-commerce',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/60/1920/1200.jpg?hmac=fAMNjl4E_sG_WNUjdU39Kald5QAHQMh-_-TsIbbeDNI'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/134/4928/3264.jpg?hmac=IcPmWTNClVqLcr7PpqBrfOAvgmJbqw0Z8jZvmsCrC-c',
            'name' => 'Fetuccini Francisco',
            'subtitle' => 'Building a better future',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/134/4928/3264.jpg?hmac=IcPmWTNClVqLcr7PpqBrfOAvgmJbqw0Z8jZvmsCrC-c'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/181/1920/1189.jpg?hmac=s_EdeBmW8NMdklpios9-zKgZP8bt2_OZ8djbmrPGpYE',
            'name' => 'Jakob Betrih',
            'subtitle' => 'You name it, we build it',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/181/1920/1189.jpg?hmac=s_EdeBmW8NMdklpios9-zKgZP8bt2_OZ8djbmrPGpYE'
        ],
        [
            'image' => 'https://fastly.picsum.photos/id/214/2729/2047.jpg?hmac=sbADnAldkjZ_C8bOEoXFBSHedcFRZYO_GPg3eHwQ5m0',
            'name' => 'Federico Alexandro',
            'subtitle' => 'Remembrance of heritage',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit impedit labore ducimus et deserunt delectus tempora distinctio. Veritatis, porro est.',
            'link' => 'https://fastly.picsum.photos/id/214/2729/2047.jpg?hmac=sbADnAldkjZ_C8bOEoXFBSHedcFRZYO_GPg3eHwQ5m0'
        ]

        ]);
    }
}
