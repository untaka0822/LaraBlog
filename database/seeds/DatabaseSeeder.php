<?php // database/seeds/DatabaseSeeder.php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;
 
class DatabaseSeeder extends Seeder
{
 
    public function run()  // ①
    {
        Model::unguard();
 
        $this->call('ArticlesTableSeeder');  // ②
 
        Model::reguard();
    }
}
 
class ArticlesTableSeeder extends Seeder  // ③
{
    public function run()
    {
        DB::table('articles')->delete();  // ④
 
        $faker = Faker::create('en_US');  // ⑤
 
        for ($i = 0; $i < 10; $i++) {  // ⑥
            Article::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'published_at' => Carbon::today()
            ]);
        }
    }
 
}