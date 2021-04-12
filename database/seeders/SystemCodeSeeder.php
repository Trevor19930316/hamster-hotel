<?php

namespace Database\Seeders;

use App\Models\Hamster;
use App\Models\Owner;
use App\Models\SystemCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems_codes')->truncate();

        $sort = 0;
        $data = [
            [
                'belong_code' => null,
                'code' => 'is_useful',
                'value' => '有效狀態',
                'description' => null,
                'sort' => null,
                'is_useful' => 1,
                'updated_by' => config('system.updated_by'),
            ],
            [
                'belong_code' => 'is_useful',
                'code' => '0',
                'value' => '無效',
                'description' => null,
                'sort' => null,
                'is_useful' => 1,
                'updated_by' => config('system.updated_by'),
            ],
            [
                'belong_code' => 'is_useful',
                'code' => '1',
                'value' => '有效',
                'description' => null,
                'sort' => null,
                'is_useful' => 1,
                'updated_by' => config('system.updated_by'),
            ],
        ];

        foreach ($data as $arr) {

            $sort++;
            $arr['sort'] = $sort;
            SystemCode::create($arr);
        }
    }
}
