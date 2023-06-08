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

$OpenIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Highest,High,Medium,Low) and status not in("✅ DONE", Closed) '
);

$ClosedIssuesJQL = array(
    'jql' => '"Epic Link"=SB-241 and priority in(Highest,High,Medium,Low) and status in("✅ DONE", Closed) '
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

$OpenIssuesCount = GetIssueCounts($OpenIssuesJQL);
$ClosedIssuesCount = GetIssueCounts($ClosedIssuesJQL);



$SastIssuesByType = array(
    array("label" => "Open Issues", "y" => $OpenIssuesCount),
    array("label" => "Closed Issues", "y" => $ClosedIssuesCount)
);

print_r(json_encode($SastIssuesByType, JSON_PRETTY_PRINT));
echo "\n";

$file = fopen("json/SastIssuesByStatus.json","w");
fwrite($file, json_encode($SastIssuesByType, JSON_PRETTY_PRINT));
fclose($file);


exit();



?>