-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 07:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_description_type`
--

CREATE TABLE `book_description_type` (
  `Book_Id` int(20) NOT NULL,
  `Book_Description` text NOT NULL,
  `Book_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_description_type`
--

INSERT INTO `book_description_type` (`Book_Id`, `Book_Description`, `Book_Type`) VALUES
(1001, 'In the very distant future.\r\nIn what was once North America, the Capitol of Panem maintains its hold on its 12 districts by forcing them each to select a boy and a girl, called Tributes, to compete in a nationally televised event called the Hunger Games. Every citizen must watch as the youths fight to the death until only one remains. District 12 Tribute Katniss Everdeen has little to rely on, other than her hunting skills and sharp instincts, in an arena where she must weigh survival against love.', 'Action & Adventure'),
(1002, 'In the world of Wizards.\r\nAdaptation of the first of J.K. Rowling\'s popular children\'s novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents\' mysterious deaths.', 'Action & Adventure'),
(1003, 'The Modern Fantasy Novel.\r\nThe Lord of the Rings by J.R.R. Tolkien tells the story of the War of the Ring in the fictional world of Middle-earth. The long novel, commonly published as three volumes and mistakenly called a trilogy, centers around the magical One Ring, which was discovered by Bilbo Baggins in the earlier novel The Hobbit. Now, the free peoples of Middle-earth, such as Men, Elves, Dwarves, and Hobbits, must overcome the dark power of Sauron by destroying the Ring. ', 'Action & Adventure'),
(1004, 'Where everyone has to survive.\r\nA teen wakes up in a clearing in the center of a gigantic maze with no memory of his past, finding himself a resident in community of boys who have built a village in the glade and who sends two of its strongest and fittest runners into the maze every morning to find a way out. Every night the doors to the maze close and creatures known as \'grievers\' kill those who are stuck inside. Nobody ever survives a night in the maze, but there must be a way out.', 'Action & Adventure'),
(1005, 'A story to make you believe in the soul-sustaining power of fiction..<br>\r\nLos Angeles Times Book Review After the sinking of a cargo ship, a solitary lifeboat remains bobbing on the wild blue Pacific. The only survivors from the wreck are a sixteen-year-old boy named Pi, a hyena, a wounded zebra, an orangutan—and a 450-pound royal bengal tiger. The scene is set for one of the most extraordinary and beloved works of fiction in recent years. Universally acclaimed upon publication, Life of Pi is a modern classic.', 'Action & Adventure'),
(1006, 'Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off King’s Landing. There Eddard Stark of Winterfell rules in Robert’s name. There his family dwells in peace and comfort: his proud wife, Catelyn; his sons Robb, Brandon, and Rickon; his daughters Sansa and Arya; and his bastard son, Jon Snow. Far to the north, behind the towering Wall, lie savage Wildings and worse—unnatural things relegated to myth during the centuries-long summer, but proving all too real and all too deadly in the turning of the season.', 'Action & Adventure'),
(1007, 'Begins a tale unequaled in fantasy literature\r\nThe story of a hero told in his own voice. It is a tale of sorrow, a tale of survival, a tale of one man’s search for meaning in his universe, and how that search, and the indomitable will that drove it, gave birth to a legend. ', 'Action & Adventure'),
(1008, 'Fifteen-year-old Clary Fray heads out to the Pandemonium Club in New York City.\r\nThis is Clary’s first meeting with the Shadowhunters, warriors dedicated to ridding the earth of demons. It’s also her first encounter with Jace, a Shadowhunter who looks a little like an angel and acts a lot like a jerk. Within twenty-four hours Clary is pulled into Jace’s world with a vengeance, when her mother disappears and Clary herself is attacked by a demon. But why would demons be interested in ordinary mundanes like Clary and her mother? And how did Clary suddenly get the Sight? The Shadowhunters would like to know…', 'Action & Adventure'),
(1009, 'Sometimes it is the one who loves you who hurts you the most.\r\nLily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life suddenly seems almost too good to be true.\r\nRyle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place.\r\nAs questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan — her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened.', 'Romance'),
(1010, 'The new Abby Abernathy is a good girl. She doesn’t drink or swear, and she has the appropriate number of cardigans in her wardrobe. Abby believes she has enough distance from the darkness of her past, but when she arrives at college with her best friend, her path to a new beginning is quickly challenged by Eastern University\'s Walking One-Night Stand.\r\nTravis Maddox, lean, cut, and covered in tattoos, is exactly what Abby needs and wants to avoid. He spends his nights winning money in a floating fight ring, and his days as the ultimate college campus charmer. Intrigued by Abby’s resistance to his appeal, Travis tricks her into his daily life with a simple bet. If he loses, he must remain abstinent for a month. If Abby loses, she must live in Travis’s apartment for the same amount of time. Either way, Travis has no idea that he has met his match. ', 'Romance'),
(1011, 'Eliza Roth and her sister Sophie co-own a jewelry shop in Brooklyn. One night, after learning of an ex’s engagement, Eliza accidentally posts a photo of herself wearing a diamond ring on that finger to her Instagram account beloved by 100,000 followers. Sales skyrocket, press rolls in, and Eliza learns that her personal life is good for business. So she has a choice: continue the ruse or clear up the misunderstanding. With mounting financial pressure, Eliza sets off to find a fake fiancé.\r\nFellow entrepreneur Blake seems like the perfect match on paper. And in real life he shows promise, too. He would be perfect, if only Eliza didn’t feel also drawn to someone else. But Blake doesn’t know Eliza is “engaged”; Sophie asks Eliza for an impossible sum of money; and Eliza’s lies start to spiral out of control. She can either stay engaged online or fall in love in real life.', 'Romance'),
(1012, 'Simon Basset is on the verge of proposing to his best friend’s sister, the lovely and almost on the shelf Daphne Bridgerton. But the two of them know the truth it’s all an elaborate plan to keep Simon free from marriage minded society mothers. And as for Daphne, surely she will attract some worthy suitors now that it seems a duke has declared her desirable.\r\nBut as Daphne waltzes across ballroom after ballroom with Simon, it’s hard to remember that their courtship is a complete sham. Maybe it’s his devilish smile, certainly it’s the way his eyes seem to burn every time he looks at her… but somehow Daphne is falling for the dashing duke… for real! And now she must do the impossible and convince the handsome rogue that their clever little scheme deserves a slight alteration, and that nothing makes quite as much sense as falling in love…', 'Romance'),
(1013, 'A rich, dark urban fantasy debut following a teen witch who is given a horrifying task: sacrificing her first love to save her family’s magic. The problem is, she’s never been in love—she’ll have to find the perfect guy before she can kill him.\r\nAfter years of waiting for her Calling—a trial every witch must pass in order to come into their powers—the one thing Voya Thomas didn’t expect was to fail. When Voya’s ancestor gives her an unprecedented second chance to complete her Calling, she agrees—and then is horrified when her task is to kill her first love. And this time, failure means every Thomas witch will be stripped of their magic.\r\nVoya is determined to save her family’s magic no matter the cost. The problem is, Voya has never been in love, so for her to succeed, she’ll first have to find the perfect guy—and fast. Fortunately, a genetic matchmaking program has just hit the market. Her plan is to join the program, fall in love, and complete her task before the deadline. What she doesn’t count on is being paired with the infuriating Luc—how can she fall in love with a guy who seemingly wants nothing to do with her?\r\nWith mounting pressure from her family, Voya is caught between her morality and her duty to her bloodline. If she wants to save their heritage and Luc, she’ll have to find something her ancestor wants more than blood. And in witchcraft, blood is everything.', 'Romance'),
(1014, 'Seven days to fall in love, fifteen years to forget and seven days to get it all back again... From the author of The Perfect Find, this is a witty, romantic, and sexy-as-hell new novel of two writers and their second chance at love.\r\nBrooklynite Eva Mercy is a single mom and bestselling erotica writer, who is feeling pressed from all sides. Shane Hall is a reclusive, enigmatic, award-winning literary author who, to everyone\'s surprise, shows up in New York.\r\nWhen Shane and Eva meet unexpectedly at a literary event, sparks fly, raising not only their past buried traumas, but the eyebrows of New York\'s Black literati. What no one knows is that twenty years earlier, teenage Eva and Shane spent one crazy, torrid week madly in love. They may be pretending that everything is fine now, but they can\'t deny their chemistry-or the fact that they\'ve been secretly writing to each other in their books ever since.\r\nOver the next seven days in the middle of a steamy Brooklyn summer, Eva and Shane reconnect, but Eva\'s not sure how she can trust the man who broke her heart, and she needs to get him out of New York so that her life can return to normal. But before Shane disappears again, there are a few questions she needs answered...', 'Romance'),
(1015, 'From the New York Times bestselling author of Red, White & Royal Blue comes a new romantic comedy that will stop readers in their tracks..\r\nFor cynical twenty-three-year-old August, moving to New York City is supposed to prove her right: that things like magic and cinematic love stories don’t exist, and the only smart way to go through life is alone. She can’t imagine how waiting tables at a 24-hour pancake diner and moving in with too many weird roommates could possibly change that. And there’s certainly no chance of her subway commute being anything more than a daily trudge through boredom and electrical failures.\r\nBut then, there’s this gorgeous girl on the train.Jane. Dazzling, charming, mysterious, impossible Jane. Jane with her rough edges and swoopy hair and soft smile, showing up in a leather jacket to save August’s day when she needed it most. August’s subway crush becomes the best part of her day, but pretty soon, she discovers there’s one big problem: Jane doesn’t just look like an old school punk rocker. She’s literally displaced in time from the 1970s, and August is going to have to use everything she tried to leave in her own past to help her. Maybe it’s time to start believing in some things, after all.', 'Romance'),
(1016, 'A stunning reinvention of the myth of Narcissus as a modern novel of manners, about two young, well-heeled couples whose parallel lives intertwine over the course of a summer, by a sharp new voice in fiction.\r\nWes and Diana are the kind of privileged, well-educated, self-involved New Yorkers you may not want to like but can\'t help wanting to like you. With his boyish good looks, blue-blood pedigree, and the recent tidy valuation of his tech startup, Wes would have made any woman weak in the knees—any woman, that is, except perhaps his wife. Brilliant to the point of cunning, Diana possesses her own arsenal of charms, handily deployed against Wes in their constant wars of will and rhetorical sparring.\r\nVivien and Dale live in Philadelphia, but with ties to the same prep schools and management consulting firms as Wes and Diana, they’re of the same ilk. With a wedding date on the horizon and carefully curated life of coupledom, Vivien and Dale make a picture-perfect pair on Instagram. But when Vivien becomes a visiting curator at The Metropolitan Museum of Art just as Diana is starting a new consulting project in Philadelphia, the two couples’ lives cross and tangle. It’s the summer of 2015 and they’re all enraptured by one another and too engulfed in desire to know what they want—despite knowing just how to act.', 'Romance'),
(1017, 'If you were a big fan of the documentary, Food Inc, you\'ll find even more disturbing truths behind the corrupt global food economy in Stuffed and Starved. Patel takes a life-changing journey around the world as he tries to solve the mystery as to how both the starvation rate and obesity rate are at an all time high. Checking in at massive American supermarkets and wrecked Indian paddy fields, Patel goes beyond ethical consumerism and still manages to find hope in re-balancing the world food system.', 'Documentary'),
(1018, 'Contemporary conservative documentary films. However, rather than dismiss such cases of political representation as exemplars of ideological nonsense, reactionary propaganda, and so on, Beyond Bias locates in conservative media a mode of discourse central to contemporary democratic debate in the United States. Specifically, this book identifies conservative media as a mode of hysterical discourse. As the book makes clear, hysterical political discourse occurs when debate is simulated as a means to avoid a more substantive exchange. ', 'Documentary'),
(1019, 'This is a radical book takes on the radical issue of climate change, but instead of blaming carbon footprints, instead Klein targets capitalism. Klein suggests that diving in head first into the changes we need to make is the only route to solving our environmental issues. If you\'re in the mood for an inspiring read on how to change the world, don\'t wait any longer and grab this incredible story.', 'Documentary'),
(1020, 'I\'m convinced that anything written by Margaret Atwood is worth reading, so I was shocked when I found something by her that I had never heard about. Payback is her nonfiction novel on debt, but she doesn\'t steer into financial planning or the tricky issues surrounding the topic. Instead, she focuses on the big metaphor debt has played in life and how it informs our thinking, decisions, and the paths we take. As student loans and debt rises to an ultimate high, this is one fascinating subject worth diving into.', 'Documentary'),
(1021, 'This book introduces a new form of documentary film:<br>\r\nthe Geo-Doc, designed to maximize the influential power of the documentary film as an agent of social change. By combining the proven methods and approaches as evidenced through historical, theoretical, digital, and ecocritical investigations with the unique affordances of Geographic Information System technology, a dynamic new documentary form emerges, one tested in the field with the United Nations. This book begins with an overview of the history of the documentary film with attention given to how it evolved as an instrument of social change. It examines theories surrounding mobilizing the documentary film as a communication tool between filmmakers and policymakers. Ecocinema and its semiotic storytelling techniques are also explored for their unique approaches in audience engagement. The proven methods identified throughout the book are combined with the spatial and temporal affordances provided by GIS technology to create the Geo-Doc, a new tool for the activist documentarian.', 'Documentary'),
(1022, 'Pioneering film scholar Bill Nichols investigates the ways documentaries strive for accuracy and truthfulness and simultaneously fabricate a form that shapes reality. Such films may rely on reenactment to re-create the past, storytelling to provide satisfying narratives, and rhetorical figures such as metaphor or devices such as irony to make a point. Documentaries are truly a fiction unlike any other. With clarity and passion, Nichols offers incisive commentaries on the basic questions of documentary’s distinct relationship to the reality it represents, as well as close readings of provocative documentaries from this form\'s earliest days to its most recent incarnations. These essays offer a definitive account of what makes documentary film such a vital part of our cultural landscape.', 'Documentary'),
(1023, 'It is said that fact is sometimes stranger than fiction, and nowhere is that more true than in the case of black holes. Black holes are stranger than anything dreamed up by science fiction writers. In 2016 Professor Stephen Hawking delivered the BBC Reith Lectures on a subject that has fascinated him for decades - black holes. In these flagship lectures the legendary physicist argues that if we could only understand black holes and how they challenge the very nature of space and time, we could unlock the secrets of the universe.\r\n', 'Documentary'),
(1024, 'A film that reflects your true passion can have an impact for generations. This book gives you the tools to envision, produce, and finish such a film. As a documentary filmmaker, you have the means to open people\'s eyes and bring them into another world.\" So begins one of the most inspiring and informative books ever written about making films that have an impact on the world...an essential read for the serious documentarist.', 'Documentary'),
(1025, 'You can\'t not marvel at the surprising, lush intelligence that moves through this original, joyful book. The Wilderness explores the wilderness of the soul, consciousness, memory: there’s a philosophical hunger at the root of Lim’s erudite poems, which—in energizing, original lines—chronicle the bewildering uncertainty of our lives.', 'Poetry'),
(1026, 'Franny is an incredible innovator, constantly pushing what the forms of poetry and language can do. The book examines the very idea of softness, of what it means to be human in an increasingly inhumane world. Playing on ideas of cyborgs, artificial intelligence and the Asian body, Choi\'s book gets us to interrogate consciousness and the things that we consider as normal. A series of poems called \"Turing Test\" run throughout to test the reader and the author for understanding. In poems like \"Glossary of Terms,\" Choi breaks down language in a graph, where we learn that stars dream of being reached and the opposite of the sea is a machine. ', 'Poetry'),
(1027, 'To understand people is to be perplexed by them. Is this the main lesson of Anne Carson’s Plainwater? Is it the opposite? Maybe it’s that you can’t “live six months inside a frozen pear.” Grief, pilgrimage, phenomenology, family, trout—whatever you might think you know about a subject, Carson offers you a different way to know it. If you’re unfamiliar with her work and not sure where to start, you’d do well to start here.\r\n', 'Poetry'),
(1028, 'Hailing from the world of spoken word poetry, Rachel McKibbens is one of my all-time favorites for her fierce yet vulnerable voice, as powerful on the stage as it is on the page. Her fairly recent collection, BLUD continues to inspire me with the richness of its metaphors and raw energy. You don’t just read these poems—you feel them. They seep into your soul and entrance you in the same way that music does. What’s more, she’s an advocate for mental health, gender-equality, and victims of violence and domestic abuse. Rachel is the real deal.', 'Poetry'),
(1029, 'As a young man Frederick Douglass escaped from slavery in Baltimore, Maryland. He was fortunate to have been taught to read by his slave owner mistress, and he would go on to become one of the major literary figures of his time. In this biography, David Blight has drawn on new information held in a private collection that few other historian have consulted, as well as recently discovered issues of Douglass\'s newspapers. Blight\'s biography tells the fascinating story of Douglass\'s two marriages and his complex extended family.', 'Poetry'),
(1030, 'A heartbreaking book of poems, Your Crib, My Qibla journeys through a father\'s grief after the loss of his beloved daughter. It takes admirable courage and striking language to seek solace after experiencing the unimaginable: \"This is how sorrow holds his mouth/ without space. He believes your bones/ tell stories the sun cannot/ turn to ash.\"', 'Poetry'),
(1031, 'THunger by Alice Derry is a word-stone hurled into the present from a time when her parents let their children go hungry while pursuing religious and personal agendas, leaving them as ill-considered satellites. The book is a prismatic account of the author\'s keen witnessing—from the co-opting of young women in her life, to her empathetic observance of the 700,000 women and children trafficked worldwide each year. It is a gift to behold a poet writing toward the moral and emotional elements of our daily lives. So much current writing asks us to join the screech level of our political emergency, but Derry writes at a steady sizzle; how else might we become calm enough to listen?', 'Poetry'),
(1032, 'Whether she’s writing about the drudgery and glamour and angst of being a young woman in New York City, or the painful near-simultaneity of witnessing a father’s dying and birthing a son, Hannah Sullivan’s debut collection, Three Poems, is saturated with the grit and texture and intensity of a life lived right now as “fog lifts away like garage doors, MacBooks get going./A girl with drug sores rocks by a steamed-up Bikram studio….And you ease out behind huge Ray-Bans, counting the avenues.”', 'Poetry'),
(1033, 'Pulitzer Prize winner Ron Chernow returns with a sweeping and dramatic portrait of one of our most compelling generals and presidents, Ulysses S. Grant. With lucidity, breadth, and meticulousness, Chernow finds the threads that bind Grant\'s disparate stories together, shedding new light on the man whom Walt Whitman described as \"nothing heroic...and yet the greatest hero.\"', 'History'),
(1034, 'An epic story of wasted opportunities and deadly miscalculations, Embers of War delves deep into the historical record to provide hard answers to the unanswered questions surrounding the demise of one Western power in Vietnam and the arrival of another. A gripping, heralded work that illuminates the hidden history of the French and American experiences in Vietnam.', 'History'),
(1035, 'A lively and engaging narrative history showing the common threads in the cultures that gave birth to our own. Dozens of maps provide a clear geography of great events, while timelines give the reader an ongoing sense of the passage of years and cultural interconnection. Literature, epic traditions, private letters and accounts connect kings and leaders with the lives of those they ruled.', 'History'),
(1036, 'Ancient Greece first coined the concept of \"democracy\", yet almost every major ancient Greek thinker-from Plato and Aristotle onwards was ambivalent towards or even hostile to democracy in any form. The explanation for this is quite simple: the elite perceived majority power as tantamount to a dictatorship of the proletariat. Cartledge sheds light on the variety of democratic practices in the classical world as well as on their similarities to and dissimilarities from modern democratic forms, from the American and French revolutions to contemporary political thought.', 'History'),
(1037, 'As a young man Frederick Douglass escaped from slavery in Baltimore, Maryland. He was fortunate to have been taught to read by his slave owner mistress, and he would go on to become one of the major literary figures of his time. In this biography, David Blight has drawn on new information held in a private collection that few other historian have consulted, as well as recently discovered issues of Douglass\'s newspapers. Blight\'s biography tells the fascinating story of Douglass\'s two marriages and his complex extended family.', 'History'),
(1038, 'Appeasement is a groundbreaking history of the disastrous years of indecision, failed diplomacy and parliamentary infighting that enabled Hitler\'s domination of Europe. Drawing on deep archival research and sources not previously seen by historians, Tim Bouverie has created an unforgettable portrait of the ministers, aristocrats, and amateur diplomats who, through their actions and inaction, shaped their country\'s policy and determined the fate of Europe.', 'History'),
(1039, 'This history of modern Iran is not a survey in the conventional sense but an ambitious exploration of the story of a nation. It offers a revealing look at how events, people, and institutions are shaped by currents that sometimes reach back hundreds of years. The book covers the complex history of the diverse societies and economies of Iran against the background of dynastic changes, revolutions, civil wars, foreign occupation, and the rise of the Islamic Republic.', 'History'),
(1040, 'The Mandan Indians were the iconic Plains people whose teeming, busy towns on the upper Missouri River were for centuries at the center of the North American universe. We know of them mostly because Lewis and Clark spent the winter of 1804-1805 with them, but why don\'t we know more? In this extraordinary book, Fenn retrieves their history by piecing together important new discoveries in archaeology, anthropology, geology, climatology, epidemiology, and nutritional science. Her original interpretation of these diverse research findings offers us a new perspective.', 'History');

-- --------------------------------------------------------

--
-- Table structure for table `book_image`
--

CREATE TABLE `book_image` (
  `Book_Id` int(20) NOT NULL,
  `Book_Image_Src` varchar(100) NOT NULL,
  `Book_Image_Alt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_image`
--

INSERT INTO `book_image` (`Book_Id`, `Book_Image_Src`, `Book_Image_Alt`) VALUES
(1001, 'https://i.imgur.com/cQlta9t.jpg[/img]', 'Hunger-Games-Book-image'),
(1002, 'https://i.imgur.com/ImNNHmJ.jpg[/img]', 'Harr-Potter-Book-Image'),
(1003, 'https://i.imgur.com/ajT1Qcg.jpg[/img]', 'Lord-Of-The-Rings-Book_Image'),
(1004, 'https://i.imgur.com/Mr8iJlf.jpg[/img]', 'Maze-Runner-Book-Image'),
(1005, 'https://i.imgur.com/5IKYeOZ.jpg[/img]', 'Life-of-Pi-Book-Image'),
(1006, 'https://i.imgur.com/L5TV9L3.jpg[/img]', 'Game-of-Thrones-Book-Image'),
(1007, 'https://i.imgur.com/IhDP3Kr.jpg[/img]', 'The-Name-of-the-Wind-Book-Image'),
(1008, 'https://i.imgur.com/YWeo2db.jpg[/img]', 'City-of-Bones-Book-Image'),
(1009, 'https://i.imgur.com/dtMYJuT.jpeg', 'It-Ends-With-Us-Book_Image'),
(1010, 'https://i.imgur.com/1mZZ6lJ.jpeg', 'Beautiful-Disaster-Book-Image'),
(1011, 'https://i.imgur.com/2S3pHvC.jpeg', 'Love-At-First-Like-Book-Image'),
(1012, 'https://i.imgur.com/1o4nx2V.jpeg', 'The-Duke-And-I-Book-Image'),
(1013, 'https://i.imgur.com/w8eUlp7.jpg[/img]', 'Blood-Like-Magic-Book-Image'),
(1014, 'https://i.imgur.com/dKBxL6G.jpg[/img]\"', 'Seven-Days-in-June-Book-Image'),
(1015, 'https://i.imgur.com/B8OW1XV.jpg[/img]', 'One-Last-Stop-Book-Image'),
(1016, 'https://i.imgur.com/wUtka4d.jpg[/img]', 'The-Portrait-of-a-Mirror-Book-Image'),
(1017, 'https://i.imgur.com/1n8JLEZ.jpg[/img]', 'Stuffed-and-Starved-Book-Image'),
(1018, 'https://i.imgur.com/gS71vot.jpg[/img]', 'Beyond-Bias-Book-Image'),
(1019, 'https://i.imgur.com/HiyKlJt.jpg[/img]', 'This-Changes-Everything-Book-Image'),
(1020, 'https://i.imgur.com/nX8tZbN.jpg[/img]', 'Payback-Book-Image'),
(1021, 'https://i.imgur.com/Tehlvow.jpg[/img]', 'The-Geo-Doc-Book-Image'),
(1022, 'https://i.imgur.com/E7tEFkB.jpg[/img]', 'Speaking-Truths-with-Film-Book-Image'),
(1023, 'https://i.imgur.com/J0QNW4a.jpg[/img]', 'Black-Holes:The-Reith-Lectures-Book-Image'),
(1024, 'https://i.imgur.com/BO9XfHC.jpg[/img]', 'PRODUCING-with -PASSION-Book-Image'),
(1025, 'https://i.imgur.com/J8KP6R1.jpg[/img]', 'The-Wilderness-Book-Image'),
(1026, 'https://i.imgur.com/o2gIXEM.jpg[/img]', 'Soft-Science-Book-Image'),
(1027, 'https://i.imgur.com/t6HwqE4.jpg[/img]', 'Plainwater-Book-Image'),
(1028, 'https://i.imgur.com/WUggl6u.jpg[/img]', 'blud-Book-Image'),
(1029, 'https://i.imgur.com/Y9XkkJl.jpg[/img]', 'The-Wild-Fox-of-Yemen-Book-Image'),
(1030, 'https://i.imgur.com/u8Iw7ay.jpg[/img]', 'Your-Crib, My-Qibla-Book-Image'),
(1031, 'https://i.imgur.com/A0zB1Mq.jpg[/img]', 'Hunger-Book-Image'),
(1032, 'https://i.imgur.com/en2hCMN.jpg[/img]', 'Three-Poems-Book-Image'),
(1033, 'https://i.imgur.com/MFF46ov.jpg[/img]', 'Grant-Book-Image'),
(1034, 'https://i.imgur.com/4abOGyk.jpg[/img]', 'Embers of War-Book-Image'),
(1035, 'https://i.imgur.com/rHBt86F.jpg[/img]', 'The-History-of-the-Ancient-World-Book-Image'),
(1036, 'https://i.imgur.com/iY3TyxB.jpg[/img]', 'Democracy: A-Life-Book-Image'),
(1037, 'https://i.imgur.com/w8eUlp7.jpg[/img]', 'Frederick-Douglas: Prophet-of-Freedom-Book-Image'),
(1038, 'https://i.imgur.com/fBhyk8O.jpg[/img]', 'Appeasement-Book-Image'),
(1039, 'https://i.imgur.com/ucgPkW7.jpg[/img]', 'Iran: A-Modern-History-Book-Image'),
(1040, 'https://i.imgur.com/i0ayGHB.jpg[/img]', 'Encounters-at-the-Heart-of-the-World-Book-Image');

-- --------------------------------------------------------

--
-- Table structure for table `book_name_author`
--

CREATE TABLE `book_name_author` (
  `Book_Id` int(20) NOT NULL,
  `Book_Name` varchar(30) NOT NULL,
  `Book_Author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_name_author`
--

INSERT INTO `book_name_author` (`Book_Id`, `Book_Name`, `Book_Author`) VALUES
(1001, 'Hunger Games', 'Suzanne Collins'),
(1002, 'Harry Potter', 'J.K. Rowling'),
(1003, 'The Lord Of The Rings', 'J.R.R Tolkien'),
(1004, 'The Maze Runner', 'James Dashner'),
(1005, 'Life of Pi', 'Yann Martel'),
(1006, 'Game of Thrones', 'George R. R. Martin'),
(1007, 'The Name of the Wind', 'Patrick Rothfuss'),
(1008, 'City of Bones', 'Cassandra Clare'),
(1009, 'It Ends With Us', 'Colleen Hoover'),
(1010, 'Beautiful Disaster', 'Jamie McGuire'),
(1011, 'Love At First Like', 'Hannah Orenstein'),
(1012, 'The Duke And I', 'Julia Quinn'),
(1013, 'Blood Like Magic', 'Liselle Sambury'),
(1014, 'Seven Days in June', 'Tia Williams'),
(1015, 'One Last Stop', 'Casey McQuiston'),
(1016, 'The Portrait of a Mirror', 'A. Natasha Joukovsky'),
(1017, 'Stuffed and Starved', 'Raj Patel'),
(1018, 'Beyond Bias', 'Scott Krzych'),
(1019, 'This Changes Everything', 'Naomi Klein'),
(1020, 'Payback', 'Margaret Atwood'),
(1021, 'The Geo-Doc', 'Terry Mark'),
(1022, 'Speaking Truths with Film', 'Bill Nichols'),
(1023, 'Black Holes:The Reith Lectures', 'Stephen Hawking'),
(1024, 'PRODUCING with PASSION', 'Dorothy Fadiman'),
(1025, 'The Wilderness', 'Sandra Lim'),
(1026, 'Soft Science', 'Franny Choi'),
(1027, 'Plainwater', 'Anne Carson'),
(1028, 'blud', 'Rachel McKibbens'),
(1029, 'The Wild Fox of Yemen', 'Threa Almontase'),
(1030, 'Your Crib, My Qibla', 'Saddiq Dzukogi'),
(1031, 'Hunger', 'Alice Derry'),
(1032, 'Three Poems', 'Hannah Sullivan'),
(1033, 'Grant', 'Ron Chernow'),
(1034, '>Embers of War: The Fall of an', 'Fredrik Logevall'),
(1035, 'The History of the Ancient Wor', 'Susan Wise Bauer'),
(1036, 'Democracy: A Life', 'Paul Cartledge'),
(1037, 'Frederick Douglas: Prophet of ', 'David W. Blight'),
(1038, 'Appeasement', 'Tim Bouverie'),
(1039, 'Iran: A Modern History', 'Abbas Amanat'),
(1040, 'Encounters at the Heart of the', 'Elizabeth A. Fenn');

-- --------------------------------------------------------

--
-- Table structure for table `user_batch_details`
--

CREATE TABLE `user_batch_details` (
  `User_Id` int(10) NOT NULL,
  `Batch_No` int(5) NOT NULL,
  `Library_User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_batch_details`
--

INSERT INTO `user_batch_details` (`User_Id`, `Batch_No`, `Library_User_Id`) VALUES
(123, 20, 1121);

-- --------------------------------------------------------

--
-- Table structure for table `user_book_order`
--

CREATE TABLE `user_book_order` (
  `User_Id` int(10) NOT NULL,
  `Book_Order_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_book_order`
--

INSERT INTO `user_book_order` (`User_Id`, `Book_Order_Id`) VALUES
(123, 1001),
(123, 1007),
(0, 1010),
(0, 1002),
(123, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_Id` int(10) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_Id`, `First_Name`, `Last_Name`, `E_mail`, `Password`) VALUES
(0, 'tom', 'cruise', 'tom@mail', 'tom'),
(123, 'Bryan', 'Adams', 'bryan@mail', '1234'),
(0, 'wonder', '', 'steve@mail', '12345'),
(12321, 'mm', 'ww', 'mm@mail', 'mm'),
(123212, 'steve', 'wonder', 'steve@mail', '123212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
