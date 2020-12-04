<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
    <title>Catch of the Day</title>

    <!--This file is for all files-->
    <link rel="stylesheet" type="text/css" href="../Universal/style.css" />

    <!--local css for this page only-->
    <link rel="stylesheet" type="text/css" href="overviewStyle.css" />
    
    <!--Universal javascript file-->
    <!--<script type="text/javascript" src="../Universal/function.js"> </script>-->

    <!--Local javascript file this page only-->
    <script type="text/javascript" src="fishDiary.js"></script>
    </head>
    <body>
        
        <div class="main-container">
            <h1 class ="companyName">The Tackle Box</h1>
            <!--<script>
                document.write(setUpMenu());
                document.write(setUpSideNav());
            </script>-->
			<?php
				include_once '../Universal/function.php';
			?>
			
            <div class="parent-Container">
				<!--Moved upload container to the front-->
				<div class="entry-Container">
                    <a class="button" href = "#uploadOverlay">Create Entry</a>
                </div>
				<?php
					//Test connection to database
					$DBConnect = @mysqli_connect("localhost","group5","k9mWTDJZ7V0w")
						Or die("<p>The database server is not available</p>");
					$DBName="group5";
					$DBSelect=@mysqli_select_db($DBConnect,$DBName)
						Or die("<p> The database is not available.</p>");
					$targetedID = $_SESSION['userID'];
					//Test to see if user is logged in
					if($targetedID = NULL){
						echo "<p>Please sign in before accessing the gallery</p>";
					}
					//Query the database for user info
					else {
                        //REMOVED USERID from select statement
						$SQLString = "SELECT * FROM Album_Entry WHERE ORDER BY time_submitted ASC";
						$QueryResult = mysqli_query($DBConnect,$SQLString);
						$NumPics = mysqli_num_rows($QueryResult);
						$Row = mysqli_fetch_assoc($QueryResult);
						//See if user has any pics in the database
						if($NumPics = 0 || $NumPics = NULL){
							echo "<div class='entry-Container' id='container1'>";
							echo "<p id='dateLoc'>You have not uploaded any pictures yet</p>";
							echo "</div>";
						}
						else {
							//Populate the page with user pics
							$count = 1 ;
							do {
                                echo "<div class=\"entry-Container\">";
								echo "<img id='catch". $count . "' src='" . $Row[6] . "' alt='" . $Row[6] . "' class='entry-Container'>";
								echo "<p id='picTitle" . $count . "'>" . $Row[4] . "</p>";
								echo "<p id='dateLoc'> Uploaded: " .  $Row[3] . "</p>";
                                echo "<p id='location'>Place:" . $Row[5] . "</p>";
                                echo "</div>";
                                // echo "<div class=\"entry-Container\">";
								// echo "<img id='catch". $count . "' src='" . $Row['picPath'] . "' alt='" . $Row['Desc'] . "' class='entry-Container'>";
								// echo "<p id='picTitle" . $count . "'>" . $Row['title'] . "</p>";
								// echo "<p id='dateLoc'> Uploaded: " .  $Row['time_submitted'] . "</p>";
                                // echo "<p id='location'>Place:" . $Row['location'] . "</p>";
                                // echo "</div>";
								$Row = mysqli_fetch_assoc($QueryResult);
							} while ($Row);
						}
					//Close database connection
					mysqli_free_result($QueryResult);
					mysqli_close($DBconnect);
					}
				?>
                <!--<div class="entry-Container" id="container1">
                    <img id="testImage" src="fish-picture.jpg" alt="fish" class="entry-Container">
                    Picture title<br>
                    <p id="dateLoc"></p>
                    <script>
                        document.write(printDate());
                    </script>
                </div>
                <div class="entry-Container">
                    <a class="button" href = "#uploadOverlay">Create Entry</a>
                </div>
                <div class="entry-Container">
                    <p class = "upload">Empty entry slot</p>
                </div>
                <div class="entry-Container">
                    <div class = "upload">Empty entry slot</div>
                </div>
                <div class="entry-Container">
                    <div class = "upload">Empty entry slot</div>
                </div>
                <div class="entry-Container">
                    <div class = "upload">Empty entry slot</div>
                </div>
                <div class="entry-Container">
                    <div class = "upload">Empty entry slot</div>
                </div>
                <div class="entry-Container">
                    <div class = "upload">Empty entry slot</div>
                </div>-->
            </div>
            <div class="page-turn">
                <img class = "arrow" id="leftArrow" src="Arrow-left.png" alt = "left">
                Page 1
                <img class = "arrow" id="rightArrow" src="Arrow-right.png" alt = "right">
            </div>
        </div>

        <div id="uploadOverlay" class="overlay">
            <div class="new-entry">
                <a class="close-button" href="#"><img src="close-button.png" alt="close-x"></a>
                <form id="uploadForm" method="post" action="uploadForm.php" enctype="multipart/form-data">
                    <img id="preview" class="preview-image" src="img-prev.png" alt="previewImage"><br>
                    <label for="fileToUpload">Choose a file to upload:</label><br><br>
                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="PreviewImage();">
                    <!-- Added names to inputs  -->
                    <p class="title-text"><label for="title">Title:</label></p>
                    <input type = "text" id = "title" name="title"><br>
                    <label for="location">Location:<br></label>
					<input type = "text" id = "location" name="location"><br>
                    <label for="description">Description:<br></label>
                    <textarea name="description" id="description" rows="5" cols="100"></textarea>
                    <input id= "confirm" class = "confirm-button" type="submit" value="Confirm" name="uploadConfirm">
                </form>
            </div>
        </div>
		<?php
			include_once '../Universal/footer.php';
		?>
        <!--<script>
            document.write(setUpFooter());
        </script>-->
    </body>
</html>