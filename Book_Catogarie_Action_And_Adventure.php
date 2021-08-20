<!DOCTYPE html>
<html>
<head>
<title>Action & Adventure</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>

.description
{
text-align: center;
font-size: 20px;
margin-bottom: 20px;
}

.divbig
{
display: grid;
grid-template-columns: 25% 25% 25% 25%;
}

.divinner
{
text-align: center;
}

.p1
{
font-size: 50px;
font-family: crimson text;
text-align: center;
margin-bottom: 10px;
}

.imgbook
{
width : 250px;
height: 350px;
}

.book_details 
{
margin-right: 20px;
margin-left: 20px;
}

.span1
{
font-size: 25px;
font-weight: bold;
}

.span2
{
font-size: 22px;
font-style: italic;
}

</style>
</head>
<body>

    <!--INCLUDING THE HEADER FROM "Online_Library_Web_Page_Header.php"-->
    <?php include 'Online_Library_Web_Page_Header.php'; ?>

<p class="p1">Action And Adventure</p>

<div class="description"><em>
Books in the action adventure genre not only have the <br>
action sequences seen in the action genre, but the plots <br>
continue into an adventure that takes the characters on a <br>
personal journey or to different geographical locations..
</em></div><br>


<!--First Division-->

<div class="divbig">
  
<div class="divinner">
<img src="https://i.imgur.com/cQlta9t.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Hunger Games</span><br>
<span class="span2">by Suzanne Collins</span><br><br>
In the very distant future.<br>
In what was once North America, the Capitol of Panem maintains its hold on its 12 districts by forcing them each to select a boy and a girl, called Tributes, to compete in a nationally televised event called the Hunger Games. Every citizen must watch as the youths fight to the death until only one remains. District 12 Tribute Katniss Everdeen has little to rely on, other than her hunting skills and sharp instincts, in an arena where she must weigh survival against love.
</p>
<a href="Order_New_Book.php?id=2454">
<button class="submit-button-class" type="submit" name="submit">Click ME!</button> <!--Changed-->
</a>
</div>



<div class="divinner">
<img src="https://i.imgur.com/ImNNHmJ.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Harry Potter </span><br>
<span class="span2">by J.K. Rowling</span><br><br>
In the world of Wizards.<br>
Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>

</div>

<div class="divinner">
<img src="https://i.imgur.com/ajT1Qcg.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">The Lord Of The Rings</span><br>
<span class="span2">by J.R.R Tolkien  </span><br><br>
The Modern Fantasy Novel.<br>
The Lord of the Rings by J.R.R. Tolkien tells the story of the War of the Ring in the fictional world of Middle-earth. The long novel, commonly published as three volumes and mistakenly called a trilogy, centers around the magical One Ring, which was discovered by Bilbo Baggins in the earlier novel The Hobbit. Now, the free peoples of Middle-earth, such as Men, Elves, Dwarves, and Hobbits, must overcome the dark power of Sauron by destroying the Ring. 
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>

</div>

<div class="divinner">
<img src="https://i.imgur.com/Mr8iJlf.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">The Maze Runner </span><br>
<span class="span2">by James Dashner</span><br><br>
Where everyone has to survive.<br>
A teen wakes up in a clearing in the center of a gigantic maze with no memory of his past, finding himself a resident in community of boys who have built a village in the glade and who sends two of its strongest and fittest runners into the maze every morning to find a way out. Every night the doors to the maze close and creatures known as 'grievers' kill those who are stuck inside. Nobody ever survives a night in the maze, but there must be a way out.
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>


</div>
</div>
<br><br>

<!--Second Division-->

<div class="divbig">
  
<div class="divinner">
<img src="https://i.imgur.com/5IKYeOZ.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Life of Pi</span><br>
<span class="span2">by Yann Martel</span><br><br>
A story to make you believe in the soul-sustaining power of fiction..<br>
Los Angeles Times Book Review After the sinking of a cargo ship, a solitary lifeboat remains bobbing on the wild blue Pacific. The only survivors from the wreck are a sixteen-year-old boy named Pi, a hyena, a wounded zebra, an orangutan—and a 450-pound royal bengal tiger. The scene is set for one of the most extraordinary and beloved works of fiction in recent years. Universally acclaimed upon publication, Life of Pi is a modern classic.
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>

</div>



<div class="divinner">
<img src="https://i.imgur.com/L5TV9L3.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Game of Thrones</span><br>
<span class="span2">by George R. R. Martin</span><br><br>
Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off King’s Landing. There Eddard Stark of Winterfell rules in Robert’s name. There his family dwells in peace and comfort: his proud wife, Catelyn; his sons Robb, Brandon, and Rickon; his daughters Sansa and Arya; and his bastard son, Jon Snow. Far to the north, behind the towering Wall, lie savage Wildings and worse—unnatural things relegated to myth during the centuries-long summer, but proving all too real and all too deadly in the turning of the season.
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>

</div>

<div class="divinner">
<img src="https://i.imgur.com/IhDP3Kr.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">The Name of the Wind</span><br>
<span class="span2">by Patrick Rothfuss</span><br><br>
Begins a tale unequaled in fantasy literature<br>
The story of a hero told in his own voice. It is a tale of sorrow, a tale of survival, a tale of one man’s search for meaning in his universe, and how that search, and the indomitable will that drove it, gave birth to a legend.   
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>

</div>

<div class="divinner">
<img src="https://i.imgur.com/YWeo2db.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">City of Bones</span><br>
<span class="span2">by Cassandra Clare</span><br><br>
Fifteen-year-old Clary Fray heads out to the Pandemonium Club in New York City.<br>
This is Clary’s first meeting with the Shadowhunters, warriors dedicated to ridding the earth of demons. It’s also her first encounter with Jace, a Shadowhunter who looks a little like an angel and acts a lot like a jerk. Within twenty-four hours Clary is pulled into Jace’s world with a vengeance, when her mother disappears and Clary herself is attacked by a demon. But why would demons be interested in ordinary mundanes like Clary and her mother? And how did Clary suddenly get the Sight? The Shadowhunters would like to know…
</p>
<button class="submit-button-class" type="submit" name="submit"><?php echo $download_button; ?></button>


</div>
</div>

    <!--INCLUDING THE FOOTER FROM "Online_Library_Web_Page_Footer.php"-->
    <?php include 'Online_Library_Web_Page_Footer.php'; ?>

</body>
</html>
