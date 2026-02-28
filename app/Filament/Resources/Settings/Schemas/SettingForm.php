<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('General Info')
                            ->schema([
                                TextInput::make('site_title')->required(),
                                TextInput::make('company_name')->required(),
                                FileUpload::make('logo')->image()->directory('settings')->columnSpanFull(),
                                Textarea::make('company_description')->columnSpanFull(),
                            ])->columns(2),
                        Tab::make('Contact & Social')
                            ->schema([
                                Textarea::make('address')->columnSpanFull(),
                                TextInput::make('phone'),
                                TextInput::make('email')->email(),
                                TextInput::make('hotline'),
                                TextInput::make('whatsapp_url')->url()->label('WhatsApp URL'),
                                TextInput::make('facebook_url')->url()->label('Facebook URL'),
                                TextInput::make('instagram_url')->url()->label('Instagram URL'),
                                TextInput::make('linkedin_url')->url()->label('LinkedIn URL'),
                            ])->columns(2),
                        Tab::make('Hero Section')
                            ->schema([
                                TextInput::make('hero_badge'),
                                TextInput::make('hero_title'),
                                Textarea::make('hero_description')->columnSpanFull(),
                            ])->columns(2),
                        Tab::make('Vision & Mission')
                            ->schema([
                                Textarea::make('vision')->columnSpanFull(),
                                Textarea::make('mission')->columnSpanFull(),
                            ]),
                        Tab::make('Legal')
                            ->schema([
                                TextInput::make('npwp')->label('NPWP'),
                                TextInput::make('nib')->label('NIB'),
                            ])->columns(2),
                    ])->columnSpanFull()
            ]);
    }
}
