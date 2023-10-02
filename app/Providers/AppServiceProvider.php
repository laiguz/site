<?php

namespace App\Providers;

use App\Models\Admin\Configs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $configurations = Configs::find(1);
        // Vincule os dados de configuração como uma variável global
        config(['app.configs' => $configurations]);

        // Registrar a macro personalizada para o Query Builder
        Builder::macro('search', function ($string) {
            return $string ? $this->where(function ($query) use ($string) {
                $columns = Schema::getColumnListing($this->from);

                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $string . '%');
                }
            }) : $this;
        });


        Builder::macro('searchRelatedFields', function ($relation, $fields, $string) {
            return $string ? $this->join($relation, $relation . '.id', '=', $this->from . '.' . $relation . '_id')
                ->where(function ($query) use ($fields, $string) {
                    foreach ($fields as $field) {
                        $query->orWhere($relation . '.' . $field, 'LIKE', '%' . $string . '%');
                    }
                    $query->orWhere($this->from . '.conteudo', 'LIKE', '%' . $string . '%');
                }) : $this;
        });
    }
}
