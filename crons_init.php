<?php
/**
 * Created by PhpStorm.
 * User: abdeldouichi
 * Date: 01/10/18
 * Time: 14:41
 */
require 'vendor/autoload.php';
require 'vendor_override/torann-override/json-ld/src/Context.php';


use App\Helper\PageMetaParam;
use Karriere\JsonDecoder\Bindings\FieldBinding;
use Karriere\JsonDecoder\ClassBindings;
use Karriere\JsonDecoder\JsonDecoder;
use Karriere\JsonDecoder\Transformer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use \JsonLd\Context;

class PersonTransformer implements Transformer
{
    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('address', 'address', PageMetaParam::class));
    }

    public function transforms()
    {
        return PageMetaParam::class;
    }
}


$jsonDecoder = new JsonDecoder();

$page_param = new PageMetaParam();
$page_param->setTitle("Rénovation Appartement : Estimation Prix Travaux &amp; Guide complet | Helloartisan");
$page_param->setDescription("Vous souhaitez rénover votre appartement, notre guide vous expliquera tout ce qu’il faut savoir :  prix au m² des travaux, planification, matériaux, délais de rénovation et sélection des artisans.");
$page_param->setImagePage("favicon.png");
$page_param->setTwitterAcount("@HelloArtisan");
$page_param->setUri("/articles/renovation-appartement");
$page_param->setIsPaginator(false);
$page_param->setUrlPrev("");
$page_param->setUrlNext("");
$page_param->setIsCanonical(true);
$page_param->setIsNoindex(false);


echo " \n data lenght" . $page_param->setSchemaScript(json_encode(
        ' { 
"@context": "http://www.schema.org" , 
"@type": "Article", 
"author": { "@type": "Organization", "name": "HelloArtisan" },
"mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.helloartisan.com/articles/renovation-appartement " }, 
"headline":"Rénovation Appartement", 
"name":"Rénovation Appartement ", 
"datePublished": "2017-06-16 13:47:31 ", 
"dateModified": "2018-06-27 17:08:48 ", 
"image": ["https://www.helloartisan.com/resource/media/categorie/renover-appartement-miniature.jpg "], 
"description": "Nous vous accompagnons pour vos travaux de rénovation d\'appartement, de la présentation d\'entreprises vérifiées jusqu\'à la finalisation de vos projets "  , "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.32", "bestRating": "5", "ratingCount": "93"  ,"reviewCount": "14"  }  , "review": [  { "@type": "Review", "author": "Adadi", "datePublished": "2018-03-27 09:27:50", "description": "c\'est une belle peinture", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Valentin ", "datePublished": "2018-02-28 15:59:04", "description": "Je trouve les tarifs présente juste. 
J’ai fait une rénovation de mon appartement il y a quelques mois avant enmenagmeent on en a eu pour 1100€ par m2 ", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Camille ", "datePublished": "2018-03-14 15:54:56", "description": "Bon article complet, pour la rénovation d’appartement, je viens de contacter par e-mail pour rencontrer des entreprises pour les travaux.
Bonne journée, Merci ", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Guillaume ", "datePublished": "2018-03-25 12:15:40", "description": "Super article sur la rénovation d’appartement ! Merci pour les conseils ", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Sophie C.", "datePublished": "2018-04-03 11:43:53", "description": "Bon article qui explique bien les tarifs pour une rénovation compléte d\'appartement en région parisienne. Les entreprises qu\'ils nous ont conseillé sont venues et ont fait un devis rapidement. Les tarifs étaient très similaires à ceux indiqués ici. Finalement nous sommes partis avec l\'une d\'entre elles.", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Jean Robriset", "datePublished": "2018-04-04 18:23:13", "description": "article complet, c\'est pratique pour savoir quel somme mettre dans la rénovation d\'un appartement. merci", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "martinB", "datePublished": "2018-04-19 09:57:41", "description": "pas mal comme article pour une rénovation d\'appartement, plutôt bien pensé. Il serait intéressatn aussi d\'évoquer les énergies vertes un peu plus à mont gout", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Péneloppe Jourtery", "datePublished": "2018-04-24 12:24:49", "description": "Les prix indiqués étaient assez proches de ce que nous a donné l\'artisan dans son devis.", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "4", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Roubleteru Romain", "datePublished": "2018-05-02 09:22:06", "description": "super article, je vous contacterai lorsque je rénoverai mon appartement", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Rodolf Meritar", "datePublished": "2018-05-14 13:49:34", "description": "Bonne présentation des étapes auquels penser.", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "marion ducray", "datePublished": "2018-05-16 10:09:42", "description": "merci aux équipes d\'helloartisan pour l\'assistance pendant la rénovation de notre appartement! ", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "anonyme", "datePublished": "2018-06-25 12:16:38", "description": "", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "Rodolphe Barretre", "datePublished": "2018-06-04 16:01:11", "description": "Merci pour ces informations que nous avons consulté avant de commencer la rénovation de notre appartement.", "reviewRating": { "@type": "Rating", "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ,  { "@type": "Review", "author": "joutret", "datePublished": "2018-06-14 11:06:55", "description": "Merci pour tous ces conseils, avez-vous des entreprises pour s\'occuper de la rénovation d\'un appartement dans le 9ème arrondissement à me conseiller ?
Je vous ai indiquer mes coordonnées dans la création de mon compte. Merci d\'avance.", "reviewRating": { 
        "@type": "Rating", 
    "bestRating": "5", "ratingValue": "5", "worstRating": "1" } }  ]  , "inLanguage": "fr", "articleSection":"Rénovation Appartement Travaux Service Artisan" , "publisher": { "@type": "Organization", "name": "HelloArtisan","logo": { "@type": "ImageObject", "url": "https://www.helloartisan.com/public/images/frontend/home-logo.png" } }, "keywords": "Rénovation, Maison, Rénovation, Appartement, Estimez, travaux, Obtenez, devis, Rénovation Maison,Rénovation Appartement,Estimez vos travaux,Obtenez des devis,rénovation, appartement, budget, travaux, devis, prix, pose, aménagement, Rénovation Standard, Rénovation Complète, m2, prix m2, rénovation appartement,Rénovation,Appartement ,Rénovation,Appartement ,Nous,vous,accompagnons,pour,vos,travaux,de,rénovation,d\'appartement,de,la,présentation,d\'entreprises,vérifiées,jusqu\'à,la,finalisation,de,vos,projets "
}
'));


$page_param->setTrackerScript('
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGZMLKS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
');
$page_param->setIsAmp(true);


$encoders = array(new XmlEncoder(), new JsonEncoder());
$normalizers = array(new ObjectNormalizer());


$serializer = new Serializer($normalizers, $encoders);
$data = $serializer->serialize($page_param, 'json');


$contactLD = Context::create("article", [
    "name" => "Rénovation Appartement ",
    "url" => "https://www.helloartisan.com/articles/renovation-appartement",
    "description" => "Nous vous accompagnons pour vos travaux de rénovation d'appartement, de la présentation d'entreprises vérifiées jusqu'à la finalisation de vos projets ",

    "image" => [
        "url" => "https://www.helloartisan.com/resource/media/categorie/renover-appartement-miniature.jpg "
    ],
    "review" =>
        [

                "author" => "Adadi",
                "datePublished" => "2018-03-27 09:27:50",
                "description" => "c'est une belle peinture",
                "reviewRating" => [
                    "bestRating" => "5",
                    "ratingValue" => "5",
                    "worstRating" => "1"
                ]
            ]

        ,
    "publisher" => [
        "name" => "HelloArtisan",
        "logo" => [
            "@type" => "ImageObject",
            "url" => "https =>//www.helloartisan.com/public/images/frontend/home-logo.png"
        ]
    ],
    "keywords" => "Rénovation, Maison, Rénovation, Appartement, Estimez, travaux, Obtenez, devis, Rénovation Maison,Rénovation Appartement,Estimez vos travaux,Obtenez des devis,rénovation, appartement, budget, travaux, devis, prix, pose, aménagement, Rénovation Standard, Rénovation Complète, m2, prix m2, rénovation appartement,Rénovation,Appartement ,Rénovation,Appartement ,Nous,vous,accompagnons,pour,vos,travaux,de,rénovation,d'appartement,de,la,présentation,d'entreprises,vérifiées,jusqu'à,la,finalisation,de,vos,projets",
    "inLanguage" => "fr",
    "dateCreated" => "2017-06-14 13:47:31 ",
    "datePublished" => "2017-06-16 13:47:31 ",
    "dateModified" => "2018-06-27 17:08:48 ",
    "author" => ["name" => "HelloArtisan"],
    "aggregateRating" => [
        "ratingValue" => "4.32",
        "bestRating" => "5",
        "ratingCount" => "93",
        "reviewCount" => "14"
    ],
    "articleSection" => "Rénovation Appartement Travaux Service Artisan",
    "mainEntityOfPage" => [
        "@id" => "https =>//www.helloartisan.com/articles/renovation-appartement "
    ],
    "headline" => "Rénovation Appartement",

]);

file_put_contents("./json_data/config/metaParam/pages/meta-renovation-appartement.json", $contactLD);




