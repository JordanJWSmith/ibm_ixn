# IBM IXN

This repository contains source code for the IBM IXN web app. It is a portal for IBM to easily display student project information. 
Administrators upload a CSV file containing project information on the site's admin page, which the system uses to auto-generate static web pages for each project. Each page contains an embedded YouTube link, an abstract and various other pieces of project information. These projects are then displayed in project galleries throughout the site.

The project is lightweight and uses no database - it uses only CSV files as backend data storage. 

There are currently two instances hosted on the web:
* [Demo Site (with fake data)](http://ixnportal.com/ibmixn)
* [Live Site (with real data)](http://ixnportal.com/ibmixndemo)

A similar IXN Portal site was developed for NHS. This uses a database and has additional functionality such as postcode lookup and additional project filtering. Its repository can be accessed [here](https://github.com/JordanJWSmith/ixn-for-the-nhs).

This project was developed in a team of three for UCL during the MSc Computer Science course.
