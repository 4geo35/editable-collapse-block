<?php

return [
    "availableTypes" => [
        "collapseText" => [
            "title" => "Аккордеон",
            // Livewire компонент для админки
            "admin" => "ecb-collapse-text",
            // Компонент для вывода блока
            "render" => "ecb::types.collapse-text",
        ],
    ],
    // Admin
    "customCollapseTextComponent" => null,
    // Templates
    "templates" => [
        "collapse-record" => \GIS\EditableCollapseBlock\Templates\CollapseRecord::class,
        "collapse-record-tablet" => \GIS\EditableCollapseBlock\Templates\CollapseRecordTablet::class,
        "collapse-record-mobile" => \GIS\EditableCollapseBlock\Templates\CollapseRecordMobile::class,

        "collapse-record-two-thirds" => \GIS\EditableCollapseBlock\Templates\CollapseRecordTwoThirds::class,
    ],
];
