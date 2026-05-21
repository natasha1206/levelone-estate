<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'title' => 'Our Story',
            'content' => '<p>Founded in 2020, EstateFlow emerged from a simple belief: finding your dream home should be an experience of discovery, not a transaction. We curate exceptional properties for discerning clients who understand that a home is more than just square footage—it\'s where life unfolds.</p><p>Our team of dedicated professionals brings decades of combined experience in luxury real estate, design, and client relations. We don\'t just sell properties; we build relationships that last a lifetime.</p>',
            'mission' => 'To redefine luxury real estate by prioritizing client relationships over transactions.',
            'vision' => 'To become India\'s most trusted name in curated luxury living.',
        ]);
    }
}