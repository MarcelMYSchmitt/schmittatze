# Introduction

This project contains all code used for my website http://schmittatze.de. It's a simple html/php project which also includes javascript and css files.

# About
We have one home start site which is a kind of single page application.  
For the form we use a seperate php send mail script which allows us to send emails to a provided mail adress which is declared in the script.
When the email delivery is successful, you will be redirected to a `thank_you` page. If you forget to add a value in the form you will be redirected to a `error_message` page.
For all other invalid routes you will be redirected to a `404` page.  

# Sources
Website template used from: https://colorlib.com/
Routing used for allow only the routes we want: https://github.com/taniarascia/taniarascia.com/blob/master/content/posts/2018-06-21-the-simplest-php-router.md  
E-Mail form: https://www.quackit.com/html/codes/html_form_to_email.cfm