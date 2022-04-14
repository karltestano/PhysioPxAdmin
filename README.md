# PhysioPxAdmin
Administer all office taks in your physiotherapy practice, especially in Germany

This program is only useful, if you are a physiotherapist in germany. Therefore the whole descript will be in german, please excuse. If you have similar monsters in your public administration like we in germany (Spitzenverband der gesetzlichen Krankenkassen, Gemeinsamer Bundesausschuss etc.), please leave a note an i will translate all description into english. But i am afraid, that in know anything over the administrations in other european countrys nor in the rest of the world, except of that they are sometimes disturbing ...
The main development path was this philosophy: "The browser is the interface", all functions controlled via browser. The inspirering came from club member administration version 1 (see https://sourceforge.net/projects/clubdata/), which had all modules to display tables in a userfriendly way and had the basic for user administration of a living web-site. It also uses frames in an way to get a clear partition of the view of a web-site, left-hand menu, top and bottom areas and a work area. Today all this is implemented in HTML5 (tags are: main, article, aside ...) to avoid frames.
Please see the wiki (https://github.com/karltestano/PhysioPxAdmin/wiki) for more information. And excuse me, the describtion in the wiki will be in german, due to the limited possibility of using the program in germany (i think). If you need support in english, leave a note ..
# Skills & Capabilities
Please read the wiki (https://github.com/karltestano/PhysiotherapyOfficeManagement/wiki) to find out all of this. In short:
- Patient master data
  - including contract managment and billing, e-mail based
  - digital patient file
- Prescription and treatment management
- automatic billing with public health ensurance
- ...
# Dependencies
Of course, such a system can only be created because many other developers have already created modules and building programs that I could use:
- Basic system (LAMP)
  - GNU/Linux (Debian, Ubuntu, Kubuntu ...) 
  - Apache2
  - PHP
  - MariaDB
  - Samba (for direct data connection to smartphone/tablet)

On Github
- Database Interface
- ADOdb/ADOdb Library for PHP

- PHP Modules
  - PHPMailer
  - jbs-newmedia/debuglib
  - umidjons/pdf-thumbnail-php.md (https://gist.github.com/umidjons/11037635)
  - Darkflib/php-qrcode 
  - mikehaertl/phpwkhtmltopdf
  - Auth.php Julio César Carrascal Urquijo 

- Javascript Modules
  - mozilla/pdf.js
  - jquery/jquery
  - dropzone/dropzone
  - jquery Tiny MCE Plugin (/tinymce/tinymce)
  - Simple Calendar Widget by Anthony Garrett (Code no more available)
  - Jquery Tools (http://jquerytools.org/)

- CSS/HTML/Javascript Frameworks
  - twbs/bootstrap

- Chip Card Modules for reading german electronic health card (eGK)
  - aqbanking/libchipcard
  - aqbanking/gwenhywfar
  - LudovicRousseau/PCSC

- ZBar/ZBar (which i would prefere, but could not be used, because the PDF417 code
  could not be read by ZBar, the libraries are not enabled. Reason: the code is not complet??)
  
- instead - Using Apps to scann PDF417 with smartphone/table and transfer it to the LAMP-server
  - scanning: https://play.google.com/store/apps/details?id=com.camvision.qrcode.barcode.reader
  - samba-client: https://play.google.com/store/apps/details?id=com.cxinventor.file.explorer
