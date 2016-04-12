<?php
require './config.php'; // Includes library credentials
//
// This page is for displaying specific item types that the user selects.
// It requests from the Zotero API the bibliography format and CoINS with the APA annotated Bibliography
// style.  

if (isset($_GET['submit'])){ // Checks for form submission.
	echo "<b><u>Ok, I will display all items with itemtype &quot;{$_GET['itemType']}&quot;</b></u>";
	echo "<br><br>";

	$bibContents = file_get_contents("{$apiStringStartItems}{$apiStringEnd}&include=bib,coins,data&style=apa-annotated-bibliography"); // Connecting to Zotero API
	$decodeContents = json_decode($bibContents); // Decoding JSON Contents into PHP array

	foreach ($decodeContents as $bibItem){
		if ($bibItem->itemType = $_GET['itemType']) { // Filters out all items returned not of proper itemType
			// echo "DevTest - itemtype: {$_GET['itemType']}<br>";
			echo $bibItem->bib;
			echo $bibItem->coins;
			echo "<br><br>";
			}
	}
}
else { // If the form hasn't been submitted, the display the form
?>
<html>
<body>
<form action="displaytype.php" method="GET">
What type of Zotero item would you like to display? Select from the drop down menu.
<select name="itemType" id="itemType">              
<option value="note" label="Note">Note</option>                            
<option value="book" label="Book">Book</option>                   
<option value="bookSection" label="Book Section">Book Section</option>                   
<option value="journalArticle" label="Journal Article">Journal Article</option>                   
<option value="magazineArticle" label="Magazine Article">Magazine Article</option>                   
<option value="newspaperArticle" label="Newspaper Article">Newspaper Article</option>              
<option value="thesis" label="Thesis">Thesis</option>                   
<option value="letter" label="Letter">Letter</option>                   
<option value="manuscript" label="Manuscript">Manuscript</option>                   
<option value="interview" label="Interview">Interview</option>                   
<option value="film" label="Film">Film</option>                   
<option value="artwork" label="Artwork">Artwork</option>                   
<option value="webpage" label="Web Page">Web Page</option>                   
<option value="report" label="Report">Report</option>        
<option value="bill" label="Bill">Bill</option>                   
<option value="case" label="Case">Case</option>                   
<option value="hearing" label="Hearing">Hearing</option>                   
<option value="patent" label="Patent">Patent</option>                   
<option value="statute" label="Statute">Statute</option>                   
<option value="email" label="E-mail">E-mail</option>                   
<option value="map" label="Map">Map</option>                   
<option value="blogPost" label="Blog Post">Blog Post</option>                   
<option value="instantMessage" label="Instant Message">Instant Message</option>                   
<option value="forumPost" label="Forum Post">Forum Post</option>                   
<option value="audioRecording" label="Audio Recording">Audio Recording</option>                                 
<option value="videoRecording" label="Video Recording">Video Recording</option>                   
<option value="document" label="Document">Document</option>
<option value="tvBroadcast" label="TV Broadcast">TV Broadcast</option>                   
<option value="radioBroadcast" label="Radio Broadcast">Radio Broadcast</option>                   
<option value="presentation" label="Presentation">Presentation</option>
<option value="podcast" label="Podcast">Podcast</option>                   
<option value="computerProgram" label="Computer Program">Computer Program</option>               
<option value="conferencePaper" label="Conference Paper">Conference Paper</option>                                  
<option value="encyclopediaArticle" label="Encyclopedia Article">Encyclopedia Article</option>               
<option value="dictionaryEntry" label="Dictionary Entry">Dictionary Entry</option>            
</select>
<input type="submit" name="submit" value="Submit!">
</form>
</body>
</html>
<?php
}
?>