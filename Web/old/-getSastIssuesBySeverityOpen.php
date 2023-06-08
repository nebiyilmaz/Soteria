<?php
include 'config.php';




/* 
    SAST Issue EPIC Link - SB-241
*/
//$JiraURL="https://divido.atlassian.net/rest/agile/1.0/epic/20083/issue?maxResults=1500";
$JiraURL='https://divido.atlassian.net/rest/api/2/search';





/* 
    If API token fails, this is a workaround for session. It can be obtained from jira web session from developer tools. 
    It should be set via "curl_setopt()" as follows.
    $JiraCloudToken="cloud.session.token=";
    curl_setopt($ch, CURLOPT_COOKIE, $JiraCloudToken );
*/

$JiraHeader = array("Content-Type: application/json", "Authorization: Basic $JiraApiToken");

$CriticalIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Highest) and status not in("✅ DONE", Closed) '
);

$HighIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(High) and status not in("✅ DONE", Closed) '
);

$MediumIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Medium) and status not in("✅ DONE", Closed) '
);

$LowIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Low) and status not in("✅ DONE", Closed) '
);

$InfoIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Lowest) and status not in("✅ DONE", Closed) '
);




function GetIssueCounts($JiraJQL){

    global $JiraURL;
    global $JiraHeader;

    $ch = curl_init($JiraURL);

    //curl_setopt($ch, CURLOPT_PROXY, '127.0.0.1:8080');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $JiraHeader);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($JiraJQL));

    $JiraResponse = curl_exec($ch);
    curl_close($ch);

    $Issues = (array)json_decode($JiraResponse);

    return $Issues['total'];
}

$CriticalIssuesCount = GetIssueCounts($CriticalIssuesJQL);
$HighIssuesCount = GetIssueCounts($HighIssuesJQL);
$MediumIssuesCount = GetIssueCounts($MediumIssuesJQL);
$LowIssuesCount = GetIssueCounts($LowIssuesJQL);
$InfoIssuesCount = GetIssueCounts($InfoIssuesJQL);

$SastIssuesBySeverityOpen = array(
    array("label" => "Critical", "y" => $CriticalIssuesCount),
    array("label" => "High", "y" => $HighIssuesCount),
    array("label" => "Medium", "y" => $MediumIssuesCount),
    array("label" => "Low", "y" => $LowIssuesCount),
    array("label" => "Info", "y" => $InfoIssuesCount)
);

print_r(json_encode($SastIssuesBySeverityOpen, JSON_PRETTY_PRINT));
echo "\n";

$file = fopen("json/SastIssuesBySeverityOpen.json","w");
fwrite($file, json_encode($SastIssuesBySeverityOpen, JSON_PRETTY_PRINT));
fclose($file);


exit();



?>