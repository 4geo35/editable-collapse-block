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
        "collapse-record" => \GIS\EditableBlocks\Templates\CollapseRecord::class,
        "collapse-record-tablet" => \GIS\EditableBlocks\Templates\CollapseRecordTablet::class,
        "collapse-record-mobile" => \GIS\EditableBlocks\Templates\CollapseRecordMobile::class,

        "collapse-record-two-thirds" => \GIS\EditableBlocks\Templates\CollapseRecordTwoThirds::class,
    ],
];
