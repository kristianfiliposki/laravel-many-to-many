<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_types = config("types");

        foreach ($array_types as $type_item) {
            $new_type = new Type();

            // $new_type->language = $type_item["language"];
            // $new_type->platform = $type_item["platform"];
            // $new_type->image = $type_item["image"];
            $new_type->fill($type_item);
            $new_type->save();
        }
    }
}
