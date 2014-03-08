<?php
    /*****
     * This class is used to manipulate URIs on your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: efuzyon
     * @class: URI
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace efuzyon;

    class URI {

        /*****
        * This method generates a URI from a string according to your parameters
        * and returns it.
        * 
        * Part of this code is based on "The Perfect PHP Clean URL Generator".
        * URL: http://cubiq.org/the-perfect-php-clean-url-generator
        *
        * @static
        * @public
        * Generate - Generate( string value, array opt )
        * @return string $output
        *****/

        static public function Generate( $value = false, $opt = array() ){

            // Making a copy of the original $value
            $original = $value;
            // Setting the output var
            $output = $original;

            // If $opt exists, verify the following options
            if( $opt ):

                // Should this method clean the value before generating the URI?
                if( $opt["clean"] ):

                    $output = String::Clean($output, array(
                        "strip_tags" => true,
                        "trim" => true
                    ));

                endif;

            endif;

            // Seeting separator
            $separator = ( $opt["separator"] ) ? $opt["separator"] : "-" ;

            // Generate URI from string
            $output = iconv('UTF-8', 'ASCII//TRANSLIT', $output);
            $output = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $output);
            $output = strtolower(trim($output, $separator));
            $output = preg_replace("/[\/_| -]+/", $separator, $output);

            // Return the URI
            return $output;

        }
    }