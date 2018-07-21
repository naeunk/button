READ ME

This is a simple webpage button which counts how many times one has pressed the button while maintaining the counting state even when the page gets refreshed. 

I used HTML and javascript to set up the basic structure - such as adding a button and a counting message. Then, I used jQuery AJAX call to send and receive the counting information to/from SQLite3 database which is called counter.db.
I created a table in the database to store the current counting value. 

When the page is opened for the first time or whenever the page gets refreshed, it will send an AJAX get call to php file. When the page is opened for the first time, data is created with its default value of 0. When AJAX get call is received in PHP file, It will return the value by using fetchArray function and the return value will be printed on the webpage. 

When one clicks a button, an AJAX post call gets sent. When AJAX post call is received in PHP file, it will first use query function to find the count data from the table and update the value using exec function. Finally, It will return the value by using fetchArray function to print the current value.

----How To Run the Code (MAC)----
1. Download XAMPP

2. Create new folder in lampp/htdocs folder and name that folder 'button'. Then, put the files in (html and php file) the 'button' folder. 
   **One way to get to this folder:**
   a. open and start XAMPP
   b. go to Volumes category
   c. click Mount
   d. click explore
   e. look for htdocs folder.

3. To enable sqlite3, go back to where htdocs folder was found, and look for etc folder. 
   Open php.ini file. Search sqlite3 (using command + f). make sure to  
   uncomment the line that says extension=php_sqlite3.dll. save the file.

4. Go to XAMPP app and go to Network category and make sure one of the ports is enabled.

5. Go to internet browser and type in localhost:PORTNUMBER/button . you can check the port 
   number at the Network category. For me, localhost:8080 -> 80 
   (Over SSH) is enabled so I type in localhost:8080/button

6. Click on button.html

7. Click the buttons few times to make sure count increases and also try refreshing the page to make sure it is still maintaining the count number. go 
   back to button folder and you will find counter.db file which saves the number of the count