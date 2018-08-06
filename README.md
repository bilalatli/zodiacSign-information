"# zodiacSign-information" 

$dob = '15.01.1995'; // dd.mm.YY Format , Date of birth<br>
Using : $signature = \GDS\Zodiac\Zodiac::getZodiacSign($dob);<br>
    --> $signature => ZodiacNames::CAPRICORN => "Oğlak"<br>
<br>
Using : $information = \GDS\Zodiac\Zodiac::getZodiacInformation( $signature );<br>
    --> $information => [<br>
                            'dates'                => [...],<br>
                            'elements'             => ...,<br>
                            'character'            => ...,<br>
                            'planet'               => ...,<br>
                            'colors'               => [...],<br>
                            'gem'                  => ...,<br>
                            'day'                  => ...,<br>
                            'features'             => [...],<br>
                            'man'                  => ...,<br>
                            'woman'                => ...,<br>
                            'style'                => ...,<br>
                            'in_love'              => ...,<br>
                            'mother'               => ...,<br>
                            'father'               => ...,<br>
                            'child'                => ...,<br>
                            'bodyparts'            => [...],<br>
                            'compatible_zodiacs'   => [...],<br>
                            'uncompatible_zodiacs' => [...],<br>
                            'positives'            => [...],<br>
                            'negatives'            => [...],<br>
                        ];<br>
