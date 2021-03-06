<style>
/*  phpBB 3.0 Admin Style Sheet
------------------------------------------------------------------------
Original author:	subBlue ( http://www.subblue.com/ )
Copyright 2007 phpBB Group ( http://www.phpbb.com/ )
------------------------------------------------------------------------
*/

/* General markup styles
---------------------------------------- */
* {
/* Reset browsers default margin, padding and font sizes */
margin: 0;
padding: 0;
font-size: 100%;
}

body, div, p, th, td, li, dd {
font-size: x-small;
voice-family: "\"}\"";
voice-family: inherit;
font-size: small
}

html>body, html>div, html>p, html>th, html>td, html>li, html>dd {
font-size: small
}

html {
color: #536482;
background: #DBD7D1;
/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-ie browsers */
height: 100%;
margin-bottom: 1px;
}

body {
/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */
font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
color: #536482;
background: #DBD7D1;
font-size: 62.5%;	/* This sets the default font size to be equivalent to 10px */
margin: 10px 15px;
}

img {
border: 0;
}

h1 {
font-family: "Trebuchet MS", Helvetica, sans-serif;
font-size: 1.70em;
font-weight: normal;
color: #333333;
}

h2, caption {
font-family: "Trebuchet MS", Helvetica, sans-serif;
font-size: 1.40em;
font-weight: normal;
color: #115098;
text-align: left;
}

h3, h4 {
font-family: "Trebuchet MS", Helvetica, sans-serif;
font-size: 1.20em;
text-decoration: none; 
line-height: 1.20em; 
}

p {
margin-bottom: 0.7em;
line-height: 1.40em;
font-size: 0.90em;
}

ul {
list-style: disc;
margin: 0 0 1em 2em;
}

hr {
border: 0 none;
border-top: 1px dashed #999999;
margin-bottom: 5px;
padding-bottom: 5px;
height: 1px;
}

.small { 
font-size: 0.85em; 
}

/* General links  */
a:link, a:visited {
color: #105289;
text-decoration: none;
}

a:hover {
color: #BC2A4D;
text-decoration: underline;
}

a:active {
color: #368AD2;
text-decoration: none;
}

.install-body p a {
font-weight: bold;
}

/* Main blocks
---------------------------------------- */
#wrap {
margin: 10px auto;
width: 1000px;
}

#page-header {
clear: both;
text-align: right;
height: 49px;
font-size: 0.85em;
margin-bottom: 10px;
}

#page-header h1 {
color: #767676;
font-family: "Trebuchet MS",Helvetica,sans-serif;
font-size: 1.70em;
padding-top: 10px;
}

#page-header p {
font-size: 1.00em;
}

#page-header p#skip {
display: none;
}

#page-body {
clear: both;
min-width: 700px;
}

#page-footer {
clear: both;
font-size: 0.75em;
text-align: center;
}

#content {
padding: 20px 10px 10px;
position: relative;
}

#content h1 {
color: #115098;
line-height: 1.2em;
margin-bottom: 0;
}

#main {
float: left;
width: 76%;
margin: 0 0 0 3%;
min-height: 350px;
}

* html #main { 
height: 350px; 
}

#page-body.simple-page-body {
padding: 0;
padding-right: 10px;
min-width: 0;
}

/* Tabbed menu
Based on: http://www.alistapart.com/articles/slidingdoors2/
----------------------------------------*/
#tabs {
line-height: normal;
margin: 0 0 -6px 7px;
min-width: 600px;
}

#tabs ul {
margin:0;
padding: 0;
list-style: none;
}

#tabs li {
display: inline;
margin: 0;
padding: 0;
font-size: 0.85em;
font-weight: bold;
}

#tabs a {
float: left;
background:url("./_img/_cs/bg_tabs1.gif") no-repeat 0% -34px;
margin: 0 1px 0 0;
padding: 0 0 0 7px;
text-decoration: none;
position: relative;
}

#tabs a span {
float: left;
display: block;
background: url("./_img/_cs/bg_tabs2.gif") no-repeat 100% -34px;
padding: 7px 10px 4px 4px;
color: #767676;
white-space: nowrap;
font-family: Arial, Helvetica, sans-serif;
text-transform: uppercase;
font-weight: bold;
}

/* Commented Backslash Hack hides rule from IE5-Mac \*/
#tabs a span, .rtl #tabs a span { float:none;}
/* End hack */

#tabs a:hover span {
color: #BC2A4D;
}

#tabs #activetab a {
background-position: 0 0;
border-bottom: 1px solid #DCDEE2;
}

#tabs #activetab a span {
background-position: 100% 0;
padding-bottom: 5px;
color: #23649F;
}

#tabs a:hover {
background-position: 0 -69px;
}

#tabs a:hover span {
background-position: 100% -69px;
}

#tabs #activetab a:hover span {
color: #115098;
}


/* Main Panel
---------------------------------------- */
#acp {
margin: 4px 0;
padding: 3px 1px;
min-width: 550px;
background-color: #FFFFFF;
border: 1px #999999 solid;
}

.panel {
background: #F3F3F3 url("./_img/_cs/innerbox_bg.gif") repeat-x top;
padding: 0;
}

span.corners-top, span.corners-bottom, 
span.corners-top span, span.corners-bottom span {
font-size: 1px;
line-height: 1px;
display: block;
height: 5px;
background-repeat: no-repeat;
}

span.corners-top {
background-image: url("./_img/_cs/corners_left.gif");
background-position: 0 0;
margin: -4px -2px 0;
}

span.corners-top span {
background-image: url("./_img/_cs/corners_right.gif");
background-position: 100% 0;
}

span.corners-bottom {
background-image: url("./_img/_cs/corners_left.gif");
background-position: 0 100%;
margin: 0 -2px -4px;
clear: both;
}

span.corners-bottom span {
background-image: url("./_img/_cs/corners_right.gif");
background-position: 100% 100%;
}

/* WinIE tweaks \*/
* html span.corners-top, * html span.corners-bottom { background-image: url("./_img/_cs/corners_left.gif"); }
* html span.corners-top span, * html span.corners-bottom span { background-image: url("./_img/_cs/corners_right.gif"); }
/* End tweaks */

/* Sub-navigation Menu
---------------------------------------- */

/* Menu */
#menu {
float: left;
width: 20%;
font-size: 1.00em;
padding: 0;
border-right: 1px solid #CCCFD3;
}

#menu p {
font-size: 0.85em;
}

#menu ul {
list-style: none;
margin: 0;
padding: 0;
}

/* Default list state */
#menu li {
padding: 0;
margin: 0;
font-size: 0.85em;
font-weight: bold;
display: inline;
}

/* Link styles for the sub-section links */
#menu li span {
display: block;
padding: 3px 3px 3px 8px;
margin: 1px 0;
text-decoration: none;
font-weight: normal;
color: #138ECB;
}

#menu li a:hover, #menu li a:hover span {
text-decoration: none;
background-color: #FFFFFF;
color: #BC2A4D;
}

#menu li a:active, #menu li a:active span {
color: #F632A0;
}

#menu li#activemenu a span {
text-decoration: none;
font-weight: bold;
color: #1180B7;
background: transparent url("./_img/_cs/arrow_right.gif") 0% 50% no-repeat;
}

#menu li#activemenu a:hover span, #menu li#activemenu span {
text-decoration: none;
font-weight: bold;
color: #BC2A4D;
background: #FFFFFF url("./_img/_cs/arrow_right.gif") 1% 50% no-repeat;
}

#menu li a:active, #menu li a:active span, #menu li#activemenu a:active span {
color: #F632A0;
}

#menu li# span.completed {
text-decoration: none;
background: url("./_img/_cs/arrow_down.gif") 1% 50% no-repeat;
}

#menu li.header {
font-family: Tahoma, Helvetica, sans-serif;
display: block;
font-weight: bold;
color: #115098;
border-bottom: 1px solid #327AA5;
padding: 4px 0 2px;
margin-top: 15px;
text-transform: uppercase;
font-size: 0.75em;
}

/* Table styles
---------------------------------------- */

table {
width: 100%;
border: 1px solid #CCCFD3;
background-color: #FFFFFF;
padding: 1px;
}

th {
text-align: left;
padding: 3px 4px;
color: #FFFFFF;
background: #70AED3 url("./_img/_cs/gradient2b.gif") bottom left repeat-x;
border-top: 1px solid #6DACD2;
border-bottom: 1px solid #327AA5;
font-size: 0.85em;
text-transform: uppercase;
}

td {
font-size: 0.90em;
padding: 4px;
line-height: 1.20em;
}

.entry {
text-align: left;
font-weight: normal;
}

.row1 { background-color: #F9F9F9; }
.row2 { background-color: #DCEBFE; }
.row3 { background-color: #DBDFE2; }
.row4 { background-color: #E4E8EB; }
.col1 { background-color: #DCEBFE; }
.col2 { background-color: #F9F9F9; }

.spacer {
background-color: #DBDFE2;
height: 1px;
line-height: 1px;
}

/* General form styles
----------------------------------------*/
fieldset {
margin: 15px 0;
padding: 10px;
border-top: 1px solid #D7D7D7;
border-right: 1px solid #CCCCCC;
border-bottom: 1px solid #CCCCCC;
border-left: 1px solid #D7D7D7;
background-color: #FFFFFF;
position: relative;
}

* html fieldset {
padding: 0 10px 5px 10px;
}

fieldset p {
font-size: 0.85em;
}

legend {
padding: 1px 0;
font-family: Tahoma,arial,Verdana,Sans-serif;
font-size: .9em;
font-weight: bold;
color: #115098;
margin-top: -.4em;
position: relative;
text-transform: none;
line-height: 1.2em;
top: 0;
vertical-align: middle;
}

/* Hide from macIE \*/
legend { top: -1.2em; }
/* end */

* html legend {
margin: 0 0 -10px -7px;
line-height: 1em;
font-size: .85em;
}

/* Holly hack, .rtl comes after html */
* html .rtl legend {
margin: 0;
margin-right: -7px;
}

input, textarea {
font-family: Verdana, Helvetica, Arial, sans-serif;
font-size: 0.9em;
font-weight: normal;
cursor: text;
vertical-align: middle;
padding: 2px;
color: #111111;
border-left: 1px solid #AFAEAA;
border-top: 1px solid #AFAEAA;
border-right: 1px solid #D5D5C8;
border-bottom: 1px solid #D5D5C8;
background-color: #E3DFD8;
}

input:hover, textarea:hover {
border-left: 1px solid #AFAEAA;
border-top: 1px solid #AFAEAA;
border-right: 1px solid #AFAEAA;
border-bottom: 1px solid #AFAEAA;
background-color: #E9E9E2;
}

select {
font-family: Verdana, Helvetica, Arial, sans-serif;
font-size: 0.85em;
font-weight: normal;
font-style: normal;
cursor: pointer;
vertical-align: middle;
width: auto;
color: #000;
}

option {
padding: 0 1em 0 0;
color: #000;
}

option.disabled-option {
color: graytext;
}

.sep {
font-weight: bold;
}

.username-coloured {
font-weight: bold;
}

textarea {
font-family: Verdana, Helvetica, Arial, sans-serif;
font-size: 1.0em;
width: 60%;
padding: 2px;
}

label {
cursor: pointer;
font-size: 0.85em;
padding: 0 5px 0 0;
}

label input {
font-size: 1.0em;
vertical-align: middle;
}

label img {
vertical-align: middle;
}

fieldset.quick, p.quick {
margin: 0 0 5px;
padding: 5px 0 0; 
border: none;
background-color: transparent;
text-align: right;
}

fieldset.quick legend {
display: none;
}

fieldset.tabulated {
background: none;
margin: 0;
padding: 0;
padding-top: 5px;
border: 0;
}

fieldset.tabulated legend {
display: none;
}

fieldset.nobg {
margin: 15px 0 0 0;
padding: 0;
border: none;
background-color: transparent;
}

fieldset.display-options {
margin: 15px 0 2px 0;
padding: 0 0 4px 0;
border: none;
background-color: transparent;
text-align: center;
font-size: 0.75em;
}

fieldset.display-options select, fieldset.display-options input, fieldset.display-options label {
font-size: 1.00em;
vertical-align: middle;
}

select option.disabled {
background-color: #bbb;
color: #fff;
}

/* Special case inputs */
select#board_timezone, 
select#full_folder_action {
width: 95%;
}

/* Definition list layout for forms
Other general def. list properties defined in prosilver_main.css
---------------------------------------- */
dl {
font-family: Verdana, Helvetica, Arial, sans-serif;
font-size: 1.00em;
}

dt {
float: left;
width: auto;
}

dd { color: #666666;}
dd + dd { padding-top: 5px;}
dt span { padding: 0 5px 0 0;}

dt .explain { font-style: italic;}

dt label {
font-size: 1.00em;
text-align: left;
font-weight: bold;
color: #4A5A73;
}

dd label {
font-size: 1.00em;
white-space: nowrap;
margin: 0 10px 0 0;
color: #4A5A73;
}

html>body dd label input { vertical-align: text-bottom;}	/* Tweak for Moz to align checkboxes/radio buttons nicely */

dd input {
font-size: 1.00em;
max-width: 100%;
}

dd select {
font-size: 100%;
width: auto;
max-width: 100%;
}

dd textarea {
font-size: 0.90em;
width: 90%;
}

dd select {
width: auto;
font-size: 1.00em;
}

fieldset dl {
margin-bottom: 10px;
font-size: 0.85em;
}

fieldset dt {
width: 45%;
text-align: left;
border: none;
border-right: 1px solid #CCCCCC;
padding-top: 3px;
}

fieldset dd {
margin: 0 0 0 45%;
padding: 0 0 0 5px;
border: none;
border-left: 1px solid #CCCCCC;
vertical-align: top;
font-size: 1.00em;
}

/* Hover highlights for form rows */
fieldset dl:hover dt, fieldset dl:hover dd {
border-color: #666666;
}

fieldset dl:hover dt label {
color: #000000;
}

fieldset dl dd label:hover {
color: #BC2A4D;
}

input:focus, textarea:focus {
border: 1px solid #BC2A4D;
background-color: #E9E9E2;
color: #BC2A4D;
}

/* Submit button fieldset or paragraph
---------------------------------------- */
fieldset.submit-buttons {
text-align: center;
border: none;
background-color: transparent;
margin: 0;
padding: 4px;
margin-top: -1px;
}

p.submit-buttons {
text-align: center;
margin: 0;
padding: 4px;
margin-top: 10px;
}

fieldset.submit-buttons input, p.submit-buttons input {
padding: 3px 2px;
}

fieldset.submit-buttons legend {
display: none;
}

/* Input field styles
---------------------------------------- */

input.radio, input.permissions-checkbox {
width: auto !important;
background-color: transparent;
border: none;
cursor: default;
}

input.full,
textarea.full {
width: 99%;
}

* html input.full, * html textarea.full { width: 95%;}
input.medium { width: 50%;}
input.narrow { width: 25%;}
input.tiny { width: 10%;}
input.autowidth { width: auto !important;}
.box2 .inputbox { background-color: #E9E9E9;}

/* Form button styles
---------------------------------------- */
a.button1, input.button1, input.button3,
a.button2, input.button2 {
width: auto !important;
padding: 1px 3px 0 3px;
font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
color: #000;
font-size: 0.85em;
background: #EFEFEF url("./_img/_cs/bg_button.gif") repeat-x top;
cursor: pointer;
}

a.button1, input.button1 {
font-weight: bold;
border: 1px solid #666666;
}

/* Alternative button */
a.button2, input.button2 {
border: 1px solid #666666;
}

/* <a> button in the style of the form buttons */
a.button1, a.button1:link, a.button1:visited, a.button1:active,
a.button2, a.button2:link, a.button2:visited, a.button2:active {
text-decoration: none;
color: #000000;
padding: 4px 8px;
}

/* Hover states */
a.button1:hover, input.button1:hover,
a.button2:hover, input.button2:hover {
border: 1px solid #BC2A4D;
background: #EFEFEF url("./_img/_cs/bg_button.gif") repeat bottom;
color: #BC2A4D;
}

input.disabled {
font-weight: normal;
color: #666666;
}


/* Action Highlighting
---------------------------------------- */
.successbox, .errorbox, .yellowbox, .bluebox{
padding: 8px;
margin: 10px 0;
color: #FFFFFF;
text-align: center;
-moz-border-radius:3px; 
-khtml-border-radius:3px; 
-webkit-border-radius:3px; 
border-radius:3px;
}

.successbox { background-color: #228822; }
.errorbox { background-color: #BC2A4D; }
.yellowbox { background-color: #FFB227; }
.bluebox { background-color: #6BBCEF; }

.my_successbox, .my_errorbox, .my_yellowbox, .my_bluebox{
padding: 5px;
margin: 1px 0;
color: #FFFFFF;
text-align: center;
-moz-border-radius:3px; 
-khtml-border-radius:3px; 
-webkit-border-radius:3px; 
border-radius:3px;
}

.my_successbox { background-color: #228822; }
.my_errorbox { background-color: #BC2A4D; }
.my_yellowbox { background-color: #FFB227; }
.my_bluebox { background-color: #6BBCEF; }

* html .errorbox, * html .successbox { height: 1%; } /* Pixel shift fix for IE */

.successbox h3, .errorbox h3 {
color: #FFFFFF;
margin: 0 0 0.5em;
font-size: 1.10em;
font-family: "Lucida Grande",Verdana,Helvetica,Arial,sans-serif;
}

.successbox p, .errorbox p {
color: #FFFFFF;
font-size: 0.85em;
margin-bottom: 0;
}

.errorbox a:link, .errorbox a:active, .errorbox a:visited,
.successbox a:link, .successbox a:active, .successbox a:visited {
color: #DBD7D1;
text-decoration: underline;
font-weight: bold;
}

.errorbox a:hover, .successbox a:hover {
color: #FFFFFF;
text-decoration: none;
font-weight: bold;
}

.clearfix, #tabs, .row, #content, fieldset dl, #page-body {
height: 1%;
overflow: hidden;
}

th {
padding: 3px 4px;
color: #FFFFFF;
background: #70AED3 url("./_img/_cs/gradient2b.gif") bottom left repeat-x;
border-top: 1px solid #6DACD2;
border-bottom: 1px solid #327AA5;
}

td {
padding: 4px;
line-height: 1.20em;
}

.col1 { background-color: #DCEBFE; font-size: 1.0em; }
.col2 { background-color: #F9F9F9; font-size: 1.0em; }

.vitrinlerp,a.vitrinlerp,a.vitrinlerp:link,a.vitrinlerp:visited,a.vitrinlerp:hover  { text-decoration:none; font-size:10px; color:#000000; }
.outmiktar { text-decoration:none; font-size:11px; color:#000000; }
a.vitrinlerp:hover  { text-decoration:underline; font-size:10px; color:#000000; }

.AdMenu{ font-family:Tahoma,Verdana,Arial; color:#000000; font-size:8pt; }
.AdMenu Table{ font-family:Tahoma,Verdana,Arial; color:#000000; font-size:8pt; }
.AdMenu .Middle{ border:1px solid #CCCCCC; height:100px; }
.AdMenu .Middle a{ color:#000000; }

.main-item {
text-decoration: none;
width:70px;
height: 70px;
padding: 5px;
color: #000000;
float: left;
font-family:Tahoma;
font-weight:normal;
font-size: 10px;
display: block;
border: 1px solid #FFFFFF;
text-align: center;
}

.vitrinler,a.vitrinler,a.vitrinler:link,a.vitrinler:visited,a.vitrinler:hover  { font-family:Verdana; font-size:11px; text-decoration:none; color:#000000; }
a.vitrinler:hover  { font-family:Verdana; font-size:11px; text-decoration:underline; color:#000000; }
</style>