<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UniqueSlugGenerator
{

    public $slug;

    /**
     * Build self instance
     *
     * @param string $model
     * @param string $value
     * @param string $column
     *
     * @return static
     */
    public static function builder(
        string $model,
        string $value,
        string $column = 'slug',
        ?string $except = null,
        ?string $exceptColumnName = 'id',
        ?string $language = 'en'
    ): static {
        return new static($model, $value, $column, $except, $exceptColumnName, $language);
    }

    public function __construct(
        protected string $model,
        protected string $value,
        protected string $column = 'slug',
        protected ?string $except = null,
        protected ?string $exceptColumnName = 'id',
        protected ?string $language = 'en'
    ) {
        if ($this->language === 'bn') {
            $this->slug = $this->generateBanglaSlug($value);
        } else {
            $this->slug = Str::slug($value);
        }
    }

    /**
     * Return generated slug value
     *
     * @return string
     */
    public function generate(): string
    {
        return $this->checkUnique();
    }

    /**
     * Validate and generate slug
     *
     * @param string $slug
     *
     * @return string
     */
    private function checkUnique(int $attempt = 1): string
    {
         $model = new $this->model;

        if ($attempt > 1) {
            $slug = $this->slug . '-' . $attempt;
        } else {
            $slug = $this->slug;
        }

        $is_exists = $model->where($this->column, $slug)
            ->when($this->except, fn (Builder $query): Builder => $query->whereNot($this->exceptColumnName, $this->except))
            ->exists();

        if (!$is_exists) {
            return $slug;
        }

        return $this->checkUnique($attempt + 1);
    }

    //bangla slug generator
    private function generateBanglaSlug(string $value): string
    {
        // Remove any leading or trailing whitespace
        $string = trim($value);

        // Replace any remaining spaces with hyphens
        $string = preg_replace('/ +/u', '-', $string);

        // Convert the string to lowercase
        $string = mb_strtolower($string, 'UTF-8');

        return $string;
    }
}
