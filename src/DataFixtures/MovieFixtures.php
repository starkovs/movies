<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle('The Shawshank Redemption');
       $movie->setReleaseYear(1994);
       $movie->setDescription('This is a description of the movie');
       $movie->setImagePath('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.rottentomatoes.com%2Fm%2Fshawshank_redemption&psig=AOvVaw2KX6fuM25Ovg7LhsZcsY_J&ust=1693719288521000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLiciJaai4EDFQAAAAAdAAAAABAJ'); 
       $movie->addActor($this->getReference('actor_1'));
         $movie->addActor($this->getReference('actor_2'));
       $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Batman');
        $movie2->setReleaseYear(1994);
        $movie2->setDescription('This is a description of the movie');
        $movie2->setImagePath('https://m.media-amazon.com/images/M/MV5BM2VjODk2OTktYjg5MC00YjY5LWEzMjAtMmFkMjNkMGQyNjM3XkEyXkFqcGdeQXVyMDc2NTEzMw@@._V1_.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
