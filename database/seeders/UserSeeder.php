<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $client = new Client();
            $response = $client->request('GET', env('API_URL') . 'users');

            if ($response->getStatusCode() == 200) {
                $users = json_decode($response->getBody()->getContents(), true);

                foreach ($users as $user) {
                    User::firstOrCreate(
                        ['email' => $user['email']],
                        [
                            'name' => $user['name'], 
                            'password' => bcrypt($user['password']),
                            'avatar' => $user['avatar'],
                            'role' => $user['role'],
                        ]
                    );
                }
            }
        }
    }
}
