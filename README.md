"# zodiacSign-information" 

$dob = '15.01.1995'; // dd.mm.YY Format , Date of birth
Using : $signature = \GDS\Zodiac\Zodiac::getZodiacSign($dob);
    --> $signature => ZodiacNames::CAPRICORN => "Oğlak"

Using : $information = \GDS\Zodiac\Zodiac::getZodiacInformation( $signature );
    --> $information => [
                            'dates'                => [...],
                            'elements'             => ...,
                            'character'            => ...,
                            'planet'               => ...,
                            'colors'               => [...],
                            'gem'                  => ...,
                            'day'                  => ...,
                            'features'             => [...],
                            'man'                  => ...,
                            'woman'                => ...,
                            'style'                => ...,
                            'in_love'              => ...,
                            'mother'               => ...,
                            'father'               => ...,
                            'child'                => ...,
                            'bodyparts'            => [...],
                            'compatible_zodiacs'   => [...],
                            'uncompatible_zodiacs' => [...],
                            'positives'            => [...],
                            'negatives'            => [...],
                        ];
