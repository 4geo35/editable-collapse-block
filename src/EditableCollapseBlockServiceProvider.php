<?php

namespace GIS\EditableCollapseBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use GIS\EditableCollapseBlock\Livewire\Admin\Types\CollapseTextWire;
use Livewire\Livewire;

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

    protected function addLivewireComponents(): void
    {
        $component = config("editable-collapse-blocks.customCollapseTextComponent");
        Livewire::component(
            "ecb-collapse-text",
            $component ?? CollapseTextWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $ecb = app()->config["editable-collapse-block"];
        $this->expandTemplates($ecb);
        $this->expandBlocks($ecb);
    }
}
