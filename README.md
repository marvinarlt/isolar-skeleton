# isolar-skeleton
A simple skeleton for my small object orientated php framework.

Create a .htaccess file in the public folder and add this:
```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^ index.php [QSA,L]
```
