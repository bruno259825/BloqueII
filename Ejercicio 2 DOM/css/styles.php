/**************************************
 * THEME NAME: oceanblue
 *
 * Files included in this sheet:
 *
 *   oceanblue/gradients.css
 *   oceanblue/styles_color.css
 **************************************/

/***** oceanblue/gradients.css start *****/

/**
  *  Adds all the nice finish to the standard theme
  *
  */

.header,
.navbar {
    background-image:url(gradient.jpg);
    background-position:top;
    background-repeat:repeat-x;
}
/***** oceanblue/gradients.css end *****/

/***** oceanblue/styles_color.css start *****/

/*******************************************************************
 styles_color.css
  
 This CSS file contains all color definitions like 
 background-color, font-color, border-color etc.

 Styles are organised into the following sections:

  core
  header
  footer

  admin
  blocks
  calendar
  course
  doc
  login
  message
  tabs
  user

  various modules

*******************************************************************/

/***
 ***  Core
 ***/

a:link,
a:visited {
  color:#0000FF;
}

a.dimmed:link,
a.dimmed:visited {
  color:#AAAAAA;
}

a:hover {
  color:#FF0000;
}

a.autolink:link,
a.autolink:visited {
  color:#000000;
  background-color: #DDDDDD;
}

a.autolink.glossary:hover {
  cursor: help;
}

img.userpicture,
img.grouppicture {
  border-color:#000
}

.block_online_users .listentry img {
  border:#888
}

body {
  background-color:#AAAAFF;
  color:#000066;
}

th.header,
td.header,
div.header {
  background-color:#AAAAFF;
  border-color:#9999FF;
}

.navbar {
  background-color:#AAAAFF;
  border-color:#AAAAFF;
}

table.formtable tbody th {
  background-color: transparent;
}

.highlight {
  background-color:#AAFFAA;
}

.highlight2 {
  color:#AA0000;/* highlight missing terms in forum search */
}

/* Alternate rows even */
.r0 {  
}

/* Alternate rows odd */
.r1 {  
}

/* notification messages (can be good or bad) */
.notifyproblem {
  color:#660000;
}
.notifysuccess {
  color:#006600;
}

#admin-auth_config .required {
  background-color:#DDDDDD;
}

.generalbox .generalboxcontent {
  border-color:#9999FF;
  background-color:#FFFFFF;
}

.informationbox {
  border-color:#9999FF;
}

.feedbackbox {
  border-color: #888888;
}
.feedbackby {
  background-color:#BBBBBB;
}

.noticebox {
  border-color:#9999FF;
}

.errorbox {
  color:#ffffff;
  border-color:#660000;
  background-color:#990000;
}

.errorboxcontent {
  background-color:#FFBBBB;
}

.tabledivider {
  border-color:#9999FF;
}

.sitetopic {
}

.sitetopiccontent {
  border-color:#DDDDDD;
  background-color:#FFFFFF;
  border-color:#9999FF;
}

.dimmed_text {
  color:#AAAAAA;
}

.teacheronly {
  color:#990000;
}

.unread {
  background-color: #FFD991;
} 

.censoredtext {
  color:#000000;
  background-color:#000000;
}


/* kept for backward compatibility with some non-standard modules
   which use these classes for various things */
.generaltab, .generaltabinactive {
  background-color:#BBBBBB;
}
.generaltabselected {
  background-color:#DDDDDD;
}
.generaltabinactive {
  color:#CCCCCC;
}



/***
 *** Header
 ***/

.breadcrumb .sep {
  color:#6666CC;
}
/***
 *** Footer
 ***/

.homelink a:link,
.homelink a:visited {
  background-color: #FFFFFF;
  color: #000066;
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}


/***
 *** Admin
 ***/

.admin .informationbox {
  border-color:#BBBBBB;
  background-color:#FFFFFF;
}

body#admin-index .c0 {
  background-color: #FAFAFA;
}

body#admin-blocks table#blocks .r0,
body#admin-blocks table#incompatible .r0 {
  background-color: #f0f0f0;
}

body#admin-blocks table#blocks .r1,
body#admin-blocks table#incompatible .r1 {
  background-color: #fafafa;
}

body#admin-blocks table#incompatible td.c0 {
  color: #ff0000;
}

table.flexible  .r0 {
  background-color: #f0f0f0;
}

table.flexible .r1 {
  background-color: #fafafa;
}

body#admin-lang .generalbox {
  border-color:#9999FF;
  background-color:#FFFFFF;
}

#adminsettings {
  background-color: #FFFFFF;
  border-color: #9999FF;
  color: #000066;
}

#adminsettings fieldset {
  background-color: #FFFFFF;
  border-color: #9999FF;
  color: #000066;
}

#adminsettings .form-shortname {
  color: #888888;
}

.block_admin_tree.sideblock .link.current {
  background-color:#6666CC;
  color: #FFFFFF;
}

/***
 *** Blocks
 ***/

.sideblock {
  border-color:#9999FF;
}

.sideblock .header {
  border-color: #dddddd;
}

.sideblock .content {
  border-color: #dddddd;
  background-color:#FCFCFC;
}

.sideblock .content hr {
  border-top-color:#999999;
}

#left-column .hidden .header,
#right-column .hidden .header
{
  border-bottom-color: #dddddd;
}

.sideblock .header .hide-show img.hide-show-image {
  background: url('../../pix/t/switch_minus.gif') no-repeat bottom;
}

.sideblock.hidden .header .hide-show img.hide-show-image {
  background: url('../../pix/t/switch_plus.gif') no-repeat bottom;
}

.blockconfigtable {
  background-color:#FFFFFF;
  border-left:1px solid;
  border-right:1px solid;
  border-bottom:1px solid;
  border-color:#AAAAAA;
}


/***
 *** Blogs
 ***/

.blogpost.blogdraft .content {
  background-color:#FFFFFF;
}

.block_blog_tags .official {
  color: #0000FF;
}

.block_blog_tags .personal {
  color: #0066CC;
}


/***
 *** Calendar
 ***/

#calendar .maincalendar,
#calendar .sidecalendar {
  border-color: #DDDDDD;
  background-color:#FFFFFF;
}

#calendar .maincalendar table.calendarmonth th {
  border-color: #000000;
}

table.minicalendar {
  border-color:#9999FF;
}

#calendar .maincalendar .eventlist .event {
  border-color:#9999FF;
}

#calendar .maincalendar .eventlist .event .topic,
#calendar .maincalendar .eventlist .event .picture,
#calendar .maincalendar .eventlist .event .side {
  background-color:#FFFFFF;
}

#calendar .maincalendar table.calendarmonth ul.events-underway {
  color:#999999;
}

#calendar .event_global,
.minicalendar .event_global,
.block_calendar_month .event_global {
  border-color:#2EBA0E !important;
  background-color:#2EBA0E;
}

#calendar .event_course,
.minicalendar .event_course,
.block_calendar_month .event_course {
  border-color:#FF9966 !important;
  background-color:#FF9966;
}

#calendar .event_group,
.minicalendar .event_group,
.block_calendar_month .event_group {
  border-color:#FBBB23 !important;
  background-color:#FBBB23;
}

#calendar .event_user,
.minicalendar .event_user,
.block_calendar_month .event_user {
  border-color:#A1BECB !important;
  background-color:#A1BECB;
}

#calendar .duration_global,
.minicalendar .duration_global {
  border-top-color:#2EBA0E !important;
  border-bottom-color:#2EBA0E !important;
}

#calendar .duration_course,
.minicalendar .duration_course {
  border-top-color:#FF9966 !important;
  border-bottom-color:#FF9966 !important;
}

#calendar .duration_group,
.minicalendar .duration_group {
  border-top-color:#FBBB23 !important;
  border-bottom-color:#FBBB23 !important;
}

#calendar .duration_user,
.minicalendar .duration_user {
  border-top-color:#A1BECB !important;
  border-bottom-color:#A1BECB !important;
}

#calendar .weekend,
.minicalendar .weekend {
  color:#FF0000;
}

#calendar .today,
.minicalendar .today {
  border-color:#000000 !important;
}

.cal_popup_fg {
  background-color:#FFFFFF;
}

.cal_popup_bg {
  border-color:#000000;
  background-color:#FFFFFF;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.block_calendar_month .filters table {
  background-color: #FFFFFF;
}



/***
 *** Course
 ***/

/* course, entry-page, login */
.headingblock {
  border-color:#9999FF;
}

/* course */
.headingblock .outline {
  border-color:#9999FF;
}

#course-view .section td {
  border-color:#9999FF;
}

#course-view .section .content {
  background-color: #FFFFFF;
}

#course-view .section .side {
  background-color: #FFFFFF;
}

#course-view .section .left {
}

#course-view .section .right {
}

#course-view .current .side{
  background-color: #FFD991;
}

#course-view .topics {
}

#course-view .weeks {
}

#course-view .section .spacer {
}

#course-view .section .weekdates {
}

.categoryboxcontent,
.coursebox {
  border-color:#9999FF;
  background-color: #FFFFFF;
}
body#course-user .section {
  border-color:#AAAAAA;
}

#course-report .plugin,
#course-import .plugin {
  margin-bottom: 20px;
  margin-left:10%;
  margin-right:10%;

  border-bottom: 1px solid #cecece;
  border-top: 1px solid #cecece;
  border-right: 1px solid #cecece;
  border-left: 1px solid #cecece;

  background-color: #fdfdfd;
}


/***
 *** Doc
 ***/

/***
 *** Grades
 ***/

body#grade-index .grades {
  border-color:black;
}

body#grade-index .grades td {
  border-color:#e0e0e0;
}

body#grade-index .grades .r0 {
  background-color: #ffffff;
}

body#grade-index .grades .r1 {
  background-color: #f0f0f0;
}


/***
 *** Login
 ***/

.loginbox,
.loginbox.twocolumns .loginpanel,
.loginbox .subcontent {
  border-color:#9999FF;
}

.loginbox .content {
  background-color: #FFFFFF;
}


/***
 *** Message
 ***/

table.message_search_results td {
  border-color:#9999FF;
}

.message.other .author {
  color: #8888CC;
}

.message.me .author {
  color: #999999;
}

.message .time {
  color: #999999;
}

.message .content {
}

/***
 *** Logs
 ***/

.logtable .r1 {
  background-color:#FFFFFF;
}


/***
 *** Tabs
 ***/

.tablink a:link,
.tablink a:visited {
  color:#888888;
}

.selected .tablink a:link,
.selected .tablink a:visited {
  color:#000066;
}
.tabs .side,
.tabrow td {
  border-color: #AAAAAA;
}
.tabrow td {
  background:url(pix/tab/left.gif) top left no-repeat;
}
.tabrow td .tablink {
  background:url(pix/tab/right.gif) top right no-repeat;
}
.tabrow td:hover {
  background-image:url(pix/tab/left_hover.gif);
}
.tabrow td:hover .tablink {
  background-image:url(pix/tab/right_hover.gif);
}
.tabrow .last {
  background: transparent url(pix/tab/right_end.gif) top right no-repeat;
}
.tabrow .selected {
  background:url(pix/tab/left_active.gif) top left no-repeat;
}
.tabrow .selected .tablink {
  background:url(pix/tab/right_active.gif) top right no-repeat;
}
.tabrow td.selected:hover {
  background-image:url(pix/tab/left_active_hover.gif);
}
.tabrow td.selected:hover .tablink {
  background-image:url(pix/tab/right_active_hover.gif);
}
.tabs .r0,
.tabs .r1 {
  background-color: #AAAAFF;
}

/***
 *** User
 ***/

.userpicture {
  background-color: #FFFFFF;
}

.userinfobox {
  border-color: #DDDDDD;
  background-color: #FFFFFF;
}
.groupinfobox {
  border-color: #DDDDDD;
}

#user-edit .formtable {
  background-color: #FFFFFF;
}

/***
 *** Modules: Chat
 ***/

#mod-chat-gui_header_js-jsupdate .text {
  color:#000
}
#mod-chat-gui_header_js-jsupdate .event,
#mod-chat-gui_header_js-jsupdate .title {
  color:#888
}

/***
 *** Modules: Choice
 ***/

/***
 *** Modules: Forum
 ***/

.forumheaderlist,
.forumpost {
  border-color:#9999FF;
}

.forumpost .content {
  background-color: #FFFFFF;
}

.forumpost .left {
  background-color:#EEEEEE;
}

.forumpost .topic {
  border-bottom-color: #EEEEEE;
}

.forumpost .starter {
  background-color:#EEEEEE;
}

.forumheaderlist .discussion .starter {
  background-color:#EEEEEE;
}

.forumheaderlist td {
  border-color: #FFFFFF;
}

.sideblock .post .head {
  color:#555555;
}

.forumthread .unread {
  background-color: #FFD991;
}
#mod-forum-discuss .forumpost {
  background-color: transparent;
}

/** inside border of unread posts in nested format in
 * mod/forum/discuss.php 
 **/
#mod-forum-discuss .forumpost.unread .content {
  border-width:2px;
  border-color: #0000FF;
} 

/** headers of unread posts in threaded format in
 * mod/forum/discuss.php 
 **/
#mod-forum-discuss .forumthread.unread {
  background: #FFFF6B; 
}

#mod-forum-index .unread {
}

/** unread column background on
 * mod/forum/view.php 
 **/
#mod-forum-view .unread{
	background: #FFFF6B;
}

/***
 *** Modules: Glossary
 ***/

.entryboxheader {
  border-color: #BBBBBB;
}

.entrybox {
  border-color: #BBBBBB;
}

.entry {
}

.glossarypost {
  border-color: #DDDDDD;
}

.glossarypost .entryheader,
.glossarypost .entryapproval,
.glossarypost .picture,
.glossarypost .entryattachment,
.glossarypost .left {
  background-color: #F0F0F0;
}

.glossarycomment {
  border-color: #DDDDDD;
}

.glossarycomment .entryheader,
.glossarycomment .picture,
.glossarycomment .left {
  background-color: #F0F0F0;

}

.glossarycategoryheader {
  background-color: #dddddd;
}

.glossaryformatheader {
  background-color: #dddddd;
}


/***
 *** Modules: Journal
 ***/

#mod-journal-view .feedbackbox .left,
#mod-journal-view .feedbackbox .entryheader {
  background-color: #dddddd;
}

/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/

/***
 *** Modules: Quiz
 ***/

body#mod-quiz-report table#attempts td {
  border-color: #dddddd;
}
body#mod-quiz-report table#attempts .r1 {
  background-color: #FFFFFF;
}


/***
 *** Modules: Resource
 ***/

#mod-resource-view table {
  background-color: #FFFFFF;
}

.ims-nav-dimmed {
  color: #AAAAAA;
  text-decoration: none;
}

.ims-nav-button a:link,
.ims-nav-button a:visited,
.ims-nav-button a:hover {
  color: #000;
  text-decoration: none;
}

.ims-nav-dimmed,
.ims-nav-button a:link,
.ims-nav-button a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.ims-nav-button a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}


/***
 *** Modules: Scorm
 ***/

/***
 *** Modules: Survey
 ***/

#mod-survey-view .r0 {
  background-color: #FFFFFF;
}
#mod-survey-view .r1 {
  background-color: #DDDDDD;
}


/***
 *** Modules: Wiki
 ***/

/***
 *** Modules: Workshop
 ***/

.workshoppostpicture {
  background-color:#FEE6B9;
}

.workshopassessmentheading {
  background-color:#DDDDDD;
}

.error {
  color:#ff0000;
}
/***** oceanblue/styles_color.css end *****/

