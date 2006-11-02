<?php

$sqlparts = array(
    "contextfilter"         =>  " AND itemattributes.contextId = '{$values['contextId']}' ",
    "categoryfilter"        =>  " AND projectattributes.categoryId = '{$values['categoryId']}' ",
    "timeframefilter"       =>  " AND itemattributes.timeframeId ='{$values['timeframeId']}' ",
    "notcontextfilter"      =>  " AND itemattributes.contextId != '{$values['contextId']}' ",
    "notcategoryfilter"     =>  " AND projectattributes.categoryId != '{$values['categoryId']}' ",
    "nottimeframefilter"    =>  " AND itemattributes.timeframeId !='{$values['timeframeId']}' ",
    "activeprojects"        =>  " AND (projectstatus.dateCompleted IS NULL OR projectstatus.dateCompleted = '0000-00-00') AND (((CURDATE()>=DATE_ADD(projectattributes.deadline, INTERVAL -(projectattributes.suppressUntil) DAY)) OR projectattributes.suppress='n')) ",
    "completedprojects"     =>  " AND `projectstatus`.`dateCompleted` > 0 ",
    "activelistitems"       =>  " AND (`listItems`.`dateCompleted` IS NOT NULL AND `listItems`.`dateCompleted` ='0000-00-00') ",
    "completedlistitems"    =>  " AND (`listItems`.`dateCompleted`!='0000-00-00' AND `listItems`.`dateCompleted` IS NOT NULL) ",
    "getchecklists"         =>  " AND `checklist`.`categoryId`='{$values['categoryId']}' ",
    );
?>