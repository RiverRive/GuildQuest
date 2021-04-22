# GuildQuest
Final Project for CSC484 

GuildQuest is an upcoming multiplayer video game application inspired by role play games ready to provide a fun and friendly experience for all its users. Users can sign up and log in to our system to get access to a large selection of sandbox worlds to play in. 

There are multiple ways to access the homepage for the web application. It depends on what operating system the user is running. If running a Linux distribution (ubuntu) use the following URL:

127.0.0.1/GuildQuest/www/index.php

Note: be sure that the GuildQuest directory is located in /var/www/html on your Linux machine.

If the user is running Windows then use the following URL:

127.0.0.1/index.php

Note: be sure that all files found in the www directory are located in the htdocs directory found in your Apache Programs folder.

How to connect to the database:

A file named guildQuestConfig.php found in the www directory needs to be filled out with your MySQL server username, and password to connect to your local MySQL Server.

Login credentials are as follows: 

Admin Login: 
username: admin
password: a12345

Player Login:
username: LimeBat
password: L12345


When populating the local instance of the GuildQuest database, please run both populate scripts located in the sql directory to ensure that all the accounts have been added.
