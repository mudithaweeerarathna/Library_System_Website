<?php  

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home_Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Lobster&display=swap" rel="stylesheet">
<style>
	body {
  		font-family: Crimson Text;
	}

	.icons {
		height: 25px;
		width:  25px;
	}

	.home-page-background-image-1 {
		width: 100%;
		height: 800px;
	}

	.home-page-background-image-div {
		position: relative;
		font-family: Crimson Text;
		color: #FFF5EE;
		margin-top: 10px;
	}

	.home-page-background-image-on-text {
		position: absolute;
		top: 28%;
		left: 80px;
	}

	.home-page-background-image-on-text-links {
		position: absolute;
		top: 40%;
		left: 70%;
	}

	.home-page-background-image-on-text-links-p {
		font-size: 30px;
		margin: 0px;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 30px;
		padding-right: 30px;
		margin-bottom:  5px;
	}

	.home-page-background-image-on-text-links-p:hover {
		background-color: #F5F5F5;
		color: white;
	}

	.grid-container-book-type {
		display: grid;
		grid-template-columns: 25% 25% 25% 25%;
		text-align: center;
	}

	.grid-container-book-type-description {
		margin: 20px;
		padding: 18px;
	}

	.grid-container-book-type-description:hover {
		background-color: #F8F8FF;
	}

	.grid-container-reserve-online-section {
		display: grid;
		grid-template-columns: 50% 50%;
		background-color: #ECFFDC;
		padding-top: 25px;
		padding-bottom: 25px;
		padding-left: 70px;
		padding-right: 70px;
	}

	.grid-container-reserve-online-section-description-section {
		text-align: center;

	}

	.grid-container-reserve-online-section-p {
		font-size: 30px;
		color: white;
		background-color: #A9A9A9;
		margin: 0px;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 30px;
		padding-right: 30px;
		margin-bottom:  5px;
	}

	.grid-container-reserve-online-section-p:hover {
		background-color: #F5F5F5;
		color: black;
		border: solid 2px;
		border-color: #A9A9A9;
	}

</style>
</head>

<body>

	<!--INCLUDING THE HEADER FROM "Online_Library_Web_Page_Header.php"-->
	<?php include 'Online_Library_Web_Page_Header.php'; ?>

	<!--HOME PAGE BACKGROUND IMAGE AND DETAILS ABOUT SIGN IN AND LOG IN-->
	<div class="home-page-background-image-div">
		<img class="home-page-background-image-1" src="https://i.imgur.com/f2p3Ev5.jpg" alt="home-page-background-image-one">
		<div class="home-page-background-image-on-text">
			<?php  
			//php code to check whether the user is loged in or not
			if(empty($_SESSION['loged_in'])) {
				$logged_in = 'YOU ARE NOT LOGED IN';
			} else {
				$logged_in = 'YOU ARE LOGED IN AS  ' . '(' . strtoupper($Full_name ). ')';
			}

			?>
			<p style="font-size: 65px; color: white;"><b>New To The Online Library</b></p>
			<p style="font-size: 30px; color: white;">
			Create an account to join to the library<br>
			or sign in if you have an account created already<br>
			This is a online library of the NSBM Green university<br>
			you can order a book to keep assigned to you to<br>
			collect when you order it here or<br>
			you can read it online or you can download some books in pdf format
			</p>
			<p style="font-size: 28px; color: white; margin-top: 0px;"><?php echo $logged_in; ?></p>
		</div>
		<div class="home-page-background-image-on-text-links">
			<p class="home-page-background-image-on-text-links-p"><a style="black: white; font-family: Crimson Text;" href="Sign_in_Web_Page.php">Sign in</a></p>

			<?php  
			//php code to set the log in or log out button
			if(empty($_SESSION['loged_in'])) {
				$log_in_out_href_link = 'Log_in_Web_Page.php';
				$log_in_out_button = 'Log in';
			} else {
				$log_in_out_href_link = 'Log_out.php';
				$log_in_out_button = 'Log out';
			}

			?>

			<p class="home-page-background-image-on-text-links-p"><a style="black: white; font-family: Crimson Text;" href="<?php echo $log_in_out_href_link; ?>"><?php echo $log_in_out_button; ?></a></p>
		</div>
	</div>

	<!--DIFFERENT TYPES OF CATOGARIES OF BOOKS-->
	<p style="font-family: Crimson Text; font-size: 40px; text-align: center; margin-bottom: 10px;">We Have a Wide Variety Of Books</p>
	<p style="font-family: Crimson Text; font-size: 30px; text-align: center; margin-top: 0px; margin-bottom: 0px; color: gray;">
		Access anytime, Anywhere
	</p>
	<div class="grid-container-book-type">
		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Romance.php">
			<h2>Romance</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Action_And_Adventure.php">
			<h2>Action And Adventure</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Documentary.php">
			<h2>Documentary</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Documentary.php">
			<h2>Biography</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_History.php">
			<h2>History</h2>
			<p>
				From the Civil War, to World Wars, to the Cold War and the Vietnam War.<br>
				From Genghis Khan to Ulysses Grant. Spies, murderers, and politicians.<br> 
				Religion and science. Our world history is vast,<br> 
				and these 8 books are only the tip of the iceberg.
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogaries_Romance">
			<h2>Comics</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogaries_Romance">
			<h2>Mystery</h2>
			<p>
				A romance novel or romantic novel 
				is a type of genre fiction 
				novel which places its primary 
				focus on the relationship and 
				romantic love between two people, 
				and usually has an 
				"emotionally satisfying and 
				optimistic ending."
			</p>
			</a>
		</div>

		<div class="grid-container-book-type-description">
			<a href="Book_Catogarie_Poetry.php">
			<h2>Poetry</h2>
			<p>
				Poetry is a form of literary art in which language is used for<br>
				its aesthetic and evocative qualities in addition to,<br>
				or in lieu of, its apparent meaning.<br>
				Poetry may be written independently, as discrete poems,<br>
				or may occur in conjunction with other arts, as in poetic drama, hymns or lyrics.
			</p>
			</a>
		</div>

	</div>

	<!--HOME PAGE BACKGROUND IMAGE AND DETAILS ABOUT ORDERING THE BOOK FROM THE LIBRARY USING THE WEBSITES-->
	<div class="grid-container-reserve-online-section">
		<div class="grid-container-reserve-online-section-image-section">
			 <img src="https://i.imgur.com/FILGZL1.jpg" style="height: 950px; width: 650px; border: solid 2px;">
		</div>
		<div class="grid-container-reserve-online-section-description-section">
			<p style="font-family: Crimson Text; font-size: 90px; text-align: center; margin-top: 210px; margin-bottom: 10px; margin-right: 150px;">
				Reserve Your
			</p>
			<p style="font-family: Crimson Text; font-size: 90px; text-align: center; margin-top: 10px; margin-left: 150px;">
				Book Online
			</p>
			<p style="font-family: Crimson Text; font-size: 30px; color: gray;">
				you can reserve your book using the <br>
				this online website so you can take the <br>
				book when you come into the university premises <br>
				Before Order you Need to LOGIN 
			</p>
			<a class="grid-container-reserve-online-section-p" href="">
				Reserve a Book
			</a>
		</div>
	</div>

	<!--INCLUDING THE FOOTER FROM "Online_Library_Web_Page_Footer.php"-->
	<?php include 'Online_Library_Web_Page_Footer.php'; ?>

</body>
</html>