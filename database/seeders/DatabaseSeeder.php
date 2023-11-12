<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $menu1 =  Menu::create([
            'name' => 'Dashboard',
            'url' => '/dashboard',
            'is_active' => 1,
        ]);

        $menuSubmenu =  Menu::create([
            'name' => 'Product',
            'url' => '/product',
            'is_active' => 1,
        ]);

        SubMenu::create([
            'name' => 'Product Reject',
            'url' => '/product/return',
            'is_active' => 1,
            'sortorder' => 1,
            'menu_id' => $menuSubmenu->id,
        ]);
        SubMenu::create([
            'name' => 'Product Accept',
            'url' => '/product/accept',
            'is_active' => 1,
            'sortorder' => 2,
            'menu_id' => $menuSubmenu->id,
        ]);

        SubMenu::create([
            'name' => 'Product Fail',
            'url' => '/product/fail',
            'is_active' => 1,
            'sortorder' => 3,
            'menu_id' => $menuSubmenu->id,
        ]);
    }
}
