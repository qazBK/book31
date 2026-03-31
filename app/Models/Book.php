<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\UploadedFile;

class Book extends Model
{
    protected $fillable = [
        'name',
        'description',
        'year',
        'images',
    ];

    // Оставьте только одно объявление casts
    protected $casts = [
        'images' => 'array',
    ];

    // Метод для обновления изображений
    public function updateImages(array|UploadedFile|null $files)
    {
        if ($files && is_array($files)) {
            $images = [];

            foreach ($files as $image) {
                if ($image instanceof UploadedFile && $image->isValid()) {
                    // Генерация уникального имени файла
                    $imageName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

                    // Сохраняем в папку storage/app/public/images
                    $path = $image->storeAs('images', $imageName, 'public');

                    // Сохраняем относительный путь для БД
                    $images[] = $path;
                }
            }

            // Сохраняем массив путей в JSON поле
            $this->images = $images;
            $this->save();

            return true;
        }

        return false;
    }

    // Аксессор для получения первого изображения (дефолтное)
    public function defaultImage(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (empty($this->images)) {
                    return asset('assets/img/default.jpg');
                }

                $images = is_array($this->images) ? $this->images : json_decode($this->images, true);

                if (empty($images)) {
                    return asset('assets/img/default.jpg');
                }

                return asset('storage/' . $images[0]);
            }
        );
    }

    // Аксессор для получения всех URL изображений
    public function imageUrls(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (empty($this->images)) {
                    return [];
                }

                $images = is_array($this->images) ? $this->images : json_decode($this->images, true);

                return array_map(function ($image) {
                    return asset('storage/' . $image);
                }, $images);
            }
        );
    }
}
