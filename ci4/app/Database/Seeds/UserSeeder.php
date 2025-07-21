<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
public function run()
{
$model = model('UserModel');
$model->insert([
'username' => 'bank',
'useremail' => 'bank@gmail.com',
'userpassword' => password_hash('bank123', PASSWORD_DEFAULT),
]);
}
}