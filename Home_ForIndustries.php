<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>For Industries</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<style id="applicationStylesheet" type="text/css">
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  src: url('fonts/IBMPlexSans-Regular.ttf');

}
	.mediaViewInfo {
		--web-view-name: Home_ForIndustries;
		--web-view-id: Home_ForIndustries;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Home_ForIndustries;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Home_ForIndustries {
		position: absolute;
		width: 1920px;
		height: 4262px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Home_ForIndustries;
		--web-view-id: Home_ForIndustries;
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
		top: 2285px;
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
	top: 2225px;
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
	#Group_10180_xs {
		position: absolute;
		width: 176px;
		height: 37px;
		left: 354px;
		top: 519px;
		overflow: visible;
	}
	#For_Industries_xt {
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
	#The_IBM_IXN_is_an_opportunity__xu {
		left: 354px;
		top: 575px;
		position: absolute;
		overflow: hidden;
		width: 1164px;
		height: 99px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Line_6_xv {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_6_xv {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 354px;
		top: 2213px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects_Archives_xw {
		left: 354px;
		top: 2230.5px;
		position: absolute;
		overflow: visible;
		width: 130px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Project_Title_xx {
		left: 602px;
		top: 2574.5px;
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
	#Screenshot_2021-02-26_at_17040_xy {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2299.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_xz {
		left: 602px;
		top: 2906.5px;
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
	#Screenshot_2021-02-26_at_17040_x {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2631.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_x {
		left: 1085px;
		top: 2574.5px;
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
	#Screenshot_2021-02-26_at_17040_ya {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2299.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_ya {
		left: 1085px;
		top: 2906.5px;
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
	#Screenshot_2021-02-26_at_17040_yb {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2631.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_yb {
		left: 602px;
		top: 3238.5px;
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
	#Screenshot_2021-02-26_at_17040_yc {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2963.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_yc {
		left: 1085px;
		top: 3238.5px;
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
	#Screenshot_2021-02-26_at_17040_yd {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2963.5px;
		overflow: visible;
		cursor: pointer;
	}
	#Search_Bar_x {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 602px;
		top: 2230.5px;
		overflow: visible;
	}
	#Group_10619_ya {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_296_yb {
		fill: rgba(243,243,243,1);
	}
	.Rectangle_296_yb {
		position: absolute;
		overflow: visible;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
	}
	#search__large_yc {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 19px;
		top: 16px;
		overflow: visible;
	}
	#Icon__Search_-_16_yd {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_2829_ye {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search_by_keywords_yf {
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
	#Path_5097_yg {
		fill: rgba(141,141,141,1);
	}
	.Path_5097_yg {
		overflow: visible;
		position: absolute;
		width: 771px;
		height: 1px;
		left: 0px;
		top: 48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_10808_yh {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 1381px;
		top: 2231.5px;
		overflow: visible;
	}
	#Button_-_Default_yi {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_yj {
		fill: rgba(14,42,59,1);
	}
	.Path_361_yj {
		overflow: visible;
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_yk {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_yl {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search_ym {
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
	#Pagination_Bar_yn {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 589px;
		top: 3281.5px;
		overflow: visible;
	}
	#Group_4206_yo {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_4207_yp {
		position: absolute;
		width: 938px;
		height: 0.863px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#ID1__6_of_50_items_yq {
		left: 180.845px;
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
	#ID6_yr {
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
	#Items_per_page_ys {
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
	#Group_4213_yt {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 895.736px;
		top: 0px;
		overflow: visible;
	}
	#Group_4214_yu {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 853.473px;
		top: 0px;
		overflow: visible;
	}
	#Group_4216_yv {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 165.604px;
		top: 0px;
		overflow: visible;
	}
	#Icon_-_Carret--Right__20_yw {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 915.683px;
		top: 23.054px;
		overflow: visible;
	}
	#Group_10684_yx {
		position: absolute;
		width: 122.524px;
		height: 52.258px;
		left: 717.194px;
		top: 0px;
		overflow: visible;
	}
	#of_9_pages_yy {
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
	#ID2_yz {
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
	#Group_4215_y {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#chevron--down__20_y {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 36.873px;
		top: 23.813px;
		overflow: visible;
	}
	#carret--left__20_y {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 872.341px;
		top: 23.054px;
		overflow: visible;
	}
	#chevron--down__20_za {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 138.004px;
		top: 24.365px;
		overflow: visible;
	}
	#Group_10839_y {
		position: absolute;
		width: 210px;
		height: 25px;
		left: 350px;
		top: 471px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home.html;
		cursor: pointer;
	}
	#Go_back_to_previous_page_y {
		left: 30px;
		top: 2px;
		position: absolute;
		overflow: visible;
		width: 181px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(14,42,59,1);
	}
	#arrow--left_y {
		position: absolute;
		width: 25px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_10107_y {
		fill: rgba(14,42,59,1);
	}
	.Path_10107_y {
		overflow: visible;
		position: absolute;
		width: 18.476px;
		height: 15.396px;
		left: 3.079px;
		top: 4.619px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_y {
		fill: transparent;
	}
	.Transparent_Rectangle_y {
		position: absolute;
		overflow: visible;
		width: 25px;
		height: 25px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_360_y {
		fill: rgba(17,88,37,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_360_y {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 306px;
		left: 1071px;
		top: 1757px;
	}
	#Group_10825_za {
		position: absolute;
		width: 462px;
		height: 473px;
		left: 354px;
		top: 757px;
		overflow: visible;
	}
	#Group_10814_zb {
		position: absolute;
		width: 462px;
		height: 473px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_355_zc {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_355_zc {
		position: absolute;
		overflow: visible;
		width: 462px;
		height: 473px;
		left: 0px;
		top: 0px;
	}
	#Access_to_a_community_of__univ {
		left: 28px;
		top: 261px;
		position: absolute;
		overflow: visible;
		width: 410px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefits_01_ze {
		left: 16px;
		top: 15px;
		position: absolute;
		overflow: hidden;
		width: 301px;
		height: 26px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#events--alt {
		position: absolute;
		width: 112px;
		height: 112px;
		left: 166px;
		top: 95px;
		overflow: visible;
	}
	#Path_10110 {
		fill: rgba(17,88,37,1);
	}
	.Path_10110 {
		overflow: visible;
		position: absolute;
		width: 42.223px;
		height: 17.593px;
		left: 63.105px;
		top: 91.254px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10111 {
		fill: rgba(17,88,37,1);
	}
	.Path_10111 {
		overflow: visible;
		position: absolute;
		width: 28.148px;
		height: 28.148px;
		left: 70.143px;
		top: 59.587px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10112 {
		fill: rgba(17,88,37,1);
	}
	.Path_10112 {
		overflow: visible;
		position: absolute;
		width: 42.223px;
		height: 17.593px;
		left: 6.809px;
		top: 91.254px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10113 {
		fill: rgba(17,88,37,1);
	}
	.Path_10113 {
		overflow: visible;
		position: absolute;
		width: 28.148px;
		height: 28.148px;
		left: 13.846px;
		top: 59.587px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10114 {
		fill: rgba(17,88,37,1);
	}
	.Path_10114 {
		overflow: visible;
		position: absolute;
		width: 42.223px;
		height: 17.593px;
		left: 63.105px;
		top: 38.476px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10115 {
		fill: rgba(17,88,37,1);
	}
	.Path_10115 {
		overflow: visible;
		position: absolute;
		width: 28.148px;
		height: 28.148px;
		left: 70.143px;
		top: 6.809px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10116 {
		fill: rgba(17,88,37,1);
	}
	.Path_10116 {
		overflow: visible;
		position: absolute;
		width: 42.223px;
		height: 17.593px;
		left: 6.809px;
		top: 38.476px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10117 {
		fill: rgba(17,88,37,1);
	}
	.Path_10117 {
		overflow: visible;
		position: absolute;
		width: 28.148px;
		height: 28.148px;
		left: 13.846px;
		top: 6.809px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_zo {
		fill: transparent;
	}
	.Transparent_Rectangle_zo {
		position: absolute;
		overflow: visible;
		width: 112px;
		height: 112px;
		left: 0px;
		top: 0px;
	}
	#Group_10826_zp {
		position: absolute;
		width: 693px;
		height: 473px;
		left: 847px;
		top: 757px;
		overflow: visible;
	}
	#Group_10815_zq {
		position: absolute;
		width: 693px;
		height: 473px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_357_zr {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_357_zr {
		position: absolute;
		overflow: visible;
		width: 693px;
		height: 473px;
		left: 0px;
		top: 0px;
	}
	#Access_to_a__Skunk_Works_capab {
		left: 24px;
		top: 268px;
		position: absolute;
		overflow: visible;
		width: 647px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefits_02_zt {
		left: 21px;
		top: 15px;
		position: absolute;
		overflow: hidden;
		width: 301px;
		height: 26px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#cognitive_b {
		position: absolute;
		width: 81px;
		height: 81px;
		left: 103px;
		top: 122px;
		overflow: visible;
	}
	#Path_10118_c {
		fill: rgba(17,88,37,1);
	}
	.Path_10118_c {
		overflow: visible;
		position: absolute;
		width: 71.007px;
		height: 71.007px;
		left: 5.072px;
		top: 5.072px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_d {
		fill: transparent;
	}
	.Transparent_Rectangle_d {
		position: absolute;
		overflow: visible;
		width: 81px;
		height: 81px;
		left: 0px;
		top: 0px;
	}
	#iot--platform {
		position: absolute;
		width: 93px;
		height: 93px;
		left: 300px;
		top: 116px;
		overflow: visible;
	}
	#Path_10119 {
		fill: rgba(17,88,37,1);
	}
	.Path_10119 {
		overflow: visible;
		position: absolute;
		width: 81.738px;
		height: 81.738px;
		left: 5.838px;
		top: 5.838px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10120 {
		fill: rgba(17,88,37,1);
	}
	.Path_10120 {
		overflow: visible;
		position: absolute;
		width: 29.192px;
		height: 29.192px;
		left: 32.111px;
		top: 32.111px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10121 {
		fill: rgba(17,88,37,1);
	}
	.Path_10121 {
		overflow: visible;
		position: absolute;
		width: 35.03px;
		height: 35.031px;
		left: 55.465px;
		top: 2.919px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10122 {
		fill: rgba(17,88,37,1);
	}
	.Path_10122 {
		overflow: visible;
		position: absolute;
		width: 20.435px;
		height: 20.435px;
		left: 55.465px;
		top: 17.515px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_z {
		fill: transparent;
	}
	.Transparent_Rectangle_z {
		position: absolute;
		overflow: visible;
		width: 93px;
		height: 93px;
		left: 0px;
		top: 0px;
	}
	#ibm-cloud {
		position: absolute;
		width: 92px;
		height: 92px;
		left: 489px;
		top: 111px;
		overflow: visible;
	}
	#Path_10123 {
		fill: rgba(17,88,37,1);
	}
	.Path_10123 {
		overflow: visible;
		position: absolute;
		width: 90.101px;
		height: 64.372px;
		left: 0.737px;
		top: 24.313px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10124 {
		fill: rgba(17,88,37,1);
	}
	.Path_10124 {
		overflow: visible;
		position: absolute;
		width: 13.024px;
		height: 9.355px;
		left: 78.521px;
		top: 28.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10125 {
		fill: rgba(17,88,37,1);
	}
	.Path_10125 {
		overflow: visible;
		position: absolute;
		width: 9.33px;
		height: 12.982px;
		left: 63.787px;
		top: 9.824px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10126 {
		fill: rgba(17,88,37,1);
	}
	.Path_10126 {
		overflow: visible;
		position: absolute;
		width: 4.342px;
		height: 14.319px;
		left: 43.603px;
		top: 3.078px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10127 {
		fill: rgba(17,88,37,1);
	}
	.Path_10127 {
		overflow: visible;
		position: absolute;
		width: 9.331px;
		height: 12.981px;
		left: 18.428px;
		top: 9.824px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10128 {
		fill: rgba(17,88,37,1);
	}
	.Path_10128 {
		overflow: visible;
		position: absolute;
		width: 12.982px;
		height: 9.33px;
		left: 0px;
		top: 28.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_a {
		fill: transparent;
	}
	.Transparent_Rectangle_a {
		position: absolute;
		overflow: visible;
		width: 92px;
		height: 92px;
		left: 0px;
		top: 0px;
	}
	#cognitive_b {
		position: absolute;
		width: 81px;
		height: 81px;
		left: 103px;
		top: 122px;
		overflow: visible;
	}
	#Path_10118_c {
		fill: rgba(17,88,37,1);
	}
	.Path_10118_c {
		overflow: visible;
		position: absolute;
		width: 71.007px;
		height: 71.007px;
		left: 5.072px;
		top: 5.072px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_d {
		fill: transparent;
	}
	.Transparent_Rectangle_d {
		position: absolute;
		overflow: visible;
		width: 81px;
		height: 81px;
		left: 0px;
		top: 0px;
	}
	#Group_10824_e {
		position: absolute;
		width: 682px;
		height: 454px;
		left: 354px;
		top: 1264px;
		overflow: visible;
	}
	#Group_10816_f {
		position: absolute;
		width: 682px;
		height: 454px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_358_g {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_358_g {
		position: absolute;
		overflow: visible;
		width: 682px;
		height: 454px;
		left: 0px;
		top: 0px;
	}
	#See_your_ideas_transform_into_ {
		left: 52px;
		top: 288px;
		position: absolute;
		overflow: visible;
		width: 599px;
		height: 123px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefits_03_i {
		left: 16px;
		top: 9px;
		position: absolute;
		overflow: hidden;
		width: 301px;
		height: 26px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Group_10827_j {
		position: absolute;
		width: 469px;
		height: 454px;
		left: 1071px;
		top: 1268px;
		overflow: visible;
	}
	#Rectangle_356_k {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_356_k {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 342px;
		left: 0px;
		top: 11px;
	}
	#Rectangle_361_l {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_361_l {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 454px;
		left: 0px;
		top: 0px;
	}
	#Explore_collaboration_with_IBM {
		left: 34px;
		top: 277px;
		position: absolute;
		overflow: visible;
		width: 403px;
		height: 112px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefits_04_n {
		left: 20px;
		top: 20px;
		position: absolute;
		overflow: hidden;
		width: 301px;
		height: 26px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Group_10823_o {
		position: absolute;
		width: 681px;
		height: 306px;
		left: 354px;
		top: 1757px;
		overflow: visible;
	}
	#Group_10818_p {
		position: absolute;
		width: 681px;
		height: 306px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_359_q {
		fill: rgba(17,88,37,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_359_q {
		position: absolute;
		overflow: visible;
		width: 681px;
		height: 306px;
		left: 0px;
		top: 0px;
	}
	#Get_in_touch_r {
		left: 1097px;
		top: 1786px;
		position: absolute;
		overflow: visible;
		width: 160px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(255,255,255,1);
	}
	#email_s {
		position: absolute;
		width: 37px;
		height: 37px;
		left: 1480px;
		top: 1775px;
		overflow: visible;
	}
	#Path_10103_t {
		fill: rgba(255,255,255,1);
	}
	.Path_10103_t {
		overflow: visible;
		position: absolute;
		width: 32.163px;
		height: 22.974px;
		left: 2.539px;
		top: 6.892px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_x {
		fill: transparent;
	}
	.Transparent_Rectangle_x {
		position: absolute;
		overflow: visible;
		width: 37px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Email_j0nnymacukibmcom_v {
		left: 1097px;
		top: 1898px;
		position: absolute;
		overflow: visible;
		width: 218px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#John_McNamara_IBM_UK_w {
		left: 1097px;
		top: 1868px;
		position: absolute;
		overflow: visible;
		width: 192px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#Email_dmohamedallyuclacuk_x {
		left: 1097px;
		top: 1984px;
		position: absolute;
		overflow: visible;
		width: 239px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#Dr_Dean_Mohamedally_NF_IXN_y {
		left: 1097px;
		top: 1954px;
		position: absolute;
		overflow: visible;
		width: 235px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#Submit_a_Project_Request_z {
		left: 391px;
		top: 1794px;
		position: absolute;
		overflow: visible;
		width: 334px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(255,255,255,1);
	}
	#crop-growth {
		position: absolute;
		width: 123px;
		height: 123px;
		left: 625px;
		top: 1368px;
		overflow: visible;
	}
	#Path_10129 {
		fill: rgba(17,88,37,1);
	}
	.Path_10129 {
		overflow: visible;
		position: absolute;
		width: 107.32px;
		height: 91.989px;
		left: 7.337px;
		top: 15.003px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ {
		fill: transparent;
	}
	.Transparent_Rectangle_ {
		position: absolute;
		overflow: visible;
		width: 123px;
		height: 123px;
		left: 0px;
		top: 0px;
	}
	#collaborate {
		position: absolute;
		width: 109px;
		height: 109px;
		left: 1251px;
		top: 1378px;
		overflow: visible;
	}
	#Path_10130 {
		fill: rgba(17,88,37,1);
	}
	.Path_10130 {
		overflow: visible;
		position: absolute;
		width: 34.326px;
		height: 27.461px;
		left: 13.73px;
		top: 68.653px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10131 {
		fill: rgba(17,88,37,1);
	}
	.Path_10131 {
		overflow: visible;
		position: absolute;
		width: 34.326px;
		height: 27.461px;
		left: 54.922px;
		top: 13.731px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10132 {
		fill: rgba(17,88,37,1);
	}
	.Path_10132 {
		overflow: visible;
		position: absolute;
		width: 41.191px;
		height: 17.163px;
		left: 6.865px;
		top: 37.759px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10133 {
		fill: rgba(17,88,37,1);
	}
	.Path_10133 {
		overflow: visible;
		position: absolute;
		width: 27.461px;
		height: 27.461px;
		left: 13.73px;
		top: 6.865px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10134 {
		fill: rgba(17,88,37,1);
	}
	.Path_10134 {
		overflow: visible;
		position: absolute;
		width: 41.191px;
		height: 17.163px;
		left: 61.788px;
		top: 85.816px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10135 {
		fill: rgba(17,88,37,1);
	}
	.Path_10135 {
		overflow: visible;
		position: absolute;
		width: 27.461px;
		height: 27.461px;
		left: 68.653px;
		top: 54.922px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_b {
		fill: transparent;
	}
	.Transparent_Rectangle_b {
		position: absolute;
		overflow: visible;
		width: 109px;
		height: 109px;
		left: 0px;
		top: 0px;
	}
	#Do_you_have_a_project_idea_to__b {
		left: 391px;
		top: 1868px;
		position: absolute;
		overflow: visible;
		width: 511px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(255,255,255,1);
	}
	#Group_10867 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 393px;
		top: 1970px;
		overflow: visible;
	}
	#Group_10809_d {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_e {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_v {
		fill: rgba(243,243,243,1);
	}
	.Path_361_v {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_s {
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
	#arrow--right_j {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_k {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_k {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_o {
		fill: transparent;
	}
	.Transparent_Rectangle_o {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10865 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_o {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_v {
		fill: rgba(243,243,243,1);
	}
	.Path_361_v {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_s {
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
	#Group_10866 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_t {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_v {
		fill: rgba(243,243,243,1);
	}
	.Path_361_v {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_x {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_x {
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
		color: rgba(14,42,59,1);
		letter-spacing: 0.01399999976158142px;
	}
	#arrow--right_y {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 526px;
		top: 1984px;
		overflow: visible;
	}
	#Path_10090_z {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_z {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 4.005px;
		top: 3.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_c {
		fill: transparent;
	}
	.Transparent_Rectangle_c {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
/*	#Screen_Shot_2021-03-31_at_1453_ {
		position: absolute;
		width: 1920px;
		height: 38px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}*/
	#Rectangle_335_ {
		fill: rgba(17,88,37,1);
		stroke: rgba(1,1,1,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_335_ {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 423px;
		left: 0px;
		top: 0px;
	}
	#Group_10802_ {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 354px;
		top: 357px;
		overflow: visible;
	}
	#Button_-_Default_ {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_ {
		fill: rgba(242,245,247,1);
	}
	.Path_361_ {
		overflow: visible;
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_ {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 16px;
		top: 15px;
		overflow: visible;
	}
	#Group_ {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_touch_ {
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
	#arrow--right_ {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178.001px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_a {
		fill: rgba(242,245,247,1);
	}
	.Path_10090_a {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.011px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_e {
		fill: transparent;
	}
	.Transparent_Rectangle_e {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: -0.001px;
		top: 0px;
	}
	#arrow--right_k {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_d {
		fill: rgba(242,245,247,1);
	}
	.Path_10090_d {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_j {
		fill: transparent;
	}
	.Transparent_Rectangle_j {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_k {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_g {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_g {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_j {
		fill: transparent;
	}
	.Transparent_Rectangle_j {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Our_partnership_with_the_Natio_i {
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
	#Group_10142_j {
		position: absolute;
		width: 955px;
		height: 110px;
		left: 354px;
		top: 108px;
		overflow: visible;
	}
	#IBMs_contribution_to_education_k {
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
	#Line_5_l {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_5_l {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 341.5px;
		top: 3427.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID04_Directory_m {
		left: 341.5px;
		top: 3445px;
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
	#Line_7_n {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_7_n {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 589.5px;
		top: 3442.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_8_o {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_8_o {
		overflow: visible;
		position: absolute;
		width: 455px;
		height: 1px;
		left: 1073px;
		top: 3442.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Contact_Us_p {
		left: 589.5px;
		top: 3452px;
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
	#Sign_up_to_Newsletter_q {
		left: 1073.5px;
		top: 3452px;
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
	#Line_9_r {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_9_r {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 589.5px;
		top: 3679.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Submit_a_Project_Request_s {
		left: 589.5px;
		top: 3689px;
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
	#Line_10_u {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_10_u {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 1072px;
		top: 3679.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects_Archives_u {
		left: 1073.5px;
		top: 3689px;
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
	#Email_j0nnymacukibmcom_w {
		left: 589.5px;
		top: 3548px;
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
	#John_McNamara_IBM_UK_x {
		left: 589.5px;
		top: 3518px;
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
	#You_can_sign_up_to_our_Newslet_x {
		left: 1073.5px;
		top: 3518px;
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
	#To_view_the_full_projects_arch_y {
		left: 1074px;
		top: 3750px;
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
	#Do_you_have_a_project_idea_to__z {
		left: 589.5px;
		top: 3755px;
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
	#Group_10809_ {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 589.5px;
		top: 3597px;
		overflow: visible;
	}
	#Button_-_Default_a {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_a {
		fill: rgba(14,42,59,1);
	}
	.Path_361_a {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_a {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_a {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_Touch_ {
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
	#arrow--right_b {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 723.5px;
		top: 3609px;
		overflow: visible;
	}
	#Path_10090_ {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_ {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_p {
		fill: transparent;
	}
	.Transparent_Rectangle_p {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_b {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 723.5px;
		top: 3609px;
		overflow: visible;
	}
	#Path_10090_b {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_b {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_p {
		fill: transparent;
	}
	.Transparent_Rectangle_p {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_c {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1074.5px;
		top: 3598px;
		overflow: visible;
	}
	#Button_-_Default_d {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_e {
		fill: rgba(14,42,59,1);
	}
	.Path_361_e {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_f {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_j {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Sign_Up_h {
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
	#arrow--right_p {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 1208.5px;
		top: 3610px;
		overflow: visible;
	}
	#Path_10090_j {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_j {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_baa {
		fill: transparent;
	}
	.Transparent_Rectangle_baa {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_p {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 1208.5px;
		top: 3610px;
		overflow: visible;
	}
	#Path_10090_o {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_o {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_baa {
		fill: transparent;
	}
	.Transparent_Rectangle_baa {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_o {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 589.5px;
		top: 3825px;
		overflow: visible;
	}
	#Button_-_Default_r {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_s {
		fill: rgba(14,42,59,1);
	}
	.Path_361_s {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_s {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_u {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Submit_a_Request_t {
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
	#arrow--right_z {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 723.5px;
		top: 3837px;
		overflow: visible;
	}
	#Path_10090_x {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_x {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_bac {
		fill: transparent;
	}
	.Transparent_Rectangle_bac {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_z {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 723.5px;
		top: 3837px;
		overflow: visible;
	}
	#Path_10090_y {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_y {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_bac {
		fill: transparent;
	}
	.Transparent_Rectangle_bac {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_a {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1072.5px;
		top: 3824px;
		overflow: visible;
		cursor: pointer;
	}
	#Button_-_Default_b {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_b {
		fill: rgba(14,42,59,1);
	}
	.Path_361_b {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_b {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_b {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#View_Archives_ {
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
	#arrow--right_e {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 1206.5px;
		top: 3836px;
		overflow: visible;
	}
	#Path_10090_c {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_c {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_bae {
		fill: transparent;
	}
	.Transparent_Rectangle_bae {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
		cursor: pointer;
	}
	#arrow--right_e {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 1206.5px;
		top: 3836px;
		overflow: visible;
	}
	#Path_10090_e {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_e {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_bae {
		fill: transparent;
	}
	.Transparent_Rectangle_bae {
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
<div id="Home_ForIndustries">
	<div id="Group_10180_xs">
		<div id="For_Industries_xt">
			<span>For Industries</span>
		</div>
	</div>
	<div id="The_IBM_IXN_is_an_opportunity__xu">
		<span>The IBM IXN is an opportunity to innovate with the best minds in academia and cutting edge technology, to see your vision come to life as a real working Proof of Concept application. The IBM IXN is your ‘Skunk Works’ for innovation to build the next great idea and make it a reality. This service comes at no cost to you. Our aim is to remove the barrier to innovation for industry. To get started, contact John McNamara IBM Master Inventor & University Program Lead for the UK at j0nnymac@uk.ibm.com</span><br>
	</div>
	<svg class="Line_6_xv" viewBox="0 0 211.5 2">
		<path id="Line_6_xv" d="M 0 0 L 211.5 0">
		</path>
	</svg>




	<div id="Projects_Archives_xw">
		<span>Projects Archives</span>
	</div>

	<?php

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
					// $temp_arch_split = explode("v=", $row[17]);
					// $temp_arch_vidID = substr($temp_arch_split[1], 0, 11);
					// $temp_arch_imgurl = "https://img.youtube.com/vi/" . $temp_arch_vidID . "/sddefault.jpg?w=600";
					$temp_arch_filename = 'projects/' . $temp_arch_slug. '.php';
					$arch_compTime = $row[2];
					$arch_compDate_temp = strtotime($arch_compTime);
					$arch_compDate = date('Y/M/d h:i:s a', $arch_compDate_temp);
					$arch_currentDate = date('Y/M/d h:i:s a', time());
					$temp_arch_university = $row[20];

					array_push($temp_arch_universities, $temp_arch_university);


					if (isset($_GET['arch_filter']) && $_GET['arch_filter']!="") {

						if ((file_exists($temp_arch_filename)) & ($temp_arch_university == $arch_filter_param)) {
					 array_push($temp_arch_thumbnails, $temp_arch_imgurl);
					 array_push($temp_arch_titles, $temp_arch_title);
					 array_push($temp_arch_slugs, $temp_arch_slug);
					 array_push($temp_arch_filenames, $temp_arch_filename);

					 }

				 } else {
								 if (file_exists($temp_arch_filename)) {
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
	<div id="Project_Title_xx" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';">
		<span><?php echo $arch_titles[0]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_xy" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';" src=<?php echo $arch_thumbnails[0]; ?> srcset=<?php echo $arch_thumbnails[0]; ?>>
	<?php
	}

	 if ($arch_thumbnails[2]) {
		?>
	<div id="Project_Title_xz" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';">
		<span><?php echo $arch_titles[2]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_x" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';" src=<?php echo $arch_thumbnails[2]; ?> srcset=<?php echo $arch_thumbnails[2]; ?>>
	<?php
	}

	 if ($arch_thumbnails[1]) {
		?>
	<div id="Project_Title_x" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';">
		<span><?php echo $arch_titles[1]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_ya" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';" src=<?php echo $arch_thumbnails[1]; ?> srcset=<?php echo $arch_thumbnails[1]; ?>>
	<?php
	}

	 if ($arch_thumbnails[3]) {
		?>
	<div id="Project_Title_ya" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';">
		<span><?php echo $arch_titles[3]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_yb" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';" src=<?php echo $arch_thumbnails[3]; ?> srcset=<?php echo $arch_thumbnails[3]; ?>>
	<?php
	}

	 if ($arch_thumbnails[4]) {
		?>
	<div id="Project_Title_yb" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';">
		<span><?php echo $arch_titles[4]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_yc" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';" src=<?php echo $arch_thumbnails[4]; ?> srcset=<?php echo $arch_thumbnails[4]; ?>>
	<?php
	}

	 if ($arch_thumbnails[5]) {
		?>
	<div id="Project_Title_yc" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';">
		<span><?php echo $arch_titles[5]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_yd" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';" src=<?php echo $arch_thumbnails[5]; ?> srcset=<?php echo $arch_thumbnails[5]; ?>>
	<?php
	}
	}
	 ?>


	<!-- <div id="Search_Bar_x" class="Search_Bar">
		<div id="Group_10619_ya">
			<svg class="Rectangle_296_yb">
				<rect id="Rectangle_296_yb" rx="0" ry="0" x="0" y="0" width="771" height="49">
				</rect>
			</svg>
			<div id="search__large_yc" class="search___large">
				<div id="Icon__Search_-_16_yd" class="Icon___Search___16">
					<img id="Group_2829_ye" src="Group_2829_ye.png" srcset="Group_2829_ye.png 1x, Group_2829_ye@2x.png 2x">

					</svg>
				</div>
			</div>
			<div id="Search_by_keywords_yf">
				<span>Search by keywords</span>
			</div>
		</div>
		<svg class="Path_5097_yg" viewBox="192 -2051 771 1">
			<path id="Path_5097_yg" d="M 192 -2051 L 962.9999389648438 -2051 L 962.9999389648438 -2050 L 192 -2050 L 192 -2051 Z">
			</path>
		</svg>
	</div>
	<div id="Group_10808_yh">
		<div id="Button_-_Default_yi" class="Button___Default">
			<svg class="Path_361_yj" viewBox="0 -640 159 48">
				<path id="Path_361_yj" d="M 0 -592 L 159 -592 L 159 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_yk">
				<div id="Group_yl">
					<div id="Search_ym">
						<span>Search</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div id="Pagination_Bar_yn" class="Pagination_Bar">
		<img id="Group_4206_yo" src="images/Group_4206_yo.png" srcset="images/Group_4206_yo.png 1x, images/Group_4206_yo@2x.png 2x">

		</svg>
		<img id="Group_4207_yp" src="images/Group_4207_yp.png" srcset="images/Group_4207_yp.png 1x, images/Group_4207_yp@2x.png 2x">

		</svg>
		<div id="ID1__6_of_50_items_yq">
			<?php
			if (($arch_start_row + 5) > ($arch_total_records)) {
				$arch_lim = $arch_total_records;
			} else {
				$arch_lim = $arch_end_row + 1;
			}
			 ?>
			<span><?php echo $arch_start_row + 1; ?> – <?php echo $arch_lim; ?> of <?php echo $arch_total_records; ?> items </span>
		</div>
		<div id="ID6_yr">
			<!-- <span>6</span> -->
		</div>
		<div id="Items_per_page_ys">
			<!-- <span>Items per page</span> -->
		</div>
		<img id="Group_4213_yt" src="images/Group_4213_yt.png" srcset="images/Group_4213_yt.png 1x, images/Group_4213_yt@2x.png 2x">

		</svg>
		<img id="Group_4214_yu" src="images/Group_4214_yu.png" srcset="images/Group_4214_yu.png 1x, images/Group_4214_yu@2x.png 2x">

		</svg>
		<img id="Group_4216_yv" src="images/Group_4216_yv.png" srcset="images/Group_4216_yv.png 1x, images/Group_4216_yv@2x.png 2x">

		</svg>
		<?php
		if($arch_page_no < $arch_total_no_of_pages) {
		echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_next_page.'#Projects_Archives_xw"> <img id="Icon_-_Carret--Right__20_yw" src="images/Icon_-_Carret--Right__20_yw.png" srcset="images/Icon_-_Carret--Right__20_yw.png 1x, images/Icon_-_Carret--Right__20_yw@2x.png 2x"> </a>';
		}
		?>
		<!-- <img id="Icon_-_Carret--Right__20_yw" src="Icon_-_Carret--Right__20_yw.png" srcset="Icon_-_Carret--Right__20_yw.png 1x, Icon_-_Carret--Right__20_yw@2x.png 2x"> -->

		</svg>
		<div id="Group_10684_yx">
			<div id="of_9_pages_yy">
				<span>of <?php echo $arch_total_no_of_pages; ?> pages</span>
			</div>
			<div id="ID2_yz">
				<span><?php echo $arch_page_no; ?></span>
			</div>
			<img id="Group_4215_y" src="images/Group_4215_y.png" srcset="images/Group_4215_y.png 1x, images/Group_4215_y@2x.png 2x">

			</svg>
			<!-- <img id="chevron--down__20_y" src="chevron--down__20_y.png" srcset="chevron--down__20_y.png 1x, chevron--down__20_y@2x.png 2x"> -->

			<div class="dropdown">
			<button class="dropbtn"><img id="chevron--down__20_y" src="images/chevron--down__20_y.png" srcset="images/chevron--down__20_y.png 1x, images/chevron--down__20_y@2x.png 2x">
			>
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<?php
			for($i = 1; $i <= $arch_total_no_of_pages; ++$i) {
				echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$i.'#Projects_Archives_xw">'.$i.'</a>';
			}
				?>

				</div>
			</div>

			</svg>
		</div>
		<?php
		if ($arch_page_no > 1) {
			echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_previous_page.'#Projects_Archives_xw"> <img id="carret--left__20_y" src="images/carret--left__20_y.png" srcset="images/carret--left__20_y.png 1x, images/carret--left__20_y@2x.png 2x"> </a>';
		}
			?>
		<!-- <img id="carret--left__20_y" src="carret--left__20_y.png" srcset="carret--left__20_y.png 1x, carret--left__20_y@2x.png 2x"> -->

		</svg>
		<!-- <img id="chevron--down__20_za" src="chevron--down__20_za.png" srcset="chevron--down__20_za.png 1x, chevron--down__20_za@2x.png 2x"> -->

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
				 echo '<a href="?#Projects_Archives_xw">All</a>';
					foreach (array_unique($temp_arch_universities) as &$uni) {
						echo '<a href="?arch_filter='.$uni.'#Projects_Archives_xw">'.$uni.'</a>';
					}

					?>

			 </div>
		 </div>

	</div>


	<div onclick="window.location='home.php';" id="Group_10839_y">
		<div id="Go_back_to_previous_page_y" >
			<span>Go back to previous page</span>
		</div>
		<div id="arrow--left_y">
			<svg class="Path_10107_y" viewBox="4 6 18.476 15.396">
				<path id="Path_10107_y" d="M 11.69813537597656 21.39627075195312 L 12.78357219696045 20.31083297729492 L 6.948385715484619 14.46794891357422 L 22.47552490234375 14.46794891357422 L 22.47552490234375 12.92832183837891 L 6.948385715484619 12.92832183837891 L 12.78357219696045 7.085436820983887 L 11.69813537597656 6 L 4 13.69813537597656 L 11.69813537597656 21.39627075195312 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_y">
				<rect id="Transparent_Rectangle_y" rx="0" ry="0" x="0" y="0" width="25" height="25">
				</rect>
			</svg>
		</div>
	</div>
	<svg class="Rectangle_360_y">
		<rect id="Rectangle_360_y" rx="0" ry="0" x="0" y="0" width="469" height="306">
		</rect>
	</svg>
	<div id="Group_10825_za">
		<div id="Group_10814_zb">
			<svg class="Rectangle_355_zc">
				<rect id="Rectangle_355_zc" rx="0" ry="0" x="0" y="0" width="462" height="473">
				</rect>
			</svg>
			<div id="Access_to_a_community_of__univ">
				<span>Access to a community of <br/>universities who can develop a <br/>Proof of Concept for free based <br/>on your requirements</span>
			</div>
			<div id="Benefits_01_ze">
				<span>Benefits </span><span style="font-size:22px;">01.</span>
			</div>
			<div id="events--alt">
				<svg class="Path_10110" viewBox="18 26 42.223 17.593">
					<path id="Path_10110" d="M 17.99999809265137 43.59278869628906 L 25.03711128234863 43.59278869628906 L 25.03711128234863 36.5556755065918 C 25.03827285766602 34.6129035949707 26.6129035949707 33.03828048706055 28.5556697845459 33.03711700439453 L 49.66700744628906 33.03711700439453 C 51.60977554321289 33.03828048706055 53.18440246582031 34.6129035949707 53.18556213378906 36.5556755065918 L 53.18556213378906 43.59278869628906 L 60.22267913818359 43.59278869628906 L 60.22267913818359 36.5556755065918 C 60.21626281738281 30.72859191894531 55.49408721923828 26.00639724731445 49.66700744628906 25.99999618530273 L 28.5556697845459 26.00000381469727 C 22.72858238220215 26.00639724731445 18.00639724731445 30.72859191894531 17.99999809265137 36.5556755065918 L 17.99999809265137 43.59278869628906 Z">
					</path>
				</svg>
				<svg class="Path_10111" viewBox="20 17 28.148 28.148">
					<path id="Path_10111" d="M 34.07422256469727 45.14845275878906 C 26.30124473571777 45.14845275878906 20 38.84720611572266 20 31.07422637939453 C 20 23.30124282836914 26.30124473571777 17 34.07422256469727 17 C 41.84720230102539 17 48.1484489440918 23.30124282836914 48.1484489440918 31.07422637939453 C 48.14089584350586 38.84406661987305 41.84407424926758 45.14087677001953 34.07423400878906 45.14845275878906 Z M 34.07422256469727 24.03711318969727 C 30.18773460388184 24.03711318969727 27.03711318969727 27.18774032592773 27.03711318969727 31.07422637939453 C 27.03711318969727 34.96072006225586 30.18773460388184 38.1113395690918 34.07422256469727 38.1113395690918 C 37.96071243286133 38.1113395690918 41.11133575439453 34.96071243286133 41.11133575439453 31.07422637939453 C 41.10610198974609 27.18990325927734 37.95854568481445 24.04234313964844 34.07423400878906 24.03711318969727 Z">
					</path>
				</svg>
				<svg class="Path_10112" viewBox="2 26 42.223 17.593">
					<path id="Path_10112" d="M 2 43.59278869628906 L 9.037112236022949 43.59278869628906 L 9.037112236022949 36.5556755065918 C 9.038862228393555 34.61315155029297 10.61315059661865 33.03886032104492 12.5556697845459 33.03711700439453 L 33.66700744628906 33.03711700439453 C 35.60952377319336 33.03886032104492 37.18381500244141 34.61315155029297 37.18556213378906 36.5556755065918 L 37.18556213378906 43.59278869628906 L 44.22267532348633 43.59278869628906 L 44.22267532348633 36.5556755065918 C 44.21627807617188 30.72859191894531 39.49408721923828 26.00639724731445 33.6670036315918 25.99999618530273 L 12.55566883087158 26.00000381469727 C 6.728583335876465 26.00639724731445 2.006395578384399 30.72859191894531 2.000000476837158 36.5556755065918 L 2 43.59278869628906 Z">
					</path>
				</svg>
				<svg class="Path_10113" viewBox="4 17 28.148 28.148">
					<path id="Path_10113" d="M 18.0742244720459 45.14845275878906 C 10.30124473571777 45.14845275878906 4 38.84720611572266 4 31.07422637939453 C 4 23.30124282836914 10.30124473571777 17 18.0742244720459 17 C 25.84720611572266 17 32.1484489440918 23.30124282836914 32.1484489440918 31.07422637939453 C 32.14030838012695 38.84383010864258 25.84383201599121 45.14031600952148 18.07422256469727 45.14846038818359 Z M 18.0742244720459 24.03711318969727 C 14.18773555755615 24.03711318969727 11.03711223602295 27.18774032592773 11.03711223602295 31.07422637939453 C 11.03711223602295 34.96072006225586 14.18773555755615 38.1113395690918 18.0742244720459 38.1113395690918 C 21.96071624755859 38.1113395690918 25.11133766174316 34.96071243286133 25.11133766174316 31.07422637939453 C 25.10688018798828 27.1895866394043 21.95886993408203 24.04156875610352 18.07422256469727 24.03711318969727 Z">
					</path>
				</svg>
				<svg class="Path_10114" viewBox="18 11 42.223 17.593">
					<path id="Path_10114" d="M 17.99999809265137 28.59278106689453 L 25.03711128234863 28.59278106689453 L 25.03711128234863 21.55566787719727 C 25.03886222839355 19.61314582824707 26.61315155029297 18.03886222839355 28.55567359924316 18.03711700439453 L 49.66700744628906 18.03711128234863 C 51.60953140258789 18.03885841369629 53.18382263183594 19.61314582824707 53.18557357788086 21.55566787719727 L 53.18556213378906 28.59278106689453 L 60.22267913818359 28.59278106689453 L 60.22267913818359 21.55566787719727 C 60.21626281738281 15.72858810424805 55.49408721923828 11.00640487670898 49.66700744628906 11 L 28.5556697845459 11 C 22.72858238220215 11.00639724731445 18.00639724731445 15.72858810424805 17.99999809265137 21.55566787719727 L 17.99999809265137 28.59278106689453 Z">
					</path>
				</svg>
				<svg class="Path_10115" viewBox="20 2 28.148 28.148">
					<path id="Path_10115" d="M 34.07422256469727 30.1484489440918 C 26.30124473571777 30.1484489440918 20 23.84720420837402 20 16.0742244720459 C 20 8.301244735717773 26.30124473571777 2 34.07422256469727 2 C 41.84720230102539 2 48.1484489440918 8.30124568939209 48.1484489440918 16.0742244720459 C 48.14030456542969 23.84382438659668 41.84382629394531 30.14030265808105 34.07422256469727 30.14844703674316 Z M 34.07422256469727 9.037112236022949 C 30.18773460388184 9.037112236022949 27.03711318969727 12.18773555755615 27.03711318969727 16.0742244720459 C 27.03711318969727 19.96071434020996 30.18773460388184 23.11133766174316 34.07422256469727 23.11133766174316 C 37.96071243286133 23.11133766174316 41.11133575439453 19.96071434020996 41.11133575439453 16.0742244720459 C 41.10688400268555 12.1895809173584 37.95886611938477 9.041568756103516 34.07421493530273 9.037111282348633 Z">
					</path>
				</svg>
				<svg class="Path_10116" viewBox="2 11 42.223 17.593">
					<path id="Path_10116" d="M 2 28.59278106689453 L 9.037112236022949 28.59278106689453 L 9.037112236022949 21.55566787719727 C 9.039633750915527 19.61347007751465 10.61346912384033 18.03963279724121 12.55566883087158 18.03711700439453 L 33.66700744628906 18.03711128234863 C 35.60920715332031 18.03963279724121 37.18304443359375 19.61347007751465 37.1855583190918 21.55566787719727 L 37.18556213378906 28.59278106689453 L 44.22267532348633 28.59278106689453 L 44.22267532348633 21.55566787719727 C 44.21627426147461 15.72858810424805 39.49408721923828 11.00639533996582 33.6670036315918 11 L 12.55566883087158 11 C 6.728585720062256 11.00639724731445 2.006399154663086 15.72858810424805 2.000000476837158 21.55566787719727 L 2 28.59278106689453 Z">
					</path>
				</svg>
				<svg class="Path_10117" viewBox="4 2 28.148 28.148">
					<path id="Path_10117" d="M 18.0742244720459 30.1484489440918 C 10.30124473571777 30.1484489440918 4 23.84720420837402 4 16.0742244720459 C 4 8.301244735717773 10.30124473571777 2 18.0742244720459 2 C 25.84720611572266 2 32.1484489440918 8.30124568939209 32.1484489440918 16.0742244720459 C 32.13972473144531 23.84358596801758 25.84358787536621 30.13972473144531 18.07422256469727 30.1484489440918 Z M 18.0742244720459 9.037112236022949 C 14.18773555755615 9.037112236022949 11.03711223602295 12.18773555755615 11.03711223602295 16.0742244720459 C 11.03711223602295 19.96071434020996 14.18773555755615 23.11133766174316 18.0742244720459 23.11133766174316 C 21.96071624755859 23.11133766174316 25.11133766174316 19.96071434020996 25.11133766174316 16.0742244720459 C 25.10745811462402 12.1893424987793 21.95910835266113 9.04099178314209 18.0742244720459 9.037111282348633 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_zo">
					<rect id="Transparent_Rectangle_zo" rx="0" ry="0" x="0" y="0" width="112" height="112">
					</rect>
				</svg>
			</div>
		</div>
	</div>
	<div id="Group_10826_zp">
		<div id="Group_10815_zq">
			<svg class="Rectangle_357_zr">
				<rect id="Rectangle_357_zr" rx="0" ry="0" x="0" y="0" width="693" height="473">
				</rect>
			</svg>
			<div id="Access_to_a__Skunk_Works_capab">
				<span>Access to a  ‘Skunk Works’ capability to apply the <br/>latest in cutting edge technologies such as A.I,<br/>Cloud, IoT to enhance your Proof of Concept </span>
			</div>
			<div id="Benefits_02_zt">
				<span>Benefits </span><span style="font-size:22px;">02.</span>
			</div>
			<div id="cognitive_b">
				<svg class="Path_10118_c" viewBox="2 2 71.007 71.007">
					<path id="Path_10118_c" d="M 73.006591796875 29.89544677734375 C 73.006591796875 14.48921966552734 60.51737594604492 2.000002384185791 45.11114501953125 2.000002384185791 L 24.82354736328125 2 C 12.21844959259033 2 1.999997615814209 12.2184534072876 2 24.82355308532715 L 2 32.431396484375 C 2 39.43422698974609 7.676916122436523 45.11114501953125 14.67974662780762 45.11114501953125 L 17.46929359436035 45.11114501953125 C 18.6745548248291 51.01567840576172 23.86916542053223 55.25617218017578 29.89545059204102 55.25494384765625 L 33.39505767822266 55.25494384765625 L 43.53886032104492 73.006591796875 L 47.92605209350586 70.47064208984375 L 37.78225326538086 52.99795150756836 C 36.95078277587891 51.32245635986328 35.26462936401367 50.2405891418457 33.39505767822266 50.18304443359375 L 29.89544677734375 50.18304443359375 C 25.69374656677246 50.18304443359375 22.28759765625 46.77689361572266 22.28759765625 42.5751953125 C 22.28759765625 38.37349700927734 25.69374656677246 34.96734619140625 29.89544677734375 34.96734619140625 L 32.431396484375 34.96734619140625 L 32.431396484375 29.89544677734375 L 29.89544677734375 29.89544677734375 C 23.86657333374023 29.89544677734375 18.67283058166504 34.13700485229492 17.46877861022949 40.04178619384766 L 14.67974853515625 40.03924560546875 C 10.47805118560791 40.03924560546875 7.071902275085449 36.63309860229492 7.071900367736816 32.43140029907227 L 7.0718994140625 27.3594970703125 L 12.143798828125 27.3594970703125 C 16.34549903869629 27.3594970703125 19.75164794921875 23.95334815979004 19.75164794921875 19.75164794921875 L 19.75164794921875 17.2156982421875 L 14.67974853515625 17.2156982421875 L 14.67974853515625 19.75164794921875 C 14.67974853515625 21.1522159576416 13.54436492919922 22.28759765625 12.143798828125 22.28759765625 L 7.274775505065918 22.28759765625 C 8.534266471862793 13.56157684326172 16.00711631774902 7.082231521606445 24.82355308532715 7.0718994140625 L 40.03924560546875 7.0718994140625 L 40.03924560546875 12.143798828125 C 40.03924560546875 13.54436492919922 38.90386199951172 14.67974853515625 37.5032958984375 14.67974853515625 L 32.431396484375 14.67974853515625 L 32.431396484375 19.75164794921875 L 37.5032958984375 19.75164794921875 C 41.70499420166016 19.75164794921875 45.11114501953125 16.34549713134766 45.11114501953125 12.143798828125 L 45.11114501953125 7.0718994140625 C 53.77030181884766 7.083699226379395 61.67703247070312 11.99471187591553 65.52553558349609 19.75164985656738 L 62.86279296875 19.75164794921875 C 58.66109466552734 19.75164794921875 55.25494384765625 23.15779876708984 55.25494384765625 27.35949897766113 L 55.25494384765625 29.89544677734375 L 60.32684326171875 29.89544677734375 L 60.32684326171875 27.3594970703125 C 60.32684326171875 25.95892906188965 61.46222686767578 24.82354736328125 62.86279296875 24.82354736328125 L 67.35142517089844 24.82354736328125 C 67.7401123046875 26.48614883422852 67.93582916259766 28.18801879882812 67.9346923828125 29.89544677734375 L 67.9346923828125 32.431396484375 C 67.9346923828125 39.43422698974609 62.25777435302734 45.11114501953125 55.25494384765625 45.11114501953125 L 47.6470947265625 45.11114501953125 L 47.6470947265625 50.18304443359375 L 55.25494384765625 50.18304443359375 C 57.88739013671875 50.17943572998047 60.48607635498047 49.59040451049805 62.86279296875 48.45860290527344 L 62.86279296875 50.18304443359375 C 62.86279296875 54.38474273681641 59.45664215087891 57.7908935546875 55.25494384765625 57.7908935546875 L 52.718994140625 57.7908935546875 L 52.718994140625 62.86279296875 L 55.25494384765625 62.86279296875 C 62.25777435302734 62.86280059814453 67.9346923828125 57.18587875366211 67.9346923828125 50.18304824829102 L 67.9346923828125 44.83218765258789 C 71.18021392822266 41.51976013183594 73.00064849853516 37.06880187988281 73.00659942626953 32.431396484375 L 73.006591796875 29.89544677734375 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_d">
					<rect id="Transparent_Rectangle_d" rx="0" ry="0" x="0" y="0" width="81" height="81">
					</rect>
				</svg>
			</div>
			<div id="iot--platform">
				<svg class="Path_10119" viewBox="2 2 81.738 81.738">
					<path id="Path_10119" d="M 83.7381591796875 51.62673950195312 L 72.061279296875 51.62673950195312 L 72.061279296875 39.94985961914062 L 66.22283935546875 39.94985961914062 L 66.22283935546875 66.22283935546875 L 19.51531982421875 66.22283935546875 L 19.51531982421875 19.51531982421875 L 45.78829956054688 19.51269340515137 L 45.78829956054688 13.6768798828125 L 34.11141967773438 13.6768798828125 L 34.11141967773438 2 L 28.27297973632812 2 L 28.27297973632812 13.6768798828125 L 19.51531982421875 13.6768798828125 C 16.29217147827148 13.68009757995605 13.68009757995605 16.29217147827148 13.6768798828125 19.51531982421875 L 13.6768798828125 28.27297973632812 L 2 28.27297973632812 L 2 34.11141967773438 L 13.6768798828125 34.11141967773438 L 13.6768798828125 51.62673950195312 L 2 51.62673950195312 L 2 57.46517944335938 L 13.6768798828125 57.46517944335938 L 13.6768798828125 66.22283935546875 C 13.68057632446289 69.44578552246094 16.2923698425293 72.05757904052734 19.51531982421875 72.061279296875 L 28.27297973632812 72.061279296875 L 28.27297973632812 83.7381591796875 L 34.11141967773438 83.7381591796875 L 34.11141967773438 72.061279296875 L 51.62673950195312 72.061279296875 L 51.62673950195312 83.7381591796875 L 57.46517944335938 83.7381591796875 L 57.46517944335938 72.061279296875 L 66.22283935546875 72.061279296875 C 69.44552612304688 72.05693817138672 72.05693817138672 69.44552612304688 72.06128692626953 66.22284698486328 L 72.061279296875 57.46517944335938 L 83.7381591796875 57.46517944335938 L 83.7381591796875 51.62673950195312 Z">
					</path>
				</svg>
				<svg class="Path_10120" viewBox="11 11 29.192 29.192">
					<path id="Path_10120" d="M 40.19219970703125 40.19219970703125 L 11 40.19219970703125 L 11 11 L 40.19219970703125 11 L 40.19219970703125 40.19219970703125 Z M 16.83843994140625 34.353759765625 L 34.353759765625 34.353759765625 L 34.353759765625 16.83843994140625 L 16.83843994140625 16.83843994140625 L 16.83843994140625 34.353759765625 Z">
					</path>
				</svg>
				<svg class="Path_10121" viewBox="19 1 35.031 35.031">
					<path id="Path_10121" d="M 54.0306396484375 36.0306396484375 L 48.19219970703125 36.0306396484375 C 48.17337799072266 19.91603469848633 35.11460113525391 6.85726261138916 19 6.83843994140625 L 19 1 C 38.33815002441406 1.021071910858154 54.00956726074219 16.69248962402344 54.0306396484375 36.03064346313477 Z">
					</path>
				</svg>
				<svg class="Path_10122" viewBox="19 6 20.435 20.435">
					<path id="Path_10122" d="M 39.43453979492188 26.43453979492188 L 33.59609985351562 26.43453979492188 C 33.58661651611328 18.37726974487305 27.05727005004883 11.84792709350586 19 11.83843994140625 L 19 6 C 30.28001403808594 6.013671875 39.42086791992188 15.15452575683594 39.43453979492188 26.43454360961914 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_z">
					<rect id="Transparent_Rectangle_z" rx="0" ry="0" x="0" y="0" width="93" height="93">
					</rect>
				</svg>
			</div>
			<div id="ibm-cloud">
				<svg class="Path_10123" viewBox="0.258 8.499 90.101 64.372">
					<path id="Path_10123" d="M 69.84091186523438 23.23542404174805 C 64.00001525878906 12.29027938842773 51.62236404418945 6.529919147491455 39.48734664916992 9.109355926513672 C 27.35232925415039 11.68878364562988 18.38782501220703 21.98565864562988 17.5037956237793 34.36026000976562 C 7.30370044708252 35.45713806152344 -0.2582855224609375 44.33834838867188 0.2850915193557739 54.58285903930664 C 0.8284671306610107 64.82735443115234 9.287509918212891 72.85879516601562 19.54640769958496 72.87051391601562 L 65.31939697265625 72.87051391601562 C 78.26502227783203 72.87846374511719 89.07925415039062 63.01066589355469 90.25366973876953 50.1184196472168 C 91.4281005859375 37.22616958618164 82.57489013671875 25.56676483154297 69.84091949462891 23.23542976379395 Z M 65.31939697265625 68.57929229736328 L 19.54641151428223 68.57929229736328 C 11.64736175537109 68.59750366210938 5.090967655181885 62.48015594482422 4.56251049041748 54.59878158569336 C 4.034053325653076 46.7174072265625 9.715072631835938 39.77951812744141 17.54584503173828 38.74302291870117 C 17.84846687316895 42.52893447875977 18.92292404174805 46.21280288696289 20.70303726196289 49.56777572631836 C 21.05393981933594 50.26403427124023 21.75492477416992 50.71514129638672 22.53399467468262 50.74605560302734 C 23.31306266784668 50.77696228027344 24.0475902557373 50.3828239440918 24.45255661010742 49.71656799316406 C 24.85752487182617 49.0503044128418 24.86919403076172 48.21679306030273 24.4830322265625 47.53945541381836 C 18.59623908996582 36.53432464599609 22.29512786865234 22.84836769104004 32.92420959472656 16.30696296691895 C 43.55328750610352 9.765560150146484 57.43783950805664 12.63022041320801 64.60992431640625 22.84435272216797 C 57.6793212890625 23.03544044494629 51.13806915283203 26.09114074707031 46.54389190673828 31.28375434875488 C 45.75951385498047 32.1719856262207 45.84426498413086 33.52786254882812 46.73281478881836 34.31187057495117 C 47.62136840820312 35.09588241577148 48.97724914550781 35.01113510131836 49.76125335693359 34.12258148193359 C 56.07614135742188 26.95940208435059 66.46578979492188 25.03359222412109 74.928466796875 29.45762825012207 C 83.39114379882812 33.88166809082031 87.73954010009766 43.51208877563477 85.46174621582031 52.78573989868164 C 83.18394470214844 62.05939483642578 74.86869049072266 68.57936096191406 65.31938934326172 68.57929229736328 Z">
					</path>
				</svg>
				<svg class="Path_10124" viewBox="27.447 9.875 13.024 9.355">
					<path id="Path_10124" d="M 40.18076324462891 10.96089553833008 C 39.89315795898438 10.46212959289551 39.41905975341797 10.09817314147949 38.8629150390625 9.949207305908203 C 38.30677795410156 9.800243377685547 37.71421813964844 9.878503799438477 37.2158203125 10.16673469543457 L 28.57616233825684 15.15541648864746 C 27.88552665710449 15.53320693969727 27.45358467102051 16.25532531738281 27.44737434387207 17.04251098632812 C 27.44116401672363 17.8296947479248 27.86166954040527 18.55853652954102 28.54625511169434 18.94717216491699 C 29.23084449768066 19.33580780029297 30.07219505310059 19.32331466674805 30.74493980407715 18.91451835632324 L 39.38460540771484 13.92584037780762 C 40.42307281494141 13.32684898376465 40.77948760986328 11.99951362609863 40.18074798583984 10.96089172363281 Z">
					</path>
				</svg>
				<svg class="Path_10125" viewBox="22.297 3.434 9.33 12.982">
					<path id="Path_10125" d="M 23.38231468200684 16.12423706054688 C 24.4202823638916 16.72432327270508 25.74820899963379 16.3686351776123 26.34726142883301 15.33007717132568 L 31.3359432220459 6.690425872802734 C 31.93545341491699 5.652377128601074 31.57987403869629 4.32489013671875 30.54180335998535 3.725428342819214 C 29.50372505187988 3.12596583366394 28.17623329162598 3.481531381607056 27.57676887512207 4.519607543945312 L 22.58815574645996 13.15929317474365 C 21.98892402648926 14.19736766815186 22.34443092346191 15.52466297149658 23.38231468200684 16.12423515319824 Z">
					</path>
				</svg>
				<svg class="Path_10126" viewBox="15.241 1.076 4.341 14.319">
					<path id="Path_10126" d="M 17.41189575195312 15.39483451843262 C 18.61065292358398 15.39451599121094 19.58236312866211 14.42280769348145 19.58267974853516 13.22404861450195 L 19.58267974853516 3.246683835983276 C 19.58282089233398 2.047793388366699 18.61092376708984 1.075899839401245 17.41203308105469 1.075899839401245 C 16.2131462097168 1.075899839401245 15.24125194549561 2.047793388366699 15.24125194549561 3.246684312820435 L 15.24139881134033 13.22405052185059 C 15.24139881134033 14.42247581481934 16.21289443969727 15.39435768127441 17.41160583496094 15.39483261108398 Z">
					</path>
				</svg>
				<svg class="Path_10127" viewBox="6.442 3.434 9.33 12.981">
					<path id="Path_10127" d="M 11.72166347503662 15.32987308502197 C 12.32107257843018 16.36798286437988 13.64856052398682 16.72355079650879 14.68663883209229 16.12408828735352 C 15.72471523284912 15.52462673187256 16.08028411865234 14.19713878631592 15.48082256317139 13.15906143188477 L 10.49208736419678 4.519439697265625 C 9.89267635345459 3.481332540512085 8.565189361572266 3.125764608383179 7.527112007141113 3.725227117538452 C 6.489034652709961 4.324688911437988 6.133466720581055 5.652176856994629 6.732927322387695 6.690254211425781 L 11.72166347503662 15.32987308502197 Z">
					</path>
				</svg>
				<svg class="Path_10128" viewBox="0 9.875 12.982 9.33">
					<path id="Path_10128" d="M 11.8961763381958 15.15535354614258 L 3.25652551651001 10.16667175292969 C 2.218478679656982 9.567153930664062 0.8909898996353149 9.922721862792969 0.2915276288986206 10.96080017089844 C -0.3079350590705872 11.99888038635254 0.04763362929224968 13.32636833190918 1.08571183681488 13.92582893371582 L 9.726251602172852 18.91446113586426 C 10.7642993927002 19.51397132873535 12.09178733825684 19.15840148925781 12.69124984741211 18.12032508850098 C 13.29071044921875 17.08224678039551 12.93514442443848 15.7547607421875 11.89706516265869 15.15529632568359 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_a">
					<rect id="Transparent_Rectangle_a" rx="0" ry="0" x="0" y="0" width="92" height="92">
					</rect>
				</svg>
			</div>
			<div id="cognitive_b">
				<svg class="Path_10118_c" viewBox="2 2 71.007 71.007">
					<path id="Path_10118_c" d="M 73.006591796875 29.89544677734375 C 73.006591796875 14.48921966552734 60.51737594604492 2.000002384185791 45.11114501953125 2.000002384185791 L 24.82354736328125 2 C 12.21844959259033 2 1.999997615814209 12.2184534072876 2 24.82355308532715 L 2 32.431396484375 C 2 39.43422698974609 7.676916122436523 45.11114501953125 14.67974662780762 45.11114501953125 L 17.46929359436035 45.11114501953125 C 18.6745548248291 51.01567840576172 23.86916542053223 55.25617218017578 29.89545059204102 55.25494384765625 L 33.39505767822266 55.25494384765625 L 43.53886032104492 73.006591796875 L 47.92605209350586 70.47064208984375 L 37.78225326538086 52.99795150756836 C 36.95078277587891 51.32245635986328 35.26462936401367 50.2405891418457 33.39505767822266 50.18304443359375 L 29.89544677734375 50.18304443359375 C 25.69374656677246 50.18304443359375 22.28759765625 46.77689361572266 22.28759765625 42.5751953125 C 22.28759765625 38.37349700927734 25.69374656677246 34.96734619140625 29.89544677734375 34.96734619140625 L 32.431396484375 34.96734619140625 L 32.431396484375 29.89544677734375 L 29.89544677734375 29.89544677734375 C 23.86657333374023 29.89544677734375 18.67283058166504 34.13700485229492 17.46877861022949 40.04178619384766 L 14.67974853515625 40.03924560546875 C 10.47805118560791 40.03924560546875 7.071902275085449 36.63309860229492 7.071900367736816 32.43140029907227 L 7.0718994140625 27.3594970703125 L 12.143798828125 27.3594970703125 C 16.34549903869629 27.3594970703125 19.75164794921875 23.95334815979004 19.75164794921875 19.75164794921875 L 19.75164794921875 17.2156982421875 L 14.67974853515625 17.2156982421875 L 14.67974853515625 19.75164794921875 C 14.67974853515625 21.1522159576416 13.54436492919922 22.28759765625 12.143798828125 22.28759765625 L 7.274775505065918 22.28759765625 C 8.534266471862793 13.56157684326172 16.00711631774902 7.082231521606445 24.82355308532715 7.0718994140625 L 40.03924560546875 7.0718994140625 L 40.03924560546875 12.143798828125 C 40.03924560546875 13.54436492919922 38.90386199951172 14.67974853515625 37.5032958984375 14.67974853515625 L 32.431396484375 14.67974853515625 L 32.431396484375 19.75164794921875 L 37.5032958984375 19.75164794921875 C 41.70499420166016 19.75164794921875 45.11114501953125 16.34549713134766 45.11114501953125 12.143798828125 L 45.11114501953125 7.0718994140625 C 53.77030181884766 7.083699226379395 61.67703247070312 11.99471187591553 65.52553558349609 19.75164985656738 L 62.86279296875 19.75164794921875 C 58.66109466552734 19.75164794921875 55.25494384765625 23.15779876708984 55.25494384765625 27.35949897766113 L 55.25494384765625 29.89544677734375 L 60.32684326171875 29.89544677734375 L 60.32684326171875 27.3594970703125 C 60.32684326171875 25.95892906188965 61.46222686767578 24.82354736328125 62.86279296875 24.82354736328125 L 67.35142517089844 24.82354736328125 C 67.7401123046875 26.48614883422852 67.93582916259766 28.18801879882812 67.9346923828125 29.89544677734375 L 67.9346923828125 32.431396484375 C 67.9346923828125 39.43422698974609 62.25777435302734 45.11114501953125 55.25494384765625 45.11114501953125 L 47.6470947265625 45.11114501953125 L 47.6470947265625 50.18304443359375 L 55.25494384765625 50.18304443359375 C 57.88739013671875 50.17943572998047 60.48607635498047 49.59040451049805 62.86279296875 48.45860290527344 L 62.86279296875 50.18304443359375 C 62.86279296875 54.38474273681641 59.45664215087891 57.7908935546875 55.25494384765625 57.7908935546875 L 52.718994140625 57.7908935546875 L 52.718994140625 62.86279296875 L 55.25494384765625 62.86279296875 C 62.25777435302734 62.86280059814453 67.9346923828125 57.18587875366211 67.9346923828125 50.18304824829102 L 67.9346923828125 44.83218765258789 C 71.18021392822266 41.51976013183594 73.00064849853516 37.06880187988281 73.00659942626953 32.431396484375 L 73.006591796875 29.89544677734375 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_d">
					<rect id="Transparent_Rectangle_d" rx="0" ry="0" x="0" y="0" width="81" height="81">
					</rect>
				</svg>
			</div>
		</div>
	</div>
	<div id="Group_10824_e">
		<div id="Group_10816_f">
			<svg class="Rectangle_358_g">
				<rect id="Rectangle_358_g" rx="0" ry="0" x="0" y="0" width="682" height="454">
				</rect>
			</svg>
			<div id="See_your_ideas_transform_into_">
				<span>See your ideas transform into reality by collaborating with the brightest minds in the UK</span>
			</div>
			<div id="Benefits_03_i">
				<span>Benefits </span><span style="font-size:22px;">03.</span>
			</div>
		</div>
	</div>
	<div id="Group_10827_j">
		<svg class="Rectangle_356_k">
			<rect id="Rectangle_356_k" rx="0" ry="0" x="0" y="0" width="469" height="342">
			</rect>
		</svg>
		<svg class="Rectangle_361_l">
			<rect id="Rectangle_361_l" rx="0" ry="0" x="0" y="0" width="469" height="454">
			</rect>
		</svg>
		<div id="Explore_collaboration_with_IBM">
			<span>Explore collaboration with IBM via our Business Partner Community</span>
		</div>
		<div id="Benefits_04_n">
			<span>Benefits </span><span style="font-size:22px;">04.</span>
		</div>
	</div>
	<div id="Group_10823_o">
		<div id="Group_10818_p">
			<svg class="Rectangle_359_q">
				<rect id="Rectangle_359_q" rx="0" ry="0" x="0" y="0" width="681" height="306">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Get_in_touch_r">
		<span>Get in touch</span>
	</div>
	<div id="email_s">
		<svg class="Path_10103_t" viewBox="2 6 32.163 22.974">
			<path id="Path_10103_t" d="M 31.86572265625 6 L 4.29736328125 6 C 3.028564691543579 6 1.999999642372131 7.028564453125 1.99999988079071 8.29736328125 L 1.99999988079071 26.67626762390137 C 1.99999988079071 27.94506645202637 3.028564214706421 28.97363090515137 4.297362804412842 28.97363090515137 L 31.86572265625 28.97363090515137 C 33.134521484375 28.97363090515137 34.16308212280273 27.94506645202637 34.16308212280273 26.67626762390137 L 34.16308212280273 8.29736328125 C 34.16308212280273 7.028564453125 33.13451766967773 6 31.86572265625 6 Z M 29.338623046875 8.29736328125 L 18.08154296875 16.08542442321777 L 6.824462890625 8.29736328125 L 29.338623046875 8.29736328125 Z M 4.29736328125 26.67626762390137 L 4.29736328125 9.342663764953613 L 17.42679405212402 18.42873382568359 C 17.820556640625 18.70189666748047 18.342529296875 18.70189666748047 18.73629188537598 18.42873382568359 L 31.86572265625 9.342663764953613 L 31.86572265625 26.67626762390137 L 4.29736328125 26.67626762390137 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_x">
			<rect id="Transparent_Rectangle_x" rx="0" ry="0" x="0" y="0" width="37" height="37">
			</rect>
		</svg>
	</div>
	<a href="mailto:j0nnymac@uk.ibm.com">
	<div id="Email_j0nnymacukibmcom_v">
		<span>Email: j0nnymac@uk.ibm.com</span>
	</div>
</a>
	<div id="John_McNamara_IBM_UK_w">
		<span>John McNamara (IBM UK)</span>
	</div>
	<a href="mailto:d.mohamedally@ucl.ac.uk">
	<div id="Email_dmohamedallyuclacuk_x">
		<span>Email: d.mohamedally@ucl.ac.uk</span>
	</div>
</a>
	<div id="Dr_Dean_Mohamedally_NF_IXN_y">
		<span>Dr. Dean Mohamedally (NF IXN)</span>
	</div>
	<div id="Submit_a_Project_Request_z">
		<span>Submit a Project Request</span>
	</div>
	<div id="crop-growth">
		<svg class="Path_10129" viewBox="2 4 107.32 91.989">
			<path id="Path_10129" d="M 93.98881530761719 38.49580764770508 C 102.4522171020508 38.48629760742188 109.3107757568359 31.62773323059082 109.3202896118164 23.16433525085449 L 109.3202896118164 11.66573524475098 L 97.82168579101562 11.66573524475098 C 93.89740753173828 11.67214298248291 90.12664031982422 13.19099617004395 87.29355621337891 15.90642166137695 C 83.24987030029297 8.568160057067871 75.53737640380859 4.007498264312744 67.15874481201172 4.000001907348633 L 55.6601448059082 4 L 55.6601448059082 15.49860286712646 C 55.6740837097168 28.19383430480957 65.96212005615234 38.48186874389648 78.6573486328125 38.49580764770508 L 82.49021148681641 38.49580764770508 L 82.49021148681641 88.32308197021484 L 36.49580383300781 88.32308197021484 L 36.49580383300781 69.15874481201172 L 40.32867431640625 69.15874481201172 C 48.79207229614258 69.14923858642578 55.6506462097168 62.29067230224609 55.6601448059082 53.8272705078125 L 55.6601448059082 42.32867813110352 L 44.16154098510742 42.32867813110352 C 40.23727798461914 42.33508682250977 36.46650314331055 43.85394287109375 33.63342666625977 46.56935882568359 C 29.58972549438477 39.23109817504883 21.87723922729492 34.67043304443359 13.49860191345215 34.66294097900391 L 2 34.66294097900391 L 2 46.16154098510742 C 2.013944864273071 58.85677719116211 12.30198383331299 69.14480590820312 24.99721145629883 69.15874481201172 L 28.83007049560547 69.15874481201172 L 28.83007049560547 88.32308197021484 L 2 88.32308197021484 L 2 95.98882293701172 L 109.3202896118164 95.98882293701172 L 109.3202896118164 88.32308197021484 L 90.15595245361328 88.32308197021484 L 90.15595245361328 38.49580764770508 L 93.98881530761719 38.49580764770508 Z M 90.15595245361328 26.99720573425293 C 90.16017150878906 22.76528739929199 93.58976745605469 19.33570098876953 97.82168579101562 19.33147430419922 L 101.6545486450195 19.33147048950195 L 101.6545486450195 23.16433906555176 C 101.6503219604492 27.39624977111816 98.22074127197266 30.82584571838379 93.98881530761719 30.8300724029541 L 90.15595245361328 30.8300724029541 L 90.15595245361328 26.99720573425293 Z M 36.49580383300781 57.66014099121094 C 36.50003433227539 53.42823028564453 39.92963027954102 49.99863815307617 44.16154479980469 49.99441146850586 L 47.99441146850586 49.99441146850586 L 47.99441146850586 53.82727813720703 C 47.99018096923828 58.05918884277344 44.56059265136719 61.4887809753418 40.32867431640625 61.49300384521484 L 36.49580383300781 61.49301147460938 L 36.49580383300781 57.66014099121094 Z M 28.83007049560547 61.49301147460938 L 24.99720573425293 61.49301147460938 C 16.53381156921387 61.48350524902344 9.67524242401123 54.62493896484375 9.665737152099609 46.16153717041016 L 9.665735244750977 42.32867813110352 L 13.49860286712646 42.32867813110352 C 21.96199607849121 42.33817672729492 28.82056617736816 49.19674682617188 28.83007049560547 57.66014099121094 L 28.83007049560547 61.49301147460938 Z M 82.49021148681641 30.8300724029541 L 78.6573486328125 30.8300724029541 C 70.19395446777344 30.8205738067627 63.33538055419922 23.96200180053711 63.32588195800781 15.49860572814941 L 63.32588195800781 11.66573524475098 L 67.15874481201172 11.66573524475098 C 75.62213897705078 11.67524147033691 82.480712890625 18.53380966186523 82.49021148681641 26.99720573425293 L 82.49021148681641 30.8300724029541 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_">
			<rect id="Transparent_Rectangle_" rx="0" ry="0" x="0" y="0" width="123" height="123">
			</rect>
		</svg>
	</div>
	<div id="collaborate">
		<svg class="Path_10130" viewBox="4 20 34.326 27.461">
			<path id="Path_10130" d="M 10.8652982711792 23.43265151977539 L 10.8652982711792 20 L 3.999999761581421 20 L 3.999999761581421 23.43265151977539 C 4.000003814697266 36.70324325561523 14.75794506072998 47.46118927001953 28.02854156494141 47.46118927001953 L 38.32649230957031 47.46118927001953 L 38.32649230957031 40.59589767456055 L 28.02854156494141 40.59589767456055 C 18.54954528808594 40.59589767456055 10.86529922485352 32.91165161132812 10.8652982711792 23.43266296386719 Z">
			</path>
		</svg>
		<svg class="Path_10131" viewBox="16 4 34.326 27.461">
			<path id="Path_10131" d="M 43.4611930847168 28.02854156494141 L 43.4611930847168 31.46118927001953 L 50.32649230957031 31.46118927001953 L 50.32649230957031 28.02854156494141 C 50.32649230957031 14.75794792175293 39.56854629516602 4.000003814697266 26.29794502258301 4.000003814697266 L 15.99999904632568 3.999999761581421 L 15.99999904632568 10.8652982711792 L 26.29794502258301 10.8652982711792 C 35.77695083618164 10.8652982711792 43.4611930847168 18.54954528808594 43.4611930847168 28.02854347229004 Z">
			</path>
		</svg>
		<svg class="Path_10132" viewBox="2 11 41.192 17.163">
			<path id="Path_10132" d="M 32.89384078979492 10.99999904632568 L 12.29794692993164 10.99999904632568 C 6.610547065734863 11.00000190734863 1.999998211860657 15.61055374145508 2.000000238418579 21.29795265197754 L 2.000000238418579 28.16324424743652 L 8.865298271179199 28.16324424743652 L 8.865298271179199 21.29794692993164 C 8.865298271179199 19.40214538574219 10.4021463394165 17.86529922485352 12.29794692993164 17.86529922485352 L 32.89384078979492 17.86529922485352 C 34.78964233398438 17.86529922485352 36.32648849487305 19.40214920043945 36.32648849487305 21.29794692993164 L 36.32648849487305 28.16324424743652 L 43.1917839050293 28.16324424743652 L 43.1917839050293 21.29794692993164 C 43.19179153442383 15.61054992675781 38.58123779296875 10.99999904632568 32.89384078979492 11.00000190734863 Z">
			</path>
		</svg>
		<svg class="Path_10133" viewBox="4 2 27.461 27.461">
			<path id="Path_10133" d="M 17.7305965423584 29.46119117736816 C 25.31379127502441 29.46119117736816 31.46118927001953 23.31379318237305 31.46118927001953 15.73059463500977 C 31.46118927001953 8.147397041320801 25.31379127502441 1.999998331069946 17.73059463500977 2.000000238418579 C 10.14739799499512 2.000000238418579 3.999998807907104 8.147398948669434 3.999999761581421 15.7305965423584 C 3.999999761581421 23.31379318237305 10.14739608764648 29.46119117736816 17.73059463500977 29.46119117736816 Z M 17.7305965423584 8.865298271179199 C 21.52219390869141 8.865298271179199 24.59589195251465 11.93899631500244 24.59589195251465 15.73059463500977 C 24.59589195251465 19.52219581604004 21.52219390869141 22.59589385986328 17.7305965423584 22.59589385986328 C 13.93899631500244 22.59589385986328 10.8652982711792 19.52219581604004 10.8652982711792 15.73059463500977 C 10.8652982711792 11.93899631500244 13.93899631500244 8.865297317504883 17.7305965423584 8.865298271179199 Z">
			</path>
		</svg>
		<svg class="Path_10134" viewBox="18 25 41.192 17.163">
			<path id="Path_10134" d="M 48.89383697509766 25 L 28.29794692993164 25 C 22.61054611206055 25 18 29.61055374145508 18 35.29795074462891 L 18 42.16323471069336 L 24.86529922485352 42.16323471069336 L 24.86529922485352 35.29794311523438 C 24.86529922485352 33.40214538574219 26.40214920043945 31.86529159545898 28.29794692993164 31.86529159545898 L 48.89383697509766 31.86529159545898 C 50.78963470458984 31.86529159545898 52.32648849487305 33.40214538574219 52.32648849487305 35.29794311523438 L 52.32648849487305 42.16323471069336 L 59.19178009033203 42.16323471069336 L 59.19178009033203 35.29794311523438 C 59.19178009033203 29.61055374145508 54.58123779296875 25 48.89383697509766 25 Z">
			</path>
		</svg>
		<svg class="Path_10135" viewBox="20 16 27.461 27.461">
			<path id="Path_10135" d="M 20 29.7305965423584 C 20 37.31379318237305 26.14739608764648 43.4611930847168 33.73059463500977 43.4611930847168 C 41.31379318237305 43.4611930847168 47.46118927001953 37.31379318237305 47.46118927001953 29.7305965423584 C 47.46118927001953 22.14739608764648 41.31379318237305 15.99999904632568 33.73059463500977 15.99999904632568 C 26.14739608764648 15.99999904632568 20 22.14739608764648 20 29.7305965423584 Z M 40.59589767456055 29.7305965423584 C 40.59589767456055 33.52219772338867 37.52219009399414 36.59589004516602 33.73059463500977 36.59589004516602 C 29.93899154663086 36.59589004516602 26.86529731750488 33.52218627929688 26.86529731750488 29.7305965423584 C 26.86529731750488 25.93899154663086 29.93899917602539 22.86529922485352 33.73059463500977 22.86529922485352 C 37.52219772338867 22.86529922485352 40.59589767456055 25.93899917602539 40.59589767456055 29.7305965423584 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_b">
			<rect id="Transparent_Rectangle_b" rx="0" ry="0" x="0" y="0" width="109" height="109">
			</rect>
		</svg>
	</div>
	<div id="Do_you_have_a_project_idea_to__b">
		<span>Do you have a project idea to be taken by IBM IXN?<br/>Please submit a project request from here by clicking the button below!</span>
	</div>
	<div id="Group_10867">
		<div id="Group_10809_d">
			<div id="Button_-_Default_e" class="Button___Default">
				<svg class="Path_361_v" viewBox="0 -640 173 48">
					<path id="Path_361_v" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_x">
					<div id="Group_x">
						<div id="Find_out_more_s">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_j" class="arrow__right">
			<svg class="Path_10090_k" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_k" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_o">
				<rect id="Transparent_Rectangle_o" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="Group_10865">
			<div id="Button_-_Default_o" class="Button___Default">
				<svg class="Path_361_v" viewBox="0 -640 173 48">
					<path id="Path_361_v" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_x">
					<div id="Group_x">
						<div id="Find_out_more_s">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="Group_10866">
			<div id="Button_-_Default_t" class="Button___Default">
				<svg class="Path_361_v" viewBox="0 -640 173 48">
					<path id="Path_361_v" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_x">
					<div id="Group_x">
						<div id="Find_out_more_x">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="arrow--right_y" class="arrow__right">
		<svg class="Path_10090_z" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_z" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_c">
			<rect id="Transparent_Rectangle_c" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
<!-- 	<img id="Screen_Shot_2021-03-31_at_1453_" src="images/Screen_Shot_2021-03-31_at_1453_.png" srcset="images/Screen_Shot_2021-03-31_at_1453_.png 1x, images/Screen_Shot_2021-03-31_at_1453_@2x.png 2x"> -->

	<svg class="Rectangle_335_">
		<rect id="Rectangle_335_" rx="0" ry="0" x="0" y="0" width="1920" height="440">
		</rect>
	</svg>
	<div id="Group_10802_">
		<a href="mailto:j0nnymac@uk.ibm.com">
		<div id="Button_-_Default_" class="Button___Default">
			<svg class="Path_361_" viewBox="0 -640 217.497 48">
				<path id="Path_361_" d="M 0 -592 L 217.4970703125 -592 L 217.4970703125 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_">
				<div id="Group_">
					<div id="Get_in_touch_">
						<span>Get in touch</span>
					</div>
				</div>
			</div>
		</div>
	</a>
		<div id="arrow--right_">
			<svg class="Path_10090_a" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_a" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_e">
				<rect id="Transparent_Rectangle_e" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_k" class="arrow__right">
			<svg class="Path_10090_d" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_d" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_j">
				<rect id="Transparent_Rectangle_j" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_k" class="arrow__right">
			<svg class="Path_10090_g" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_g" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="mailto:j0nnymac@uk.ibm.com">
			<svg class="Transparent_Rectangle_j">
				<rect id="Transparent_Rectangle_j" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Our_partnership_with_the_Natio_i">
		<span>Our partnership with the National Framework for IXNs empowers university students with the opportunity to build innovative, <br/>open-source projects that solves real-world problems </span>
	</div>
	<div id="Group_10142_j">
		<div id="IBMs_contribution_to_education_k">
			<span>IBM’s contribution to education<br/>with IBM Industry Exchange Network (IBM IXN) </span>
		</div>
	</div>
	<svg class="Line_5_l" viewBox="0 0 211.5 2">
		<path id="Line_5_l" d="M 0 0 L 211.5 0">
		</path>
	</svg>
	<div id="ID04_Directory_m">
		<span>04. Directory</span>
	</div>
	<svg class="Line_7_n" viewBox="0 0 455.5 1">
		<path id="Line_7_n" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<svg class="Line_8_o" viewBox="0 0 455 1">
		<path id="Line_8_o" d="M 0 0 L 455 0">
		</path>
	</svg>
	<div id="Contact_Us_p">
		<span>Contact Us</span>
	</div>
	<div id="Sign_up_to_Newsletter_q">
		<span>Sign up to Newsletter</span>
	</div>
	<svg class="Line_9_r" viewBox="0 0 455.5 1">
		<path id="Line_9_r" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Submit_a_Project_Request_s">
		<span>Submit a Project Request</span>
	</div>
	<svg class="Line_10_u" viewBox="0 0 455.5 1">
		<path id="Line_10_u" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Projects_Archives_u">
		<span>Projects Archives</span>
	</div>
	<div id="Email_j0nnymacukibmcom_w">
		<span>Email: j0nnymac@uk.ibm.com</span>
	</div>
	<div id="John_McNamara_IBM_UK_x">
		<span>John McNamara (IBM UK)</span>
	</div>
	<div id="You_can_sign_up_to_our_Newslet_x">
		<span>You can sign up to our Newsletter that will provide you with a <br/>regular update on IBM IXN, from the latest projects to upcoming<br/>events. </span>
	</div>
	<div id="To_view_the_full_projects_arch_y">
		<span>To view the full projects archives by the IBM IXN, please click the<br/>button below.</span>
	</div>
	<div id="Do_you_have_a_project_idea_to__z">
		<span>Do you have a project idea to be taken by the IBM IXN? Please <br/>submit a project request from here by clicking the button below!<br/></span><br>
	</div>
	<div id="Group_10809_">
		<a href="mailto:j0nnymac@uk.ibm.com">
		<div id="Button_-_Default_a" class="Button___Default">
			<svg class="Path_361_a" viewBox="0 -640 173 48">
				<path id="Path_361_a" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_a">
				<div id="Group_a">
					<div id="Get_in_Touch_">
						<span>Get in Touch</span>
					</div>
				</div>
			</div>
		</div>
	</a>
	</div>
	<div id="arrow--right_b" class="arrow__right">
		<svg class="Path_10090_" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_p">
			<rect id="Transparent_Rectangle_p" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
	<div id="arrow--right_b" class="arrow__right">
		<svg class="Path_10090_b" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_b" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<a href="mailto:j0nnymac@uk.ibm.com">
		<svg class="Transparent_Rectangle_p">
			<rect id="Transparent_Rectangle_p" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</a>
	</div>
	<div id="Group_10809_c" onclick="location.href='https://members-engine.azurewebsites.net/';" style="cursor: pointer;">
		<div id="Button_-_Default_d" class="Button___Default">
			<svg class="Path_361_e" viewBox="0 -640 173 48">
				<path id="Path_361_e" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_f">
				<div id="Group_j">
					<div id="Sign_Up_h">
						<span>Sign Up</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="arrow--right_p" class="arrow__right">
		<svg class="Path_10090_j" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_j" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_baa">
			<rect id="Transparent_Rectangle_baa" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
	<div id="arrow--right_p" class="arrow__right">
		<svg class="Path_10090_o" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_o" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_baa">
			<rect id="Transparent_Rectangle_baa" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
			<div id="Group_10809_o" onclick="location.href='http://88.80.189.233/login/?next=/';" style="cursor: pointer;">
		<div id="Button_-_Default_r" class="Button___Default">
			<svg class="Path_361_s" viewBox="0 -640 173 48">
				<path id="Path_361_s" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_s">
				<div id="Group_u">
					<div id="Submit_a_Request_t">
						<span>Submit a Request</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="arrow--right_z" class="arrow__right">
		<svg class="Path_10090_x" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_x" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_bac">
			<rect id="Transparent_Rectangle_bac" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
	<div id="arrow--right_z" class="arrow__right">
		<svg class="Path_10090_y" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_y" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_bac">
			<rect id="Transparent_Rectangle_bac" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
	<div id="Group_10809_a" onclick="window.location='ProjectsArchives.php';">
		<div id="Button_-_Default_b" class="Button___Default">
			<svg class="Path_361_b" viewBox="0 -640 173 48">
				<path id="Path_361_b" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_b">
				<div id="Group_b">
					<div id="View_Archives_">
						<span>View Archives</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="arrow--right_e" class="arrow__right">
		<svg class="Path_10090_c" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_c" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_bae">
			<rect id="Transparent_Rectangle_bae" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
	<div id="arrow--right_e" class="arrow__right">
		<svg class="Path_10090_e" viewBox="4 6 17.99 14.992">
			<path id="Path_10090_e" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_bae">
			<rect id="Transparent_Rectangle_bae" onclick="window.location='ProjectsArchives.php';" rx="0" ry="0" x="0" y="0" width="24" height="24">
			</rect>
		</svg>
	</div>
</div>
</body>
</html>
