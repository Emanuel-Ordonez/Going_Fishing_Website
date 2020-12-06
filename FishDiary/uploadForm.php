<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
    <title>Confirmation: Catch of the Day</title>

    <!--This file is for all files-->
    <link rel="stylesheet" type="text/css" href="../Universal/style.css" />

    <!--local css for this page only-->
    <!-- <link rel="stylesheet" type="text/css" href="overviewStyle.css" /> -->
    
    <!--Universal javascript file-->
    <!--<script type="text/javascript" src="../Universal/function.js"> </script>-->
	<meta charset="UTF-8">
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
		
		<div class="content-Container">
			<?php
				$targetedID = $_SESSION['userID'];
				// print "$targetedID";
				//Test connection to database
				$DBConnect = mysqli_connect("localhost","group5","k9mWTDJZ7V0w")
				Or die("<p>The database server is not available</p>");
				$DBName="group5";
				$DBSelect= mysqli_select_db($DBConnect,$DBName)
				Or die("<p> The database is not available.</p>");
				
				//changed Desc to description and Location to location to fit ids
				if(empty($_POST['title']) || empty($_POST['description']) ||empty($_POST['location']))
					exit("<p>You must completely fill out the form to upload a picture. Use the back button to return to the gallery.</p>");

				if($targetedID == NULL){
					exit("<p>Please sign in before accessing the gallery</p>");
				}
				//Query the database for user info
				else{
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$filename = $target_file . "." . $imageFileType;

					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
						} else {
						echo "File is not an image.";
						$uploadOk = 0;
						}
					}

					// Check if file already exists
					if (file_exists($target_file)) {
						echo "Sorry, file already exists.";
						$uploadOk = 0;
					}

					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
						$filename = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							$targetedID = $_SESSION['userID'];
							$titleQuery = htmlspecialchars(stripcslashes($_POST['title']));
							$descQuery = htmlspecialchars(stripcslashes($_POST['description']));
							$locationQuery = htmlspecialchars(stripcslashes($_POST['location']));
							// print "file name: $filename";
							// 	print "User id: $targetedID";
							// 	print "description: $descQuery";
							// 	print "title: $titleQuery";
							// 	print "Location: $locationQuery";
							// ADDED (userID, description, title, location, picture_path)
							$SQLString = "INSERT INTO Album_Entry (userID, description, title, location, picture_path) VALUES($targetedID,'$descQuery','$titleQuery','$locationQuery', '$filename')";
							$QueryResult = mysqli_query($DBConnect,$SQLString);
						echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
						} else {
						echo "Sorry, there was an error uploading your file.";
						}
					}

				//Close database connection
				mysqli_free_result($QueryResult);
				mysqli_close($DBconnect);
				}
			?>
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