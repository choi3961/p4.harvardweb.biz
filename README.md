p4.harvardweb.biz
=================

* This is last project of web application for harvardweb.

* This web application shows the farmers' web pages for direct deal
  between rural areas and urban cities in South Korea. 
  The web sites in center part are Korean farmers' web pages 
  which are naturally written in Korean.
  This uses Korean language in the least, while meta controllers(buttons, links) 
  reading in English.

  Horizontal categories at the middle top are the provinces of Korea.
  Vertical categories on the left part are the kinds of agricultural products.

  There are some wrong translation :
  	* Ship should be translated into pear.
  	* Car should be translated into tea.
  	* Han should be translated into Korean rice cakes or rice snacks
  	* Domestic should be translated into Domestic tea.

* author : Jae-Kyu Choi

******************************************************************

Contents
--------
* The file manifest.
* Features
* Changelogs.

******************************************************************

The file manifest
-----------------
* c_base_php : the parent class for all the controllers.
* c_index.php : controller for the landing page.
* c_posts.php : controller for the posts pages.
* c_users.php : controller for the users.
* c_producers.php : controller for filtering the producers' web pages.
* c_administrator : controller for administrator.

* v_template.php : template for all the pages.
* v_email.php : email sending format.
* v_index_index.php : landing page format.
* v_landing_page.php : shows the sites of farmers'.
* v_posts_add.php : page for new post.
* v_posts_index.php : page for the post a user follow.
* v_posts_mypage.php : page for my posts.
* v_posts_update.php : page for update a post.
* v_posts_users.php : page of all the users.
* v_users_login.php : page for login.
* v_users_signup.php : page for signup.
* v_producers_local.php : filters the farmers' web pages according to the local areas.
* v_producers_category02.php : filters the web pages according to the categories.
* v_producers_farmers_posts.php : shows the farmers posts.
* v_producers_register.php : This is for registering the farmers' domains.
* v_administrator_upload.php : This is for the administrator to upload a file.

* main.css : stylesheet file for all the pages.
* main02.css : stylesheet file for sub pages.

* control.js : client side controller for error checking, etc.
* jquery.js : javascript library.


********************************************************************

Features
--------
* user sign up.
* user login.
* user posting.
* post update.
* post showing.
* post remove.
* post following.
* post unfollowing.
* sign up error checking.
* site register error checking.
* farmers' domain registering.
* filtering the web pages of farmers' according to the local areas.
* filtering the web pages of farmers' according to the categories.
* seeing the farmers' posts without login.

******************************************************************

Changelogs
----------
* 2013-10-30 all the pages are completed.
* 2013-11-1 index.php and main.css are validated.
* 2013-11-2 Finally validated in local computer.
* 2013-11-3 Commented for all the documents including css files.

