<?php  

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Catogaries</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Lobster&display=swap" rel="stylesheet">
<style>
	body {
		background-color: white;
	}

	.grid-container-book-type
	{
		display: grid;
		grid-template-columns: 25% 25% 25% 25%;
		text-align: center;
	}

	.grid-container-book-type-description
	{
		margin: 20px;
		padding: 18px;
	}

	.grid-container-book-type-description:hover 
	{
		background-color: #F8F8FF;
	}

	.book-catogarie-image 
	{
		height: 150px;
		width: 250px;
	}

</style>
</head>
<body>

	<?php include 'Online_Library_Web_Page_Header.php' ?>

	<div class="grid-container-book-type">
		
		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Romance.php">
			<h2><b>Romance</b></h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/dXS5VZQ.jpg" alt="romance-picture-in-book">
			<p>
				"A romance novel or romantic novel is a type of genre fiction novel which places its primary focus on the relationship and romantic love between two people, and usually has an "emotionally satisfying and optimistic ending." There are many subgenres of the romance novel, including fantasy, gothic, contemporary, historical romance, paranormal fiction, and science fiction. Although women are the main readers of romance novels a growing number of men enjoy them as well."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Action_And_Adventure.php">
			<h2>Action And Adventure</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/oyxsNvH.jpg" alt="action-and-adventure-picture-in-book">
			<p>
				"Action sequences seen in the action genre, but the plots 
				continue into an adventure that takes the characters on a 
				personal journey or to different geographical locations..""
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Documentary.php">
			<h2>Documentary</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/HutGGuC.jpg" alt="Documentary-picture-in-book">
			<p>
				Documentary filmmaking requires more than just a passion for the subject,
				whether it be one’s personal story or that of someone else,
				a historical event or a startling discovery, a political movement or a heinous crime.
				Making a documentary and getting it in front of an audience requires
				determination, careful planning, money, and a strong production team
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogaries_Biography.php">
			<h2>Biography</h2>
			<img class="book-catogarie-image" src="https://i.pinimg.com/originals/42/6f/3a/426f3a0d36daa8f120fa4399759c334b.jpg" alt="Biography-picture-in-book">
			<p>
				"A biography is an account of a person’s life written by someone else. Biographies are true stories about real people. They are set within a real historical framework with the unique social and political conditions that existed during the subject’s life. Biographies can be about people who are alive or dead. Most often they’re about someone who was significant (popular (or unpopular) politicians and/or celebrities)."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogaries_Comics,php">
			<h2>Comics</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/dLuu8Qs.jpg" alt="Mystery-picture-in-book">
			<p>
				"Though they encompass many of the genres we describe here, comics are brief prose that are significantly, well, shorter than novels. Writers strictly tell their narratives through a specific theme and a series of brief scenes, though many authors compile these stories in wide-ranging collections, as featured below."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogaries_Mystery.php">
			<h2>Mystery</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/qple6Qp.jpg" alt="Mystery-picture-in-book">
			<p>
				"Like its much-loved television counterparts, true mystery books chronicle and examine actual crimes and events in exacting detail, with many focusing on infamous murders, kidnappings, and the exploits of serial killers."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Poetry.php">
			<h2>Poetry</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/g3aQ3Pg.jpg" alt="Mystery-picture-in-book">
			<p>
				"Poetry is a form of literary art in which language is used for
				its aesthetic and evocative qualities in addition to,
				or in lieu of, its apparent meaning.
				Poetry may be written independently, as discrete poems,
				or may occur in conjunction with other arts, as in poetic drama, hymns or lyrics."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_History.php">
			<h2>History</h2>
			<img class="book-catogarie-image" src="https://i.imgur.com/R8kWVqU.jpg" alt="Mystery-picture-in-book">
			<p>
				"From the Civil War, to World Wars, to the Cold War and the Vietnam War.
				From Genghis Khan to Ulysses Grant. Spies, murderers, and politicians.
				Religion and science. Our world history is vast,
				and these 8 books are only the tip of the iceberg."
			</p>
			</a>
		</div>

	</div>



	<?php include 'Online_Library_Web_Page_Footer.php'; ?>

</body>
</html>