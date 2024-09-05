<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // 生成数据集合
        User::factory()->count(13)->create();

        // 处理第一个用户的数据
        $user = (new User)->find(1);
        $user->name = 'Halroszow';
        $user->email = 'sakurakatsuya@outlook.com';
        $user->password = bcrypt('123456789');
        $user->avatar = 'http://localhost:8000/uploads/images/avatars/202409/05/200.jpg';
        $user->save();
    }
}