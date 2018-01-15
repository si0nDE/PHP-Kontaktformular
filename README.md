Einfaches PHP-Kontaktformular
=============================

Ein einfaches Kontaktformular, das in PHP mit HTML5 Form validation entwickelt wurde. Das Kontaktformular kann für Browser, die die HTML5-Formularüberprüfung nicht unterstützen, auf JavaScript zurückgreifen.

## Alpine basierte Container ##

Mit Techniken von https://github.com/hardware/rainloop

Der Container fügt ssmtp hinzu, sodass Sie eine funktionierende Konfiguration in /etc/ssmtp/ für die ausgehende Mail einrichten können.

## Demo ##

Schauen Sie sich meine Demo [hier](https://simonfieber.it/demo/kontaktformular/) an.

## Download ##

Sie können die neueste Version oder alle Releases [hier] herunterladen (https://github.com/si0nDE/PHP-Kontaktformular/releases).

## Systemvoraussetzungen ##
* PHP >=5.4

## Installation ##

Öffnen Sie die Datei [`config.php`](contact-form/config/config.php) und tragen Sie Ihre Informationen in die Felder ein.

```php
<?php

return [
    'subject' => [
		'prefix' => '[Kontaktformular]'
    ],
    'emails' => [
		'to'   => 'REPLACE_ME',
		'from' => 'REPLACE_ME'
    ],
    'messages' => [
		'error'   => 'Beim Senden ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.',
		'success' => 'Ihre Nachricht wurde erfolgreich gesendet.'
    ],
    'fields' => [
		'name'     => 'Name',
		'email'    => 'E-Mail-Adresse',
		'phone'    => 'Telefon',
		'subject'  => 'Betreff',
		'message'  => 'Nachricht',
		'btn-send' => 'Senden'
    ],
	'coinhive' => [
		'data-key'   => 'Dj5PVUOom6w00NhLZPfsWlZlmzKhdT1H',	/* Site Key (Public) von https://coinhive.com */
		'data-hashes' => '1024',							/* Anzahl der Hashes, die vom Mining-Pool akzeptiert werden müssen. Das Ziel sollte ein Vielfaches von 256 sein. */
		'data-whitelabel' => 'false'						/* Coinhive-Logo und "What is this?"-Link ausblenden  */
    ],
	'recaptcha' => [
		'data-sitekey'   => 'REPLACE_ME',					/* Websiteschlüssel von https://www.google.com/recaptcha/ */
    ],
];
```

## Browserunterstützung ##

![IE](https://raw.githubusercontent.com/alrra/browser-logos/master/internet-explorer/internet-explorer_48x48.png) | ![Chrome](https://raw.githubusercontent.com/alrra/browser-logos/master/chrome/chrome_48x48.png) | ![Firefox](https://raw.githubusercontent.com/alrra/browser-logos/master/firefox/firefox_48x48.png) | ![Opera](https://raw.githubusercontent.com/alrra/browser-logos/master/opera/opera_48x48.png) | ![Safari](https://raw.githubusercontent.com/alrra/browser-logos/master/safari/safari_48x48.png)
--- | --- | --- | --- | --- |
IE 9+ ✔ | Aktuell ✔ | Aktuell ✔ | Aktuell ✔ | Aktuell ✔ |
