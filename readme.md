## **README** ##

### Introduction: ###

What is Phlex?  Phlex stands for Personal Home Language EXtension.  I mean, I guess.  I literally just made that up.  Also, it sounds cool.  

Aside from being a made-up name that sounds cool, The purpose of Phlex is to provide a natural language interface for Home Theater applications - effectively bridging the current gap between commercial AI Solutions like Google Home/Amazon Alexa/Siri and personal web applications like Plex, Couchpotato, and Sonarr.

Or, in short - you can watch and download movies and shows just by telling your phone to do so.


### Installation: ###

Phlex requires a webserver and PHP with CURL/SSH enabled in order to work correctly.

For most use cases, XAMPP is going to be the easiest options.

XAMPP is a free, cross-platform web server package, and can be found here:

[https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)


When installing XAMPP, we only require the PHP and Apache features.  You can uncheck the rest of the options in installation if you have no need for them:


MySQL, FileZilla FTP Server, Mercury Mail Server, Tomcat, Perl, phpMyAdmin, Webalizer, Fake Sendmail


Once installed, clone or download the Phlex directory to the root web directory of XAMPP, which should be the /htdocs folder.  When done, the path should be something like C:\xampp\htdocs\phlex (windows) or usr/home/xampp/htdocs/phlex (linux).  


That should be it.  You can now restart the apache service for your webserver, and browse to your Phlex installation at 'http://yourserveraddress/Phlex:80'.

To log in, enter your Plex username and password.


If you are running Phlex on an existing webserver, Phlex supports PHP versions is 5.6.x and up.  Phlex will also require r/w access to the root of the /Phlex directory for configuration and logging purposes.
You will also need the CURL and openSSL extensions enabled. 



###Post-Installation (Network Stuff)###

First, you'll need to forward IP traffic to port 80 on the computer where Phlex is running.  You do not have to forward port 80 to port 80, you can choose any open port you like.

If you wish to change the listening port for Phlex to something other than 80, you can do so in the Xampp control panel by clicking the "config" button next to Apache, and then opening httpd.conf.

In httpd.conf, you will see a line that reads "Listen 80".  Change 80 to whichever port you want.  Restart apache, and forward to that port.  If you are on Windows, you will need to make a rule in Windows Firewall to allow that port's traffic as well.


##Setting it up with Google Assistant##
Log into Phlex with your Plex.tv username and password.
Click on the gear icon to open settings.
In settings, under the general tab, make sure you fill in the "Public Address" box with the FULL address of your Phlex server.  Typically, you will just need to append /Phlex to the directory path, and a port if you changed it to something other than 80.  

For example:

273.482.234.33/Phlex:66678 

If you've set up a domain with reverse proxy, then just put the url you've setup:

my.domain.com/Phlex

Or:

phlex.my.domain.com 


Once you've got the address entered, simply ask your Google Assistant to "Talk to Flex TV".  This is the invocation name you will use to talk to Phlex.  

You should now be prompted to link your Google account.  Hop over to Phlex, and click that "Link Google Account" button.  On the page you'll be redirected to, paste in the API key that's been conveniently
copied to your clipboard.  Press the button.  

On the next page, pick your Google account or log in if prompted.  Once logged in, you should be redirected to Google.com with a success message.  

Boom.  You can now talk to Phlex by saying things like "Ask Flex TV to play batman begins" or "Ask Flex TV to play the lastest episode of THe Big Bang Theory".  I'll be adding a wiki page for voice commands as time allows.

##Setting up IFTTT With Phlex##

(This needs better formatting) 

Create an account.

Go to the "applets" page.

Click "New applet".

Click the blue + button for IF THIS.

search for "Assistant".

"Say a phrase with a Text Ingredient".


What do you want to say: 

Depends on the command you want to use.

I use "I want to watch"

"Tell Plex to"

I want to download"

You can use whatever you want, but some triggers are reserved - these should work.

Put the $ sign where the thing you're sending to Phlex goes.

So - "I want to watch $"

Start playing $

etc.

Save it.

Click the "then that" button.

Search for "Maker".

Pick "Make a web request", the only option.

The URLs can be found in settings.

Then click create action, and it should work.

Repeat for a download and "control playback" command.
