<?php
namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class SeasonFixtures extends Fixture implements DependentFixtureInterface
{ 
    public function load(ObjectManager $manager)
    {


$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Arcane'));
$season->setDescription('Arcane est une série télévisée d animation américano-française dont le scénario prend place dans l univers du jeu vidéo League of Legends.');
$season->setYear(2021);
$this->addReference('season1_Arcane', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('La population entière a été ravagée par une épidémie d origine inconnue, qui est envahie par les morts-vivants. Parti sur les traces de sa femme Lori et de son fils Carl, Rick arrive à Atlanta où, avec un groupe de rescapés, il va devoir apprendre à survivre et à tuer tout en cherchant une solution ou un remède.');
$season->setYear(2010);
$this->addReference('season1_Walking dead', $season);
$manager->persist($season);


$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('Lors de la deuxième saison le groupe de survivants mené par Rick Grimes tente de survivre dans un monde envahi par les rôdeurs, arrivant dans une ferme et découvrant peu à peu des éléments expliquant l épidémie. La famille Greene rejoint le groupe car de nouveaux liens se sont tissés entre certains personnages mais tous ne resteront pas indemnes, leur avenir étant incertain et de plus en plus hostile, dévasté au fil du temps.');
$season->setYear(2011);
$this->addReference('season2_Walking dead', $season);
$manager->persist($season);

//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(3);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('Après l attaque de la ferme des Greene par les morts-vivants, le groupe de Rick Grimes trouve refuge dans une prison infestée par les rôdeurs. De son côté, Andrea, qui erre dans la nature aux côtés de Michonne depuis des mois, fait la connaissance de Philip Blake, alias le Gouverneur, qui dirige la ville fortifiée de Woodbury. Si il parait sympathique au début, l homme se révèle être un dangereux psychopathe. Il tente d attaquer le groupe de Rick et de prendre d assaut la prison, sans succès. Dans un excès de rage, le Gouverneur massacre la quasi-totalité de son armée et prend la fuite.');
$season->setYear(2012);
$this->addReference('season3_Walking dead', $season);
$manager->persist($season);
//src/DataFixtures/SeasonFixtures.php
$season = new Season();
$season->setNumber(4);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('Après avoir retrouvé un semblant de vie au sein de la prison, le groupe de Rick, ayant recueilli des survivants de Woodbury, se retrouve confronté à une nouvelle épidémie. En effet, un virus mortel se répand au sein du refuge et décime plusieurs des survivants qui s y trouvent. Le Gouverneur, en cavale après les événements de la saison précédente, rejoint un autre groupe et se prépare à attaquer la prison à nouveau. Cependant, ce dernier est vaincu mais le groupe de Rick n a d autre choix que de prendre la fuite ; la prison tombe aux mains d une horde de rôdeurs. Éparpillés, Rick et les autres tentent de rejoindre une nouvelle destination appelée, le Terminus. Mais celle-ci risque de ne pas être ce à quoi ils s attendaient.');
$season->setYear(2013);
$this->addReference('season4_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(5);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('La cinquième saison commence très peu de temps après l enfermement du groupe de Rick dans le wagon A au Terminus. Ils commencent à construire des armes à partir de leurs vêtements, leurs ceintures et du bois. Le groupe se prépare à attaquer ses ravisseurs à son entrée dans le conteneur, mais rien ne se passe comme prévu. Après les terribles événements, le groupe de survivants reprend sa route, les menant à l église Sainte-Sarah de Gabriel. Ils seront confrontés au retour du groupe cannibale de Gareth. Ils vont aussi devoir aller au Grady Memorial Hospital où Beth est retenue. Plus tard, ils découvrent la nouvelle communauté d Alexandria, dirigée par Deanna, qui va changer considérablement leur mode de vie.');
$season->setYear(2014);
$this->addReference('season5_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(6);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('La sixième saison reprend juste après l exécution de Pete. Devenus membres de la communauté d Alexandria, Rick et ses coéquipiers vont devoir faire face à des agressions venant aussi bien de l extérieur que de l intérieur. Ils seront alors attaqués par un groupe particulièrement barbare et sanguinaire lors de la première moitié de la saison : les Wolves. La deuxième moitié de la saison révèle la présence de deux autres communautés : la Colline, qui ressemble un peu à Alexandria et les Sauveurs, principaux antagonistes qui obligent la Colline à leur fournir la moitié de leurs ressources. Le groupe des Sauveurs, sauvage et brutal est dirigé par le mystérieux et terrifiant Negan. Celui-ci menace la vie de Rick et de ses compagnons, mais ces derniers résistent et parviennent à en éliminer un certain nombre. Cependant, Negan et les Sauveurs arrivent à les piéger et à les capturer. Et afin de les asservir, il décide de les punir par l exécution d un des membres du groupe de Rick, en représailles pour les Sauveurs qui ont été massacrés.');
$season->setYear(2015);
$this->addReference('season6_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(7);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('La septième saison reprend à partir des événements précédents de la sixième. Negan insuffle la peur et la crainte dans l esprit de Rick et son groupe après avoir exécuté Glenn et Abraham, plus la rébellion de Daryl, qui est par la suite emprisonné. Le groupe, alors amputé de trois membres, doit répondre aux besoins et ordres du chef des Sauveurs sous peine de nouvelles représailles. Après la rébellion de Rosita face à Negan, il exécute Olivia et Spencer puis enlève Eugene. Alexandria, qui est désormais menée par Rick, s associe à la Colline, menée par Maggie, et au Royaume, mené par le roi Ezekiel et sa tigresse nommée Shiva, pour contrer Negan et le reste des Sauveurs.');
$season->setYear(2016);
$this->addReference('season7_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(8);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('À la suite de l alliance menée par Rick entre les trois communautés contre Negan et les Sauveurs : Alexandria, la Colline et le Royaume s unissent pour leur livrer une véritable guerre. Rick, Maggie et Ezekiel vont donc mener leurs troupes dans des batailles sans pitié afin d éradiquer les Sauveurs de la carte mais certains feront face à des enjeux moraux et la guerre pourrait ne pas se dérouler comme le voulait Rick. La guerre totale entre Rick et Negan est rendue au point de non-retour. Un duel entre Rick et Negan est inévitable. Lors de cet affrontement, Rick gagne en égorgeant Negan mais il ne le tue pas et choisit de l enfermer en cellule pour lui faire la morale. En faisant ce choix, il rend un dernier hommage aux conseils de son fils Carl, qui est quant à lui mort, ne pouvant profiter de la fin de cette guerre. Pourtant, Maggie se laisse ronger par la vengeance, le traumatisme de la mort de Glenn marque son attitude; elle n accepte pas le repentir des Sauveurs, et fomente leur fin.');
$season->setYear(2017);
$this->addReference('season8_Walking dead', $season);
$manager->persist($season);


$season = new Season();
$season->setNumber(9);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('Un an et demi après la terrible guerre qui a opposé l Alliance menée par Rick et les Sauveurs menés par Negan, la vie semble s être apaisée et un semblant de civilisation commence à renaître grâce aux travaux de Rick. Mais la cohabitation avec les Sauveurs reste remplie de tensions et certains ont du mal à s y habituer. Tandis que les tensions grandissent de plus en plus, personne n aperçoit le véritable danger qui arrive et qui pourrait changer leur vie à tout jamais. Les Chuchoteurs menés par Alpha arrivent.');
$season->setYear(2018);
$this->addReference('season9_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(10);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('Quelques mois après les événements décrits dans la saison précédente, les habitants d Alexandria et de la Colline vivent selon les nouvelles règles d Alpha. La paranoïa est présente et certains ont du mal à respecter les frontières imposées par les Chuchoteurs surtout après la mort de dix des leurs. Lorsqu un satellite s écrase en territoire Chuchoteurs, les protagonistes n ont pas d autre choix que de franchir la frontière pour éteindre le feu. Une décision qui ne va pas plaire à Alpha, qui va en profiter pour agrandir son territoire. La guerre contre les Chuchoteurs n a jamais été aussi proche et il se pourrait que les héros trouvent des alliés inattendus. Alpha et Bêta pensent être la fin du monde et comptent bien le prouver.');
$season->setYear(2019);
$this->addReference('season10_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(11);
$season->setProgram($this->getReference('program_Walking dead'));
$season->setDescription('L histoire se concentre sur la rencontre du groupe avec le Commonwealth, un vaste réseau de communautés disposant d un équipement de pointe et de plus de cinquante mille survivants vivant dans différentes colonies. Avec également une confrontation du groupe avec les Faucheurs, une mystérieuse faction de survivants hostiles qui ont attaqué et pris Meridian, l ancienne colonie de Maggie.');
$season->setYear(2020);
$this->addReference('season11_Walking dead', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Jujutsu Kaisen'));
$season->setDescription('SAISON 1');
$season->setYear(2021);
$this->addReference('season1_Jujutsu Kaisen', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Jujutsu Kaisen'));
$season->setDescription('SAISON 2');
$season->setYear(2023);
$this->addReference('season2_Jujutsu Kaisen', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Gen V'));
$season->setDescription('Des jeunes gens avec des pouvoirs sont mis à rude épreuve et subissent de nombreux tests au sein de la Godolkin University School of Crimefighting tenue par Vought International');
$season->setYear(2023);
$this->addReference('season1_Gen V', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_Good Omens'));
$season->setDescription('l ange Aziraphale et le démon Rampa, après 6 000 ans de vie sur la Terre, ne se résignent pas à la venue imminente de l Apocalypse. Meilleurs ennemis du monde, ils se liguent contre leurs autorités supérieures et tentent d influencer le cours apparemment inéluctable des événements en éduquant l Antéchrist chacun à sa manière. Mais si Dieu a un plan, il est ineffable');
$season->setYear(2019);
$this->addReference('season1_Good Omens', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_Good Omens'));
$season->setDescription('ils doivent faire face à la venue d un Gabriel amnésique et dévêtu. Autant le Paradis que l Enfer souhaitent le récupérer. Cet incident aura des conséquences sur la relation entre Arizaphale et Rampa.');
$season->setYear(2023);
$this->addReference('season2_Good Omens', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre I');
$season->setYear(2005);
$this->addReference('season1_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre II');
$season->setYear(2006);
$this->addReference('season2_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(3);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre III');
$season->setYear(2007);
$this->addReference('season3_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(4);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre IV');
$season->setYear(2008);
$this->addReference('season4_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(5);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre V');
$season->setYear(2009);
$this->addReference('season5_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(6);
$season->setProgram($this->getReference('program_kaamelott'));
$season->setDescription(' Livre VI');
$season->setYear(2010);
$this->addReference('season6_kaamelott', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(1);
$season->setProgram($this->getReference('program_American Horror Story'));
$season->setDescription('Murder House');
$season->setYear(2011);
$this->addReference('season1_American Horror Story', $season);
$manager->persist($season);

$season = new Season();
$season->setNumber(2);
$season->setProgram($this->getReference('program_American Horror Story'));
$season->setDescription('Asylum');
$season->setYear(2012);
$this->addReference('season2_American Horror Story', $season);
$manager->persist($season);
$manager->flush();
    }
    public function getDependencies()
    {
        return [
            ProgramFixtures::class,
        ];
    }

}