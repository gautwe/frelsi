# frelsi
A small file uploader.

Frelsi means "liberty" in Icelandic. I'm french but I want to promote the freedom of web by creating a new cms, 
based on the upload function of php.

Frelsi works with a database and is very easy to modify.

The core contains three important files :
  * A lang.php file which define the general language of the session on the website (?sprak=en/fr/se/ru/pl/...). Everyone can change the language of his account - this data isn't written in the database.
  * Secondly, the page_memory.php file allows you to change the direct address of the links. You can do it manually, with a .htaccess (change the page_memory.php refs), or just let the extensions.
  * Finally, the most important file is called "inc/settings.php" and contains all the important basic datas : url, contact mail, sitename... But also the error code.


ERRORS:

s:NO_DATABASE_FOUND : we try to access you Database but she didn't looks real.
s:NO_LOGIN_FOUND : after a modification of the database, it seems that the administrator login has been deleted. Try a rescue.
s:NO_SESSION_FOUND : appears when your browser don't accept sessions.
s:NO_NOADMIN_FOUND : What the fuck have you done with the database ?!
s:NO_STYLE_DEFINE : in inc/settings.php, be sure that the line "style" is something like "style/style" - the .css extension is added in the code.
s:BASIC_LANG=01 : I'm french, so the first language I did for Frelsi was the french. If this error is here, it's that you try to reach a language which isn't installed yet.
n:UNREACHABLE_TRACKER : Frelsi can't access the master tracker for a rescue. Try to chmod 644 or 777 the h/resque.lr file.

