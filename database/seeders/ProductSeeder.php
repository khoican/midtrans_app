<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'UI/UX Design',
                'image' => 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/64664e9cd07202af8bcdc5e4_5757453-p-1600.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.',
                'price' => 1000,
            ],
            [
                'name' => 'Web Development',
                'image' => 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/64664e9cd07202af8bcdc5e4_5757453-p-1600.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.',
                'price' => 1000,
            ],
            [
                'name' => 'Data Engineer',
                'image' => 'https://assets-global.website-files.com/6100d0111a4ed76bc1b9fd54/619b6f6ceb74c1759100beb5_pexels-mikael-blomkvist-6476254%20(1)-p-1600.jpeg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto officiis commodi voluptatem dolores sunt ipsa praesentium voluptas natus tempora libero quibusdam ea obcaecati quis quos corrupti doloribus accusamus ipsam, cupiditate dolorem in laboriosam! Sit temporibus quibusdam assumenda reiciendis dicta. Corporis minima cumque saepe ad nihil rerum repellat voluptates voluptate, nesciunt corrupti. Nostrum, nulla, tempore vitae soluta cupiditate cumque debitis voluptatem nesciunt similique fugit inventore reprehenderit temporibus possimus quia dolores et sequi porro corrupti maxime sit? Molestiae amet ipsam exercitationem a distinctio et praesentium animi aspernatur quidem, sint consequuntur? Omnis aut suscipit numquam ea inventore quasi iure quisquam fugit sunt.',
                'price' => 1000,
            ],
        ]);
    }
}