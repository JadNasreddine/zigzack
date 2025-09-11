<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Actor;
use App\Models\Category;
use App\Models\Director;
use App\Models\Movie;
use App\Models\role;
use App\Models\User;



class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zig:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


//     $actor = new Actor();
// $actor->name = "Leonardo DiCaprio";
// $actor->dob = "1974-11-11";
// $actor->save();

// $actor = new Actor();
// $actor->name = "Scarlett Johansson";
// $actor->dob = "1984-11-22";
// $actor->save();

// $actor = new Actor();
// $actor->name = "Brad Pitt";
// $actor->dob = "1963-12-18";
// $actor->save();

// $actor = new Actor();
// $actor->name = "Angelina Jolie";
// $actor->dob = "1975-06-04";
// $actor->save();

// $actor = new Actor();
// $actor->name = "Johnny Depp";
// $actor->dob = "1963-06-09";
// $actor->save();


// $category = new Category();
// $category->name = "Action";
// $category->save();

// $category = new Category();
// $category->name = "Comedy";
// $category->save();

// $category = new Category();
// $category->name = "Drama";
// $category->save();

// $category = new Category();
// $category->name = "Horror";
// $category->save();

// $category = new Category();
// $category->name = "Sci-Fi";
// $category->save();


// $director = new Director();
// $director->name = "Christopher Nolan";
// $director->dob = "1970-07-30";
// $director->save();

// $director = new Director();
// $director->name = "Steven Spielberg";
// $director->dob = "1946-12-18";
// $director->save();

// $director = new Director();
// $director->name = "Quentin Tarantino";
// $director->dob = "1963-03-27";
// $director->save();

// $director = new Director();
// $director->name = "Martin Scorsese";
// $director->dob = "1942-11-17";
// $director->save();

// $director = new Director();
// $director->name = "James Cameron";
// $director->dob = "1954-08-16";
// $director->save();


// $movie = new Movie();
// $movie->title = "Inception";
// $movie->description = "A thief steals corporate secrets through dream-sharing technology.";
// $movie->release_date = "2010-07-16";
// $movie->poster = "inception.jpg";
// $movie->save();

// $movie = new Movie();
// $movie->title = "Jurassic Park";
// $movie->description = "Dinosaurs escape in a theme park due to a power failure.";
// $movie->release_date = "1993-06-11";
// $movie->poster = "jurassic_park.jpg";
// $movie->save();

// $movie = new Movie();
// $movie->title = "Pulp Fiction";
// $movie->description = "Crime stories interwoven with dark humor and violence.";
// $movie->release_date = "1994-10-14";
// $movie->poster = "pulp_fiction.jpg";
// $movie->save();

// $movie = new Movie();
// $movie->title = "Titanic";
// $movie->description = "A love story aboard the doomed ship.";
// $movie->release_date = "1997-12-19";
// $movie->poster = "titanic.jpg";
// $movie->save();

// $movie = new Movie();
// $movie->title = "The Shining";
// $movie->description = "A family heads to an isolated hotel for the winter.";
// $movie->release_date = "1980-05-23";
// $movie->poster = "the_shining.jpg";
// $movie->save();


// $role = new Role();
// $role->name = "Admin";
// $role->save();

// $role = new Role();
// $role->name = "User";
// $role->save();

// $role = new Role();
// $role->name = "Editor";
// $role->save();

// $role = new Role();
// $role->name = "Moderator";
// $role->save();

// $role = new Role();
// $role->name = "Guest";
// $role->save();


// $user = new User();
// $user->name = "Jad Nasreddine";
// $user->email = "jad@example.com";
// $user->password = bcrypt("secret123");
// $user->role_id = 1; // Admin
// $user->save();

// $user = new User();
// $user->name = "Alice Johnson";
// $user->email = "alice@example.com";
// $user->password = bcrypt("password");
// $user->role_id = 2; // User
// $user->save();

// $user = new User();
// $user->name = "Bob Smith";
// $user->email = "bob@example.com";
// $user->password = bcrypt("123456");
// $user->role_id = 2; // User
// $user->save();

// $user = new User();
// $user->name = "Charlie Brown";
// $user->email = "charlie@example.com";
// $user->password = bcrypt("pass123");
// $user->role_id = 3; // Editor
// $user->save();

// $user = new User();
// $user->name = "Diana Prince";
// $user->email = "diana@example.com";
// $user->password = bcrypt("wonderwoman");
// $user->role_id = 1; // Admin
// $user->save();

// Role::firstOrCreate(['name' => 'Admin']);
// Role::firstOrCreate(['name' => 'User']);
// Role::firstOrCreate(['name' => 'Editor']);
// Role::firstOrCreate(['name' => 'Moderator']);
// Role::firstOrCreate(['name' => 'Guest']);

// $movies = Movie::all();
// $actors = Actor::all();

// $movies[0]->actors()->sync([$actors[0]->id, $actors[1]->id]); // Movie 1
// $movies[1]->actors()->sync([$actors[2]->id, $actors[3]->id]); // Movie 2
// $movies[2]->actors()->sync([$actors[1]->id, $actors[4]->id]); // Movie 3
// $movies[3]->actors()->sync([$actors[0]->id, $actors[3]->id]); // Movie 4
// $movies[4]->actors()->sync([$actors[2]->id]);  


// $movies = Movie::all();
// $categories = Category::all();


// $movies[0]->categories()->sync([$categories[0]->id]);         // Movie 1 -> Action
// $movies[1]->categories()->sync([$categories[1]->id]);         // Movie 2 -> Comedy
// $movies[2]->categories()->sync([$categories[2]->id, $categories[0]->id]); // Movie 3 -> Drama + Action
// $movies[3]->categories()->sync([$categories[3]->id]);         // Movie 4 -> Horror
// $movies[4]->categories()->sync([$categories[4]->id, $categories[1]->id]); // Movie 5 -> Sci-Fi + Comedy


// $inception = Movie::where('title', 'Inception')->first();
// $nolan = Director::where('name', 'Christopher Nolan')->first();
// $inception->director()->associate($nolan);
// $inception->save();

// $jurassic = Movie::where('title', 'Jurassic Park')->first();
// $spielberg = Director::where('name', 'Steven Spielberg')->first();
// $jurassic->director()->associate($spielberg);
// $jurassic->save();

// $pulpFiction = Movie::where('title', 'Pulp Fiction')->first();
// $tarantino = Director::where('name', 'Quentin Tarantino')->first();
// $pulpFiction->director()->associate($tarantino);
// $pulpFiction->save();

// $titanic = Movie::where('title', 'Titanic')->first();
// $cameron = Director::where('name', 'James Cameron')->first();
// $titanic->director()->associate($cameron);
// $titanic->save();

// $shining = Movie::where('title', 'The Shining')->first();
// $kubrick = Director::where('name', 'Stanley Kubrick')->first();
// $shining->director()->associate($kubrick);
// $shining->save();
// $movies = Movie::all();
// $directors = Director::all();

// $movies[0]->directors()->sync([$directors[0]->id, $directors[1]->id]);
// $movies[1]->directors()->sync([$directors[2]->id]);
// $movies[2]->directors()->sync([$directors[3]->id]);
// $movies[3]->directors()->sync([$directors[4]->id]);
// $movies[4]->directors()->sync([$directors[0]->id, $directors[2]->id]);



    }
}
