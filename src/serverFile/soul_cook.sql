-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 07:27 AM
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
  `cook_info` varchar(1000) NOT NULL,
  `cook_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cook_id`, `user_id`, `verified`, `rating`, `speciality`, `cook_email`, `street_name`, `postal_code`, `cook_profile_pic`, `cook_info`, `cook_phone`) VALUES
(9, 'user_1', 1, 3, 'Pizza', 'mifahbk619@gmail.com', 'Kalabagan LakeCircus Dhaka', '1205', '2018-11-07.14-00-40-myImg.jpg', 'More then 15 year experience in finance, accounting and bookkeeping with all kind of accounting records allows to provide my customers successful performance Experienced in Sales, Service and Construction business areas. Banks, checking accounts, saving accounts, loans, payroll, vendors and customers. 7 years experience with finance - reports/business plans/models High level of understanding connections in initial docs, reconciliations , reports and taxation Use to pay close attention to details and respect companies timelines. Having strong organization skills, self motivated, open-mind and goal-orientated person', '01854771719'),
(11, 'user_4', 1, 0, 'Every thing', 'masterchef.uk@gmail.com', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', '840', '2018-11-10.17-14-42-gordonRamsay.jpg', '<p><strong>Gordon Ramsay</strong>, (born November 8, 1966, <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/place/Glasgow-Scotland\">Glasgow</a>, Scotland), Scottish chef and restaurateur known for his highly acclaimed restaurants and cookbooks but perhaps best known in the early 21st century for the profanity and fiery temper that he freely displayed on television <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/topic/cooking\">cooking</a> programs.</p>\r\n<p>As a young boy, Ramsay moved with his family from <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/place/Scotland\">Scotland</a> to England, where he was raised in <a class=\"md-crosslink\" href=\"https://www.britannica.com/place/Stratford-upon-Avon\">Stratford-upon-Avon</a>. He played <a class=\"md-crosslink autoxref\" href=\"https://www.britannica.com/sports/football-soccer\">association football</a> (soccer) for the Oxford United youth team, and at age 15 he was courted by the Scottish <a ', '01854771719');

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
  `food_description` varchar(2000) NOT NULL,
  `discount` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook_post`
--

INSERT INTO `cook_post` (`post_id`, `cook_id`, `food_pic`, `food_title`, `food_description`, `discount`, `post_date`, `rating`) VALUES
(8, 9, '2018-11-10.16-08-56-pizza.jpg', 'Pizza', '<p><span style=\"color: #ff0000;\"><strong>STARTERS</strong></span></p>\r\n<p><strong>BOB-O BREAD | 8.5 (12&rdquo;) &ndash; 14 (16&rdquo;)</strong><br />home-made dough topped with garlic butter &amp; mozzarella, w/pizza sauce<br /><strong>BREADED MUSHROOMS | 6</strong><br />(10-12) breaded &amp; deep fried button mushrooms, w/ranch<br /><strong>SMOTHERED CHEESE FRIES | 7.5</strong><br />seasoned fries smothered with a 3-cheese blend &amp; bacon pieces, w/ranch<br /><strong>NACHO SUPREME | 7.5</strong><br />taco chips with sausage, onion, jalapeno &amp; black olives, w/cheese sauce<br /><strong>CHICKEN TENDERS | 6.5</strong><br />(5) golden brown chicken tenders, w/ranch<br /><strong>MOZZARELLA STICKS | 6</strong><br />(6) breaded mozzarella sticks lightly fried, w/marinara<br /><strong>HAND-BREADED PICKLE CHIPS | 6</strong><br />lightly breaded and deep-fried dill pickles, w/home-made buffalo ranch<br /><strong>BREADED ONION RINGS | 6</strong><br />a stack of crispy beer-battered onion rings, w/ranch<br /><strong>BONE-IN CHICKEN WINGS | 7 (6pc) &ndash; 12 (12pc)</strong><br />1) choose flavor: asian, bbq, parmesan, spicy or plain (no sauce) || 2) choose dipping sauce: ranch or bleu cheese<br /><strong>THE SAMPLER | 10</strong><br />4 mozzarella sticks, 4 breaded mushrooms, 4 chicken strips, 4 onion rings &amp; fries, w/ranch &amp; marinara</p>\r\n<p><strong><span style=\"color: #ff0000;\">SALAD &amp; SOUP</span><br /></strong><br /><strong>DRESSING</strong>: ranch, bbq ranch, buffalo ranch, 1000 island, italian, bleu cheese, french, caesar<br />&ndash; please ask your server about any other available dressings<br /><strong>HOUSE SALAD | 3 (SIDE) &ndash; 7.5 (FULL)</strong> <strong>add grilled chicken | +1.5</strong><br />iceberg lettuce, garlic croutons, diced tomato &amp; cheddar cheese, w/your choice of dressing<br /><strong>CAESAR SALAD | 3 (SIDE) &ndash; 7.5 (FULL)</strong> <strong>add grilled chicken | +1.5</strong><br />romaine lettuce, garlic croutons, parmesan chee', 5, '2018-11-10 15:08:56', 0),
(9, 11, '2018-11-10.17-21-38-masterCher.jpg', 'Chicken Bite', '<p>These irresistible Parmesan Chicken Bites are an amazing way of preparing chicken, without needing to deep fry.&nbsp; Crunchy on the outside while the inside remains tender and soft are simply hard to resist. Serve them with your favorite dipping sauce and&nbsp; you&rsquo;ve got a great lunch or dinner dish that all family will love, especially the kids.</p>\r\n<p>&nbsp;</p>\r\n<p>You can also make variations to this recipe like adding some chili flakes to make some spicy chicken bites or use different types of herbs according to your tastes.</p>\r\n<p>&nbsp;</p>\r\n<p><span id=\"title\">Nutrition facts</span>  <strong>1 Serving (206g)</strong> - Calories:434, Fat:11.1g, Saturated Fat:1.3g, Unsaturated Fat: 0.0g, Carbohydrates:26.6g, Sugar:2.5g, Fiber:1.8g, Protein:55.4g, Cholesterol:184mg, Calories from Fat 100, Sodium 459mg, Potassium 491mg, Vitamin A 6%, Vitamin C 2%, Calcium 10%, Iron 23%, Nutrition Grade A-, daily percent values are based on a 2000 calorie diet</p>', 0, '2018-11-10 16:21:38', 0);

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
(1, 'miftahbk619@gmail.com', '$2y$10$odHaoR12wg5RCKl0qWtdm.AJpTupG7cXyZ91R/KclVSGJCRZqmoiK', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Kalabagan LakeCircus Dhaka', 1205, 1),
(2, 'miftah.uddin.mohammad.ihsan@g.bracu.ac.bd', '$2y$10$LzjQVx0RreAR/.H0Vv/oxe6OPC.Wmgb5Yp5JxFNanOWLKzu3CiF6u', 'Miftah', 'Uddin Md', 'Ihsan', '01843661619', 'Kalabagan LakeCircus Dhaka', 1205, 0),
(3, 'Quazi@gmail.com', '$2y$10$y3MFSQX739koZZtx4hYHHeeJkh2efa1iv2I17U.oGax/Sv..VDF3K', 'Quazi', 'Nafiz', 'Ahmed', '01743661617', 'Rayar Bazar Dhaka', 1202, 0),
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
  MODIFY `cook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cook_post`
--
ALTER TABLE `cook_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
