<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body class="antialiased">

        <?php
        use League\Csv\Reader;

            //load the CSV document from a file path
            $csv = Reader::createFromPath('../resources/files/TestRims.csv', 'r');
            $csv->setHeaderOffset(0);

            $header = $csv->getHeader(); //returns the CSV header record
            $records = $csv->getRecords(); //returns all the CSV records as an Iterator object

            // $csv->toString(); //returns the CSV document as a string

            echo "<pre>";
                print_r($csv->toString());
            echo "</pre>"
        ?>

    </body>
</html>