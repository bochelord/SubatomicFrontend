<?PHP
require_once("fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('subatomic-inc.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('jose@subatomic-inc.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'kthxbyec_wor1',
                      /*password*/'7vWaJE91cIH2t6u',
                      /*database name*/'kthxbyec_wor1',
                      /*table name*/'subatomic_login');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>