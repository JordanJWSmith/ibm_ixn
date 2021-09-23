<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<style id="applicationStylesheet" type="text/css">
/* ibm-plex-sans-regular - latin */
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  src: url('fonts/IBMPlexSans-Regular.ttf');

}
	.mediaViewInfo {
		--web-view-name: Home;
		--web-view-id: Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Home;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}

	#Home {
		position: absolute;
		width: 1920px;
		height: 4684px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Home;
		--web-view-id: Home;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {

		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}

	}
	.Filter_Bar {
		position: absolute;
		/* background-color: rgba(232,237,238,1); */
		fill: rgba(14,42,59,1);
		width: 252px;
		height: 60px;
		left: 340.321px;
		top: 2760px;
		overflow: visible;
		/* cursor:pointer; */
		/* border: 1px solid rgba(112,112,112,1); */
		text-align: right;
		font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 22px;
		color: rgba(112,112,112,1);
		padding-top: 15px;
  	padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
	}

	.Filter_Bar_2 {
		position: absolute;
		/* background-color: rgba(232,237,238,1); */
		fill: rgba(14,42,59,1);
		width: 252px;
		height: 60px;
		left: 340.321px;
		top: 1630px;
		overflow: visible;
		/* cursor:pointer; */
		/* border: 1px solid rgba(112,112,112,1); */
		text-align: right;
		font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 22px;
		color: rgba(112,112,112,1);
		padding-top: 15px;
  	padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
	}
	/* The dropdown container */
	.dropdown {
	  float: left;
	  overflow: hidden;
	}

	/* Dropdown button */
	.dropdown .dropbtn {
	  font-size: 16px;
	  border: none;
	  outline: none;
	  color: white;
	  padding: 14px 16px;
	  background-color: inherit;
	  font-family: Arial; /* Important for vertical align on mobile phones */
	  margin: 0; /* Important for vertical align on mobile phones */
	}
	.dropdown .filterbtn {
		background-color: rgba(14,42,59,1);
		width: 173px;
		height: 48px;
		left: 1300.321px;
		top: 3709px;
		border: 1px solid rgba(112,112,112,1);
		text-align: left;
		font-family: IBM plex sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
		color: rgba(243,243,243,1);
		padding-top: 15px;
  	padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
	}
	/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f0f0f0;
  min-width: 50px;
	max-height:190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
	overflow-y :auto;
  overflow-x:hidden;
	font-family: IBM Plex Sans;
	font-style: normal;
	font-weight: normal;
	font-size: 13px;
}

/* Dropdown content (hidden by default) */
.dropdown-filter-content {
display: none;
position: absolute;
background-color: #f0f0f0;
min-width: 173px;
max-height:230px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
overflow-y :auto;
overflow-x:hidden;
font-family: IBM Plex Sans;
font-style: normal;
font-weight: normal;
font-size: 13px;
}

/* Links inside the dropdown */
.dropdown-filter-content a {
  float: none;
  color: rgba(112,112,112,1);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-filter-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-filter-content {
  display: block;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: rgba(112,112,112,1);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

#no_results {
	position: absolute;
	background-color: rgba(243,243,243,1);
	width: 940px;
	border-style: solid;
	border-width: 3px;
	border-color: rgba(17,88,37,1);
	padding: 50px;
	margin: 20px;
	left: 581px;
	top: 1625px;
	/* height: 400px; */
	font-family: IBM Plex Sans;
	font-size: 40px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
	overflow: scroll;
}
#no_results_text {
	margin: 20px;
	font-family: IBM Plex Sans;
	font-size: 28px;
	/* padding: 20px; */
}
#no_results_2 {
	position: absolute;
	background-color: rgba(243,243,243,1);
	width: 940px;
	border-style: solid;
	border-width: 3px;
	border-color: rgba(17,88,37,1);
	padding: 50px;
	margin: 20px;
	left: 581px;
	top: 2755px;
	/* height: 400px; */
	font-family: IBM Plex Sans;
	font-size: 40px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
	overflow: scroll;
}

	#Line_2 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_2 {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 354px;
		top: 532.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID01_Welcome {
		left: 354px;
		top: 550px;
		position: absolute;
		overflow: visible;
		width: 97px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Path_10142 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_10142 {
		overflow: visible;
		position: absolute;
		width: 938px;
		height: 327px;
		left: 602px;
		top: 867px;
		transform: matrix(1,0,0,1,0,0);
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home_ForUniversities.html;
	}
	#Group_10805 {
		position: absolute;
		width: 195px;
		height: 37px;
		left: 654px;
		top: 904px;
		overflow: visible;
	}
	#For_Universities {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 196px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefit_from_a_structured_prog {
		left: 654px;
		top: 955px;
		position: absolute;
		overflow: visible;
		width: 673px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#finance {
		position: absolute;
		width: 120px;
		height: 120px;
		left: 1361px;
		top: 961px;
		overflow: visible;
	}
	#Rectangle_338 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_338 {
		position: absolute;
		overflow: visible;
		width: 105px;
		height: 8px;
		left: 8px;
		top: 105px;
	}
	#Path_10094 {
		fill: rgba(17,88,37,1);
	}
	.Path_10094 {
		overflow: visible;
		position: absolute;
		width: 90px;
		height: 89.998px;
		left: 15px;
		top: 7.502px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle {
		fill: transparent;
	}
	.Transparent_Rectangle {
		position: absolute;
		overflow: visible;
		width: 120px;
		height: 120px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_339 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_339 {
		position: absolute;
		overflow: visible;
		width: 938px;
		height: 308px;
		left: 602px;
		top: 1216px;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home_ForIndustries.html;
	}
	#Group_10806 {
		position: absolute;
		width: 176px;
		height: 37px;
		left: 654px;
		top: 1253px;
		overflow: visible;
	}
	#For_Industries {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 177px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#An_opportunity_to_access_your_ {
		left: 654px;
		top: 1316px;
		position: absolute;
		overflow: visible;
		width: 670px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#enterprise {
		position: absolute;
		width: 113px;
		height: 103px;
		left: 1365px;
		top: 1310px;
		overflow: visible;
	}
	#Rectangle_340 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_340 {
		position: absolute;
		overflow: visible;
		width: 3px;
		height: 5px;
		left: 29px;
		top: 28px;
	}
	#Rectangle_341 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_341 {
		position: absolute;
		overflow: visible;
		width: 3px;
		height: 5px;
		left: 29px;
		top: 49px;
	}
	#Rectangle_342 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_342 {
		position: absolute;
		overflow: visible;
		width: 2px;
		height: 5px;
		left: 52px;
		top: 28px;
	}
	#Rectangle_343 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_343 {
		position: absolute;
		overflow: visible;
		width: 2px;
		height: 5px;
		left: 52px;
		top: 49px;
	}
	#Rectangle_344 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_344 {
		position: absolute;
		overflow: visible;
		width: 3px;
		height: 6px;
		left: 29px;
		top: 70px;
	}
	#Rectangle_345 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_345 {
		position: absolute;
		overflow: visible;
		width: 2px;
		height: 6px;
		left: 52px;
		top: 70px;
	}
	#Path_10095 {
		fill: rgba(17,88,37,1);
	}
	.Path_10095 {
		overflow: visible;
		position: absolute;
		width: 107.448px;
		height: 98.733px;
		left: 2.652px;
		top: 2.652px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_dq {
		fill: transparent;
	}
	.Transparent_Rectangle_dq {
		position: absolute;
		overflow: visible;
		width: 113px;
		height: 103px;
		left: 0px;
		top: 0px;
	}
	#Line_3 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_3 {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 354px;
		top: 1576.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID02_Upcoming_Projects {
		left: 354px;
		top: 1594px;
		position: absolute;
		overflow: visible;
		width: 168px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Project_Title {
		left: 602px;
		top: 1869px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040 {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 1594px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_dv {
		left: 602px;
		top: 2201px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_dw {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 1926px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_dx {
		left: 1085px;
		top: 1869px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_dy {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 1594px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_dz {
		left: 1085px;
		top: 2201px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_d {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 1926px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_d {
		left: 602px;
		top: 2533px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ea {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2258px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ea {
		left: 1085px;
		top: 2533px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_eb {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2258px;
		overflow: visible;
		cursor: pointer;
	}
	#Line_6 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_6 {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 354px;
		top: 2710.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID03_Projects_Archives {
		left: 354px;
		top: 2728px;
		position: absolute;
		overflow: visible;
		width: 158px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Project_Title_eb {
		left: 602px;
		top: 3002px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ec {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2727px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ec {
		left: 602px;
		top: 3334px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ed {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 3059px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ed {
		left: 1085px;
		top: 3002px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ee {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2727px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ee {
		left: 1085px;
		top: 3334px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ef {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 3059px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ef {
		left: 602px;
		top: 3666px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_eg {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 3391px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_eh {
		left: 1085px;
		top: 3666px;
		position: absolute;
		overflow: hidden;
    text-overflow: ellipsis;
    width: 440px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		color: rgba(14,42,59,1);
		text-decoration: underline;
		cursor: pointer;
	}
	#Screenshot_2021-02-26_at_17040_ei {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 3391px;
		overflow: visible;
		cursor: pointer;
	}
	#Search_Bar {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 602px;
		top: 2658px;
		overflow: visible;
	}
	#Group_10619 {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_296 {
		fill: rgba(243,243,243,1);
	}
	.Rectangle_296 {
		position: absolute;
		overflow: visible;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
	}
	#search__large {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 19px;
		top: 16px;
		overflow: visible;
	}
	#Icon__Search_-_16 {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_2829 {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search_by_keywords {
		left: 59px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 129px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(141,141,141,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Path_5097 {
		fill: rgba(141,141,141,1);
	}
	.Path_5097 {
		overflow: visible;
		position: absolute;
		width: 771px;
		height: 1px;
		left: 0px;
		top: 48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_10808 {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 1381px;
		top: 2659px;
		overflow: visible;
	}
	#Button_-_Default {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361 {
		fill: rgba(14,42,59,1);
	}
	.Path_361 {
		overflow: visible;
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379 {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 44px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.01399999976158142px;
	}
	#Line_5 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_5 {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 354px;
		top: 3868.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID04_Directory {
		left: 354px;
		top: 3886px;
		position: absolute;
		overflow: visible;
		width: 97px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Pagination_Bar {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 602px;
		top: 3709px;
		overflow: visible;
	}
	#Pagination_Bar_2 {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 602px;
		top: 2575px;
		overflow: visible;
	}
	#Group_4206 {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_4207 {
		position: absolute;
		width: 938px;
		height: 0.863px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#ID1__6_of_50_items {
		left: 180.844px;
		top: 19px;
		position: absolute;
		overflow: visible;
		width: 102px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#ID6 {
		left: 125.316px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 9px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Items_per_page {
		left: 8.316px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 98px;
		white-space: nowrap;
		line-height: 24px;
		margin-top: -5px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Group_4213 {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 895.737px;
		top: 0px;
		overflow: visible;
	}
	#Group_4214 {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 853.473px;
		top: 0px;
		overflow: visible;
	}
	#Group_4216 {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 165.604px;
		top: 0px;
		overflow: visible;
	}
	#Icon_-_Carret--Right__20 {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 915.683px;
		top: 23.054px;
		overflow: visible;
	}
	#Group_10684 {
		position: absolute;
		width: 122.524px;
		height: 52.258px;
		left: 717.195px;
		top: 0px;
		overflow: visible;
	}
	#of_9_pages {
		left: 57.524px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 66px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.05400000095367432px;
	}
	#ID2 {
		left: 15.524px;
		top: 16px;
		position: absolute;
		overflow: visible;
		width: 9px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(112,112,112,1);
		letter-spacing: 0.11399999618530274px;
	}
	#Group_4215 {
		position: absolute;
		width: 0.863px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#chevron--down__20 {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 36.873px;
		top: 23.813px;
		overflow: visible;
	}
	#carret--left__20 {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 872.341px;
		top: 23.054px;
		overflow: visible;
	}
	#chevron--down__20_ff {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 138.003px;
		top: 24.365px;
		overflow: visible;
	}
	#Line_7 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_7 {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 602px;
		top: 3883.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_8 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_8 {
		overflow: visible;
		position: absolute;
		width: 455px;
		height: 1px;
		left: 1085.5px;
		top: 3883.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Contact_Us {
		left: 602px;
		top: 3893px;
		position: absolute;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Sign_up_to_Newsletter {
		left: 1086px;
		top: 3893px;
		position: absolute;
		overflow: visible;
		width: 270px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Line_9 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_9 {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 602px;
		top: 4120.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Submit_a_Project_Request {
		left: 602px;
		top: 4130px;
		position: absolute;
		overflow: visible;
		width: 318px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Line_10 {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_10 {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 1084.5px;
		top: 4120.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects_Archives {
		left: 1086px;
		top: 4130px;
		position: absolute;
		overflow: visible;
		width: 218px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Email_j0nnymacukibmcom {
		left: 602px;
		top: 3989px;
		position: absolute;
		overflow: visible;
		width: 218px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#John_McNamara_IBM_UK {
		left: 602px;
		top: 3959px;
		position: absolute;
		overflow: visible;
		width: 192px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#You_can_sign_up_to_our_Newslet {
		left: 1086px;
		top: 3959px;
		position: absolute;
		overflow: visible;
		width: 461px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#To_view_the_full_projects_arch {
		left: 1086.5px;
		top: 4191px;
		position: absolute;
		overflow: visible;
		width: 467px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Do_you_have_a_project_idea_to_ {
		left: 602px;
		top: 4196px;
		position: absolute;
		overflow: visible;
		width: 460px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Screen_Shot_2021-03-31_at_1453 {
		position: absolute;
		width: 1920px;
		height: 38px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_335 {
		fill: rgba(17,88,37,1);
		stroke: rgba(1,1,1,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_335 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 423px;
		left: 0px;
		/*top: 38px;*/
	}
	#Group_10802 {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 354px;
		top: 357px;
		overflow: visible;
	}
	#Button_-_Default_fw {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_fx {
		fill: rgba(242,245,247,1);
	}
	.Path_361_fx {
		overflow: visible;
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_fy {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 16px;
		top: 15px;
		overflow: visible;
	}
	#Group_fz {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_touch {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 77px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(14,42,59,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090 {
		fill: rgba(242,245,247,1);
	}
	.Path_10090 {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_f {
		fill: transparent;
	}
	.Transparent_Rectangle_f {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ga {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_f {
		fill: rgba(242,245,247,1);
	}
	.Path_10090_f {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_gb {
		fill: transparent;
	}
	.Transparent_Rectangle_gb {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ga {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_ga {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_ga {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_gb {
		fill: transparent;
	}
	.Transparent_Rectangle_gb {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Our_partnership_with_the_Natio {
		left: 354px;
		top: 293px;
		position: absolute;
		overflow: visible;
		width: 791px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.01399999976158142px;
	}
	#Group_10142 {
		position: absolute;
		width: 955px;
		height: 110px;
		left: 354px;
		top: 108px;
		overflow: visible;
	}
	#IBMs_contribution_to_education {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 956px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		color: rgba(255,255,255,1);
	}
	#Group_10884 {
		position: absolute;
		width: 938px;
		height: 308px;
		left: 602px;
		top: 539px;
		overflow: visible;
	}
	#Rectangle_336 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_336 {
		position: absolute;
		overflow: visible;
		width: 938px;
		height: 308px;
		left: 0px;
		top: 0px;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home_ForStudents.html;
	}
	#Group_10821 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 52px;
		top: 226px;
		overflow: visible;
	}
	#Group_10809 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_gh {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_gi {
		fill: rgba(14,42,59,1);
	}
	.Path_361_gi {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
		cursor: pointer;
	}
	#Group_379_gj {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_gk {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Learn_more {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 72px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
		cursor: pointer;
	}
	#arrow--right_gp {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_gn {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_gn {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_gr {
		fill: transparent;
	}
	.Transparent_Rectangle_gr {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
		cursor: pointer;
	}
	#arrow--right_gp {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_gq {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_gq {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_gr {
		fill: transparent;
	}
	.Transparent_Rectangle_gr {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10885 {
		position: absolute;
		width: 827px;
		height: 126px;
		left: 52px;
		top: 94px;
		overflow: visible;
	}
	#Group_10886 {
		position: absolute;
		width: 827px;
		height: 126px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#education {
		position: absolute;
		width: 119px;
		height: 126px;
		left: 708px;
		top: 0px;
		overflow: visible;
	}
	#Path_10091 {
		fill: rgba(17,88,37,1);
	}
	.Path_10091 {
		overflow: visible;
		position: absolute;
		width: 75.6px;
		height: 37.666px;
		left: 21.802px;
		top: 82.808px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10092 {
		fill: rgba(17,88,37,1);
	}
	.Path_10092 {
		overflow: visible;
		position: absolute;
		width: 7.533px;
		height: 37.666px;
		left: 14.269px;
		top: 24.677px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10093 {
		fill: rgba(17,88,37,1);
	}
	.Path_10093 {
		overflow: visible;
		position: absolute;
		width: 90.666px;
		height: 60.266px;
		left: 14.269px;
		top: 7.533px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_gy {
		fill: transparent;
	}
	.Transparent_Rectangle_gy {
		position: absolute;
		overflow: visible;
		width: 119px;
		height: 126px;
		left: 0px;
		top: 0px;
	}
	#This_is_an_opportunity_to_work {
		left: 0px;
		top: 6px;
		position: absolute;
		overflow: visible;
		width: 651px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Group_10180 {
		position: absolute;
		width: 160px;
		height: 37px;
		left: 52px;
		top: 37px;
		overflow: visible;
	}
	#For_Students {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Group_10868 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 654px;
		top: 1119px;
		overflow: visible;
	}
	#Group_10809_g {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
		cursor: pointer;
	}
	#Button_-_Default_g {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_g {
		fill: rgba(14,42,59,1);
	}
	.Path_361_g {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_g {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_g {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Learn_more_g {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 72px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_hc {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ha {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_ha {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_he {
		fill: transparent;
	}
	.Transparent_Rectangle_he {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
		cursor: pointer;
	}
	#arrow--right_hc {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_hd {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_hd {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_he {
		fill: transparent;
	}
	.Transparent_Rectangle_he {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10869 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 654px;
		top: 1440px;
		overflow: visible;
	}
	#Group_10809_hg {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
		cursor: pointer;
	}
	#Button_-_Default_hh {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_hi {
		fill: rgba(14,42,59,1);
	}
	.Path_361_hi {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_hj {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_hk {
		position: absolute;
		width: 71px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Learn_more_hl {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 72px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_hp {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_hn {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_hn {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_hr {
		fill: transparent;
	}
	.Transparent_Rectangle_hr {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
		cursor: pointer;
	}
	#arrow--right_hp {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_hq {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_hq {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_hr {
		fill: transparent;
	}
	.Transparent_Rectangle_hr {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10870 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 602px;
		top: 4038px;
		overflow: visible;
	}
	#Group_10809_ht {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_hu {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_hv {
		fill: rgba(14,42,59,1);
	}
	.Path_361_hv {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_hw {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_hx {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_Touch {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 79px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_h {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_h {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_h {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ia {
		fill: transparent;
	}
	.Transparent_Rectangle_ia {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_h {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ia {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_ia {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ia {
		fill: transparent;
	}
	.Transparent_Rectangle_ia {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10871 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1087px;
		top: 4039px;
		overflow: visible;
	}
	#Group_10809_h {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_h {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_h {
		fill: rgba(14,42,59,1);
	}
	.Path_361_h {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_h {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_ia {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Sign_Up {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_if {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_id {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_id {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ih {
		fill: transparent;
	}
	.Transparent_Rectangle_ih {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_if {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ig {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_ig {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ih {
		fill: transparent;
	}
	.Transparent_Rectangle_ih {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10872 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 602px;
		top: 4266px;
		overflow: visible;
	}
	#Group_10809_ij {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_ik {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_il {
		fill: rgba(14,42,59,1);
	}
	.Path_361_il {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_im {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_in {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Submit_a_Request {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 112px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_is {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_iq {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_iq {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_iu {
		fill: transparent;
	}
	.Transparent_Rectangle_iu {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_is {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_it {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_it {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_iu {
		fill: transparent;
	}
	.Transparent_Rectangle_iu {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10873 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1085px;
		top: 4265px;
		overflow: visible;
		cursor: pointer;
	}
	#Group_10809_iw {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_ix {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_iy {
		fill: rgba(14,42,59,1);
	}
	.Path_361_iy {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_iz {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_i {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#View_Archives {
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 89px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_ja {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_i {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_i {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ja {
		fill: transparent;
	}
	.Transparent_Rectangle_ja {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ja {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ja {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_ja {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ja {
		fill: transparent;
	}
	.Transparent_Rectangle_ja {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}

</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page.
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			}

			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}

			self.initialized = true;
		}

		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);

			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}

		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;

		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send:
					//
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null'
					// has been blocked by CORS policy:
					// Cross origin requests are only supported for protocol schemes:
					// http, data, chrome, chrome-extension, https.
					//
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					//
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date:
					//
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}

					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {

				if (self.refreshRequest.status === 2 ||
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;

						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}


					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";

		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}

		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";

		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}

			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;

			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views.
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}

				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;

		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}

		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);

			var display = overlay && overlay.style.display;

			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");


		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}

		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}

		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;

			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);

				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);

			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);

			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);

				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}

		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;

		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;

		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);

			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;

			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale.
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);

		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {

			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}

			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}

		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}

		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}

		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;

		// listen for both events
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}

		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule;
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];

				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;

				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}

			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}

		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;

		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;

			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];

				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;

					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];

						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {

							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}

		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);

			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}

		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue;

		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];

			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;

				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;

					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";

						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText;

				if (selectorText==null) continue;

				selectorText = selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					self.addView(selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.addedViews array
	 */
	self.addView = function(viewId, cssRule, mediaRule, stateName) {
		var state = {name:viewId, rule:cssRule, id:viewId, mediaRule:mediaRule, stateName:stateName};
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = state;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 */
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];

		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);

		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.getElementByClass = function(className) {
		className = className ? className.trim() : className;
		var elements = document.getElementsByClassName(className);

		return elements.length ? elements[0] : null;
	}

	self.resizeHandler = function(event) {

		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];

			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}

	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();

				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;

			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}

			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";

		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {

		  }
		}

		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);

		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;

		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }

			return newArray;
		}

		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}

	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
<div id="Home">
	<svg class="Line_2" viewBox="0 0 211.5 2">
		<path id="Line_2" d="M 0 0 L 211.5 0">
		</path>
	</svg>
	<div id="ID01_Welcome">
		<span>01. Welcome</span>
	</div>
	<svg class="Path_10142" viewBox="0 0 938 327">
		<path id="Path_10142" d="M 0 0 L 938 0 L 938 327 L 0 327 L 0 0 Z">
		</path>
	</svg>
	<div id="Group_10805">
		<div id="For_Universities">
			<span>For Universities</span>
		</div>
	</div>
	<div id="Benefit_from_a_structured_prog">
		<span>Benefit from a structured program which can provide cutting edge projects for your students<br/>to work on as part of their course, while providing free access to IBM technology and industry <br/>recognised accreditations to your students. Gain access to hundreds of free expert lectures in <br/>topics ranging from A.I to Quantum, given by Subject Matter Experts with years of industry <br/>experience, as well as industry mentorship for your students. Join a club of IXN universities <br/>that are dedicated to sharing best practices to provide real industry experience to students, <br/>that will help them obtain hands on client facing skills to prepare them for their career.</span><br>
	</div>
	<div id="finance">
		<svg class="Rectangle_338">
			<rect id="Rectangle_338" rx="0" ry="0" x="0" y="0" width="105" height="8">
			</rect>
		</svg>
		<svg class="Path_10094" viewBox="4 2 90 89.998">
			<path id="Path_10094" d="M 90.25 35.74882888793945 C 92.32106781005859 35.74882888793945 94 34.06989669799805 94 31.99883079528809 L 94 20.74883079528809 C 93.99932861328125 19.16996765136719 93.00979614257812 17.76064491271973 91.52500152587891 17.22383117675781 L 50.27500152587891 2.223830223083496 C 49.45109558105469 1.925956726074219 48.54890441894531 1.925956726074219 47.72499847412109 2.223830223083496 L 6.474998474121094 17.22383117675781 C 4.990196228027344 17.76064491271973 4.000672340393066 19.16996765136719 4 20.74883079528809 L 4 31.99883079528809 C 4 34.06989669799805 5.678932189941406 35.74882888793945 7.75 35.74882888793945 L 11.5 35.74882888793945 L 11.5 84.49883270263672 L 4 84.49883270263672 L 4 91.99883270263672 L 94 91.99883270263672 L 94 84.49883270263672 L 86.5 84.49883270263672 L 86.5 35.74882888793945 L 90.25 35.74882888793945 Z M 11.5 23.37383079528809 L 49 9.72382926940918 L 86.5 23.37383079528809 L 86.5 28.24883079528809 L 11.5 28.24883079528809 L 11.5 23.37383079528809 Z M 56.5 84.49883270263672 L 41.5 84.49883270263672 L 41.5 35.74882888793945 L 56.5 35.74882888793945 L 56.5 84.49883270263672 Z M 19 35.74882888793945 L 34 35.74882888793945 L 34 84.49883270263672 L 19 84.49883270263672 L 19 35.74882888793945 Z M 79 84.49883270263672 L 64 84.49883270263672 L 64 35.74882888793945 L 79 35.74882888793945 L 79 84.49883270263672 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle">
			<rect id="Transparent_Rectangle" rx="0" ry="0" x="0" y="0" width="120" height="120">
			</rect>
		</svg>
	</div>
	<svg class="Rectangle_339">
		<rect id="Rectangle_339" rx="0" ry="0" x="0" y="0" width="938" height="308">
		</rect>
	</svg>
	<div id="Group_10806">
		<div id="For_Industries">
			<span>For Industries</span>
		</div>
	</div>
	<div id="An_opportunity_to_access_your_">
		<span>An opportunity to access your very own ‘Skunk Works’ and collaborate with some of the most <br/>skilled individuals in academia to create  Proof of Concept applications, based on your <br/>requirements. Developing ideas into real world applications is time consuming, costly and <br/>laden with risk. Our academic teams will take your requirements, and build an application so <br/>you can see your idea take shape in reality. All of this is at no cost to you.</span><br>
	</div>
	<div id="enterprise">
		<svg class="Rectangle_340">
			<rect id="Rectangle_340" rx="0" ry="0" x="0" y="0" width="3" height="5">
			</rect>
		</svg>
		<svg class="Rectangle_341">
			<rect id="Rectangle_341" rx="0" ry="0" x="0" y="0" width="3" height="5">
			</rect>
		</svg>
		<svg class="Rectangle_342">
			<rect id="Rectangle_342" rx="0" ry="0" x="0" y="0" width="2" height="5">
			</rect>
		</svg>
		<svg class="Rectangle_343">
			<rect id="Rectangle_343" rx="0" ry="0" x="0" y="0" width="2" height="5">
			</rect>
		</svg>
		<svg class="Rectangle_344">
			<rect id="Rectangle_344" rx="0" ry="0" x="0" y="0" width="3" height="6">
			</rect>
		</svg>
		<svg class="Rectangle_345">
			<rect id="Rectangle_345" rx="0" ry="0" x="0" y="0" width="2" height="6">
			</rect>
		</svg>
		<svg class="Path_10095" viewBox="2 2 107.448 98.733">
			<path id="Path_10095" d="M 109.4478530883789 44.31421661376953 C 109.4478530883789 40.41930389404297 106.0116958618164 37.26184844970703 101.7730026245117 37.26184844970703 L 78.74845886230469 37.26184844970703 L 78.74845886230469 9.052369117736816 C 78.74845886230469 5.157453536987305 75.31230926513672 2 71.07361602783203 2 L 9.674845695495605 2 C 5.436145305633545 2 1.999999284744263 5.157454013824463 2 9.052371025085449 L 2 100.7331771850586 L 109.4478530883789 100.7331771850586 L 109.4478530883789 44.31421661376953 Z M 9.674845695495605 9.052369117736816 L 71.07361602783203 9.052369117736816 L 71.07361602783203 93.68080902099609 L 9.674845695495605 93.68080902099609 L 9.674845695495605 9.052369117736816 Z M 78.74845886230469 93.68080902099609 L 78.74845886230469 44.31421661376953 L 101.7730026245117 44.31421661376953 L 101.7730026245117 93.68080902099609 L 78.74845886230469 93.68080902099609 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_dq">
			<rect id="Transparent_Rectangle_dq" rx="0" ry="0" x="0" y="0" width="113" height="103">
			</rect>
		</svg>
	</div>
	<svg class="Line_3" viewBox="0 0 211.5 2">
		<path id="Line_3" d="M 0 0 L 211.5 0">
		</path>
	</svg>
	<div id="ID02_Upcoming_Projects">
		<span>02. Current Projects</span>
	</div>

	<?php

	if (isset($_GET['uc_page_no']) && $_GET['uc_page_no']!="") {
			$uc_page_no = $_GET['uc_page_no'];
			} else {
					$uc_page_no = 1;
					}


	if (isset($_GET['uc_filter']) && $_GET['uc_filter']!="") {
			$uc_filter_param = $_GET['uc_filter'];
			} else {
					$uc_filter_param = "";
					}

	if (isset($_GET['arch_page_no']) && $_GET['arch_page_no']!="") {
			$arch_page_no = $_GET['arch_page_no'];
			} else {
					$arch_page_no = 1;
					}


	if (isset($_GET['arch_filter']) && $_GET['arch_filter']!="") {
			$arch_filter_param = $_GET['arch_filter'];
			} else {
					$arch_filter_param = "";
					}

	$directory = "projects/";
	$filecount = 0;
	$files = glob($directory . "*");
	if ($files){
	 $filecount = count($files);
	}

	$ucfile = fopen("uploads/IXN_Projects.csv", "r");

	$temp_uc_thumbnails = array();
	$temp_uc_titles = array();
	$temp_uc_universities = array();
	$temp_uc_slugs = array();
	$temp_uc_filenames = array();

	$test_start = 1;

	while (($row = fgetcsv($ucfile)) !== FALSE) {

	    if ($i >= $test_start) {
	        $temp_uc_row_count++;
					$temp_uc_id = $row[0];
	        $temp_uc_slug = $temp_uc_id . "-" . strtolower(str_replace(" ", "-", $row[5]));
	        $temp_uc_title = $row[5];
	        $temp_uc_authors = $row[6];
	        $temp_uc_abstract = $row[15];
          $temp_uc_rawstring = $row[17];

          if (strpos($temp_uc_rawstring, "youtu.be/") !== false){
        		$temp_uc_tinysplit = explode("be/", $temp_uc_rawstring);
        		$temp_uc_vidID = substr($temp_uc_tinysplit[1], 0, 11);
        	} else {
        		$temp_uc_split = explode("v=", $temp_uc_rawstring);
        		$temp_uc_vidID = substr($temp_uc_split[1], 0, 11);
        	}

        	$temp_uc_imgurl = "https://img.youtube.com/vi/" . $temp_uc_vidID . "/hqdefault.jpg?w=600";
	        // $temp_uc_split = explode("v=", $row[17]);
	        // $temp_uc_vidID = substr($temp_uc_split[1], 0, 11);
	        // $temp_uc_imgurl = "https://img.youtube.com/vi/" . $temp_uc_vidID . "/sddefault.jpg?w=600";
	        $temp_uc_filename = 'projects/' . $temp_uc_slug. '.php';
	        $compTime = $row[2];
	        $compDate_temp = strtotime($compTime);
	        $compDate = date('Y/M/d h:i:s a', $compDate_temp);
	        $currentDate = date('Y/M/d h:i:s a', time());
	        $temp_uc_university = $row[20];

	        array_push($temp_uc_universities, $temp_uc_university);


	        if (isset($_GET['uc_filter']) && $_GET['uc_filter']!="") {
	          if ((file_exists($temp_uc_filename)) & ($compDate >= $currentDate) & ($temp_uc_university == $uc_filter_param)) {
	         array_push($temp_uc_thumbnails, $temp_uc_imgurl);
	         array_push($temp_uc_titles, $temp_uc_title);
	         array_push($temp_uc_slugs, $temp_uc_slug);
	         array_push($temp_uc_filenames, $temp_uc_filename);

	         }

	       } else {
	               if ((file_exists($temp_uc_filename)) & ($compDate >= $currentDate)) {
	       				array_push($temp_uc_thumbnails, $temp_uc_imgurl);
	       				array_push($temp_uc_titles, $temp_uc_title);
	       				array_push($temp_uc_slugs, $temp_uc_slug);
	       				array_push($temp_uc_filenames, $temp_uc_filename);

	       				}
	            }
	    }
	    $i++;

	}
	fclose($ucfile);

	$uc_total_records_per_page = 6;
	$temp_start_row = (($uc_page_no - 1) * 6) + 2 ;
	$uc_start_row = $temp_start_row-2;
	$uc_end_row = $uc_start_row + 5;

	$uc_total_records = count($temp_uc_titles);

	$uc_next_page = $uc_page_no + 1;
	$uc_previous_page = $uc_page_no - 1;

	$uc_total_no_of_pages = ceil($uc_total_records / $uc_total_records_per_page);
	$uc_second_last = $uc_total_no_of_pages - 1; // total pages minus 1

	$uc_thumbnails = array();
	$uc_titles = array();
	$uc_universities = array();
	$uc_slugs = array();
	$uc_filenames = array();

	for($k = $uc_start_row; $k <= $uc_end_row; ++$k) {
	  array_push($uc_thumbnails, $temp_uc_thumbnails[$k]);
	  array_push($uc_titles, $temp_uc_titles[$k]);
	  array_push($uc_universities, $temp_uc_universities[$k]);
	  array_push($uc_slugs, $temp_uc_slugs[$k]);
	  array_push($uc_filenames, $temp_uc_filenames[$k]);
	}

	?>

	<?php

	if (($uc_total_records == 0) or ($filecount == 0)) {
		?>
		<div id='no_results' class='no_results'>Sorry, we couldn't find any results.
			<div id='no_results_text' class='no_results_text'>Please try a different filter.</div>
		</div>

		<?php
	} else {

	if ($uc_thumbnails[0]) {
	 ?>
	<div id="Project_Title" onclick="window.location='projects/<?php echo $uc_slugs[0] ?>.php';">
		<span><?php echo $uc_titles[0]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040" onclick="window.location='projects/<?php echo $uc_slugs[0] ?>.php';" src=<?php echo $uc_thumbnails[0]; ?> srcset=<?php echo $uc_thumbnails[0]; ?>>
<?php
}

 if ($uc_thumbnails[2]) {
  ?>
	<div id="Project_Title_dv" onclick="window.location='projects/<?php echo $uc_slugs[2] ?>.php';">
		<span><?php echo $uc_titles[2]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_dw" onclick="window.location='projects/<?php echo $uc_slugs[2] ?>.php';" src=<?php echo $uc_thumbnails[2]; ?> srcset=<?php echo $uc_thumbnails[2]; ?>>
	<?php
	}

	 if ($uc_thumbnails[1]) {
	  ?>
	<div id="Project_Title_dx" onclick="window.location='projects/<?php echo $uc_slugs[1] ?>.php';">
		<span><?php echo $uc_titles[1]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_dy" onclick="window.location='projects/<?php echo $uc_slugs[1] ?>.php';" src=<?php echo $uc_thumbnails[1]; ?> srcset=<?php echo $uc_thumbnails[1]; ?>>
	<?php
	}

	 if ($uc_thumbnails[3]) {
	  ?>
	<div id="Project_Title_dz" onclick="window.location='projects/<?php echo $uc_slugs[3] ?>.php';">
		<span><?php echo $uc_titles[3]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_d" onclick="window.location='projects/<?php echo $uc_slugs[3] ?>.php';" src=<?php echo $uc_thumbnails[3]; ?> srcset=<?php echo $uc_thumbnails[3]; ?>>
	<?php
	}

	 if ($uc_thumbnails[4]) {
	  ?>
	<div id="Project_Title_d" onclick="window.location='projects/<?php echo $uc_slugs[4] ?>.php';">
		<span><?php echo $uc_titles[4]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ea" onclick="window.location='projects/<?php echo $uc_slugs[4] ?>.php';" src=<?php echo $uc_thumbnails[4]; ?> srcset=<?php echo $uc_thumbnails[4]; ?>>
	<?php
	}

	 if ($uc_thumbnails[5]) {
	  ?>
	<div id="Project_Title_ea" onclick="window.location='projects/<?php echo $uc_slugs[5] ?>.php';">
		<span><?php echo $uc_titles[5]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_eb" onclick="window.location='projects/<?php echo $uc_slugs[5] ?>.php';" src=<?php echo $uc_thumbnails[5]; ?> srcset=<?php echo $uc_thumbnails[5]; ?>>
	<?php
	}
}
	 ?>

	<svg class="Line_6" viewBox="0 0 211.5 2">
		<path id="Line_6" d="M 0 0 L 211.5 0">
		</path>
	</svg>

	<div id="Pagination_Bar_2" class="Pagination_Bar_2">
		<img id="Group_4206" src="images/Group_4206.png" srcset="images/Group_4206.png 1x, images/Group_4206@2x.png 2x">

		</svg>
		<img id="Group_4207" src="images/Group_4207.png" srcset="images/Group_4207.png 1x, images/Group_4207@2x.png 2x">

		</svg>
		<div id="ID1__6_of_50_items">
			<?php
			if (($uc_start_row + 5) > ($uc_total_records)) {
				$uc_lim = $uc_total_records;
			} else {
				$uc_lim = $uc_end_row + 1;
			}
			 ?>
			<span><?php echo $uc_start_row + 1; ?> – <?php echo $uc_lim; ?> of <?php echo $uc_total_records; ?> items </span>
		</div>
		<div id="ID6">
			<!-- <span>6</span> -->
		</div>
		<div id="Items_per_page">
			<!-- <span>Items per page</span> -->
		</div>
		<img id="Group_4213" src="images/Group_4213.png" srcset="images/Group_4213.png 1x, images/Group_4213@2x.png 2x">

		</svg>
		<img id="Group_4214" src="images/Group_4214.png" srcset="images/Group_4214.png 1x, images/Group_4214@2x.png 2x">

		</svg>
		<img id="Group_4216" src="images/Group_4216.png" srcset="images/Group_4216.png 1x, images/Group_4216@2x.png 2x">

		</svg>
		<?php if($uc_page_no < $uc_total_no_of_pages) {
		echo '<a href="?&uc_filter='.$uc_filter_param.'&uc_page_no='.$uc_next_page.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_page_no.'#ID02_Upcoming_Projects"> <img id="Icon_-_Carret--Right__20" src="images/Icon_-_Carret--Right__20.png" srcset="images/Icon_-_Carret--Right__20.png 1x, images/Icon_-_Carret--Right__20@2x.png 2x"> </a>';
		}
		?>
		<!-- <img id="Icon_-_Carret--Right__20" src="Icon_-_Carret--Right__20.png" srcset="Icon_-_Carret--Right__20.png 1x, Icon_-_Carret--Right__20@2x.png 2x"> -->

		</svg>
		<div id="Group_10684">
			<div id="of_9_pages">
				<span>of <?php echo $uc_total_no_of_pages; ?> pages</span>
			</div>
			<div id="ID2">
				<span><?php echo $uc_page_no; ?></span>
			</div>
			<img id="Group_4215" src="images/Group_4215.png" srcset="images/Group_4215.png 1x, Group_4215@2x.png 2x">

			</svg>

			<div class="dropdown">
	<button class="dropbtn"><img id="chevron--down__20" src="images/chevron--down__20.png" srcset="images/chevron--down__20.png 1x, images/chevron--down__20@2x.png 2x">
>
		<i class="fa fa-caret-down"></i>
	</button>
	<div class="dropdown-content">
		<?php
		for($i = 1; $i <= $uc_total_no_of_pages; ++$i) {
			echo '<a href="?uc_filter='.$uc_filter_param.'&uc_page_no='.$i.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_page_no.'#ID02_Upcoming_Projects">'.$i.'</a>';
	}
		?>

	</div>
</div>
			</svg>
		</div>
		<?php
		if ($uc_page_no > 1) {
		echo '<a href="?&uc_filter='.$uc_filter_param.'&uc_page_no='.$uc_previous_page.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_page_no.'#ID02_Upcoming_Projects"> <img id="carret--left__20" src="images/carret--left__20.png" srcset="images/carret--left__20.png 1x, images/carret--left__20@2x.png 2x"> </a>';
		}
		?>
		</svg>

		</svg>
	</div>


	<?php
	 if (isset($_GET['uc_filter']) && $_GET['uc_filter']!="") {
			$uc_filter_default = $_GET['uc_filter'];
			} else {
					$uc_filter_default = "University";
					}
	?>

	<div id="Filter_Bar_2" class="Filter_Bar_2">
	 <div class="dropdown">
			 <button class="filterbtn"> <?php echo $uc_filter_default; ?>
				 <div style="float: right;">
				 <img src="images/chevron--down__20_ff.png" srcset="images/chevron--down__20_ff.png 1x, images/chevron--down__20_ff@2x.png 2x">
			 </div>
			 </button>

			 <div class="dropdown-filter-content">

				 <?php
				 echo '<a href="?&uc_filter=&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_page_no.'#ID02_Upcoming_Projects">All</a>';
					foreach (array_unique($temp_uc_universities) as &$uni) {
						echo '<a href="?&uc_filter='.$uni.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_page_no.'#ID02_Upcoming_Projects">'.$uni.'</a>';
					}

					?>

			 </div>
		 </div>

	</div>

	<div id="ID03_Projects_Archives">
		<span>03. Projects Archives</span>
	</div>

	<?php

	$archfile = fopen("uploads/IXN_Projects.csv", "r");

	$temp_arch_thumbnails = array();
	$temp_arch_titles = array();
	$temp_arch_universities = array();
	$temp_arch_slugs = array();
	$temp_arch_filenames = array();

	$test_start = 1;

	while (($row = fgetcsv($archfile)) !== FALSE) {

			if ($i >= $test_start) {
					$temp_arch_row_count++;
					$temp_arch_id = $row[0];
					$temp_arch_slug = $temp_arch_id . "-" . strtolower(str_replace(" ", "-", $row[5]));
					$temp_arch_title = $row[5];
					$temp_arch_authors = $row[6];
					$temp_arch_abstract = $row[15];
          $temp_arch_rawstring = $row[17];

        	if (strpos($temp_arch_rawstring, "youtu.be/") !== false){
        		$temp_arch_tinysplit = explode("be/", $temp_arch_rawstring);
        		$temp_arch_vidID = substr($temp_arch_tinysplit[1], 0, 11);
        	} else {
        		$temp_arch_split = explode("v=", $temp_arch_rawstring);
        		$temp_arch_vidID = substr($temp_arch_split[1], 0, 11);
        	}

        	$temp_arch_imgurl = "https://img.youtube.com/vi/" . $temp_arch_vidID . "/hqdefault.jpg?w=600";

					$temp_arch_filename = 'projects/' . $temp_arch_slug. '.php';
					$arch_compTime = $row[2];
					$arch_compDate_temp = strtotime($arch_compTime);
					$arch_compDate = date('Y/M/d h:i:s a', $arch_compDate_temp);
					$arch_currentDate = date('Y/M/d h:i:s a', time());
					$temp_arch_university = $row[20];

					array_push($temp_arch_universities, $temp_arch_university);


					if (isset($_GET['arch_filter']) && $_GET['arch_filter']!="") {

            if ((file_exists($temp_arch_filename)) & ($temp_arch_university == $arch_filter_param) & ($arch_compDate < $arch_currentDate)) {
					 array_push($temp_arch_thumbnails, $temp_arch_imgurl);
					 array_push($temp_arch_titles, $temp_arch_title);
					 array_push($temp_arch_slugs, $temp_arch_slug);
					 array_push($temp_arch_filenames, $temp_arch_filename);

					 }

				 } else {
            if ((file_exists($temp_arch_filename)) & ($arch_compDate < $arch_currentDate)) {
								array_push($temp_arch_thumbnails, $temp_arch_imgurl);
								array_push($temp_arch_titles, $temp_arch_title);
								array_push($temp_arch_slugs, $temp_arch_slug);
								array_push($temp_arch_filenames, $temp_arch_filename);

								}
							}
			}
			$i++;

	}
	fclose($archfile);

	$arch_total_records_per_page = 6;
	$arch_temp_start_row = (($arch_page_no - 1) * 6) + 2 ;
	$arch_start_row = $arch_temp_start_row-2;
	$arch_end_row = $arch_start_row + 5;

	$arch_total_records = count($temp_arch_titles);

	$arch_next_page = $arch_page_no + 1;
	$arch_previous_page = $arch_page_no - 1;

	$arch_total_no_of_pages = ceil($arch_total_records / $arch_total_records_per_page);
	$arch_second_last = $arch_total_no_of_pages - 1; // total pages minus 1

	$arch_thumbnails = array();
	$arch_titles = array();
	$arch_universities = array();
	$arch_slugs = array();
	$arch_filenames = array();

	for($k = $arch_start_row; $k <= $arch_end_row; ++$k) {
		array_push($arch_thumbnails, $temp_arch_thumbnails[$k]);
		array_push($arch_titles, $temp_arch_titles[$k]);
		array_push($arch_universities, $temp_arch_universities[$k]);
		array_push($arch_slugs, $temp_arch_slugs[$k]);
		array_push($arch_filenames, $temp_arch_filenames[$k]);
	}


	if (($arch_total_records == 0) or ($filecount == 0)) {
		?>
		<div id='no_results_2' class='no_results_2'>Sorry, we couldn't find any results.
			<div id='no_results_text' class='no_results_text'>Please try a different filter.</div>
		</div>

		<?php
	} else {

	if ($arch_thumbnails[0]) {
	 ?>
	<div id="Project_Title_eb" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';">
		<span><?php echo $arch_titles[0]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ec" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';" src=<?php echo $arch_thumbnails[0]; ?> srcset=<?php echo $arch_thumbnails[0]; ?>>
<?php
}

 if ($arch_thumbnails[2]) {
	?>
	<div id="Project_Title_ec" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';">
		<span><?php echo $arch_titles[2]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ed" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';" src=<?php echo $arch_thumbnails[2]; ?> srcset=<?php echo $arch_thumbnails[2]; ?>>
	<?php
	}

	 if ($arch_thumbnails[1]) {
		?>
	<div id="Project_Title_ed" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';">
		<span><?php echo $arch_titles[1]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ee" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';" src=<?php echo $arch_thumbnails[1]; ?> srcset=<?php echo $arch_thumbnails[1]; ?>>
	<?php
	}

	 if ($arch_thumbnails[3]) {
		?>
	<div id="Project_Title_ee" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';">
		<span><?php echo $arch_titles[3]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ef" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';" src=<?php echo $arch_thumbnails[3]; ?> srcset=<?php echo $arch_thumbnails[3]; ?>>
	<?php
	}

	 if ($arch_thumbnails[4]) {
		?>
	<div id="Project_Title_ef" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';">
		<span><?php echo $arch_titles[4]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_eg" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';" src=<?php echo $arch_thumbnails[4]; ?> srcset=<?php echo $arch_thumbnails[4]; ?>>
	<?php
	}

	 if ($arch_thumbnails[5]) {
		?>
	<div id="Project_Title_eh" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';">
		<span><?php echo $arch_titles[5]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ei" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';" src=<?php echo $arch_thumbnails[5]; ?> srcset=<?php echo $arch_thumbnails[5]; ?>>
<?php
}
}
 ?>
	<!-- <div id="Search_Bar" class="Search_Bar">
		<div id="Group_10619">
			<svg class="Rectangle_296">
				<rect id="Rectangle_296" rx="0" ry="0" x="0" y="0" width="771" height="49">
				</rect>
			</svg>
			<div id="search__large" class="search___large">
				<div id="Icon__Search_-_16" class="Icon___Search___16">
					<img id="Group_2829" src="Group_2829.png" srcset="Group_2829.png 1x, Group_2829@2x.png 2x">

					</svg>
				</div>
			</div>
			<div id="Search_by_keywords">
				<span>Search by keywords</span>
			</div>
		</div>
		<svg class="Path_5097" viewBox="192 -2051 771 1">
			<path id="Path_5097" d="M 192 -2051 L 962.9999389648438 -2051 L 962.9999389648438 -2050 L 192 -2050 L 192 -2051 Z">
			</path>
		</svg>
	</div> -->
	<!-- <div id="Group_10808">
		<div id="Button_-_Default" class="Button___Default">
			<svg class="Path_361" viewBox="0 -640 159 48">
				<path id="Path_361" d="M 0 -592 L 159 -592 L 159 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379">
				<div id="Group">
					<div id="Search">
						<span>Search</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<svg class="Line_5" viewBox="0 0 211.5 2">
		<path id="Line_5" d="M 0 0 L 211.5 0">
		</path>
	</svg>
	<div id="ID04_Directory">
		<span>04. Directory</span>
	</div>
	<div id="Pagination_Bar" class="Pagination_Bar">
		<img id="Group_4206" src="images/Group_4206.png" srcset="images/Group_4206.png 1x, images/Group_4206@2x.png 2x">

		</svg>
		<img id="Group_4207" src="images/Group_4207.png" srcset="images/Group_4207.png 1x, images/Group_4207@2x.png 2x">

		</svg>
		<div id="ID1__6_of_50_items">
			<?php
			if (($arch_start_row + 5) > ($arch_total_records)) {
				$arch_lim = $arch_total_records;
			} else {
				$arch_lim = $arch_end_row + 1;
			}
			 ?>
			<span><?php echo $arch_start_row + 1; ?> – <?php echo $arch_lim; ?> of <?php echo $arch_total_records; ?> items </span>
		</div>
		<div id="ID6">
			<!-- <span>6</span> -->
		</div>
		<div id="Items_per_page">
			<!-- <span>Items per page</span> -->
		</div>
		<img id="Group_4213" src="images/Group_4213.png" srcset="images/Group_4213.png 1x, images/Group_4213@2x.png 2x">

		</svg>
		<img id="Group_4214" src="images/Group_4214.png" srcset="images/Group_4214.png 1x, images/Group_4214@2x.png 2x">

		</svg>
		<img id="Group_4216" src="images/Group_4216.png" srcset="images/Group_4216.png 1x, images/Group_4216@2x.png 2x">

		</svg>
		<?php
		if($arch_page_no < $arch_total_no_of_pages) {
		echo '<a href="?&uc_filter='.$uc_filter_param.'&uc_page_no='.$uc_page_no.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_next_page.'#ID03_Projects_Archives"> <img id="Icon_-_Carret--Right__20" src="images/Icon_-_Carret--Right__20.png" srcset="images/Icon_-_Carret--Right__20.png 1x, images/Icon_-_Carret--Right__20@2x.png 2x"> </a>';
		}
		?>

		<!-- <img id="Icon_-_Carret--Right__20" src="Icon_-_Carret--Right__20.png" srcset="Icon_-_Carret--Right__20.png 1x, Icon_-_Carret--Right__20@2x.png 2x"> -->

		</svg>
		<div id="Group_10684">
			<div id="of_9_pages">
				<span>of <?php echo $arch_total_no_of_pages; ?> pages</span>
			</div>
			<div id="ID2">
				<span><?php echo $arch_page_no; ?></span>
			</div>
			<img id="Group_4215" src="images/Group_4215.png" srcset="images/Group_4215.png 1x, images/Group_4215@2x.png 2x">

			</svg>

			<div class="dropdown">
	<button class="dropbtn"><img id="chevron--down__20" src="images/chevron--down__20.png" srcset="images/chevron--down__20.png 1x, images/chevron--down__20@2x.png 2x">
>
		<i class="fa fa-caret-down"></i>
	</button>
	<div class="dropdown-content">
		<?php
		for($i = 1; $i <= $arch_total_no_of_pages; ++$i) {
			echo '<a href="?uc_filter='.$uc_filter_param.'&uc_page_no='.$uc_page_no.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$i.'#ID03_Projects_Archives">'.$i.'</a>';
	}
		?>

	</div>
</div>

		</svg>
	</div>
	<?php
	if ($arch_page_no > 1) {
		echo '<a href="?&uc_filter='.$uc_filter_param.'&uc_page_no='.$uc_page_no.'&arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_previous_page.'#ID03_Projects_Archives"> <img id="carret--left__20" src="images/carret--left__20.png" srcset="images/carret--left__20.png 1x, images/carret--left__20@2x.png 2x"> </a>';
	}
		?>
	</svg>

	</svg>
</div>

<?php
 if (isset($_GET['arch_filter']) && $_GET['arch_filter']!="") {
		$arch_filter_default = $_GET['arch_filter'];
		} else {
				$arch_filter_default = "University";
				}
?>

<div id="Filter_Bar" class="Filter_Bar">
 <div class="dropdown">
		 <button class="filterbtn"> <?php echo $arch_filter_default; ?>
			 <div style="float: right;">
			 <img src="images/chevron--down__20_ff.png" srcset="images/chevron--down__20_ff.png 1x, images/chevron--down__20_ff@2x.png 2x">
		 </div>
		 </button>

		 <div class="dropdown-filter-content">

			 <?php
			 echo '<a href="?&uc_filter='.$uc_filter_param.'&arch_filter=&uc_page_no='.$uc_page_no.'#ID03_Projects_Archives">All</a>';
				foreach (array_unique($temp_uc_universities) as &$uni) {
					echo '<a href="?&uc_filter='.$uc_filter_param.'&arch_filter='.$uni.'&uc_page_no='.$uc_page_no.'#ID03_Projects_Archives">'.$uni.'</a>';
				}

				?>

		 </div>
	 </div>

</div>



			<!-- <img id="chevron--down__20" src="chevron--down__20.png" srcset="chevron--down__20.png 1x, chevron--down__20@2x.png 2x">

			</svg>
		</div>
		<img id="carret--left__20" src="carret--left__20.png" srcset="carret--left__20.png 1x, carret--left__20@2x.png 2x">

		</svg>
		<img id="chevron--down__20_ff" src="chevron--down__20_ff.png" srcset="chevron--down__20_ff.png 1x, chevron--down__20_ff@2x.png 2x"> -->

		<!-- </svg>
	</div> -->
	<svg class="Line_7" viewBox="0 0 455.5 1">
		<path id="Line_7" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<svg class="Line_8" viewBox="0 0 455 1">
		<path id="Line_8" d="M 0 0 L 455 0">
		</path>
	</svg>
	<div id="Contact_Us">
		<span>Contact Us</span>
	</div>
	<div id="Sign_up_to_Newsletter">
		<span>Sign up to Newsletter</span>
	</div>
	<svg class="Line_9" viewBox="0 0 455.5 1">
		<path id="Line_9" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Submit_a_Project_Request">
		<span>Submit a Project Request</span>
	</div>
	<svg class="Line_10" viewBox="0 0 455.5 1">
		<path id="Line_10" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Projects_Archives">
		<span>Projects Archives</span>
	</div>
	<div id="Email_j0nnymacukibmcom">
		<span>Email: j0nnymac@uk.ibm.com</span>
	</div>
	<div id="John_McNamara_IBM_UK">
		<span>John McNamara (IBM UK)</span>
	</div>
	<div id="You_can_sign_up_to_our_Newslet">
		<span>You can sign up to our Newsletter that will provide you with a <br/>regular update on IBM IXN, from the latest projects to upcoming<br/>events. </span>
	</div>
	<div id="To_view_the_full_projects_arch">
		<span>To view the full projects archives by the IBM IXN, please click the<br/>button below.</span>
	</div>
	<div id="Do_you_have_a_project_idea_to_">
		<span>Do you have a project idea to be taken by the IBM IXN? Please <br/>submit a project request from here by clicking the button below!<br/></span><br>
	</div>
<!-- 	<img id="Screen_Shot_2021-03-31_at_1453" src="images/Screen_Shot_2021-03-31_at_1453.png" srcset="images/Screen_Shot_2021-03-31_at_1453.png 1x, images/Screen_Shot_2021-03-31_at_1453@2x.png 2x"> -->

	<svg class="Rectangle_335">
		<rect id="Rectangle_335" rx="0" ry="0" x="0" y="0" width="1920" height="470">
		</rect>
	</svg>
	<div id="Group_10802">
		<a href="mailto:j0nnymac@uk.ibm.com">
		<div id="Button_-_Default_fw" class="Button___Default">
			<svg class="Path_361_fx" viewBox="0 -640 217.497 48">
				<path id="Path_361_fx" d="M 0 -592 L 217.4970703125 -592 L 217.4970703125 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_fy">
				<div id="Group_fz">
					<div id="Get_in_touch">
						<span>Get in touch</span>
					</div>
				</div>
			</div>
		</div>
	</a>
		<div id="arrow--right">
			<svg class="Path_10090" viewBox="4 6 17.99 14.992">
				<path id="Path_10090" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_f">
				<rect id="Transparent_Rectangle_f" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ga" class="arrow__right">
			<svg class="Path_10090_f" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_f" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_gb">
				<rect id="Transparent_Rectangle_gb" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ga" class="arrow__right">
			<svg class="Path_10090_ga" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ga" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_gb">
				<rect id="Transparent_Rectangle_gb" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Our_partnership_with_the_Natio">
		<span>Our partnership with the National Framework for IXNs empowers university students with the opportunity to build innovative, <br/>open-source projects that solves real-world problems </span>
	</div>
	<div id="Group_10142">
		<div id="IBMs_contribution_to_education">
			<span>IBM’s contribution to education<br/>with IBM Industry Exchange Network (IBM IXN) </span>
		</div>
	</div>
	<div id="Group_10884">
		<svg class="Rectangle_336">
			<rect  id="Rectangle_336" rx="0" ry="0" x="0" y="0" width="938" height="308">
			</rect>
		</svg>
		<div id="Group_10821">
			<div id="Group_10809">
				<div id="Button_-_Default_gh" class="Button___Default">
					<svg class="Path_361_gi" viewBox="0 -640 173 48">
						<path id="Path_361_gi" onclick="window.location='Home_ForStudents.php';" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_gj">
						<div id="Group_gk">
							<div id="Learn_more" onclick="window.location='Home_ForStudents.php';">
								<span>Learn more</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="arrow--right_gp" class="arrow__right">
				<svg class="Path_10090_gn" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_gn" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_gr">
					<rect id="Transparent_Rectangle_gr" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
			<div id="arrow--right_gp" class="arrow__right">
				<svg class="Path_10090_gq" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_gq" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_gr">
					<rect id="Transparent_Rectangle_gr" onclick="window.location='Home_ForStudents.php';" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
		</div>
		<div id="Group_10885">
			<div id="Group_10886">
				<div id="education">
					<svg class="Path_10091" viewBox="6 20 75.6 37.666">
						<path id="Path_10091" d="M 81.59953308105469 57.66595840454102 L 74.03958892822266 57.66595840454102 L 74.03958892822266 46.36616897583008 C 74.02730560302734 35.97008514404297 65.57270812988281 27.5454216003418 55.13970184326172 27.53319549560547 L 32.4598388671875 27.53319549560547 C 22.02681350708008 27.54544448852539 13.57224369049072 35.97008514404297 13.55995273590088 46.36618423461914 L 13.55995273590088 57.66595840454102 L 6 57.66595840454102 L 6 46.36616897583008 C 6.017079830169678 31.81159973144531 17.85355758666992 20.01701736450195 32.45984649658203 20 L 55.13970184326172 20 C 69.7459716796875 20.01702499389648 81.58244323730469 31.81159973144531 81.59953308105469 46.36618423461914 L 81.59953308105469 57.66595840454102 Z">
						</path>
					</svg>
					<svg class="Path_10092" viewBox="4 6 7.533 37.666">
						<path id="Path_10092" d="M 7.766595840454102 5.999999523162842 C 5.686363220214844 5.999999523162842 3.999999761581421 7.686362743377686 3.999999761581421 9.766595840454102 L 3.999999761581421 43.66595840454102 L 11.53319358825684 43.66595840454102 L 11.53319358825684 9.766595840454102 C 11.53319358825684 7.686362743377686 9.846828460693359 5.999999523162842 7.766595840454102 5.999999523162842 Z">
						</path>
					</svg>
					<svg class="Path_10093" viewBox="4 2 90.666 60.266">
						<path id="Path_10093" d="M 3.999999523162842 1.99999988079071 L 3.999999523162842 9.533190727233887 L 22.88872718811035 9.533190727233887 L 22.88872718811035 35.89936447143555 C 22.88872718811035 50.46100616455078 34.72821044921875 62.26554489135742 49.33295440673828 62.26554489135742 C 63.93769454956055 62.26554489135742 75.77718353271484 50.46100616455078 75.77718353271484 35.89937210083008 L 75.77718353271484 9.533190727233887 L 94.66591644287109 9.533190727233887 L 94.66591644287109 1.99999988079071 L 3.999999523162842 1.99999988079071 Z M 30.44422340393066 9.533190727233887 L 68.22169494628906 9.533190727233887 L 68.22169494628906 20.83297729492188 L 30.44422340393066 20.83297729492188 L 30.44422340393066 9.533190727233887 Z M 49.33295440673828 54.73234939575195 C 38.90099334716797 54.73234939575195 30.44422340393066 46.300537109375 30.44422340393066 35.89937210083008 L 30.44422340393066 28.36616897583008 L 68.22169494628906 28.36616897583008 L 68.22169494628906 35.89936447143555 C 68.22169494628906 46.300537109375 59.76491928100586 54.73234939575195 49.33295440673828 54.73234939575195 Z">
						</path>
					</svg>
					<svg class="Transparent_Rectangle_gy">
						<rect id="Transparent_Rectangle_gy" rx="0" ry="0" x="0" y="0" width="119" height="126">
						</rect>
					</svg>
				</div>
				<div id="This_is_an_opportunity_to_work">
					<span>This is an opportunity to work on cutting edge industry projects with IBM, gain access to<br/>the latest in IBM technology and acquire industry recognised accreditations in A.I, <br/>DataScience, Rapid Prototyping, Machine Learning and Design Thinking. Work with IBMers <br/>who will mentor you throughout the project, and gain experience and network connections <br/>that will benefit you throughout your career.</span>
				</div>
			</div>
		</div>
		<div id="Group_10180">
			<div id="For_Students">
				<span>For Students</span>
			</div>
		</div>
	</div>
	<div id="Group_10868">
		<div id="Group_10809_g">
			<div id="Button_-_Default_g" class="Button___Default">
				<svg class="Path_361_g" viewBox="0 -640 173 48">
					<path id="Path_361_g" onclick="window.location='Home_ForUniversities.php';" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_g">
					<div id="Group_g">
						<div id="Learn_more_g" onclick="window.location='Home_ForUniversities.php';">
							<span>Learn more</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_hc" class="arrow__right">
			<svg class="Path_10090_ha" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ha" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_he">
				<rect id="Transparent_Rectangle_he" onclick="window.location='Home_ForUniversities.php';" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_hc" class="arrow__right">
			<svg class="Path_10090_hd" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_hd"  d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_he">
				<rect id="Transparent_Rectangle_he" onclick="window.location='Home_ForUniversities.php';" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10869">
		<div id="Group_10809_hg" onclick="window.location='Home_ForIndustries.php';">
			<div id="Button_-_Default_hh" class="Button___Default">
				<svg class="Path_361_hi" viewBox="0 -640 173 48">
					<path id="Path_361_hi" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_hj">
					<div id="Group_hk">
						<div id="Learn_more_hl">
							<span>Learn more</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_hp" class="arrow__right">
			<svg class="Path_10090_hn" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_hn" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_hr">
				<rect id="Transparent_Rectangle_hr" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_hp" class="arrow__right">
			<svg class="Path_10090_hq" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_hq" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_hr">
				<rect id="Transparent_Rectangle_hr" onclick="window.location='Home_ForIndustries.php';"  rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<a href="mailto:j0nnymac@uk.ibm.com">
	<div id="Group_10870">
		<div id="Group_10809_ht">
			<div id="Button_-_Default_hu" class="Button___Default">
				<svg class="Path_361_hv" viewBox="0 -640 173 48">
					<path id="Path_361_hv" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_hw">
					<div id="Group_hx">
						<div id="Get_in_Touch">
							<span>Get in Touch</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
		<div id="arrow--right_h" class="arrow__right">
			<svg class="Path_10090_h" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_h" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ia">
				<rect id="Transparent_Rectangle_ia" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_h" class="arrow__right">
			<svg class="Path_10090_ia" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ia" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ia">
				<rect id="Transparent_Rectangle_ia" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10871" onclick="location.href='https://members-engine.azurewebsites.net/';" style="cursor: pointer;">
<!-- 			<div id="Group_10871" onclick="location.href='https://members-engine.azurewebsites.net/';" style="cursor: pointer;"> -->
		<div id="Group_10809_h">
			<div id="Button_-_Default_h" class="Button___Default">
				<svg class="Path_361_h" viewBox="0 -640 173 48">
					<path id="Path_361_h" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_h">
					<div id="Group_ia">
						<div id="Sign_Up">
							<span>Sign Up</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_if" class="arrow__right">
			<svg class="Path_10090_id" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_id" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ih">
				<rect id="Transparent_Rectangle_ih" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_if" class="arrow__right">
			<svg class="Path_10090_ig" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ig" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ih">
				<rect id="Transparent_Rectangle_ih" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10872" onclick="location.href='http://88.80.189.233/login/?next=/';" style="cursor: pointer;">
		<div id="Group_10809_ij">
			<div id="Button_-_Default_ik" class="Button___Default">
				<svg class="Path_361_il" viewBox="0 -640 173 48">
					<path id="Path_361_il" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_im">
					<div id="Group_in">
						<div id="Submit_a_Request">
							<span>Submit a Request</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_is" class="arrow__right">
			<svg class="Path_10090_iq" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_iq" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_iu">
				<rect id="Transparent_Rectangle_iu" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_is" class="arrow__right">
			<svg class="Path_10090_it" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_it" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_iu">
				<rect id="Transparent_Rectangle_iu" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10873" onclick="window.location='ProjectsArchives.php';">
		<div id="Group_10809_iw">
			<div id="Button_-_Default_ix" class="Button___Default">
				<svg class="Path_361_iy" viewBox="0 -640 173 48">
					<path id="Path_361_iy" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_iz">
					<div id="Group_i">
						<div id="View_Archives">
							<span>View Archives</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_ja" class="arrow__right">
			<svg class="Path_10090_i" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_i" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ja">
				<rect id="Transparent_Rectangle_ja" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ja" class="arrow__right">
			<svg class="Path_10090_ja" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ja" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ja">
				<rect id="Transparent_Rectangle_ja" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
</div>
</body>
</html>
