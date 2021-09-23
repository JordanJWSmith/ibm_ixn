<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>For Universities</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<style id="applicationStylesheet" type="text/css">
@font-face {
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  src: url('fonts/IBMPlexSans-Regular.ttf');

}
	.mediaViewInfo {
		--web-view-name: Home_ForUniversities;
		--web-view-id: Home_ForUniversities;
		--web-scale-to-fit: true;
		--web-scale-to-fit-type: width;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Home_ForUniversities;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}

	#Home_ForUniversities {
		position: absolute;
		width: 1920px;
		height: 4262px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Home_ForUniversities;
		--web-view-id: Home_ForUniversities;
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
		left: 350.321px;
		top: 2250px;
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
	top: 2245px;
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
	#Screen_Shot_2021-03-31_at_1453_of {
		position: absolute;
		width: 1920px;
		height: 38px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_335_og {
		fill: rgba(17,88,37,1);
		stroke: rgba(1,1,1,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_335_og {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 423px;
		left: 0px;
		top: 0px;
	}
	#Group_10802_oh {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 354px;
		top: 357px;
		overflow: visible;
	}
	#Button_-_Default_oi {
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_oj {
		fill: rgba(242,245,247,1);
	}
	.Path_361_oj {
		overflow: visible;
		position: absolute;
		width: 217.497px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_ok {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 16px;
		top: 15px;
		overflow: visible;
	}
	#Group_ol {
		position: absolute;
		width: 76px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_touch_om {
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
	#arrow--right_on {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_oo {
		fill: rgba(242,245,247,1);
	}
	.Path_10090_oo {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_op {
		fill: transparent;
	}
	.Transparent_Rectangle_op {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ot {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_or {
		fill: rgba(242,245,247,1);
	}
	.Path_10090_or {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ov {
		fill: transparent;
	}
	.Transparent_Rectangle_ov {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ot {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 178px;
		top: 13px;
		overflow: visible;
	}
	#Path_10090_ou {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_ou {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_ov {
		fill: transparent;
	}
	.Transparent_Rectangle_ov {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Our_partnership_with_the_Natio_ow {
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
	#Group_10142_ox {
		position: absolute;
		width: 955px;
		height: 110px;
		left: 354px;
		top: 108px;
		overflow: visible;
	}
	#IBMs_contribution_to_education_oy {
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
	#Group_10180_oz {
		position: absolute;
		width: 195px;
		height: 37px;
		left: 354px;
		top: 519px;
		overflow: visible;
	}
	#For_Universities_o {
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
	#The_IBM_IXN_is_an_opportunity_ {
		left: 354px;
		top: 575px;
		position: absolute;
		overflow: visible;
		width: 1164px;
		height: 107px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(22,22,22,1);
	}
	#Rectangle_360 {
		fill: rgba(17,88,37,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_360 {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 306px;
		left: 1071px;
		top: 1757px;
	}
	#Group_10825 {
		position: absolute;
		width: 462px;
		height: 473px;
		left: 354px;
		top: 757px;
		overflow: visible;
	}
	#Group_10814 {
		position: absolute;
		width: 462px;
		height: 473px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_355 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_355 {
		position: absolute;
		overflow: visible;
		width: 462px;
		height: 473px;
		left: 0px;
		top: 0px;
	}
	#Free_Access_to_IBM_Technology_ {
		left: 27px;
		top: 289px;
		position: absolute;
		overflow: visible;
		width: 402px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#IBM_Watson {
		left: 329px;
		top: 197px;
		position: absolute;
		overflow: visible;
		width: 104px;
		height: 43px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(17,88,37,1);
	}
	#IBM_Cloud {
		left: 45px;
		top: 197px;
		position: absolute;
		overflow: visible;
		width: 84px;
		height: 23px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(17,88,37,1);
	}
	#IBM_Security {
		left: 177px;
		top: 197px;
		position: absolute;
		overflow: visible;
		width: 98px;
		height: 23px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(17,88,37,1);
	}
	#Group_10810 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 28px;
		top: 392px;
		overflow: visible;
	}
	#Group_10809_pb {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_pn {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_po {
		fill: rgba(243,243,243,1);
	}
	.Path_361_po {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_pp {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_pq {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_pr {
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
	#arrow--right_ph {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_pt {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_pt {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_pu {
		fill: transparent;
	}
	.Transparent_Rectangle_pu {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Benefits_01 {
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
	#Group_10819 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 28px;
		top: 392px;
		overflow: visible;
	}
	#Group_10809_pm {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_pn {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_po {
		fill: rgba(243,243,243,1);
	}
	.Path_361_po {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_pp {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_pq {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_pr {
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
	#arrow--right_ps {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_pt {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_pt {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_pu {
		fill: transparent;
	}
	.Transparent_Rectangle_pu {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10826 {
		position: absolute;
		width: 693px;
		height: 473px;
		left: 847px;
		top: 757px;
		overflow: visible;
	}
	#Group_10815 {
		position: absolute;
		width: 693px;
		height: 473px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_357 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_357 {
		position: absolute;
		overflow: visible;
		width: 693px;
		height: 473px;
		left: 0px;
		top: 0px;
	}
	#Provide_students_free_access_t {
		left: 30px;
		top: 289px;
		position: absolute;
		overflow: visible;
		width: 583px;
		white-space: nowrap;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Group_10812 {
		position: absolute;
		width: 516px;
		height: 160px;
		left: 63px;
		top: 62px;
		overflow: visible;
	}
	#Image_1_p {
		position: absolute;
		width: 156px;
		height: 156px;
		left: 360px;
		top: 3px;
		overflow: visible;
	}
	#Image_2_p {
		position: absolute;
		width: 148px;
		height: 148px;
		left: 299px;
		top: 7px;
		overflow: visible;
	}
	#Image_2_qa {
		position: absolute;
		width: 148px;
		height: 148px;
		left: 225px;
		top: 4px;
		overflow: visible;
	}
	#Image_1_qa {
		position: absolute;
		width: 156px;
		height: 156px;
		left: 143px;
		top: 0px;
		overflow: visible;
	}
	#Image_2_qb {
		position: absolute;
		width: 148px;
		height: 148px;
		left: 82px;
		top: 4px;
		overflow: visible;
	}
	#Image_1_qb {
		position: absolute;
		width: 156px;
		height: 156px;
		left: 0px;
		top: 4px;
		overflow: visible;
	}
	#Benefits_02 {
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
	#Group_10811 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 31px;
		top: 392px;
		overflow: visible;
	}
	#Group_10809_p {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_p {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_qa {
		fill: rgba(243,243,243,1);
	}
	.Path_361_qa {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_qb {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_qc {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_qd {
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
	#arrow--right_qe {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_qf {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_qf {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_qg {
		fill: transparent;
	}
	.Transparent_Rectangle_qg {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10824 {
		position: absolute;
		width: 682px;
		height: 311px;
		left: 354px;
		top: 1264px;
		overflow: visible;
	}
	#Group_10816 {
		position: absolute;
		width: 682px;
		height: 311px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_358 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_358 {
		position: absolute;
		overflow: visible;
		width: 682px;
		height: 311px;
		left: 0px;
		top: 0px;
	}
	#Collaboration_with_universitie {
		left: 24px;
		top: 107px;
		position: absolute;
		overflow: visible;
		width: 599px;
		height: 162px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Benefits_03 {
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
	#Group_10827 {
		position: absolute;
		width: 469px;
		height: 464px;
		left: 1071px;
		top: 1264px;
		overflow: visible;
	}
	#Rectangle_356 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_356 {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 363px;
		left: 0px;
		top: 0px;
	}
	#Rectangle_361 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_361 {
		position: absolute;
		overflow: visible;
		width: 469px;
		height: 464px;
		left: 0px;
		top: 0px;
	}
	#Access_to_IBM_Subject_Matter_E {
		left: 28px;
		top: 244px;
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
	#Benefits_04 {
		left: 20px;
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
	#Group_10823 {
		position: absolute;
		width: 681px;
		height: 454px;
		left: 354px;
		top: 1609px;
		overflow: visible;
	}
	#Group_10818 {
		position: absolute;
		width: 681px;
		height: 454px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_359 {
		fill: rgba(243,243,243,1);
		stroke: rgba(242,244,248,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_359 {
		position: absolute;
		overflow: visible;
		width: 681px;
		height: 454px;
		left: 0px;
		top: 0px;
	}
	#Access_to_UCLs_IXN_Framework_f {
		left: 27px;
		top: 229px;
		position: absolute;
		overflow: visible;
		width: 626px;
		height: 126px;
		text-align: left;
		font-family: IBM Plex Sans;
		font-style: normal;
		font-weight: bold;
		font-size: 28px;
		color: rgba(22,22,22,1);
	}
	#Image_6 {
		position: absolute;
		width: 242px;
		height: 105px;
		left: 220px;
		top: 84px;
		overflow: visible;
	}
	#Benefits_05 {
		left: 16px;
		top: 18px;
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
	#Group_10809_q {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 27px;
		top: 355px;
		overflow: visible;
	}
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#arrow--right_r {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 161px;
		top: 367px;
		overflow: visible;
	}
	#Path_10090_r {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_r {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_r {
		fill: transparent;
	}
	.Transparent_Rectangle_r {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_q {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 27px;
		top: 355px;
		overflow: visible;
	}
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#arrow--right_r {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 161px;
		top: 367px;
		overflow: visible;
	}
	#Path_10090_r {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_r {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_r {
		fill: transparent;
	}
	.Transparent_Rectangle_r {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_rt {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 27px;
		top: 355px;
		overflow: visible;
	}
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#arrow--right_r {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 161px;
		top: 367px;
		overflow: visible;
	}
	#Path_10090_r {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_r {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_r {
		fill: transparent;
	}
	.Transparent_Rectangle_r {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10809_rt {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 27px;
		top: 355px;
		overflow: visible;
	}
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#Button_-_Default_rz {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_r {
		fill: rgba(243,243,243,1);
	}
	.Path_361_r {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_r {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_r {
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
	#arrow--right_r {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 161px;
		top: 367px;
		overflow: visible;
	}
	#Path_10090_r {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_r {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_r {
		fill: transparent;
	}
	.Transparent_Rectangle_r {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_sa {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 161px;
		top: 368px;
		overflow: visible;
	}
	#Path_10090_sa {
		fill: rgba(255,255,255,1);
	}
	.Path_10090_sa {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_sa {
		fill: transparent;
	}
	.Transparent_Rectangle_sa {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Line_6_sa {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_6_sa {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 367px;
		top: 2182.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects_Archives_sb {
		left: 367px;
		top: 2200px;
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
	#Project_Title_sc {
		left: 602px;
		top: 2544px;
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
	#Screenshot_2021-02-26_at_17040_sd {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2269px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_se {
		left: 602px;
		top: 2876px;
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
	#Screenshot_2021-02-26_at_17040_sf {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2601px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_sg {
		left: 1085px;
		top: 2544px;
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
	#Screenshot_2021-02-26_at_17040_sh {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2269px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_si {
		left: 1085px;
		top: 2876px;
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
	#Screenshot_2021-02-26_at_17040_sj {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2601px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_sk {
		left: 602px;
		top: 3208px;
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
	#Screenshot_2021-02-26_at_17040_sl {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 602px;
		top: 2933px;
		overflow: visible;
		cursor: pointer;
	}
	#Project_Title_sm {
		left: 1085px;
		top: 3208px;
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
	#Screenshot_2021-02-26_at_17040_sn {
		position: absolute;
		width: 455px;
		height: 255px;
		left: 1085px;
		top: 2933px;
		overflow: visible;
		cursor: pointer;
	}
	#Search_Bar_so {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 602px;
		top: 2200px;
		overflow: visible;
	}
	#Group_10619_sp {
		position: absolute;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Rectangle_296_sq {
		fill: rgba(243,243,243,1);
	}
	.Rectangle_296_sq {
		position: absolute;
		overflow: visible;
		width: 771px;
		height: 49px;
		left: 0px;
		top: 0px;
	}
	#search__large_sr {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 19px;
		top: 16px;
		overflow: visible;
	}
	#Icon__Search_-_16_ss {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_2829_st {
		position: absolute;
		width: 16.89px;
		height: 16.89px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search_by_keywords_su {
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
	#Path_5097_sv {
		fill: rgba(141,141,141,1);
	}
	.Path_5097_sv {
		overflow: visible;
		position: absolute;
		width: 771px;
		height: 1px;
		left: 0px;
		top: 48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_10808_sw {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 1381px;
		top: 2201px;
		overflow: visible;
	}
	#Button_-_Default_sx {
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_sy {
		fill: rgba(14,42,59,1);
	}
	.Path_361_sy {
		overflow: visible;
		position: absolute;
		width: 159px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_sz {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_s {
		position: absolute;
		width: 43px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Search_s {
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
		color: rgba(243,243,243,1);
		letter-spacing: 0.01399999976158142px;
	}
	#Pagination_Bar_s {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 602px;
		top: 3251px;
		overflow: visible;
	}
	#Group_4206_s {
		position: absolute;
		width: 938px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_4207_s {
		position: absolute;
		width: 938px;
		height: 0.863px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#ID1__6_of_50_items_s {
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
	#ID6_s {
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
	#Items_per_page_s {
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
	#Group_4213_s {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 895.736px;
		top: 0px;
		overflow: visible;
	}
	#Group_4214_s {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 853.473px;
		top: 0px;
		overflow: visible;
	}
	#Group_4216_ta {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 165.604px;
		top: 0px;
		overflow: visible;
	}
	#Icon_-_Carret--Right__20_tb {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 915.683px;
		top: 23.054px;
		overflow: visible;
	}
	#Group_10684_tc {
		position: absolute;
		width: 122.524px;
		height: 52.258px;
		left: 717.194px;
		top: 0px;
		overflow: visible;
	}
	#of_9_pages_td {
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
	#ID2_te {
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
	#Group_4215_tf {
		position: absolute;
		width: 0.862px;
		height: 52.258px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#chevron--down__20_tg {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 36.873px;
		top: 23.813px;
		overflow: visible;
	}
	#carret--left__20_th {
		position: absolute;
		width: 8.313px;
		height: 14.547px;
		left: 872.341px;
		top: 23.054px;
		overflow: visible;
	}
	#chevron--down__20_ti {
		position: absolute;
		width: 10.781px;
		height: 6.146px;
		left: 138.003px;
		top: 24.365px;
		overflow: visible;
	}
	#Get_in_touch_tj {
		left: 1097px;
		top: 1784px;
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
	#email {
		position: absolute;
		width: 37px;
		height: 37px;
		left: 1479px;
		top: 1778px;
		overflow: visible;
	}
	#Path_10103 {
		fill: rgba(255,255,255,1);
	}
	.Path_10103 {
		overflow: visible;
		position: absolute;
		width: 32.163px;
		height: 22.974px;
		left: 2.539px;
		top: 6.892px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_tm {
		fill: transparent;
	}
	.Transparent_Rectangle_tm {
		position: absolute;
		overflow: visible;
		width: 37px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Email_j0nnymacukibmcom_tn {
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
	#John_McNamara_IBM_UK_to {
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
	#Email_dmohamedallyuclacuk {
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
	#Dr_Dean_Mohamedally_NF_IXN {
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
	#Group_10839_tr {
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
	#Go_back_to_previous_page_ts {
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
	#arrow--left_tt {
		position: absolute;
		width: 25px;
		height: 25px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_10107_tu {
		fill: rgba(14,42,59,1);
	}
	.Path_10107_tu {
		overflow: visible;
		position: absolute;
		width: 18.476px;
		height: 15.396px;
		left: 3.079px;
		top: 4.619px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_tv {
		fill: transparent;
	}
	.Transparent_Rectangle_tv {
		position: absolute;
		overflow: visible;
		width: 25px;
		height: 25px;
		left: 0px;
		top: 0px;
	}
	#credentials {
		position: absolute;
		width: 118px;
		height: 118px;
		left: 1246.999px;
		top: 1344px;
		overflow: visible;
	}
	#Path_10108 {
		fill: rgba(17,88,37,1);
	}
	.Path_10108 {
		overflow: visible;
		position: absolute;
		width: 29.333px;
		height: 29.333px;
		left: 44.669px;
		top: 52.001px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_362 {
		fill: rgba(17,88,37,1);
	}
	.Rectangle_362 {
		position: absolute;
		overflow: visible;
		width: 14px;
		height: 7px;
		left: 52.001px;
		top: 23px;
	}
	#Path_10109 {
		fill: rgba(17,88,37,1);
	}
	.Path_10109 {
		overflow: visible;
		position: absolute;
		width: 73.333px;
		height: 102.666px;
		left: 22.67px;
		top: 8.002px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_t {
		fill: transparent;
	}
	.Transparent_Rectangle_t {
		position: absolute;
		overflow: visible;
		width: 118px;
		height: 118px;
		left: 0.001px;
		top: 0px;
	}
	#Line_5_t {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_5_t {
		overflow: visible;
		position: absolute;
		width: 211.5px;
		height: 2px;
		left: 341.5px;
		top: 3414.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#ID04_Directory_t {
		left: 341.5px;
		top: 3432px;
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
	#Line_7_t {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_7_t {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 589.5px;
		top: 3429.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Line_8_t {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_8_t {
		overflow: visible;
		position: absolute;
		width: 455px;
		height: 1px;
		left: 1073px;
		top: 3429.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Contact_Us_t {
		left: 589.5px;
		top: 3439px;
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
	#Sign_up_to_Newsletter_t {
		left: 1073.5px;
		top: 3439px;
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
	#Line_9_t {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_9_t {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 589.5px;
		top: 3666.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Submit_a_Project_Request_t {
		left: 589.5px;
		top: 3676px;
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
	#Line_10_t {
		fill: transparent;
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_10_t {
		overflow: visible;
		position: absolute;
		width: 455.5px;
		height: 1px;
		left: 1072px;
		top: 3666.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Projects_Archives_ua {
		left: 1073.5px;
		top: 3676px;
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
	#Email_j0nnymacukibmcom_ub {
		left: 589.5px;
		top: 3535px;
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
	#John_McNamara_IBM_UK_uc {
		left: 589.5px;
		top: 3505px;
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
	#You_can_sign_up_to_our_Newslet_ud {
		left: 1073.5px;
		top: 3505px;
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
	#To_view_the_full_projects_arch_ue {
		left: 1074px;
		top: 3737px;
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
	#Do_you_have_a_project_idea_to__uf {
		left: 589.5px;
		top: 3742px;
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
	#Group_10870_ug {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 589.5px;
		top: 3584px;
		overflow: visible;
	}
	#Group_10809_uh {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_ui {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_uj {
		fill: rgba(14,42,59,1);
	}
	.Path_361_uj {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_uk {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_ul {
		position: absolute;
		width: 78px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Get_in_Touch_um {
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
	#arrow--right_uq {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_uo {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_uo {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_us {
		fill: transparent;
	}
	.Transparent_Rectangle_us {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_uq {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ur {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_ur {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_us {
		fill: transparent;
	}
	.Transparent_Rectangle_us {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10871_ut {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1074.5px;
		top: 3585px;
		overflow: visible;
	}
	#Group_10809_uu {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_uv {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_uw {
		fill: rgba(14,42,59,1);
	}
	.Path_361_uw {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_ux {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_uy {
		position: absolute;
		width: 48px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Sign_Up_uz {
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
	#arrow--right_va {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_u {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_u {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_va {
		fill: transparent;
	}
	.Transparent_Rectangle_va {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_va {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_va {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_va {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_va {
		fill: transparent;
	}
	.Transparent_Rectangle_va {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10872_u {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 589.5px;
		top: 3812px;
		overflow: visible;
	}
	#Group_10809_u {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_u {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_u {
		fill: rgba(14,42,59,1);
	}
	.Path_361_u {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_va {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_vb {
		position: absolute;
		width: 111px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Submit_a_Request_vc {
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
	#arrow--right_vg {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_ve {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_ve {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_vi {
		fill: transparent;
	}
	.Transparent_Rectangle_vi {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_vg {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_vh {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_vh {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_vi {
		fill: transparent;
	}
	.Transparent_Rectangle_vi {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10873_vj {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1072.5px;
		top: 3811px;
		overflow: visible;
		cursor: pointer;
	}
	#Group_10809_vk {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_vl {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_vm {
		fill: rgba(14,42,59,1);
	}
	.Path_361_vm {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_vn {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_vo {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#View_Archives_vp {
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
	#arrow--right_vt {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_vr {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_vr {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_vv {
		fill: transparent;
	}
	.Transparent_Rectangle_vv {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_vt {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_vu {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_vu {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_vv {
		fill: transparent;
	}
	.Transparent_Rectangle_vv {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10869_vw {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 376px;
		top: 1956px;
		overflow: visible;
	}
	#Group_10809_vx {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_vy {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_vz {
		fill: rgba(14,42,59,1);
	}
	.Path_361_vz {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_v {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_v {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_v {
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
	#arrow--right_wa {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_v {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_v {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wa {
		fill: transparent;
	}
	.Transparent_Rectangle_wa {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_wa {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_wa {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_wa {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wa {
		fill: transparent;
	}
	.Transparent_Rectangle_wa {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10881 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 381px;
		top: 1152px;
		overflow: visible;
	}
	#Group_10809_wa {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_wb {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_wc {
		fill: rgba(14,42,59,1);
	}
	.Path_361_wc {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_wd {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_we {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_wf {
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
	#arrow--right_wj {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_wh {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_wh {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wl {
		fill: transparent;
	}
	.Transparent_Rectangle_wl {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_wj {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_wk {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_wk {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wl {
		fill: transparent;
	}
	.Transparent_Rectangle_wl {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10882 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 1097px;
		top: 1646px;
		overflow: visible;
	}
	#Group_10809_wn {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_wo {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_wp {
		fill: rgba(14,42,59,1);
	}
	.Path_361_wp {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_wq {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_wr {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_ws {
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
	#arrow--right_ww {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_wu {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_wu {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wy {
		fill: transparent;
	}
	.Transparent_Rectangle_wy {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_ww {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_wx {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_wx {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_wy {
		fill: transparent;
	}
	.Transparent_Rectangle_wy {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#Group_10883 {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 874px;
		top: 1152px;
		overflow: visible;
	}
	#Group_10809_w {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Button_-_Default_w {
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_361_w {
		fill: rgba(14,42,59,1);
	}
	.Path_361_w {
		overflow: visible;
		position: absolute;
		width: 173px;
		height: 48px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_379_w {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 18px;
		top: 15px;
		overflow: visible;
	}
	#Group_w {
		position: absolute;
		width: 88px;
		height: 18px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Find_out_more_w {
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
	#arrow--right_xa {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_w {
		fill: rgba(14,42,59,1);
	}
	.Path_10090_w {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_xb {
		fill: transparent;
	}
	.Transparent_Rectangle_xb {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#arrow--right_xa {
		position: absolute;
		width: 24px;
		height: 24px;
		left: 134px;
		top: 12px;
		overflow: visible;
	}
	#Path_10090_xa {
		fill: rgba(243,243,243,1);
	}
	.Path_10090_xa {
		overflow: visible;
		position: absolute;
		width: 17.99px;
		height: 14.992px;
		left: 3.012px;
		top: 4.511px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_xb {
		fill: transparent;
	}
	.Transparent_Rectangle_xb {
		position: absolute;
		overflow: visible;
		width: 24px;
		height: 24px;
		left: 0px;
		top: 0px;
	}
	#ibm-cloud_1 {
		position: absolute;
		width: 58.016px;
		height: 57.999px;
		left: 404.484px;
		top: 853px;
		overflow: visible;
	}
	#Path_10136 {
		fill: rgba(17,88,37,1);
	}
	.Path_10136 {
		overflow: visible;
		position: absolute;
		width: 57.1px;
		height: 40.795px;
		left: 0.467px;
		top: 15.408px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10137 {
		fill: rgba(17,88,37,1);
	}
	.Path_10137 {
		overflow: visible;
		position: absolute;
		width: 8.254px;
		height: 5.928px;
		left: 49.762px;
		top: 17.904px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10138 {
		fill: rgba(17,88,37,1);
	}
	.Path_10138 {
		overflow: visible;
		position: absolute;
		width: 5.913px;
		height: 8.227px;
		left: 40.424px;
		top: 6.226px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10139 {
		fill: rgba(17,88,37,1);
	}
	.Path_10139 {
		overflow: visible;
		position: absolute;
		width: 2.751px;
		height: 9.074px;
		left: 27.632px;
		top: 1.951px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10140 {
		fill: rgba(17,88,37,1);
	}
	.Path_10140 {
		overflow: visible;
		position: absolute;
		width: 5.913px;
		height: 8.227px;
		left: 11.679px;
		top: 6.226px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_10141 {
		fill: rgba(17,88,37,1);
	}
	.Path_10141 {
		overflow: visible;
		position: absolute;
		width: 8.227px;
		height: 5.913px;
		left: 0px;
		top: 17.904px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_xj {
		fill: transparent;
	}
	.Transparent_Rectangle_xj {
		position: absolute;
		overflow: visible;
		width: 57.999px;
		height: 57.999px;
		left: 0px;
		top: 0px;
	}
	#ibm-security {
		position: absolute;
		width: 55px;
		height: 55px;
		left: 549px;
		top: 856px;
		overflow: visible;
	}
	#IBM_Security_Shield {
		fill: rgba(17,88,37,1);
	}
	.IBM_Security_Shield {
		overflow: visible;
		position: absolute;
		width: 40.918px;
		height: 54.632px;
		left: 6.82px;
		top: 0.001px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_xm {
		fill: transparent;
	}
	.Transparent_Rectangle_xm {
		position: absolute;
		overflow: visible;
		width: 55px;
		height: 55px;
		left: 0px;
		top: 0px;
	}
	#cognitive {
		position: absolute;
		width: 70px;
		height: 70px;
		left: 688px;
		top: 853px;
		overflow: visible;
	}
	#Path_10118 {
		fill: rgba(17,88,37,1);
	}
	.Path_10118 {
		overflow: visible;
		position: absolute;
		width: 61.363px;
		height: 61.363px;
		left: 4.383px;
		top: 4.383px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Transparent_Rectangle_xp {
		fill: transparent;
	}
	.Transparent_Rectangle_xp {
		position: absolute;
		overflow: visible;
		width: 70px;
		height: 70px;
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
<div id="Home_ForUniversities">
<!-- 	<img id="Screen_Shot_2021-03-31_at_1453_of" src="images/Screen_Shot_2021-03-31_at_1453_of.png" srcset="images/Screen_Shot_2021-03-31_at_1453_of.png 1x, images/Screen_Shot_2021-03-31_at_1453_of@2x.png 2x"> -->

	<svg class="Rectangle_335_og">
		<rect id="Rectangle_335_og" rx="0" ry="0" x="0" y="0" width="1920" height="440">
		</rect>
	</svg>
	<div id="Group_10802_oh">
		<a href="mailto:j0nnymac@uk.ibm.com">
		<div id="Button_-_Default_oi" class="Button___Default">
			<svg class="Path_361_oj" viewBox="0 -640 217.497 48">
				<path id="Path_361_oj" d="M 0 -592 L 217.4970703125 -592 L 217.4970703125 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_ok">
				<div id="Group_ol">
					<div id="Get_in_touch_om">
						<span>Get in touch</span>
					</div>
				</div>
			</div>
		</div>
	</a>
		<div id="arrow--right_on">
			<svg class="Path_10090_oo" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_oo" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_op">
				<rect id="Transparent_Rectangle_op" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ot" class="arrow__right">
			<svg class="Path_10090_or" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_or" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_ov">
				<rect id="Transparent_Rectangle_ov" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ot" class="arrow__right">
			<svg class="Path_10090_ou" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ou" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="mailto:j0nnymac@uk.ibm.com">
			<svg class="Transparent_Rectangle_ov">
				<rect id="Transparent_Rectangle_ov" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Our_partnership_with_the_Natio_ow">
		<span>Our partnership with the National Framework for IXNs empowers university students with the opportunity to build innovative, <br/>open-source projects that solves real-world problems </span>
	</div>
	<div id="Group_10142_ox">
		<div id="IBMs_contribution_to_education_oy">
			<span>IBM’s contribution to education<br/>with IBM Industry Exchange Network (IBM IXN) </span>
		</div>
	</div>
	<div id="Group_10180_oz">
		<div id="For_Universities_o">
			<span>For Universities</span>
		</div>
	</div>
	<div id="The_IBM_IXN_is_an_opportunity_">
		<span>The IBM IXN is an opportunity to innovate with the best minds in academia and cutting edge technology, to see your vision come to life as a real working Proof of Concept application. The IBM IXN is your ‘Skunk Works’ for innovation to build the next great idea and make it a reality. This service comes at no cost to you. Our aim is to remove the barrier to innovation for industry. To get started, contact John McNamara IBM Master Inventor & University Program Lead for the UK at j0nnymac@uk.ibm.com</span>
	</div>
	<svg class="Rectangle_360">
		<rect id="Rectangle_360" rx="0" ry="0" x="0" y="0" width="469" height="306">
		</rect>
	</svg>
	<div id="Group_10825">
		<div id="Group_10814">
			<svg class="Rectangle_355">
				<rect id="Rectangle_355" rx="0" ry="0" x="0" y="0" width="462" height="473">
				</rect>
			</svg>
			<div id="Free_Access_to_IBM_Technology_">
				<span>Free Access to IBM Technology<br/>such as IBM Cloud and more. </span>
			</div>
			<div id="IBM_Watson">
				<span>IBM Watson</span>
			</div>
			<div id="IBM_Cloud">
				<span>IBM Cloud</span>
			</div>
			<div id="IBM_Security">
				<span>IBM Security</span>
			</div>
			<div id="Group_10810">
				<div id="Group_10809_pb">
					<div id="Button_-_Default_pn" class="Button___Default">
						<svg class="Path_361_po" viewBox="0 -640 173 48">
							<path id="Path_361_po" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
							</path>
						</svg>
						<div id="Group_379_pp">
							<div id="Group_pq">
								<div id="Find_out_more_pr">
									<span>Find out more</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="arrow--right_ph" class="arrow__right">
					<svg class="Path_10090_pt" viewBox="4 6 17.99 14.992">
						<path id="Path_10090_pt" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
						</path>
					</svg>
					<svg class="Transparent_Rectangle_pu">
						<rect id="Transparent_Rectangle_pu" rx="0" ry="0" x="0" y="0" width="24" height="24">
						</rect>
					</svg>
				</div>
			</div>
			<div id="Benefits_01">
				<span>Benefits </span><span style="font-size:22px;">01.</span>
			</div>
			<div id="Group_10819">
				<div id="Group_10809_pm">
					<div id="Button_-_Default_pn" class="Button___Default">
						<svg class="Path_361_po" viewBox="0 -640 173 48">
							<path id="Path_361_po" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
							</path>
						</svg>
						<div id="Group_379_pp">
							<div id="Group_pq">
								<div id="Find_out_more_pr">
									<span>Find out more</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="arrow--right_ps" class="arrow__right">
					<svg class="Path_10090_pt" viewBox="4 6 17.99 14.992">
						<path id="Path_10090_pt" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
						</path>
					</svg>
					<svg class="Transparent_Rectangle_pu">
						<rect id="Transparent_Rectangle_pu" rx="0" ry="0" x="0" y="0" width="24" height="24">
						</rect>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div id="Group_10826">
		<div id="Group_10815">
			<svg class="Rectangle_357">
				<rect id="Rectangle_357" rx="0" ry="0" x="0" y="0" width="693" height="473">
				</rect>
			</svg>
			<div id="Provide_students_free_access_t">
				<span>Provide students free access to industry<br/>recognised accreditations in IBM technology </span>
			</div>
			<div id="Group_10812">
				<img id="Image_1_p" src="images/Image_1_p.png" srcset="images/Image_1_p.png 1x, images/Image_1_p@2x.png 2x">

				<img id="Image_2_p" src="images/Image_2_p.png" srcset="images/Image_2_p.png 1x, images/Image_2_p@2x.png 2x">

				<img id="Image_2_qa" src="images/Image_2_qa.png" srcset="images/Image_2_qa.png 1x, images/Image_2_qa@2x.png 2x">

				<img id="Image_1_qa" src="images/Image_1_qa.png" srcset="images/Image_1_qa.png 1x, images/Image_1_qa@2x.png 2x">

				<img id="Image_2_qb" src="images/Image_2_qb.png" srcset="images/Image_2_qb.png 1x, images/Image_2_qb@2x.png 2x">

				<img id="Image_1_qb" src="images/Image_1_qb.png" srcset="images/Image_1_qb.png 1x, images/Image_1_qb@2x.png 2x">

			</div>
			<div id="Benefits_02">
				<span>Benefits </span><span style="font-size:22px;">02.</span>
			</div>
			<div id="Group_10811">
				<div id="Group_10809_p">
					<div id="Button_-_Default_p" class="Button___Default">
						<svg class="Path_361_qa" viewBox="0 -640 173 48">
							<path id="Path_361_qa" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
							</path>
						</svg>
						<div id="Group_379_qb">
							<div id="Group_qc">
								<div id="Find_out_more_qd">
									<span>Find out more</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="arrow--right_qe" class="arrow__right">
					<svg class="Path_10090_qf" viewBox="4 6 17.99 14.992">
						<path id="Path_10090_qf" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
						</path>
					</svg>
					<svg class="Transparent_Rectangle_qg">
						<rect id="Transparent_Rectangle_qg" rx="0" ry="0" x="0" y="0" width="24" height="24">
						</rect>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div id="Group_10824">
		<div id="Group_10816">
			<svg class="Rectangle_358">
				<rect id="Rectangle_358" rx="0" ry="0" x="0" y="0" width="682" height="311">
				</rect>
			</svg>
			<div id="Collaboration_with_universitie">
				<span>Collaboration with universities across the UK, focused on providing students cutting edge skills, SME mentorship and industry relevant experience.</span>
			</div>
			<div id="Benefits_03">
				<span>Benefits </span><span style="font-size:22px;">03.</span>
			</div>
		</div>
	</div>
	<div id="Group_10827">
		<svg class="Rectangle_356">
			<rect id="Rectangle_356" rx="0" ry="0" x="0" y="0" width="469" height="363">
			</rect>
		</svg>
		<svg class="Rectangle_361">
			<rect id="Rectangle_361" rx="0" ry="0" x="0" y="0" width="469" height="464">
			</rect>
		</svg>
		<div id="Access_to_IBM_Subject_Matter_E">
			<span>Access to IBM Subject Matter Experts for free Lectures and Workshops</span>
		</div>
		<div id="Benefits_04">
			<span>Benefits </span><span style="font-size:22px;">04.</span>
		</div>
	</div>
	<div id="Group_10823">
		<div id="Group_10818">
			<svg class="Rectangle_359">
				<rect id="Rectangle_359" rx="0" ry="0" x="0" y="0" width="681" height="454">
				</rect>
			</svg>
			<div id="Access_to_UCLs_IXN_Framework_f">
				<span>Access to UCL’s IXN Framework for supporting projects</span>
			</div>
			<img id="Image_6" src="images/Image_6.png" srcset="images/Image_6.png 1x, images/Image_6@2x.png 2x">

			<div id="Benefits_05">
				<span>Benefits </span><span style="font-size:22px;">05.</span>
			</div>
			<div id="Group_10809_q">
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="arrow--right_r" class="arrow__right">
				<svg class="Path_10090_r" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_r" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_r">
					<rect id="Transparent_Rectangle_r" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
			<div id="Group_10809_q">
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="arrow--right_r" class="arrow__right">
				<svg class="Path_10090_r" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_r" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_r">
					<rect id="Transparent_Rectangle_r" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
			<div id="Group_10809_rt">
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="arrow--right_r" class="arrow__right">
				<svg class="Path_10090_r" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_r" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_r">
					<rect id="Transparent_Rectangle_r" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
			<div id="Group_10809_rt">
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
				<div id="Button_-_Default_rz" class="Button___Default">
					<svg class="Path_361_r" viewBox="0 -640 173 48">
						<path id="Path_361_r" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
						</path>
					</svg>
					<div id="Group_379_r">
						<div id="Group_r">
							<div id="Find_out_more_r">
								<span>Find out more</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="arrow--right_r" class="arrow__right">
				<svg class="Path_10090_r" viewBox="4 6 17.99 14.992">
					<path id="Path_10090_r" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
					</path>
				</svg>
				<svg class="Transparent_Rectangle_r">
					<rect id="Transparent_Rectangle_r" rx="0" ry="0" x="0" y="0" width="24" height="24">
					</rect>
				</svg>
			</div>
		</div>
		<div id="arrow--right_sa" class="arrow__right">
			<svg class="Path_10090_sa" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_sa" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_sa">
				<rect id="Transparent_Rectangle_sa" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<svg class="Line_6_sa" viewBox="0 0 211.5 2">
		<path id="Line_6_sa" d="M 0 0 L 211.5 0">
		</path>
	</svg>


	<div id="Projects_Archives_sb">
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
	<div id="Project_Title_sc" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';">
			<span><?php echo $arch_titles[0]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sd" onclick="window.location='projects/<?php echo $arch_slugs[0] ?>.php';" src=<?php echo $arch_thumbnails[0]; ?> srcset=<?php echo $arch_thumbnails[0]; ?>>
	<?php
	}

	 if ($arch_thumbnails[2]) {
		?>
	<div id="Project_Title_se" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';">
			<span><?php echo $arch_titles[2]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sf" onclick="window.location='projects/<?php echo $arch_slugs[2] ?>.php';" src=<?php echo $arch_thumbnails[2]; ?> srcset=<?php echo $arch_thumbnails[2]; ?>>
	<?php
	}

	 if ($arch_thumbnails[1]) {
		?>
	<div id="Project_Title_sg" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';">
			<span><?php echo $arch_titles[1]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sh" onclick="window.location='projects/<?php echo $arch_slugs[1] ?>.php';" src=<?php echo $arch_thumbnails[1]; ?> srcset=<?php echo $arch_thumbnails[1]; ?>>
	<?php
	}

	 if ($arch_thumbnails[3]) {
		?>
	<div id="Project_Title_si" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';">
			<span><?php echo $arch_titles[3]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sj" onclick="window.location='projects/<?php echo $arch_slugs[3] ?>.php';" src=<?php echo $arch_thumbnails[3]; ?> srcset=<?php echo $arch_thumbnails[3]; ?>>
	<?php
	}

	 if ($arch_thumbnails[4]) {
		?>
	<div id="Project_Title_sk" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';">
			<span><?php echo $arch_titles[4]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sl" onclick="window.location='projects/<?php echo $arch_slugs[4] ?>.php';" src=<?php echo $arch_thumbnails[4]; ?> srcset=<?php echo $arch_thumbnails[4]; ?>>
	<?php
	}

	 if ($arch_thumbnails[5]) {
		?>
	<div id="Project_Title_sm" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';">
			<span><?php echo $arch_titles[5]; ?></span>
	</div>
	<img id="Screenshot_2021-02-26_at_17040_sn" onclick="window.location='projects/<?php echo $arch_slugs[5] ?>.php';" src=<?php echo $arch_thumbnails[5]; ?> srcset=<?php echo $arch_thumbnails[5]; ?>>
	<?php
	}
	}
	 ?>

	<!-- <div id="Search_Bar_so" class="Search_Bar">
		<div id="Group_10619_sp">
			<svg class="Rectangle_296_sq">
				<rect id="Rectangle_296_sq" rx="0" ry="0" x="0" y="0" width="771" height="49">
				</rect>
			</svg>
			<div id="search__large_sr" class="search___large">
				<div id="Icon__Search_-_16_ss" class="Icon___Search___16">
					<img id="Group_2829_st" src="Group_2829_st.png" srcset="Group_2829_st.png 1x, Group_2829_st@2x.png 2x">

					</svg>
				</div>
			</div>
			<div id="Search_by_keywords_su">
				<span>Search by keywords</span>
			</div>
		</div>
		<svg class="Path_5097_sv" viewBox="192 -2051 771 1">
			<path id="Path_5097_sv" d="M 192 -2051 L 962.9999389648438 -2051 L 962.9999389648438 -2050 L 192 -2050 L 192 -2051 Z">
			</path>
		</svg>
	</div> -->
	<!-- <div id="Group_10808_sw">
		<div id="Button_-_Default_sx" class="Button___Default">
			<svg class="Path_361_sy" viewBox="0 -640 159 48">
				<path id="Path_361_sy" d="M 0 -592 L 159 -592 L 159 -640 L 0 -640 L 0 -592 Z">
				</path>
			</svg>
			<div id="Group_379_sz">
				<div id="Group_s">
					<div id="Search_s">
						<span>Search</span>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div id="Pagination_Bar_s" class="Pagination_Bar">
		<img id="Group_4206_s" src="images/Group_4206_s.png" srcset="images/Group_4206_s.png 1x, images/Group_4206_s@2x.png 2x">

		</svg>
		<img id="Group_4207_s" src="images/Group_4207_s.png" srcset="images/Group_4207_s.png 1x, images/Group_4207_s@2x.png 2x">

		</svg>
		<div id="ID1__6_of_50_items_s">
			<?php
			if (($arch_start_row + 5) > ($arch_total_records)) {
				$arch_lim = $arch_total_records;
			} else {
				$arch_lim = $arch_end_row + 1;
			}
			 ?>
			<span><?php echo $arch_start_row + 1; ?> – <?php echo $arch_lim; ?> of <?php echo $arch_total_records; ?> items </span>
		</div>
		<div id="ID6_s">
			<!-- <span>6</span> -->
		</div>
		<div id="Items_per_page_s">
			<!-- <span>Items per page</span> -->
		</div>
		<img id="Group_4213_s" src="images/Group_4213_s.png" srcset="images/Group_4213_s.png 1x, images/Group_4213_s@2x.png 2x">

		</svg>
		<img id="Group_4214_s" src="images/Group_4214_s.png" srcset="images/Group_4214_s.png 1x, images/Group_4214_s@2x.png 2x">

		</svg>
		<img id="Group_4216_ta" src="images/Group_4216_ta.png" srcset="images/Group_4216_ta.png 1x, images/Group_4216_ta@2x.png 2x">

		</svg>
		<?php
		if($arch_page_no < $arch_total_no_of_pages) {
			echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_next_page.'#Projects_Archives_sb"> <img id="Icon_-_Carret--Right__20_tb" src="images/Icon_-_Carret--Right__20_tb.png" srcset="images/Icon_-_Carret--Right__20_tb.png 1x, images/Icon_-_Carret--Right__20_tb@2x.png 2x"> </a>';
		}
		?>
		<!-- <img id="Icon_-_Carret--Right__20_tb" src="Icon_-_Carret--Right__20_tb.png" srcset="Icon_-_Carret--Right__20_tb.png 1x, Icon_-_Carret--Right__20_tb@2x.png 2x"> -->

		</svg>
		<div id="Group_10684_tc">
			<div id="of_9_pages_td">
				<span>of <?php echo $arch_total_no_of_pages; ?> pages</span>
			</div>
			<div id="ID2_te">
				<span><?php echo $arch_page_no; ?></span>
			</div>
			<img id="Group_4215_tf" src="images/Group_4215_tf.png" srcset="images/Group_4215_tf.png 1x, images/Group_4215_tf@2x.png 2x">

			</svg>
			<!-- <img id="chevron--down__20_tg" src="chevron--down__20_tg.png" srcset="chevron--down__20_tg.png 1x, chevron--down__20_tg@2x.png 2x"> -->
			<div class="dropdown">
			<button class="dropbtn"><img id="chevron--down__20_tg" src="images/chevron--down__20_tg.png" srcset="images/chevron--down__20_tg.png 1x, images/chevron--down__20_tg@2x.png 2x">
			>
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<?php
			for($i = 1; $i <= $arch_total_no_of_pages; ++$i) {
				echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$i.'#Projects_Archives_sb">'.$i.'</a>';
			}
				?>

				</div>
			</div>

			</svg>
		</div>
		<?php
		if ($arch_page_no > 1) {
			echo '<a href="?arch_filter='.$arch_filter_param.'&arch_page_no='.$arch_previous_page.'#Projects_Archives_sb"> <img id="carret--left__20_th" src="images/carret--left__20_th.png" srcset="images/carret--left__20_th.png 1x, images/carret--left__20_th@2x.png 2x"> </a>';
		}
			?>
		<!-- <img id="carret--left__20_th" src="carret--left__20_th.png" srcset="carret--left__20_th.png 1x, carret--left__20_th@2x.png 2x"> -->

		</svg>
		<!-- <img id="chevron--down__20_ti" src="chevron--down__20_ti.png" srcset="chevron--down__20_ti.png 1x, chevron--down__20_ti@2x.png 2x"> -->

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
				 echo '<a href="?#Projects_Archives_sb">All</a>';
					foreach (array_unique($temp_arch_universities) as &$uni) {
						echo '<a href="?arch_filter='.$uni.'#Projects_Archives_sb">'.$uni.'</a>';
					}

					?>

			 </div>
		 </div>

	</div>

	<div id="Get_in_touch_tj">
		<span>Get in touch</span>
	</div>
	<div id="email">
		<svg class="Path_10103" viewBox="2 6 32.163 22.974">
			<path id="Path_10103" d="M 31.86572265625 6 L 4.29736328125 6 C 3.028564691543579 6 1.999999642372131 7.028564453125 1.99999988079071 8.29736328125 L 1.99999988079071 26.67626762390137 C 1.99999988079071 27.94506645202637 3.028564214706421 28.97363090515137 4.297362804412842 28.97363090515137 L 31.86572265625 28.97363090515137 C 33.134521484375 28.97363090515137 34.16308212280273 27.94506645202637 34.16308212280273 26.67626762390137 L 34.16308212280273 8.29736328125 C 34.16308212280273 7.028564453125 33.13451766967773 6 31.86572265625 6 Z M 29.338623046875 8.29736328125 L 18.08154296875 16.08542442321777 L 6.824462890625 8.29736328125 L 29.338623046875 8.29736328125 Z M 4.29736328125 26.67626762390137 L 4.29736328125 9.342663764953613 L 17.42679405212402 18.42873382568359 C 17.820556640625 18.70189666748047 18.342529296875 18.70189666748047 18.73629188537598 18.42873382568359 L 31.86572265625 9.342663764953613 L 31.86572265625 26.67626762390137 L 4.29736328125 26.67626762390137 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_tm">
			<rect id="Transparent_Rectangle_tm" rx="0" ry="0" x="0" y="0" width="37" height="37">
			</rect>
		</svg>
	</div>
	<a href="mailto:j0nnymac@uk.ibm.com">
	<div id="Email_j0nnymacukibmcom_tn">
		<span>Email: j0nnymac@uk.ibm.com</span>
	</div>
</a>
	<div id="John_McNamara_IBM_UK_to">
		<span>John McNamara (IBM UK)</span>
	</div>
	<a href="mailto:d.mohamedally@ucl.ac.uk">
	<div id="Email_dmohamedallyuclacuk">
		<span>Email: d.mohamedally@ucl.ac.uk</span>
	</div>
</a>
	<div id="Dr_Dean_Mohamedally_NF_IXN">
		<span>Dr. Dean Mohamedally (NF IXN)</span>
	</div>
	<div onclick="window.location='home.php';" id="Group_10839_tr">
		<div id="Go_back_to_previous_page_ts">
			<span>Go back to previous page</span>
		</div>
		<div id="arrow--left_tt">
			<svg class="Path_10107_tu" viewBox="4 6 18.476 15.396">
				<path id="Path_10107_tu" d="M 11.69813537597656 21.39627075195312 L 12.78357219696045 20.31083297729492 L 6.948385715484619 14.46794891357422 L 22.47552490234375 14.46794891357422 L 22.47552490234375 12.92832183837891 L 6.948385715484619 12.92832183837891 L 12.78357219696045 7.085436820983887 L 11.69813537597656 6 L 4 13.69813537597656 L 11.69813537597656 21.39627075195312 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_tv">
				<rect id="Transparent_Rectangle_tv" rx="0" ry="0" x="0" y="0" width="25" height="25">
				</rect>
			</svg>
		</div>
	</div>
	<div id="credentials">
		<svg class="Path_10108" viewBox="12 14 29.333 29.333">
			<path id="Path_10108" d="M 26.66650009155273 43.33300399780273 C 34.76657867431641 43.33300399780273 41.33300018310547 36.76658630371094 41.33300018310547 28.66650009155273 C 41.33300018310547 20.56641578674316 34.76657867431641 14 26.6664924621582 14 C 18.56641578674316 14 12 20.56641578674316 12 28.66650009155273 C 12 36.76658630371094 18.56641578674316 43.33300399780273 26.6664924621582 43.33300399780273 Z M 26.66650009155273 21.33325004577637 C 30.7165470123291 21.33325004577637 33.99974822998047 24.61646461486816 33.99974822998047 28.66650009155273 C 33.99974822998047 32.71654891967773 30.7165355682373 35.999755859375 26.66650009155273 35.999755859375 C 22.616455078125 35.999755859375 19.33325004577637 32.71653366088867 19.33325004577637 28.66650009155273 C 19.33325004577637 24.61645126342773 22.616455078125 21.33325004577637 26.66650009155273 21.33325004577637 Z">
			</path>
		</svg>
		<svg class="Rectangle_362">
			<rect id="Rectangle_362" rx="0" ry="0" x="0" y="0" width="14" height="7">
			</rect>
		</svg>
		<svg class="Path_10109" viewBox="6 2 73.333 102.666">
			<path id="Path_10109" d="M 71.99925231933594 2.000000476837158 L 13.33325004577637 2.000000476837158 C 9.284881591796875 2.00404167175293 6.004042625427246 5.28488302230835 6 9.333249092102051 L 6 97.33226776123047 C 6.004650115966797 101.38037109375 9.285135269165039 104.6608505249023 13.3332462310791 104.6654891967773 L 71.99925231933594 104.6655120849609 C 76.04704284667969 104.6600646972656 79.32705688476562 101.3800354003906 79.33251953125 97.33226776123047 L 79.33250427246094 9.333249092102051 C 79.32785797119141 5.285131931304932 76.04737854003906 2.004643440246582 71.99924468994141 1.99999988079071 Z M 57.33274841308594 97.33226776123047 L 27.99974822998047 97.33226776123047 L 27.99974822998047 89.99899291992188 C 27.99974822998047 87.97398376464844 29.641357421875 86.33236694335938 31.66637420654297 86.33236694335938 L 53.66613388061523 86.33236694335938 C 55.6911506652832 86.33236694335938 57.33274841308594 87.97398376464844 57.33274841308594 89.99899291992188 L 57.33274841308594 97.33226776123047 Z M 64.66600036621094 97.33226776123047 L 64.66600036621094 89.99899291992188 C 64.66600036621094 83.92393493652344 59.74119186401367 78.99913024902344 53.66613388061523 78.99913024902344 L 31.66637420654297 78.99913024902344 C 25.59130859375 78.99913024902344 20.66650009155273 83.92393493652344 20.66650009155273 89.99899291992188 L 20.66650009155273 97.33226776123047 L 13.33325004577637 97.33226776123047 L 13.33325004577637 9.333249092102051 L 71.99925231933594 9.333249092102051 L 71.99925231933594 97.33226776123047 L 64.66600036621094 97.33226776123047 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_t">
			<rect id="Transparent_Rectangle_t" rx="0" ry="0" x="0" y="0" width="118" height="118">
			</rect>
		</svg>
	</div>
	<svg class="Line_5_t" viewBox="0 0 211.5 2">
		<path id="Line_5_t" d="M 0 0 L 211.5 0">
		</path>
	</svg>
	<div id="ID04_Directory_t">
		<span>04. Directory</span>
	</div>
	<svg class="Line_7_t" viewBox="0 0 455.5 1">
		<path id="Line_7_t" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<svg class="Line_8_t" viewBox="0 0 455 1">
		<path id="Line_8_t" d="M 0 0 L 455 0">
		</path>
	</svg>

	<div id="Contact_Us_t">
		<span>Contact Us</span>
	</div>

	<div id="Sign_up_to_Newsletter_t">
		<span>Sign up to Newsletter</span>
	</div>
	<svg class="Line_9_t" viewBox="0 0 455.5 1">
		<path id="Line_9_t" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Submit_a_Project_Request_t">
		<span>Submit a Project Request</span>
	</div>
	<svg class="Line_10_t" viewBox="0 0 455.5 1">
		<path id="Line_10_t" d="M 0 0 L 455.5 0">
		</path>
	</svg>
	<div id="Projects_Archives_ua">
		<span>Projects Archives</span>
	</div>
	<div id="Email_j0nnymacukibmcom_ub">
		<span>Email: j0nnymac@uk.ibm.com</span>
	</div>
	<div id="John_McNamara_IBM_UK_uc">
		<span>John McNamara (IBM UK)</span>
	</div>
	<div id="You_can_sign_up_to_our_Newslet_ud">
		<span>You can sign up to our Newsletter that will provide you with a <br/>regular update on IBM IXN, from the latest projects to upcoming<br/>events. </span>
	</div>
	<div id="To_view_the_full_projects_arch_ue">
		<span>To view the full projects archives by the IBM IXN, please click the<br/>button below.</span>
	</div>
	<div id="Do_you_have_a_project_idea_to__uf">
		<span>Do you have a project idea to be taken by the IBM IXN? Please <br/>submit a project request from here by clicking the button below!<br/></span><br>
	</div>
	<div id="Group_10870_ug">
		<div id="Group_10809_uh">
			<a href="mailto:j0nnymac@uk.ibm.com">
			<div id="Button_-_Default_ui" class="Button___Default">
				<svg class="Path_361_uj" viewBox="0 -640 173 48">
					<path id="Path_361_uj" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_uk">
					<div id="Group_ul">
						<div id="Get_in_Touch_um">
							<span>Get in Touch</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		</div>
		<div id="arrow--right_uq" class="arrow__right">
			<svg class="Path_10090_uo" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_uo" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_us">
				<rect id="Transparent_Rectangle_us" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_uq" class="arrow__right">
			<svg class="Path_10090_ur" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ur" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="mailto:j0nnymac@uk.ibm.com">
			<svg class="Transparent_Rectangle_us">
				<rect id="Transparent_Rectangle_us" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Group_10871_ut" onclick="location.href='https://members-engine.azurewebsites.net/';" style="cursor: pointer;">
		<div id="Group_10809_uu">
			<div id="Button_-_Default_uv" class="Button___Default">
				<svg class="Path_361_uw" viewBox="0 -640 173 48">
					<path id="Path_361_uw" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_ux">
					<div id="Group_uy">
						<div id="Sign_Up_uz">
							<span>Sign Up</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_va" class="arrow__right">
			<svg class="Path_10090_u" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_u" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_va">
				<rect id="Transparent_Rectangle_va" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_va" class="arrow__right">
			<svg class="Path_10090_va" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_va" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_va">
				<rect id="Transparent_Rectangle_va" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
			<div id="Group_10872_u" onclick="location.href='http://88.80.189.233/login/?next=/';" style="cursor: pointer;">
		<div id="Group_10809_u">
			<div id="Button_-_Default_u" class="Button___Default">
				<svg class="Path_361_u" viewBox="0 -640 173 48">
					<path id="Path_361_u" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_va">
					<div id="Group_vb">
						<div id="Submit_a_Request_vc">
							<span>Submit a Request</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_vg" class="arrow__right">
			<svg class="Path_10090_ve" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_ve" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_vi">
				<rect id="Transparent_Rectangle_vi" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_vg" class="arrow__right">
			<svg class="Path_10090_vh" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_vh" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_vi">
				<rect id="Transparent_Rectangle_vi" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10873_vj" onclick="window.location='ProjectsArchives.php';">
		<div id="Group_10809_vk">
			<div id="Button_-_Default_vl" class="Button___Default">
				<svg class="Path_361_vm" viewBox="0 -640 173 48">
					<path id="Path_361_vm" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_vn">
					<div id="Group_vo">
						<div id="View_Archives_vp">
							<span>View Archives</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="arrow--right_vt" class="arrow__right">
			<svg class="Path_10090_vr" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_vr" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_vv">
				<rect id="Transparent_Rectangle_vv" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_vt" class="arrow__right">
			<svg class="Path_10090_vu" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_vu" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_vv">
				<rect id="Transparent_Rectangle_vv" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
	</div>
	<div id="Group_10869_vw">
		<div id="Group_10809_vx">
			<a href="https://www.ucl.ac.uk/computer-science/collaborate/ucl-industry-exchange-network-ucl-ixn">
			<div id="Button_-_Default_vy" class="Button___Default">
				<svg class="Path_361_vz" viewBox="0 -640 173 48">
					<path id="Path_361_vz" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_v">
					<div id="Group_v">
						<div id="Find_out_more_v">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		</div>
		<div id="arrow--right_wa" class="arrow__right">
			<svg class="Path_10090_v" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_v" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_wa">
				<rect id="Transparent_Rectangle_wa" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_wa" class="arrow__right">
			<svg class="Path_10090_wa" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_wa" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="https://www.ucl.ac.uk/computer-science/collaborate/ucl-industry-exchange-network-ucl-ixn">
			<svg class="Transparent_Rectangle_wa">
				<rect id="Transparent_Rectangle_wa" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Group_10881">
		<div id="Group_10809_wa">
			<a href="https://www.research.ibm.com/university/#technologies">
			<div id="Button_-_Default_wb" class="Button___Default">
				<svg class="Path_361_wc" viewBox="0 -640 173 48">
					<path id="Path_361_wc" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_wd">
					<div id="Group_we">
						<div id="Find_out_more_wf">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		</div>
		<div id="arrow--right_wj" class="arrow__right">
			<svg class="Path_10090_wh" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_wh" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_wl">
				<rect id="Transparent_Rectangle_wl" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_wj" class="arrow__right">
			<svg class="Path_10090_wk" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_wk" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="https://www.research.ibm.com/university/#technologies">
			<svg class="Transparent_Rectangle_wl">
				<rect id="Transparent_Rectangle_wl" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Group_10882">
		<div id="Group_10809_wn">
			<a href="https://dais.mybluemix.net/lectures/search/">
			<div id="Button_-_Default_wo" class="Button___Default">
				<svg class="Path_361_wp" viewBox="0 -640 173 48">
					<path id="Path_361_wp" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_wq">
					<div id="Group_wr">
						<div id="Find_out_more_ws">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		</div>
		<div id="arrow--right_ww" class="arrow__right">
			<svg class="Path_10090_wu" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_wu" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_wy">
				<rect id="Transparent_Rectangle_wy" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_ww" class="arrow__right">
			<svg class="Path_10090_wx" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_wx" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="https://dais.mybluemix.net/lectures/search/">
			<svg class="Transparent_Rectangle_wy">
				<rect id="Transparent_Rectangle_wy" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="Group_10883">
		<div id="Group_10809_w">
			<a href="https://skills-academy.comprehend.ibm.com/?r">
			<div id="Button_-_Default_w" class="Button___Default">
				<svg class="Path_361_w" viewBox="0 -640 173 48">
					<path id="Path_361_w" d="M 0 -592 L 173.0000152587891 -592 L 173.0000152587891 -640 L 0 -640 L 0 -592 Z">
					</path>
				</svg>
				<div id="Group_379_w">
					<div id="Group_w">
						<div id="Find_out_more_w">
							<span>Find out more</span>
						</div>
					</div>
				</div>
			</div>
		</a>
		</div>
		<div id="arrow--right_xa" class="arrow__right">
			<svg class="Path_10090_w" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_w" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<svg class="Transparent_Rectangle_xb">
				<rect id="Transparent_Rectangle_xb" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</div>
		<div id="arrow--right_xa" class="arrow__right">
			<svg class="Path_10090_xa" viewBox="4 6 17.99 14.992">
				<path id="Path_10090_xa" d="M 14.49427509307861 6 L 13.42236042022705 7.044180393218994 L 19.1042594909668 12.7463207244873 L 4 12.7463207244873 L 4 14.24550247192383 L 19.1042594909668 14.24550247192383 L 13.42236042022705 19.92215538024902 L 14.49427509307861 20.9918212890625 L 21.99018859863281 13.49591064453125 L 14.49427509307861 6 Z">
				</path>
			</svg>
			<a href="https://skills-academy.comprehend.ibm.com/?r">
			<svg class="Transparent_Rectangle_xb">
				<rect id="Transparent_Rectangle_xb" rx="0" ry="0" x="0" y="0" width="24" height="24">
				</rect>
			</svg>
		</a>
		</div>
	</div>
	<div id="ibm-cloud_1">
		<svg class="Path_10136" viewBox="0.258 8.499 57.1 40.795">
			<path id="Path_10136" d="M 44.35497665405273 17.83791542053223 C 40.65339279174805 10.9015941619873 32.80923843383789 7.251049041748047 25.11885452270508 8.885727882385254 C 17.42846870422363 10.5204029083252 11.74734592437744 17.04589653015137 11.18710613250732 24.88811683654785 C 4.722947120666504 25.5832462310791 -0.06934984028339386 31.21158218383789 0.2750073373317719 37.70388412475586 C 0.61936354637146 44.19618606567383 5.980156898498535 49.28598785400391 12.48158168792725 49.29341888427734 L 41.48953628540039 49.29341506958008 C 49.69363403320312 49.29845809936523 56.54699325561523 43.04488372802734 57.29126358032227 34.87461471557617 C 58.03554153442383 26.704345703125 52.42494583129883 19.31537055969238 44.35498046875 17.83791923522949 Z M 41.48953628540039 46.57392120361328 L 12.48158359527588 46.57392120361328 C 7.475678443908691 46.58546447753906 3.320660352706909 42.70867919921875 2.985758304595947 37.7139778137207 C 2.650856494903564 32.71927642822266 6.251118183135986 28.32249069213867 11.21375465393066 27.66562652587891 C 11.40553569793701 30.06489372253418 12.08645629882812 32.39948654174805 13.21457862854004 34.52565002441406 C 13.43695735931396 34.96689605712891 13.88119602203369 35.25277709960938 14.37492084503174 35.27236938476562 C 14.86864280700684 35.29196166992188 15.33413887023926 35.04217529296875 15.59077930450439 34.61994171142578 C 15.84742164611816 34.19771194458008 15.85481643676758 33.66948699951172 15.61009407043457 33.24023056030273 C 11.87942600250244 26.26589584350586 14.22354221343994 17.59262657165527 20.95956611633301 13.44710731506348 C 27.69558906555176 9.301589012145996 36.49471664428711 11.11702442169189 41.03992080688477 17.5900821685791 C 36.64774703979492 17.711181640625 32.50232696533203 19.64768600463867 29.59084129333496 22.93842506408691 C 29.09375190734863 23.50132942199707 29.1474609375 24.360595703125 29.7105655670166 24.85745048522949 C 30.27367210388184 25.35430526733398 31.13294219970703 25.30059814453125 31.62979316711426 24.73749160766602 C 35.63175582885742 20.19793319702148 42.21604156494141 18.97747993469238 47.57914352416992 21.78114700317383 C 52.94223785400391 24.58481407165527 55.69796371459961 30.68795204162598 54.25445175170898 36.56499099731445 C 52.81093215942383 42.44203186035156 47.54125595092773 46.5739631652832 41.48953247070312 46.57392120361328 Z">
			</path>
		</svg>
		<svg class="Path_10137" viewBox="27.447 9.875 8.254 5.928">
			<path id="Path_10137" d="M 35.51694488525391 10.56329822540283 C 35.33467864990234 10.24721336364746 35.03422927856445 10.01655769348145 34.6817741394043 9.922154426574707 C 34.3293342590332 9.827751159667969 33.95381546020508 9.877346038818359 33.63795852661133 10.06000804901123 L 28.1627025604248 13.22151470184326 C 27.72501945495605 13.4609317779541 27.4512882232666 13.91856288909912 27.44735145568848 14.41743183135986 C 27.44341468811035 14.91629600524902 27.70989990234375 15.37818908691406 28.14375114440918 15.62448310852051 C 28.57759475708008 15.87077331542969 29.11079406738281 15.86285400390625 29.53713417053223 15.60379028320312 L 35.01239013671875 12.44228744506836 C 35.67050552368164 12.06268501281738 35.89637756347656 11.22150707244873 35.51694107055664 10.5632963180542 Z">
			</path>
		</svg>
		<svg class="Path_10138" viewBox="22.297 3.434 5.913 8.227">
			<path id="Path_10138" d="M 22.98481941223145 11.47631359100342 C 23.64261436462402 11.85660934448242 24.48416900634766 11.63119888305664 24.86380767822266 10.97302532196045 L 28.02531051635742 5.497775077819824 C 28.40523910522461 4.839927673339844 28.17989921569824 3.998652458190918 27.52203750610352 3.618752002716064 C 26.86417198181152 3.238851308822632 26.02289390563965 3.464186668395996 25.64299392700195 4.12205171585083 L 22.48153114318848 9.597324371337891 C 22.10177612304688 10.25518798828125 22.32707595825195 11.09634113311768 22.98481941223145 11.47631168365479 Z">
			</path>
		</svg>
		<svg class="Path_10139" viewBox="15.241 1.076 2.751 9.074">
			<path id="Path_10139" d="M 16.61686325073242 10.15031337738037 C 17.37655830383301 10.15011215209961 17.99236488342285 9.534306526184082 17.9925651550293 8.774609565734863 L 17.9925651550293 2.451602220535278 C 17.99265670776367 1.69182276725769 17.37672996520996 1.075899958610535 16.6169548034668 1.075899958610535 C 15.8571720123291 1.075899958610535 15.24124908447266 1.69182300567627 15.24124908447266 2.451602458953857 L 15.2413444519043 8.77461051940918 C 15.2413444519043 9.534093856811523 15.85701370239258 10.15001106262207 16.61667823791504 10.15031242370605 Z">
			</path>
		</svg>
		<svg class="Path_10140" viewBox="6.442 3.434 5.913 8.227">
			<path id="Path_10140" d="M 9.787789344787598 10.97282600402832 C 10.16765689849854 11.63071155548096 11.00893115997314 11.85604667663574 11.66679668426514 11.47614669799805 C 12.32466411590576 11.09624576568604 12.55000114440918 10.25496959686279 12.17010021209717 9.597105979919434 L 9.008562088012695 4.121871948242188 C 8.628695487976074 3.46398663520813 7.787419319152832 3.238650798797607 7.129554271697998 3.61855149269104 C 6.471687793731689 3.998451471328735 6.246352672576904 4.83972692489624 6.626252174377441 5.497592926025391 L 9.787789344787598 10.97282600402832 Z">
			</path>
		</svg>
		<svg class="Path_10141" viewBox="0 9.875 8.227 5.913">
			<path id="Path_10141" d="M 7.539125442504883 13.22148609161377 L 2.063875198364258 10.05997943878174 C 1.406028509140015 9.680046081542969 0.5647518634796143 9.905383110046387 0.1848514974117279 10.5632495880127 C -0.1950491070747375 11.221116065979 0.03028730303049088 12.06239223480225 0.6881539821624756 12.44229221343994 L 6.163967609405518 15.60376453399658 C 6.821815490722656 15.9836950302124 7.663090705871582 15.7583589553833 8.042991638183594 15.10049152374268 C 8.422891616821289 14.44262599945068 8.197555541992188 13.60135173797607 7.539688587188721 13.22144889831543 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_xj">
			<rect id="Transparent_Rectangle_xj" rx="0" ry="0" x="0" y="0" width="57.999" height="57.999">
			</rect>
		</svg>
	</div>
	<div id="ibm-security">
		<svg class="IBM_Security_Shield" viewBox="4 0 40.918 54.632">
			<path id="IBM_Security_Shield" d="M 24.45892333984375 0.0004999999655410647 L 4 10.19228267669678 L 4 34.17338180541992 C 4 45.4725341796875 13.15977096557617 54.63230514526367 24.45892143249512 54.63230514526367 C 35.75807571411133 54.63230514526367 44.9178466796875 45.47253799438477 44.9178466796875 34.17338180541992 L 44.9178466796875 10.19228267669678 L 24.45892333984375 0.0004999999655410647 Z M 36.10346221923828 46.56808090209961 L 24.45892333984375 40.76729202270508 L 24.45892333984375 44.56600189208984 L 33.04502105712891 48.84328079223633 C 27.78057670593262 51.90907669067383 21.28050994873047 51.93370056152344 15.99298477172852 48.90788269042969 C 10.70546054840088 45.8820686340332 7.433643341064453 40.26542282104492 7.409818649291992 34.17338562011719 L 7.409820556640625 12.2920503616333 L 24.45892333984375 3.798869609832764 L 41.50802612304688 12.2920503616333 L 41.50802612304688 18.68546295166016 L 24.45892333984375 10.19211196899414 L 24.45892333984375 13.99048137664795 L 41.50802612304688 22.48366165161133 L 41.50802612304688 28.8770751953125 L 24.45892333984375 20.3838939666748 L 24.45892333984375 24.18226432800293 L 41.50802612304688 32.67527770996094 L 41.50802612304688 34.17338180541992 C 41.50883865356445 35.72217559814453 41.29657745361328 37.26371383666992 40.87720489501953 38.75464630126953 L 24.45892333984375 30.57550811767578 L 24.45892333984375 34.37387847900391 L 39.62443923950195 41.92884826660156 C 38.72483062744141 43.66530227661133 37.53388595581055 45.2344856262207 36.10346221923828 46.56807708740234 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_xm">
			<rect id="Transparent_Rectangle_xm" rx="0" ry="0" x="0" y="0" width="55" height="55">
			</rect>
		</svg>
	</div>
	<div id="cognitive">
		<svg class="Path_10118" viewBox="2 2 61.363 61.363">
			<path id="Path_10118" d="M 63.36255264282227 26.10671615600586 C 63.36255264282227 12.79294776916504 52.56961059570312 2.000001907348633 39.25583648681641 2.000001907348633 L 21.72367668151855 2 C 10.83059120178223 2 1.999997973442078 10.83059406280518 2 21.72368240356445 L 2 28.29823684692383 C 2 34.34994888305664 6.9058837890625 39.25583648681641 12.95759773254395 39.25583648681641 L 15.36827087402344 39.25583648681641 C 16.40983390808105 44.35842132568359 20.89891815185547 48.02297592163086 26.10671997070312 48.02191543579102 L 29.13101387023926 48.02191543579102 L 37.89709854125977 63.36255264282227 L 41.68842697143555 61.17103576660156 L 32.92234802246094 46.07146453857422 C 32.20380783081055 44.62353515625 30.74666404724121 43.68860626220703 29.13101387023926 43.63887405395508 L 26.10671615600586 43.63887405395508 C 22.47568702697754 43.63887405395508 19.53215789794922 40.69534301757812 19.53215789794922 37.06431579589844 C 19.53215789794922 33.43328857421875 22.47568702697754 30.4897575378418 26.10671615600586 30.4897575378418 L 28.29823684692383 30.4897575378418 L 28.29823684692383 26.10671615600586 L 26.10671615600586 26.10671615600586 C 20.89667892456055 26.10671615600586 16.40834426879883 29.77219200134277 15.36782646179199 34.87499237060547 L 12.95759963989258 34.87279510498047 C 9.326571464538574 34.87279510498047 6.383042335510254 31.92926788330078 6.383040428161621 28.29824066162109 L 6.383039951324463 23.91519737243652 L 10.76607894897461 23.91519737243652 C 14.39710903167725 23.91519737243652 17.34063720703125 20.9716682434082 17.34063720703125 17.34063720703125 L 17.34063720703125 15.14911937713623 L 12.95759963989258 15.14911937713623 L 12.95759963989258 17.34063720703125 C 12.95759963989258 18.55098152160645 11.97642230987549 19.53215789794922 10.76607894897461 19.53215789794922 L 6.558361530303955 19.53215789794922 C 7.64678955078125 11.99129676818848 14.10468578338623 6.391968727111816 21.72368240356445 6.383039951324463 L 34.87279510498047 6.383039951324463 L 34.87279510498047 10.76607894897461 C 34.87279510498047 11.97642230987549 33.89162063598633 12.95759963989258 32.68127822875977 12.95759963989258 L 28.29823684692383 12.95759963989258 L 28.29823684692383 17.34063720703125 L 32.68127822875977 17.34063720703125 C 36.31230545043945 17.34063720703125 39.25583648681641 14.39710807800293 39.25583648681641 10.76607894897461 L 39.25583648681641 6.383039951324463 C 46.73891448974609 6.393237113952637 53.57176208496094 10.63724136352539 56.89756774902344 17.34063911437988 L 54.59647369384766 17.34063720703125 C 50.96544647216797 17.34063720703125 48.02191543579102 20.2841682434082 48.02191543579102 23.91519927978516 L 48.02191543579102 26.10671615600586 L 52.40495300292969 26.10671615600586 L 52.40495300292969 23.91519737243652 C 52.40495300292969 22.70485305786133 53.38613128662109 21.72367668151855 54.59647369384766 21.72367668151855 L 58.4754638671875 21.72367668151855 C 58.81136322021484 23.16046714782715 58.98049545288086 24.63118934631348 58.97951507568359 26.10671615600586 L 58.97951507568359 28.29823684692383 C 58.97951507568359 34.34994888305664 54.07362747192383 39.25583648681641 48.02191543579102 39.25583648681641 L 41.44735717773438 39.25583648681641 L 41.44735717773438 43.63887405395508 L 48.02191543579102 43.63887405395508 C 50.29682540893555 43.63575744628906 52.54256057739258 43.12672805786133 54.59647369384766 42.14864730834961 L 54.59647369384766 43.63887405395508 C 54.59647369384766 47.26990509033203 51.6529426574707 50.21343612670898 48.02191543579102 50.21343612670898 L 45.83039474487305 50.21343612670898 L 45.83039474487305 54.59647369384766 L 48.02191543579102 54.59647369384766 C 54.07362747192383 54.59648132324219 58.97951507568359 49.69059371948242 58.97951507568359 43.63887786865234 L 58.97951507568359 39.01476669311523 C 61.78423309326172 36.15222930908203 63.35741806030273 32.30579376220703 63.3625602722168 28.29823684692383 L 63.36255264282227 26.10671615600586 Z">
			</path>
		</svg>
		<svg class="Transparent_Rectangle_xp">
			<rect id="Transparent_Rectangle_xp" rx="0" ry="0" x="0" y="0" width="70" height="70">
			</rect>
		</svg>
	</div>
</div>
</body>
</html>
