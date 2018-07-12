<?php

use Illuminate\Database\Seeder;

class TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            [
                'content_en' => 'Know-how and energy are the keys to the success of Urbantech.

                After the development of a whole range of competences in the ICT and engineering world, with the aid of consultants and multi-disciplinary experts, our passion is to overcome your technological, industrial and energetic challenges.
                
                Being independent and reliable, Urbantech focuses on its effectiveness and your long-term competitivity, by using as much possibilities as possible created by a world in constant and fast mutation.',
                'content_fr' => "Expertise et dynamisme sont les clés du succès d'Urbantech.

                Après avoir développé avec l'aide de consultants et d'experts pluridisciplinaires toute une série de compétences dans le domaine de l'ICT et de l'ingénierie nous nous passionnons à relever vos défis tant technologiques qu'industriels et énergétiques.
                
                De part son indépendance et sa fiabilité, Urbantech s'engage, pour tirer le meilleur parti des opportunités créées par un monde en constante et rapide mutation, sur l'efficacité de ses prestations et votre compétitivité à long terme.
                ",
                'content_nl' => 'De sleutels tot het succes van Urbantech zijn expertise en dynamisme.

                Na het opbouwen van een hele reeks competenties in het domein van de ICT en engineering, met behulp van consultants en multidisciplinaire experts, streven wij ernaar om u te helpen met het overwinnen van uw technologische, industriële en energetische uitdagingen.
                
                Met onafhankelijkheid en betrouwbaarheid, engageert Urbantech zich om de mogelijkheden, gecreëerd door een wereld in voortdurende en snelle evolutie, toe te passen op de doeltreffendheid van uw onderneming en uw concurrentievermogen op lange termijn.',
                'position' => "home_description"
            ],
            [
                'content_en' => "Urbantech, One company five Business units",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title1",
            ],
            [
                'content_en' => "ITC / engineering",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title2",
            ],
            [
                'content_en' => "Operational Resources",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title3",
            ],
            [
                'content_en' => "Afford Consulting",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title4",
            ],
            [
                'content_en' => "Afford Fleet Expert",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title5",
            ],
            [
                'content_en' => "2Concept",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_title6",
            ],
            [
                'content_en' => "Credentialed and experienced professionals",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_subtitle2",
            ],
            [
                'content_en' => "Quickly providing you with hands-on high qualified professionals",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_subtitle3",
            ],
            [
                'content_en' => "Improve your process, organisation & financial performance",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_subtitle4",
            ],
            [
                'content_en' => "Improve your process, organisation & financial performance",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_subtitle5",
            ],
            [
                'content_en' => "Create Brand and increase your communication",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "home_list_subtitle6",
            ],
            [
                'content_en' => "Knowledge transfer",
                'content_fr' => "Transfert de connaissance",
                'content_nl' => "Kennisoverdracht",
                'position' => "values_section1_title",
            ],
            [
                'content_en' => "Obviously, we don't consider you as a mere client, but as a partner, with whom we want to build the world of tomorrow.

                This is why we share and justify all our achievements, so that you can keep a clear view on the realisations.",
                'content_fr' => "Naturellement nous ne vous considérons pas comme un simple Client, mais plutôt comme un partenaire avec lequel nous souhaitons construire le monde de demain.

                C'est pourquoi nous partageons et justifions l'ensemble de nos prestations afin que vous gardiez une vue claire sur les réalisations.",
                'content_nl' => "Uiteraard beschouwen wij u niet als eenvoudige klant, maar als partner, waarmee wij willen bouwen aan de wereld van morgen.

                Net daarom delen en verantwoorden we het geheel van onze verrichtingen, zodat u een duidelijk beeld kan behouden van de verwezenlijkingen.",
                'position' => "values_section1_text",
            ],
            [
                'content_en' => "Personnel and competences",
                'content_fr' => "Personnes & Compétences",
                'content_nl' => "Personen en competenties",
                'position' => "values_section2_title",
            ],
            [
                'content_en' => "Essential elements in the results to be reached and for the cohesion of the company.

                Urbantech invests a large part of its energy in the search for and development of its profiles, to be able to interact quickly and effectively with you, as well as with the different components of our structure.
                
                Besides the essential elements, such as training, knowledge of languages and acquired experiences, other competencies are taken into consideration in the process of recruiting talents: ",
                'content_fr' => "Eléments essentiels dans les résultats à fournir et pour la cohérence de l'entreprise.

                Urbantech accorde une importante part de son énergie à la recherche et au développement des profils pouvant interagir rapidement et efficacement tant avec vous qu'avec les différentes composantes de notre structure.
                
                Outre les éléments objectifs, comme la formation, les langues et les expériences acquises, d'autres compétences sont prises en compte tout au long du processus d'engagement des talents :",
                'content_nl' => "Essentiële elementen in de te behalen resultaten en voor de samenhang van de onderneming.

                Urbantech investeert een groot deel van z'n energie in het zoeken en uitbouwen van profielen om snel en doeltreffend met u te kunnen samenwerken met de verschillende componenten van onze structuur.
                
                Buiten de kernelementen, zoals de opleiding, de talenkennis en de verworven ervaringen, wordt er ook rekening gehouden met andere vaardigheden in het aanwervingsproces van talenten:",
                'position' => "values_section2_text",
            ],
            [
                'content_en' => "Behavioural competencies",
                'content_fr' => "Les compétences comportementales",
                'content_nl' => "gedragsvaardigheden",
                'position' => "values_section2_list_item_1",
            ],
            [
                'content_en' => "The capacity to communicate clearly and assertively",
                'content_fr' => "La capacité à communiquer clairement et de façon assertive",
                'content_nl' => "het vermogen om duidelijk en assertief te communiceren",
                'position' => "values_section2_list_item_2",
            ],
            [
                'content_en' => "Client-orientation",
                'content_fr' => "L'orientation Client",
                'content_nl' => "klantoriëntatie",
                'position' => "values_section2_list_item_3",
            ],
            [
                'content_en' => "Innovative capacities",
                'content_fr' => "La capacité d'innovation",
                'content_nl' => "vermogen tot innovatie",
                'position' => "values_section2_list_item_4",
            ],
            [
                'content_en' => "Services",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "values_section3_title",
            ],
            [
                'content_en' => "The concept of service has to be one of our values, since Urbantech's mission is to be able to reply to your specific needs and to be able to give you the solution.

                Therefore we are organised in such a way as to follow every activity by our consultants and experts so we can ensure the correct course and follow-up of your projects.
                
                Not only reactive, Urbantech also analyses, researches and proposes new perspectives for your needs in their context and the mission at hand.
                
                We intervene at your side as real consultants with specific solutions adapted to your needs.",
                'content_fr' => "La notion de service se doit de faire partie de nos valeurs, car la mission principale d'Urbantech est de répondre à vos besoins spécifiques et de vous apporter la meilleure solution.

                Nous sommes donc organisé de manière à suivre de près chaque activité effectuée par nos consultants et experts afin de s'assurer du bon déroulement de vos projets et du suivi de ceux-ci.
                
                Pas seulement réactif, URBANTECH, en fonction du contexte et de la mission, analyse, recherche et propose de nouvelles perspectives à vos besoins.
                
                Nous intervenons auprès de vous en tant que réel conseillé avec des solutions concrètes et personnalisé à vos besoins.",
                'content_nl' => "Het begrip 'Services' moet deel uitmaken van onze waarden, gezien de belangrijkste missie van Urbantech: tegemoetkomen aan uw specifieke noden en u de oplossing aanreiken.

                We zijn dus zo georganiseerd dat we elke activiteit, die door onze consultants uitgevoerd wordt, van zeer dichtbij volgen, zodat we u kunnen verzekeren van het goede verloop van uw projecten en de opvolging hiervan.
                
                URBANTECH is niet alleen reactief, want het analyseert, onderzoekt en stelt u nieuwe invalshoeken voor op uw noden, in functie van de context en de missie.
                
                We helpen u als persoonlijke raadgever met concrete oplossingen aangepast aan uw behoeften.",
                'position' => "values_section3_text",
            ],
            [
                'content_en' => "Flexibility",
                'content_fr' => "Flexibilité",
                'content_nl' => "Flexibiliteit",
                'position' => "values_section4_title",
            ],
            [
                'content_en' => "Our capacity to be able to quickly mobilise talents makes us the perfect partner.

                Unforeseen circumstances and changes in objectives, due to current affairs, both through internal and external events, do not change our commitment to work on your long-term competitivity and to offer you the best solution for your needs.",
                'content_fr' => "Notre capacité à mobiliser rapidement des talents fait d'Urbantech un partenaire idéal.

                Les imprévus et la réadaptation des objectifs en fonction de l'actualité, des évènements internes ou externes à votre entreprise ne modifient en rien notre engagement de travailler sur votre compétitivité à long terme et d'apporter la meilleure solution à vos besoins.
                ",
                'content_nl' => "",
                'position' => "values_section4_text",
            ],
            [
                'content_en' => "Based on a detailed analysis of your needs, Urbantech takes responsibility of some or all of the services you wish to outsource by soliciting the competencies of computer experts (ICT), engineers or both.	",
                'content_fr' => "Sur base d'une analyse détaillée de vos besoins, Urbantech prend en charge une partie ou l'ensemble des prestations que vous souhaitez externaliser et requérant des compétences d'informaticiens (ICT), d'ingénieurs (Engineering) ou les deux prises ensembles.	
                ",
                'content_nl' => "Ons vermogen tot snel mobiliseren van talenten, maakt van Urbantech de ideale partner.

                Onvoorziene gebeurtenissen en aanpassingen van objectieven in functie van de realiteit, van interne of externe gebeurtenissen, veranderen niets aan ons engagement om te werken aan uw competitiviteit op lange termijn en om u de beste oplossingen te brengen voor uw noden.",
                'position' => "ICT_text",
            ],
            [
                'content_en' => "ICT",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "ICT_section1_title",
            ],
            [
                'content_en' => "Unanimously considered to be one of the main motors behind the competitivity of companies, ICT plays a very important part in any organisation, be it simply for communicative needs or for the more complex management of large-scale industrial projects.

                Urbantech offers solutions in the different branches of information technology.
                
                To be able to independently search for the best solution, Urbantech is not tied to any particular technology, contractually nor commercially.
                
                Therefore, the range of our achievements remains quite big: ",
                'content_fr' => "Considéré unanimement comme étant un des principal moteur de compétitivité des entreprises, l'ICT joue un rôle essentiel dans une organisation, que ce soit simplement pour des besoins de communication ou pour la gestion plus complexe de projets industriels d'envergures.

                Urbantech vous apporte une solution dans les différentes branches liées aux technologies de l'information.
                
                Pour des raisons d'indépendance par rapport à la recherche de la meilleure solution, Urbantech n'est lié ni contractuellement ni commercialement à une technologie particulière.
                C'est pourquoi l'aperçu des prestations pouvant être réalisées reste généraliste : ",
                'content_nl' => "Gezien als een van de belangrijkste motoren van de bedrijfscompetitiviteit, speelt ICT een essentiële rol in een organisatie, zij het alleen voor de nood aan communicatie of voor het complexere beheer van projecten van industriële omvang.

                Urbantech levert u een oplossing in de verscheidene branches gelinkt aan de informatietechnologie.
                
                Om totaal onafhankelijk te kunnen zijn in de zoektocht naar de beste oplossing, is Urbantech noch contractueel, noch commercieel verbonden aan een bepaalde technologie.
                
                Vandaar dat het overzicht van realiseerbare projecten zeer algemeen blijft: ",
                'position' => "ICT_section1_text",
            ],
            [
                'content_en' => "Networks and telecommunication",
                'content_fr' => "Réseaux informatiques et télécommunication",
                'content_nl' => "informaticanetwerken en telecommunicatie",
                'position' => "ICT_section1_list_item_1",
            ],
            [
                'content_en' => "Security and data protection",
                'content_fr' => "Sécurisation et protection des données",
                'content_nl' => "bescherming en beveiliging van data",
                'position' => "ICT_section1_list_item_2",
            ],
            [
                'content_en' => "Development of software on different technologies",
                'content_fr' => "Développement de logiciels sur différentes technologies",
                'content_nl' => "ontwikkeling van software of verschillende technologieën",
                'position' => "ICT_section1_list_item_3",
            ],
            [
                'content_en' => "Delivery and installation of software",
                'content_fr' => "Fourniture et installation de logiciels",
                'content_nl' => "aanlevering en installatie van software",
                'position' => "ICT_section1_list_item_4",
            ],
            [
                'content_en' => "Electronical media",
                'content_fr' => "Médias électroniques",
                'content_nl' => "elektronische media",
                'position' => "ICT_section1_list_item_5",
            ],
            [
                'content_en' => "ENGINEERING",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "ICT_section2_title",
            ],
            [
                'content_en' => "In the face of ever-growing challenges, a bigger need for competitivity and non-stop evolving technology, your company has to adapt, innovate and review its project investments continuously.

                Urbantech helps you with the application of your project investments, as well as its maintenance and evolution.
                
                During the entire cycle of preparation, implementation and launch of your project, Urbantech and the quality of its competencies are the best trumps to attain performing and durable results.
                
                Without being complete, the following are some competencies developed at Urbantech : ",
                'content_fr' => "Face à des défis de plus en plus importants, des besoins de compétitivités grandissants et des technologies sans cesse en progression, votre entreprise doit systématiquement s'adapter, innover et revoir ses projets d'investissements.

                Urbantech vous assiste à la mise en œuvre de vos projets d'investissement, au suivi nécessaire à leurs maintiens et à leurs évolutions.
                
                Pendant tout le cycle de préparation, d'implémentation, de lancement de votre projet, l'indépendance d'Urbantech et la qualité des compétences mises à votre disposition sont les meilleurs atouts à l'atteinte de résultats performants et durables.
                
                Sans être exhaustif, les compétences développées au sein d'Urbantech sont les suivantes : ",
                'content_nl' => "Tegenover steeds belangrijkere uitdagingen, stijgende noden aan competitiviteit en een technologie die constant evolueert, moet uw bedrijf zich voortdurend aanpassen en vernieuwen, alsook de projectinvesteringen herzien.

                Urbantech staat u bij voor de toepassing van uw projectinvesteringen, met de nodige opvolging van het onderhoud en de evolutie.
                
                Tijdens de hele cyclus van voorbereiding, implementatie en lancering van uw project, zijn de onafhankelijkheid van Urbantech en de kwaliteit van de ter uwer beschikking gestelde competenties uw belangrijkste troeven tot het behalen van performante en duurzame resultaten.
                
                Zonder volledig te willen zijn, zijn dit bekwaamheden die ontwikkeld zijn binnen Urbantech: 
                ",
                'position' => "ICT_section2_text",
            ],
            [
                'content_en' => "Renewable energy",
                'content_fr' => "Energies renouvelables",
                'content_nl' => "hernieuwbare energie",
                'position' => "ICT_section2_list_item_1",
            ],
            [
                'content_en' => "Electrical transport",
                'content_fr' => "Le transport électrique",
                'content_nl' => "elektrisch transport",
                'position' => "ICT_section2_list_item_2",
            ],
            [
                'content_en' => "Geotechnics",
                'content_fr' => "La géotechnique",
                'content_nl' => "geotechniek",
                'position' => "ICT_section2_list_item_3",
            ],
            [
                'content_en' => "Nuclear industry",
                'content_fr' => "Le nucléaire",
                'content_nl' => "nucleaire industrie",
                'position' => "ICT_section2_list_item_4",
            ],
            [
                'content_en' => "Automation systems",
                'content_fr' => "Les systèmes d'automation",
                'content_nl' => "automatisatiesystemen",
                'position' => "ICT_section1_list_item_5",
            ],
            [
                'content_en' => "On top of the fields of expertise present in the company, Urbantech also recruits specific profiles for your different projects, be it limited in time, or to cover bigger long-term needs in your structure.

                This research is also possible on a more international level, to be able to perfectly cover your needs.
                
                Below you can find an incomplete list of the competencies that Urbantech can deliver for you",
                'content_fr' => "Urbantech, en plus des domaines d'expertises présentes dans l'entreprise, est à même de rechercher pour vous des profils spécifiques à vos différents business que ce soit pour un projet spécifique et limité dans le temps ou pour couvrir des besoins plus larges et à longs termes dans votre structure.

                Cette recherche peut également se faire à un niveau plus international, l'objectif étant de couvrir parfaitement vos besoins.
                
                Ci-dessous une liste non exhaustive des compétences qu'Urbantech peut vous fournir",
                'content_nl' => "Bovenop de vermelde domeinen van expertise, is Urbantech er ook om voor u specifieke profielen te zoeken in uw verschillende bedrijfstakken, zij het voor een specifiek tijdelijk project of om grotere noden op langere termijn in uw structuur op te vullen.

                Deze zoektocht kan ook op een meer internationaal niveau gebeuren, waarbij het objectief blijft om uw behoeften te dekken.
                
                Hieronder vind u een lijst van bekwaamheden, zonder volledig te willen zijn, waarmee Urbantech u van dienst kan zijn:",
                'position' => "resources_text",
            ],
            [
                'content_en' => "Administrative",
                'content_fr' => "Administratifs",
                'content_nl' => "Administratief personeel",
                'position' => "resources_section1_title",
            ],
            [
                'content_en' => "Financiers",
                'content_fr' => "",
                'content_nl' => "Fianciële profielen",
                'position' => "resources_section1_list_item_1",
            ],
            [
                'content_en' => "Fiscalistes",
                'content_fr' => "",
                'content_nl' => "Fiscalisten",
                'position' => "resources_section1_list_item_2",
            ],
            [
                'content_en' => "Accountants trainers",
                'content_fr' => "Comptables",
                'content_nl' => "Boekhoudkundigen",
                'position' => "resources_section1_list_item_3",
            ],
            [
                'content_en' => "Engineers",
                'content_fr' => "Ingénieurs",
                'content_nl' => "Ingenieurs",
                'position' => "resources_section2_title",
            ],
            [
                'content_en' => "Civil engineers",
                'content_fr' => "Civils",
                'content_nl' => "Burgerlijk ingenieur",
                'position' => "resources_section2_list_item_1",
            ],
            [
                'content_en' => "Commercial engineers",
                'content_fr' => "Commerciaux",
                'content_nl' => "Commerciële ingenieur",
                'position' => "resources_section2_list_item_2",
            ],
            [
                'content_en' => "Industrial engineers",
                'content_fr' => "Industriels",
                'content_nl' => "Industrieel ingenieur",
                'position' => "resources_section2_list_item_3",
            ],
            [
                'content_en' => "Experts",
                'content_fr' => "",
                'content_nl' => "Experten",
                'position' => "resources_section3_title",
            ],
            [
                'content_en' => "Civic experts",
                'content_fr' => "Urbanistiques",
                'content_nl' => "Stedelijke",
                'position' => "resources_section3_list_item_1",
            ],
            [
                'content_en' => "Infrastructure experts",
                'content_fr' => "Infrastructure",
                'content_nl' => "Infrastructuur",
                'position' => "resources_section3_list_item_2",
            ],
            [
                'content_en' => "Experts in stabilisation of lands",
                'content_fr' => "Stabilisation de sols",
                'content_nl' => "Bodemstabilisatie",
                'position' => "resources_section3_list_item_3",
            ],
            [
                'content_en' => "Experts in stabilisation of buildings",
                'content_fr' => "Bâtiments",
                'content_nl' => "Gebouwen",
                'position' => "resources_section3_list_item_4",
            ],
            [
                'content_en' => "Lasting developments",
                'content_fr' => "Développements durables",
                'content_nl' => "Duurzame ontwikkelingen",
                'position' => "resources_section3_list_item_5",
            ],
            [
                'content_en' => "Computer experts",
                'content_fr' => "Informaticiens",
                'content_nl' => "Informatici",
                'position' => "resources_section4_title",
            ],
            [
                'content_en' => "Network",
                'content_fr' => "Réseaux",
                'content_nl' => "Netwerken",
                'position' => "resources_section4_list_item_1",
            ],
            [
                'content_en' => "Architecture",
                'content_fr' => "Architectures",
                'content_nl' => "Architectuur",
                'position' => "resources_section4_list_item_2",
            ],
            [
                'content_en' => "Security of information",
                'content_fr' => "Sécurité informatique",
                'content_nl' => "Computer security",
                'position' => "resources_section4_list_item_3",
            ],
            [
                'content_en' => "ERP",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "resources_section4_list_item_4",
            ],
            [
                'content_en' => "Software development",
                'content_fr' => "Développements de logiciels",
                'content_nl' => "Software ontwikkelingen",
                'position' => "resources_section4_list_item_5",
            ],
            [
                'content_en' => "General information",
                'content_fr' => "Informations générales",
                'content_nl' => "Algemene informatie",
                'position' => "contact_section1_title",
            ],
            [
                'content_en' => "URBANTECH",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "contact_name",
            ],
            [
                'content_en' => "Rue des vétérinaires 45",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "contact_street",
            ],
            [
                'content_en' => "1070 Brussels",
                'content_fr' => "1070 Bruxelles",
                'content_nl' => "Brussel",
                'position' => "contact_city",
            ],
            [
                'content_en' => "Belgium",
                'content_fr' => "Belgique",
                'content_nl' => "België",
                'position' => "contact_country",
            ],
            [
                'content_en' => "02 411 02 22",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "contact_phone",
            ],
            [
                'content_en' => "02 378 27 81",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "contact_fax",
            ],
            [
                'content_en' => "contact@urbantech.be",
                'content_fr' => "",
                'content_nl' => "",
                'position' => "contact_email",
            ],
            [
                'content_en' => "Contact us",
                'content_fr' => "Nous contacter",
                'content_nl' => "Contact ons",
                'position' => "contact_section2_title",
            ],
            [
                'content_en' => "Title",
                'content_fr' => "Civilité",
                'content_nl' => "Aanspreekvorm",
                'position' => "contact_section2_preffix",
            ],
            [
                'content_en' => "First Name",
                'content_fr' => 'Nom',
                'content_nl' => "Naam",
                'position' => "contact_section2_first_name",
            ],
            [
                'content_en' => "Last Name",
                'content_fr' => "Prénom",
                'content_nl' => "Voornaam",
                'position' => "contact_section2_last_name",
            ],
            [
                'content_en' => "E-mail",
                'content_fr' => "Mail",
                'content_nl' => "Mail",
                'position' => "contact_section2_email",
            ],
            [
                'content_en' => "firm",
                'content_fr' => "Entreprise",
                'content_nl' => "Bedrijf",
                'position' => "contact_section2_firm",
            ],
            [
                'content_en' => "Object",
                'content_fr' => "Objet",
                'content_nl' => "Onderwerp",
                'position' => "contact_section2_subject",
            ],
            [
                'content_en' => "Message",
                'content_fr' => "",
                'content_nl' => "Bericht",
                'position' => "contact_section2_message",
            ],


            
            

            
            


        ]);
    }
}
