<?php

namespace Database\Seeders;

use App\Models\userData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usersdata =  [
            ['fullname' => 'Charles Gamboa'],
            ['fullname'=> 'Gene Carlo Sigua'],
            ['fullname'=> 'Steven Villan'],
            ['fullname' => 'Gerome Gomez']
        ];
        
        foreach($usersdata as $keys => $value){
            userData::create($value);
            
        }
        
    }
}
