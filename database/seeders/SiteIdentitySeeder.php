<?php

namespace Database\Seeders;

use App\Models\SiteIdentity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteIdentity::create([
            'village_name' => 'Desa Lumbir',
            'phone_number' => '+6283844410460',
            'wa_group_url' => 'https://www.whatsapp.com/',
            'officer_wa_group_url' => 'https://www.whatsapp.com/',
        ]);
    }
}
