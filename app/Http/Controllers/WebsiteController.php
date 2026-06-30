<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\ApplicantResume;
use App\Mail\ContactMessageMail;
use App\Mail\ApplicantResumeMail;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    // return website home page
    public function indexPage()
    {
        $projects = array(
            array(
                "image" => "assets/img/projects/1-Museum.webp",
                "category" => "Landmark",
                "title" => "Bangabandhu Military Museum",
                "shortDes" => "Bangladesh Military Museum is a military museum of Bangladesh. This is controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka.",
                "pageLink" => "#",
                "cardClass" => "two",

            ),
            array(
                "image" => "assets/img/projects/2-Bashundhara_city.webp",
                "category" => "Landmark",
                "title" => "Bashundhara City Shopping Mall",
                "shortDes" => "Bashundhara City is a shopping mall in Dhaka. The mall is located in Pantha path, near Kawran Bazar, and was opened to the public on 6 August 2004.",
                "pageLink" => route('website.project.single', 'bashundhara-city-shopping-mall'),
                "cardClass" => "two",
            ),
            array(
                "image" => "assets/img/projects/3-BAFA.webp",
                "category" => "Landmark",
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "shortDes" => "Bangladesh Air Force Academy is a training and education academy which provides initial training to all men and women who are prepar-ing to be officers in the Bangladesh Air Force.",
                "pageLink" => route('website.project.single', 'bangladesh-air-force-academy'),
                "cardClass" => "two",
            ),
            array(
                "image" => "assets/img/projects/111-SA_Residence.webp",
                "category" => "Residential",
                "title" => "SA Residence",
                "shortDes" => "SA Residence is one of the most prominant residential project in our country which is widely known all over the world for its unique green architecture. This project was featured in top architectural publishers all around the world.",
                "pageLink" => route('website.project.single', 'sa-residence'),
                "cardClass" => "three",
            ),
            array(
                "image" => "assets/img/projects/8-renaissance_hotel.webp",
                "category" => "Residential",
                "title" => "Renaissance Hotel",
                "shortDes" => "Renaissance Dhaka Gulshan Hotel has a restaurant, outdoor swimming pool, a fitness center and bar in Dhaka. Boasting family rooms, this property also provides guests with a sun terrace.",
                "pageLink" => '#',
                "cardClass" => "three",
            ),
            array(
                "image" => "assets/img/projects/4-Shadhinata-tower.webp",
                "category" => "Commercial",
                "title" => "Shadhinata Tower",
                "shortDes" => "A recently developed multi stored building in Dhaka with modern architectural beauty. Specially it appearance looks amazing due to inbuilt colorful automatic lighting system, which enhance the appearance of the building.",
                "pageLink" => "#",
                "cardClass" => "four",
            ),
            array(
                "image" => "assets/img/projects/5-Rupayan.webp",
                "category" => "Commercial",
                "title" => "Rupayan Trade Center",
                "shortDes" => "Rupayan Trade Center. Located at 114 Kazi Nazrul Islam Ave, Banglamotor Dhaka-1000",
                "pageLink" => "#",
                "cardClass" => "four",
            ),
        );

        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );

        $testimonials = array(
            array(
                "authorImage" => "assets/img/about/client-1.jpg",
                "authorName" => "Jainal Abedin",
                "authorDesignation" => "House Owner",
                "authorReview" => "A clear reflection of quality and professionalism. Thank you to the entire Dtech group team who put in their effort to make this happen. It is an excellent work and it’s a clear reflection of your quality and professionalism.",
            ),
            array(
                "authorImage" => "assets/img/about/client-2.jpg",
                "authorName" => "Sajjad Hossain",
                "authorDesignation" => "Commercial Building Owner",
                "authorReview" => "DTech Corporation always kept us informed. There was always someone on the end of the phone and they were happy to pop over and see us if we needed them to which was a great comfort.",
            ),
            array(
                "authorImage" => "assets/img/about/client-3.jpg",
                "authorName" => "Kabirul Islam",
                "authorDesignation" => "Residential Building Owner",
                "authorReview" => "Great service, and very responsive to any questions or additional services needed. Work was completed ahead of schedule and quality of work exceeded expectations.",
            ),
        );
        return view('website.home', compact('projects', 'clients', 'testimonials'));
    }

    // return website about page
    public function aboutPage()
    {
        $testimonials = array(
            array(
                "authorImage" => "assets/img/about/client-1.jpg",
                "authorName" => "Jainal Abedin",
                "authorDesignation" => "House Owner",
                "authorReview" => "A clear reflection of quality and professionalism. Thank you to the entire Dtech group team who put in their effort to make this happen. It is an excellent work and it’s a clear reflection of your quality and professionalism.",
            ),
            array(
                "authorImage" => "assets/img/about/client-2.jpg",
                "authorName" => "Sajjad Hossain",
                "authorDesignation" => "Commercial Building Owner",
                "authorReview" => "DTech Corporation always kept us informed. There was always someone on the end of the phone and they were happy to pop over and see us if we needed them to which was a great comfort.",
            ),
            array(
                "authorImage" => "assets/img/about/client-3.jpg",
                "authorName" => "Kabirul Islam",
                "authorDesignation" => "Residential Building Owner",
                "authorReview" => "Great service, and very responsive to any questions or additional services needed. Work was completed ahead of schedule and quality of work exceeded expectations.",
            ),
        );

        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );
        return view('website.about', compact('testimonials', 'clients'));
    }

    // return website services page
    public function servicesPage()
    {
        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );

        return view('website.services', compact('clients'));
    }
    



    // return website projects page
    public function projectsPage()
    {
        $projects = array(
            array(
                "image" => "assets/img/projects/1-Museum.webp",
                "category" => "Landmark",
                "title" => "Bangabandhu Military Museum",
                "shortDes" => "Bangladesh Military Museum is a military museum of Bangladesh. This is controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka.",
                "pageLink" => route('website.project.single', 'bangabandhu-military-museum'),
                "cardClass" => "landmark",

            ),
            array(
                "image" => "assets/img/projects/2-Bashundhara_city.webp",
                "category" => "Landmark",
                "title" => "Bashundhara City Shopping Mall",
                "shortDes" => "Bashundhara City is a shopping mall in Dhaka. The mall is located in Pantha path, near Kawran Bazar, and was opened to the public on 6 August 2004.",
                "pageLink" => route('website.project.single', 'bashundhara-city-shopping-mall'),
                "cardClass" => "landmark",
            ),
            array(
                "image" => "assets/img/projects/3-BAFA.webp",
                "category" => "Landmark",
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "shortDes" => "Bangladesh Air Force Academy is a training and education academy which provides initial training to all men and women who are prepar-ing to be officers in the Bangladesh Air Force.",
                "pageLink" => route('website.project.single', 'bangladesh-air-force-academy'),
                "cardClass" => "landmark",
            ),


            array(
                "image" => "assets/img/projects/4-Shadhinata-tower.webp",
                "category" => "Commercial",
                "title" => "Shadhinata Tower",
                "shortDes" => "A recently developed multi stored building in Dhaka with modern architectural beauty. Specially it appearance looks amazing due to inbuilt colorful automatic lighting system, which enhance the appearance of the building.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/5-Rupayan.webp",
                "category" => "Commercial",
                "title" => "Rupayan Trade Center",
                "shortDes" => "Rupayan Trade Center. Located at 114 Kazi Nazrul Islam Ave, Banglamotor Dhaka-1000",
                "pageLink" => route('website.project.single', 'rupayan-trade-center'),
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/6-smart_jahir_tower.webp",
                "category" => "Commercial",
                "title" => "Smart Jahir Tower",
                "shortDes" => "Smart Technologies (BD) Ltd, Jahir Smart Tower. Located at 220, 5 Begum Rokeya Ave, Dhaka",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/7-nafi_tower.webp",
                "category" => "Commercial",
                "title" => "Nafi Tower",
                "shortDes" => "Nafi Tower is a building in Dhaka Division located on Gulshan Avenue. Nafi Tower is situated nearby to the shopping centre Gulshan 1 DNCC Mall and the community centre Emmanuelle's Banquet Hall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/8-renaissance_hotel.webp",
                "category" => "Residential",
                "title" => "Renaissance Hotel",
                "shortDes" => "Renaissance Dhaka Gulshan Hotel has a restaurant, outdoor swimming pool, a fitness center and bar in Dhaka. Boasting family rooms, this property also provides guests with a sun terrace.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/9-nb_tower.webp",
                "category" => "Commercial",
                "title" => "NB tower",
                "shortDes" => "NB tower stands for Nuruzzaman Biswas Tower and it is located in Gulshan-2. Which is a very popular place in Dhaka city.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-siam_tower.webp",
                "category" => "Commercial",
                "title" => "Siam Tower",
                "shortDes" => "Siam Tower a project of Sharmin Holdings Limited has been in operation since the end of 2009. It is situated in Sector-3, Uttara, Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-paltan_china_town.webp",
                "category" => "Commercial",
                "title" => "PALTAN CHINA TOWN",
                "shortDes" => "Paltan China Town is a newly built shopping cum business center in Dhaka. The architecture is unique in design and can be seen easily from a distance due to its design",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/11-south-breeze.webp",
                "category" => "Commercial",
                "title" => "South Breeze",
                "shortDes" => "Corporate Head Office South Breeze Center Road 11, Building 05, 12th Floor, Block G, Banani, Dhaka 1213, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/12-crown_plaza.webp",
                "category" => "Commercial",
                "title" => "CROWN PLAZA",
                "shortDes" => "Crown Plaza Dhaka Gulshan, an IHG Hotel features a fitness center, a shared lounge and a sun terrace with swimming pool and buffet breakfast in Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/13-radisson_blu_hotel.webp",
                "category" => "Commercial",
                "title" => "RADISSON BLU HOTEL",
                "shortDes" => "Situated on seven acres of lush gardens in the heart of Dhaka's primary commercial hub, the Radisson Blu Dhaka Water Garden provides a serene escape from the bustle of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/14-six_seasons_hotel.webp",
                "category" => "Residential",
                "title" => "Six Seasons Hotel",
                "shortDes" => "Six Seasons is an extraordinary hotel that offers every indulgence. With per room expenditure matching or exceeding ultra-luxury hotels chains around Dhaka",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/15-old_sheraton_hotel.webp",
                "category" => "Residential",
                "title" => "OLD SHERATON HOTEL",
                "shortDes" => "The original building with the arched windows operated as the Inter-Continental Dacca until the management contract switched to ITT Sheraton in 1983.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/16-fars_hotel_resorts.webp",
                "category" => "Residential",
                "title" => "FARS HOTEL & RESORTS",
                "shortDes" => "This lavish property makes for a relaxing stay option with its stylish rooms, multiple dining venues and easy connectivity to popular areas of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/17-iub.webp",
                "category" => "University",
                "title" => "Independent University, Bangladesh(IUB)",
                "shortDes" => "Independent University, Bangladesh or IUB is a one of the well renowned, prestigious and popular private university in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/18-dhaka_novo_theater.webp",
                "category" => "Commercial",
                "title" => "DHAKA NOVO THEATER",
                "shortDes" => "Novo Theatre is located within Dhaka and belongs to category Observatories and planetariums, Museum. ",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/19-bgb_darbal_hall.webp",
                "category" => "Commercial",
                "title" => " BGB DARBAL HALL",
                "shortDes" => "BGB Banquet Hall- a spectacular world class convention hall and conference center  is located in Shimanto shambhar beside shimanto square, Road 2 , Dhanmondi , Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/20-sylhet_cantonment.webp",
                "category" => "Commercial",
                "title" => "SYLHET CANTONMENT",
                "shortDes" => "Sylhet Cantonment is a cantonment located in Sylhet, Bangladesh. Sylhet Cantonment is the home of the Bangladesh Army's 17th Infantry Division, the School of Infantry & Tactics (SI&T), Para Commando Brigade, 1 & 2 Para commando battalion of the Bangladesh Army.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/21-bangladesh_naval_academy.webp",
                "category" => "Commercial",
                "title" => "BANGLADESH NAVAL ACADEMY CHATTOGRAM",
                "shortDes" => "The Bangladesh Naval Academy is situated at the mouth of the Karnaphuli River at Patenga, Chittagong District, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/22-sher-e_bangla_national_cricket_stadium.webp",
                "category" => "Commercial",
                "title" => "SHER-E BANGLA NATIONAL CRICKET STADIUM",
                "shortDes" => "The Sher-e-Bangla National Cricket Stadium, also called Mirpur Stadium, is an International cricket ground in Mirpur, a few kilometres away from the capital of Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/23-mount_adora_hospital.webp",
                "category" => "Hospital",
                "title" => "MOUNT ADORA HOSPITAL",
                "shortDes" => "Mount Adora Hospital, Sylhet the reliable destination for Hospital, Consultation and Diagnostic Services",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/24-xtrenza_pharma.webp",
                "category" => "Commercial",
                "title" => "XTRENZA PHARMA",
                "shortDes" => "Xtrenza Pharmaceuticals Limited located at Park Road, Baridhara , Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/25-manama_urban_forest.webp",
                "category" => "Commercial",
                "title" => "MANAMA URBAN FOREST",
                "shortDes" => "Manama Urban Forest, designed by In Quest Design Studio, is a 10-story commercial building. With a focus on energy efficiency and a connection to nature.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/26-rangs_rl.webp",
                "category" => "Commercial",
                "title" => "RANGS RL",
                "shortDes" => "RL Square is precisely positioned in the Progati Sarani; where it serves as both a residential retreat as well a commercial expanse and a well-connected business hub, with the major city’s financial institutions, universities.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/27-mobil_house.webp",
                "category" => "Commercial",
                "title" => "MOBIL HOUSE, JESSORE",
                "shortDes" => "MJL Bangladesh Limited is the joint venture company between state owned Jamuna Oil Company and EC Securities Limited ( a subsidiary of the East Coast Group).",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/28-prasad_trade_center.webp",
                "category" => "Commercial",
                "title" => "PRAASAD TRADE CENTER",
                "shortDes" => "Prof. Dr. Abu Yousuf Md. Abdullah established the Praasad Group of Companies in the year 1996. Through a long process of organizational development, the company that started its activities almost from scratch, achieved rapid and steady growth.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/29-renata_pharmaceutical.webp",
                "category" => "Commercial",
                "title" => "Renata Pharmaceutical",
                "shortDes" => "Renata Limited, also known as Renata, is one of the top ten pharmaceutical manufacturers in Bangladesh. Renata is engaged in the manufacture and marketing of human pharmaceutical and animal health products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/30-opsonin_pharma.webp",
                "category" => "Commercial",
                "title" => "Opsonin Pharma Limited",
                "shortDes" => "Opsonin a Leading Pharmaceutical company in Bangladesh that creates value for its customers and other stakeholders by providing highest quality health care.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/31-nasir-trade-center.webp",
                "category" => "Commercial",
                "title" => "Nasir Trade Center",
                "shortDes" => "Nasir trade centre is a 16 floor multi storage building having different offices and shops. Limited car parking available. Building has three lifts. Head office of Healthcare pharmaceutical company limited is located at 89 Bir Uttam, CR Dutta Rd,, Dhaka, Bangladesh",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/32-grand_tower.webp",
                "category" => "Commercial",
                "title" => "GRAND TOWER",
                "shortDes" => "",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/33-silver_tower.webp",
                "category" => "Commercial",
                "title" => "SILVER TOWER",
                "shortDes" => "Silver Tower is a building in Dhaka Division located on Gulshan Avenue. Silver Tower is situated nearby to the community centre Emmanuelle's Banquet Hall and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/34-mir_onyx_yakub_tower.webp",
                "category" => "Commercial",
                "title" => "MIR Onyx Yakub Tower",
                "shortDes" => "14 Storied Mir Onyx Yakub Tower with 3 basement design at Dhanmondi for Mir Holdings Ltd",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/35-opex_group.webp",
                "category" => "Commercial",
                "title" => "OPEX GROUP",
                "shortDes" => "GENERAL Opex is one of the largest garment manufacturing conglomerates in Asia and has a complete vertical integrated setup in woven, denim, outwear, knit and sweater with most modern state of the art machineries from USA, Europe and Japan.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/36-mirpur_dohs_shopping_mall.webp",
                "category" => "Commercial",
                "title" => "MIRPUR DOHS SHOPPING MALL",
                "shortDes" => "Mirpur DOHS Shopping Complex is very popular for a great selection of fashion products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/37-the_acme_laboratories_ltd.webp",
                "category" => "Commercial",
                "title" => "The ACME Laboratories Ltd",
                "shortDes" => "The ACME Laboratories Ltd. is one of the leading and diversified global conglomerates in Bangladesh, with offices in all major cities, employing over 6000+ employees and dedicated to bringing the highest quality products and services to our customers.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/38-lotus-kamal-tower-2.webp",
                "category" => "Commercial",
                "title" => "LOTUS KAMAL TOWER-2",
                "shortDes" => "The Lotus Kamal tower 2 is a bank in Dhaka Division located on Gulshan Avenue. Lotus Kamal tower 2 is situated nearby to the government office Embassy of Greece and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/39-westin_hotel.webp",
                "category" => "Residential",
                "title" => "WESTIN HOTEL",
                "shortDes" => "The Westin Dhaka is a Westin Hotel located at Gulshan Avenue in Dhaka. Its address is Plot-01, Road-45, Gulshan-2, Dhaka-1212, Bangladesh. At 86 m (282 ft), it is the tallest hotel in Bangladesh, and one of the tallest hotels in South Asia.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/40-AKH.webp",
                "category" => "Commercial",
                "title" => "AKH Group Head Office | AKH Tower",
                "shortDes" => "AKH is a one-stop source for overseas buyers to buy their high quality knit and woven garments from Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/41-anz-huq-eleven-square.webp",
                "category" => "Commercial",
                "title" => "Anz Huq Eleven Square",
                "shortDes" => "Anz Huq Eleven Square is a Shopping Mall, located at: Plot 1, Block H, Rd No. 11, Dhaka 1212, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/42-eunoos-center.webp",
                "category" => "Commercial",
                "title" => "Eunoos Trade Center",
                "shortDes" => "Eunoos Center is a multi-story office tower with abundant facilities & comfort in the commercial area of Dilkusha and Motijheel!",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/43-peoples_insurance_company_limited.webp",
                "category" => "Commercial",
                "title" => "Peoples Insurance Company Limited",
                "shortDes" => "Peoples Insurance Company Limited is proud to stand beside its’ valued customer and the general People of Bangladesh when they are in a disaster.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/44-sanmar_ocean_city.webp",
                "category" => "Commercial",
                "title" => "Sanmar Ocean City",
                "shortDes" => "One of the best shopping malls in Chattogram. You get almost everything under one roof. It also got a food corner like Bashundhara Market. The prices are a bit high. But you will get good quality things.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/45-mayor_mohammad_hanif_jame_masjid.webp",
                "category" => "Mosque",
                "title" => "Mayor Mohammad Hanif Jame Masjid",
                "shortDes" => "Mayor Mohammad Hanif Jame Mosque is a religious architecture project designed by SHATOTTO architecture for green living in Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/46-bsml_mosque.webp",
                "category" => "Mosque",
                "title" => "BSML MOSQUE, MANIKGONJ",
                "shortDes" => "The mosque interiors are strongly connected to the outside world. Natural light from windows, stain glasses and glass blocks skylights articulates the mosque spaces and brings daily and seasonal cycles into the interior.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/47-the_world_bank_in_bangladesh.webp",
                "category" => "Commercial",
                "title" => "The World Bank In Bangladesh",
                "shortDes" => "Bangladesh has an inspiring story of growth and development, aspiring to be an upper middle-income country by 2031. Since 1972, the World Bank has committed over $35 billion to support Bangladesh’s development journey.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/48-standard_chartered_bank.webp",
                "category" => "Commercial",
                "title" => "Standard Chartered Bank Head Office",
                "shortDes" => "Standard Chartered Bangladesh is a banking and financial services company headquartered in Dhaka, Bangladesh, and a wholly owned subsidiary of Standard Chartered. Standard Chartered has been operating in Bangladesh for over a hundred years.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/49-city_bank_head_office.webp",
                "category" => "Commercial",
                "title" => "City Bank Head Office",
                "shortDes" => "City Bank has been a study in evolution since its inception in 1983. The Bank embraces global best practices and is at the forefront of technological initiatives.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/50-mutual_trust_bank_ltd.webp",
                "category" => "Commercial",
                "title" => "Mutual Trust Bank Ltd. | Corporate Head Office",
                "shortDes" => "The Company was incorporated as a Public Limited Company on September 29, 1999, under the Companies Act 1994, with an Authorized Share Capital of BDT 1,000,000,000 divided into 10,000,000 ordinary shares of BDT 100 each.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/51-sheikh_hasina_burn_unit_institute_hospital.webp",
                "category" => "Hospital",
                "title" => "SHEIKH HASINA BURN UNIT INSTITUTE HOSPITAL",
                "shortDes" => "Sheikh Hasina National Institute of Burn and Plastic Surgery is a hospital dedicated for burn and plastic surgery situated in Dhaka, Bangladesh. It is regarded as the largest burn and plastic surgical care center in the world.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/52-monowara_hospital.webp",
                "category" => "Hospital",
                "title" => "Monowara Hospital Private Limited",
                "shortDes" => "Monowara Hospital (Pvt.) Ltd. is a real multi-hospital system in Dhaka City. This Hospital surgical suite includes of mainly modern and highly equipped three operation theatres.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/53-evercare_hospital.webp",
                "category" => "Hospital",
                "title" => "Evercare Hospital Dhaka",
                "shortDes" => "Evercare Hospital Dhaka is a 425- bed super-specialty tertiary care world-class hospitals, providing comprehensive health care with the cutting edge medical, surgical and diagnostic facilities, with an aim to establish a close synergy among medical skills, trained manpower, technology and advancements in IT.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/54-labaid_cancer_hospital.webp",
                "category" => "Hospital",
                "title" => "Labaid Cancer Hospital And Super Speciality Center",
                "shortDes" => "Labaid Cancer Hospital & Super Specialty Center is the complete integrated cancer hospital with the forefront of medical technologies and expertise in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/55-LABAID-Chattogram.webp",
                "category" => "Hospital",
                "title" => "LABAID CHATTOGRAM",
                "shortDes" => "LABAID Chattogram Hospital Get Us House- 06, Road-04, Dhanmondi, Dhaka 1205, Bangladesh. +88 02 58610793-8, +88 0241060908-18 info@labaidgroup.com",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/56-banglalink_head_office.webp",
                "category" => "Commercial",
                "title" => "Banglalink Head Office",
                "shortDes" => "Banglalink Digital Communication Ltd. is the best mobile operator that provides the strongest & widest network at each & every corner in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/57-grameenphone_head_office.webp",
                "category" => "Commercial",
                "title" => "Grameenphone Head Office",
                "shortDes" => "A public listed company with limited liability. Incorporated as private limited company on October 10, 1996 and subsequently converted to a public limited company on June 25, 2007.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/58-popular_pharmaceuticals.webp",
                "category" => "Commercial",
                "title" => "POPULAR PHARMACEUTICALS ,BOGRA",
                "shortDes" => "Popular Pharmaceuticals Ltd. (PPL) was established in 8 December 2002, with a vision to lead the branded generics market in Bangladesh with a high quality, diversified range of life saving and vital molecules.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/59-nandan_kanon_mars.webp",
                "category" => "Commercial",
                "title" => "NANDAN KANON MARS",
                "shortDes" => "Nandan Kanon is a promising name in Real Estate Business. We are capable of contributing to the emerging shape of Dhaka’s urban outlooks and life style and importantly meeting the basic needs and requirements of our valued clients. ",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/60-sq_sweaters.webp",
                "category" => "Commercial",
                "title" => "SQ Sweaters",
                "shortDes" => "SQ Sweater Limited was incorporated in Dhaka, Bangladesh with Registration Number 8783. Number of workers is 750. Basic Info. Name, SQ Sweater Limited",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/61-atlanta_trade_center_atc.webp",
                "category" => "Commercial",
                "title" => "Atlanta Trade Center ATC",
                "shortDes" => "Atlanta Trade Center ATC is a Exhibition and trade centre located at House 01, road 1/A Dhaka, Uttara, Dhaka, 1230, BD.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/62-state_university_of_bangladesh.webp",
                "category" => "University",
                "title" => "State University of Bangladesh",
                "shortDes" => "State University of Bangladesh is a private university in Dhanmondi, Dhaka, Bangladesh. It was established in 2002 under the Private University Act 1992.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/63-bof_golf_club.webp",
                "category" => "Commercial",
                "title" => "BOF Golf Club, Gazipur",
                "shortDes" => "BOF Golf Club is stands for Bangladesh Ordnance Factory. BOF Golf Club is situated at Inside Bangladesh Ordnance Factory. Bangladesh Ordnance Factory Golf Club 7 Hole Golf Course.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/64-zam_zam_tower.webp",
                "category" => "Commercial",
                "title" => "Zam Zam Tower",
                "shortDes" => "Bustling mall offering a wide range of retail shops, a grocery store, food court & kids' play area.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/65-HOTEL_SARINA.webp",
                "category" => "Residential",
                "title" => "Hotel Sarina",
                "shortDes" => "Hotel Sarina is a five-star business hotel located in the heart of Dhaka city.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/66-INTERCONTINENAL_HOTEL.webp",
                "category" => "Residential",
                "title" => "Intercontinental Hotel",
                "shortDes" => "The hotel is beautifully designed boasted with Millennium modern outlook with a touch of local culture.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/67-MARRIOT_HOTEL_CTG.webp",
                "category" => "Residential",
                "title" => "Marriott Hotel",
                "shortDes" => "Courtyard Marriott is an international chain of hotels operated by Courtyard by Marriott owned by Marriott International. It is currently under construction and located in Agrabad, the central business area in Chattogram, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/68-RAK_Tower.webp",
                "category" => "Commercial",
                "title" => "RAK Tower",
                "shortDes" => "RAK Tower is a corporate office of RAK ceramics ltd. It is located at Jashimiddin more in Uttara. There are many branded cloths shops are also in this tower.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/69-Universal_Hospital.webp",
                "category" => "Commercial",
                "title" => "Universal Hospital",
                "shortDes" => "Universal Medical Collage and General Hospital is a Multi-Speciality Hospitals in Dacca, Jahangir Nagar, Dhaka District, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/70-Square_Hospital.webp",
                "category" => "Commercial",
                "title" => "Square Hospital LTD",
                "shortDes" => "Square Hospitals Limited is a tertiary care hospital and the leading contributor of private healthcare services in Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/71-Labaid_Specialized_Hospital.webp",
                "category" => "Commercial",
                "title" => "Labaid Specialized Hospital",
                "shortDes" => "Labaid Specialty Hospital, a priority of Labaid cluster, is the solely specialized multidisciplinary tertiary care hospital in the Asian country that gives comprehensive treatment with the newest medical, surgical and diagnostic facilities.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/72-LABAID_GULSHAN.webp",
                "category" => "Hospital",
                "title" => "Labaid Gulshan",
                "shortDes" => "LABAID Diagnostic Gulshan. Address: Gulshan Medical Center, House-13/A, Road-35, Gulshan-02, Dhaka - 1212.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/73-Uttara_Square.webp",
                "category" => "Hospital",
                "title" => "Uttara Square",
                "shortDes" => "Uttara Square is a world class Shopping-cum Commercial complex equipped with all the latest modern amenities and situated at a prime location of the Commercial Zone",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/74-PLAZA_AR.webp",
                "category" => "Commercial",
                "title" => "Plaza AR",
                "shortDes" => "Plaza A.R Dhanmondi-28, Dhaka 1207. is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/75-RUPAYAN_SHOPNO_NILOY.webp",
                "category" => "Commercial",
                "title" => "Rupayan Shopno Niloy",
                "shortDes" => "Rupayan Swapno Niloy is located at 56, 57 Shiddheswari Road, Dhaka 1217, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/76-South_Symphony.webp",
                "category" => "Commercial",
                "title" => "South Symphony",
                "shortDes" => "South Symphony Building is a bank located at Gulshan Avenue South in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/77-South_Proshanti.webp",
                "category" => "Commercial",
                "title" => "South Proshanti",
                "shortDes" => "Plot No. 22 of Road No. 9A, Dhanmondi Residential Area, Dhaka measuring 1 (one) bigha is situated at the heart of Dhanmondi and the Plot faces the south",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/78-South_Water_Garden-A.webp",
                "category" => "Commercial",
                "title" => "South Water Garden-A",
                "shortDes" => "South Water Garden apartment building is located at United Nations Road, Baridhara diplomatic zone, an area where, as in the rest of Dhaka, green is an exception.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/79-South_Alif_Breeze.webp",
                "category" => "Commercial",
                "title" => "South Alif Breeze",
                "shortDes" => "This project one of the main features is its low glass boundary wall. Semiologically this is an urge to the society to revive the trust and respect. ",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/80-Labaid_Palace_De_Alam.webp",
                "category" => "Commercial",
                "title" => "Labaid Palace De Alam",
                "shortDes" => "The Palace De Alam from Labaid Properties Classic Collection gives you spacious 4-bedroom apartment in Gulshan-2 for a stylish and comfortable lifestyle.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/81-ARCHADIA_SYLHET.webp",
                "category" => "Commercial",
                "title" => "Archadia Shopping Mall",
                "shortDes" => "Arcadia is one of the most precious five star quality buildings in Sylhet city. It is total fiftin Stored Building. There are all worldclass brand shops here like Swapno, Le Re Ve, Lira, Inlot, BBB, Rise, Myth, Esatasy, Miror, Bookend, Madchef, Orion etc.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/82-RANGS_PEARL.webp",
                "category" => "Commercial",
                "title" => "RANGS Pearl",
                "shortDes" => "Rangs Pearl is a Premise, located at: 76 Road-12, Dhaka 1213, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/83-PFI_TOWER.webp",
                "category" => "Commercial",
                "title" => "PFI Tower",
                "shortDes" => "United Financial Trading Company Limited. Leading Stock Broker of Dhaka Stock Exchange & Chittagong Stock Exchange",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/84-Rupayan_City_Uttara.webp",
                "category" => "Commercial",
                "title" => "Rupayan City",
                "shortDes" => "Rupayan City, is a city development Company in Uttara Model Town. It is close to sector -12 of Uttara Model Town and covered by Rupayan Group.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/85-GREEN_DELTA_AIMS_TOWER.webp",
                "category" => "Commercial",
                "title" => "Green Delta Aims Tower",
                "shortDes" => "Green Delta AIMS Tower is one of the top rated place listed as Apartment & Condo Building in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/86-METRO_SHOPING_MALL.webp",
                "category" => "Commercial",
                "title" => "Metro Shopping Mall",
                "shortDes" => "Metro Shopping Center, Dhanmondi is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/87-MOFIZ_CHAMBER.webp",
                "category" => "Commercial",
                "title" => "Mofiz Chamber",
                "shortDes" => "Mofiz Chember is located at 75 Dilkusha Rd, Dhaka 1000, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/88-NISSAN_CAR_SHOWROOM.webp",
                "category" => "Commercial",
                "title" => "NISSAN CAR SHOWROOM",
                "shortDes" => "Nissan Motor Co., Ltd., trading as Nissan Motor Corporation and often shortened to Nissan, is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama, Japan.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/89-PRINCE_PLAZA.webp",
                "category" => "Commercial",
                "title" => "Prince Plaza",
                "shortDes" => "Prince Plaza located at 4/2, Sobhanbag, Dhanmondi, Dhaka-1207.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/90-HOSAF_TOWER.webp",
                "category" => "Commercial",
                "title" => "Hosaf Tower",
                "shortDes" => "Hosaf Tower, Malibagh Square, Dhaka is one of the popular place listed under Shopping/retail in Dhaka , Restaurant in Dhaka , Community Center in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/91-HA-MEEM_Fashions_LTD.webp",
                "category" => "Commercial",
                "title" => "HA-MEEM Fashions LTD",
                "shortDes" => "Ha-Meem Group is a leading supplier of readymade garments and denim fabric in the world. The company produces some of the most fashionable denim fabrics.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/92-Janakantha_Bhaban.webp",
                "category" => "Commercial",
                "title" => "Janakantha Bhaban",
                "shortDes" => "Bangla newspaper Janakantha started their journey on 21 February 1993. Janakantha daily newspaper in Bangladesh online has many features such as desher khobor",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/93-Navana_Bailey_Star.webp",
                "category" => "Commercial",
                "title" => "Navana Baily Star",
                "shortDes" => "Navana Baily Star is a Shopping mall. Address: 25, Natok Sharani, Baily Road, Ramna, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/94-Suraiya_Mansion.webp",
                "category" => "Commercial",
                "title" => "Suraiya Mansion",
                "shortDes" => "Suraiya Mansion is a Business center located at Suraiya Mansion, Kotwali, Chattogram, BD. The business is listed under business center category.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/95-Orchard_point.webp",
                "category" => "Commercial",
                "title" => "Orchard Point",
                "shortDes" => "Orchard Point is a popular shopping mall for fashionable products at Dhanmondi. The main clients of the market are the young generations.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/96-Novera_Square.webp",
                "category" => "Commercial",
                "title" => "Novera Square",
                "shortDes" => "Novera Square is a Business Center, located at: Dhaka, Bangladesh",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/97-Alliance_tower.webp",
                "category" => "Commercial",
                "title" => "Alliance Tower",
                "shortDes" => "Alliance Tower located at 63 KA Pragati Sarani, Baridhara, Dhaka-1212",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/98-Confidence_tower.webp",
                "category" => "Commercial",
                "title" => "Confidence Tower",
                "shortDes" => "Confidence Center, Shahajadpur, Badda, Dhaka is one of the top rated place listed as Professional Service in Dhaka ",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/99-Amin_Mohammad_group.webp",
                "category" => "Commercial",
                "title" => "Aman Group Corporation Office",
                "shortDes" => "Aman Group of Companies is one of the respected business houses in Bangladesh. It is a fast growing diversified private sector conglomerate.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/100-AJ_HEIGHTS.webp",
                "category" => "Commercial",
                "title" => "AJ Heights",
                "shortDes" => "Aj Heights is one of the popular Local Business located in ,Dhaka listed under Local business in Dhaka , Corporate Office in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/101-Denim_Asia.webp",
                "category" => "Commercial",
                "title" => "Denim Asia",
                "shortDes" => "Denim Asia Ltd. Is A Bangladesh Supplier, The Following Trade Report Data Is Derived From Its Trade Data; The Company's Import Data Up To 2023-01-25 Total 164 Transactions.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/102-DBL_Ceramics.webp",
                "category" => "Commercial",
                "title" => "DBL Ceramics",
                "shortDes" => "DBL Ceramics Limited started its journey with an unparalleled commitment to bring elegant and premium quality ceramic tiles to cater the needs of all sorts of building.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/103-Indian_High_Commision.webp",
                "category" => "Commercial",
                "title" => "Indian High Commission",
                "shortDes" => "High Commission of India, Dhaka is a Diplomatic Mission of Government of Republic of India In Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/104-Shurma_Tower.webp",
                "category" => "Commercial",
                "title" => "Surma Tower",
                "shortDes" => "Surma Tower is one of the top rated place listed as Shopping/retail in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/105-Shezan_Point.webp",
                "category" => "Commercial",
                "title" => "Shezan Point",
                "shortDes" => "Its beside farmgate market. Everything can be found here but in a bit higher price than farmgate market but thats not a problem if you can bargain well. The accessories and eyewear are unique and the mobile varieties and repair shops are also awesome.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/106-HRC_Bhavan.webp",
                "category" => "Commercial",
                "title" => "HRC Bhaban",
                "shortDes" => "HRC Bhaban is a building in Dhaka Division. HRC Bhaban is situated nearby to the post office DHL and Northern University Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/107-Moon_Hospital.webp",
                "category" => "Hospital",
                "title" => "Moon Hospital, Cumilla",
                "shortDes" => "Moon Hospital is a multi-specialty private hospital in Cumilla, We offer a wide variety of medical specialties and services that include 21 specialized.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/108-Rangs_KB_Square.webp",
                "category" => "Commercial",
                "title" => "Rangs KB Square",
                "shortDes" => "Rangs KB Square is one of the top rated place listed as Place To Eat/Drink in Dhaka , Residence in Dhaka , Commercial & Industrial in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/109-Navy_Headquarter.webp",
                "category" => "Commercial",
                "title" => "Navy Headquarter",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/110-Yakub_South_Center.webp",
                "category" => "Commercial",
                "title" => "Yakub South Center, Dhanmond",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/111-SA_Residence.webp",
                "category" => "Residential",
                "title" => "SA Residence",
                "shortDes" => "SA Residence is one of the most prominant residential project in our country which is widely known all over the world for its unique green architecture. This project was featured in top architectural publishers all around the world.",
                "pageLink" => route('website.project.single', 'sa-residence'),
                "cardClass" => "residential",
            ),
        );
        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );

        return view('website.projects', compact('projects', 'clients'));
    }

    // return landmark projects page
    public function landmarkProjectsPage()
    {
        $projects = array(
            array(
                "image" => "assets/img/projects/Museum.jpg",
                "category" => "Landmark",
                "title" => "Bangabandhu Military Museum",
                "shortDes" => "Bangladesh Military Museum is a military museum of Bangladesh. This is controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka.",
                "pageLink" => route('website.project.single', 'bangabandhu-military-museum'),
                "cardClass" => "landmark",

            ),
            array(
                "image" => "assets/img/projects/Bashundhara_city.jpg",
                "category" => "Landmark",
                "title" => "Bashundhara City Shopping Mall",
                "shortDes" => "Bashundhara City is a shopping mall in Dhaka. The mall is located in Pantha path, near Kawran Bazar, and was opened to the public on 6 August 2004.",
                "pageLink" => route('website.project.single', 'bashundhara-city-shopping-mall'),
                "cardClass" => "landmark",
            ),
            array(
                "image" => "assets/img/projects/BAFA.jpg",
                "category" => "Landmark",
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "shortDes" => "Bangladesh Air Force Academy is a training and education academy which provides initial training to all men and women who are prepar-ing to be officers in the Bangladesh Air Force.",
                "pageLink" => route('website.project.single', 'bangladesh-air-force-academy'),
                "cardClass" => "landmark",
            ),
        );
        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );
        return view('website.landmark-projects', compact('projects', 'clients'));
    }

    // return commercial projects page
    public function commercialProjectsPage()
    {
        $allProjects = array(
            array(
                "image" => "assets/img/projects/1-Museum.webp",
                "category" => "Landmark",
                "title" => "Bangabandhu Military Museum",
                "shortDes" => "Bangladesh Military Museum is a military museum of Bangladesh. This is controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka.",
                "pageLink" => route('website.project.single', 'bangabandhu-military-museum'),
                "cardClass" => "landmark",

            ),
            array(
                "image" => "assets/img/projects/2-Bashundhara_city.webp",
                "category" => "Landmark",
                "title" => "Bashundhara City Shopping Mall",
                "shortDes" => "Bashundhara City is a shopping mall in Dhaka. The mall is located in Pantha path, near Kawran Bazar, and was opened to the public on 6 August 2004.",
                "pageLink" => route('website.project.single', 'bashundhara-city-shopping-mall'),
                "cardClass" => "landmark",
            ),
            array(
                "image" => "assets/img/projects/3-BAFA.webp",
                "category" => "Landmark",
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "shortDes" => "Bangladesh Air Force Academy is a training and education academy which provides initial training to all men and women who are prepar-ing to be officers in the Bangladesh Air Force.",
                "pageLink" => route('website.project.single', 'bangladesh-air-force-academy'),
                "cardClass" => "landmark",
            ),


            array(
                "image" => "assets/img/projects/4-Shadhinata-tower.webp",
                "category" => "Commercial",
                "title" => "Shadhinata Tower",
                "shortDes" => "A recently developed multi stored building in Dhaka with modern architectural beauty. Specially it appearance looks amazing due to inbuilt colorful automatic lighting system, which enhance the appearance of the building.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/5-Rupayan.webp",
                "category" => "Commercial",
                "title" => "Rupayan Trade Center",
                "shortDes" => "Rupayan Trade Center. Located at 114 Kazi Nazrul Islam Ave, Banglamotor Dhaka-1000",
                "pageLink" => route('website.project.single', 'rupayan-trade-center'),
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/6-smart_jahir_tower.webp",
                "category" => "Commercial",
                "title" => "Smart Jahir Tower",
                "shortDes" => "Smart Technologies (BD) Ltd, Jahir Smart Tower. Located at 220, 5 Begum Rokeya Ave, Dhaka",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/7-nafi_tower.webp",
                "category" => "Commercial",
                "title" => "Nafi Tower",
                "shortDes" => "Nafi Tower is a building in Dhaka Division located on Gulshan Avenue. Nafi Tower is situated nearby to the shopping centre Gulshan 1 DNCC Mall and the community centre Emmanuelle's Banquet Hall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/8-renaissance_hotel.webp",
                "category" => "Residential",
                "title" => "Renaissance Hotel",
                "shortDes" => "Renaissance Dhaka Gulshan Hotel has a restaurant, outdoor swimming pool, a fitness center and bar in Dhaka. Boasting family rooms, this property also provides guests with a sun terrace.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/9-nb_tower.webp",
                "category" => "Commercial",
                "title" => "NB tower",
                "shortDes" => "NB tower stands for Nuruzzaman Biswas Tower and it is located in Gulshan-2. Which is a very popular place in Dhaka city.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-siam_tower.webp",
                "category" => "Commercial",
                "title" => "Siam Tower",
                "shortDes" => "Siam Tower a project of Sharmin Holdings Limited has been in operation since the end of 2009. It is situated in Sector-3, Uttara, Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-paltan_china_town.webp",
                "category" => "Commercial",
                "title" => "PALTAN CHINA TOWN",
                "shortDes" => "Paltan China Town is a newly built shopping cum business center in Dhaka. The architecture is unique in design and can be seen easily from a distance due to its design",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/11-south-breeze.webp",
                "category" => "Commercial",
                "title" => "South Breeze",
                "shortDes" => "Corporate Head Office South Breeze Center Road 11, Building 05, 12th Floor, Block G, Banani, Dhaka 1213, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/12-crown_plaza.webp",
                "category" => "Commercial",
                "title" => "CROWN PLAZA",
                "shortDes" => "Crown Plaza Dhaka Gulshan, an IHG Hotel features a fitness center, a shared lounge and a sun terrace with swimming pool and buffet breakfast in Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/13-radisson_blu_hotel.webp",
                "category" => "Commercial",
                "title" => "RADISSON BLU HOTEL",
                "shortDes" => "Situated on seven acres of lush gardens in the heart of Dhaka's primary commercial hub, the Radisson Blu Dhaka Water Garden provides a serene escape from the bustle of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/14-six_seasons_hotel.webp",
                "category" => "Residential",
                "title" => "Six Seasons Hotel",
                "shortDes" => "Six Seasons is an extraordinary hotel that offers every indulgence. With per room expenditure matching or exceeding ultra-luxury hotels chains around Dhaka",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/15-old_sheraton_hotel.webp",
                "category" => "Residential",
                "title" => "OLD SHERATON HOTEL",
                "shortDes" => "The original building with the arched windows operated as the Inter-Continental Dacca until the management contract switched to ITT Sheraton in 1983.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/16-fars_hotel_resorts.webp",
                "category" => "Residential",
                "title" => "FARS HOTEL & RESORTS",
                "shortDes" => "This lavish property makes for a relaxing stay option with its stylish rooms, multiple dining venues and easy connectivity to popular areas of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/17-iub.webp",
                "category" => "University",
                "title" => "Independent University, Bangladesh(IUB)",
                "shortDes" => "Independent University, Bangladesh or IUB is a one of the well renowned, prestigious and popular private university in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/18-dhaka_novo_theater.webp",
                "category" => "Commercial",
                "title" => "DHAKA NOVO THEATER",
                "shortDes" => "Novo Theatre is located within Dhaka and belongs to category Observatories and planetariums, Museum. ",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/19-bgb_darbal_hall.webp",
                "category" => "Commercial",
                "title" => " BGB DARBAL HALL",
                "shortDes" => "BGB Banquet Hall- a spectacular world class convention hall and conference center  is located in Shimanto shambhar beside shimanto square, Road 2 , Dhanmondi , Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/20-sylhet_cantonment.webp",
                "category" => "Commercial",
                "title" => "SYLHET CANTONMENT",
                "shortDes" => "Sylhet Cantonment is a cantonment located in Sylhet, Bangladesh. Sylhet Cantonment is the home of the Bangladesh Army's 17th Infantry Division, the School of Infantry & Tactics (SI&T), Para Commando Brigade, 1 & 2 Para commando battalion of the Bangladesh Army.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/21-bangladesh_naval_academy.webp",
                "category" => "Commercial",
                "title" => "BANGLADESH NAVAL ACADEMY CHATTOGRAM",
                "shortDes" => "The Bangladesh Naval Academy is situated at the mouth of the Karnaphuli River at Patenga, Chittagong District, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/22-sher-e_bangla_national_cricket_stadium.webp",
                "category" => "Commercial",
                "title" => "SHER-E BANGLA NATIONAL CRICKET STADIUM",
                "shortDes" => "The Sher-e-Bangla National Cricket Stadium, also called Mirpur Stadium, is an International cricket ground in Mirpur, a few kilometres away from the capital of Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/23-mount_adora_hospital.webp",
                "category" => "Hospital",
                "title" => "MOUNT ADORA HOSPITAL",
                "shortDes" => "Mount Adora Hospital, Sylhet the reliable destination for Hospital, Consultation and Diagnostic Services",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/24-xtrenza_pharma.webp",
                "category" => "Commercial",
                "title" => "XTRENZA PHARMA",
                "shortDes" => "Xtrenza Pharmaceuticals Limited located at Park Road, Baridhara , Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/25-manama_urban_forest.webp",
                "category" => "Commercial",
                "title" => "MANAMA URBAN FOREST",
                "shortDes" => "Manama Urban Forest, designed by In Quest Design Studio, is a 10-story commercial building. With a focus on energy efficiency and a connection to nature.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/26-rangs_rl.webp",
                "category" => "Commercial",
                "title" => "RANGS RL",
                "shortDes" => "RL Square is precisely positioned in the Progati Sarani; where it serves as both a residential retreat as well a commercial expanse and a well-connected business hub, with the major city’s financial institutions, universities.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/27-mobil_house.webp",
                "category" => "Commercial",
                "title" => "MOBIL HOUSE, JESSORE",
                "shortDes" => "MJL Bangladesh Limited is the joint venture company between state owned Jamuna Oil Company and EC Securities Limited ( a subsidiary of the East Coast Group).",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/28-prasad_trade_center.webp",
                "category" => "Commercial",
                "title" => "PRAASAD TRADE CENTER",
                "shortDes" => "Prof. Dr. Abu Yousuf Md. Abdullah established the Praasad Group of Companies in the year 1996. Through a long process of organizational development, the company that started its activities almost from scratch, achieved rapid and steady growth.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/29-renata_pharmaceutical.webp",
                "category" => "Commercial",
                "title" => "Renata Pharmaceutical",
                "shortDes" => "Renata Limited, also known as Renata, is one of the top ten pharmaceutical manufacturers in Bangladesh. Renata is engaged in the manufacture and marketing of human pharmaceutical and animal health products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/30-opsonin_pharma.webp",
                "category" => "Commercial",
                "title" => "Opsonin Pharma Limited",
                "shortDes" => "Opsonin a Leading Pharmaceutical company in Bangladesh that creates value for its customers and other stakeholders by providing highest quality health care.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/31-nasir-trade-center.webp",
                "category" => "Commercial",
                "title" => "Nasir Trade Center",
                "shortDes" => "Nasir trade centre is a 16 floor multi storage building having different offices and shops. Limited car parking available. Building has three lifts. Head office of Healthcare pharmaceutical company limited is located at 89 Bir Uttam, CR Dutta Rd,, Dhaka, Bangladesh",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/32-grand_tower.webp",
                "category" => "Commercial",
                "title" => "GRAND TOWER",
                "shortDes" => "",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/33-silver_tower.webp",
                "category" => "Commercial",
                "title" => "SILVER TOWER",
                "shortDes" => "Silver Tower is a building in Dhaka Division located on Gulshan Avenue. Silver Tower is situated nearby to the community centre Emmanuelle's Banquet Hall and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/34-mir_onyx_yakub_tower.webp",
                "category" => "Commercial",
                "title" => "MIR Onyx Yakub Tower",
                "shortDes" => "14 Storied Mir Onyx Yakub Tower with 3 basement design at Dhanmondi for Mir Holdings Ltd",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/35-opex_group.webp",
                "category" => "Commercial",
                "title" => "OPEX GROUP",
                "shortDes" => "GENERAL Opex is one of the largest garment manufacturing conglomerates in Asia and has a complete vertical integrated setup in woven, denim, outwear, knit and sweater with most modern state of the art machineries from USA, Europe and Japan.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/36-mirpur_dohs_shopping_mall.webp",
                "category" => "Commercial",
                "title" => "MIRPUR DOHS SHOPPING MALL",
                "shortDes" => "Mirpur DOHS Shopping Complex is very popular for a great selection of fashion products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/37-the_acme_laboratories_ltd.webp",
                "category" => "Commercial",
                "title" => "The ACME Laboratories Ltd",
                "shortDes" => "The ACME Laboratories Ltd. is one of the leading and diversified global conglomerates in Bangladesh, with offices in all major cities, employing over 6000+ employees and dedicated to bringing the highest quality products and services to our customers.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/38-lotus-kamal-tower-2.webp",
                "category" => "Commercial",
                "title" => "LOTUS KAMAL TOWER-2",
                "shortDes" => "The Lotus Kamal tower 2 is a bank in Dhaka Division located on Gulshan Avenue. Lotus Kamal tower 2 is situated nearby to the government office Embassy of Greece and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/39-westin_hotel.webp",
                "category" => "Residential",
                "title" => "WESTIN HOTEL",
                "shortDes" => "The Westin Dhaka is a Westin Hotel located at Gulshan Avenue in Dhaka. Its address is Plot-01, Road-45, Gulshan-2, Dhaka-1212, Bangladesh. At 86 m (282 ft), it is the tallest hotel in Bangladesh, and one of the tallest hotels in South Asia.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/40-AKH.webp",
                "category" => "Commercial",
                "title" => "AKH Group Head Office | AKH Tower",
                "shortDes" => "AKH is a one-stop source for overseas buyers to buy their high quality knit and woven garments from Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/41-anz-huq-eleven-square.webp",
                "category" => "Commercial",
                "title" => "Anz Huq Eleven Square",
                "shortDes" => "Anz Huq Eleven Square is a Shopping Mall, located at: Plot 1, Block H, Rd No. 11, Dhaka 1212, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/42-eunoos-center.webp",
                "category" => "Commercial",
                "title" => "Eunoos Trade Center",
                "shortDes" => "Eunoos Center is a multi-story office tower with abundant facilities & comfort in the commercial area of Dilkusha and Motijheel!",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/43-peoples_insurance_company_limited.webp",
                "category" => "Commercial",
                "title" => "Peoples Insurance Company Limited",
                "shortDes" => "Peoples Insurance Company Limited is proud to stand beside its’ valued customer and the general People of Bangladesh when they are in a disaster.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/44-sanmar_ocean_city.webp",
                "category" => "Commercial",
                "title" => "Sanmar Ocean City",
                "shortDes" => "One of the best shopping malls in Chattogram. You get almost everything under one roof. It also got a food corner like Bashundhara Market. The prices are a bit high. But you will get good quality things.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/45-mayor_mohammad_hanif_jame_masjid.webp",
                "category" => "Mosque",
                "title" => "Mayor Mohammad Hanif Jame Masjid",
                "shortDes" => "Mayor Mohammad Hanif Jame Mosque is a religious architecture project designed by SHATOTTO architecture for green living in Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/46-bsml_mosque.webp",
                "category" => "Mosque",
                "title" => "BSML MOSQUE, MANIKGONJ",
                "shortDes" => "The mosque interiors are strongly connected to the outside world. Natural light from windows, stain glasses and glass blocks skylights articulates the mosque spaces and brings daily and seasonal cycles into the interior.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/47-the_world_bank_in_bangladesh.webp",
                "category" => "Commercial",
                "title" => "The World Bank In Bangladesh",
                "shortDes" => "Bangladesh has an inspiring story of growth and development, aspiring to be an upper middle-income country by 2031. Since 1972, the World Bank has committed over $35 billion to support Bangladesh’s development journey.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/48-standard_chartered_bank.webp",
                "category" => "Commercial",
                "title" => "Standard Chartered Bank Head Office",
                "shortDes" => "Standard Chartered Bangladesh is a banking and financial services company headquartered in Dhaka, Bangladesh, and a wholly owned subsidiary of Standard Chartered. Standard Chartered has been operating in Bangladesh for over a hundred years.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/49-city_bank_head_office.webp",
                "category" => "Commercial",
                "title" => "City Bank Head Office",
                "shortDes" => "City Bank has been a study in evolution since its inception in 1983. The Bank embraces global best practices and is at the forefront of technological initiatives.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/50-mutual_trust_bank_ltd.webp",
                "category" => "Commercial",
                "title" => "Mutual Trust Bank Ltd. | Corporate Head Office",
                "shortDes" => "The Company was incorporated as a Public Limited Company on September 29, 1999, under the Companies Act 1994, with an Authorized Share Capital of BDT 1,000,000,000 divided into 10,000,000 ordinary shares of BDT 100 each.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/51-sheikh_hasina_burn_unit_institute_hospital.webp",
                "category" => "Hospital",
                "title" => "SHEIKH HASINA BURN UNIT INSTITUTE HOSPITAL",
                "shortDes" => "Sheikh Hasina National Institute of Burn and Plastic Surgery is a hospital dedicated for burn and plastic surgery situated in Dhaka, Bangladesh. It is regarded as the largest burn and plastic surgical care center in the world.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/52-monowara_hospital.webp",
                "category" => "Hospital",
                "title" => "Monowara Hospital Private Limited",
                "shortDes" => "Monowara Hospital (Pvt.) Ltd. is a real multi-hospital system in Dhaka City. This Hospital surgical suite includes of mainly modern and highly equipped three operation theatres.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/53-evercare_hospital.webp",
                "category" => "Hospital",
                "title" => "Evercare Hospital Dhaka",
                "shortDes" => "Evercare Hospital Dhaka is a 425- bed super-specialty tertiary care world-class hospitals, providing comprehensive health care with the cutting edge medical, surgical and diagnostic facilities, with an aim to establish a close synergy among medical skills, trained manpower, technology and advancements in IT.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/54-labaid_cancer_hospital.webp",
                "category" => "Hospital",
                "title" => "Labaid Cancer Hospital And Super Speciality Center",
                "shortDes" => "Labaid Cancer Hospital & Super Specialty Center is the complete integrated cancer hospital with the forefront of medical technologies and expertise in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/55-LABAID-Chattogram.webp",
                "category" => "Hospital",
                "title" => "LABAID CHATTOGRAM",
                "shortDes" => "LABAID Chattogram Hospital Get Us House- 06, Road-04, Dhanmondi, Dhaka 1205, Bangladesh. +88 02 58610793-8, +88 0241060908-18 info@labaidgroup.com",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/56-banglalink_head_office.webp",
                "category" => "Commercial",
                "title" => "Banglalink Head Office",
                "shortDes" => "Banglalink Digital Communication Ltd. is the best mobile operator that provides the strongest & widest network at each & every corner in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/57-grameenphone_head_office.webp",
                "category" => "Commercial",
                "title" => "Grameenphone Head Office",
                "shortDes" => "A public listed company with limited liability. Incorporated as private limited company on October 10, 1996 and subsequently converted to a public limited company on June 25, 2007.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/58-popular_pharmaceuticals.webp",
                "category" => "Commercial",
                "title" => "POPULAR PHARMACEUTICALS ,BOGRA",
                "shortDes" => "Popular Pharmaceuticals Ltd. (PPL) was established in 8 December 2002, with a vision to lead the branded generics market in Bangladesh with a high quality, diversified range of life saving and vital molecules.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/59-nandan_kanon_mars.webp",
                "category" => "Commercial",
                "title" => "NANDAN KANON MARS",
                "shortDes" => "Nandan Kanon is a promising name in Real Estate Business. We are capable of contributing to the emerging shape of Dhaka’s urban outlooks and life style and importantly meeting the basic needs and requirements of our valued clients. ",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/60-sq_sweaters.webp",
                "category" => "Commercial",
                "title" => "SQ Sweaters",
                "shortDes" => "SQ Sweater Limited was incorporated in Dhaka, Bangladesh with Registration Number 8783. Number of workers is 750. Basic Info. Name, SQ Sweater Limited",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/61-atlanta_trade_center_atc.webp",
                "category" => "Commercial",
                "title" => "Atlanta Trade Center ATC",
                "shortDes" => "Atlanta Trade Center ATC is a Exhibition and trade centre located at House 01, road 1/A Dhaka, Uttara, Dhaka, 1230, BD.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/62-state_university_of_bangladesh.webp",
                "category" => "University",
                "title" => "State University of Bangladesh",
                "shortDes" => "State University of Bangladesh is a private university in Dhanmondi, Dhaka, Bangladesh. It was established in 2002 under the Private University Act 1992.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/63-bof_golf_club.webp",
                "category" => "Commercial",
                "title" => "BOF Golf Club, Gazipur",
                "shortDes" => "BOF Golf Club is stands for Bangladesh Ordnance Factory. BOF Golf Club is situated at Inside Bangladesh Ordnance Factory. Bangladesh Ordnance Factory Golf Club 7 Hole Golf Course.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/64-zam_zam_tower.webp",
                "category" => "Commercial",
                "title" => "Zam Zam Tower",
                "shortDes" => "Bustling mall offering a wide range of retail shops, a grocery store, food court & kids' play area.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/65-HOTEL_SARINA.webp",
                "category" => "Residential",
                "title" => "Hotel Sarina",
                "shortDes" => "Hotel Sarina is a five-star business hotel located in the heart of Dhaka city.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/66-INTERCONTINENAL_HOTEL.webp",
                "category" => "Residential",
                "title" => "Intercontinental Hotel",
                "shortDes" => "The hotel is beautifully designed boasted with Millennium modern outlook with a touch of local culture.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/67-MARRIOT_HOTEL_CTG.webp",
                "category" => "Residential",
                "title" => "Marriott Hotel",
                "shortDes" => "Courtyard Marriott is an international chain of hotels operated by Courtyard by Marriott owned by Marriott International. It is currently under construction and located in Agrabad, the central business area in Chattogram, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/68-RAK_Tower.webp",
                "category" => "Commercial",
                "title" => "RAK Tower",
                "shortDes" => "RAK Tower is a corporate office of RAK ceramics ltd. It is located at Jashimiddin more in Uttara. There are many branded cloths shops are also in this tower.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/69-Universal_Hospital.webp",
                "category" => "Commercial",
                "title" => "Universal Hospital",
                "shortDes" => "Universal Medical Collage and General Hospital is a Multi-Speciality Hospitals in Dacca, Jahangir Nagar, Dhaka District, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/70-Square_Hospital.webp",
                "category" => "Commercial",
                "title" => "Square Hospital LTD",
                "shortDes" => "Square Hospitals Limited is a tertiary care hospital and the leading contributor of private healthcare services in Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/71-Labaid_Specialized_Hospital.webp",
                "category" => "Commercial",
                "title" => "Labaid Specialized Hospital",
                "shortDes" => "Labaid Specialty Hospital, a priority of Labaid cluster, is the solely specialized multidisciplinary tertiary care hospital in the Asian country that gives comprehensive treatment with the newest medical, surgical and diagnostic facilities.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/72-LABAID_GULSHAN.webp",
                "category" => "Hospital",
                "title" => "Labaid Gulshan",
                "shortDes" => "LABAID Diagnostic Gulshan. Address: Gulshan Medical Center, House-13/A, Road-35, Gulshan-02, Dhaka - 1212.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/73-Uttara_Square.webp",
                "category" => "Hospital",
                "title" => "Uttara Square",
                "shortDes" => "Uttara Square is a world class Shopping-cum Commercial complex equipped with all the latest modern amenities and situated at a prime location of the Commercial Zone",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/74-PLAZA_AR.webp",
                "category" => "Commercial",
                "title" => "Plaza AR",
                "shortDes" => "Plaza A.R Dhanmondi-28, Dhaka 1207. is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/75-RUPAYAN_SHOPNO_NILOY.webp",
                "category" => "Commercial",
                "title" => "Rupayan Shopno Niloy",
                "shortDes" => "Rupayan Swapno Niloy is located at 56, 57 Shiddheswari Road, Dhaka 1217, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/76-South_Symphony.webp",
                "category" => "Commercial",
                "title" => "South Symphony",
                "shortDes" => "South Symphony Building is a bank located at Gulshan Avenue South in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/77-South_Proshanti.webp",
                "category" => "Commercial",
                "title" => "South Proshanti",
                "shortDes" => "Plot No. 22 of Road No. 9A, Dhanmondi Residential Area, Dhaka measuring 1 (one) bigha is situated at the heart of Dhanmondi and the Plot faces the south",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/78-South_Water_Garden-A.webp",
                "category" => "Commercial",
                "title" => "South Water Garden-A",
                "shortDes" => "South Water Garden apartment building is located at United Nations Road, Baridhara diplomatic zone, an area where, as in the rest of Dhaka, green is an exception.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/79-South_Alif_Breeze.webp",
                "category" => "Commercial",
                "title" => "South Alif Breeze",
                "shortDes" => "This project one of the main features is its low glass boundary wall. Semiologically this is an urge to the society to revive the trust and respect. ",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/80-Labaid_Palace_De_Alam.webp",
                "category" => "Commercial",
                "title" => "Labaid Palace De Alam",
                "shortDes" => "The Palace De Alam from Labaid Properties Classic Collection gives you spacious 4-bedroom apartment in Gulshan-2 for a stylish and comfortable lifestyle.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/81-ARCHADIA_SYLHET.webp",
                "category" => "Commercial",
                "title" => "Archadia Shopping Mall",
                "shortDes" => "Arcadia is one of the most precious five star quality buildings in Sylhet city. It is total fiftin Stored Building. There are all worldclass brand shops here like Swapno, Le Re Ve, Lira, Inlot, BBB, Rise, Myth, Esatasy, Miror, Bookend, Madchef, Orion etc.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/82-RANGS_PEARL.webp",
                "category" => "Commercial",
                "title" => "RANGS Pearl",
                "shortDes" => "Rangs Pearl is a Premise, located at: 76 Road-12, Dhaka 1213, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/83-PFI_TOWER.webp",
                "category" => "Commercial",
                "title" => "PFI Tower",
                "shortDes" => "United Financial Trading Company Limited. Leading Stock Broker of Dhaka Stock Exchange & Chittagong Stock Exchange",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/84-Rupayan_City_Uttara.webp",
                "category" => "Commercial",
                "title" => "Rupayan City",
                "shortDes" => "Rupayan City, is a city development Company in Uttara Model Town. It is close to sector -12 of Uttara Model Town and covered by Rupayan Group.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/85-GREEN_DELTA_AIMS_TOWER.webp",
                "category" => "Commercial",
                "title" => "Green Delta Aims Tower",
                "shortDes" => "Green Delta AIMS Tower is one of the top rated place listed as Apartment & Condo Building in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/86-METRO_SHOPING_MALL.webp",
                "category" => "Commercial",
                "title" => "Metro Shopping Mall",
                "shortDes" => "Metro Shopping Center, Dhanmondi is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/87-MOFIZ_CHAMBER.webp",
                "category" => "Commercial",
                "title" => "Mofiz Chamber",
                "shortDes" => "Mofiz Chember is located at 75 Dilkusha Rd, Dhaka 1000, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/88-NISSAN_CAR_SHOWROOM.webp",
                "category" => "Commercial",
                "title" => "NISSAN CAR SHOWROOM",
                "shortDes" => "Nissan Motor Co., Ltd., trading as Nissan Motor Corporation and often shortened to Nissan, is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama, Japan.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/89-PRINCE_PLAZA.webp",
                "category" => "Commercial",
                "title" => "Prince Plaza",
                "shortDes" => "Prince Plaza located at 4/2, Sobhanbag, Dhanmondi, Dhaka-1207.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/90-HOSAF_TOWER.webp",
                "category" => "Commercial",
                "title" => "Hosaf Tower",
                "shortDes" => "Hosaf Tower, Malibagh Square, Dhaka is one of the popular place listed under Shopping/retail in Dhaka , Restaurant in Dhaka , Community Center in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/91-HA-MEEM_Fashions_LTD.webp",
                "category" => "Commercial",
                "title" => "HA-MEEM Fashions LTD",
                "shortDes" => "Ha-Meem Group is a leading supplier of readymade garments and denim fabric in the world. The company produces some of the most fashionable denim fabrics.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/92-Janakantha_Bhaban.webp",
                "category" => "Commercial",
                "title" => "Janakantha Bhaban",
                "shortDes" => "Bangla newspaper Janakantha started their journey on 21 February 1993. Janakantha daily newspaper in Bangladesh online has many features such as desher khobor",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/93-Navana_Bailey_Star.webp",
                "category" => "Commercial",
                "title" => "Navana Baily Star",
                "shortDes" => "Navana Baily Star is a Shopping mall. Address: 25, Natok Sharani, Baily Road, Ramna, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/94-Suraiya_Mansion.webp",
                "category" => "Commercial",
                "title" => "Suraiya Mansion",
                "shortDes" => "Suraiya Mansion is a Business center located at Suraiya Mansion, Kotwali, Chattogram, BD. The business is listed under business center category.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/95-Orchard_point.webp",
                "category" => "Commercial",
                "title" => "Orchard Point",
                "shortDes" => "Orchard Point is a popular shopping mall for fashionable products at Dhanmondi. The main clients of the market are the young generations.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/96-Novera_Square.webp",
                "category" => "Commercial",
                "title" => "Novera Square",
                "shortDes" => "Novera Square is a Business Center, located at: Dhaka, Bangladesh",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/97-Alliance_tower.webp",
                "category" => "Commercial",
                "title" => "Alliance Tower",
                "shortDes" => "Alliance Tower located at 63 KA Pragati Sarani, Baridhara, Dhaka-1212",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/98-Confidence_tower.webp",
                "category" => "Commercial",
                "title" => "Confidence Tower",
                "shortDes" => "Confidence Center, Shahajadpur, Badda, Dhaka is one of the top rated place listed as Professional Service in Dhaka ",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/99-Amin_Mohammad_group.webp",
                "category" => "Commercial",
                "title" => "Aman Group Corporation Office",
                "shortDes" => "Aman Group of Companies is one of the respected business houses in Bangladesh. It is a fast growing diversified private sector conglomerate.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/100-AJ_HEIGHTS.webp",
                "category" => "Commercial",
                "title" => "AJ Heights",
                "shortDes" => "Aj Heights is one of the popular Local Business located in ,Dhaka listed under Local business in Dhaka , Corporate Office in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/101-Denim_Asia.webp",
                "category" => "Commercial",
                "title" => "Denim Asia",
                "shortDes" => "Denim Asia Ltd. Is A Bangladesh Supplier, The Following Trade Report Data Is Derived From Its Trade Data; The Company's Import Data Up To 2023-01-25 Total 164 Transactions.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/102-DBL_Ceramics.webp",
                "category" => "Commercial",
                "title" => "DBL Ceramics",
                "shortDes" => "DBL Ceramics Limited started its journey with an unparalleled commitment to bring elegant and premium quality ceramic tiles to cater the needs of all sorts of building.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/103-Indian_High_Commision.webp",
                "category" => "Commercial",
                "title" => "Indian High Commission",
                "shortDes" => "High Commission of India, Dhaka is a Diplomatic Mission of Government of Republic of India In Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/104-Shurma_Tower.webp",
                "category" => "Commercial",
                "title" => "Surma Tower",
                "shortDes" => "Surma Tower is one of the top rated place listed as Shopping/retail in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/105-Shezan_Point.webp",
                "category" => "Commercial",
                "title" => "Shezan Point",
                "shortDes" => "Its beside farmgate market. Everything can be found here but in a bit higher price than farmgate market but thats not a problem if you can bargain well. The accessories and eyewear are unique and the mobile varieties and repair shops are also awesome.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/106-HRC_Bhavan.webp",
                "category" => "Commercial",
                "title" => "HRC Bhaban",
                "shortDes" => "HRC Bhaban is a building in Dhaka Division. HRC Bhaban is situated nearby to the post office DHL and Northern University Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/107-Moon_Hospital.webp",
                "category" => "Hospital",
                "title" => "Moon Hospital, Cumilla",
                "shortDes" => "Moon Hospital is a multi-specialty private hospital in Cumilla, We offer a wide variety of medical specialties and services that include 21 specialized.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/108-Rangs_KB_Square.webp",
                "category" => "Commercial",
                "title" => "Rangs KB Square",
                "shortDes" => "Rangs KB Square is one of the top rated place listed as Place To Eat/Drink in Dhaka , Residence in Dhaka , Commercial & Industrial in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/109-Navy_Headquarter.webp",
                "category" => "Commercial",
                "title" => "Navy Headquarter",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/110-Yakub_South_Center.webp",
                "category" => "Commercial",
                "title" => "Yakub South Center, Dhanmond",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/111-SA_Residence.webp",
                "category" => "Residential",
                "title" => "SA Residence",
                "shortDes" => "SA Residence is one of the most prominant residential project in our country which is widely known all over the world for its unique green architecture. This project was featured in top architectural publishers all around the world.",
                "pageLink" => route('website.project.single', 'sa-residence'),
                "cardClass" => "residential",
            ),
        );

        $projects = array_filter($allProjects, function($project) {
            return $project["cardClass"] == 'commercial';
        });
        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );

        return view('website.commercial-projects', compact('projects', 'clients'));
    }

    // return residential projects page
    public function residentialProjectsPage()
    {
        $allProjects = array(
            array(
                "image" => "assets/img/projects/1-Museum.webp",
                "category" => "Landmark",
                "title" => "Bangabandhu Military Museum",
                "shortDes" => "Bangladesh Military Museum is a military museum of Bangladesh. This is controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka.",
                "pageLink" => route('website.project.single', 'bangabandhu-military-museum'),
                "cardClass" => "landmark",

            ),
            array(
                "image" => "assets/img/projects/2-Bashundhara_city.webp",
                "category" => "Landmark",
                "title" => "Bashundhara City Shopping Mall",
                "shortDes" => "Bashundhara City is a shopping mall in Dhaka. The mall is located in Pantha path, near Kawran Bazar, and was opened to the public on 6 August 2004.",
                "pageLink" => route('website.project.single', 'bashundhara-city-shopping-mall'),
                "cardClass" => "landmark",
            ),
            array(
                "image" => "assets/img/projects/3-BAFA.webp",
                "category" => "Landmark",
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "shortDes" => "Bangladesh Air Force Academy is a training and education academy which provides initial training to all men and women who are prepar-ing to be officers in the Bangladesh Air Force.",
                "pageLink" => route('website.project.single', 'bangladesh-air-force-academy'),
                "cardClass" => "landmark",
            ),


            array(
                "image" => "assets/img/projects/4-Shadhinata-tower.webp",
                "category" => "Commercial",
                "title" => "Shadhinata Tower",
                "shortDes" => "A recently developed multi stored building in Dhaka with modern architectural beauty. Specially it appearance looks amazing due to inbuilt colorful automatic lighting system, which enhance the appearance of the building.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/5-Rupayan.webp",
                "category" => "Commercial",
                "title" => "Rupayan Trade Center",
                "shortDes" => "Rupayan Trade Center. Located at 114 Kazi Nazrul Islam Ave, Banglamotor Dhaka-1000",
                "pageLink" => route('website.project.single', 'rupayan-trade-center'),
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/6-smart_jahir_tower.webp",
                "category" => "Commercial",
                "title" => "Smart Jahir Tower",
                "shortDes" => "Smart Technologies (BD) Ltd, Jahir Smart Tower. Located at 220, 5 Begum Rokeya Ave, Dhaka",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/7-nafi_tower.webp",
                "category" => "Commercial",
                "title" => "Nafi Tower",
                "shortDes" => "Nafi Tower is a building in Dhaka Division located on Gulshan Avenue. Nafi Tower is situated nearby to the shopping centre Gulshan 1 DNCC Mall and the community centre Emmanuelle's Banquet Hall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/8-renaissance_hotel.webp",
                "category" => "Residential",
                "title" => "Renaissance Hotel",
                "shortDes" => "Renaissance Dhaka Gulshan Hotel has a restaurant, outdoor swimming pool, a fitness center and bar in Dhaka. Boasting family rooms, this property also provides guests with a sun terrace.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/9-nb_tower.webp",
                "category" => "Commercial",
                "title" => "NB tower",
                "shortDes" => "NB tower stands for Nuruzzaman Biswas Tower and it is located in Gulshan-2. Which is a very popular place in Dhaka city.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-siam_tower.webp",
                "category" => "Commercial",
                "title" => "Siam Tower",
                "shortDes" => "Siam Tower a project of Sharmin Holdings Limited has been in operation since the end of 2009. It is situated in Sector-3, Uttara, Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/10-paltan_china_town.webp",
                "category" => "Commercial",
                "title" => "PALTAN CHINA TOWN",
                "shortDes" => "Paltan China Town is a newly built shopping cum business center in Dhaka. The architecture is unique in design and can be seen easily from a distance due to its design",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/11-south-breeze.webp",
                "category" => "Commercial",
                "title" => "South Breeze",
                "shortDes" => "Corporate Head Office South Breeze Center Road 11, Building 05, 12th Floor, Block G, Banani, Dhaka 1213, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/12-crown_plaza.webp",
                "category" => "Commercial",
                "title" => "CROWN PLAZA",
                "shortDes" => "Crown Plaza Dhaka Gulshan, an IHG Hotel features a fitness center, a shared lounge and a sun terrace with swimming pool and buffet breakfast in Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/13-radisson_blu_hotel.webp",
                "category" => "Commercial",
                "title" => "RADISSON BLU HOTEL",
                "shortDes" => "Situated on seven acres of lush gardens in the heart of Dhaka's primary commercial hub, the Radisson Blu Dhaka Water Garden provides a serene escape from the bustle of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/14-six_seasons_hotel.webp",
                "category" => "Residential",
                "title" => "Six Seasons Hotel",
                "shortDes" => "Six Seasons is an extraordinary hotel that offers every indulgence. With per room expenditure matching or exceeding ultra-luxury hotels chains around Dhaka",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/15-old_sheraton_hotel.webp",
                "category" => "Residential",
                "title" => "OLD SHERATON HOTEL",
                "shortDes" => "The original building with the arched windows operated as the Inter-Continental Dacca until the management contract switched to ITT Sheraton in 1983.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/16-fars_hotel_resorts.webp",
                "category" => "Residential",
                "title" => "FARS HOTEL & RESORTS",
                "shortDes" => "This lavish property makes for a relaxing stay option with its stylish rooms, multiple dining venues and easy connectivity to popular areas of the city.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/17-iub.webp",
                "category" => "University",
                "title" => "Independent University, Bangladesh(IUB)",
                "shortDes" => "Independent University, Bangladesh or IUB is a one of the well renowned, prestigious and popular private university in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/18-dhaka_novo_theater.webp",
                "category" => "Commercial",
                "title" => "DHAKA NOVO THEATER",
                "shortDes" => "Novo Theatre is located within Dhaka and belongs to category Observatories and planetariums, Museum. ",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/19-bgb_darbal_hall.webp",
                "category" => "Commercial",
                "title" => " BGB DARBAL HALL",
                "shortDes" => "BGB Banquet Hall- a spectacular world class convention hall and conference center  is located in Shimanto shambhar beside shimanto square, Road 2 , Dhanmondi , Dhaka.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/20-sylhet_cantonment.webp",
                "category" => "Commercial",
                "title" => "SYLHET CANTONMENT",
                "shortDes" => "Sylhet Cantonment is a cantonment located in Sylhet, Bangladesh. Sylhet Cantonment is the home of the Bangladesh Army's 17th Infantry Division, the School of Infantry & Tactics (SI&T), Para Commando Brigade, 1 & 2 Para commando battalion of the Bangladesh Army.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/21-bangladesh_naval_academy.webp",
                "category" => "Commercial",
                "title" => "BANGLADESH NAVAL ACADEMY CHATTOGRAM",
                "shortDes" => "The Bangladesh Naval Academy is situated at the mouth of the Karnaphuli River at Patenga, Chittagong District, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/22-sher-e_bangla_national_cricket_stadium.webp",
                "category" => "Commercial",
                "title" => "SHER-E BANGLA NATIONAL CRICKET STADIUM",
                "shortDes" => "The Sher-e-Bangla National Cricket Stadium, also called Mirpur Stadium, is an International cricket ground in Mirpur, a few kilometres away from the capital of Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "Commercial",
            ),
            array(
                "image" => "assets/img/projects/23-mount_adora_hospital.webp",
                "category" => "Hospital",
                "title" => "MOUNT ADORA HOSPITAL",
                "shortDes" => "Mount Adora Hospital, Sylhet the reliable destination for Hospital, Consultation and Diagnostic Services",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/24-xtrenza_pharma.webp",
                "category" => "Commercial",
                "title" => "XTRENZA PHARMA",
                "shortDes" => "Xtrenza Pharmaceuticals Limited located at Park Road, Baridhara , Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/25-manama_urban_forest.webp",
                "category" => "Commercial",
                "title" => "MANAMA URBAN FOREST",
                "shortDes" => "Manama Urban Forest, designed by In Quest Design Studio, is a 10-story commercial building. With a focus on energy efficiency and a connection to nature.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/26-rangs_rl.webp",
                "category" => "Commercial",
                "title" => "RANGS RL",
                "shortDes" => "RL Square is precisely positioned in the Progati Sarani; where it serves as both a residential retreat as well a commercial expanse and a well-connected business hub, with the major city’s financial institutions, universities.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/27-mobil_house.webp",
                "category" => "Commercial",
                "title" => "MOBIL HOUSE, JESSORE",
                "shortDes" => "MJL Bangladesh Limited is the joint venture company between state owned Jamuna Oil Company and EC Securities Limited ( a subsidiary of the East Coast Group).",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/28-prasad_trade_center.webp",
                "category" => "Commercial",
                "title" => "PRAASAD TRADE CENTER",
                "shortDes" => "Prof. Dr. Abu Yousuf Md. Abdullah established the Praasad Group of Companies in the year 1996. Through a long process of organizational development, the company that started its activities almost from scratch, achieved rapid and steady growth.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/29-renata_pharmaceutical.webp",
                "category" => "Commercial",
                "title" => "Renata Pharmaceutical",
                "shortDes" => "Renata Limited, also known as Renata, is one of the top ten pharmaceutical manufacturers in Bangladesh. Renata is engaged in the manufacture and marketing of human pharmaceutical and animal health products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/30-opsonin_pharma.webp",
                "category" => "Commercial",
                "title" => "Opsonin Pharma Limited",
                "shortDes" => "Opsonin a Leading Pharmaceutical company in Bangladesh that creates value for its customers and other stakeholders by providing highest quality health care.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/31-nasir-trade-center.webp",
                "category" => "Commercial",
                "title" => "Nasir Trade Center",
                "shortDes" => "Nasir trade centre is a 16 floor multi storage building having different offices and shops. Limited car parking available. Building has three lifts. Head office of Healthcare pharmaceutical company limited is located at 89 Bir Uttam, CR Dutta Rd,, Dhaka, Bangladesh",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/32-grand_tower.webp",
                "category" => "Commercial",
                "title" => "GRAND TOWER",
                "shortDes" => "",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/33-silver_tower.webp",
                "category" => "Commercial",
                "title" => "SILVER TOWER",
                "shortDes" => "Silver Tower is a building in Dhaka Division located on Gulshan Avenue. Silver Tower is situated nearby to the community centre Emmanuelle's Banquet Hall and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/34-mir_onyx_yakub_tower.webp",
                "category" => "Commercial",
                "title" => "MIR Onyx Yakub Tower",
                "shortDes" => "14 Storied Mir Onyx Yakub Tower with 3 basement design at Dhanmondi for Mir Holdings Ltd",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/35-opex_group.webp",
                "category" => "Commercial",
                "title" => "OPEX GROUP",
                "shortDes" => "GENERAL Opex is one of the largest garment manufacturing conglomerates in Asia and has a complete vertical integrated setup in woven, denim, outwear, knit and sweater with most modern state of the art machineries from USA, Europe and Japan.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/36-mirpur_dohs_shopping_mall.webp",
                "category" => "Commercial",
                "title" => "MIRPUR DOHS SHOPPING MALL",
                "shortDes" => "Mirpur DOHS Shopping Complex is very popular for a great selection of fashion products.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/37-the_acme_laboratories_ltd.webp",
                "category" => "Commercial",
                "title" => "The ACME Laboratories Ltd",
                "shortDes" => "The ACME Laboratories Ltd. is one of the leading and diversified global conglomerates in Bangladesh, with offices in all major cities, employing over 6000+ employees and dedicated to bringing the highest quality products and services to our customers.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/38-lotus-kamal-tower-2.webp",
                "category" => "Commercial",
                "title" => "LOTUS KAMAL TOWER-2",
                "shortDes" => "The Lotus Kamal tower 2 is a bank in Dhaka Division located on Gulshan Avenue. Lotus Kamal tower 2 is situated nearby to the government office Embassy of Greece and the shopping centre Gulshan 1 DNCC Mall.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/39-westin_hotel.webp",
                "category" => "Residential",
                "title" => "WESTIN HOTEL",
                "shortDes" => "The Westin Dhaka is a Westin Hotel located at Gulshan Avenue in Dhaka. Its address is Plot-01, Road-45, Gulshan-2, Dhaka-1212, Bangladesh. At 86 m (282 ft), it is the tallest hotel in Bangladesh, and one of the tallest hotels in South Asia.",
                "pageLink" => '#',
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/40-AKH.webp",
                "category" => "Commercial",
                "title" => "AKH Group Head Office | AKH Tower",
                "shortDes" => "AKH is a one-stop source for overseas buyers to buy their high quality knit and woven garments from Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/41-anz-huq-eleven-square.webp",
                "category" => "Commercial",
                "title" => "Anz Huq Eleven Square",
                "shortDes" => "Anz Huq Eleven Square is a Shopping Mall, located at: Plot 1, Block H, Rd No. 11, Dhaka 1212, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/42-eunoos-center.webp",
                "category" => "Commercial",
                "title" => "Eunoos Trade Center",
                "shortDes" => "Eunoos Center is a multi-story office tower with abundant facilities & comfort in the commercial area of Dilkusha and Motijheel!",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/43-peoples_insurance_company_limited.webp",
                "category" => "Commercial",
                "title" => "Peoples Insurance Company Limited",
                "shortDes" => "Peoples Insurance Company Limited is proud to stand beside its’ valued customer and the general People of Bangladesh when they are in a disaster.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
             array(
                "image" => "assets/img/projects/44-sanmar_ocean_city.webp",
                "category" => "Commercial",
                "title" => "Sanmar Ocean City",
                "shortDes" => "One of the best shopping malls in Chattogram. You get almost everything under one roof. It also got a food corner like Bashundhara Market. The prices are a bit high. But you will get good quality things.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/45-mayor_mohammad_hanif_jame_masjid.webp",
                "category" => "Mosque",
                "title" => "Mayor Mohammad Hanif Jame Masjid",
                "shortDes" => "Mayor Mohammad Hanif Jame Mosque is a religious architecture project designed by SHATOTTO architecture for green living in Dhaka, Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/46-bsml_mosque.webp",
                "category" => "Mosque",
                "title" => "BSML MOSQUE, MANIKGONJ",
                "shortDes" => "The mosque interiors are strongly connected to the outside world. Natural light from windows, stain glasses and glass blocks skylights articulates the mosque spaces and brings daily and seasonal cycles into the interior.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/47-the_world_bank_in_bangladesh.webp",
                "category" => "Commercial",
                "title" => "The World Bank In Bangladesh",
                "shortDes" => "Bangladesh has an inspiring story of growth and development, aspiring to be an upper middle-income country by 2031. Since 1972, the World Bank has committed over $35 billion to support Bangladesh’s development journey.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/48-standard_chartered_bank.webp",
                "category" => "Commercial",
                "title" => "Standard Chartered Bank Head Office",
                "shortDes" => "Standard Chartered Bangladesh is a banking and financial services company headquartered in Dhaka, Bangladesh, and a wholly owned subsidiary of Standard Chartered. Standard Chartered has been operating in Bangladesh for over a hundred years.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/49-city_bank_head_office.webp",
                "category" => "Commercial",
                "title" => "City Bank Head Office",
                "shortDes" => "City Bank has been a study in evolution since its inception in 1983. The Bank embraces global best practices and is at the forefront of technological initiatives.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/50-mutual_trust_bank_ltd.webp",
                "category" => "Commercial",
                "title" => "Mutual Trust Bank Ltd. | Corporate Head Office",
                "shortDes" => "The Company was incorporated as a Public Limited Company on September 29, 1999, under the Companies Act 1994, with an Authorized Share Capital of BDT 1,000,000,000 divided into 10,000,000 ordinary shares of BDT 100 each.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/51-sheikh_hasina_burn_unit_institute_hospital.webp",
                "category" => "Hospital",
                "title" => "SHEIKH HASINA BURN UNIT INSTITUTE HOSPITAL",
                "shortDes" => "Sheikh Hasina National Institute of Burn and Plastic Surgery is a hospital dedicated for burn and plastic surgery situated in Dhaka, Bangladesh. It is regarded as the largest burn and plastic surgical care center in the world.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/52-monowara_hospital.webp",
                "category" => "Hospital",
                "title" => "Monowara Hospital Private Limited",
                "shortDes" => "Monowara Hospital (Pvt.) Ltd. is a real multi-hospital system in Dhaka City. This Hospital surgical suite includes of mainly modern and highly equipped three operation theatres.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/53-evercare_hospital.webp",
                "category" => "Hospital",
                "title" => "Evercare Hospital Dhaka",
                "shortDes" => "Evercare Hospital Dhaka is a 425- bed super-specialty tertiary care world-class hospitals, providing comprehensive health care with the cutting edge medical, surgical and diagnostic facilities, with an aim to establish a close synergy among medical skills, trained manpower, technology and advancements in IT.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/54-labaid_cancer_hospital.webp",
                "category" => "Hospital",
                "title" => "Labaid Cancer Hospital And Super Speciality Center",
                "shortDes" => "Labaid Cancer Hospital & Super Specialty Center is the complete integrated cancer hospital with the forefront of medical technologies and expertise in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/55-LABAID-Chattogram.webp",
                "category" => "Hospital",
                "title" => "LABAID CHATTOGRAM",
                "shortDes" => "LABAID Chattogram Hospital Get Us House- 06, Road-04, Dhanmondi, Dhaka 1205, Bangladesh. +88 02 58610793-8, +88 0241060908-18 info@labaidgroup.com",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/56-banglalink_head_office.webp",
                "category" => "Commercial",
                "title" => "Banglalink Head Office",
                "shortDes" => "Banglalink Digital Communication Ltd. is the best mobile operator that provides the strongest & widest network at each & every corner in Bangladesh.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/57-grameenphone_head_office.webp",
                "category" => "Commercial",
                "title" => "Grameenphone Head Office",
                "shortDes" => "A public listed company with limited liability. Incorporated as private limited company on October 10, 1996 and subsequently converted to a public limited company on June 25, 2007.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/58-popular_pharmaceuticals.webp",
                "category" => "Commercial",
                "title" => "POPULAR PHARMACEUTICALS ,BOGRA",
                "shortDes" => "Popular Pharmaceuticals Ltd. (PPL) was established in 8 December 2002, with a vision to lead the branded generics market in Bangladesh with a high quality, diversified range of life saving and vital molecules.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/59-nandan_kanon_mars.webp",
                "category" => "Commercial",
                "title" => "NANDAN KANON MARS",
                "shortDes" => "Nandan Kanon is a promising name in Real Estate Business. We are capable of contributing to the emerging shape of Dhaka’s urban outlooks and life style and importantly meeting the basic needs and requirements of our valued clients. ",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/60-sq_sweaters.webp",
                "category" => "Commercial",
                "title" => "SQ Sweaters",
                "shortDes" => "SQ Sweater Limited was incorporated in Dhaka, Bangladesh with Registration Number 8783. Number of workers is 750. Basic Info. Name, SQ Sweater Limited",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/61-atlanta_trade_center_atc.webp",
                "category" => "Commercial",
                "title" => "Atlanta Trade Center ATC",
                "shortDes" => "Atlanta Trade Center ATC is a Exhibition and trade centre located at House 01, road 1/A Dhaka, Uttara, Dhaka, 1230, BD.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/62-state_university_of_bangladesh.webp",
                "category" => "University",
                "title" => "State University of Bangladesh",
                "shortDes" => "State University of Bangladesh is a private university in Dhanmondi, Dhaka, Bangladesh. It was established in 2002 under the Private University Act 1992.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/63-bof_golf_club.webp",
                "category" => "Commercial",
                "title" => "BOF Golf Club, Gazipur",
                "shortDes" => "BOF Golf Club is stands for Bangladesh Ordnance Factory. BOF Golf Club is situated at Inside Bangladesh Ordnance Factory. Bangladesh Ordnance Factory Golf Club 7 Hole Golf Course.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/64-zam_zam_tower.webp",
                "category" => "Commercial",
                "title" => "Zam Zam Tower",
                "shortDes" => "Bustling mall offering a wide range of retail shops, a grocery store, food court & kids' play area.",
                "pageLink" => '#',
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/65-HOTEL_SARINA.webp",
                "category" => "Residential",
                "title" => "Hotel Sarina",
                "shortDes" => "Hotel Sarina is a five-star business hotel located in the heart of Dhaka city.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/66-INTERCONTINENAL_HOTEL.webp",
                "category" => "Residential",
                "title" => "Intercontinental Hotel",
                "shortDes" => "The hotel is beautifully designed boasted with Millennium modern outlook with a touch of local culture.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/67-MARRIOT_HOTEL_CTG.webp",
                "category" => "Residential",
                "title" => "Marriott Hotel",
                "shortDes" => "Courtyard Marriott is an international chain of hotels operated by Courtyard by Marriott owned by Marriott International. It is currently under construction and located in Agrabad, the central business area in Chattogram, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "residential",
            ),
            array(
                "image" => "assets/img/projects/68-RAK_Tower.webp",
                "category" => "Commercial",
                "title" => "RAK Tower",
                "shortDes" => "RAK Tower is a corporate office of RAK ceramics ltd. It is located at Jashimiddin more in Uttara. There are many branded cloths shops are also in this tower.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/69-Universal_Hospital.webp",
                "category" => "Commercial",
                "title" => "Universal Hospital",
                "shortDes" => "Universal Medical Collage and General Hospital is a Multi-Speciality Hospitals in Dacca, Jahangir Nagar, Dhaka District, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/70-Square_Hospital.webp",
                "category" => "Commercial",
                "title" => "Square Hospital LTD",
                "shortDes" => "Square Hospitals Limited is a tertiary care hospital and the leading contributor of private healthcare services in Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/71-Labaid_Specialized_Hospital.webp",
                "category" => "Commercial",
                "title" => "Labaid Specialized Hospital",
                "shortDes" => "Labaid Specialty Hospital, a priority of Labaid cluster, is the solely specialized multidisciplinary tertiary care hospital in the Asian country that gives comprehensive treatment with the newest medical, surgical and diagnostic facilities.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/72-LABAID_GULSHAN.webp",
                "category" => "Hospital",
                "title" => "Labaid Gulshan",
                "shortDes" => "LABAID Diagnostic Gulshan. Address: Gulshan Medical Center, House-13/A, Road-35, Gulshan-02, Dhaka - 1212.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/73-Uttara_Square.webp",
                "category" => "Hospital",
                "title" => "Uttara Square",
                "shortDes" => "Uttara Square is a world class Shopping-cum Commercial complex equipped with all the latest modern amenities and situated at a prime location of the Commercial Zone",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/74-PLAZA_AR.webp",
                "category" => "Commercial",
                "title" => "Plaza AR",
                "shortDes" => "Plaza A.R Dhanmondi-28, Dhaka 1207. is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/75-RUPAYAN_SHOPNO_NILOY.webp",
                "category" => "Commercial",
                "title" => "Rupayan Shopno Niloy",
                "shortDes" => "Rupayan Swapno Niloy is located at 56, 57 Shiddheswari Road, Dhaka 1217, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/76-South_Symphony.webp",
                "category" => "Commercial",
                "title" => "South Symphony",
                "shortDes" => "South Symphony Building is a bank located at Gulshan Avenue South in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/77-South_Proshanti.webp",
                "category" => "Commercial",
                "title" => "South Proshanti",
                "shortDes" => "Plot No. 22 of Road No. 9A, Dhanmondi Residential Area, Dhaka measuring 1 (one) bigha is situated at the heart of Dhanmondi and the Plot faces the south",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/78-South_Water_Garden-A.webp",
                "category" => "Commercial",
                "title" => "South Water Garden-A",
                "shortDes" => "South Water Garden apartment building is located at United Nations Road, Baridhara diplomatic zone, an area where, as in the rest of Dhaka, green is an exception.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/79-South_Alif_Breeze.webp",
                "category" => "Commercial",
                "title" => "South Alif Breeze",
                "shortDes" => "This project one of the main features is its low glass boundary wall. Semiologically this is an urge to the society to revive the trust and respect. ",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/80-Labaid_Palace_De_Alam.webp",
                "category" => "Commercial",
                "title" => "Labaid Palace De Alam",
                "shortDes" => "The Palace De Alam from Labaid Properties Classic Collection gives you spacious 4-bedroom apartment in Gulshan-2 for a stylish and comfortable lifestyle.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/81-ARCHADIA_SYLHET.webp",
                "category" => "Commercial",
                "title" => "Archadia Shopping Mall",
                "shortDes" => "Arcadia is one of the most precious five star quality buildings in Sylhet city. It is total fiftin Stored Building. There are all worldclass brand shops here like Swapno, Le Re Ve, Lira, Inlot, BBB, Rise, Myth, Esatasy, Miror, Bookend, Madchef, Orion etc.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/82-RANGS_PEARL.webp",
                "category" => "Commercial",
                "title" => "RANGS Pearl",
                "shortDes" => "Rangs Pearl is a Premise, located at: 76 Road-12, Dhaka 1213, Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/83-PFI_TOWER.webp",
                "category" => "Commercial",
                "title" => "PFI Tower",
                "shortDes" => "United Financial Trading Company Limited. Leading Stock Broker of Dhaka Stock Exchange & Chittagong Stock Exchange",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/84-Rupayan_City_Uttara.webp",
                "category" => "Commercial",
                "title" => "Rupayan City",
                "shortDes" => "Rupayan City, is a city development Company in Uttara Model Town. It is close to sector -12 of Uttara Model Town and covered by Rupayan Group.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/85-GREEN_DELTA_AIMS_TOWER.webp",
                "category" => "Commercial",
                "title" => "Green Delta Aims Tower",
                "shortDes" => "Green Delta AIMS Tower is one of the top rated place listed as Apartment & Condo Building in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/86-METRO_SHOPING_MALL.webp",
                "category" => "Commercial",
                "title" => "Metro Shopping Mall",
                "shortDes" => "Metro Shopping Center, Dhanmondi is one of the top rated place listed as Shopping Mall in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/87-MOFIZ_CHAMBER.webp",
                "category" => "Commercial",
                "title" => "Mofiz Chamber",
                "shortDes" => "Mofiz Chember is located at 75 Dilkusha Rd, Dhaka 1000, Bangladesh, Dhaka Division.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/88-NISSAN_CAR_SHOWROOM.webp",
                "category" => "Commercial",
                "title" => "NISSAN CAR SHOWROOM",
                "shortDes" => "Nissan Motor Co., Ltd., trading as Nissan Motor Corporation and often shortened to Nissan, is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama, Japan.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/89-PRINCE_PLAZA.webp",
                "category" => "Commercial",
                "title" => "Prince Plaza",
                "shortDes" => "Prince Plaza located at 4/2, Sobhanbag, Dhanmondi, Dhaka-1207.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/90-HOSAF_TOWER.webp",
                "category" => "Commercial",
                "title" => "Hosaf Tower",
                "shortDes" => "Hosaf Tower, Malibagh Square, Dhaka is one of the popular place listed under Shopping/retail in Dhaka , Restaurant in Dhaka , Community Center in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/91-HA-MEEM_Fashions_LTD.webp",
                "category" => "Commercial",
                "title" => "HA-MEEM Fashions LTD",
                "shortDes" => "Ha-Meem Group is a leading supplier of readymade garments and denim fabric in the world. The company produces some of the most fashionable denim fabrics.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/92-Janakantha_Bhaban.webp",
                "category" => "Commercial",
                "title" => "Janakantha Bhaban",
                "shortDes" => "Bangla newspaper Janakantha started their journey on 21 February 1993. Janakantha daily newspaper in Bangladesh online has many features such as desher khobor",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/93-Navana_Bailey_Star.webp",
                "category" => "Commercial",
                "title" => "Navana Baily Star",
                "shortDes" => "Navana Baily Star is a Shopping mall. Address: 25, Natok Sharani, Baily Road, Ramna, Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/94-Suraiya_Mansion.webp",
                "category" => "Commercial",
                "title" => "Suraiya Mansion",
                "shortDes" => "Suraiya Mansion is a Business center located at Suraiya Mansion, Kotwali, Chattogram, BD. The business is listed under business center category.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/95-Orchard_point.webp",
                "category" => "Commercial",
                "title" => "Orchard Point",
                "shortDes" => "Orchard Point is a popular shopping mall for fashionable products at Dhanmondi. The main clients of the market are the young generations.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/96-Novera_Square.webp",
                "category" => "Commercial",
                "title" => "Novera Square",
                "shortDes" => "Novera Square is a Business Center, located at: Dhaka, Bangladesh",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/97-Alliance_tower.webp",
                "category" => "Commercial",
                "title" => "Alliance Tower",
                "shortDes" => "Alliance Tower located at 63 KA Pragati Sarani, Baridhara, Dhaka-1212",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/98-Confidence_tower.webp",
                "category" => "Commercial",
                "title" => "Confidence Tower",
                "shortDes" => "Confidence Center, Shahajadpur, Badda, Dhaka is one of the top rated place listed as Professional Service in Dhaka ",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/99-Amin_Mohammad_group.webp",
                "category" => "Commercial",
                "title" => "Aman Group Corporation Office",
                "shortDes" => "Aman Group of Companies is one of the respected business houses in Bangladesh. It is a fast growing diversified private sector conglomerate.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/100-AJ_HEIGHTS.webp",
                "category" => "Commercial",
                "title" => "AJ Heights",
                "shortDes" => "Aj Heights is one of the popular Local Business located in ,Dhaka listed under Local business in Dhaka , Corporate Office in Dhaka.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/101-Denim_Asia.webp",
                "category" => "Commercial",
                "title" => "Denim Asia",
                "shortDes" => "Denim Asia Ltd. Is A Bangladesh Supplier, The Following Trade Report Data Is Derived From Its Trade Data; The Company's Import Data Up To 2023-01-25 Total 164 Transactions.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/102-DBL_Ceramics.webp",
                "category" => "Commercial",
                "title" => "DBL Ceramics",
                "shortDes" => "DBL Ceramics Limited started its journey with an unparalleled commitment to bring elegant and premium quality ceramic tiles to cater the needs of all sorts of building.",
                "pageLink" => "#",
                "cardClass" => "commercial",

            ),
            array(
                "image" => "assets/img/projects/103-Indian_High_Commision.webp",
                "category" => "Commercial",
                "title" => "Indian High Commission",
                "shortDes" => "High Commission of India, Dhaka is a Diplomatic Mission of Government of Republic of India In Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/104-Shurma_Tower.webp",
                "category" => "Commercial",
                "title" => "Surma Tower",
                "shortDes" => "Surma Tower is one of the top rated place listed as Shopping/retail in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/105-Shezan_Point.webp",
                "category" => "Commercial",
                "title" => "Shezan Point",
                "shortDes" => "Its beside farmgate market. Everything can be found here but in a bit higher price than farmgate market but thats not a problem if you can bargain well. The accessories and eyewear are unique and the mobile varieties and repair shops are also awesome.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/106-HRC_Bhavan.webp",
                "category" => "Commercial",
                "title" => "HRC Bhaban",
                "shortDes" => "HRC Bhaban is a building in Dhaka Division. HRC Bhaban is situated nearby to the post office DHL and Northern University Bangladesh.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/107-Moon_Hospital.webp",
                "category" => "Hospital",
                "title" => "Moon Hospital, Cumilla",
                "shortDes" => "Moon Hospital is a multi-specialty private hospital in Cumilla, We offer a wide variety of medical specialties and services that include 21 specialized.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/108-Rangs_KB_Square.webp",
                "category" => "Commercial",
                "title" => "Rangs KB Square",
                "shortDes" => "Rangs KB Square is one of the top rated place listed as Place To Eat/Drink in Dhaka , Residence in Dhaka , Commercial & Industrial in Dhaka",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/109-Navy_Headquarter.webp",
                "category" => "Commercial",
                "title" => "Navy Headquarter",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/110-Yakub_South_Center.webp",
                "category" => "Commercial",
                "title" => "Yakub South Center, Dhanmond",
                "shortDes" => "This military installation, located in Banani, is on the must-do list of many tourists. Pay the entrance fee and find out why it's such a hit.",
                "pageLink" => "#",
                "cardClass" => "commercial",
            ),
            array(
                "image" => "assets/img/projects/111-SA_Residence.webp",
                "category" => "Residential",
                "title" => "SA Residence",
                "shortDes" => "SA Residence is one of the most prominant residential project in our country which is widely known all over the world for its unique green architecture. This project was featured in top architectural publishers all around the world.",
                "pageLink" => route('website.project.single', 'sa-residence'),
                "cardClass" => "residential",
            ),
        );

        $projects = array_filter($allProjects, function($project) {
            return $project["cardClass"] == 'residential';
        });

        $clients = array(
            array(
                "image" => "assets/img/clients/mes.png",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.png",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.png",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.png",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.png",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/DGDP.png",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.png",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.png",
                "altText" => "DBL Group",
            ),
        );

        return view('website.residential-projects', compact('projects', 'clients'));
    }

    // return single project page
    public function singleProjectPage($slug)
    {
        $projects = array(
            array(
                "sliderImages" => [
                    "assets/img/projects/museum_cover.webp",
                ],
                "title" => "Bangabandhu Military Museum",
                "des" => "Bangladesh Military Museum is a military museum of Bangladesh. Controlled by the Bangladesh Army, the museum is located at Bijoy Sarani of capital Dhaka. The museum has a collection of Bangladesh's military history, heritage, success stories and various weapons and ammunition",
                "slug" => "bangabandhu-military-museum",
                "projectType" => "Landmark",
                "projectBy" => "Bangladesh Army(MES)",
                "consultant" => "Nakshabid Architect",
                "architects" => "Bayejid M. Khondoker Ali Imam",
                "mainContractors" => "Spectra Group",
                "facadeContractors" => "Dtech Corp. Ltd",
                "location" => "Bijoy Sarani, Dhaka 1215",
                "completion" => "06 January 2022",
                "scopes" => [
                    "39m dia, 19.5 height geodasic glass dome(CST, USA)",
                    "19m dia, art glass dome(Zamil, KSA)",
                    "Exterior & Interior glazing works"
                ]
            ),
            array(
                "sliderImages" => [
                    "assets/img/projects/bashundhara_city_cover.webp",
                ],
                "title" => "Bashundhara City Shopping Mall",
                "des" => "Bashundhara City is a shopping mall in Dhaka. The mall located in Panthapath, near Kawran Bazar and was opened to the public on 6 August 2004. The building complex is 19 stoies tall and overs an area of 17763 m2 (191200 sq 1), making it the second largest shopping mall in Bangladesh, ti also one of the largest shopping malls in South Asi, with up 0 50000 visitors each day",
                "slug" => "bashundhara-city-shopping-mall",
                "projectType" => "Landmark",
                "projectBy" => "Bashundhara Group",
                "consultant" => "Vistaara Architects Private Limited",
                "architects" => "Mustapha Khalid Palash, Mohammad Foyez Ullah",
                "mainContractors" => "Vistaara",
                "facadeContractors" => "Dtech Corp. Ltd & Zamil(KSA)",
                "location" => "3 No Tejturi Bazar West, Panthapath, Dhaka 1215",
                "completion" => "6 August 2004",
                "scopes" => [
                    "32m dia dome",
                    "Skylights",
                    "Glass curtain wall",
                    "Hand railing",
                    "Exterior & Interior ACP",
                    "Spider tension cable system",
                    "Glass door",
                    "Canopy",
                    "Space frame",
                ]
            ),
            array(
                "sliderImages" => [
                    "assets/img/projects/academy_cover.webp",
                ],
                "title" => "Bangladesh Air Force Academy (BAFA)",
                "des" => "Bangladesh Air Force Academy is training and education academy which provides intial training to all men and women who are preparing 10 be officers in the Bangladesh Alr Force. The Bangladesh Air Force Academy is located in the district town of ashore at Matiur Rahman Air Force Base.",
                "slug" => "bangladesh-air-force-academy",
                "projectType" => "Landmark",
                "projectBy" => "Bangladesh Air Force",
                "consultant" => "Professional Associates Ltd.",
                "architects" => "Monjur Kader, Hemayet Uddin",
                "mainContractors" => "Dtech Corp. Ltd",
                "facadeContractors" => "Dtech Corp. Ltd",
                "location" => "55V3+86R, BAF Academy Rd, Jashore",
                "completion" => "06 January 2022",
                "scopes" => [
                    "6 glass domes",
                    "Madina umbrella",
                    "Exterior & Interior glazing works"
                ]
            ),
            array(
                "sliderImages" => [
                    "assets/img/projects/sa_residence.webp"
                ],
                "title" => "SA Residence",
                "des" => "SA Residence is one of the most prominant residential project in our country which is widely known all over the world for its unique green architecture. This project was featured in top architectural publishers all around the world.",
                "slug" => "sa-residence",
                "projectType" => "Landmark",
                "projectBy" => "SA Group",
                "consultant" => "Shatotto",
                "architects" => "Rafiq Azam",
                "mainContractors" => "Shatotto",
                "facadeContractors" => "Dtech Corp. Ltd",
                "location" => "Gulshan, Dhaka",
                "completion" => "06 January 2022",
                "scopes" => [
                    "All exterior & interior glazing works"
                ]
            ),
        );
        $key = array_search($slug, array_column($projects, 'slug'));
        $project = $projects[$key];
        return view('website.project-single', compact('project'));
    }

    // return website projects page
    public function productsPage()
    {
        $products = array(
            array(
                "image" => "assets/img/products/cst-covers-logo.jpg",
                "title" => "CST COVERS",
                "pageLink" => "https://www.cstindustries.com/custom-cst-covers/",
            ),
            array(
                "image" => "assets/img/products/momentive-logo.webp",
                "title" => "MOMENTIVE",
                "pageLink" => "https://www.momentive.com/en-us",
            ),
            array(
                "image" => "assets/img/products/alpolic-logo.jpg",
                "title" => "ALPOLIC/FR",
                "pageLink" => asset('dtech-products/color_alpolic_alpolicfr.pdf'),
            ),
            array(
                "image" => "assets/img/products/zamil-logo.jpg",
                "title" => "ZAMIL",
                "pageLink" => "https://zamilarc.com/",
            ),
            array(
                "image" => "assets/img/products/bondsealant-logo.jpg",
                "title" => "BOND",
                "pageLink" => asset('dtech-products/BOND_Catalogue.pdf'),
            ),
            array(
                "image" => "assets/img/products/durlum-logo.jpg",
                "title" => "DUR LUM",
                "pageLink" => "https://www.durlum.com/en/",
            ),

        );
        return view('website.products', compact('products'));
    }

    // return website contact page
    public function contactPage()
    {
        return view('website.contact');
    }

    // handle website contact form
    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'firstName'     => 'required|string|min:2|max:255',
            'lastName'      => 'required|string|min:2|max:255',
            'email'         => 'required|string|email|min:4|max:255',
            'phoneNumber'   => 'required|min:11|max:14',
            'message'       => 'nullable|min:2',
        ]);

        $contactMessage = ContactMessage::create([
            'first_name'    => $request->firstName,
            'last_name'     => $request->lastName,
            'email'         => $request->email,
            'phone_number'  => $request->phoneNumber,
            'message'       => $request->message,
        ]);

        Mail::to('jasrazkhan@bondsealant.com')->send(new ContactMessageMail($contactMessage));
        return redirect()->back()->with('success', 'Contact message stored successfully!');
    }


    // return website contact page
    public function careerPage()
    {
        return view('website.career');
    }

    // handle career form
    public function submitCareerForm(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|min:2|max:255',
            'email'         => 'required|string|email|min:4|max:255',
            'phoneNumber'   => 'required|min:11|max:14',
            'position'      => 'required|min:2|max:255',
            'resume'        => 'required|file|max:10000|mimes:jpg,png,pdf,doc,docx',
            'message'       => 'nullable|min:2',
        ]);

        $file = $request->file('resume');
        $filename = time() . $file->getClientOriginalName();
        $file->storeAs('public/resumes', $filename);

        $applicantResume = ApplicantResume::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phoneNumber,
            'position'      => $request->position,
            'resume'        => $filename,
            'message'       => $request->message,
        ]);

        Mail::to('jasrazkhan@bondsealant.com')->send(new ApplicantResumeMail($applicantResume));
        return redirect()->back()->with('success', 'Resume stored successfully!');
    }

    // return website clients page
    public function ourClientsPage()
    {
        $clients = array(
            array(
                "image" => "assets/img/clients/mes.jpg",
                "altText" => "Military Engineer Services",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh-Army.jpg",
                "altText" => "Bangladesh Army",
            ),
            array(
                "image" => "assets/img/clients/Bangladesh_Navy.jpg",
                "altText" => "Bangladesh Navy",
            ),
            array(
                "image" => "assets/img/clients/BAF.jpg",
                "altText" => "Bangladesh Air Force",
            ),
            array(
                "image" => "assets/img/clients/BGB.jpg",
                "altText" => "Border Guard Bangladesh",
            ),
            array(
                "image" => "assets/img/clients/PWD.jpg",
                "altText" => "Public Works Department ",
            ),
            array(
                "image" => "assets/img/clients/DGDP.jpg",
                "altText" => "Directorate General Defense Purchase",
            ),
            array(
                "image" => "assets/img/clients/italian-thai.jpg",
                "altText" => "Italian-Thai Development",
            ),
            array(
                "image" => "assets/img/clients/tekken-aml-abenikko-jv.jpg",
                "altText" => "Tekken-AML-Abenikko JV",
            ),
            array(
                "image" => "assets/img/clients/metro-rail.jpg",
                "altText" => "DHAKA MASS TRANSIT COMPANY LIMITED",
            ),
            array(
                "image" => "assets/img/clients/bashundhara.jpg",
                "altText" => "Bashundhara Group",
            ),
            array(
                "image" => "assets/img/clients/south-breeze.jpg",
                "altText" => "South Breeze Housing Limited",
            ),
            array(
                "image" => "assets/img/clients/shanta-holdings.jpg",
                "altText" => "Shanta Holdings Limited",
            ),
            array(
                "image" => "assets/img/clients/spectra-group.jpg",
                "altText" => "spectra-group",
            ),
            array(
                "image" => "assets/img/clients/rangs-properties.jpg",
                "altText" => "Rangs Properties Limited",
            ),
            array(
                "image" => "assets/img/clients/concord.jpg",
                "altText" => "Concord Group",
            ),
            array(
                "image" => "assets/img/clients/doreen.jpg",
                "altText" => "Doreen Group",
            ),
            array(
                "image" => "assets/img/clients/jamuna-group.jpg",
                "altText" => "Jamuna Group",
            ),
            array(
                "image" => "assets/img/clients/united-group.jpg",
                "altText" => "United Group",
            ),
            array(
                "image" => "assets/img/clients/dbl.jpg",
                "altText" => "DBL Group",
            ),
            array(
                "image" => "assets/img/clients/rupayan-group.jpg",
                "altText" => "Rupayan Group",
            ),
            array(
                "image" => "assets/img/clients/volume-zero.jpg",
                "altText" => "VOLUMEZERO Limited",
            ),
            array(
                "image" => "assets/img/clients/bay.jpg",
                "altText" => "BAY",
            ),
            array(
                "image" => "assets/img/clients/abdul-monem-ltd.jpg",
                "altText" => "Abdul Monem Limited",
            ),
            array(
                "image" => "assets/img/clients/navana-group.jpg",
                "altText" => "Navana Group",
            ),
            array(
                "image" => "assets/img/clients/NDE.jpg",
                "altText" => "National Development Engineers Ltd",
            ),
            array(
                "image" => "assets/img/clients/envoy-group.jpg",
                "altText" => "Envoy Group",
            ),
            array(
                "image" => "assets/img/clients/akij-group.jpg",
                "altText" => "Akij Group",
            ),
            array(
                "image" => "assets/img/clients/mir-akhter-hossain-ltd.jpg",
                "altText" => "Mir Akhter Hossain Ltd",
            ),
            array(
                "image" => "assets/img/clients/akankha-group.jpg",
                "altText" => "Akankha Group",
            ),
            array(
                "image" => "assets/img/clients/opex.jpg",
                "altText" => "OPEX GROUP",
            ),
            array(
                "image" => "assets/img/clients/premier-group.jpg",
                "altText" => "Premium Group",
            ),
            array(
                "image" => "assets/img/clients/ha-meem-group.jpg",
                "altText" => "Ha-meem Group",
            ),
            array(
                "image" => "assets/img/clients/prasad.jpg",
                "altText" => "Praasad Trade Centre",
            ),
            array(
                "image" => "assets/img/clients/akh-group.jpg",
                "altText" => "AKH Group",
            ),
            array(
                "image" => "assets/img/clients/noman-group.jpg",
                "altText" => "Noman Group",
            ),
            array(
                "image" => "assets/img/clients/BGMEA.jpg",
                "altText" => "Bangladesh Garment Manufacturers and Exporters Association",
            ),
            array(
                "image" => "assets/img/clients/ACME.jpg",
                "altText" => "The ACME Laboratories Ltd",
            ),
            array(
                "image" => "assets/img/clients/sa-group.jpg",
                "altText" => "S. A. Group",
            ),
            array(
                "image" => "assets/img/clients/smart.jpg",
                "altText" => "Smart Technologies (BD) Ltd.",
            ),
            array(
                "image" => "assets/img/clients/mobil.jpg",
                "altText" => "Mobil",
            ),
            array(
                "image" => "assets/img/clients/beximco.jpg",
                "altText" => "BEXIMCO",
            ),
            array(
                "image" => "assets/img/clients/denim-asia-ltd.jpg",
                "altText" => "Denim Asia Limited",
            ),
            array(
                "image" => "assets/img/clients/LABAID.jpg",
                "altText" => "Labaid Group",
            ),
            array(
                "image" => "assets/img/clients/popular-hospital.jpg",
                "altText" => "Popular Diagnostic Centre",
            ),
            array(
                "image" => "assets/img/clients/square-hospital.jpg",
                "altText" => "Square Hospitals Ltd",
            ),
            array(
                "image" => "assets/img/clients/universal-medical.jpg",
                "altText" => "Universal Medical College Hospital Ltd.",
            ),
            array(
                "image" => "assets/img/clients/opsonin-pharma.jpg",
                "altText" => "Opsonin Pharma Limited",
            ),
            array(
                "image" => "assets/img/clients/renata.jpg",
                "altText" => "Renata Limited",
            ),
            array(
                "image" => "assets/img/clients/east-coast-group.jpg",
                "altText" => "East Coast Group",
            ),
            array(
                "image" => "assets/img/clients/MGH.jpg",
                "altText" => "MGH Group",
            ),
            array(
                "image" => "assets/img/clients/HRC.jpg",
                "altText" => "HRC Group",
            ),
            array(
                "image" => "assets/img/clients/LK-group.jpg",
                "altText" => "LK Group",
            ),
            array(
                "image" => "assets/img/clients/elegant.jpg",
                "altText" => "Elegant Group",
            ),
            array(
                "image" => "assets/img/clients/the-world-bank.jpg",
                "altText" => "World Bank",
            ),
            array(
                "image" => "assets/img/clients/standard-chartered.jpg",
                "altText" => "Standard Chartered",
            ),
            array(
                "image" => "assets/img/clients/AWR.jpg",
                "altText" => "AWR REAL ESTATE LIMITED",
            ),
            array(
                "image" => "assets/img/clients/amin-mohammad-group.jpg",
                "altText" => "Amin Mohammad Group",
            ),
            array(
                "image" => "assets/img/clients/RAK.jpg",
                "altText" => "RAK Ceramics",
            ),
            array(
                "image" => "assets/img/clients/SANMAR.jpg",
                "altText" => "Sanmar Properties Limited",
            ),
        );

        return view('website.all-clients', compact('clients'));
    }

    // return website suppliers page
    public function ourSuppliersPage()
    {
        $suppliers = array(
            array(
                "image" => "assets/img/suppliers/guardian-glass.png",
                "altText" => "Guardian Glass",
            ),
            array(
                "image" => "assets/img/suppliers/pilkington.png",
                "altText" => "PILKINGTON",
            ),
            array(
                "image" => "assets/img/suppliers/syp-group.png",
                "altText" => "SYP Group",
            ),
            array(
                "image" => "assets/img/suppliers/ppg.png",
                "altText" => "PPG Group",
            ),
            array(
                "image" => "assets/img/suppliers/jinjing.png",
                "altText" => "JINJING Group",
            ),
            array(
                "image" => "assets/img/suppliers/sg.png",
                "altText" => "SG Group",
            ),
            array(
                "image" => "assets/img/suppliers/agc.png",
                "altText" => "AGC Group",
            ),
            array(
                "image" => "assets/img/suppliers/saint-gobain.png",
                "altText" => "SAINT GOBAIN",
            ),
            array(
                "image" => "assets/img/suppliers/xyg.png",
                "altText" => "XYG",
            ),
            array(
                "image" => "assets/img/suppliers/rider-glass.png",
                "altText" => "Rider Glass",
            ),
            array(
                "image" => "assets/img/suppliers/wacang.png",
                "altText" => "WACANG",
            ),
            array(
                "image" => "assets/img/suppliers/jindal.png",
                "altText" => "JINDAL",
            ),
            array(
                "image" => "assets/img/suppliers/vvp.png",
                "altText" => "VVP",
            ),
            array(
                "image" => "assets/img/suppliers/hilti.png",
                "altText" => "HILTI",
            ),
            array(
                "image" => "assets/img/suppliers/fisher.png",
                "altText" => "FISHER",
            ),
            array(
                "image" => "assets/img/suppliers/3M.png",
                "altText" => "3M",
            ),
            array(
                "image" => "assets/img/suppliers/unbrako.png",
                "altText" => "Unbrako",
            ),
            array(
                "image" => "assets/img/suppliers/king-long.png",
                "altText" => "KING LONG",
            ),
            array(
                "image" => "assets/img/suppliers/closma.png",
                "altText" => "Closma",
            ),
            array(
                "image" => "assets/img/suppliers/osaka.png",
                "altText" => "OSAKA",
            ),
            array(
                "image" => "assets/img/suppliers/xinfa.png",
                "altText" => "XINFA ALUMINOUS",
            ),
            array(
                "image" => "assets/img/suppliers/3h.png",
                "altText" => "3H",
            ),
            array(
                "image" => "assets/img/suppliers/hindalco.png",
                "altText" => "Hindalco Industries",
            ),
            array(
                "image" => "assets/img/suppliers/only.png",
                "altText" => "ONLY",
            ),
        );
        return view('website.all-suppliers', compact('suppliers'));
    }


    public function filterByCommercial($project) {
        return $project["category"] ==  'Commercial';
    }

    public function show($slug)
    {
        // Logic to fetch service details from the database based on the $slug
        // Example: $service = Service::where('slug', $slug)->first();

        // For now, let's just return the slug to the view
        return view('service.show', ['slug' => $slug]);
    }

    public function blogPage()
    {
        $posts = \App\Models\Post::published()
            ->with(['author', 'categories'])
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('website.blog.index', compact('posts'));
    }

    public function blogSinglePage($slug)
    {
        $post = \App\Models\Post::published()
            ->with(['author', 'categories', 'tags'])
            ->where('slug', $slug)
            ->firstOrFail();

        $related = \App\Models\Post::published()
            ->with(['categories'])
            ->when($post->categories->isNotEmpty(), fn($q) =>
                $q->whereHas('categories', fn($q2) =>
                    $q2->whereIn('categories.id', $post->categories->pluck('id'))
                )
            )
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        $allCategories = \App\Models\Category::whereHas('posts')
            ->withCount('posts')
            ->orderByDesc('posts_count')
            ->get();

        $allTags = \App\Models\Tag::whereHas('posts')
            ->withCount('posts')
            ->orderByDesc('posts_count')
            ->take(20)
            ->get();

        return view('website.blog.single', compact('post', 'related', 'allCategories', 'allTags'));
    }
}