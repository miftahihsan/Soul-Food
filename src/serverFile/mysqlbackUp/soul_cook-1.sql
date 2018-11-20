-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 03:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soul_cook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `cook_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `speciality` varchar(256) NOT NULL,
  `cook_email` varchar(100) NOT NULL,
  `street_name` varchar(100) NOT NULL,
  `postal_code` varchar(11) NOT NULL,
  `cook_profile_pic` varchar(500) NOT NULL,
  `cook_info` varchar(4000) NOT NULL,
  `cook_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cook_id`, `user_id`, `verified`, `rating`, `speciality`, `cook_email`, `street_name`, `postal_code`, `cook_profile_pic`, `cook_info`, `cook_phone`) VALUES
(9, 'user_1', 1, 3, 'Pizza', 'mifahbk619@gmail.com', 'Kalabagan LakeCircus Dhaka', '1205', '2018-11-07.14-00-40-myImg.jpg', 'More then 15 year experience in finance, accounting and bookkeeping with all kind of accounting records allows to provide my customers successful performance Experienced in Sales, Service and Construction business areas. Banks, checking accounts, saving accounts, loans, payroll, vendors and customers. 7 years experience with finance - reports/business plans/models High level of understanding connections in initial docs, reconciliations , reports and taxation Use to pay close attention to details and respect companies timelines. Having strong organization skills, self motivated, open-mind and goal-orientated person', '01854771719'),
(11, 'user_4', 1, 0, 'Every thing', 'masterchef.uk@gmail.com', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '840', '2018-11-10.17-14-42-gordonRamsay.jpg', '<p><strong>Gordon Ramsay</strong>, (born November 8, 1966, <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/place/Glasgow-Scotland\">Glasgow</a>, Scotland), Scottish chef and restaurateur known for his highly acclaimed restaurants and cookbooks but perhaps best known in the early 21st century for the profanity and fiery temper that he freely displayed on television <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/topic/cooking\">cooking</a> programs.</p>\r\n<p>As a young boy, Ramsay moved with his family from <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/place/Scotland\">Scotland</a> to England, where he was raised in <a class=\"md-crosslink\" href=\"https://www.britannica.com/place/Stratford-upon-Avon\">Stratford-upon-Avon</a>. He played <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/sports/football-soccer\">association football</a> (soccer) for the Oxford United youth team, and at age 15 he was courted by the Scottish <a ', '01854771719'),
(13, 'user_3', 1, 0, 'Desserts', 'Quazi@gmail.com', 'Uttara Dhaka', '1240', '2018-11-19.15-29-08-quazi.jpg', '<p><strong>A chef is in charge of the kitchen</strong> in restaurants or other places where food is served. They watch all activity and food preparation with any staff that would assist in the kitchen. They supervise the preparation of food for it&rsquo;s garnishing and presentation, as well as, the seasonings for a perfect taste. A chef orders food or kitchen supplies and provides cost estimates to the employer. They monitor any staff requirements and production schedules to be sure any services are delivered on time. A chef or head cook needs to have knowledge of food preparation, production and processing. They need to have knowledge of customer and personal service in order to achieve customer satisfaction. They need to be current on public safety and security.</p>\r\n<p><strong>A chef should be skilled</strong> in monitoring, coordination and effectively speaking to others. They need skills of time management, active listening, judgement and decision making. He or she has the ability to create an idea or new application to enhance job performance among staff or themselves.</p>\r\n<p><strong>A chef would coach</strong> and develop other staff in the kitchen to improve their skills. Because a kitchen depends on a cooperative team effort, the chef or head cook would encourage staff to have mutual respect and trust for each other. A chef or head cook can be found working in restaurants, private households, hotels, casinos or other food service places. They work a variety of hours, such as, early morning, late evenings, holidays and week-ends. This occupation is very fast-paced and normally has full-time hours. You should expect strong competition especially at upscale restaurants, casinos, or hotels because of the higher salary paid in these places.</p>', '01987678987');

-- --------------------------------------------------------

--
-- Table structure for table `cook_dash_board`
--

CREATE TABLE `cook_dash_board` (
  `cook_id` int(11) NOT NULL,
  `total_money_earned` int(11) NOT NULL,
  `website_cut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cook_post`
--

CREATE TABLE `cook_post` (
  `post_id` int(11) NOT NULL,
  `cook_id` int(11) NOT NULL,
  `food_pic` varchar(256) NOT NULL,
  `food_title` varchar(256) NOT NULL,
  `food_description` varchar(3000) NOT NULL,
  `discount` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL,
  `cuisine` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook_post`
--

INSERT INTO `cook_post` (`post_id`, `cook_id`, `food_pic`, `food_title`, `food_description`, `discount`, `post_date`, `rating`, `cuisine`, `price`) VALUES
(8, 9, '2018-11-10.16-08-56-pizza.jpg', 'Pizza', '<p><span style=\"color: #ff0000;\"><strong>STARTERS</strong></span></p>\r\n<p><strong>BOB-O BREAD | 8.5 (12&rdquo;) &ndash; 14 (16&rdquo;)</strong><br />home-made dough topped with garlic butter &amp; mozzarella, w/pizza sauce<br /><strong>BREADED MUSHROOMS | 6</strong><br />(10-12) breaded &amp; deep fried button mushrooms, w/ranch<br /><strong>SMOTHERED CHEESE FRIES | 7.5</strong><br />seasoned fries smothered with a 3-cheese blend &amp; bacon pieces, w/ranch<br /><strong>NACHO SUPREME | 7.5</strong><br />taco chips with sausage, onion, jalapeno &amp; black olives, w/cheese sauce<br /><strong>CHICKEN TENDERS | 6.5</strong><br />(5) golden brown chicken tenders, w/ranch<br /><strong>MOZZARELLA STICKS | 6</strong><br />(6) breaded mozzarella sticks lightly fried, w/marinara<br /><strong>HAND-BREADED PICKLE CHIPS | 6</strong><br />lightly breaded and deep-fried dill pickles, w/home-made buffalo ranch<br /><strong>BREADED ONION RINGS | 6</strong><br />a stack of crispy beer-battered onion rings, w/ranch<br /><strong>BONE-IN CHICKEN WINGS | 7 (6pc) &ndash; 12 (12pc)</strong><br />1) choose flavor: asian, bbq, parmesan, spicy or plain (no sauce) || 2) choose dipping sauce: ranch or bleu cheese<br /><strong>THE SAMPLER | 10</strong><br />4 mozzarella sticks, 4 breaded mushrooms, 4 chicken strips, 4 onion rings &amp; fries, w/ranch &amp; marinara</p>\r\n<p><strong><span style=\"color: #ff0000;\">SALAD &amp; SOUP</span><br /></strong><br /><strong>DRESSING</strong>: ranch, bbq ranch, buffalo ranch, 1000 island, italian, bleu cheese, french, caesar<br />&ndash; please ask your server about any other available dressings<br /><strong>HOUSE SALAD | 3 (SIDE) &ndash; 7.5 (FULL)</strong> <strong>add grilled chicken | +1.5</strong><br />iceberg lettuce, garlic croutons, diced tomato &amp; cheddar cheese, w/your choice of dressing<br /><strong>CAESAR SALAD | 3 (SIDE) &ndash; 7.5 (FULL)</strong> <strong>add grilled chicken | +1.5</strong><br />romaine lettuce, garlic croutons, parmesan chee', 5, '2018-11-19 15:14:02', 0, 'Chinese cuisine', '500'),
(9, 11, '2018-11-10.17-21-38-masterCher.jpg', 'Chicken Bite', '<p>These irresistible Parmesan Chicken Bites are an amazing way of preparing chicken, without needing to deep fry.&nbsp; Crunchy on the outside while the inside remains tender and soft are simply hard to resist. Serve them with your favorite dipping sauce and&nbsp; you&rsquo;ve got a great lunch or dinner dish that all family will love, especially the kids.</p>\r\n<p>&nbsp;</p>\r\n<p>You can also make variations to this recipe like adding some chili flakes to make some spicy chicken bites or use different types of herbs according to your tastes.</p>\r\n<p>&nbsp;</p>\r\n<p><span id=\"title\">Nutrition facts</span>  <strong>1 Serving (206g)</strong> - Calories:434, Fat:11.1g, Saturated Fat:1.3g, Unsaturated Fat: 0.0g, Carbohydrates:26.6g, Sugar:2.5g, Fiber:1.8g, Protein:55.4g, Cholesterol:184mg, Calories from Fat 100, Sodium 459mg, Potassium 491mg, Vitamin A 6%, Vitamin C 2%, Calcium 10%, Iron 23%, Nutrition Grade A-, daily percent values are based on a 2000 calorie diet</p>', 0, '2018-11-19 15:14:06', 0, 'French', '300'),
(10, 11, '2018-11-19.14-32-48-chickeFry.jpg', 'Chicken Fry', '<p><strong>Fried chicken</strong> (also referred to as <strong>Southern fried chicken</strong> for the variant in the United States) is a dish consisting of <a class=\"mw-redirect\" title=\"Chicken (food)\" href=\"https://en.wikipedia.org/wiki/Chicken_(food)\">chicken</a> pieces usually from <a title=\"Broiler\" href=\"https://en.wikipedia.org/wiki/Broiler\">broiler</a> chickens which have been floured or <a title=\"Batter (cooking)\" href=\"https://en.wikipedia.org/wiki/Batter_(cooking)\">battered</a> and then <a title=\"Pan frying\" href=\"https://en.wikipedia.org/wiki/Pan_frying\">pan-fried</a>, <a title=\"Deep frying\" href=\"https://en.wikipedia.org/wiki/Deep_frying\">deep fried</a>, or <a title=\"Pressure frying\" href=\"https://en.wikipedia.org/wiki/Pressure_frying\">pressure fried</a>. The <a class=\"mw-redirect\" title=\"Breading\" href=\"https://en.wikipedia.org/wiki/Breading\">breading</a> adds a crisp coating or crust to the exterior of the chicken. What separates fried chicken from other fried forms of chicken is that generally the chicken is cut at the joints, and the bones and skin are left intact. Crisp well-seasoned skin, rendered of excess fat, is a hallmark of well made fried chicken.</p>\r\n<p>The first dish known to have been deep fried was <a class=\"mw-redirect\" title=\"Fritters\" href=\"https://en.wikipedia.org/wiki/Fritters\">fritters</a>, which were popular in the <a title=\"Middle Ages\" href=\"https://en.wikipedia.org/wiki/Middle_Ages\">Middle Ages</a>. However, it was the <a title=\"Scottish people\" href=\"https://en.wikipedia.org/wiki/Scottish_people\">Scottish</a> who were the first Europeans to deep fry their chicken in fat (though without seasoning). Meanwhile, a number of <a title=\"West Africa\" href=\"https://en.wikipedia.org/wiki/West_Africa\">West African</a> peoples had traditions of seasoned fried chicken (though battering and cooking the chicken in palm oil). Scottish frying techniques and West African seasoning techniques were combined by enslaved Africans and African-Americans in the <a class=\"mw-redirect\" title=\"American South\" href=\"https://en.wikipedia.org/wiki/American_South\">American South</a>.</p>\r\n<p>Prior to the rise of synthetic <a class=\"mw-redirect\" title=\"Pesticides\" href=\"https://en.wikipedia.org/wiki/Pesticides\">pesticides</a> in the <a class=\"mw-redirect\" title=\"Second World War\" href=\"https://en.wikipedia.org/wiki/Second_World_War\">Second World War</a> and their role in the development of <a title=\"Intensive animal farming\" href=\"https://en.wikipedia.org/wiki/Intensive_animal_farming\">intensive industrial animal farming</a>, chicken meat was a delicacy and very expensive. Eating chicken, including fried chicken, was only enjoyed on special occasions. Then, with intensive chicken husbandry, and especially in the late 1900s and early 2000s with mass-production of fried chicken, the price of the dish has gone down significantly.</p>\r\n<p>When being cooked, fried chicken is often divided into smaller pieces. The chicken is then generally cove', 0, '2018-11-19 15:14:13', 0, 'Bengali', '320'),
(11, 11, '2018-11-19.14-35-22-curryBowl.jpg', 'Curry Bowl', '<p><strong>Curry</strong> (plural <strong>curries</strong>) is an <a title=\"Umbrella term\" href=\"https://en.wikipedia.org/wiki/Umbrella_term\">umbrella term</a> referring to a number of dishes originating in the <a title=\"Indian subcontinent\" href=\"https://en.wikipedia.org/wiki/Indian_subcontinent\">Indian subcontinent</a>. The common feature is the use of complex <a title=\"Spice mix\" href=\"https://en.wikipedia.org/wiki/Spice_mix\">combinations of spices or herbs</a>, usually including ground turmeric, cumin, coriander, ginger, and fresh or dried chilies. The use of the term is generally limited to dishes prepared in a sauce.<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Curry#cite_note-1\">[1]</a></sup> Curry dishes prepared in the southern states of India, where the word also originated, may be spiced with leaves from the <a title=\"Curry tree\" href=\"https://en.wikipedia.org/wiki/Curry_tree\">curry tree</a>.<sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Curry#cite_note-2\">[2]</a></sup></p>\r\n<p>There are many varieties of dishes called \'curries\'. For example, in original traditional cuisines, the precise selection of spices for each dish is a matter of national or regional cultural tradition, religious practice, and, to some extent, family preference. Such dishes are called by specific names that refer to their ingredients, spicing, and cooking methods.<sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Curry#cite_note-3\">[3]</a></sup> Spices are used both whole and ground, cooked or raw, and they may be added at different times during the cooking process to produce different results. The main spices found in most curry powders of the Indian subcontinent are <a title=\"Coriander\" href=\"https://en.wikipedia.org/wiki/Coriander\">coriander</a>, <a title=\"Cumin\" href=\"https://en.wikipedia.org/wiki/Cumin\">cumin</a>, and <a title=\"Turmeric\" href=\"https://en.wikipedia.org/wiki/Turmeric\">turmeric</a>. A wide range of additional spices may be included depending on the geographic region and the foods being included (fish, lentils, red or white meat, rice, and vegetables).<sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Curry#cite_note-4\">[4]</a></sup> <a title=\"Curry powder\" href=\"https://en.wikipedia.org/wiki/Curry_powder\">Curry powder</a>, a commercially prepared mixture of spices, is largely a Western creation, dating to the 18th century. Such mixtures are commonly thought to have first been prepared by Indian merchants for sale to members of the <a title=\"British Raj\" href=\"https://en.wikipedia.org/wiki/British_Raj\">British Colonial government and army</a> returning to Britain.</p>\r\n<p>Dishes called \'curry\' may contain fish, meat, poultry, or shellfish, either alone or in combination with vegetables. Additionally, many instead are entirely vegetarian, eaten especially among those who hold ethical or religious proscriptions against eating meat o', 5, '2018-11-19 15:14:17', 0, 'Indian', '400'),
(12, 9, '2018-11-19.15-12-58-spicyChickenCurry.png', 'spicy chicken curry', '<p>This dish was introduced to <a title=\"Trinidad and Tobago\" href=\"https://en.wikipedia.org/wiki/Trinidad_and_Tobago\">Trinidad and Tobago</a> by <a title=\"Indian indenture system\" href=\"https://en.wikipedia.org/wiki/Indian_indenture_system\">indentured</a> <a class=\"mw-redirect\" title=\"Indo-Trinidadian\" href=\"https://en.wikipedia.org/wiki/Indo-Trinidadian\">Indian</a> workers. At that time, the dish was very similar to the chicken curry dish of <a title=\"India\" href=\"https://en.wikipedia.org/wiki/India\">India</a>, consisting mostly of sauce with few chicken pieces. However, poultry in <a title=\"Trinidad and Tobago\" href=\"https://en.wikipedia.org/wiki/Trinidad_and_Tobago\">Trinidad and Tobago</a> was so readily available, the dish began consisting of mainly chicken, flavored with curry spices. As Trinidadians continued to find their own identity in the world, new curry chicken type dishes began forming. <em><a title=\"Curry goat\" href=\"https://en.wikipedia.org/wiki/Curry_goat\">Curry goat</a></em> and <em>curry duck</em> have become widely popular. Curry chicken and its derivatives are also popular in <a title=\"Suriname\" href=\"https://en.wikipedia.org/wiki/Suriname\">Suriname</a>, <a title=\"Guyana\" href=\"https://en.wikipedia.org/wiki/Guyana\">Guyana</a>, <a title=\"Jamaica\" href=\"https://en.wikipedia.org/wiki/Jamaica\">Jamaica</a>, <a title=\"Barbados\" href=\"https://en.wikipedia.org/wiki/Barbados\">Barbados</a>, <a title=\"Grenada\" href=\"https://en.wikipedia.org/wiki/Grenada\">Grenada</a>, and other <a title=\"Caribbean\" href=\"https://en.wikipedia.org/wiki/Caribbean\">Caribbean</a> territories with <a class=\"mw-redirect\" title=\"Indo-Caribbean\" href=\"https://en.wikipedia.org/wiki/Indo-Caribbean\">Indian and South Asian</a> influence.</p>', 0, '2018-11-19 15:14:20', 0, 'Bengali', '399'),
(13, 9, '2018-11-19.15-14-30-cookies.png', 'cookies', '<p>A <strong>cookie</strong> is a <a class=\"mw-redirect\" title=\"Baked goods\" href=\"https://en.wikipedia.org/wiki/Baked_goods\">baked</a> or cooked food that is small, flat and sweet. It usually contains <a title=\"Flour\" href=\"https://en.wikipedia.org/wiki/Flour\">flour</a>, <a title=\"Sugar\" href=\"https://en.wikipedia.org/wiki/Sugar\">sugar</a> and some type of <a title=\"Cooking oil\" href=\"https://en.wikipedia.org/wiki/Cooking_oil\">oil</a> or <a title=\"Fat\" href=\"https://en.wikipedia.org/wiki/Fat\">fat</a>. It may include other ingredients such as <a title=\"Raisin\" href=\"https://en.wikipedia.org/wiki/Raisin\">raisins</a>, <a title=\"Oat\" href=\"https://en.wikipedia.org/wiki/Oat\">oats</a>, <a title=\"Chocolate chip\" href=\"https://en.wikipedia.org/wiki/Chocolate_chip\">chocolate chips</a>, nuts, etc.</p>\r\n<p>In most English-speaking countries except for the United States and Canada, crisp cookies are called <strong><a class=\"mw-redirect\" title=\"Biscuits\" href=\"https://en.wikipedia.org/wiki/Biscuits\">biscuits</a></strong>. Chewier biscuits are sometimes called <em>cookies</em> even in the United Kingdom.<sup id=\"cite_ref-:0_2-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Cookie#cite_note-:0-2\">[2]</a></sup> Some cookies may also be named by their shape, such as <a class=\"mw-redirect\" title=\"Date squares\" href=\"https://en.wikipedia.org/wiki/Date_squares\">date squares</a> or bars.</p>\r\n<p>Cookies or biscuits may be mass-produced in factories, made in small bakeries or homemade. Biscuit or cookie variants include <a title=\"Sandwich cookie\" href=\"https://en.wikipedia.org/wiki/Sandwich_cookie\">sandwich biscuits</a>, such as <a title=\"Custard cream\" href=\"https://en.wikipedia.org/wiki/Custard_cream\">custard creams</a>, <a title=\"Jammie Dodgers\" href=\"https://en.wikipedia.org/wiki/Jammie_Dodgers\">Jammie Dodgers</a>, <a title=\"Bourbon biscuit\" href=\"https://en.wikipedia.org/wiki/Bourbon_biscuit\">Bourbons</a> and <a title=\"Oreo\" href=\"https://en.wikipedia.org/wiki/Oreo\">Oreos</a>, with marshmallow or jam filling and sometimes dipped in chocolate or another sweet coating. Cookies are often served with beverages such as <a title=\"Milk\" href=\"https://en.wikipedia.org/wiki/Milk\">milk</a>, <a title=\"Coffee\" href=\"https://en.wikipedia.org/wiki/Coffee\">coffee</a> or <a title=\"Tea\" href=\"https://en.wikipedia.org/wiki/Tea\">tea</a>. Factory-made cookies are sold in <a title=\"Grocery store\" href=\"https://en.wikipedia.org/wiki/Grocery_store\">grocery stores</a>, <a title=\"Convenience store\" href=\"https://en.wikipedia.org/wiki/Convenience_store\">convenience stores</a> and <a title=\"Vending machine\" href=\"https://en.wikipedia.org/wiki/Vending_machine\">vending machines</a>. Fresh-baked cookies are sold at <a title=\"Bakery\" href=\"https://en.wikipedia.org/wiki/Bakery\">bakeries</a> and <a title=\"Coffeehouse\" href=\"https://en.wikipedia.org/wiki/Coffeehouse\">coffeehouses</a>, with the latter ranging from small business-sized establishments to multinational corporations such ', 0, '2018-11-19 15:14:24', 0, 'American', '250'),
(14, 9, '2018-11-19.15-20-41-darkForest.jpg', 'Dark Forest', '<p><span class=\"ILfuVd\"><strong>Black Forest Cake</strong> has been around for ages and is a traditional German <strong>cake</strong> known for its layers of chocolate <strong>cake</strong>, whipped cream, cherries and most importantly, a clear liqueur made from sour cherries called kirschwasser. It\'s a delicious <strong>cake</strong> that\'s perfect for this time of year with all the fresh cherries available.</span></p>', 0, '2018-11-19 15:14:27', 0, 'Cake', '1000'),
(15, 13, '2018-11-19.15-31-08-brownies.jpg', 'Borwnies', '<p>A <strong>chocolate brownie</strong> (commonly referred to as simply <strong>brownie</strong>) is a square, <a title=\"Baking\" href=\"https://en.wikipedia.org/wiki/Baking\">baked</a>, chocolate dessert. Brownies come in a variety of forms and may be either fudgy or cakey, depending on their density. They may include nuts, frosting, cream cheese, chocolate chips, or other ingredients. A variation made with <a title=\"Vanilla\" href=\"https://en.wikipedia.org/wiki/Vanilla\">vanilla</a> rather than chocolate in the batter is called a blonde brownie or <a title=\"Blondie (confection)\" href=\"https://en.wikipedia.org/wiki/Blondie_(confection)\">blondie</a>. The brownie was developed in the United States at the end of the 19th century and popularized in the U.S. and Canada during the first half of the 20th century.</p>\r\n<p>Brownies are typically eaten by hand, often accompanied by milk, served warm with ice cream (<a class=\"extiw\" title=\"wikt:a la mode\" href=\"https://en.wiktionary.org/wiki/a_la_mode\">a la mode</a>), topped with whipped cream, or sprinkled with powdered sugar and fudge. In North America they are common lunchbox treats,<sup class=\"noprint Inline-Template Template-Fact\" style=\"white-space: nowrap;\">[<em><a title=\"Wikipedia:Citation needed\" href=\"https://en.wikipedia.org/wiki/Wikipedia:Citation_needed\"><span title=\"This claim needs references to reliable sources. (August 2017)\">citation needed</span></a></em>]</sup> and also popular in restaurants<sup id=\"cite_ref-FOOTNOTESaekel_1-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Chocolate_brownie#cite_note-FOOTNOTESaekel-1\">[1]</a></sup> and <a title=\"Coffeehouse\" href=\"https://en.wikipedia.org/wiki/Coffeehouse\">coffeehouses</a>.</p>', 0, '2018-11-19 15:14:30', 0, 'American', '600'),
(16, 13, '2018-11-19.15-32-24-mousse.jpg', 'Choclate Mousse', '<p>A <strong>mousse</strong> (French \'foam\' <span class=\"nowrap\"><span class=\"IPA nopopups noexcerpt\"><a title=\"Help:IPA/English\" href=\"https://en.wikipedia.org/wiki/Help:IPA/English\">/<span style=\"border-bottom: 1px dotted;\"><span title=\"/Ëˆ/: primary stress follows\">Ëˆ</span><span title=\"\'m\' in \'my\'\">m</span><span title=\"/uË/: \'oo\' in \'goose\'\">uË</span><span title=\"\'s\' in \'sigh\'\">s</span></span>/</a></span></span>) is a soft prepared food that incorporates air bubbles to give it a light and airy texture. It can range from light and fluffy to creamy and thick, depending on preparation techniques. A mousse may be sweet or <a class=\"mw-redirect\" title=\"Savoriness\" href=\"https://en.wikipedia.org/wiki/Savoriness\">savoury</a>.<sup id=\"cite_ref-foodterms_1-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-foodterms-1\">[1]</a></sup></p>\r\n<p>Sweet mousses are typically made with <a title=\"Egg white\" href=\"https://en.wikipedia.org/wiki/Egg_white#Egg_white_foam\">whipped egg whites</a>, <a title=\"Whipped cream\" href=\"https://en.wikipedia.org/wiki/Whipped_cream\">whipped cream</a>,<sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-2\">[2]</a></sup> or both, and flavored with one or more of chocolate, coffee, caramel,<sup id=\"cite_ref-3\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-3\">[3]</a></sup> pur&eacute;ed fruits, or various herbs and spices, such as <a title=\"Peppermint\" href=\"https://en.wikipedia.org/wiki/Peppermint\">mint</a> or <a title=\"Vanilla\" href=\"https://en.wikipedia.org/wiki/Vanilla\">vanilla</a>.<sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-4\">[4]</a></sup> In the case of some chocolate mousses, egg yolks are often stirred into melted chocolate to give the final product a richer mouthfeel. Mousses are also typically chilled before being served, which gives them a denser texture. Sweetened mousse is served as a dessert, or used as an airy cake filling. It is sometimes stabilized with gelatin.<sup id=\"cite_ref-Hyman_5-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-Hyman-5\">[5]</a></sup><sup id=\"cite_ref-6\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-6\">[6]</a></sup></p>\r\n<p>Savory mousses can be made from meat, fish, shellfish, <a title=\"Foie gras\" href=\"https://en.wikipedia.org/wiki/Foie_gras\">foie gras</a>, cheese, or vegetables. Hot mousses often get their light texture from the addition of beaten egg whites.<sup id=\"cite_ref-foodterms_1-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Mousse#cite_note-foodterms-1\">[1]</a></sup></p>', 0, '2018-11-19 15:14:35', 0, 'French', '699');

-- --------------------------------------------------------

--
-- Table structure for table `helper_table_cart`
--

CREATE TABLE `helper_table_cart` (
  `cart_id` varchar(20) NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `cook_id` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helper_table_user`
--

CREATE TABLE `helper_table_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helper_table_user`
--

INSERT INTO `helper_table_user` (`id`, `user_id`) VALUES
(1, 'user_1'),
(2, 'user_2'),
(3, 'user_3'),
(4, 'user_4');

-- --------------------------------------------------------

--
-- Table structure for table `trending_table`
--

CREATE TABLE `trending_table` (
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_middle_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_phone_number` varchar(11) NOT NULL,
  `user_street_address` varchar(256) NOT NULL,
  `user_postal_code` int(11) NOT NULL,
  `is_cook` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_email`, `user_password`, `user_first_name`, `user_middle_name`, `user_last_name`, `user_phone_number`, `user_street_address`, `user_postal_code`, `is_cook`) VALUES
(1, 'miftahbk619@gmail.com', '$2y$10$odHaoR12wg5RCKl0qWtdm.AJpTupG7cXyZ91R/KclVSGJCRZqmoiK', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Dhanmondi Dhaka', 1205, 1),
(2, 'miftah.uddin.mohammad.ihsan@g.bracu.ac.bd', '$2y$10$LzjQVx0RreAR/.H0Vv/oxe6OPC.Wmgb5Yp5JxFNanOWLKzu3CiF6u', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Gulshan Dhaka', 1205, 0),
(3, 'Quazi@gmail.com', '$2y$10$y3MFSQX739koZZtx4hYHHeeJkh2efa1iv2I17U.oGax/Sv..VDF3K', 'Quazi', 'Nafiz', 'Ahmed', '01743661617', 'Rayar Bazar Dhaka', 1202, 1),
(4, 'masterchef.uk@gmail.com', '$2y$10$5Y7yFDTw5PckcFXvd7otqOPLvYbzJBm4LYhB6RFuPeYIWO3343Oyy', 'Gordon', 'James', 'Ramsay', '0114541979', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', 840, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `cart_helper_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_favourite_cook`
--

CREATE TABLE `user_favourite_cook` (
  `user_id` varchar(11) NOT NULL,
  `cook_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `youtube_videos`
--

CREATE TABLE `youtube_videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_description` varchar(2000) NOT NULL,
  `video` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube_videos`
--

INSERT INTO `youtube_videos` (`video_id`, `video_title`, `video_description`, `video`) VALUES
(1, '5 Dairy-Free Desserts', '\r\nIngredients\r\n<br>\r\n    2 cups applesauce\r\n    1-1/2 cups sugar\r\n    1/2 cup shortening\r\n    2 large eggs, lightly beaten\r\n    2 cups all-purpose flour\r\n    1 tablespoon baking cocoa\r\n    1-1/2 teaspoons baking soda\r\n    1 teaspoon salt\r\n    1 teaspoon each ground cinnamon, nutmeg, allspice and cloves\r\n    1 cup raisins\r\n    1/2 cup semisweet chocolate chips\r\n    1/2 cup chopped walnuts\r\n    TOPPING:\r\n    1/2 cup semisweet chocolate chips\r\n    1/2 cup chopped walnuts\r\n    2 tablespoons brown sugar\r\n\r\nDirections\r\n\r\n    In a large bowl, beat the applesauce, sugar, shortening and eggs. Combine the flour, cocoa, baking soda, salt, cinnamon, nutmeg, allspice and cloves; gradually beat into applesauce mixture until blended. Stir in the raisins, chocolate chips and walnuts.\r\n    Pour into a greased 13x9-in. baking pan. Combine topping ingredients and sprinkle over batter. Bake at 350° for 35-40 minutes or until a toothpick inserted in the center comes out clean. Cool on a wire rack.\r\n\r\nNutrition Facts\r\n1 piece: 227 calories, 10g fat (3g saturated fat), 18mg cholesterol, 185mg sodium, 34g carbohydrate (23g sugars, 2g fiber), 3g protein. ', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/F9hCmN0AbCY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Triple Decker Cheesecake Tower', '\r\n    Heat oven to 350 degrees F.\r\n    Mix graham crumbs, butter and 1/4 cup sugar; press onto bottom of 9-inch springform pan.\r\n    Beat cream cheese and remaining sugar in large bowl with mixer until blended. Add sour cream and vanilla; mix well. Add eggs, 1 at a time, beating on low speed after each addition just until blended. Pour over crust.\r\n    Bake 1 hour to 1 hour 10 min. or until center is almost set. Run knife around rim of pan to loosen cake; cool before removing rim. Refrigerate cheesecake 4 hours.\r\n    Top with pie filling before serving.\r\n\r\nYou might also like\r\nPHILADELPHIA Pumpkin Swirl Cheesecake\r\n\r\nSee how to make an impressive, surprisingly easy, marbled pumpkin cheesecake.\r\nPHILADELPHIA \'Fruit Smoothie\' Cheesecake\r\n\r\nSee how to make a scrumptious, berry-filled, no-bake cheesecake.\r\nSpring Mini Cheesecake\r\n\r\nThese individual desserts are as fun as they are delicious.\r\nGet the magazine\r\nSubscribe to Allrecipes Magazine\r\nGet a full year for $10!\r\n\r\nCook 5-star weekday dinners every time.\r\nFootnotes\r\n\r\n    Kraft Kitchens Tips\r\n    Size-Wise: Since this indulgent cheesecake makes 16 servings, it is the perfect dessert to serve at your next party.\r\n    Substitute: Prepare using PHILADELPHIA Neufchatel Cheese.\r\n    How to Easily Cut Creamy Desserts\r\n    When cutting creamy-textured desserts, such as cheesecake, carefully wipe off the knife blade between cuts with a clean damp towel. This prevents the creamy filling from building up on the blade, ensuring nice clean cuts that leave the filling intact.\r\n\r\n', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/aPxEDahIz6k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Giant Veggie Burger', '\r\n\r\nWith just four ingredients and a few seasonings, you really won\'t find an easier (or tastier) vegetarian and vegan veggie burger recipe anywhere. You are likely to find yourself using this recipe over and over.\r\n\r\nThese veggie burgers cook up quickly when pan-fried in a little oil, perfect for a quick weekday meal. But they aren\'t quite firm enough to toss on the backyard grill. This veggie burger recipe calls for no animal products, but it isn\'t gluten-free as it uses breadcrumbs and flour.\r\n\r\nOne thing that makes it quick is that it uses canned black beans. That\'s a big convenience, but you can start with dried for fresh beans and cook them until they are soft, as will be needed for mashing. The volume needed would be 1 2/3 cup cooked black beans.\r\n\r\nThe seasoned salt makes a big difference in the flavor. Use your favorite seasoned salt or, if preferred, you can use regular salt.\r\n\r\nOnce you get the knack of making your own veggie burgers, you won\'t have to spend more money on frozen veggie burger patties. Plus, you have control over all of the ingredients.\r\n\r\n\r\nIngredients\r\n\r\n    1/2 onion (chopped small)\r\n    1 (14-ounce) can black beans (well-drained)\r\n    2 slices bread (crumbled)\r\n    1/2 teaspoon seasoned salt\r\n    1 teaspoon garlic powder\r\n    1 teaspoon onion powder\r\n    1/2 cup flour\r\n    Dash salt (or to taste)\r\n    Dash pepper (or to taste)\r\n    Oil for frying (divided) ', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/yL9iCFaupgM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Apple Stack Cake', '\r\n    Make the apple filling: Combine the dried apples, brown sugar, cinnamon, ginger, nutmeg, and water in a large pot over medium-high heat. Bring to a light boil, then reduce the heat to low. Cook for 30 minutes-1 hour, or until the apples are tender and have absorbed the liquid.\r\n    Mash the apples with a potato masher until no large chunks remain. Remove from the heat and let cool.\r\n    Make the cake: In a large bowl, combine the flour, baking powder, baking soda, salt, and cinnamon.\r\n    In a separate large bowl, cream together the butter and sugar until light and fluffy.\r\n    Add the eggs and molasses, and whisk until fully incorporated and the mixture is light brown.\r\n    Add ? of the flour mixture to the wet ingredients and fold with a spatula until fully incorporated. Add half of the buttermilk and stir until fully combined. Continue alternating with the remaining flour and buttermilk, fully incorporating each addition before adding the next. The batter will be thicker than a traditional cake batter.\r\n    Chill the cake batter for 30 minutes.\r\n    Preheat the oven to 350?F (180?C). Grease as many 9-inch (22-cm) cake pans as you have and line with parchment paper.\r\n    Dump the cake batter onto a floured surface and dust with more flour. Pat into a rectangle, then divide into 5 equal pieces.\r\n    Transfer a piece of cake batter to a prepared pan and pat into an even layer. Bake for 12 minutes, until firm. Repeat with the remaining layers. Let cool completely.\r\n    To assemble, add a cake layer to a serving plate and top with a layer of apple filling. Spread evenly. Repeat with the remaining cake layers and filling.\r\n    Wrap the cake in plastic wrap and chill for 24 hours.\r\n    Dust the cake with powdered sugar, then slice and serve.\r\n    Enjoy!\r\n', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/odUV-rfkKOU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'The Best One-Bowl Brownies', '     Make the apple filling: Combine the dried apples, brown sugar, cinnamon, ginger, nutmeg, and water in a large pot over medium-high heat. Bring to a light boil, then reduce the heat to low. Cook for 30 minutes-1 hour, or until the apples are tender and have absorbed the liquid.     Mash the apples with a potato masher until no large chunks remain. Remove from the heat and let cool.     Make the cake: In a large bowl, combine the flour, baking powder, baking soda, salt, and cinnamon.     In a separate large bowl, cream together the butter and sugar until light and fluffy.     Add the eggs and molasses, and whisk until fully incorporated and the mixture is light brown.     Add ? of the flour mixture to the wet ingredients and fold with a spatula until fully incorporated. Add half of the buttermilk and stir until fully combined. Continue alternating with the remaining flour and buttermilk, fully incorporating each addition before adding the next. The batter will be thicker than a traditional cake batter.     Chill the cake batter for 30 minutes.     Preheat the oven to 350?F (180?C). Grease as many 9-inch (22-cm) cake pans as you have and line with parchment paper.     Dump the cake batter onto a floured surface and dust with more flour. Pat into a rectangle, then divide into 5 equal pieces.     Transfer a piece of cake batter to a prepared pan and pat into an even layer. Bake for 12 minutes, until firm. Repeat with the remaining layers. Let cool completely.     To assemble, add a cake layer to a serving plate and top with a layer of apple filling. Spread evenly. Repeat with the remaining cake layers and filling.     Wrap the cake in plastic wrap and chill for 24 hours.     Dust the cake with powdered sugar, then slice and serve.     Enjoy!', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/p5eX25gbisQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'Salted Caramel Apple Pie', 'Optional Add-Ins\r\n\r\nI threw in over 1 cup of chocolate chunks IN AND ON these (I used 45% cocoa chocolate), but you can also add:\r\n\r\n    crushed nuts (peanuts, walnuts, pecans, almonds, etc)\r\n    dried fruits (dates, blueberries, cranberries, raisins)\r\n    shredded coconut\r\n    caramel pieces\r\n    diced marshmallows\r\n    peanut butter chips\r\n\r\nStart with 1/2 cup each add in, or 1 cup if using only one option.\r\nBaking Pans\r\n\r\nHere’s where things got interesting during testing. I used three different baking pans, and they all came out PERFECT! It all depends on your preference of thickness:\r\n\r\n    A 7×11-inch pan yielded thicker brownies (about 2-inches thick), baked for 40-45 minutes and slightly uneven in consistency (fudgier in the centre and harder around the edges).\r\n    An 8×12-inch pan yielded the perfect brownies and MY personal favourite (just over 1-inch thick), baked for just under 25 minutes and resulted in just the right thickness and consistency, while still ooey, gooey and chewy.\r\n    A 9×13-inch pan resulted in thinner brownies (about 3/4 of an inch) and even consistency throughout. Baked for around 18 minutes. Perfect texture but I prefer slightly thicker slices.\r\n\r\nPlease note: some readers find using darker or black pans comment that baking goods bake a lot darker and drier underneath, while readers commenting using lighter pans yield better more even and better results.', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/OWlS6uJIp8Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`cook_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cook_dash_board`
--
ALTER TABLE `cook_dash_board`
  ADD PRIMARY KEY (`cook_id`);

--
-- Indexes for table `cook_post`
--
ALTER TABLE `cook_post`
  ADD PRIMARY KEY (`post_id`,`cook_id`),
  ADD KEY `cook_id` (`cook_id`);

--
-- Indexes for table `helper_table_cart`
--
ALTER TABLE `helper_table_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `helper_table_user`
--
ALTER TABLE `helper_table_user`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `trending_table`
--
ALTER TABLE `trending_table`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_favourite_cook`
--
ALTER TABLE `user_favourite_cook`
  ADD PRIMARY KEY (`user_id`,`cook_id`),
  ADD KEY `cook_id` (`cook_id`);

--
-- Indexes for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `cook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cook_post`
--
ALTER TABLE `cook_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube_videos`
--
ALTER TABLE `youtube_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cook`
--
ALTER TABLE `cook`
  ADD CONSTRAINT `cook_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `helper_table_user` (`user_id`);

--
-- Constraints for table `cook_dash_board`
--
ALTER TABLE `cook_dash_board`
  ADD CONSTRAINT `cook_dash_board_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);

--
-- Constraints for table `cook_post`
--
ALTER TABLE `cook_post`
  ADD CONSTRAINT `cook_post_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);

--
-- Constraints for table `helper_table_user`
--
ALTER TABLE `helper_table_user`
  ADD CONSTRAINT `helper_table_user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_favourite_cook`
--
ALTER TABLE `user_favourite_cook`
  ADD CONSTRAINT `user_favourite_cook_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
