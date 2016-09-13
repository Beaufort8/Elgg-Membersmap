<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */
 
 
$language = array (
    //Menu items and titles
	'membersmap' => 'Mitgliederkarte',
	'membersmap:menu' => 'Mitgliederkarte',
	'membersmap:all' => 'Mitgliederkarte',
    'membersmap:newest' => "Neueste Mitglieder (%s)",
	'membersmap:allmembers' => 'Alle Mitglieder',
	'membersmap:membersof' => '\'s Mitglieder',
	'membersmap:map' => 'Mitgliederkarte',
    'membersmap:map:detailed' => "Detaillierte Karte",
    'admin:settings:membersmap' => 'Mitgliederkarte', 
    'membersmap:live_map' => "Live Karte",

    // nearby 
    'membersmap:members:nearby:search' => 'Mitglieder in der Nähe von "%s"', 
    'membersmap:members:newest' => 'Karte mit %s neuesten Mitgliedern', 

    //tabs
    'membersmap:label:newest' => "Neueste",
	'membersmap:label:all' => 'Alle Mitglieder',
	'membersmap:label:friends' => 'Meine Freunde',
	'membersmap:label:online' => 'Mitglieder online',

    //search 
	'membersmap:search' => 'Suche Mitglieder nach Orten',
	'membersmap:search:location' => 'Ort',
	'membersmap:search:radius' => 'Radius (in Metern)',
	'membersmap:search:radius:meters' => 'Radius (in Metern)',
	'membersmap:search:radius:km' => 'Radius (in Kilometer)',
	'membersmap:search:radius:miles' => 'Radius (in Meilen)',
	'membersmap:search:meters' => 'metern',
	'membersmap:search:km' => 'km',
	'membersmap:search:miles' => 'meilen',
	'membersmap:search:showradius' => 'Zeige Suchbereich',
	'membersmap:search:submit' => 'Suche',
	'membersmap:searchnearby' => 'Suche die am nächstgelegenen Mitglieder',
	'membersmap:mylocationsis' => 'Mein Ort ist:',
	'membersmap:searchbyname' => 'Suche Mitglieder nach Name',
	'membersmap:search:name' => 'Name',
	'membersmap:search:searchname' => 'Mitgliedersuche in Deiner Nähe für %s',
	'membersmap:search:usernotfound' => 'Mitglieder nicht gefunden',
	'membersmap:search:usersfound' => 'Mitglieder gefunden',
	'membersmap:search:around' => 'gefundene Mitglieder in Deiner Nähe gefunden',

    //groups
	'membersmap:group' => 'Gruppenmitglieder auf der Karte',
	'membersmap:group:none' => 'Keine Mitglieder in dieser Gruppe',
	'membersmap:group:enablemaps' => 'Aktiviere Mitgliederkarte',

    //js alerts
	'membersmap:map:1' => 'Bitte trage eine gültigen Standard-Ort in der Administrator-Sektion ein',
	'membersmap:map:2' => 'keine gültigen Such-Adressen',
	'membersmap:map:3' => 'Geocode war aus folgenden Gründen nicht erfolgreich',

    // settings
	'membersmap:settings:google_maps' => 'Google Maps Einstellungen',
	'membersmap:settings:google_api_key' => 'Trage Deinen Google API Schlüssel ein',
	'membersmap:settings:google_api_key:clickhere' => 'Englisch Gehe zu: <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> um Deinen "Google API key" zu bekommen. <br>(<strong>Note:</strong> der API Schlüssel wird nicht benötigt. Nur dann, wenn man die Statistiken aus seinem eigenen API Code benötigt)',
	'membersmap:settings:map_width' => 'Kartenbreite',
	'membersmap:settings:map_width:how' => 'numerische Werte (z.B. 500) oder in % (z.B. 100%)',
	'membersmap:settings:map_height' => 'Kartenhöhe',
	'membersmap:settings:map_height:how' => 'numerischer Wert (z.B. 500)',
	'membersmap:settings:defaultlocation' => 'Standard-Ort',
	'membersmap:settings:defaultlocation:note' => 'Trage eine gültige Standard-Adresse ein (Adresse, Postleitzahl, Ort, Straße etc.)',
	'membersmap:settings:defaultzoom' => 'Standard-Karten-Zoom',
	'membersmap:settings:defaultzoom:note' => 'Trage einen numerischen Wert für den Zoom ein',
	'membersmap:settings:cluster' => 'Benutze die Cluster-Eigenschaften von Google-Maps',
	'membersmap:settings:cluster:no' => 'Nein',
	'membersmap:settings:cluster:yes' => 'Ja',
	'membersmap:settings:cluster:note' => 'Wähle JA, wenn die Mitglider in Deiner Nähe gebündelt werden sollen.<br>Falls deaktiviert, werden mehrere Marker in der gleichen oder näheren Umgebung getrennt dargestellt und klickbar',
	'membersmap:settings:markericon' => 'Markierungs-Symbol',
	'membersmap:settings:markericon:blue-light' => 'Hellblau',
	'membersmap:settings:markericon:blue' => 'Blau',
	'membersmap:settings:markericon:green' => 'Grün',
	'membersmap:settings:markericon:grey' => 'Grau',
	'membersmap:settings:markericon:orange' => 'Orange',
	'membersmap:settings:markericon:pink' => 'Pink',
	'membersmap:settings:markericon:purple-light' => 'Hell-Lila',
	'membersmap:settings:markericon:purple' => 'Lila',
	'membersmap:settings:markericon:red' => 'Rot',
	'membersmap:settings:markericon:yellow' => 'Gelb',
	'membersmap:settings:markericon:note' => 'Wähle die Farbe für die Markierung der Mitglieder auf der Karte aus',
	'membersmap:settings:searchbyname' => 'Suche Mitglieder nach Name',
	'membersmap:settings:searchbyname:no' => 'Nein',
	'membersmap:settings:searchbyname:yes' => 'Ja',
	'membersmap:settings:searchbyname:note' => 'Wähle aus, ob "Suche Mitglieder nach Name" im Seitenfenster angezeigt werden soll',
	'membersmap:settings:unitmeas' => 'Maßeinheit für Entfernungen', 
	'membersmap:settings:unitmeas:meters' => 'Meter', 
	'membersmap:settings:unitmeas:km' => 'Kilometer', 
	'membersmap:settings:unitmeas:miles' => 'Meilen',
	'membersmap:settings:unitmeas:note' => 'Wähle die Maßeinheit, die bei der Suche verwendet werden soll.',  
	'membersmap:settings:memberstab' => 'Reiter "Mitgliederkarte" auf der Mitglieder-Seite hinzufügen', 
	'membersmap:settings:memberstab:note' => 'Bitte wählen, wenn auf der Elgg Mitglieder Seite (domain/members) der Reiter "Mitgliederkarte" hinzufügt werden soll. ',    
	'membersmap:settings:maponmenu' => 'Menüpunkt "Mitgliederkarte" hinzufügen', 
	'membersmap:settings:maponmenu:note' => 'Bitte wählen, wenn dem Site-Menü der Menüpunkt "Mitgliederkarte" hinzufügt werden soll. ',      
	'membersmap:settings:no' => 'Nein', 
	'membersmap:settings:yes' => 'Ja',
	'membersmap:settings:batchusers' => 'Massen Benutzer-Geolokalisierung',
	'membersmap:settings:batchusers:start' => 'Geolokalisierung starten',
	'membersmap:settings:batchusers:note' => 'Wenn  bereits Mitglieder auf der Elgg Website sind, auf diese Schaltfläche klicken, um für Benutzer die Standorte in Koordinaten umzuwandeln.<br />Dies muss nur <strong>ein mal</strong> bei Beginn der Verwendung des Plugins durchgeführt werden.',

    // widget
    'membersmap:wg:title' => 'Standortkarte', 
    'membersmap:wg:detail' => 'Zeige Deinen Standort auf der Karte', 
    'membersmap:zoom' => 'Zoom', 
    'membersmap:wg:nolocationdefined' => 'Der Benutzer hat noch keinen Standort angegeben', 
    'membersmap:wg:alltitle' => 'Mitgliederkarte', 
    'membersmap:wg:alldetail' => 'Zeige Karte mit allen oder neuesten Mitgliedern',    
    'membersmap:wg:alldetail:no' => 'Keine Benutzer anzeigen',  
    'membersmap:widgets:settings:zoom' => 'Wähle die Zoomstufe auf der Karte: ',    
    'membersmap:widgets:settings:mapheight' => 'Geben Sie einen numerischen Wert für die Höhe der Karte ein (in pixel): ',    
    'membersmap:widget:group:title' => 'Gruppenkarte',
    'membersmap:widget:group:detail' => 'Zeige Karte mit Gruppen-Mitgliedern',
    'membersmap:widget:group:invalid_group' => 'Ungültige Gruppe',
    
    // user geolocation 
    'membersmap:geolocation:user_not_logged_in' => 'Kein gülter Zugang für nicht angemeldete Benutzer', 

);

add_translation("de", $language);
