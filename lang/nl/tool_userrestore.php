<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file for tool_userrestore, NL
 *
 * File         tool_userrestore.php
 * Encoding     UTF-8
 *
 * @package     tool_userrestore
 *
 * @copyright   Sebsoft.nl
 * @author      R.J. van Dongen <rogier@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'Gebruikersherstel';

$string['promo'] = 'Gebruikersherstel plugin voor Moodle';
$string['promodesc'] = 'Deze plugin is ontwikkeld door Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://www.sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';

$string['timedeleted'] = 'Verwijderd op';
$string['deletedby'] = 'Verwijderd door';

$string['link:restore'] = 'Gebruikers herstellen';
$string['link:log'] = 'Gebruikersherstel logs';
$string['link:viewstatus'] = 'Status overzicht inzien';
$string['link:log:overview'] = 'Statiswijzigingen inzien';
$string['link:currentstatus:overview'] = 'Huidige statussen inzien';
$string['link:cache'] = 'Cache';

$string['form:label:sendmail'] = 'E-mail verzenden?';
$string['form:label:email'] = 'E-mail tekst';
$string['form:label:subject'] = 'E-mail onderwerp';
$string['button:userrestore:continue'] = 'Herstel gebruikers';
$string['form:static:email:template'] = 'Je kunt de volgende template variabelen in je email gebruiken.
Ze zullen automatisch worden vervangen door de correcte waarden. Gebruik ze alsjebielft exact zoals aangegeven, anders zijn de resultaten mogelijk anders dan verwacht.
<ul>
<li>{firstname} - Voornaam van de te herstellen gebruiker</li>
<li>{lastname} - Achternaam van de te herstellen gebruiker</li>
<li>{fullname} - Volledige naam van de te herstellen gebruiker</li>
<li>{username} - Gebruikersnaam voor de herstelde gebruiker (deze KAN afwijken van voordat het account werd verwijderd)</li>
<li>{signature} - Ondertekening (volledige naam van de support account)</li>
<li>{contact} - Contact emailadres (op basis van van de support account)</li>
<li>{loginlink} - Link om op de site in te loggen (op basis van herstelde gebruikersnaam)</li>
</ul>
';

$string['restoresettings'] = 'Instellingen voor gebruikersherstel';
$string['restoresettingsdesc'] = '';
$string['setting:enablecleanlogs'] = 'Inschakelen logopschoning';
$string['setting:desc:enablecleanlogs'] = 'Schakelt automatisch opschonen van historische logs aan of uit.';
$string['setting:cleanlogsafter'] = 'Frequentie logopschoning';
$string['setting:desc:cleanlogsafter'] = 'Configureer de frequentie waarop historische logs worden opgeschoond. Alle logs ouder dan de ingegeven waarde zullen fysiek verwijderd worden.';
$string['config:cleanlogs:disabled'] = 'Automatisch opschonen van logs is uitgeschakeld in de globale configuratie';
$string['setting:maxrestoreusers'] = 'Maximum gebruikers';
$string['setting:desc:maxrestoreusers'] = 'Dit stelt het maximale aantal getoonde gebruikers in voor het aantal te herstellen gebruikers.';

$string['page:view:restore.php:introduction'] = 'Dit formulier stelt je in staat gebruikersaccounts te herstellen en de gebruikers
per email te informeren over het herstel van hun account. Let op, in de onderstaande tabel stellen de gebruikersnaam en e-mailadres de originele
gegevens voor en zijn teruggehaald uit de event log gegevens.';
$string['page:view:log.php:introduction'] = 'De tabel hieronder toont de statussen van gebruikers die zijn hersteld.';

$string['config:tool:disabled'] = 'Gebruikersherstel is uitgeschakeld middels globale configuratie';

$string['err:statustable:set_sql'] = 'set_sql() is uitgeschakeld. De tabel definieert zijn eigen queries.';
$string['label:users:potential'] = 'Potentiele gebruikers';
$string['restore:username-exists'] = 'Kan gebruikersaccount niet herstellen: er is al een andere actieve gebruiker met gebruikersnaam \'{$a->username}\'';
$string['restore:email-exists'] = 'Kan gebruikersaccount niet herstellen: er is al een andere actieve gebruiker met emailadres \'{$a->email}\'';
$string['restore:user-mnet-not-local'] = 'Kan gebruikersaccount niet herstellen: mnet host voor de te herstellen gebruiker komt niet overeen met de geconfigureerde lokale mnet host';
$string['restore:user-restored'] = 'Gebruiker <i>\'{$a->username}\'</i> (\'{$a->email}\') is succesvol hersteld';
$string['restore:deleted-user-not-found'] = 'Kan gebruikersaccount niet herstellen: verwijderde gebruiker kan niet worden gevonden';

$string['th:userid'] = 'GebruikersID';
$string['th:name'] = 'Naam';
$string['th:restored'] = 'Hersteld';
$string['th:mailsent'] = 'E-mail verzonden';
$string['th:mailedto'] = 'E-mail veronden naar';
$string['th:timecreated'] = 'Aangemaakt op';
$string['th:action'] = 'Actie';

$string['button:backtocourse'] = 'Terug naar cursus';
$string['button:backtoform'] = 'Terug naar gebruikersherstel formulier';

$string['email:user:restore:subject'] = 'Je account is hersteld';
$string['email:user:restore:body'] = '<p>Beste {fullname}</p>
<p>Je gebruikersaccount is hersteld</p>
<p>Je gebruikersnaam kon mogelijk niet correct hersteld worden.
Dit is afhankelijk van hoe moodle gebruikeraccount verwijderd en of de event logs al dan niet opgeschooned zijn.
Vanaf nu is je gebruikersnaam dan ook {username}.</p>
<p>Wanneer je van mening bent dat dit onbedoeld is, of wanneer je vragen hebt,
neem dan alsjeblieft contact op met {contact}</p>
<p>Je zou moeten kunnen inloggen met je originele wachtwoord.<br/>
Als dit niet het geval is, gebruik dan het emailadres waar deze email naartoe is verzonden om een wachtwoord reset aan te vragen.<br/>
Log alsjeblieft in op de site om alle informatie weer aan te vullen door onderstaande link te volgen:<br/>
{loginlink}</p>
<p>Met vriendelijke groet,<br/>{signature}</p>';
$string['table:logs'] = 'Logs';
$string['table:log:all'] = 'Historie herstellog';
$string['table:log:latest'] = 'Laatste herstellogs';
$string['task:logclean'] = 'Opschonen logs voor gebruikersherstel';
$string['task:filldeletedcache'] = 'Informatie tbv verwijderde gebruikers vullen in cache.';
$string['msg:no-users-to-restore'] = 'Er zijn geen verwijderde gebruikersaccounts gevonden om te kunnen herstellen.';

$string['privacy:metadata:tool_userrestore:userid'] = 'De primaire database sleutel van de Moodle gebruiker voor wie herstel is gedaan.';
$string['privacy:metadata:tool_userrestore:restored'] = 'Of het account werd hersteld';
$string['privacy:metadata:tool_userrestore:mailsent'] = 'Of een email is verzonden naar de gebruiker';
$string['privacy:metadata:tool_userrestore:mailedto'] = 'E-mailadres van de herstelde gebruiker';
$string['privacy:metadata:tool_userrestore:timecreated'] = 'Tijdstip waarop de gegevens zijn aangemaakt.';

$string['cache:fill'] = 'Cache volledig opnieuw vullen';
$string['cache:fill:smart'] = 'Missende informatie aan cache toevoegen';
$string['cache:fillneeded'] = 'De cache die nodig is om gebruikersgegevens voor verwijderde gebruikers te traceren is niet gevuld.<br/>
Deze cache is nodig om het tonen van het herstelformulier voor gebruikersaccounts en gaat timeouts zo veel mogelijk tegen.<br/>
Wees er a.u.b van bewust dat het vullen van de cache, afhankelijk van de grootte van je installatie een <i>langdurig proces</i> kan zijn.<br/>
Voor grote installaties kan dit hele proces met gemak minuten of nog langer in beslag nemen.<br/><br/>
Wanneer de cache eenmaal volledig gevuld is, zou het herstelformulier binnen enkele seconden geladen moeten zijn.<br/><br/>
Je kunt ervoor kiezen om de cache aan te vullen of volledig opnieuw te vullen.<br/>
Het verschil is dat aanvullen de cache <i>niet</i> van tevoren leegt, terwijl een volledig opnieuw vullen dat wel doet.
';
$string['cache:purge'] = 'Cache legen';
$string['cache:iscomplete'] = 'Cache heeft alle benodigde informatie';
$string['setting:enableuserdeletedobserver'] = 'Inhaken op gebeurtenis "gebruiker verwijderd"?';
$string['setting:desc:enableuserdeletedobserver'] = 'Indien ingeschakeld zal dit een directe vulling van de cache bewerkstelligen wanneer een gebruiker wordt verijwderd
als onderdeel van het verwijderproces.<br/>
Dit heeft de potewntie om zeer lange verwerkingstijden of zelfs scipt timeouts met zich mee te brengen wanneer gebruikers in bluk worden verwijderd door beheerders.<br/>
Als je deze instelling aan hebt staan en je vaker gebruikers in bulk verwijderd, is het misschien tijd om deze functionaliteit uit te zetten.
';
$string['cache:missing:numusers'] = 'Cache tbv informatie van verwijderde gebruikersaccounts mist {$a} gegevensrijen/gebruikers.';
$string['cache:fill:smart:limited'] = 'Missend informatie aan cache toevoegen (max. 10 gegevensrijen)';
