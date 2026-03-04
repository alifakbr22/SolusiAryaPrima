<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing menus to avoid duplicates
        \App\Models\Menu::truncate();

        $home = \App\Models\Menu::create(['label' => 'Home', 'url' => '/', 'sort_order' => 1]);
        
        $about = \App\Models\Menu::create(['label' => 'About', 'url' => '/about', 'sort_order' => 2]);
        
        \App\Models\Menu::create([
            'label' => 'Profile Perusahaan', 
            'url' => '/about', 
            'parent_id' => $about->id, 
            'sort_order' => 1, 
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>', 
            'description' => 'Visi, misi, dan sejarah perjalanan kami sejak 1988.'
        ]);
        
        \App\Models\Menu::create([
            'label' => 'Certification', 
            'url' => '/certification', 
            'parent_id' => $about->id, 
            'sort_order' => 2, 
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 
            'description' => 'Kepercayaan dan standar kualitas operasional kami.'
        ]);

        \App\Models\Menu::create(['label' => 'Services', 'url' => '/services', 'sort_order' => 3]);
        \App\Models\Menu::create(['label' => 'Portfolio', 'url' => '/portfolio', 'sort_order' => 4]);
        \App\Models\Menu::create(['label' => 'Cabang', 'url' => '/cabang', 'sort_order' => 5]);
        \App\Models\Menu::create(['label' => 'Contact', 'url' => '/kontak', 'sort_order' => 6]);
    }
}
