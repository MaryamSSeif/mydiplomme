<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\DataFixtures\AppFixtures;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArticleFixtures extends AppFixtures

{  public function __construct( private readonly SluggerInterface $slugger)
{
    
}

    protected $faker;

    public function loadData(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');
        $articles = Array();
      

        for ($i = 0; $i < 200; $i++) {
            $articles[$i] = new Article();
            $articles[$i]->setTitle($faker->lastName);
            $articles[$i]->setContent($faker->paragraph());
            $articles[$i]->setSlug($faker->uniqid);
            $articles[$i]->setCreatedAt($faker->date_create);
      
            $manager->persist($articles[$i]);
        
        }
    
        
        }
    
    }