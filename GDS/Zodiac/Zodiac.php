<?php
/**
 * Created by PhpStorm.
 * User: Bilal ATLI
 * Company: GARIVALDI - Digital Solutions
 * Mail : info@garivaldi.com
 * Date: 06.08.2018
 * Phone: 0542-433-09-19
 * Time: 09:12
 */

namespace GDS\Zodiac;

require( 'ZodiacConstants.php' );

class Zodiac
{
    /**
     * Get Zodiac Sign Name
     *
     * @param string $dob Date Of Birth [Format : dd.mm.YY]
     *
     * @return string
     */
    public static function getZodiacSign( $dob )
    {
        $zodiac = '';
        list ($day, $month, $year) = explode('.', $dob);

        if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) {
            $zodiac = \ZodiacNames::ARIES;
        } elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) {
            $zodiac = \ZodiacNames::TAURUS;
        } elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) {
            $zodiac = \ZodiacNames::GEMINI;
        } elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) {
            $zodiac = \ZodiacNames::CANCER;
        } elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) {
            $zodiac = \ZodiacNames::LEO;
        } elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) {
            $zodiac = \ZodiacNames::VIRGO;
        } elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) {
            $zodiac = \ZodiacNames::LIBRA;
        } elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) {
            $zodiac = \ZodiacNames::SCORPIO;
        } elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) {
            $zodiac = \ZodiacNames::SAGITTARIUS;
        } elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) {
            $zodiac = \ZodiacNames::CAPRICORN;
        } elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) {
            $zodiac = \ZodiacNames::AQUARIUS;
        } elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) {
            $zodiac = \ZodiacNames::PISCES;
        }

        return $zodiac;
    }

    /**
     * Get Zodiac Information
     *
     * @param string $zodiacSign
     *
     * @return array
     */
    public static function getZodiacInformation( $zodiacSign )
    {
        switch ( $zodiacSign ) {
            case \ZodiacNames::ARIES:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 3,
                            'month_string' => \Months::MARCH,
                            'day'          => 20,
                        ],
                        'end'   => [
                            'month_int'    => 4,
                            'month_string' => \Months::APRIL,
                            'day'          => 20,
                        ],
                    ],
                    'elements'             => \EarthElements::FIRE,
                    'character'            => \CharacterQualitications::PIONEER,
                    'planet'               => \Planets::MARS,
                    'colors'               => [ \Colors::RED ],
                    'gem'                  => \Gems::DIAMOND,
                    'day'                  => \Days::TUESDAY,
                    'features'             => [
                        \CharacteristicFeatures::ACTIVE,
                        \CharacteristicFeatures::DYNAMIC,
                        \CharacteristicFeatures::INITIATIVEOWNER,
                        \CharacteristicFeatures::FAST,
                        \CharacteristicFeatures::LEADER,
                        \CharacteristicFeatures::MANAGER,
                    ],
                    'man'                  => \ZodiacParagraphs::ARIES_MAN,
                    'woman'                => \ZodiacParagraphs::ARIES_WOMAN,
                    'style'                => \ZodiacParagraphs::ARIES_STYLE,
                    'in_love'              => \ZodiacParagraphs::ARIES_INLOVE,
                    'mother'               => \ZodiacParagraphs::ARIES_MOTHER,
                    'father'               => \ZodiacParagraphs::ARIES_FATHER,
                    'child'                => \ZodiacParagraphs::ARIES_CHILD,
                    'bodyparts'            => [
                        \BodyParts::HEAD,
                        \BodyParts::FACE,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::SAGITTARIUS,
                        \ZodiacNames::LEO,
                        \ZodiacNames::LIBRA,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::PISCES,
                        \ZodiacNames::AQUARIUS,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::FAST,
                        \CharacteristicFeatures::THEHORNBEAM,
                        \CharacteristicFeatures::COMPETITIVE,
                        \CharacteristicFeatures::DARING,
                        \CharacteristicFeatures::MANLY,
                        \CharacteristicFeatures::STRONG,
                        \CharacteristicFeatures::ENTHUSIASTIC,
                        \CharacteristicFeatures::DETERMINED,
                        \CharacteristicFeatures::STUBBORN,
                        \CharacteristicFeatures::HARDWORKING,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::IMPATIENT,
                        \CharacteristicFeatures::CHILDISH,
                        \CharacteristicFeatures::HASTY,
                        \CharacteristicFeatures::INDEPENDENT,
                        \CharacteristicFeatures::HONEST,
                        \CharacteristicFeatures::HARD,
                    ],
                ];
                break;
            case \ZodiacNames::TAURUS:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 4,
                            'month_string' => \Months::APRIL,
                            'day'          => 19,
                        ],
                        'end'   => [
                            'month_int'    => 5,
                            'month_string' => \Months::MAY,
                            'day'          => 21,
                        ],
                    ],
                    'elements'             => \EarthElements::GROUND,
                    'character'            => \CharacterQualitications::STABLE,
                    'planet'               => \Planets::VENUS,
                    'colors'               => [
                        \Colors::SOILCOLORS,
                        \Colors::TABA,
                        \Colors::BEIGE,
                        \Colors::BROWN,
                        \Colors::GREEN,
                    ],
                    'gem'                  => \Gems::EMERALD,
                    'day'                  => \Days::FRIDAY,
                    'features'             => [
                        \CharacteristicFeatures::RELIABLE,
                        \CharacteristicFeatures::SELFINDULGENT,
                        \CharacteristicFeatures::FONDOFCOMFORT,
                        \CharacteristicFeatures::ADDICTEDTOFOOD,
                        \CharacteristicFeatures::GOURMET,
                        \CharacteristicFeatures::DIFFICULTTOMOVE,
                    ],
                    'man'                  => \ZodiacParagraphs::TAURUS_MAN,
                    'woman'                => \ZodiacParagraphs::TAURUS_WOMAN,
                    'style'                => \ZodiacParagraphs::TAURUS_STYLE,
                    'in_love'              => \ZodiacParagraphs::TAURUS_INLOVE,
                    'mother'               => \ZodiacParagraphs::TAURUS_MOTHER,
                    'father'               => \ZodiacParagraphs::TAURUS_FATHER,
                    'child'                => \ZodiacParagraphs::TAURUS_CHILD,
                    'bodyparts'            => [
                        \BodyParts::NECK,
                        \BodyParts::THROAT,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::VIRGO,
                        \ZodiacNames::SCORPIO,
                        \ZodiacNames::LIBRA,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::LEO,
                        \ZodiacNames::AQUARIUS,
                        \ZodiacNames::SAGITTARIUS,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::RELIABLE,
                        \CharacteristicFeatures::LOYAL,
                        \CharacteristicFeatures::TASTEFUL,
                        \CharacteristicFeatures::GOURMET,
                        \CharacteristicFeatures::POSSESSIVE,
                        \CharacteristicFeatures::PASSIONATE,
                        \CharacteristicFeatures::CREATIVE,
                        \CharacteristicFeatures::AESTHETICANDARTDIRECTIONSTRONG,
                        \CharacteristicFeatures::FONDOFLUXURYANDCOMFORT,
                        \CharacteristicFeatures::COMPATIBLE,
                        \CharacteristicFeatures::HEALTHY,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::SLOWLY,
                        \CharacteristicFeatures::STUBBORN,
                        \CharacteristicFeatures::OBSESSIVE,
                        \CharacteristicFeatures::CONSERVATIVE,
                        \CharacteristicFeatures::DEPENDENT,
                        \CharacteristicFeatures::PLEASUREIST,
                        \CharacteristicFeatures::SLOWBUTHARD,
                    ],
                ];
                break;
            case \ZodiacNames::GEMINI:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 5,
                            'month_string' => \Months::MAY,
                            'day'          => 20,
                        ],
                        'end'   => [
                            'month_int'    => 6,
                            'month_string' => \Months::JUNE,
                            'day'          => 21,
                        ],
                    ],
                    'elements'             => \EarthElements::AIR,
                    'character'            => \CharacterQualitications::FLEXIBLE,
                    'planet'               => \Planets::MERCURY,
                    'colors'               => [
                        \Colors::ORANGE,
                        \Colors::YELLOW,
                    ],
                    'gem'                  => \Gems::AGATE,
                    'day'                  => \Days::WEDNESDAY,
                    'features'             => [
                        \CharacteristicFeatures::FLEXIBLE,
                        \CharacteristicFeatures::COMPATIBLE,
                        \CharacteristicFeatures::AGILE,
                        \CharacteristicFeatures::CHATTY,
                        \CharacteristicFeatures::CURIOUS,
                        \CharacteristicFeatures::FRIENDLY,
                    ],
                    'man'                  => \ZodiacParagraphs::GEMINI_MAN,
                    'woman'                => \ZodiacParagraphs::GEMINI_WOMAN,
                    'style'                => \ZodiacParagraphs::GEMINI_STYLE,
                    'in_love'              => \ZodiacParagraphs::GEMINI_INLOVE,
                    'mother'               => \ZodiacParagraphs::GEMINI_MOTHER,
                    'father'               => \ZodiacParagraphs::GEMINI_FATHER,
                    'child'                => \ZodiacParagraphs::GEMINI_CHILD,
                    'bodyparts'            => [
                        \BodyParts::HANDS,
                        \BodyParts::SHOULDER,
                        \BodyParts::ARMS,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::LIBRA,
                        \ZodiacNames::SAGITTARIUS,
                        \ZodiacNames::AQUARIUS,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::CANCER,
                        \ZodiacNames::TAURUS,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::CURIOUS,
                        \CharacteristicFeatures::WILLING,
                        \CharacteristicFeatures::RESTLESSLY,
                        \CharacteristicFeatures::CLEVER,
                        \CharacteristicFeatures::SMART,
                        \CharacteristicFeatures::TALENTED,
                        \CharacteristicFeatures::COMMUNICATIONISSTRONG,
                        \CharacteristicFeatures::LOVINGTOWRITE,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::SHY,
                        \CharacteristicFeatures::MESSY,
                        \CharacteristicFeatures::RESTLESS,
                        \CharacteristicFeatures::UNBALANCED,
                        \CharacteristicFeatures::UNCOMPROMISING,
                        \CharacteristicFeatures::SUPERFICIAL,
                    ],
                ];
                break;
            case \ZodiacNames::CANCER:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 6,
                            'month_string' => \Months::JUNE,
                            'day'          => 20,
                        ],
                        'end'   => [
                            'month_int'    => 7,
                            'month_string' => \Months::JULY,
                            'day'          => 23,
                        ],
                    ],
                    'elements'             => \EarthElements::WATER,
                    'character'            => \CharacterQualitications::PIONEER,
                    'planet'               => \Planets::MOON,
                    'colors'               => [
                        \Colors::BLUE,
                    ],
                    'gem'                  => \Gems::PEARL,
                    'day'                  => \Days::MONDAY,
                    'features'             => [
                        \CharacteristicFeatures::HOMELOVING,
                        \CharacteristicFeatures::FONDOFHERMOTHER,
                        \CharacteristicFeatures::FONTOFTHEHOMELAND,
                        \CharacteristicFeatures::FONDOFTHEFAMILY,
                        \CharacteristicFeatures::SENSITIVELY,
                        \CharacteristicFeatures::SENSITIVE,
                        \CharacteristicFeatures::ADDICTEDTOFOOD,
                        \CharacteristicFeatures::LOVEHISTORY,
                        \CharacteristicFeatures::HASMUSICALTALENT,
                    ],
                    'man'                  => \ZodiacParagraphs::CANCER_MAN,
                    'woman'                => \ZodiacParagraphs::CANCER_WOMAN,
                    'style'                => \ZodiacParagraphs::CANCER_STYLE,
                    'in_love'              => \ZodiacParagraphs::CANCER_INLOVE,
                    'mother'               => \ZodiacParagraphs::CANCER_MOTHER,
                    'father'               => \ZodiacParagraphs::CANCER_FATHER,
                    'child'                => \ZodiacParagraphs::CANCER_CHILD,
                    'bodyparts'            => [
                        \BodyParts::CHEST,
                        \BodyParts::STOMACH,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::SCORPIO,
                        \ZodiacNames::PISCES,
                        \ZodiacNames::CAPRICORN,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::GEMINI,
                        \ZodiacNames::SAGITTARIUS,
                        \ZodiacNames::AQUARIUS,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::COMPASSIONATE,
                        \CharacteristicFeatures::CONSERVATOR,
                        \CharacteristicFeatures::DEEPANDSINCERE,
                        \CharacteristicFeatures::FONDOFTHEFAMILY,
                        \CharacteristicFeatures::EMOTIONAL,
                        \CharacteristicFeatures::INTUITIVE,
                        \CharacteristicFeatures::SENSITIVE,
                        \CharacteristicFeatures::SENSITIVELY,
                        \CharacteristicFeatures::DEVOTED,
                        \CharacteristicFeatures::LONGSUFFERING,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::SLOWLY,
                        \CharacteristicFeatures::QUIET,
                        \CharacteristicFeatures::INCOMPREHENSIBLE,
                        \CharacteristicFeatures::DISCONCERTING,
                        \CharacteristicFeatures::WORRIED,
                        \CharacteristicFeatures::SKEPTICAL,
                    ],
                ];
                break;
            case \ZodiacNames::LEO:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 7,
                            'month_string' => \Months::JULY,
                            'day'          => 22,
                        ],
                        'end'   => [
                            'month_int'    => 8,
                            'month_string' => \Months::AUGUST,
                            'day'          => 23,
                        ],
                    ],
                    'elements'             => \EarthElements::FIRE,
                    'character'            => \CharacterQualitications::STABLE,
                    'planet'               => \Planets::SUN,
                    'colors'               => [
                        \Colors::GOLDEN,
                        \Colors::ORANGE,
                    ],
                    'gem'                  => \Gems::RUBY,
                    'day'                  => \Days::SUNDAY,
                    'features'             => [
                        \CharacteristicFeatures::CONFIDENT,
                        \CharacteristicFeatures::PROUD,
                        \CharacteristicFeatures::DEFENDING,
                        \CharacteristicFeatures::THEARMS,
                        \CharacteristicFeatures::SHOWY,
                        \CharacteristicFeatures::FONDOFTHEART,
                        \CharacteristicFeatures::ESTRANGED,
                    ],
                    'man'                  => \ZodiacParagraphs::LEO_MAN,
                    'woman'                => \ZodiacParagraphs::LEO_WOMAN,
                    'style'                => \ZodiacParagraphs::LEO_STYLE,
                    'in_love'              => \ZodiacParagraphs::LEO_INLOVE,
                    'mother'               => \ZodiacParagraphs::LEO_MOTHER,
                    'father'               => \ZodiacParagraphs::LEO_FATHER,
                    'child'                => \ZodiacParagraphs::LEO_CHILD,
                    'bodyparts'            => [
                        \BodyParts::HEARTH,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::SAGITTARIUS,
                        \ZodiacNames::ARIES,
                        \ZodiacNames::AQUARIUS,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::SCORPIO,
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::CANCER,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::THEARMS,
                        \CharacteristicFeatures::GENEROUS,
                        \CharacteristicFeatures::HUMBLE,
                        \CharacteristicFeatures::PROUD,
                        \CharacteristicFeatures::HONORABLE,
                        \CharacteristicFeatures::CREATIVE,
                        \CharacteristicFeatures::HAPPY,
                        \CharacteristicFeatures::PLAYER,
                        \CharacteristicFeatures::CHARISMATIC,
                        \CharacteristicFeatures::ROMANTIC,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::LOVINGGOVERNMENT,
                        \CharacteristicFeatures::CONSERVATIVE,
                        \CharacteristicFeatures::PENDING,
                        \CharacteristicFeatures::EXAGGERATED,
                        \CharacteristicFeatures::EVERYTHINGTHATCANBEPERCEIVEDVERYPERSONALLY,
                        \CharacteristicFeatures::OBSESSIVE,
                        \CharacteristicFeatures::STUBBORN,
                    ],
                ];
                break;
            case \ZodiacNames::VIRGO:
            case \ZodiacNames::LIBRA:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 9,
                            'month_string' => \Months::SEPTEMBER,
                            'day'          => 22,
                        ],
                        'end'   => [
                            'month_int'    => 10,
                            'month_string' => \Months::OCTOBER,
                            'day'          => 23,
                        ],
                    ],
                    'elements'             => \EarthElements::AIR,
                    'character'            => \CharacterQualitications::PIONEER,
                    'planet'               => \Planets::VENUS,
                    'colors'               => [
                        \Colors::BLUE,
                        \Colors::PINK,
                    ],
                    'gem'                  => \Gems::SAPPHIRE,
                    'day'                  => \Days::FRIDAY,
                    'features'             => [
                        \CharacteristicFeatures::FAIR,
                        \CharacteristicFeatures::EQUITABLE,
                        \CharacteristicFeatures::BALANCED,
                        \CharacteristicFeatures::COMPATIBLE,
                        \CharacteristicFeatures::RELAX,
                        \CharacteristicFeatures::PATIENT,
                        \CharacteristicFeatures::SMART,
                        \CharacteristicFeatures::POLITE,
                    ],
                    'man'                  => \ZodiacParagraphs::LIBRA_MAN,
                    'woman'                => \ZodiacParagraphs::LIBRA_WOMAN,
                    'style'                => \ZodiacParagraphs::LIBRA_STYLE,
                    'in_love'              => \ZodiacParagraphs::LIBRA_INLOVE,
                    'mother'               => \ZodiacParagraphs::LIBRA_MOTHER,
                    'father'               => \ZodiacParagraphs::LIBRA_FATHER,
                    'child'                => \ZodiacParagraphs::LIBRA_CHILD,
                    'bodyparts'            => [
                        \BodyParts::KIDNEYS,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::GEMINI,
                        \ZodiacNames::AQUARIUS,
                        \ZodiacNames::ARIES,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::PISCES,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::RATIONAL,
                        \CharacteristicFeatures::SENSIBLE,
                        \CharacteristicFeatures::BALANCED,
                        \CharacteristicFeatures::COMPATIBLE,
                        \CharacteristicFeatures::FAIR,
                        \CharacteristicFeatures::ELEGANT,
                        \CharacteristicFeatures::POLITE,
                        \CharacteristicFeatures::KIND,
                        \CharacteristicFeatures::ARTISTSOUL,
                        \CharacteristicFeatures::PLEASANT,
                        \CharacteristicFeatures::WELLBEHAVED,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::THEIRPLEASURE,
                        \CharacteristicFeatures::DELIGHTFUL,
                        \CharacteristicFeatures::LAZY,
                        \CharacteristicFeatures::SLEEPER,
                        \CharacteristicFeatures::UNSTABLE,
                        \CharacteristicFeatures::MANIPULATIVES,
                    ],
                ];
                break;
            case \ZodiacNames::SCORPIO:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 10,
                            'month_string' => \Months::OCTOBER,
                            'day'          => 22,
                        ],
                        'end'   => [
                            'month_int'    => 11,
                            'month_string' => \Months::NOVEMBER,
                            'day'          => 22,
                        ],
                    ],
                    'elements'             => \EarthElements::WATER,
                    'character'            => \CharacterQualitications::STABLE,
                    'planet'               => \Planets::MARS,
                    'colors'               => [
                        \Colors::CLARETRED,
                    ],
                    'gem'                  => \Gems::OPAL,
                    'day'                  => \Days::TUESDAY,
                    'features'             => [
                        \CharacteristicFeatures::BELLICOSE,
                        \CharacteristicFeatures::STRONG,
                        \CharacteristicFeatures::DETERMINED,
                        \CharacteristicFeatures::AMBITIOUS,
                        \CharacteristicFeatures::RELIABLE,
                        \CharacteristicFeatures::QUALIFIED,
                    ],
                    'man'                  => \ZodiacParagraphs::SCORPIO_MAN,
                    'woman'                => \ZodiacParagraphs::SCORPIO_WOMAN,
                    'style'                => \ZodiacParagraphs::SCORPIO_STYLE,
                    'in_love'              => \ZodiacParagraphs::SCORPIO_INLOVE,
                    'mother'               => \ZodiacParagraphs::SCORPIO_MOTHER,
                    'father'               => \ZodiacParagraphs::SCORPIO_FATHER,
                    'child'                => \ZodiacParagraphs::SCORPIO_CHILD,
                    'bodyparts'            => [
                        \BodyParts::SEXUALAREAS,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::CANCER,
                        \ZodiacNames::PISCES,
                        \ZodiacNames::TAURUS,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::AQUARIUS,
                        \ZodiacNames::LEO,
                        \ZodiacNames::VIRGO,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::BELLICOSE,
                        \CharacteristicFeatures::DETERMINED,
                        \CharacteristicFeatures::FOOLHARDY,
                        \CharacteristicFeatures::PROFOUND,
                        \CharacteristicFeatures::INTUITIVE,
                        \CharacteristicFeatures::AWARENESSANDPERCEPTIONISHIGH,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::SKEPTICAL,
                        \CharacteristicFeatures::JEALOUS,
                        \CharacteristicFeatures::ACCUMULATEANDTHENEXPLODE,
                        \CharacteristicFeatures::QUIET,
                        \CharacteristicFeatures::GODEEPLY,
                    ],
                ];
                break;
            case \ZodiacNames::SAGITTARIUS:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 11,
                            'month_string' => \Months::NOVEMBER,
                            'day'          => 21,
                        ],
                        'end'   => [
                            'month_int'    => 12,
                            'month_string' => \Months::DECEMBER,
                            'day'          => 22,
                        ],
                    ],
                    'elements'             => \EarthElements::FIRE,
                    'character'            => \CharacterQualitications::FLEXIBLE,
                    'planet'               => \Planets::JUPITER,
                    'colors'               => [
                        \Colors::VIOLET,
                    ],
                    'gem'                  => \Gems::TOPAZ,
                    'day'                  => \Days::THURSDAY,
                    'features'             => [
                        \CharacteristicFeatures::INDEPENDENT,
                        \CharacteristicFeatures::FREE,
                        \CharacteristicFeatures::ACTIVE,
                        \CharacteristicFeatures::DYNAMIC,
                        \CharacteristicFeatures::SPORTY,
                        \CharacteristicFeatures::ADVENTUROUS,
                    ],
                    'man'                  => \ZodiacParagraphs::SAGITTARIUS_MAN,
                    'woman'                => \ZodiacParagraphs::SAGITTARIUS_WOMAN,
                    'style'                => \ZodiacParagraphs::SAGITTARIUS_STYLE,
                    'in_love'              => \ZodiacParagraphs::SAGITTARIUS_INLOVE,
                    'mother'               => \ZodiacParagraphs::SAGITTARIUS_MOTHER,
                    'father'               => \ZodiacParagraphs::SAGITTARIUS_FATHER,
                    'child'                => \ZodiacParagraphs::SAGITTARIUS_CHILD,
                    'bodyparts'            => [
                        \BodyParts::HIP,
                        \BodyParts::CALF,
                        \BodyParts::NERVES,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::LEO,
                        \ZodiacNames::ARIES,
                        \ZodiacNames::GEMINI,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::CANCER,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::HAPPY,
                        \CharacteristicFeatures::LIVE,
                        \CharacteristicFeatures::ACTIVE,
                        \CharacteristicFeatures::OPTIMISTIC,
                        \CharacteristicFeatures::BENEVOLENT,
                        \CharacteristicFeatures::BELIEVER,
                        \CharacteristicFeatures::WISE,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::POLITICALLYINCORRECT,
                        \CharacteristicFeatures::UNLIMITED,
                        \CharacteristicFeatures::DEVOTEDTOFREEDOM,
                        \CharacteristicFeatures::LOVINGTOSPENDALOTOFMONEY,
                        \CharacteristicFeatures::ADDICTEDTOFOOD,
                        \CharacteristicFeatures::DROWSY,
                    ],
                ];
                break;
            case \ZodiacNames::CAPRICORN:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 12,
                            'month_string' => \Months::DECEMBER,
                            'day'          => 21,
                        ],
                        'end'   => [
                            'month_int'    => 1,
                            'month_string' => \Months::JANUARY,
                            'day'          => 20,
                        ],
                    ],
                    'elements'             => \EarthElements::GROUND,
                    'character'            => \CharacterQualitications::PIONEER,
                    'planet'               => \Planets::SATURN,
                    'colors'               => [
                        \Colors::BROWN,
                        \Colors::BLACK,
                    ],
                    'gem'                  => \Gems::AMETIST,
                    'day'                  => \Days::SATURDAY,
                    'features'             => [
                        \CharacteristicFeatures::SERIOUS,
                        \CharacteristicFeatures::COLDBLOODED,
                        \CharacteristicFeatures::DISTANCEIFNECESSARY,
                        \CharacteristicFeatures::PLANNED,
                        \CharacteristicFeatures::ORGANIZED,
                        \CharacteristicFeatures::DISCIPLINED,
                        \CharacteristicFeatures::WORKANDCAREERORIENTED,
                    ],
                    'man'                  => \ZodiacParagraphs::CAPRICORN_MAN,
                    'woman'                => \ZodiacParagraphs::CAPRICORN_WOMAN,
                    'style'                => \ZodiacParagraphs::CAPRICORN_STYLE,
                    'in_love'              => \ZodiacParagraphs::CAPRICORN_INLOVE,
                    'mother'               => \ZodiacParagraphs::CAPRICORN_MOTHER,
                    'father'               => \ZodiacParagraphs::CAPRICORN_FATHER,
                    'child'                => \ZodiacParagraphs::CAPRICORN_CHILD,
                    'bodyparts'            => [
                        \BodyParts::BONES,
                        \BodyParts::TEETH,
                        \BodyParts::SKIN,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::CANCER,
                        \ZodiacNames::TAURUS,
                        \ZodiacNames::VIRGO,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::GEMINI,
                        \ZodiacNames::SAGITTARIUS,
                        \ZodiacNames::ARIES,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::STRATEGIC,
                        \CharacteristicFeatures::PLANNED,
                        \CharacteristicFeatures::REGULAR,
                        \CharacteristicFeatures::SERIOUS,
                        \CharacteristicFeatures::FRUGAL,
                        \CharacteristicFeatures::CALCULATED,
                        \CharacteristicFeatures::RESISTANT,
                        \CharacteristicFeatures::STRONG,
                        \CharacteristicFeatures::RELIABLE,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::COLD,
                        \CharacteristicFeatures::SOLID,
                        \CharacteristicFeatures::DISTANT,
                        \CharacteristicFeatures::STINGY,
                        \CharacteristicFeatures::LONELYANDLOVINGISOLATEDLIFE,
                        \CharacteristicFeatures::ANTISOCIAL,
                        \CharacteristicFeatures::REPUTATION,
                        \CharacteristicFeatures::PEREMPTORY,
                    ],
                ];
                break;
            case \ZodiacNames::AQUARIUS:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 1,
                            'month_string' => \Months::JANUARY,
                            'day'          => 19,
                        ],
                        'end'   => [
                            'month_int'    => 2,
                            'month_string' => \Months::FEBRUARY,
                            'day'          => 19,
                        ],
                    ],
                    'elements'             => \EarthElements::AIR,
                    'character'            => \CharacterQualitications::STABLE,
                    'planet'               => \Planets::SATURN,
                    'colors'               => [
                        \Colors::BLUE,
                        \Colors::GREEN,
                    ],
                    'gem'                  => \Gems::AQUAMARINE,
                    'day'                  => \Days::SATURDAY,
                    'features'             => [
                        \CharacteristicFeatures::FRIENDLY,
                        \CharacteristicFeatures::SOCIAL,
                        \CharacteristicFeatures::INNOVATOR,
                        \CharacteristicFeatures::EXTRAORDINARY,
                        \CharacteristicFeatures::MARGINAL,
                    ],
                    'man'                  => \ZodiacParagraphs::AQUARIUS_MAN,
                    'woman'                => \ZodiacParagraphs::AQUARIUS_WOMAN,
                    'style'                => \ZodiacParagraphs::AQUARIUS_STYLE,
                    'in_love'              => \ZodiacParagraphs::AQUARIUS_INLOVE,
                    'mother'               => \ZodiacParagraphs::AQUARIUS_MOTHER,
                    'father'               => \ZodiacParagraphs::AQUARIUS_FATHER,
                    'child'                => \ZodiacParagraphs::AQUARIUS_CHILD,
                    'bodyparts'            => [
                        \BodyParts::ANKLE,
                        \BodyParts::BLOODCIRCULATION,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::GEMINI,
                        \ZodiacNames::LIBRA,
                        \ZodiacNames::LEO,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::CANCER,
                        \ZodiacNames::TAURUS,
                        \ZodiacNames::ARIES,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::HUMANIST,
                        \CharacteristicFeatures::INSTRUCTIVE,
                        \CharacteristicFeatures::FREE,
                        \CharacteristicFeatures::INNOVATOR,
                        \CharacteristicFeatures::MODERN,
                        \CharacteristicFeatures::DIFFERENT,
                        \CharacteristicFeatures::EXTRAORDINARY,
                        \CharacteristicFeatures::CLEVER,
                        \CharacteristicFeatures::SMART,
                        \CharacteristicFeatures::UNBIASED,
                        \CharacteristicFeatures::SOCIAL,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::ASIATIC,
                        \CharacteristicFeatures::INSUBORDINATE,
                        \CharacteristicFeatures::RESTLESS,
                        \CharacteristicFeatures::SARCASTIC,
                        \CharacteristicFeatures::ABLE,
                        \CharacteristicFeatures::APPEARDEAD,
                    ],
                ];
                break;
            case \ZodiacNames::PISCES:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 2,
                            'month_string' => \Months::FEBRUARY,
                            'day'          => 18,
                        ],
                        'end'   => [
                            'month_int'    => 3,
                            'month_string' => \Months::MARCH,
                            'day'          => 21,
                        ],
                    ],
                    'elements'             => \EarthElements::WATER,
                    'character'            => \CharacterQualitications::FLEXIBLE,
                    'planet'               => \Planets::JUPITER,
                    'colors'               => [
                        \Colors::WHITE,
                        \Colors::LAVENDER,
                    ],
                    'gem'                  => \Gems::MOONSTONE,
                    'day'                  => \Days::THURSDAY,
                    'features'             => [
                        \CharacteristicFeatures::SENSITIVE,
                        \CharacteristicFeatures::SENSITIVELY,
                        \CharacteristicFeatures::EMPATHIC,
                        \CharacteristicFeatures::CONSCIENTIOUS,
                        \CharacteristicFeatures::SENSITIVELY,
                        \CharacteristicFeatures::ART,
                        \CharacteristicFeatures::HELPFUL,
                        \CharacteristicFeatures::EASILYAFFECTED,
                    ],
                    'man'                  => \ZodiacParagraphs::PISCES_MAN,
                    'woman'                => \ZodiacParagraphs::PISCES_WOMAN,
                    'style'                => \ZodiacParagraphs::PISCES_STYLE,
                    'in_love'              => \ZodiacParagraphs::PISCES_INLOVE,
                    'mother'               => \ZodiacParagraphs::PISCES_MOTHER,
                    'father'               => \ZodiacParagraphs::PISCES_FATHER,
                    'child'                => \ZodiacParagraphs::PISCES_CHILD,
                    'bodyparts'            => [
                        \BodyParts::FEETS,
                    ],
                    'compatible_zodiacs'   => [
                        \ZodiacNames::VIRGO,
                        \ZodiacNames::SCORPIO,
                        \ZodiacNames::CANCER,
                    ],
                    'uncompatible_zodiacs' => [
                        \ZodiacNames::AQUARIUS,
                        \ZodiacNames::CAPRICORN,
                        \ZodiacNames::ARIES,
                    ],
                    'positives'            => [
                        \CharacteristicFeatures::DEVOTED,
                        \CharacteristicFeatures::LONGSUFFERING,
                        \CharacteristicFeatures::EMOTIONAL,
                        \CharacteristicFeatures::INTUITIVE,
                        \CharacteristicFeatures::MERCIFUL,
                        \CharacteristicFeatures::ARTISTSOUL,
                        \CharacteristicFeatures::SENSITIVE,
                        \CharacteristicFeatures::BELIEVER,
                        \CharacteristicFeatures::MYSTIC,
                    ],
                    'negatives'            => [
                        \CharacteristicFeatures::WEAK,
                        \CharacteristicFeatures::SENSITIVE,
                        \CharacteristicFeatures::FRAGILE,
                        \CharacteristicFeatures::AGGRIEVED,
                        \CharacteristicFeatures::LACHYRMOSE,
                        \CharacteristicFeatures::MESSY,
                        \CharacteristicFeatures::EASILYAFFECTED,
                        \CharacteristicFeatures::MANIPULATIVES,
                        \CharacteristicFeatures::INCONSISTENT,
                        \CharacteristicFeatures::DEPENDENT,
                    ],
                ];
                break;
            default:
                return [
                    'dates'                => [
                        'begin' => [
                            'month_int'    => 0,
                            'month_string' => '',
                            'day'          => 0,
                        ],
                        'end'   => [
                            'month_int'    => 0,
                            'month_string' => '',
                            'day'          => 0,
                        ],
                    ],
                    'elements'             => '',
                    'character'            => '',
                    'planet'               => '',
                    'colors'               => [],
                    'gem'                  => '',
                    'day'                  => '',
                    'features'             => [],
                    'man'                  => '',
                    'woman'                => '',
                    'style'                => '',
                    'in_love'              => '',
                    'mother'               => '',
                    'father'               => '',
                    'child'                => '',
                    'bodyparts'            => [],
                    'compatible_zodiacs'   => [],
                    'uncompatible_zodiacs' => [],
                    'positives'            => [],
                    'negatives'            => [],
                ];
                break;
        }
    }
}