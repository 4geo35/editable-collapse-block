<?php

namespace GIS\EditableCollapseBlock\Templates;


use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class CollapseRecordMobile implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->cover(408, 240);
    }
}
