<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'is_availavle',
        'category_id'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function uploadImage($image)
    {
        if($image == null) return;
        $ext = $image->extension();
        if($ext == 'jpeg') $ext = 'jpg';
        if(! in_array($ext, ['jpg','png', 'gif', 'webp'])) return;

        $filename = 'product-' . Str::random(8);
        $path = 'products/id_' . $this->id;
        $fullPathOriginal = $path . '/' . $filename . '.' . $ext;

        $fullPathLargeImage = $path . '/' . $filename . '_large.' . $ext;
        $fullPathSmallImage = $path . '/' . $filename . '_small.' . $ext;
        if(! File::exists('uploads/'.$path)){
            File::makeDirectory('uploads/'. $path);
        }

        $compressImage = Image::read($image);
        $compressImage->save('uploads/'. $fullPathOriginal, 80);
        $compressImage->resize(770,450, function($constraint){
            $constraint->aspectRatio();
        })->save('uploads/'. $fullPathLargeImage, 80);
        $compressImage->resize(412,473, function($constraint){
            $constraint->aspectRatio();
        })->save('uploads/'. $fullPathSmallImage, 80);


        $this->image = $fullPathOriginal;
        $this->save();
     }

     public function getOriginalImage()
     {
        if($this->image !== null){
            return asset('uploads/' . $this->image);
        }
        return asset('assets/img/blog/b1.jpg');
     }

     public function getLargeImage()
     {
        if($this->image !== null){
           $tmp = explode('.', $this->image);
           $ext = end($tmp);
           $filename = $tmp[0] . '_large.' . $ext;

           return asset('uploads/'.$filename);
        }
        return asset('assets/img/blog/b1.jpg');
     }

     public function getSmallImage()
     {
        if($this->image !== null){
           $tmp = explode('.', $this->image);
           $ext = end($tmp);
           $filename = $tmp[0] . '_small.' . $ext;

           return asset('uploads/'.$filename);
        }
        return asset('assets/img/project/project-tab-1.jpg');
     }

     public function getPrice(){
        return number_format($this->price, 0, ',' ,' ' ). ' ₽';
     }
}
