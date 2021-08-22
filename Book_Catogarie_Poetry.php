<?php  
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Poetry</title>
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

<p class="p1">Poetry</p>

<div class="description"><em>
Poetry is a form of literary art in which language is used for<br>
its aesthetic and evocative qualities in addition to,<br>
or in lieu of, its apparent meaning.<br>
Poetry may be written independently, as discrete poems,<br>
or may occur in conjunction with other arts, as in poetic drama, hymns or lyrics.
</em></div><br>

<!--First Division-->

<div class="divbig">
  
<div class="divinner">

<img src="https://i.imgur.com/J8KP6R1.jpg[/img]" class="imgbook">
 <p class="book_details">
<span class="span1">The Wilderness</span><br> <!--Book id = "1025"-->
 <span class="span2">by Sandra Lim</span><br><br>
You can't not marvel at the surprising, lush intelligence that moves through this original, joyful book. The Wilderness explores the wilderness of the soul, consciousness, memory: there’s a philosophical hunger at the root of Lim’s erudite poems, which—in energizing, original lines—chronicle the bewildering uncertainty of our lives.
</p>
<a href="book_details.php?id=1025">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">
<img src="https://i.imgur.com/o2gIXEM.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Soft Science</span><br> <!--Book id = "1026"-->
<span class="span2">by Franny Choi</span><br><br>
Franny is an incredible innovator, constantly pushing what the forms of poetry and language can do. The book examines the very idea of softness, of what it means to be human in an increasingly inhumane world. Playing on ideas of cyborgs, artificial intelligence and the Asian body, Choi's book gets us to interrogate consciousness and the things that we consider as normal. A series of poems called "Turing Test" run throughout to test the reader and the author for understanding. In poems like "Glossary of Terms," Choi breaks down language in a graph, where we learn that stars dream of being reached and the opposite of the sea is a machine. 
</p>
<a href="book_details.php?id=1026">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">

<img src="https://i.imgur.com/t6HwqE4.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Plainwater</span><br> <!--Book id = "1027"-->
<span class="span2">by Anne Carson </span><br><br>   
To understand people is to be perplexed by them. Is this the main lesson of Anne Carson’s Plainwater? Is it the opposite? Maybe it’s that you can’t “live six months inside a frozen pear.” Grief, pilgrimage, phenomenology, family, trout—whatever you might think you know about a subject, Carson offers you a different way to know it. If you’re unfamiliar with her work and not sure where to start, you’d do well to start here.
</p>
<a href="book_details.php?id=1027">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">

<img src="https://i.imgur.com/WUggl6u.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">blud</span><br> <!--Book id = "1028"-->
<span class="span2">by Rachel McKibbens</span><br><br>   
Hailing from the world of spoken word poetry, Rachel McKibbens is one of my all-time favorites for her fierce yet vulnerable voice, as powerful on the stage as it is on the page. Her fairly recent collection, BLUD continues to inspire me with the richness of its metaphors and raw energy. You don’t just read these poems—you feel them. They seep into your soul and entrance you in the same way that music does. What’s more, she’s an advocate for mental health, gender-equality, and victims of violence and domestic abuse. Rachel is the real deal.
</p>
<a href="book_details.php?id=1028">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>
</div>
<br><br>

<!--Second Division-->
   
<div class="divbig">
  
<div class="divinner">
<img src="https://i.imgur.com/Y9XkkJl.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">The Wild Fox of Yemen</span><br> <!--Book id = "1029"-->
<span class="span2">by Threa Almontaser</span><br><br>
As a young man Frederick Douglass escaped from slavery in Baltimore, Maryland. He was fortunate to have been taught to read by his slave owner mistress, and he would go on to become one of the major literary figures of his time. In this biography, David Blight has drawn on new information held in a private collection that few other historian have consulted, as well as recently discovered issues of Douglass's newspapers. Blight's biography tells the fascinating story of Douglass's two marriages and his complex extended family.
</p>
<a href="book_details.php?id=1029">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">
<img src="https://i.imgur.com/u8Iw7ay.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Your Crib, My Qibla </span><br> <!--Book id = "1030"-->
<span class="span2">by Saddiq Dzukogi</span><br><br>
A heartbreaking book of poems, Your Crib, My Qibla journeys through a father's grief after the loss of his beloved daughter. It takes admirable courage and striking language to seek solace after experiencing the unimaginable: "This is how sorrow holds his mouth/ without space. He believes your bones/ tell stories the sun cannot/ turn to ash."
</p>
<a href="book_details.php?id=1030">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">
<img src="https://i.imgur.com/A0zB1Mq.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Hunger</span><br> <!--Book id = "1031"-->
<span class="span2">by Alice Derry</span><br><br>
THunger by Alice Derry is a word-stone hurled into the present from a time when her parents let their children go hungry while pursuing religious and personal agendas, leaving them as ill-considered satellites. The book is a prismatic account of the author's keen witnessing—from the co-opting of young women in her life, to her empathetic observance of the 700,000 women and children trafficked worldwide each year. It is a gift to behold a poet writing toward the moral and emotional elements of our daily lives. So much current writing asks us to join the screech level of our political emergency, but Derry writes at a steady sizzle; how else might we become calm enough to listen?
</p>
<a href="book_details.php?id=1031">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>

<div class="divinner">
<img src="https://i.imgur.com/en2hCMN.jpg[/img]" class="imgbook">
<p class="book_details">
<span class="span1">Three Poems</span><br> <!--Book id = "1032"-->
<span class="span2">by Hannah Sullivan</span><br><br>
Whether she’s writing about the drudgery and glamour and angst of being a young woman in New York City, or the painful near-simultaneity of witnessing a father’s dying and birthing a son, Hannah Sullivan’s debut collection, Three Poems, is saturated with the grit and texture and intensity of a life lived right now as “fog lifts away like garage doors, MacBooks get going./A girl with drug sores rocks by a steamed-up Bikram studio….And you ease out behind huge Ray-Bans, counting the avenues.”
</p>
<a href="book_details.php?id=1032">
    <button class="submit-button-class" type="submit" name="submit">Further Details</button>
</a>
</div>
</div>

    <!--INCLUDING THE FOOTER FROM "Online_Library_Web_Page_Footer.php"-->
    <?php include 'Online_Library_Web_Page_Footer.php'; ?>

</body>
</html>