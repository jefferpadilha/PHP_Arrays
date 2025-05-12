<?php
//Teste de commit Guit 23:52
require_once "average.php";
require_once "approval.php";

$student = [
    [
        "nome" => "Ana Paulo Padilha",
        "rm" => "104",
        "email" => "ana.paula@etec.com.br",
        "notas" => [
            6.0,
            5.5,
            6.5
        ]
    ],
    [
        "nome" => "Jefferson Padilha",
        "rm" => "102", "email" => "jefferson.padilha@etec.com.br",
        "notas" => [
           5.0,
           4.5,
           6.0
        ]
    ],
    [
        "nome" => "Isis Padilha", 
        "rm" => "103", 
        "email" => "isis.padilha@etec.com.br", 
        "notas" => [
            9.0, 
            8.5, 
            9.5
        ]
    ],
    [
        "nome" => "Ana Paulo Padilha", 
        "rm" => "104", 
        "email" => "ana.paula@etec.com.br", 
        "notas" => [
            6.0, 
            5.5, 
            6.5
        ]
    ],
    [
        "nome" => "Carlos Padilha",
        "rm" => "105",
        "email" => "carlos.padilha@etec.com.br",
        "notas" => [
            8.0,
            9.5,
            2.0
        ]
     ],
     [
        "nome" => "Juliana Padilha",
        "rm" => "106",
        "email" => "juliana.padilha@etec.com.br",
        "notas" => [
            6.0,
            7.5,
            4.5
        ]
    ]
    
];

foreach ($student as $student) {
    $name = $student["nome"];
    $rm = $student["rm"];
    $email = $student["email"];
    $notes = $student["notas"];

    $average = new average($notes);
    $avaregeNotes = number_format($average->getAvarege(), 2) ;
    $approval = new approval($avaregeNotes);
    $status = $approval->getApproval();
    echo "Nome: $name\n";
    echo "RM: $rm\n";
    echo "Email: $email\n";
    echo "Notas: ".implode(" - ", $notes)."\n";
    echo "Média: $avaregeNotes\n" ;
    echo "Situação: $status\n\n" ;
    }
