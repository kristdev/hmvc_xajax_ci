hmvc_xajax_ci
=============

codeigniter 2.1.4 coupled with xajax in HMVC



This application is an extension of the latest version codeigniter 2.1.4, edited for HMVC structure (lent to the wiredesignz in https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc), all coupled with the easy php library Ajax.

All already configured and ready to use, a native module welcome, and a module COPYTHIS to duplicate for each module to create. The COPYTHIS module includes a model that is based on the work of David Connelly, and was slightly modified.

The URL rewrite system is already activated thanks to the . Htaccess file, and form_validation bug has been fixed.

Great Enjoy!


Use
===

1) Download the zip and install it in the folder of your project

2) Cancel the src folder, the composer.phar, .gitignore, composer.json, readme.md files

3) Go to your browser and entering the address http://localhost/yourproject/

4) welcome module is enabled by default. It is located in the application/modules directory.

5) To create your first module, duplicate COPYTHIS folder

6) Assure that the name of your controller has the same name as your module

7) After creating the contoller, verify the address information http://localhost/yourproject/yourmodule

8) To enable default module newly created, go to the application/config directory, edit the file routes.php. Change welcome by yourmodule.
