# phpLab

Objective

On the contact page, there is an HTML form for users to enter their contact information in order to be added to a mailing list. In this lab, we will write the PHP code needed to validate the user's input, and save their information to a database table. When you have completed this lab, you should be able to:

Create and troubleshoot database connections using PHP
Accept user data, and save it to a database
Recall data from a database and display it to the user
Instructions

Set up your database

It is imperative that you have a working installation of MySQL on your PC prior to starting this lab. If your MySQL does not work, please ensure it is working immediately!. There will be no extensions given due to incorrectly installed software as this was done and tested week one!

Using phpMyAdmin (or the MySQL workbench, or the command line), run the SQL file to create the wp_eatery database, a database user, and the mailing list table.

Databases must have the same names and credenitals. My database was created using the same sql file. 

The PHP code that saves the user's data must meet the minimum functionality requirements:

All form fields must be validated to ensure a value is entered for each one. If a form field is left blank, no data is to be saved to the database. The user must be informed of which fields need to be updated. No JavaScript is to be used for data validation.
Note that the contactus.php page can call itself. This will allow you to display the form and the validation error messages on the same page.
Once the data has been validated, an entry should be made in the database. The user's data must be put into the correct column (ie: First Name in the firstName field, etc).
Once the data has been saved to the database, the user should be informed that the data was saved successfully. If there was an error saving the data, they should be informed of the error
You can also double check that the data was inserted correctly through your phpmyadmin interface.

Create a page that displays a table with all the customers on the mailing list table

Create a php page called mailing_list.php that, when called, displays an HTML table containing the customers data from the mailingList table.
Each row should contain the following customer information in the order they appear below. The table should contain a header row outlining the data below...

Full Name (combine the firstname and lastname)
Email
Username
Phone
Add an additional item to the navigation under Contact, called "List". This navigation item will link to the new mailing_list.php script you created.
Please note that your table must contain headers and all the information indicated above
