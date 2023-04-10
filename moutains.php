<?php
    header('Access-Control-Allow-Origin: *');


    $Mountains = [
          "Mountain" => [
            [
              "Name" => "Mount Fuji",
              "MountainType" => "Stratovolcano",
              "Height" => "3,776 m",
              "Country" => "Japan",
                "Minerals" => [
                    "Allophane",
                    "Charcoal",
                    "Cristobalite",
                    "Iron",
                    "Magnetite",
                    "Plagioclase",
                    "Saponite"
                ]
            ],
            [
              "Name" => "Mount Kilimanjaro",
              "MountainType" => "Stratovolcano",
              "Height" => "5,895 m",
              "Country" => "Tanzania",
                "Minerals" => [
                  "Albite",
                  "Apatite",
                  "Augite",
                  "Glass",
                  "Ilmenite",
                  "Leucite",
                  "Nepheline"
                ]
            ],
            [
              "Name" => "Mount Pinatubo",
              "MountainType" => "Stratovolcano",
              "Height" => "1,486 m",
              "Country" => "Philippines",
                "Minerals" => [
                  "Anhydrite",
                  "Anorthite",
                  "Chalcopyrite",
                  "Cubanite",
                  "Edenite",
                  "Enstatite",
                  "Glass"
                ]
            ],
            [
              "Name" => "Mount Everest",
              "MountainType" => "Fold Mountain",
              "Height" => "8,849 m",
              "Country" => "China and Nepal",
                "Minerals" => [
                  "Apatite",
                  "Biotite",
                  "Calcite",
                  "Muscovite",
                  "Pyrite",
                  "Quarts",
                  "Zircon"
                ]
            ],
            [
              "Name" => "Mount La Sal",
              "MountainType" => "Dome Mountain",
              "Height" => "3,879 m",
              "Country" => "United States",
                "Minerals" => [
                  "Carnotite",
                  "Pyrite",
                  "Quarts",
                  "Magnetite",
                  "Chalcopyrite",
                  "Calcite",
                  "Flourite"
                ]
            ]
        ]
    ];
    $MountainData = json_encode($Mountains);
    // echo $MountainData;

    print_r($MountainData);

?>