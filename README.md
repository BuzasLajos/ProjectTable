# ProjectTable
Show smaller projects in a table, and open it's full description in a Bootstrap modal dialog



/* 0 The Beginning */
The project table built with static html code
each row's INFO button open it's own separate modal
when the modal opened, call the listFiles(); function
from the functions.php that list the content of the path given in the first parameter
The second parameter determines if the bootstrap list-group items will be opened (parameter="in" --> items class is "collapse in")
If JavaScript is disabled, you can't open the list-group items, so there is a button in <noscript> tag
that call the listFiles() function in a new tab (inside info.php with two parameters)
Example for the info.php with parameters:
http://www.buzaslajos.infora.hu/info3.php?projekt=ProjectEuler&js=in


/* 1 Automate */
index.php was shortened by building the project table from txt file
table("src/projects.txt", "Projects"); --> first given argument is the path of the txt file, second argument is the title of the table
The table and the Bootstrap modal is created with this php function, and the Modal's content is loaded with JavaScript
(load the info.php with 2 arguments: path of the folder and open/close the list-group items by default)
If JavaScript is disabled, the INFO button (placed in noscript tag) open the info_scriptless.php page with the 2 arguments, mentioned before.
Example: http://www.buzaslajos.infora.hu/info3.php?projekt=ProjectEuler&js=in
Note: The title of the modal is given in the txt file with "#_TITLE_" tags like #_TITLE_Project Euler problems
The folder's path is given with "#INFO_" tags like #INFO_ProjectEuler (this will load the src/ProjectEuler folder's content to the modal)
Coloring tags also can be add to the lines, for example the "#_TAG_success" means the "success" Bootstrap tag, so that row will be green.
The listFiles() function can show more filetypes:
	cpp, hs, cs, js ... types inserted with <pre> tags
	JPG, PNG types inserted with <img> tags as responsive images
		read the orientation from exif informations and add rotateleft/rotateright class to the img tag
		if there is the same image with the same path in the img_compressed_20, that (thumbnail) will be inserted with img tag, not the original
	html, txt files inserted as it is (html tags can be used in txt files too)
	
	

TODOs:
When list pictures, check if that src exists in img_compress_20 folder
If exists show the compressed image
else show the original pictures

Image compressing is manual now, do it server-side automatically (if the image is large)

Admin UI
	Login, create folder, upload files
	add projects and create tables (edit the table.txt in the src folder)

Recognize file types and show icons (pdf, zip, rar, etc.)

Vertical/Horisontal images can't show properly

Info button clicked, but src dowsn't exist --> echo "Feltöltés alatt"

Problem: If the project table is built from a txt file,
	Google robots can find the content of the webpage?
	
table("src/palyazatok.txt", "Pályázatok");
	Page can't load if palyazatok.txt dowsn't exist
	
