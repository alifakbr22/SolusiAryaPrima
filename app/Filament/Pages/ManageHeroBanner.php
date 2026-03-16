<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;
use UnitEnum;

class ManageHeroBanner extends Page implements HasSchemas
{
    use InteractsWithSchemas;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    // ✅ Perbaikan: urutan tipe harus UnitEnum|string|null
    protected static UnitEnum|string|null $navigationGroup = 'Configuration';

    protected static ?string $navigationLabel = 'Ubah Banner Hero';

    protected static ?string $title = 'Ubah Banner Hero';

    protected static ?string $slug = 'manage-hero-banner';

    protected static string $view = 'filament.pages.manage-hero-banner';

    protected static ?int $navigationSort = -10;

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::first();

        if ($setting) {
            $this->data = $setting->toArray();
        }
        else {
            $this->data = [];
        }
    }

    public function heroSchema(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
            TextInput::make('hero_badge')
            ->label('Hero Badge')
            ->placeholder('#SolusiTeknologiTerpadu'),
            TextInput::make('hero_title')
            ->label('Hero Title'),
            Textarea::make('hero_description')
            ->label('Hero Description')
            ->columnSpanFull(),
            FileUpload::make('hero_bg')
            ->label('Hero Background Image')
            ->image()
            ->disk('public')
            ->directory('settings')
            ->helperText('Jika diisi, gambar ini akan menggantikan animasi background hero.')
            ->columnSpanFull(),
        ])
            ->columns(['lg' => 2]);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
            ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
            ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->getSchema('hero')->getState();

            $setting = Setting::first();
            if ($setting) {
                $setting->update($data);
            }
            else {
                Setting::create($data);
            }

            Notification::make()
                ->success()
                ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                ->send();
        }
        catch (\Exception $exception) {
            Notification::make()
                ->danger()
                ->title('Error saving changes')
                ->body($exception->getMessage())
                ->send();
        }
    }
}