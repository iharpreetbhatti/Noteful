<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = include(database_path('seeders/data/notes.php'));

        $userIds = User::pluck('id')->toArray();

        foreach ($notes as &$note) {
            $note['user_id'] = $userIds[array_rand($userIds)];
            $note['created_at'] = now();
            $note['updated_at'] = now();
        }
        DB::table('notes')->insert($notes);
    }
}
