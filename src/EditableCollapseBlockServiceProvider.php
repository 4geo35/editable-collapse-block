<?php

namespace GIS\EditableCollapseBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;

class EditableCollapseBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        // config
        $this->mergeConfigFrom(__DIR__ . "/config/editable-collapse-block.php", 'editable-collapse-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ecb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function addLivewireComponents()
    {
    }

    protected function expandConfiguration()
    {
        $ecb = app()->config["editable-collapse-block"];
        $this->expandTemplates($ecb);
        $this->expandBlocks($ecb);
    }
}
