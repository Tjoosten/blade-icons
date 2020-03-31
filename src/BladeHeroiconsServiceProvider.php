<?php

namespace Dries\Heroicons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeHeroiconsServiceProvider extends ServiceProvider
{
    private const ICONS = [
        'adjustments',
        'annotation',
        'archive',
        'arrow-circle-down',
        'arrow-circle-left',
        'arrow-circle-right',
        'arrow-circle-up',
        'arrow-down',
        'arrow-left',
        'arrow-narrow-down',
        'arrow-narrow-left',
        'arrow-narrow-right',
        'arrow-narrow-up',
        'arrow-right',
        'arrow-up',
        'at-symbol',
        'badge-check',
        'ban',
        'bell',
        'book-open',
        'bookmark',
        'briefcase',
        'calendar',
        'camera',
        'cash',
        'chart-pie',
        'chat-alt',
        'chat',
        'check-circle',
        'check',
        'cheveron-down',
        'cheveron-left',
        'cheveron-right',
        'cheveron-up',
        'clipboard-check',
        'clipboard-copy',
        'clipboard-list',
        'clipboard',
        'clock',
        'cloud-download',
        'cloud-upload',
        'code',
        'cog',
        'collection',
        'color-swatch',
        'credit-card',
        'currency-dollar',
        'currency-euro',
        'currency-pound',
        'currency-rupee',
        'currency-yen',
        'cursor-click',
        'document-add',
        'document-download',
        'document-duplicate',
        'document-remove',
        'document-report',
        'document',
        'dots-circle-horizontal',
        'dots-horizontal',
        'dots-vertical',
        'download',
        'duplicate',
        'emoji-happy',
        'emoji-sad',
        'exclamation-circle',
        'exclamation',
        'external-link',
        'eye',
        'filter',
        'flag',
        'folder',
        'globe-alt',
        'globe',
        'hashtag',
        'heart',
        'home',
        'inbox-in',
        'inbox',
        'information-circle',
        'key',
        'light-bulb',
        'lightning-bolt',
        'link',
        'location-marker',
        'lock-closed',
        'lock-open',
        'logout',
        'mail-open',
        'mail',
        'menu-alt-1',
        'menu-alt-2',
        'menu-alt-3',
        'menu-alt-4',
        'menu',
        'microphone',
        'minus-circle',
        'moon',
        'office-building',
        'paper-clip',
        'pencil-alt',
        'pencil',
        'phone-incoming',
        'phone-outgoing',
        'phone',
        'photograph',
        'plus-circle',
        'plus',
        'printer',
        'qrcode',
        'question-mark-circle',
        'receipt-refund',
        'refresh',
        'reply',
        'scale',
        'search',
        'selector',
        'share',
        'shield-check',
        'shield-exclamation',
        'shopping-cart',
        'sort-ascending',
        'sort-descending',
        'sparkles',
        'speakerphone',
        'sun',
        'switch-horizontal',
        'switch-vertical',
        'tag',
        'template',
        'ticket',
        'translate',
        'trash',
        'trending-down',
        'trending-up',
        'upload',
        'user-add',
        'user-circle',
        'user-group',
        'user-remove',
        'user',
        'users',
        'view-boards',
        'view-list',
        'volume-off',
        'volume-up',
        'x-circle',
        'x',
        'zoom-in',
        'zoom-out',
    ];

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'heroicons');

        collect(self::ICONS)->each(function (string $icon) {
            Blade::component("heroicons::components.outline-md.md-$icon", "icon-o-$icon");
            Blade::component("heroicons::components.solid-sm.sm-$icon", "icon-s-$icon");
        });
    }
}
