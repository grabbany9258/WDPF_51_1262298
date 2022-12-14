<?php

    // This function will add the acronym's long form directly after any acronyms found in $matches
    function acronym($matches) {
        $acronyms = array(
            'WWW' => 'World Wide Web',
            'IRS' => 'Internal Revenue Service',
            'PDF' => 'Portable Document File'
        );

        if(isset($acronyms[$matches[1]]))
            return $acronyms[$matches[1]] . " (" . $matches[1] . ")";
        else
            return $matches[1];
    }

    // The target text
    $text = "The <acronym>IRS</acronym> offers tax forms in <acronym>PDF</acronym> format on the <acronym>WWW</acronym>.";

    // Add the acronyms' long form to the target text
    $newtext = preg_replace_callback("/<acronym>(.*)<\/acronym>/U", 'acronym', $text);

    print_r($newtext);

?>