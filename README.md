# Fooder
Karina Banda and Nelson Huang
HTML and Backend was worked on collaboratively. Cookies were handled by Nelson Huang and HTML and Javascript by me, Karina Banda.  
210- Web Programming Project
Fall 2014 

=== Overview === 
We created a CRUD web app that is geared towards providing an alternative food delivery service that will make college students' lives easier. Right now there exist food delivery services such as Grubhub and Seamless, but these are limited to the restaurants that are able to deliver. Some college students have no access to a car and are limited to restaurants in the nearby vicinity. However with this service, regardless of access to a car or whether the restaurant delivers, the pool of restaurants you can choose from with include any and all restaurants in your area.

Our web application will work as a combination of Uber and Grubhub. Uber is a ridesharing service that connects drivers to riders via their apps. The rider requests an Uber and any driver in the area can accept that request. Grubhub consolidates a catalog of restaurants in which one can order from but has limitations based on if the restaurant’s delivery options. The drivers that will make up our team, will be compensated per delivery. Students will be able to make a user account and then be able to sign up as a driver or be able to request services as a customer. In addition, users will also be able to adjust their personal information such as saving credit card numbers, updating their payment method, phone numbers, and etc. They will also be able to delete their accounts at any time.


=== Mini-tutorial ===
The user can either sign-up or login directly with an account already in the database. After logging in, the user will be directed to the homepage, where the user can search for different cuisines using the search bar. The functionality of this search bar is currently quite primitive, but the user can search using “Mexican”, “Subs”, “American, or “Diner” string because we currently only have 4 restaurants listed in our testing and the search bar is still case sensitive. For example, if you type in “Mexican”, the other restaurants beside Chipotle will disappear. Also, when the user hovers over each restaurant on the homepage, javascript will shade part of the logo and a brief description of the food will be displayed. When the user clicks on a restaurant, they will be linked to the restaurant page with more details -- IE the menu and hours of operation. The order.html page is dynamically made through the use of ajax based on what restaurant name is passed through the url’s query string. By having the restaurant’s name passed through the url allows for users to be able to easily bookmark the restaurant ordering page. There, the user can select the items they want at each restaurant. When the submit button is pressed the form data will be saved in another database, which is used in the delivery tab to show the current orders for a user. And also for the delivery tab for potential deliverers to look at and accept. Additionally, the navigation bar on the top is functional. The “U of R Fooder” tab will link back to the home.html page, as well as the “Order” and “Deliver” tabs. The “About” tab will link to a page with a small description of our web app. Finally, the “Logout” tab will, intuitively, log the user out, deleting the cookie as well.

=== Challenges ===
The challenging parts of the assignment were implementing all of these different elements together to a fluid and simplistic app. In the beginning, we struggled with deciding how to plan everything out. As we progressed, designs kept changing but, meeting with our partners let us find the most effective way to design the website.

The frustrating parts of this assignment included syntax errors. For example, we struggled with a php script because it kept on crashing no matter how we altered it. After a long time, we finally figured out that we were missing a semi-colon at the end of a statement. Also another frustrating thing we encountered was keeping track of all the different php scripts needed for each html file. We have different scripts for listing the restaurants, listing the restaurants by category, dynamically setting up the order page, and retrieving the orders. 

The designs are still simple as of now. Now that we have an initial design laid out for all the functions of the website, we can now go back and add on to each of the functionality to make the content of our website rich. Although there are some bugs, we do list out what the orders are in our orders database but we will implement a functionality for users to choose if they want to accept an order to deliver for someone. 

