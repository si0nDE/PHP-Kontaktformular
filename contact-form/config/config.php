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
		'data-hashes' => '1024',	/* Anzahl der Hashes, die vom Mining-Pool akzeptiert werden müssen. Das Ziel sollte ein Vielfaches von 256 sein. */
		'data-whitelabel' => 'false'	/* Coinhive-Logo und "What is this?"-Link ausblenden  */
    ],
	'recaptcha' => [
		'data-sitekey'   => 'REPLACE_ME',	/* Websiteschlüssel von https://www.google.com/recaptcha/ */
    ],
];