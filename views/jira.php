<html xmlns="http://www.w3.org/TR/REC-html40">

<head>
    <title>Jira</title>
    <style type="text/css">
        table {
            mso-displayed-decimal-separator: "\,";
            mso-displayed-thousand-separator: "\.";
        }
    </style>
    <META HTTP-EQUIV="Content-Type" Content="application/vnd.ms-excel; charset=UTF-8">
    <!-- JRA-7598 - ensure fields (e.g. description) occupy only one cell - even fields containing newlines. -->
    <!--
Vertical align all cells to the top, in order to align all issue rows of issuetable to the top,
since Excel does not use or save the css files it is hardcoded here.
-->
    <style>
        @page {
            mso-page-orientation: landscape;
            margin: .25in .25in .5in .25in;
            mso-header-margin: .5in;
            mso-footer-margin: .25in;
            mso-footer-data: "&R&P of &N";
            mso-horizontal-page-align: center;
            mso-vertical-page-align: center;
        }

        td.issuekey,
        td.issuetype,
        td.status {
            mso-style-parent: "";
            mso-number-format: \@;
            text-align: left;
        }

        br {
            mso-data-placement: same-cell;
        }

        td {
            vertical-align: top;
        }
    </style>

    <!--[if gte mso 9]><xml>
<x:ExcelWorkbook>
<x:ExcelWorksheets>
<x:ExcelWorksheet>
<x:Name>general_report</x:Name>
<x:WorksheetOptions>
<x:Print>
<x:ValidPrinterInfo/>
</x:Print>
</x:WorksheetOptions>
</x:ExcelWorksheet>
</x:ExcelWorksheets>
</x:ExcelWorkbook>
</xml><![endif]-->
</head>

<body>

    <table border="1">

        <tr>
            <td colspan="67">
                <a href="https://halbesrechteck.atlassian.net/issues/?jql=order+by+created+DESC">Jira</a>
            </td>
        </tr>
        <tr>
            <td colspan="67">
                <strong>35</strong> Vorgänge werden unter <strong>20/Jan/22 2:43 PM</strong> angezeigt.
            </td>
        </tr>
    </table>




    <table id="issuetable" class="aui " border="1" cellpadding="3" cellspacing="1" width="100%">
        <thead>
            <tr class="rowHeader">

                <th class="colHeaderLink headerrow-project" data-id="project">
                    Projekt
                </th>

                <th class="colHeaderLink headerrow-issuekey" data-id="issuekey">
                    Schlüssel
                </th>

                <th class="colHeaderLink headerrow-summary" data-id="summary">
                    Zusammenfassung
                </th>

                <th class="colHeaderLink headerrow-issuetype" data-id="issuetype">
                    Vorgangstyp
                </th>

                <th class="colHeaderLink headerrow-status" data-id="status">
                    Status
                </th>

                <th class="colHeaderLink headerrow-priority" data-id="priority">
                    Priorität
                </th>

                <th class="colHeaderLink headerrow-resolution" data-id="resolution">
                    Lösung
                </th>

                <th class="colHeaderLink headerrow-assignee" data-id="assignee">
                    Zugewiesene Person
                </th>

                <th class="colHeaderLink headerrow-reporter" data-id="reporter">
                    Autor
                </th>

                <th class="colHeaderLink headerrow-creator" data-id="creator">
                    Ersteller
                </th>

                <th class="colHeaderLink headerrow-created" data-id="created">
                    Erstellt
                </th>

                <th class="colHeaderLink headerrow-lastViewed" data-id="lastViewed">
                    Zuletzt angezeigt
                </th>

                <th class="colHeaderLink headerrow-updated" data-id="updated">
                    Aktualisiert
                </th>

                <th class="colHeaderLink headerrow-resolutiondate" data-id="resolutiondate">
                    Erledigt
                </th>

                <th class="colHeaderLink headerrow-versions" data-id="versions">
                    Betrifft Versionen
                </th>

                <th class="colHeaderLink headerrow-fixVersions" data-id="fixVersions">
                    Lösungsversionen
                </th>

                <th class="colHeaderLink headerrow-components" data-id="components">
                    Komponenten
                </th>

                <th class="colHeaderLink headerrow-duedate" data-id="duedate">
                    Fälligkeitsdatum
                </th>

                <th class="colHeaderLink headerrow-votes" data-id="votes">
                    Stimmen
                </th>

                <th class="colHeaderLink headerrow-watches" data-id="watches">
                    Beobachter
                </th>

                <th class="colHeaderLink headerrow-thumbnail" data-id="thumbnail">
                    Bilder
                </th>

                <th class="colHeaderLink headerrow-timeoriginalestimate" data-id="timeoriginalestimate">
                    Ursprüngliche Schätzung
                </th>

                <th class="colHeaderLink headerrow-timeestimate" data-id="timeestimate">
                    Restschätzung
                </th>

                <th class="colHeaderLink headerrow-timespent" data-id="timespent">
                    Benötigte Zeit
                </th>

                <th class="colHeaderLink headerrow-workratio" data-id="workratio">
                    Verhältnis tatsächlicher zu geschätzter Arbeit
                </th>

                <th class="colHeaderLink headerrow-subtasks" data-id="subtasks">
                    Sub-Tasks
                </th>

                <th class="colHeaderLink headerrow-issuelinks" data-id="issuelinks">
                    Verknüpfte Vorgänge
                </th>

                <th class="colHeaderLink headerrow-environment" data-id="environment">
                    Umgebung
                </th>

                <th class="colHeaderLink headerrow-description" data-id="description">
                    Beschreibung
                </th>

                <th class="colHeaderLink headerrow-security" data-id="security">
                    Sicherheitsstufe
                </th>

                <th class="colHeaderLink headerrow-progress" data-id="progress">
                    Fortschritt
                </th>

                <th class="colHeaderLink headerrow-aggregateprogress" data-id="aggregateprogress">
                    Σ Fortschritt
                </th>

                <th class="colHeaderLink headerrow-aggregatetimespent" data-id="aggregatetimespent">
                    Σ Benötigte Zeit
                </th>

                <th class="colHeaderLink headerrow-aggregatetimeestimate" data-id="aggregatetimeestimate">
                    Σ Restschätzung
                </th>

                <th class="colHeaderLink headerrow-aggregatetimeoriginalestimate" data-id="aggregatetimeoriginalestimate">
                    Σ Ursprüngliche Schätzung
                </th>

                <th class="colHeaderLink headerrow-labels" data-id="labels">
                    Label
                </th>

                <th class="colHeaderLink headerrow-statuscategorychangedate" data-id="statuscategorychangedate">
                    Statuskategorie geändert
                </th>

                <th class="colHeaderLink headerrow-statusCategory" data-id="statusCategory">
                    Statuskategorie
                </th>

                <th class="colHeaderLink headerrow-parent" data-id="parent">
                    Übergeordnet
                </th>

                <th class="colHeaderLink headerrow-customfield_10009" data-id="customfield_10009">
                    Actual end
                </th>

                <th class="colHeaderLink headerrow-customfield_10008" data-id="customfield_10008">
                    Actual start
                </th>

                <th class="colHeaderLink headerrow-customfield_10003" data-id="customfield_10003">
                    Approvers
                </th>

                <th class="colHeaderLink headerrow-customfield_10007" data-id="customfield_10007">
                    Change reason
                </th>

                <th class="colHeaderLink headerrow-customfield_10006" data-id="customfield_10006">
                    Change risk
                </th>

                <th class="colHeaderLink headerrow-customfield_10005" data-id="customfield_10005">
                    Change type
                </th>

                <th class="colHeaderLink headerrow-customfield_10029" data-id="customfield_10029">
                    Datum
                </th>

                <th class="colHeaderLink headerrow-customfield_10013" data-id="customfield_10013">
                    Epic Color
                </th>

                <th class="colHeaderLink headerrow-customfield_10014" data-id="customfield_10014">
                    Epic Link
                </th>

                <th class="colHeaderLink headerrow-customfield_10011" data-id="customfield_10011">
                    Epic Name
                </th>

                <th class="colHeaderLink headerrow-customfield_10012" data-id="customfield_10012">
                    Epic Status
                </th>

                <th class="colHeaderLink headerrow-customfield_10021" data-id="customfield_10021">
                    Flagged
                </th>

                <th class="colHeaderLink headerrow-customfield_10004" data-id="customfield_10004">
                    Impact
                </th>

                <th class="colHeaderLink headerrow-customfield_10017" data-id="customfield_10017">
                    Issue color
                </th>

                <th class="colHeaderLink headerrow-customfield_10002" data-id="customfield_10002">
                    Organizations
                </th>

                <th class="colHeaderLink headerrow-customfield_10018" data-id="customfield_10018">
                    Parent Link
                </th>

                <th class="colHeaderLink headerrow-customfield_10019" data-id="customfield_10019">
                    Rank
                </th>

                <th class="colHeaderLink headerrow-customfield_10010" data-id="customfield_10010">
                    Request Type
                </th>

                <th class="colHeaderLink headerrow-customfield_10030" data-id="customfield_10030">
                    Request participants
                </th>

                <th class="colHeaderLink headerrow-customfield_10020" data-id="customfield_10020">
                    Sprint
                </th>

                <th class="colHeaderLink headerrow-customfield_10015" data-id="customfield_10015">
                    Start date
                </th>

                <th class="colHeaderLink headerrow-customfield_10016" data-id="customfield_10016">
                    Story point estimate
                </th>

                <th class="colHeaderLink headerrow-customfield_10023" data-id="customfield_10023">
                    Target end
                </th>

                <th class="colHeaderLink headerrow-customfield_10022" data-id="customfield_10022">
                    Target start
                </th>

                <th class="colHeaderLink headerrow-customfield_10001" data-id="customfield_10001">
                    Team
                </th>

                <th class="colHeaderLink headerrow-customfield_10031" data-id="customfield_10031">
                    Zugewiesene Person 2
                </th>

                <th class="colHeaderLink headerrow-customfield_10024" data-id="customfield_10024">
                    [CHART] Date of First Response
                </th>

                <th class="colHeaderLink headerrow-customfield_10000" data-id="customfield_10000">
                    development
                </th>
            </tr>
        </thead>
        <tbody>


            <tr id="issuerow10059" rel="10059" data-issuekey="MOBO-60" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-60" href="https://halbesrechteck.atlassian.net/browse/MOBO-60">MOBO-60</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-22</span>
                        Checkout
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 13/Jan/22 11:26 AM </td>
                <td class="lastViewed"> 20/Jan/22 2:43 PM </td>
                <td class="updated"> 17/Jan/22 3:49 PM </td>
                <td class="resolutiondate"> 17/Jan/22 3:49 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 17/Jan/22 3:49 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> Warenkorb/Checkout
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00093:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10058" rel="10058" data-issuekey="MOBO-59" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-59" href="https://halbesrechteck.atlassian.net/browse/MOBO-59">MOBO-59</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-22</span>
                        Warenkorb
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 13/Jan/22 11:26 AM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 13/Jan/22 11:26 AM </td>
                <td class="resolutiondate"> 13/Jan/22 11:26 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 13/Jan/22 11:26 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> Warenkorb/Checkout
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0008v:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10057" rel="10057" data-issuekey="MOBO-58" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-58" href="https://halbesrechteck.atlassian.net/browse/MOBO-58">MOBO-58</a>
                </td>
                <td class="summary">
                    <p>
                        Dokumentation
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Jan/22 10:20 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:22 PM </td>
                <td class="updated"> 20/Jan/22 2:22 PM </td>
                <td class="resolutiondate"> 20/Jan/22 2:22 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"> <a href="https://halbesrechteck.atlassian.net/secure/attachment/10000/image-20220112-222136.png">
                        image-20220112-222136.png
                    </a>
                </td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:22 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004k:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        Andreas L, jonas.helmboldt </div>
                </td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10056" rel="10056" data-issuekey="MOBO-57" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-57" href="https://halbesrechteck.atlassian.net/browse/MOBO-57">MOBO-57</a>
                </td>
                <td class="summary">
                    <p>
                        3 Unterseiten
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Jan/22 10:15 PM </td>
                <td class="lastViewed"> 13/Jan/22 3:00 PM </td>
                <td class="updated"> 20/Jan/22 12:28 AM </td>
                <td class="resolutiondate"> 20/Jan/22 12:28 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 12:28 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003j:i
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10054" rel="10054" data-issuekey="MOBO-55" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-55" href="https://halbesrechteck.atlassian.net/browse/MOBO-55">MOBO-55</a>
                </td>
                <td class="summary">
                    <p>
                        Wishlist
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 07/Jan/22 4:32 PM </td>
                <td class="lastViewed"> 20/Jan/22 1:56 PM </td>
                <td class="updated"> 20/Jan/22 1:56 PM </td>
                <td class="resolutiondate"> 17/Jan/22 3:49 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">14400</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">14400</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 17/Jan/22 3:49 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004g:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"> <span title="13/Jan/22 3:11 PM"><time class="livestamp allow-future" datetime="2022-01-13T15:11:41+0000">13/Jan/22 3:11 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10053" rel="10053" data-issuekey="MOBO-54" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-54" href="https://halbesrechteck.atlassian.net/browse/MOBO-54">MOBO-54</a>
                </td>
                <td class="summary">
                    <p>
                        /api directory für http requests
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 14/Dez/21 3:44 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:27 PM </td>
                <td class="updated"> 20/Jan/22 2:27 PM </td>
                <td class="resolutiondate"> 20/Jan/22 2:27 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:27 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003l:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10052" rel="10052" data-issuekey="MOBO-53" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-53" href="https://halbesrechteck.atlassian.net/browse/MOBO-53">MOBO-53</a>
                </td>
                <td class="summary">
                    <p>
                        Produktkategorie Seite
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 13/Dez/21 8:45 PM </td>
                <td class="lastViewed"> 19/Jan/22 1:45 AM </td>
                <td class="updated"> 20/Jan/22 2:33 PM </td>
                <td class="resolutiondate"> 16/Jan/22 9:00 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 16/Jan/22 9:00 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003k:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10051" rel="10051" data-issuekey="MOBO-52" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-52" href="https://halbesrechteck.atlassian.net/browse/MOBO-52">MOBO-52</a>
                </td>
                <td class="summary">
                    <p>
                        404 Errorpage erstellen
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 13/Dez/21 12:52 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 12/Jan/22 10:17 PM </td>
                <td class="resolutiondate"> 12/Jan/22 10:17 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 12/Jan/22 10:17 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004j:9
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10050" rel="10050" data-issuekey="MOBO-51" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-51" href="https://halbesrechteck.atlassian.net/browse/MOBO-51">MOBO-51</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-21</span>
                        Login und Registrierung Seiten gestalten
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> Andreas L
                </td>
                <td class="reporter"> Andreas L
                </td>
                <td class="creator"> Andreas L
                </td>
                <td class="created"> 08/Dez/21 3:06 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:37 PM </td>
                <td class="updated"> 20/Jan/22 2:39 PM </td>
                <td class="resolutiondate"> 20/Jan/22 2:39 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"> Seiten mit CSS anpassen.
                </td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:39 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> Login, Registrierung
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0007b:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10049" rel="10049" data-issuekey="MOBO-50" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-50" href="https://halbesrechteck.atlassian.net/browse/MOBO-50">MOBO-50</a>
                </td>
                <td class="summary">
                    <p>
                        Products Page mit Query in der Adressleiste
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 08/Dez/21 1:52 PM </td>
                <td class="lastViewed"> 08/Dez/21 8:35 PM </td>
                <td class="updated"> 16/Jan/22 9:00 PM </td>
                <td class="resolutiondate"> 16/Jan/22 9:00 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Backend, Frontend</td>
                <td class="statuscategorychangedate"> 16/Jan/22 9:00 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003q:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10048" rel="10048" data-issuekey="MOBO-49" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-49" href="https://halbesrechteck.atlassian.net/browse/MOBO-49">MOBO-49</a>
                </td>
                <td class="summary">
                    <p>
                        Suchleiste
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 08/Dez/21 11:27 AM </td>
                <td class="lastViewed"> 13/Dez/21 8:45 PM </td>
                <td class="updated"> 16/Dez/21 5:07 PM </td>
                <td class="resolutiondate"> 16/Dez/21 5:07 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 16/Dez/21 5:07 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004m:9
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        jonas.liehmann </div>
                </td>
                <td class="customfield_10024"> <span title="15/Dez/21 6:57 PM"><time class="livestamp allow-future" datetime="2021-12-15T18:57:07+0000">15/Dez/21 6:57 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10047" rel="10047" data-issuekey="MOBO-48" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-48" href="https://halbesrechteck.atlassian.net/browse/MOBO-48">MOBO-48</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-44</span>
                        FAQ
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 07/Dez/21 11:04 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 07/Dez/21 11:04 PM </td>
                <td class="resolutiondate"> 07/Dez/21 11:04 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 07/Dez/21 11:04 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> FAQ/Help
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0006v:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10046" rel="10046" data-issuekey="MOBO-47" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-47" href="https://halbesrechteck.atlassian.net/browse/MOBO-47">MOBO-47</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-44</span>
                        PC-Montage
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-yellow jira-issue-status-lozenge-indeterminate aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;VERWORFEN&lt;/span&gt;">VERWORFEN</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> <em>Nicht erledigt</em>
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 07/Dez/21 11:03 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:39 PM </td>
                <td class="updated"> 20/Jan/22 2:35 PM </td>
                <td class="resolutiondate"> &nbsp; </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:35 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-yellow
            jira-issue-status-lozenge-max-width-medium">In Arbeit</span>
                </td>
                <td class="parent"> FAQ/Help
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0006n:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10045" rel="10045" data-issuekey="MOBO-46" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-46" href="https://halbesrechteck.atlassian.net/browse/MOBO-46">MOBO-46</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-44</span>
                        Delivery Page
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 07/Dez/21 11:03 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 08/Dez/21 11:28 AM </td>
                <td class="resolutiondate"> 08/Dez/21 11:28 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 08/Dez/21 11:28 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> FAQ/Help
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0006f:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10044" rel="10044" data-issuekey="MOBO-45" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-45" href="https://halbesrechteck.atlassian.net/browse/MOBO-45">MOBO-45</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-44</span>
                        Payment Page
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 07/Dez/21 11:02 PM </td>
                <td class="lastViewed"> 07/Dez/21 11:03 PM </td>
                <td class="updated"> 07/Dez/21 11:02 PM </td>
                <td class="resolutiondate"> 07/Dez/21 11:02 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 07/Dez/21 11:02 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> FAQ/Help
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00067:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10043" rel="10043" data-issuekey="MOBO-44" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-44" href="https://halbesrechteck.atlassian.net/browse/MOBO-44">MOBO-44</a>
                </td>
                <td class="summary">
                    <p>
                        FAQ/Help
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 06/Dez/21 11:28 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:35 PM </td>
                <td class="updated"> 20/Jan/22 1:56 PM </td>
                <td class="resolutiondate"> 12/Jan/22 11:30 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">7200</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-45, MOBO-46, MOBO-47, MOBO-48 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">7200</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 12/Jan/22 11:30 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003y:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10042" rel="10042" data-issuekey="MOBO-43" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-43" href="https://halbesrechteck.atlassian.net/browse/MOBO-43">MOBO-43</a>
                </td>
                <td class="summary">
                    <p>
                        Homepage
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 06/Dez/21 6:58 PM </td>
                <td class="lastViewed"> 20/Jan/22 1:57 PM </td>
                <td class="updated"> 20/Jan/22 1:57 PM </td>
                <td class="resolutiondate"> 16/Jan/22 2:10 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">7200</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">7200</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Backend, Frontend</td>
                <td class="statuscategorychangedate"> 16/Jan/22 2:10 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004j:e
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        jonas.liehmann </div>
                </td>
                <td class="customfield_10024"> <span title="08/Dez/21 4:42 PM"><time class="livestamp allow-future" datetime="2021-12-08T16:42:58+0000">08/Dez/21 4:42 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10041" rel="10041" data-issuekey="MOBO-42" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-42" href="https://halbesrechteck.atlassian.net/browse/MOBO-42">MOBO-42</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-25</span>
                        Eigentliches Impressum/Datenschutz
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 05/Dez/21 11:29 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 20/Jan/22 2:33 PM </td>
                <td class="resolutiondate"> 06/Dez/21 6:57 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 06/Dez/21 6:57 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> Impressum/Datenschutz
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0005z:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10039" rel="10039" data-issuekey="MOBO-40" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-40" href="https://halbesrechteck.atlassian.net/browse/MOBO-40">MOBO-40</a>
                </td>
                <td class="summary">
                    <p>
                        Banner und Kategorieleiste
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 05/Dez/21 11:28 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:33 PM </td>
                <td class="updated"> 20/Jan/22 2:28 PM </td>
                <td class="resolutiondate"> 16/Jan/22 9:00 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">7200</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">7200</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Backend, Frontend</td>
                <td class="statuscategorychangedate"> 16/Jan/22 9:00 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003m:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        jonas.liehmann </div>
                </td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10038" rel="10038" data-issuekey="MOBO-39" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-39" href="https://halbesrechteck.atlassian.net/browse/MOBO-39">MOBO-39</a>
                </td>
                <td class="summary">
                    <p>
                        About Us
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 03/Dez/21 11:23 PM </td>
                <td class="lastViewed"> 20/Jan/22 1:57 PM </td>
                <td class="updated"> 20/Jan/22 1:57 PM </td>
                <td class="resolutiondate"> 10/Jan/22 9:01 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">3600</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">3600</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 10/Jan/22 9:01 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004j:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        jonas.liehmann </div>
                </td>
                <td class="customfield_10024"> <span title="10/Jan/22 9:01 AM"><time class="livestamp allow-future" datetime="2022-01-10T09:01:24+0000">10/Jan/22 9:01 AM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10035" rel="10035" data-issuekey="MOBO-36" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-36" href="https://halbesrechteck.atlassian.net/browse/MOBO-36">MOBO-36</a>
                </td>
                <td class="summary">
                    <p>
                        Grobes Design in Adobe Xd
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 01/Dez/21 7:13 PM </td>
                <td class="lastViewed"> 01/Dez/21 7:13 PM </td>
                <td class="updated"> 03/Dez/21 11:19 PM </td>
                <td class="resolutiondate"> 03/Dez/21 11:19 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 03/Dez/21 11:19 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0005b:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10031" rel="10031" data-issuekey="MOBO-32" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-32" href="https://halbesrechteck.atlassian.net/browse/MOBO-32">MOBO-32</a>
                </td>
                <td class="summary">
                    <p>
                        Datenbank aufsetzen
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.helmboldt
                </td>
                <td class="creator"> jonas.helmboldt
                </td>
                <td class="created"> 24/Nov/21 10:25 AM </td>
                <td class="lastViewed"> 03/Dez/21 11:25 PM </td>
                <td class="updated"> 05/Dez/21 11:28 PM </td>
                <td class="resolutiondate"> 05/Dez/21 11:28 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 05/Dez/21 11:28 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0005j:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10027" rel="10027" data-issuekey="MOBO-28" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-28" href="https://halbesrechteck.atlassian.net/browse/MOBO-28">MOBO-28</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-24</span>
                        Mein Profil
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-yellow jira-issue-status-lozenge-indeterminate aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;VERWORFEN&lt;/span&gt;">VERWORFEN</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> <em>Nicht erledigt</em>
                </td>
                <td class="assignee"> Andreas L
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:51 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 20/Jan/22 2:34 PM </td>
                <td class="resolutiondate"> &nbsp; </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:34 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-yellow
            jira-issue-status-lozenge-max-width-medium">In Arbeit</span>
                </td>
                <td class="parent"> Administration
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003j:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10026" rel="10026" data-issuekey="MOBO-27" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-27" href="https://halbesrechteck.atlassian.net/browse/MOBO-27">MOBO-27</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-24</span>
                        Produktverwaltung
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-yellow jira-issue-status-lozenge-indeterminate aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;VERWORFEN&lt;/span&gt;">VERWORFEN</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> <em>Nicht erledigt</em>
                </td>
                <td class="assignee"> Andreas L
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:51 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 20/Jan/22 2:34 PM </td>
                <td class="resolutiondate"> &nbsp; </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:34 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-yellow
            jira-issue-status-lozenge-max-width-medium">In Arbeit</span>
                </td>
                <td class="parent"> Administration
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003b:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10025" rel="10025" data-issuekey="MOBO-26" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-26" href="https://halbesrechteck.atlassian.net/browse/MOBO-26">MOBO-26</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-24</span>
                        Nutzerverwaltung
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-yellow jira-issue-status-lozenge-indeterminate aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;VERWORFEN&lt;/span&gt;">VERWORFEN</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> <em>Nicht erledigt</em>
                </td>
                <td class="assignee"> Andreas L
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:51 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 20/Jan/22 2:34 PM </td>
                <td class="resolutiondate"> &nbsp; </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:34 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-yellow
            jira-issue-status-lozenge-max-width-medium">In Arbeit</span>
                </td>
                <td class="parent"> Administration
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00033:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10024" rel="10024" data-issuekey="MOBO-25" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-25" href="https://halbesrechteck.atlassian.net/browse/MOBO-25">MOBO-25</a>
                </td>
                <td class="summary">
                    <p>
                        Impressum/Datenschutz
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:49 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:33 PM </td>
                <td class="updated"> 20/Jan/22 2:34 PM </td>
                <td class="resolutiondate"> 13/Jan/22 3:01 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">3600</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-42 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"> easy füllen mit (LoremPisum), in VSCode: _Lorem100_ und dann kommen da 100 Wörter Lorem Ipsum
                </td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">3600</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 13/Jan/22 3:01 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004j:d
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        Andreas L, jonas.liehmann </div>
                </td>
                <td class="customfield_10024"> <span title="06/Dez/21 6:57 PM"><time class="livestamp allow-future" datetime="2021-12-06T18:57:10+0000">06/Dez/21 6:57 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10023" rel="10023" data-issuekey="MOBO-24" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-24" href="https://halbesrechteck.atlassian.net/browse/MOBO-24">MOBO-24</a>
                </td>
                <td class="summary">
                    <p>
                        Administration
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-yellow jira-issue-status-lozenge-indeterminate aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;VERWORFEN&lt;/span&gt;">VERWORFEN</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> <em>Nicht erledigt</em>
                </td>
                <td class="assignee"> <em>Nicht zugewiesen</em>
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:49 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:34 PM </td>
                <td class="updated"> 20/Jan/22 12:28 AM </td>
                <td class="resolutiondate"> &nbsp; </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-26, MOBO-27, MOBO-28 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 12:28 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-yellow
            jira-issue-status-lozenge-max-width-medium">In Arbeit</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0002n:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10021" rel="10021" data-issuekey="MOBO-22" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-22" href="https://halbesrechteck.atlassian.net/browse/MOBO-22">MOBO-22</a>
                </td>
                <td class="summary">
                    <p>
                        Warenkorb/Checkout
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 15/Nov/21 10:49 PM </td>
                <td class="lastViewed"> 20/Jan/22 1:56 PM </td>
                <td class="updated"> 20/Jan/22 1:56 PM </td>
                <td class="resolutiondate"> 17/Jan/22 3:50 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">21600</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-59, MOBO-60 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">21600</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 17/Jan/22 3:50 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003u:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"> <span title="13/Jan/22 11:26 AM"><time class="livestamp allow-future" datetime="2022-01-13T11:26:00+0000">13/Jan/22 11:26 AM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10020" rel="10020" data-issuekey="MOBO-21" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-21" href="https://halbesrechteck.atlassian.net/browse/MOBO-21">MOBO-21</a>
                </td>
                <td class="summary">
                    <p>
                        Login, Registrierung
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> Andreas L
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 14/Nov/21 9:16 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:42 PM </td>
                <td class="updated"> 20/Jan/22 2:42 PM </td>
                <td class="resolutiondate"> 19/Jan/22 11:08 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">36000</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-51 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"> Für Login eine login.html für die Oberfläche und Formular dann an login.php schicken?
                </td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">36000</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Backend, PHP</td>
                <td class="statuscategorychangedate"> 19/Jan/22 11:08 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0003w:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"> <span title="02/Dez/21 1:59 PM"><time class="livestamp allow-future" datetime="2021-12-02T13:59:01+0000">02/Dez/21 1:59 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10019" rel="10019" data-issuekey="MOBO-20" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-20" href="https://halbesrechteck.atlassian.net/browse/MOBO-20">MOBO-20</a>
                </td>
                <td class="summary">
                    <p>
                        Git Repo erstellen
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 6:09 PM </td>
                <td class="lastViewed"> 15/Nov/21 9:06 PM </td>
                <td class="updated"> 17/Nov/21 10:03 AM </td>
                <td class="resolutiondate"> 17/Nov/21 10:03 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 17/Nov/21 10:03 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00003:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10018" rel="10018" data-issuekey="MOBO-19" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-19" href="https://halbesrechteck.atlassian.net/browse/MOBO-19">MOBO-19</a>
                </td>
                <td class="summary">
                    <p>
                        Footer
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 2:55 PM </td>
                <td class="lastViewed"> 07/Jan/22 4:38 PM </td>
                <td class="updated"> 09/Jan/22 11:36 PM </td>
                <td class="resolutiondate"> 09/Jan/22 11:36 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 09/Jan/22 11:36 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004d:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10017" rel="10017" data-issuekey="MOBO-18" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-18" href="https://halbesrechteck.atlassian.net/browse/MOBO-18">MOBO-18</a>
                </td>
                <td class="summary">
                    <p>
                        Header
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.helmboldt
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 2:55 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:35 PM </td>
                <td class="updated"> 20/Jan/22 1:57 PM </td>
                <td class="resolutiondate"> 16/Jan/22 2:12 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate">0</td>
                <td class="timespent">3600</td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"> 100%
                </td>
                <td class="aggregateprogress"> 100%
                </td>
                <td class="aggregatetimespent">3600</td>
                <td class="aggregatetimeestimate">0</td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend</td>
                <td class="statuscategorychangedate"> 16/Jan/22 2:12 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i0004j:ei
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031">
                    <div class="shorten" id="customfield_10031-field">
                        jonas.liehmann </div>
                </td>
                <td class="customfield_10024"> <span title="06/Dez/21 6:55 PM"><time class="livestamp allow-future" datetime="2021-12-06T18:55:26+0000">06/Dez/21 6:55 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10016" rel="10016" data-issuekey="MOBO-17" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-17" href="https://halbesrechteck.atlassian.net/browse/MOBO-17">MOBO-17</a>
                </td>
                <td class="summary">
                    <p>
                        <span class="parentIssue">MOBO-8</span>
                        Styles
                    </p>
                </td>
                <td class="issuetype"> Sub-Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 2:54 PM </td>
                <td class="lastViewed"> 20/Jan/22 2:38 PM </td>
                <td class="updated"> 20/Jan/22 2:38 PM </td>
                <td class="resolutiondate"> 20/Jan/22 2:38 PM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"> * Flexbox<br />
                    * utitlity classes
                </td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"></td>
                <td class="statuscategorychangedate"> 20/Jan/22 2:38 PM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"> Boilerplates
                </td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00013:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10008" rel="10008" data-issuekey="MOBO-9" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-9" href="https://halbesrechteck.atlassian.net/browse/MOBO-9">MOBO-9</a>
                </td>
                <td class="summary">
                    <p>
                        XAMPP Web-Server erstellen
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 1:20 PM </td>
                <td class="lastViewed"> &nbsp; </td>
                <td class="updated"> 17/Nov/21 10:04 AM </td>
                <td class="resolutiondate"> 17/Nov/21 10:04 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">1</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"></td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Grundgerüst</td>
                <td class="statuscategorychangedate"> 17/Nov/21 10:04 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00007:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"></td>
                <td class="customfield_10000"></td>
            </tr>


            <tr id="issuerow10007" rel="10007" data-issuekey="MOBO-8" class="issuerow">
                <td class="project"> MongoBongo
                </td>
                <td class="issuekey">

                    <a class="issue-link" data-issue-key="MOBO-8" href="https://halbesrechteck.atlassian.net/browse/MOBO-8">MOBO-8</a>
                </td>
                <td class="summary">
                    <p>
                        Boilerplates
                    </p>
                </td>
                <td class="issuetype"> Task
                </td>
                <td class="status">
                    <span class=" jira-issue-status-lozenge aui-lozenge jira-issue-status-lozenge-green jira-issue-status-lozenge-done aui-lozenge-subtle jira-issue-status-lozenge-max-width-medium" data-tooltip="&lt;span class=&quot;jira-issue-status-tooltip-title&quot;&gt;Fertig&lt;/span&gt;">Fertig</span>
                </td>
                <td class="priority"> Medium
                </td>
                <td class="resolution"> Fertig
                </td>
                <td class="assignee"> jonas.liehmann
                </td>
                <td class="reporter"> jonas.liehmann
                </td>
                <td class="creator"> jonas.liehmann
                </td>
                <td class="created"> 12/Nov/21 1:19 PM </td>
                <td class="lastViewed"> 03/Dez/21 11:22 PM </td>
                <td class="updated"> 17/Nov/21 10:03 AM </td>
                <td class="resolutiondate"> 17/Nov/21 10:03 AM </td>
                <td class="versions"> &nbsp;
                </td>
                <td class="fixVersions"> &nbsp;
                </td>
                <td class="components"> &nbsp;
                </td>
                <td class="duedate"> &nbsp;
                </td>
                <td class="votes">0</td>
                <td class="watches">2</td>
                <td class="thumbnail"></td>
                <td class="timeoriginalestimate"></td>
                <td class="timeestimate"></td>
                <td class="timespent"></td>
                <td class="workratio">&nbsp;
                </td>
                <td class="subtasks"> MOBO-17 </td>
                <td class="issuelinks"></td>
                <td class="environment"></td>
                <td class="description"></td>
                <td class="security"></td>
                <td class="progress"></td>
                <td class="aggregateprogress"></td>
                <td class="aggregatetimespent"></td>
                <td class="aggregatetimeestimate"></td>
                <td class="aggregatetimeoriginalestimate"></td>
                <td class="labels"> Frontend, Grundgerüst</td>
                <td class="statuscategorychangedate"> 17/Nov/21 10:03 AM </td>
                <td class="statusCategory">
                    <span class="aui-lozenge aui-lozenge-subtle jira-issue-status-lozenge jira-issue-status-lozenge-green
            jira-issue-status-lozenge-max-width-medium">Fertig</span>
                </td>
                <td class="parent"></td>
                <td class="customfield_10009"></td>
                <td class="customfield_10008"></td>
                <td class="customfield_10003"></td>
                <td class="customfield_10007"></td>
                <td class="customfield_10006"></td>
                <td class="customfield_10005"></td>
                <td class="customfield_10029"></td>
                <td class="customfield_10013"></td>
                <td class="customfield_10014"></td>
                <td class="customfield_10011"></td>
                <td class="customfield_10012"></td>
                <td class="customfield_10021"></td>
                <td class="customfield_10004"></td>
                <td class="customfield_10017"></td>
                <td class="customfield_10002"></td>
                <td class="customfield_10018"></td>
                <td class="customfield_10019"> 0|i00005:
                </td>
                <td class="customfield_10010"></td>
                <td class="customfield_10030"></td>
                <td class="customfield_10020"></td>
                <td class="customfield_10015"></td>
                <td class="customfield_10016"></td>
                <td class="customfield_10023"></td>
                <td class="customfield_10022"></td>
                <td class="customfield_10001"></td>
                <td class="customfield_10031"></td>
                <td class="customfield_10024"> <span title="12/Nov/21 1:32 PM"><time class="livestamp allow-future" datetime="2021-11-12T13:32:50+0000">12/Nov/21 1:32 PM</time></span>
                </td>
                <td class="customfield_10000"></td>
            </tr>
        </tbody>
    </table>
    <div class="end-of-stable-message"></div>
    <table border="1">
        <tr>
            <td bgcolor="#dddddd" colspan="67">
                <font size="1">
                    Erstellt am Thu Jan 20 14:43:34 UTC 2022 von jonas.helmboldt mit Jira 1001.0.0-SNAPSHOT#100189-sha1:cd4fb503876c690d52f6fda00bd2709ff468c3b0.
                </font>
            </td>
        </tr>
    </table>

</body>

</html>