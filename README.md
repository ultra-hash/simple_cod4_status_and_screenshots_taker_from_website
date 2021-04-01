# simple cod4 status and screenshots taker from website
This is writen in php to take screenshots of the players , playing in the server from the website.
 and this also serves as cod4 server status viewer.
  1. takes screenshot of player from webiste
  2. check for server online/offline
  3. displays number of player online
  4. displays map currently playing with image. 
  5. displays screenshots of players
  ```
  [Note: if you have custom maps add photo of map with extenction jpg with name mp_CustomMapName.jpg to images/maps folder ]
  [example if map name = mp_bubba then image name should be mp_bubba.jpg]
  ```

installation procedure
1. clone the files to the webroot folder or sub directory.
2. edit the lines ' 14 to 17 ' in " index.php "
3. edit the lines ' 14 , 15 , 16 ' in " rcon.ini.php.

Now for displaying images from any directory to the web browser

1. change the directroy in "line 10" in "screenshots/index.php"
2. change the directory in "line 4" in "screendhots/file_viewer.php"
3. enjoy.


see the project live in www.algaming.tk
