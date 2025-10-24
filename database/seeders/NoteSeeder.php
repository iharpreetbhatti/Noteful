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
        // Load notes from a separate data file
        $notes = include(database_path('seeders/data/notes.php'));

        // Get ID of the user created by TestUserSeeder
        $testUserId = User::where('email', 'test@test.com')->value('id');

        // Get all other user IDs
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        foreach ($notes as $index => &$note) {
            if ($index < 2) {
                $note['user_id'] = $testUserId;
            } else {
                $note['user_id'] = $userIds[array_rand($userIds)];
            }
            $note['created_at'] = now();
            $note['updated_at'] = now();
        }
        DB::table('notes')->insert($notes);
    }
}
