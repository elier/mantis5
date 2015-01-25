![Mantis5 preview](http://elierdelgado.com/wp-content/uploads/2015/01/Mantis5.png)

# Intro
Mantis5 is an intent to revamp the popular MantisBT project using Symfony and HTML5.

# History 
I checked once the current MantisBT code and database just by curiosity and I realized that the database might be in a good shape like to do a reverse engineering toward the creation of a domain model. Right away, I installed Symfony and started to play with doctrine to generate the entities. For my surprise, I just needed an insignificant change in the database schema in order to be able to generate all entities.

Do you know what that means? Well, I got one of my favorities Bootstrap theme and start to generate also some CRUDs to see what else I can do. In just a few hours, I was able to manage users, authenticate users, create projects and a couple of simple operations. In other words: "I have the traditional MantisBT working and a brand new version (incompleted) based on Symfony sharing the same database plus a nicer mobile friendly UI".

I see the migration of MantisBT to Symfony a feasible and great opportunity for the project because many more developers will be able to contribute much more in such standard and popular framework that is Symfony.

# D-Day Strategy
Here the big idea. You probably have a MantisBT installed in your organization. Why not to have a second interface with a nicer UI, mobile friendly, dashboards, nice graphs like JIRA does, etc? That would be the Mantis5 version. So, you keep both version working in parallel until Mantis5 be able to complete replace your MantisBT instance.

At that point (D-Day) Mantis5 will be able to evolve and add new features at full speed thanks to all those great Symfony developers out there.

# Installation
* Install MantisBT version 1.2.17
* Clone or download this project
* Update the project using composer. It's a symfony2 project. Make sure you get all the required vendors libraries
* Configure the project to point to the same database of MantisBT
* Update the database schema with the following script:
```SQL
ALTER TABLE mantis_project_hierarchy_table ADD COLUMN _id INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (_id);
ALTER TABLE mantis_tag_table DROP PRIMARY KEY;
ALTER TABLE mantis_tag_table CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE date_created date_created INT NOT NULL, CHANGE date_updated date_updated INT NOT NULL;
CREATE UNIQUE INDEX `UNIQUE` ON mantis_tag_table (id, name);
ALTER TABLE mantis_tag_table ADD PRIMARY KEY (id);
```
* You should be able to login with the same credentials of your Mantis instance, create users, projects.

# What next?
I am inviting all Symfony developers around to contribute.

# Bootstrap theme
I bought the theme for this project and got the authorization of the author to integrate it and share it openly within the source code.

NOBODY IS ALLOWED TO USE THE THEME OUT OF THIS PROJECT EXCEPT IF YOU BUY IT TO THE OWNER THROUGH THE FOLLOWING LINK:  
https://wrapbootstrap.com/theme/kingadmin-responsive-admin-dashboard-WB09JXK43

