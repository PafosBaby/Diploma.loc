<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['image_path', 'product_id'];

    public static function uploadImage($image, $product)
    {
        if($image == null) return;
        $ext = $image->extension();
        if($ext == 'jpeg') $ext = 'jpg';
        if(! in_array($ext, ['jpg','png', 'gif', 'webp'])) return;

        $filename = 'product-' . Str::random(8);
        $path = 'products/id_' . $product->id;
        $fullPathOriginal = $path . '/' . $filename . '.' . $ext;

        $fullPathLargeImage = $path . '/' . $filename . '_large.' . $ext;
        if(! File::exists('uploads/'.$path)){
            File::makeDirectory('uploads/'. $path);
        }

        $compressImage = Image::read($image);
        $compressImage->save('uploads/'. $fullPathOriginal, 80);
        $compressImage->resize(770,450, function($constraint){
            $constraint->aspectRatio();
        })->save('uploads/'. $fullPathLargeImage, 80);

        $prodImage = new static;

        $prodImage->product_id= $product->id;
        $prodImage->image_path = $fullPathOriginal;
        $prodImage->save();
     }

     public function getImage($type = 'original')
     {
        if($this->image_path !== null){
            if($type == 'original'){
                 return asset('uploads/' . $this->image_path);
            }elseif($type == 'large'){
                $tmp = explode('.', $this->image_path);
                $ext = end($tmp);
                $filename = $tmp[0] . '_' . $type . '.' . $ext;

                return asset('uploads/'.$filename);
            }

            return asset('assets/img/team/team-1.jpg');

        }
     }

}
