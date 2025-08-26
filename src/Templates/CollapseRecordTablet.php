<?php

namespace GIS\EditableCollapseBlock\Templates;


use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class CollapseRecordTablet implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->cover(648, 392);
    }
}
