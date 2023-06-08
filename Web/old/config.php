<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DEBUG = 0;
$JiraApiToken="bmViaS55aWxtYXpAZGl2aWRvLmNvbTpLTHpvUTc0YVh5c0p2MXFqOGZEajMyM0M="; // Put your Jira Api Token.
$SnykApiToken = "6222811a-6a34-4a5e-9004-b848e5fb870c"; // Put your Snyk Api Token.
$DividoOrgID = "c58206c8-6dd8-4fee-ae75-4f95937cee0a";  // Put Divido Org ID from Snyk.

/* 
    If API token fails, this is a workaround for session. It can be obtained from jira web session from developer tools. 
    It should be set via "curl_setopt()" as follows.
    $JiraCloudToken="cloud.session.token=eyJraWQiOiJzZXNzaW9uLXNlcnZpY2VcL3Byb2QtMTU5Mjg1ODM5NCIsImFsZyI6IlJTMjU2In0.eyJhc3NvY2lhdGlvbnMiOltdLCJzdWIiOiI2MDlhYTc0ZTVkNjdmMjAwNjliOTJhMzgiLCJlbWFpbERvbWFpbiI6ImRpdmlkby5jb20iLCJpbXBlcnNvbmF0aW9uIjpbXSwiY3JlYXRlZCI6MTY1NDc3NTI3NSwicmVmcmVzaFRpbWVvdXQiOjE2NTU5MTUwNDIsInZlcmlmaWVkIjp0cnVlLCJpc3MiOiJzZXNzaW9uLXNlcnZpY2UiLCJzZXNzaW9uSWQiOiJlZTU5YmIyMS1iOTBiLTQ5NTAtODk4MS1mZDlhOTIyYTAyOTgiLCJzdGVwVXBzIjpbXSwiYXVkIjoiYXRsYXNzaWFuIiwibmJmIjoxNjU1OTE0NDQyLCJleHAiOjE2NTg1MDY0NDIsImlhdCI6MTY1NTkxNDQ0MiwiZW1haWwiOiJuZWJpLnlpbG1hekBkaXZpZG8uY29tIiwianRpIjoiZWU1OWJiMjEtYjkwYi00OTUwLTg5ODEtZmQ5YTkyMmEwMjk4In0.p4GL0nkolLDKctHuJsj1g9dvSaWB34JXVdB9KJQaKw7ECxsfq9I7EwP8b40N2MPGfc9W3YY-GMVJNE136FS2sEs7y0bZaRSPAK6YRRKbdzM5tJevJr4V_yz_MGHL44MZ9RgZDgU_avEhRm-SKSAKAxNmTb7UHv8xfwlApPn3nG6wh-BA91Mygtb95_Q0XWJmIS2XXHYmhjCzDPdjk5c_o5dp-6fQhNpcR1210xkx87tzMPEXmAqApKEZ9PNT4wCrsxUAFcjnE7NN0AFpstmDQlNgFipAZmNnI-atvtX76hhZLrP0kMSqn38Imc2z1qhmalpN000xWPBkTPrSmCNCAg";
    curl_setopt($ch, CURLOPT_COOKIE, $JiraCloudToken );
*/

?>