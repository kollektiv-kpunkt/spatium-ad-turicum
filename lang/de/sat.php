<?php

return [

    /**
     * Language Lines for «Züri brucht Platz» petition
     *
     */

    "site" => [
        "title" => "Unterschreibe unsere Petition!",
        "masthead" => "Wir brauch Züri brucht Platz!",
        "url" => "https://zueri-brucht-platz.ch",
        "description" => "Die Stadtbevölkerung wächst, der Platz für sie aber nicht genug schnell. Und mitten drin lassen Liegenschaftseigentümer*innen ihre Gebäude brach liegen und räumen alle kreativen Nutzungen mit irrsinnigen Ausreden. Das darf nicht sein!",
    ],
    "form" => [
        "title" => "Füge deinen Namen hinzu!",
        "defaultPrivacy" => "Ich bin einverstanden, dass mich das Komitee auf dem Laufenden hält. <a class=\"underline\" href=\"/privacy\">Mehr dazu in unseren Datenschutzbestimmungen</a>.",
        "fields" => [
            [
                "type" => "text",
                "name" => "data[fname]",
                "label" => "Vorname",
                "required" => true
            ],
            [
                "type" => "text",
                "name" => "data[lname]",
                "label" => "Nachname",
                "required" => true
            ],
            [
                "type" => "email",
                "name" => "email",
                "label" => "E-Mail Adresse",
                "required" => true,
                "class" => "fullwidth"
            ],
            [
                "type" => "checkbox",
                "name" => "optin",
                "label" => supporterPrivacyText(),
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
            [
                "type" => "checkbox",
                "name" => "public",
                "label" => "Mein Name darf auf der Webseite veröffentlicht werden.",
                "required" => false,
                "checked" => true,
                "class" => "fullwidth"
            ],
        ],
        "open" => "Jetzt unterschreiben!",
        "close" => "Schliessen",
        "submit" => "Unterschreiben",
        "successmessage" => "Vielen Dank für deine Unterschrift! Du erhältst in Kürze eine E-Mail mit einem Bestätigungslink. Bitte klicke auf diesen Link, um deine Unterschrift zu bestätigen.",
        "errormessage" => "Es ist ein Fehler aufgetreten. Bitte versuche es nochmals!"
    ],
    "email" => [
        "from" => [
            "name" => "Komitee «Züri brucht Platz»",
            "address" => env('MAIL_FROM_ADDRESS')
        ]
    ],
    "verification" => [
        "verified" => [
            "title" => "Vielen Dank!",
            "text" => "Deine E-Mail Adresse wurde erfolgreich bestätigt.",
            "tohome" => "Zur Startseite"
        ],
        "failed" => [
            "title" => "Es ist etwas schief gelaufen :(",
            "text" => "Deine E-Mail Adresse konnte nicht bestätigt werden. Bitte versuche es später noch einmal oder kontaktiere uns!",
            "tohome" => "Zur Startseite"
        ]
    ],
    "share" => [
        "title" => "Hilf mit und teile unseren Brief!",
        "sharetitle" => "Wir brauchen Platz: Unterschreibe jetzt unsere Petition! ",
        "text" => "Hoi👋\nDie Stadtbevölkerung wächst, der Platz für sie aber nicht genug schnell. Und mitten drin lassen Liegenschaftseigentümer*innen ihre Gebäude brach liegen und räumen alle kreativen Nutzungen mit irrsinnigen Ausreden. Das darf nicht sein! Ich habe drum gerade eine Petition unterschrieben, hilfst du auch mit?📝\n👉 https://zueri-brucht-platz.ch",
        "tweet" => "Die Stadtbevölkerung wächst, der Platz für sie aber nicht genug schnell. Und mitten drin stehen Gebäude brach liegen. Das darf nicht sein! Ich habe drum gerade eine Petition unterschrieben, hilfst du auch mit?📝\n 👉 https://zueri-brucht-platz.ch",
        "buttons" => [
            "whatsapp" => "Auf WhatsApp teilen",
            "telegram" => "Auf Telegram teilen",
            "facebook" => "Auf Facebook teilen",
            "twitter" => "Auf Twitter teilen",
            "email" => "Per E-Mail teilen"
        ]
    ]
];
