CREATE DATABASE  IF NOT EXISTS `clicktraveler` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `clicktraveler`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: clicktraveler
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `continent` varchar(45) DEFAULT NULL,
  `descr` text,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Paris','France','Europe','Lingering over pain au chocolat in a sidewalk café, relaxing after a day of strolling along the Seine and marveling at icons like the Eiffel Tower and the Arc de Triomphe… the perfect Paris experience combines leisure and liveliness with enough time to savor both an exquisite meal and exhibits at the Louvre. Awaken your spirit at Notre Dame, bargain hunt at the Marché aux Puces de Montreuil or for goodies at the Marché Biologique Raspail, then cap it all off with a risqué show at the Moulin Rouge.',48.8567,2.3508,'4','2015-07-21 15:08:40','2015-07-21 15:09:11'),(2,'New York City','USA','North America','Conquering New York in one visit is impossible. Instead, hit the must-sees – the Empire State Building, the Statue of Liberty, Central Park, the Metropolitan Museum of Art – and then explore off the beaten path with visits to The Cloisters or one of the city’s libraries. Indulge in the bohemian shops of the West Village or the fine dining of the Upper West Side. The bustling marketplace inside of Grand Central Station gives you a literal taste of the best the city has to offer.',40.7127,-74.0059,'4','2015-07-21 15:09:11','2015-07-21 15:09:11'),(3,'Washington, D.C.','USA','North America','Washington DC is a hub for American politics and history. Attracting as many school field trips as it does travelers the district offers a peek into the country’s democratic origin. There are plenty of free museums to take advantage of but the real draw here is the memorials and monuments dedicated to great American leaders. Spend some contemplative time at the Reflecting Pool within the National Mall, among the most patriotic places in the country.',38.9047,-77.0164,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(4,'Miami','USA','North America','Miami is hot hot hot! And it’s not just the sultry weather. Here, the nightlife is scorching, thanks to a strong Latin influence and spicy salsa culture. Dance the noche away in a nightclub, or indulge in a fancy meal at one of the city’s celebrity-owned restaurants. By day, hit the beach of course, or have yourself a walkabout, taking in Miami’s colorful art deco architecture. Grab a Cuban sandwich in Little Havana, then ride the vintage carousel at Virginia Key Beach Park.',25.7753,-80.2089,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(5,'St. Louis','USA','North America','The history of St. Louis has been heavily influenced by Westward expansion and blues music. The big \"must-see\" in this region is the Gateway Arch, while other important sites include the Museum of Westward Expansion, the St. Louis Cathedral and the Anheuser-Busch factory tour. The city offers plenty for the whole family. Children will enjoy the local zoo and the Magic House, while family members will also want to unwind at Forest Park, home to the World\'s Fair almost a century ago.',38.6272,-90.1978,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(6,'Dallas','USA','North America','You may have all heard that everything is bigger in Texas. Well, Dallas does its best to fulfill that promise. You\'ll find several museums with vast art collections and fascinating specialty museums like The Sixth Floor Museum/Texas School Book Depository, which, though small in size, offers an immense amount of information about the assassination of John F. Kennedy. And of course, visit a local steakhouse for a terrific (and enormous) meal.',32.7767,-96.797,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(7,'San Diego','USA','North America','San Diego embodies laid-back California culture, complete with a Boardwalk, surfing communities, and outstanding Mexican food. Breathe in the fresh ocean air at Sunset Cliffs Natural Park, then gobble down a fresh fish taco at a La Jolla seafood joint. The naval aircrafts at the USS Midway Museum will have you standing at attention. A free Sunday concert at the Spreckels Organ Pavilion is the perfect way to unwind after a Saturday night bar-hop in the thumping Gaslamp Quarter.',32.715,-117.162,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(8,'Seattle','USA','North America','In Seattle you simply can’t skip the Central Public Library – a modern architectural marvel of glass grids, unusual shapes, and a “book spiral” that climbs four stories. Stroll over to Pike Place Market to visit the original Starbucks and play catch with a fishmonger. In the heart of the city lies Chihuly Garden and Glass, which will dazzle you with its colorful and delicate works. Glide to the top of the Space Needle for panoramic views of the surrounding mountain ranges and Puget Sound.',47.6097,-122.333,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(9,'Anchorage','USA','North America','Set amid the coastal Chugach Mountains, Anchorage defies popular visions of polar ice caps and frozen tundra. It’s also warmer than you think (averaging 65 degrees in summer), making conditions ideal for sight-seeing or taking on uniquely Alaskan opportunities like arctic biking or touring the fjords of Prince William Sound. In the winter, you can ski, dogsled or do both simultaneously by \"skijoring,\" which is cross-country skiing while being towed by a dog. Hey, it\'s no crazier a winter sport than the biathlon.',61.2167,-149.9,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(10,'Tokyo','Japan','Asia','Tradition collides with pop culture in Tokyo, where you can reverently wander ancient temples before rocking out at a karaoke bar. Wake up before the sun to catch the lively fish auction at the Tsukiji Market, then refresh with a walk beneath the cherry blossom trees that line the Sumida River. Spend some time in the beautiful East Gardens of the Imperial Palace, then brush up on your Japanese history at the Edo-Tokyo Museum. Don’t forget to eat as much sushi, udon noodles, and wagashi (Japanese sweets) as your belly can handle.',35.5833,139.683,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(11,'Kathmandu','Nepal','Asia','Nepal’s capital is surrounded by a valley full of historic sites, ancient temples, shrines, and fascinating villages. Mingle with locals and animals amid Durbar Square’s monuments, or join mountain trekkers in the bustling Thamel District. Explore shops for exquisite work by local artisans—carpets and paper prints are specialties.',27.7,85.3333,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(12,'Bucharest','Romania','Europe','Vlad the Impaler stated his claim to Bucharest in 1459. His citadel on the Dambovita was the first of flotillas of palaces, many of which still stand. Four subway lines and a modern bus network transport visitors and commuters. Nicknamed \"Little Paris\", Bucharest\'s elegant early 20th-century architecture shows French influences. Don\'t miss the Village Museum, Romanian Athenaeum and the Peasant Museum. You can\'t miss the Palace of Parliament, the second-largest building in the world (after the Pentagon).',44.4268,26.1025,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(13,'Rome','Italy','Europe','Rome wasn\'t built in a day--and you\'ll need much more than a day to take in this timeless city. The city is a real-life collage of piazzas, open-air markets, and astonishing historic sites. Toss a coin into the Trevi Fountain, contemplate the Colosseum and the Pantheon, and sample a perfect espresso or gelato before spending an afternoon shopping at the Campo de’Fiori or Via Veneto. Enjoy some of the most memorable meals of your life here, too, from fresh pasta to succulent fried artichokes or a tender oxtail stew.',41.9,12.5,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(14,'Cairo','Egypt','Africa','Cairo’s an ancient city that also happens to be a modern metropolis—it’s one of the biggest cities in the Middle East and has the traffic and noise issues to prove it. But as long as you’re not looking for solitude, Cairo—the City of the Thousand Minarets—is a splendid place to explore Egyptian history and culture. (Editor\'s note: Our list was compiled before political unrest prompted many countries to issue travel warnings for Egypt. If you\'re currently planning a trip to Egypt, please consider the risks and monitor your government\'s travel alerts.)',30.05,31.2333,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(15,'Cape Town','South Africa','Africa','Cape Town glistens at the southern toe of the African continent. Tourist brochure-views at Blaauwberg Beach and Kirstenbosch National Botanical Gardens are within easy driving distance of \"The Mother City.\" The Cape of Good Hope Nature Reserve provides sweeping sea vistas, hiking trails and wildlife encounters. On a more somber note, travelers can visit Robben Island, the prison where Nelson Mandela was held for 27 years.',-33.9253,18.4239,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(16,'New Delhi','India','Asia','New Delhi is all at once chaotic and calm, a complicated city where cows often wander the shanty-lined streets. The 17th century Red Fort is a mass of domes and turrets, while Chandni Chowk is an exercise in friendly haggling. Jantar Mantar features larger-than-life sundials and astronomical instruments that are still used to predict the weather. Travelers and locals flock to the India Gate, the national monument of India that honors the soldiers who died in World War I and the Third Afghan War.',28.6139,77.209,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(17,'St. Petersburg','Russia','Europe','The second largest city in Russia, St. Petersburg is the country’s cultural heart. View splendid architectural gems like the Winter Palace and the Kazan Cathedral, and give yourself plenty of time to browse the world-renowned art collection of the Hermitage. Sprawling across the Neva River delta, St. Petersburg offers enough art, nightlife, fine dining and cultural destinations for many repeat visits.',59.95,30.3,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(18,'Dublin','Ireland','Europe','You\'ve probably heard that Guinness tastes better in Dublin (fresh from the factory), but what you may not know is that Dublin is a perfect destination for the whole family. No, we\'re not suggesting you let the kiddies drink a pint. Instead, take them to the Dublin Zoo, to feed the ducks in Stephen\'s Green or on a picnic in Phoenix Park. Scholars enjoy walking in the literary footsteps of such writers as Yeats and Joyce, while discerning shoppers have their pick of designer boutiques.',53.3478,-6.2597,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(19,'Sydney','Australia','Australia','Sydney offers plenty of historical and contemporary Australian flavor. The marvelous Sydney Opera House looks like a great origami sailboat, floating peacefully in a harbor. Wander the narrow cobblestone streets of The Rocks and then take in a street performance on the Circular Quay before heading into the Museum of Contemporary Art. The views from the Sydney Tower Eye observatory are epic – use this chance to get to know the layout of the city from high above.',-33.865,151.209,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(20,'Cairns','Australia','Australia','Cairns is the perfect city for merry revelers, passionate divers and adrenaline junkies, offering booming nightlife and heart-pounding adventure amid a vibrant, tropical setting.  This friendly Queensland city of 130,000 is a gateway to the Great Barrier Reef, Daintree National Park, Cape Tribulation, Cooktown and the rest of Cape York Peninsula. Embark on an eco-adventure or take a dip in a lagoon pool before hitting the town to unwind and shake what you’ve got Down Under.  ',-16.9256,145.775,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(21,'Mopti','Mali','Africa','Mopti Region is bordered by Tombouctou Region to the north, Ségou Region to the southwest, and Burkina Faso to the southeast.',14.4958,-4.1986,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(22,'Kigali','Rwanda','Africa','Inhabited since the 11th-century, what is now Kigali has been the home of Twas, Tutsis and Hutus. The city sits on a series of verdant ridges and lush valleys, and has a Muslim Quarter and a bustling market. Rwanda\'s capital is the site of battles that left over a million, mostly Tutsi and moderate Hutus, dead. Kigali Memorial Centre is a permanent memorial to 1994\'s Genocide, built on a mass grave where 250,000 are buried. Kigali City Tour Bus offers an excellent introduction to this now safe, friendly city.',-1.9439,30.0594,'4','2015-07-21 15:35:53','2015-07-21 15:35:53'),(23,'Khankh','Mongolia','Asia','Khankh is a sum of Khövsgöl aimag. The area is about 5,500 km².[1] In 2000, the sum had 2140 inhabitants. The center, officially named Turt (Mongolian: Турт), is situated on the shore of Lake Khövsgöl, 280 km north of Mörön, 1020 kilometers from Ulaanbaatar, and 22 km from the Khankh/Mondy border crossing to Russia.',51.5117,100.654,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(24,'Tiksi','Russia','Asia','The most northerly settlement with a population of over 5,000.',71.6333,128.867,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(25,'Sao Paulo','Brazil','South America','Vibrant São Paulo is among the world\'s most populous cities. Brazil\'s financial center, it has abundant cultural institutions and a rich architectural tradition. Its iconic buildings range from the 1929 Edifício Martinelli skyscraper and the neo-Gothic Metropolitan Cathedral to modernist architect Oscar Niemeyer’s curvy Edifício Copan. The colonial-style Pátio do Colégio church marks where Jesuit priests founded the city in 1554.',-23.55,-46.6333,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(26,'Rio de Janeiro','Brazil','South America','With its plentiful beaches, dramatic mountains, and backdrop of samba and bossa nova rhythms, it\'s easy to fall in love with Rio de Janeiro. Made famous in song, Ipanema Beach is still the place to stroll, sunbathe, and be seen. The largest Art Deco statue in the world, Christ the Redeemer, beckons visitors to Corcovado Mountain. Rio’s annual Carnaval celebrations are bacchanalian extravaganzas of feasting, music, dance, and costumed revelry.',-22.9068,-43.1729,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(27,'Polar Bear Park','Canada','North America','A wilderness park, northern Ontario, Canada, on Hudson and James bays. A huge undeveloped area of 9,300 square miles (24,087 square km), it is the largest of Ontario’s provincial parks; it was established in 1970. Polar Bear Provincial Park is accessible only by plane or boat, and travel within the park is restricted in order to help preserve the abundant wildlife, which includes caribou, bearded seal, walrus, white whale, polar and black bear, red and Arctic fox, and moose. Birds include the Canada and snow goose, Arctic loon, and northern phalarope. The lowest 20 miles (32 km) of the Winisk River flow through the park.',54.7617,-83.0388,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(28,'Bogota','Colombia','South America','Ten million people call vibrant, passionate, sprawling Bogota home. The energy of this metropolitan heart of Colombia is in part fueled by its hundreds of eclectic and authentic dining hot spots, fantastic wines, and frequent foodie festivals. Ask the locals where they like to eat, then walk off your empanadas and aji with a stroll through the historic district of La Candelaria or during an indulgent shopping adventure on the North Side.',4.5981,-74.0758,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(29,'Santiago','Chile','South America','Santiago is one of those metropolitan joys where the more you look, the more you find. Funky cafes and dance clubs dot Bellavista, Forest Park art collections range from pre-Columbian to contemporary, and architecture runs the gamut from the 16th-century San Francisco Church to mirrored office towers. Shop with the locals at Mall Panora¡mico and give your palate meals to remember with hearty Chilean fare.',-33.45,-70.6667,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(30,'Berlin','Germany','Europe','Berlin is an edgy city, from its fashion to its architecture to its charged political history. The Berlin Wall is a sobering reminder of the hyper-charged postwar atmosphere, and yet the graffiti art that now covers its remnants has become symbolic of social progress. Check out the Weltzeituhr (world time) Clock, topped by a model of the solar system, then turn back time by dining at the historic Zur Letzten Instanz, a 16th century restaurant that was frequented by Napoleon and Beethoven.',52.5167,13.3833,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(31,'Bergen','Norway','Europe','The colorful Norwegian city of Bergen is also a gateway to majestic fjords. Bryggen Hanseatic Wharf will give you a sense of the local culture – take some time to snap photos of the Hanseatic commercial buildings, which look like scenery from a movie set. Don’t breathe too deeply when you visit the outdoor fish market, a reminder of the city’s role in early fish trade. Ferry across a fjord to Lysøen, where the former villa of 19th-century composer Ole Bull will captivate you with fairytale charm.',60.3894,5.33,'4','2015-07-21 15:52:36','2015-07-21 15:52:36'),(32,'Chicago','USA','North America','The windy city is a cornucopia of modern art, fine dining, cutting edge comedy, and die-hard sports fans. Snap a photo of your reflection in the silver Cloud Gate sculpture at Millennium Park before heading to Grant Park to get hit with the refreshing spray of Buckingham Fountain. There are dozens of museums and theater companies in Chicago, so a cultural experience is never hard to find. You’re sure to laugh your head off at the Second City Theater, the professional launch pad of many famous comedians.',41.8369,-87.6847,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(33,'Honolulu','USA','North America','The mere mention of Hawaii is enough to prompt visions of grass skirts and colorful cocktails with tiny umbrellas. While you will find some kitsch in Honolulu, you’ll also find art museums, bike paths, and some of the most beautiful scenery in the world. Popular Waikiki Beach has soft sands and great surf. For majestic Oahu views scramble to the top of Diamond Head – a 350-acre volcanic crater. Historic structures like Iolani Palace and Ali\'iolani Hale are worth a visit on a non-beach day.',21.3,-157.817,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(34,'Denver','USA','North America','Get major-city sophistication in a location that is one of the world’s natural wonders. Obviously a hub for those seeking the Rocky Mountain ski slopes, Denver is also home to four major sports teams, major museums and a wide variety of neighborhoods that make the city a destination in its own right.  Catch a game at Mile High Stadium where the Colorado Rockies play.  Denver is also the home of the Denver Broncos and Peyton Manning.  Pot is legal here too.',39.7392,-104.99,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(35,'Barcelona','Spain','Europe','Barcelona feels a bit surreal – appropriate, since Salvador Dali spent time here and Spanish Catalan architect Antoni Gaudí designed several of the city’s buildings. Stepping into Gaudí’s Church of the Sacred Family is a bit like falling through the looking glass - a journey that you can continue with a visit to Park Güell. Sip sangria at a sidewalk café in Las Ramblas while watching flamboyant street performers, then create your own moveable feast by floating from tapas bar to tapas bar.',41.3833,2.1833,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(36,'Azores','Spain','Europe','The nine islands that make up the Azores are in fact the peaks of some of the world\'s tallest mountains, reaching from deep beneath the Atlantic. The once-uninhabited, volcanic archipelago now hosts thousands of tourists every year who flock to the islands for sun, sand and verdant mountain scenery. From the beaches of Praia da Vitoria to the bustling marina of Horta, to the bubbling volcanic ground \"ovens\" of Furnas, these islands offer unparalleled--and unusual--adventures to discover.',37.7411,-25.6755,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(37,'Hong Kong','China','Asia','Delectable dim sum, floating islands, and a one-of-a-kind skyline are just some of Hong Kong’s unique features. Get an eyeful of traditional Chinese architecture in Ngong Ping village, then take the tram to the tippity-top of Victoria Peak for unparalleled views. The rocks and gentle hills of Nan Lian Garden will bring you inner peace, as will a calming cup of tea in a Stanley café. Become one with everything at the Chi Lin Nunnery, a serene Buddhist complex.',22.2783,114.175,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(38,'Singapore','Indonesia','Asia','The Singapore cityscape looks like it was ripped from the pages of a science fiction comic book. If you’re hungry for a true Singapore experience, sample the myriad street foods or take a cultural cooking class. The Botanic Gardens and the Gardens By the Bay offer a slice of horticultural heaven, and the observation deck of the Sands SkyPark makes you feel like you’re high above the clouds. The banks and walkways along the Singapore River bustle with local activity.',1.3,103.8,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(39,'Toronto','Canada','North America','We\'ve heard Toronto described as \"New York City run by the Swiss,\" and it\'s true—you can find world-class theater, shopping and restaurants here, but the sidewalks are clean and the people are friendly. The best place to start is literally at the top—the CN Tower, the tallest freestanding structure in the Western Hemisphere.',43.7,-79.4,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(40,'Reykjavik','Iceland','Europe','Reykjavik bears the distinction of being the world’s northernmost capital, and for many Icelandic visitors it also serves as a gateway to the rugged adventure options beyond. Recharge after outdoor pursuits in one of the many geothermal springs or luxurious indoor spas. We appreciate Reykjavik’s open-minded and energetic culture that includes a hip and internationally recognized music and arts scene, great food and notoriously \"enthusiastic\" nightlife.',64.1333,-21.9333,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(41,'Tel Aviv','Israel','Asia','Tel Aviv, a city on Israel’s Mediterranean coast, is marked by its stark 1930s Bauhaus buildings, thousands of which are clustered in the White City architectural area. The city is also known for its accessible beaches and vibrant nightlife ranging from Lilienblum Street’s lounges to Dizengoff Street’s open-air cafes. Tel Aviv Port’s waterfront promenade is lined with shops and restaurants',32.0667,34.8,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(42,'Istanbul','Turkey','Asia','Istanbul is a city in Turkey that straddles Europe and Asia across the Bosphorus Strait. The Old City reflects cultural influences of the many empires that once ruled here. In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site of chariot races, and Egyptian obelisks remain. The iconic Byzantine Hagia Sophia features a soaring dome and Christian mosaics.',41.0136,28.955,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(43,'London','England','Europe','London, England’s capital, set on the River Thames, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ‘Big Ben’ clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.',51.5072,-0.1275,'4','2015-07-21 16:26:46','2015-07-21 16:26:46'),(44,'Kapisillit','Greenland','Greenland','Kapisillit is a settlement in the Sermersooq municipality in southwestern Greenland. In 2010, the settlement had 86 inhabitants. Kapisillit means the salmon in the Greenlandic language',64.4361,-50.2694,'4','2015-07-21 16:26:46','2015-07-21 16:26:46');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billadd` varchar(45) DEFAULT NULL,
  `billadd2` varchar(45) DEFAULT NULL,
  `billcity` varchar(45) DEFAULT NULL,
  `billstate` varchar(45) DEFAULT NULL,
  `billzip` varchar(45) DEFAULT NULL,
  `shipadd` varchar(45) DEFAULT NULL,
  `shipadd2` varchar(45) DEFAULT NULL,
  `shipcity` varchar(45) DEFAULT NULL,
  `shipstate` varchar(45) DEFAULT NULL,
  `shipzip` varchar(45) DEFAULT NULL,
  `card` varchar(45) DEFAULT NULL,
  `exp` varchar(45) DEFAULT NULL,
  `cvv` varchar(45) DEFAULT NULL,
  `depdate` datetime DEFAULT NULL,
  `retdate` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_packages1_idx` (`package_id`),
  CONSTRAINT `fk_orders_packages1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'','','','','','asf','','','','','','','- Month -','0000-00-00 00:00:00','0000-00-00 00:00:00',4,'processed','1','2015-07-24 12:52:40','2015-07-24 12:52:40',2),(2,'','','','','','','','','','','','','- Month -','0000-00-00 00:00:00','0000-00-00 00:00:00',4,'processed','1','2015-07-24 13:09:13','2015-07-24 13:09:13',2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` int(11) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_packages_cities_idx` (`city_id`),
  CONSTRAINT `fk_packages_cities` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,4,'599','2015-07-21 16:02:04','2015-07-21 16:02:04',1),(2,10,'1199','2015-07-21 16:02:04','2015-07-21 16:02:04',1),(3,4,'599','2015-07-21 16:02:04','2015-07-21 16:02:04',2),(4,10,'1199','2015-07-21 16:02:04','2015-07-21 16:02:04',2),(5,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',3),(6,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',3),(7,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',4),(8,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',4),(9,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',5),(10,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',5),(11,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',6),(12,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',6),(13,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',7),(14,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',7),(15,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',8),(16,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',8),(17,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',9),(18,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',9),(19,4,'599','2015-07-21 16:04:09','2015-07-21 16:04:09',10),(20,10,'1199','2015-07-21 16:04:09','2015-07-21 16:04:09',10),(21,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',11),(22,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',11),(23,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',12),(24,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',12),(25,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',13),(26,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',13),(27,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',14),(28,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',14),(29,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',15),(30,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',15),(31,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',16),(32,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',16),(33,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',17),(34,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',17),(35,4,'599','2015-07-21 16:05:50','2015-07-21 16:05:50',18),(36,10,'1199','2015-07-21 16:05:50','2015-07-21 16:05:50',18),(37,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',19),(38,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',19),(39,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',20),(40,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',20),(41,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',21),(42,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',21),(43,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',22),(44,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',22),(45,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',23),(46,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',23),(47,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',24),(48,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',24),(49,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',25),(50,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',25),(51,4,'599','2015-07-21 16:09:24','2015-07-21 16:09:24',26),(52,10,'1199','2015-07-21 16:09:24','2015-07-21 16:09:24',26),(53,4,'599','2015-07-21 16:13:59','2015-07-21 16:13:59',27),(54,10,'1199','2015-07-21 16:13:59','2015-07-21 16:13:59',27),(55,4,'599','2015-07-21 16:14:44','2015-07-21 16:14:44',28),(56,10,'1199','2015-07-21 16:14:44','2015-07-21 16:14:44',28),(57,4,'599','2015-07-21 16:14:44','2015-07-21 16:14:44',29),(58,10,'1199','2015-07-21 16:14:44','2015-07-21 16:14:44',29),(59,4,'599','2015-07-21 16:14:44','2015-07-21 16:14:44',30),(60,10,'1199','2015-07-21 16:14:44','2015-07-21 16:14:44',30),(61,4,'599','2015-07-21 16:14:44','2015-07-21 16:14:44',31),(62,10,'1199','2015-07-21 16:15:07','2015-07-21 16:15:07',31),(63,4,'599','2015-07-21 16:15:07','2015-07-21 16:15:07',32),(64,10,'1199','2015-07-21 16:15:07','2015-07-21 16:15:07',32);
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `admin_level` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mike','flyinmryan@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-24 11:51:22','2015-07-24 11:51:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-24 14:35:55
