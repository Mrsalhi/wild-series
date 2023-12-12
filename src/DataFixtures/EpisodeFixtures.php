<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectEpisode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{ 
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create();

        for($i = 0; $i < 250; $i++) {
            $episode = new episode();
            //Ce Faker va nous permettre d'alimenter l'instance de Season que l'on souhaite ajouter en base
            $episode->setNumber($faker->numberBetween(1, 10));
            $episode->settitle($faker->title());
            $episode->setSynopsis($faker->paragraphs(3, true));
            $episode->setSeason($this->getReference('season_' . ($i % 25 + 1)));
            $manager->persist($episode);
        }
        $manager->flush();

/*$episode = new Episode();
$episode->setTitle('Welcome to the Playground');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Les sœurs orphelines Vi et Powder causent des remous dans les rues souterraines de Zaun à la suite d un braquage dans le très huppé Piltover. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Certains mystères ne devraient jamais être résolus');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Idéaliste, le chercheur Jayce tente de maîtriser la magie par la science malgré les avertissements de son mentor. Le criminel Silco teste une substance puissante.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Cette violence crasse nécessaire au changement');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Deux anciens rivaux s affrontent lors d un défi spectaculaire qui se révèle fatidique pour Zaun. Jayce et Viktor prennent de gros risques pour leurs recherches.'); 
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Joyeuse Fête du progrès !');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Alors que Piltover profite de leur technologie, Jayce et Viktor réfléchissent à ce qu ils vont faire. Un visage familier ressort de Zaun pour semer la pagaille.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('L ennemi commun');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Caitlyn, la pacifieuse qui n en fait qu à sa tête, arpente les bas-fonds pour trouver Silco. Jayce devient une cible en combattant la corruption à Piltover.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Quand l empire s effondre');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Un protégé discrédite son mentor devant le Conseil à cause de l évolution rapide d une technologie magique. Poursuivie par les autorités, Jinx doit affronter son passé.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le petit sauveur');
$episode->setNumber(7);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('Caitlyn et Vi retrouvent un allié dans les rues de Zaun et se déchaînent contre une ennemie commune. Viktor prend une décision désespérée.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('L eau et l huile');
$episode->setNumber(8);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('L héritière désavouée Mel et sa mère échangent des tactiques de combat. Caitlyn et Vi forgent une alliance improbable. Jinx subit une étonnante transformation.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Rouages et engrenages');
$episode->setNumber(9);
$episode->setSeason($this->getReference('season1_Arcane'));
$episode->setSynopsis('À deux doigts d entrer en guerre, les chefs de Piltover et de Zaun sont face à un ultimatum, jusqu à ce qu un affrontement fatidique bouleverse les deux villes à jamais.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Passé décomposé');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis(' Rick parvient à s échapper du tank grâce à l aide de Glenn, dont il avait entendu la voix à la radio. Rick et Glenn se réunissent avec les compagnons de Glenn, un autre groupe de survivants dont Andrea, T-dog, Merle, Morales, Jacqui, venus pour se ravitailler au supermarché. Cependant, l arrivée mouvementée de Rick les met tous en péril, l attention des zombies ayant été attirée sur leur cachette. Assiégé par les zombies, le groupe parvient brièvement à communiquer par radio avec le groupe de Shane et Lori, mais ceux-ci décident qu ils ne peuvent les aider, la présence de Rick ne leur ayant pas encore été communiquée. Dans le petit groupe cloîtré à l intérieur du supermarché, les tensions s exacerbent, particulièrement entre T-Dog, un noir et Merle Dixon, un blanc raciste, ce qui conduit Rick à intervenir en menottant Merle à un tuyau sur le toit du magasin. Rick, Andréa et Glenn planifient leur évasion du magasin toujours assiégé, l idée est de se couvrir des lambeaux de chair et des boyaux des cadavres pour masquer leur odeur trop reconnaissable afin de pouvoir circuler parmi les zombies et atteindre des camions. Malgré la pluie qui a failli contrarier ce plan, le groupe parvient à s échapper, dans un fourgon Dodge pour Andrea, Jacquie, T-Dog, Morales et Rick et une voiture pour Glenn. Seul Merle manque à l appel après que T-Dog a accidentellement perdu la clé dans une canalisation, laissant Merle attaché au tuyau. Seule précaution : la porte d accès au toit a été cadenassée pour préserver autant que possible Merle des rôdeurs…');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Tripes');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis('Rick Grimes, shérif, est blessé à la suite d une course-poursuite. Il se retrouve dans le coma. Cependant, lorsqu il se réveille dans l hôpital, il ne découvre que désolation et cadavres. Se rendant vite compte qu il est seul, il décide d essayer de retrouver sa femme Lori et son fils Carl. Lorsqu il arrive chez lui, il s aperçoit que sa maison est vide et que sa famille a disparu. Puis en ressortant de chez lui, il reçoit un coup sur la tête et tombe inconscient. Rick a en fait été assommé par Duane, le fils de Morgan, un médecin qui l avait pris pour un zombie . Rick est désorienté lorsque Morgan lui apprend que l humanité a été décimée par un phénomène étrange qui transforme les humains en errants. Il apprend comment le père et son fils font pour survivre. Le lendemain, Rick accompagne Morgan et Duane au commissariat pour leur donner des armes afin de se défendre, en prendre pour lui, et les munir, lui et Morgan, de talkie-walkie dans le but de rester en contact. Rick décide de partir pour Atlanta où il est persuadé que son fils et sa femme sont, car Morgan a entendu une rumeur selon laquelle il y aurait un camp de réfugiés. Les trois survivants promettent de se retrouver plus tard. Lorsque Rick se dirige vers la ville, il découvre que les rues sont jonchées de cadavres, mais aussi remplies de rôdeurs. Rick est dépassé, il laisse tomber son sac d armes au milieu de la rue, et se réfugie dans un tank. C est alors qu une voix retentit dans la radio du char. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('T’as qu’à discuter avec les grenouilles');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis(' De retour au camp avec le groupe de survivants du supermarché, Rick retrouve enfin et avec beaucoup d émotion sa femme Lori et son fils Carl. Andrea quant à elle, rejoint sa jeune sœur Amy. Mais très vite, malgré l intrusion d un zombie près du camp, Rick décide, contre l avis de Shane, de retourner à Atlanta chercher Merle Dixon ainsi que son sac d armes abandonné en route et récupérer au passage le talkie-walkie laissé dans le sac et ainsi prévenir Morgan de ne pas se rendre dans le piège d Atlanta. Il est accompagné de Daryl Dixon, le frère de Merle, plus jeune mais tout aussi violent, ainsi que Glenn qui connaît bien les lieux et T-Dog qui se sent redevable et Andrea. Lori prévient Shane de rester à distance de sa famille maintenant que Rick est de retour, car Shane lui avait dit que Rick était mort à l hôpital. Les tensions s exacerbent au camp entre une femme, Carol et son mari violent, Ed. Amy intervient pour prendre la défense de Carol avant qu une bagarre éclate, au cours de laquelle Shane donne libre cours à sa colère. Il frappe Ed jusqu à presque le tuer, ce qui effraie plusieurs témoins de la scène. L équipe de rescousse parvient à Atlanta mais une fois arrivée sur le toit, elle découvre que Merle a utilisé une scie pour se couper la main et se libérer des menottes. Il a visiblement perdu beaucoup de sang mais reste introuvable…');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Gang');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis('En cherchant Merle, le groupe essaie aussi, par la même occasion, de retrouver le sac d armes mais un autre groupe de survivants, également en quête des armes, les attaque. Le groupe parvient à capturer un attaquant blessé, Miguelito, mais les autres assaillants s enfuient en voiture en emmenant Glenn comme otage. Après l interrogatoire de leur otage, Rick et ses camarades apprennent le lieu de la cachette de leurs opposants et espèrent procéder à un échange de prisonniers. Le deuxième groupe dirigé par leur chef Guillermo, alias « G », refuse, exigeant le sac d armes en plus du prisonnier. Le bain de sang est évité grâce à l arrivée d une personne âgée (la grand-mère d un des hispaniques) qui met fin à la confrontation. Rick Grimes et ses compagnons se rendent compte que l image belliqueuse que leurs hôtes se donnent n est qu une façade : ce « gang » est en fait constitué d anciens employés d un pensionnat reculé de personnes âgées encore occupé par les pensionnaires, ainsi que de membres de leurs familles, qui se cachent et tentent de se protéger des attaques de rôdeurs. Rick leur laisse quelques armes pour leur défense et chaque groupe repart de son côté, au complet. Au moment de reprendre le fourgon, ils découvrent que Merle l a volé et a ramené une dizaine de rôdeurs au camp. Plusieurs membres sont tués, dont Amy, la jeune sœur d Andrea et Ed, le mari de Carole. Le groupe de Rick arrive au camp juste à temps pour éliminer les derniers rôdeurs et sauver le reste du groupe. Avant ça, un des membres du groupe, Jim, avait fait un rêve où il creusait des trous dans la terre mais à son réveil il ne se souvient plus pourquoi il creusait. Au moment de l attaque, il s en est souvenu : c était pour enterrer les morts du groupe. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Feux de forêt');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis('Les cadavres sont enterrés, ceux des rôdeurs brûlés, mais Andrea protège le corps d Amy jusqu à son réveil en rôdeur , pour finir par l achever. Dale, la voyant totalement bouleversée, tente en vain de la réconforter. Jim, un des survivants, révèle qu il a été mordu par un rôdeur durant l attaque et les membres du groupe décident de l amener au Centre pour le contrôle et la prévention des maladies, dans l espoir d y trouver un vaccin. Mais ce projet est une source de conflit entre Shane et Rick, Shane étant persuadé que le CDC sera une impasse. Une seule famille, les Morales, se sépare du groupe, décidant de retourner dans leur famille à Birmingham, Alabama et les membres restants partent pour le CDC. Mais durant le trajet, l état de Jim empire et celui-ci demande aux autres de le laisser mourir seul dans la forêt. Le groupe arrive ensuite à l immeuble du CDC, dans lequel un scientifique, Edwin Jenner, s est enfermé pour poursuivre des tests sur le virus des zombies. Il vient juste de perdre son seul échantillon de test du virus et annonce à la caméra qui le surveille qu il envisage de se suicider. Au moment où le groupe se prépare à partir, croyant l immeuble vide, Rick remarque qu une caméra bouge et il supplie qu on le laisse entrer avec son groupe. Les portes s ouvrent alors à la stupéfaction du groupe de survivants. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Sujet-test 19');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season1_Walking dead'));
$episode->setSynopsis(' Edwin Jenner accueille les survivants au CDC. Le petit groupe profite d un repos provisoire. Andrea reste dans un état dépressif et Dale tente vainement de la réconforter. Après un repas et une nuit de repos, Jenner leur explique ce qu il sait de la situation en leur montrant la vidéo de l évolution du Sujet-Test 19. À la fin de la video, les survivants remarquent un compte à rebours, Jenner leur explique que c est le temps restant avant l extinction du groupe électrogène. Les survivants apprennent qu à la fin de ce délai, tout le CDC sera détruit. La tension monte alors entre ceux qui veulent rester pour mourir et ceux qui veulent tenter leur chance dans le monde extérieur, infesté de morts-vivants. Finalement Jacquie reste avec Jenner, le reste du groupe parvenant, de justesse, à sortir du bâtiment, afin de se mettre en route vers une destination inconnue.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Ce qui nous attend');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Après l explosion du CDC, les survivants reprennent la route et se dirigent vers Fort Benning. Après un arrêt inopiné au milieu de l autoroute dû à un carambolage de véhicules abandonnés, le groupe se fait attaquer par une horde de rôdeurs. Poursuivie par deux rôdeurs, Sophia s enfuit alors dans les bois et malgré l intervention de Rick, elle finit par se perdre. Le groupe part à sa recherche. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Saignée');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Après que Carl s est fait tirer dessus par un chasseur, Rick trouve de l aide chez Hershel Greene, un vétérinaire vivant dans une ferme non loin de l autoroute. Il découvre alors que le chasseur est Otis, un membre de la famille de Hershel. Pendant ce temps, les autres cherchent Sophia dans les bois tandis que Dale et T-Dog restent au camping-car. Plus tard, Lori rejoint Rick à la ferme de Hershel, ce dernier leur annonce que Carl a besoin d être opéré mais qu il a besoin de matériel. Shane et Otis se dévouent pour aller en ville. Là-bas, ils se font attaquer par une horde de rôdeurs. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Tout pour le tout');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('À court de munitions, Shane décide de tirer sur Otis pour faire diversion et lui permettre de s enfuir avec le matériel. De retour à la ferme, il raconte qu Otis s est sacrifié pour que Carl puisse être soigné. Sophia, quant à elle, reste introuvable et les recherches se poursuivent ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Rose Cherokee');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Les funérailles d Otis ont lieu, bien que son corps ne soit pas présent. Daryl décide de continuer à chercher Sophia, et entre dans une maison abandonnée où il trouve des restes de nourriture récemment consommée. Pendant ce temps, Glenn et Maggie vont en ville chercher des médicaments, et Glenn a été secrètement chargé par Lori de lui ramener un test de grossesse. De retour de ses recherches, Daryl rapporte une rose Cherokee à Carol, afin qu elle garde l espoir de retrouver sa fille. Lori utilise son test de grossesse, qui révèle qu elle est enceinte. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Chupacabra');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Rick et les autres continuent à chercher Sophia en formant des groupes afin de couvrir plus de terrain. Dans la forêt, Rick et Shane discutent ; Shane lui avoue qu il pense que Sophia est morte mais Rick pense qu elle est toujours en vie. De son côté, Daryl trouve la poupée de Sophia dans la forêt. Alors qu il continue ses recherches à cheval, un serpent effraye l animal et Daryl chute et dévale une pente ; gravement blessé par une de ses propres flèches, il tente de remonter mais chute à nouveau et perd connaissance. À son réveil, il se rend compte qu il est attaqué par un rôdeur. Il parvient à l éliminer, à retirer sa flèche, et à remonter la pente forestière. Pendant ce temps, Rick, Shane et les autres sont revenus à la ferme. Andrea, qui surveille les environs voit quelqu un sortir de la forêt   pensant qu il s agit d un rôdeur, elle lui tire dessus avant de réaliser qu il s agit de Daryl. La balle effleure seulement son crâne et il survit. Rick l emmène chez Hershel pour qu il soit soigné. Le soir venu, Glenn donne rendez-vous à Maggie dans la grange. En y entrant, Glenn découvre que des rôdeurs sont enfermés à l intérieur. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Secrets');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Glenn doit garder le secret pour les rôdeurs dans la grange, mais également sur le fait que Lori est enceinte. Il dévoile finalement ces deux secrets à Dale. De leur côté, Shane et Andrea partent à la recherche de Sophia ; ils s arrêtent sur la route et couchent ensemble. Tandis que Lori hésite entre garder son bébé ou avorter, elle décide de prendre des pilules du lendemain avant de réaliser qu elle veut garder l enfant. Rick trouve les pilules dans la tente et comprend que Lori est enceinte. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Déjà plus ou moins mort');
$episode->setNumber(7);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis(' Glenn avoue au reste du groupe que la grange est remplie de rôdeurs. Shane décide de s occuper des rôdeurs à l intérieur de la grange mais Dale a volé les armes pour les cacher dans la forêt. Il pense que Shane a menti au sujet d Otis et que c est lui qu il l a tué. Shane retrouve Dale et le menace avant de récupérer les armes. Il revient au camp très énervé, distribue des armes, ouvre la grange et laisse les rôdeurs sortir pour tous les éliminer.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Nebraska');
$episode->setNumber(8);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis(' Après que les rôdeurs de la grange ont été éliminés et que Sophia fut abattue par Rick, Hershel se rend seul en ville. Malgré le choc du groupe, Rick et Glenn décident d aller le chercher car Beth est en état de choc. Inquiète pour Rick, Lori part à son tour les chercher et a un accident de voiture en percutant un rôdeur.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Doigt sur la détente');
$episode->setNumber(9);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Alors que Rick, Hershel et Glenn sont sur le point de quitter le bar, une voiture arrive. Les hommes qui en sortent sont à la recherche de Dave et Tony. Depuis l intérieur du bar, Rick leur explique ce qui est arrivé à leurs amis. Ils se font alors attaquer. Hershel parvient à toucher l un d entre eux mais une horde de zombies fait son apparition. Le reste des hommes s enfuit mais laisse Randall, un membre de leur équipe, dont la jambe est coincée dans un grillage. Rick, Glenn et Hershel décident de le décrocher et le ramènent à la ferme. Pendant ce temps, Shane part à la recherche de Lori et la retrouve sur la route. Pour la convaincre de rentrer, il lui assure que Rick est de retour à la ferme et en bonne santé.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('À dix-huit miles, au moins');
$episode->setNumber(10);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Une semaine plus tard, Rick et Shane décident de conduire Randall dans un endroit sûr, mais éloigné de la ferme. Randall les supplie alors de ne pas l abandonner, et il avoue avoir été à l école avec Maggie. De peur que Randall parvienne par la suite à retrouver la ferme et à se venger, Shane veut le tuer, mais Rick s y oppose. Ils commencent alors à se battre. Pendant le combat, Shane brise la vitre d un bâtiment dans lequel se trouvent des rôdeurs. Tandis que Randall parvient à tuer l un d eux qui fonçait sur lui, Shane se retrouve pris au piège dans un bus. Rick assiste à la scène et s enfuit. Il revient finalement avec Randall qui conduit une voiture et sauve Shane qui s échappe par l arrière du bus. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Juge, Juré et Bourreau');
$episode->setNumber(11);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Daryl torture Randall pour obtenir des informations sur son groupe. Ce dernier lui avoue qu il s agit d hommes, de femmes et d enfants, et que le groupe possède des armes automatiques. Le groupe doit alors déterminer si Randall est une menace et s il faut le tuer. Pendant ce temps, Carl trouve une arme et se rend dans la forêt où il se retrouve face à un rôdeur coincé près d un ruisseau. Considérant qu il ne représente pas de danger immédiat, Carl lui lance des pierres puis pointe l arme vers lui. Mais le rôdeur parvient à se déterrer et à attraper la jambe de Carl, qui parvient à s enfuir. Dans la nuit, alors que Dale s enfonce dans un champ proche de la ferme, il découvre un animal totalement éventré au sol. Il se retourne et se fait surprendre par un rôdeur qui le plaque au sol. Dale évite de se faire mordre mais se fait finalement étriper par le rôdeur. Entendant les cris, le groupe arrive à son secours et le découvre, agonisant. Après avoir tué le rôdeur, Daryl décide de tirer une balle dans la tête de Dale pour abréger ses souffrances. Carl observe le rôdeur, et remarque qu il s agit du même que celui qui l a attaqué dans la forêt. Il se sent alors responsable de la mort de Dale. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Les Meilleurs Anges de notre nature');
$episode->setNumber(12);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis('Le groupe organise une cérémonie funéraire pour Dale et emménage dans la maison de Hershel. Lori présente ses excuses à Shane et le remercie pour tout ce qu il a fait pour elle et Rick. Elle lui avoue également qu elle ne sait pas si le bébé est de lui ou de Rick. Alors que Rick a exclu Shane de la mission qu ils avaient prévu ensemble pour se débarrasser de Randall, Shane décide de s en occuper lui-même et orchestre la fuite de Randall. Dans la forêt, Shane lui brise la nuque et se cogne lui-même la tête contre un arbre. De retour à la ferme, il fait croire au groupe que Randall s est enfui dans la forêt avec son arme après l avoir frappé au visage. Deux groupes se forment, Shane et Rick d un côté, Daryl et Glenn de l autre. Sur les traces de Randall, ces deux derniers se retrouvent face à lui, transformé en zombie. Ils le tuent et remarquent alors que Randall a eu le cou brisé et qu il n a aucune trace de morsure, ne sachant donc pas comment la transformation a été réalisée. De son côté, Rick comprend que Shane a orchestré la mort de Randall et qu il s agit d un prétexte pour se retrouver seul avec lui et le tuer. Alors que Shane le menace avec son arme, Rick s approche et le poignarde au cœur. Carl surprend à ce moment la son père au-dessus du corps inerte de Shane et pointe son arme dans sa direction. Alors que Rick pense être la cible et tente de le raisonner, Carl fait feu, visant en réalité la tête de Shane qui s était relevé en rôdeur. La détonation attire alors une énorme horde de rôdeurs tout droit sur la ferme. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Près du feu mourant');
$episode->setNumber(13);
$episode->setSeason($this->getReference('season2_Walking dead'));
$episode->setSynopsis(' Tandis que Rick et Carl rentrent vers la ferme d Hershel, ils aperçoivent un important groupe de rôdeurs approcher. Rapidement, la ferme se retrouve encerclée. Les survivants tentent alors de contenir l attaque avant d être forcé de prendre la fuite de manière désorganisée. Pendant l attaque, Jimmy et Patricia sont tués par les rôdeurs. Le groupe parvient à se retrouver sur l autoroute ou Sophia avait disparue et fait le bilan des pertes humaines. Pendant ce temps, Andrea, qui s est enfuie seule dans la forêt après avoir été laissée derrière par le groupe qui pensait l avoir vu mourir, est poursuivie par de nombreux rôdeurs. Après des heures de lutte, Andrea est à bout de forces et s apprête à être dévorée par l un d entre eux quand elle est sauvée in-extremis par une mystérieuse personne cachée sous une capuche, accompagnée de deux zombies sans bras qu elle tient par des chaînes. En cherchant un endroit pour la nuit, le groupe fait une pause et Glenn et Daryl font part de ce qu ils ont aperçu sur le corps de Randall. En tenant compte du récit de ses deux compagnons et de ce qu il a vu avec Shane, Rick se remémore les paroles que Jenner lui avait alors chuchoté à l oreille avant leur fuite du CDC : il annonce au groupe que, peu importe la nature de la mort, tout le monde est porteur du virus et finira par se transformer une fois mort si le cerveau n est pas détruit. Le groupe décide de s arrêter pour la nuit et, tandis que la tension monte, Rick leur apprend qu il a tué Shane et déclare au groupe que s ils veulent rester avec lui, ce ne sera plus une démocratie désormais. Non loin de là, une prison se trouve à quelques kilomètres d eux.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Graines');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Quelques mois après avoir dû quitter précipitamment la ferme de Hershel, les survivants explorent les environs à la recherche d un nouvel endroit sûr, en vain. L accouchement de Lori est imminent. Tous commencent à désespérer lorsqu ils tombent par hasard sur une prison. Pour Rick, cet endroit est un lieu idéal pour être en sécurité mais il faut d abord se débarrasser des dizaines de rôdeurs qui s y trouvent. Lors de leur action pour sécuriser les lieux, le groupe va également très vite découvrir qu il n y a pas que des morts-vivants sur les lieux. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Malade');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Après qu Hershel s est fait mordre par un rôdeur dans les couloirs de la prison et que Rick a dû lui couper la jambe pour éviter que l infection ne se propage, les survivants tombent sur un petit groupe de détenus composé de Thomas, Axel, Oscar, Andrew et « Big Tiny » qui ont échappé à l épidémie. Ces prisonniers étaient planqués depuis des mois dans la cafétéria, n ayant aucune idée de ce qui les attendait vraiment dehors. C’est à contrecœur que Rick leur propose un marché : en échange de la moitié de leur nourriture, il accepte de les aider à nettoyer un quartier de la prison où ils pourraient s’installer tranquillement. Cependant, entre l’ancien shérif et le chef de la bande de prisonniers, instable et imprévisible, l’ambiance est loin d être au beau fixe. Dans le même temps, Hershel, la personne la plus à même d aider Lori à accoucher, reste inconscient entre la vie et la mort.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Marchez avec moi');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Andrea, séparée du groupe depuis l attaque de la ferme par les rôdeurs et sa nouvelle acolyte de survie, la mystérieuse et imperturbable Michonne, assistent au crash d un hélicoptère militaire en pleine forêt. Alors qu elles se rendent sur les lieux de l accident, un autre groupe arrive et les conduit jusqu  à leur camp. Andrea retrouve parmi eux, Merle Dixon, l incontrôlable grand frère de Daryl, que Rick avait dû menotter sur un toit au début de l aventure. Celui-ci vit désormais au sein d une communauté très organisée et dirigée par un homme charismatique qui se fait appeler le Gouverneur. Elle lui apprend tout ce qui s est passé depuis que Rick a dû le menotter, notamment la fuite d Atlanta, l arrivée dans la ferme de Hershel mais aussi les nombreux morts au sein du groupe dont celles de Jim, Dale, Jacquie, Sophia et Amy. À la fin de l épisode, on découvre que le Gouverneur consacre une pièce a la conservation de têtes humaines et de rodeurs. ');
$manager->persist($episode);


$episode = new Episode();
$episode->setTitle('Un tueur à l intérieur');
$episode->setNumber('5');
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis(' Alors que Rick et ses camarades sont en train de sécuriser les lieux, ils se retrouvent face à Axel et Oscar, les deux prisonniers rescapés, qui les supplient de pouvoir rester avec eux, ce qui leur est refusé. Soudain, une horde de rôdeurs envahit la prison et les survivants sont contraints de se séparer en plusieurs petits groupes. Lori se retrouve perdue dans les couloirs avec Carl et Maggie, au moment où les contractions se font de plus en plus pressantes. Une décision radicale doit alors être rapidement prise au sujet de son accouchement. Maggie doit lui faire une césarienne et Lori perd beaucoup de sang. Une fois qu elle a accouché, son fils Carl est obligé de lui tirer une balle dans la tête pour qu elle ne se transforme pas en rôdeur. Blessé, T-Dog se sacrifie afin que Carol parvienne à s en sortir, mais elle n arrive pas à retrouver les autres, qui la croient alors morte. De son côté, Rick, à la recherche de sa femme et de son fils, découvre que les portes de la prison ont été sabotées par quelqu un, ce qui a permis l intrusion de tous ces morts-vivants en son sein. Quant à Andrea et Michonne, elles vivent toujours dans la communauté du Gouverneur. Si Andrea ne veut pas en partir, Michonne sent que quelque chose de louche se trame autour de la personnalité de leur hôte.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle(' Dis-le');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Toujours très méfiante à l égard du Gouverneur et déterminée à quitter la communauté, Michonne s introduit dans la maison de celui-ci afin de récupérer son sabre et découvre que son hôte garde des rôdeurs en captivité. Prise sur le fait, elle le menace avant de quitter la maison. Elle arrive à convaincre Andrea de partir avec elle, mais au dernier moment, cette dernière change d avis et Michonne s en va finalement seule. Andrea ne tarde pas à légèrement regretter d être restée lorsqu elle voit la façon dont le Gouverneur utilise les rôdeurs qu il capture pour divertir les habitants de sa ville fortifiée. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La Traque');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Merle et ses hommes se lancent à la poursuite de Michonne, tout juste après son départ de la ville fortifiée. Elle parvient à leur échapper après un âpre combat dans la forêt qui la laisse blessée à une jambe. De retour à Woodbury, Merle ment au Gouverneur (en lui disant avoir tué Michonne), qui de son côté entame une liaison avec Andrea. Dans la prison, Rick décroche le téléphone qu il entend sonner et entame une discussion avec une femme lui indiquant vivre dans un endroit sûr et sans rôdeur. Après plusieurs appels, au cours desquels l ancien shérif converse aussi avec un homme, il comprend vivre une hallucination : les personnes au bout du fil sont Amy, Jim, Jacquie et sa défunte épouse Lori, qui l implore de se ressaisir afin de prendre soin de leurs enfants. Daryl, lui, retrouve enfin Carol, prostrée derrière une porte, perdue quelque part dans un des couloirs. Glenn et Maggie, partis en ville chercher de la nourriture, ont la malchance de croiser la route de Merle. Celui-ci les menace avec une arme et les oblige à le suivre à Woodbury, où ils devront lui dire où est son frère. Michonne, cachée derrière une voiture, assiste à toute la scène. Alors que Rick semble retrouver de l allant et s occupe enfin de sa fille dans la cour de la prison, il voit une personne s avancer vers la grille : c est Michonne. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Quand les morts approchent');
$episode->setNumber(7);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('À Woodbury, Merle torture Glenn afin qu il lui indique où trouver son frère et le reste du groupe. Mais le jeune homme refuse catégoriquement de parler. De son côté, Michonne arrive à la prison épuisée par sa blessure et est secourue juste à temps par Rick et son fils. Là, elle leur parle de l enlèvement de Glenn et Maggie ainsi que de la ville fortifiée. Rick décide immédiatement de s y rendre accompagné de Daryl, Oscar et de Michonne. Sur place, Andrea assiste aux recherches secrètes de Milton et apprend que son travail est de déterminer si les rôdeurs conservent la conscience de ce qu ils étaient avant. Mais l expérience sur un patient volontaire en fin de vie échoue : Andrea est obligée de le tuer après sa transformation. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle(' Une vie de souffrance');
$episode->setNumber(8);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis(' Un groupe de survivants inconnus, composé de trois hommes et deux femmes, dont l une vient d être mordue, tente d échapper aux rôdeurs qui les pourchassent. Dans leur fuite, ils arrivent à la prison et réussissent à y pénétrer.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Roi du suicide');
$episode->setNumber(9);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Contraints par le Gouverneur, Daryl et Merle doivent se battre l un contre l autre dans un combat à mort. Le vainqueur se verra libéré. Alors que le combat fratricide fait rage, Rick et les siens interviennent par surprise et réussissent à libérer les deux frères après une nouvelle fusillade. Une fois en lieu sûr, et devant le refus catégorique des autres d intégrer Merle au groupe, Daryl prend la décision de prendre la route seul avec lui. À Woodbury, ce violent évènement a jeté le trouble dans la communauté. Beaucoup veulent partir, ne se sentant plus en sécurité. Des rôdeurs parviennent même à passer les murs et à s attaquer à certains d entre eux. Meurtri au plus profond de lui-même, le Gouverneur, plus froid que jamais, reste étranger à ce vacarme et rumine sa vengeance. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Chez nous');
$episode->setNumber(10);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Le Gouverneur vient présenter ses excuses à Andrea pour son comportement récent. Il prétend qu il veut se retirer du commandement de Woodbury après cet échec et lui passer le relais. Il déclare également ne pas songer à se venger et souhaiter tourner la page. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Entre deux feux');
$episode->setNumber(11);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Le Gouverneur recense tous les habitants de Woodbury aptes au combat dans le but de lever une armée pour partir à l assaut de la prison. Andrea s oppose fermement à ce projet et lui demande la permission d aller parlementer avec ses anciens compagnons afin d établir une trêve. Contre son avis, Andrea décide tout de même de s y rendre et demande à Milton de l accompagner. Le scientifique accepte, surtout pour pouvoir jouer double-jeu en faveur de son supérieur. Sur le chemin, ils croisent Tyreese et les siens, partis précipitamment de la prison après l’échauffourée avec Rick. Milton décide de les ramener à la ville fortifiée, pendant qu Andrea continue seule sa route. Arrivée à destination, elle découvre un groupe meurtri, sur la défensive, qui ne l accueille pas à bras ouverts. Rick, Michonne et les autres lui racontent leurs mésaventures, comment ils vivent désormais, la façon dont le Gouverneur les a attaqués et lui signifient aussi qu ils n abdiqueront pas dans cette bataille. Tyreese et sa bande se voient offrir l hospitalité du Gouverneur et acceptent de le rejoindre dans son combat. Carol discute avec Andrea avant qu elle ne rentre à Woodbury et lui demande de mettre un terme à tout cela en tuant le Gouverneur pendant son sommeil. Une fois rentrée à Woodbury, aux côtés du Gouverneur, la jeune femme, lors du sommeil de son amant, décide alors de passer à l acte au nom de ses anciens partenaires. Mais au tout dernier moment, elle renonce à son geste fatal.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Retrouvailles');
$episode->setNumber(12);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Rick, accompagné par Carl et Michonne, part à la recherche d armes et de munitions. Le petit groupe se dirige vers la ville où vivait l ancien shérif afin de faire un tour par l’armurerie du commissariat. Mais celle-ci a déjà été complètement vidée. Au cœur du centre-ville, ils tombent sur une petite fortification truffée de pièges et ne tardent pas à être la cible d un tireur isolé. Carl réussit à le neutraliser en lui tirant dessus. Ce sniper se révèle être Morgan, l homme qui était venu en aide à Rick lorsque celui-ci était sorti du coma et avait quitté l’hôpital. Il a amassé les armes dans un bâtiment quil défend contre les rôdeurs. ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Une flèche sur la porte');
$episode->setNumber(13);
$episode->setSeason($this->getReference('season3_Walking dead'));
$episode->setSynopsis('Rick, Daryl et Hershel se rendent dans un endroit isolé qu ils inspectent. Puis, pendant que ses compagnons montent la garde dehors, Rick rentre dans une petite grange abandonnée où l attend son ennemi, le Gouverneur. Les deux hommes se retrouvent en fait ici pour parlementer, à la suite d un rendez-vous arrangé par Andrea afin de tenter de négocier une trêve. Cette dernière, après avoir fait les présentations et s être essayée au rôle de médiatrice, les laisse parler seul à seul. Dans un climat de méfiance, ils apprennent néanmoins à faire connaissance. L ancien shérif propose un partage des terres, la création d une frontière entre les deux camps que personne n aura le droit de franchir, mais son homologue refuse. Il préfère lui soumettre un autre marché : en échange de l arrêt des hostilités, il veut Michonne et seulement elle. Le Gouverneur laisse à Rick deux jours pour réfléchir à cette suggestion : la seule vie de la guerrière au sabre ou bien une guerre qui engagera celles de tous les occupants de la prison. ');
$manager->persist($episode); 

$episode = new Episode();
$episode->setTitle('Ryomen Sukuna');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis(' ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Pour moi-même');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis(' ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La bâtisseuse');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis(' ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Ryomen Sukuna');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis('episode1 ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Pour moi-même');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis('episode2 ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La bâtisseuse');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Jujutsu Kaisen'));
$episode->setSynopsis(' episode3');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Trésor caché');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season2_Jujutsu Kaisen'));
$episode->setSynopsis('episode1 ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Trésor caché 2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season2_Jujutsu Kaisen'));
$episode->setSynopsis('episode2 ');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Trésor caché 3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season2_Jujutsu Kaisen'));
$episode->setSynopsis(' episode3');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Godolkin University');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Premier Jour');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Think Brink');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Toute la vérité !');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Bienvenue au Club des Monstres');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode5.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Jumanji');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode6.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Nausée');
$episode->setNumber(7);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode7.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Les Gardiens de la Godolkin');
$episode->setNumber(8);
$episode->setSeason($this->getReference('season1_Gen V'));
$episode->setSynopsis('episode8.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Au commencement');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Livre');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Des temps difficiles');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La Récré du samedi matin ');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La Solution des temps derniers');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis('episode5.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le Tout Dernier Jour du reste de leur vie');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season1_Good Omens'));
$episode->setSynopsis('episode6.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('L Arrivée');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('L indice');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Je sais où je vais');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('L autostoppeuse !');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Le bal');
$episode->setNumber(5);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis('episode5.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Every Day');
$episode->setNumber(6);
$episode->setSeason($this->getReference('season2_Good Omens'));
$episode->setSynopsis('episode6.');
$manager->persist($episode);


$episode = new Episode();
$episode->setTitle('Livre1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre4');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre2/1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season2_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre2/2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season2_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre2/3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season2_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre2/4');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season2_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);


$episode = new Episode();
$episode->setTitle('Livre3/1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season3_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre3/2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season3_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre3/3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season3_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre3/4');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season3_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre4/1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season4_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre4/2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season4_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre4/3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season4_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre4/4 ');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season3_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre5/1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season5_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre5/2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season5_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre5/3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season5_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre5/4');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season5_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre6/1');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season6_kaamelott'));
$episode->setSynopsis('episode 1');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre6/2');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season6_kaamelott'));
$episode->setSynopsis('episode2.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre6/3');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season6_kaamelott'));
$episode->setSynopsis("episode3");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Livre6/4');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season6_kaamelott'));
$episode->setSynopsis('episode4.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La Maison');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season1_American Horror Story'));
$episode->setSynopsis('En 1978, les jumeaux Bryan et Troy arrivent et entrent dans un vieux manoir, malgré une jeune Adélaïde les avertissant qu ils mourraient. Les garçons la menacent et entrent quand même dans la maison. Ils vandalisent un peu la maison avec des battes de baseball avant d entrer dans le sous-sol où ils sont tués. En 2011, Vivien et Ben Harmon déménagent de Boston à Los Angeles, après que Vivien a fait une fausse couche et qu il a surpris Ben en train de coucher avec l un de ses étudiants. Leur fille adolescente Violet est mécontente du déménagement. Ils tombent sur le manoir et l agent immobilier Marcy mentionne les précédents propriétaires, un couple homosexuel, mort d un apparent meurtre-suicide. La famille décide d acheter la maison et d y emménager. Dans le grenier, ils découvrent un costume de bondage en latex, qui appartenait vraisemblablement aux anciens propriétaires. Vivien rencontre sa voisine Constance et sa fille Adélaïde atteinte de trisomie. Vivien réembauche également la femme de chambre âgée Moira O Hara qui semble être une jeune femme de chambre séduisante pour Ben. Le soir même, Ben se dispute avec Vivien, essayant de s excuser pour son infidélité. Ensuite, les deux ont des relations sexuelles. Lors de son premier jour d école, Violet est harcelée par Leah et ses amis, qui combattent plus tard Violet. Ben commence des séances de thérapie avec un garçon peut-être psychotique nommé Tate, qui entame une relation avec Violet. Pour aider Violet avec son problème d intimidation, il suggère d effrayer Leah dans la maison. Ben trouve Moira en train de se masturber et il fait la même chose. Ben voit alors un homme brûlé et défiguré le regarder de l extérieur. Quand il va l affronter, il est introuvable. Pendant ce temps, Violet trompe Leah dans le sous-sol en disant qu elle a de la drogue, seulement pour y trouver Tate. Lui et la créature qui a tué les jumeaux en 1978 attaquent Leah, laissant la fille traumatisée. Violet, terrifiée par Tate, lui dit de partir. Plus tard dans la nuit, un homme portant le costume gimp entre dans la chambre de Vivien et a des relations sexuelles avec Vivien, Vivien supposant qu il est Ben. En bas, un Ben somnambule est attiré par le poêle et essaie de se brûler la main, mais Constance l arrête.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Intrus');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season1_American Horror Story'));
$episode->setSynopsis('Un flash-back de 1968 montre que la maison était utilisée comme dortoir pour les étudiants en soins infirmiers. Alors qu elles sont seules à la maison tard dans la nuit, les étudiantes infirmières Maria et Gladys étudient lorsqu un homme sonne à la porte et demande de l aide. Remarquant que l homme saigne de la tête, Maria le laisse entrer et commence à panser ses blessures. Quand elle se rend compte qu il n y a pas de véritable coupure sur sa tête et que l homme simule sa blessure, l homme les attaque tous les deux. Tout d abord, assommant Maria avec un cendrier avant de pousser une Gladys en fuite au sol, la narguant avec une insulte à propos de son poids puis la noyant dans une baignoire à l étage. Maria se réveille et voit l homme qui l oblige à se déshabiller et à porter un uniforme d infirmière. Elle est alors ligotée et poignardée à plusieurs reprises dans le dos. De retour dans le présent, Ben rencontre Tate, qui révèle ses fantasmes sexuels sur Violet. Ben voit une nouvelle patiente, nommée Bianca, qui est fascinée par l histoire des meurtres dans la maison. Il reçoit un appel de son ex-maîtresse et ancienne élève à lui, Hayden, qui lui dit qu elle est enceinte et qu elle a besoin de son soutien tout en se faisant avorter. Constance sent que Vivien est enceinte et Vivien avoue qu elle craint qu il y ait quelque chose qui ne va pas avec le bébé. Constance lui assure que son bébé va bien et avoue que trois de ses quatre enfants sont nés avec une sorte de malformation congénitale. Afin de voir Hayden, Ben ment à Vivien, disant qu il doit se rendre à Boston pour voir un patient qui a tenté de se suicider. Violet révèle à Vivien qu elle est au courant de la grossesse. Cette nuit-là, un trio de passionnés de tueurs en série, Bianca (vu plus tôt par Ben), Fiona et Dallas font irruption dans la maison et capturent Vivien et Violet. Le trio explique son plan pour reconstituer les meurtres de Maria et Gladys au duo. Fiona présente le cendrier utilisé pour frapper Maria. Bianca se demande qui sera qui avant que Fiona ne choisisse Vivien comme Maria et Violet comme Gladys. Sortant les uniformes des infirmières, il y a un conflit entre le groupe lorsque Vivien et Violet refusent de faire partie de leur reconstitution. Après que Fiona a jeté un uniforme à Violet, elle la frappe au visage et tente de s échapper avant de tomber sur Tate, qui lui dit qu elle doit attirer les trois dans le sous-sol. Violet parvient à attirer Fiona au sous-sol. Bianca mange un cupcake avec du sirop d ipéca, que Constance avait fait plus tôt pour Violet, et vomit violemment. Une Bianca maintenant gravement malade encourage Fiona à annuler leur plan et à l emmener à l hôpital. Entrant dans la salle de bain, elle voit quelqu un passer devant la baignoire. Quand elle regarde dans le coin de la douche, personne n est là. Se retournant pour partir, Bianca voit Tate qui balance une hache dans son estomac, la blessant mortellement. Elle marche péniblement dans le couloir, laissant du sang sur les murs et le sol avant de mourir hors écran. Au sous-sol, Fiona rencontre Tate avec Gladys, qui la tue en lui tranchant la gorge. Pendant ce temps, Vivien repousse Dallas et fuit la maison avec Violet. Dallas est tué par Gladys et Maria. Constance, Tate et Moira acceptent de se débarrasser des corps, révélant qu ils veulent que Ben continue à soigner Tate..');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle(' La Maison de l horreur');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season1_American Horror Story'));
$episode->setSynopsis("En 1983, Hugo Langdon, le mari de Constance, commence à faire des avances sexuelles non désirées à une jeune Moira qui répare un lit dans la chambre. Elle continue de le refuser pour garder son emploi. Hugo la jette sur le lit et la viole. Constance les rejoint, interprétant à tort ses avances sur Moira comme consensuelles. En conséquence, une Constance au cœur brisé les tue tous les deux en tirant sur Moira dans les yeux et sur Hugo dans la poitrine. Les finances des Harmons en prennent un coup, rendant le déménagement impossible. Pendant ce temps, Ben s endort lors d un rendez-vous et se réveille dans la cour après avoir creusé un trou, mais sans aucun souvenir. Moira continue de harceler sexuellement Ben et il menace de la renvoyer. Il est incapable de convaincre Vivien des avances sexuelles de Moira, et Moira menace de poursuivre s ils essaient de la renvoyer sans motif valable. Hayden arrive, annonce qu elle garde le bébé et déménage à proximité, et veut que Ben continue leur liaison. Vivien fait une visite en bus des lieux hantés de Los Angeles, après avoir découvert que la maison est en tournée, où l origine de la maison est expliquée. Charles Montgomery, le premier propriétaire de la maison et médecin, avait développé une dépendance à l anesthésie et a commencé à mener des expériences de type Frankenstein. Avec l aide de sa femme, Nora, Charles a commencé à pratiquer des avortements sur de jeunes femmes. Dans le bus, Vivien craint de refaire une fausse couche à cause d un saignement vaginal. Le médecin assure à Vivien que le bébé va bien, mais l informe que le stress du déménagement pourrait provoquer une fausse couche. Ben rencontre Larry, qui demande de l argent. Lorsque Ben rentre chez lui, il s évanouit à nouveau et se réveille au même endroit dans la cour. Alors qu il commence à creuser, Constance l encourage à rester avec la maison et à construire quelque chose à cet endroit..");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Halloween, première partie');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season1_American Horror Story'));
$episode->setSynopsis('Un flashback montre un couple, Chad et Patrick, qui sont propriétaires de la maison en 2010. Chad confronte Patrick à propos de son infidélité. Le Rubber Man apparaît après que Patrick a quitté la pièce et attaque Chad. Patrick rentre dans la pièce et voit le Rubber Man. Larry demande un paiement pour avoir tué Hayden, ce que Ben refuse. Adélaïde est alors percutée par une voiture. Constance tente de l amener sur la pelouse des Harmons avant de mourir, afin qu elle puisse devenir un fantôme, mais échoue. Tate dit à Violet que l Infantata est le fils du Dr Charles Montgomery et de Nora, Charles l ayant ramené à la vie en utilisant des parties d animaux après avoir été démembré. Vivien se rend compte que Ben a envoyé plusieurs SMS à Hayden, mais Ben insiste sur le fait que lui et Hayden sont terminés. Vivien et Ben vont à l hôpital, après que le bébé à naître de Vivien a donné un coup de pied à seulement huit semaines. Le bébé est plus développé qu il ne devrait l être et l infirmière s effondre après l avoir vu. Le soir d Halloween, lorsque les fantômes peuvent quitter la maison, Moira rend visite à sa mère à l hôpital. Elle déconnecte alors sa machine de survie, mais est incapable de continuer avec elle.'); 
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Bienvenue à Briarcliff');
$episode->setNumber(1);
$episode->setSeason($this->getReference('season2_American Horror Story'));
$episode->setSynopsis('En 2012, Teresa et Leo, un couple en lune de miel, explorent le manoir de Briarcliff, un asile psychiatrique abandonné dans le Massachusetts rural. En 1964, Kit Walker s y voit interné, accusé d être le tueur en série que la presse surnomme « Bloody Face ». Kit est certain de son innocence et ses souvenirs suggèrent que les événements survenus sont surnaturels. Dans l asile, Kit se lie d amitié avec Grace, une patiente accusée d avoir assassiné sa famille. La journaliste Lana Winters entre dans Briarcliff dans l espoir de percer à jour les conditions de ses patients et ainsi d assurer une vie meilleure pour elle et sa partenaire, Wendy Peyser, une enseignante. Elle fait face à la tyrannique Sœur Jude, qui la fait interner à cause de son lesbianisme. Une rivalité éclate entre Sœur Jude et le Docteur Arthur Arden, qui utilise la torture et le meurtre dans le but de découvrir une immunité dans le corps humain afin de survivre à une guerre nucléaire. Dans le présent, Teresa et Leo sont attaqués et traqués dans l asile par Bloody Face.');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Exorcisme');
$episode->setNumber(2);
$episode->setSeason($this->getReference('season2_American Horror Story'));
$episode->setSynopsis('Le docteur Oliver Thredson, psychologue, arrive à Briarcliff pour établir un diagnostic pour Kit afin de déterminer si sa santé mentale est assez bonne pour paraître en justice pour les meurtres de Bloody Face. Pendant ce temps, un exorciste est appelé à l asile lorsque le comportement d un adolescent s aggrave ; il semble être possédé par un démon. Le rituel donne à Lana et Grace une chance de s échapper, mais Lana, qui se sent trahie par le fait que Grace veuille que Kit parte avec eux, les empêche finalement de s échapper. L adolescent possédé expose le sombre passé de Sœur Jude qui la hante encore à ce jour : en 1949, alors qu elle conduit alcoolisée, elle renverse une petite fille sur son vélo et la tue. L adolescent meurt quand le démon s échappe de son corps pendant l exorcisme et entre dans celui de Sœur Mary Eunice..');
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('La Tempête');
$episode->setNumber(3);
$episode->setSeason($this->getReference('season2_American Horror Story'));
$episode->setSynopsis("Une violente tempête frappe Briarcliff, ce qui permet à certains patients d'organiser une audacieuse fugue. Le tumultueux passé de Sœur Jude revient la hanter.");
$manager->persist($episode);

$episode = new Episode();
$episode->setTitle('Anne Frank');
$episode->setNumber(4);
$episode->setSeason($this->getReference('season2_American Horror Story'));
$episode->setSynopsis('Une nouvelle patiente prétendant être Anne Frank révèle le passé du docteur Arden. Tout resurgit et se complique lorsque la police se met aussi à enquêter sur lui. Par ailleurs, Kit découvre pourquoi Grace a été admise à Briarcliff. Le docteur Thredson, quant à lui, propose à Lana Winters une thérapie pour inverser sa tendance sexuelle afin de l aider à quitter Briarcliff..');
$manager->persist($episode);
$manager->flush();*/
    }
    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}
