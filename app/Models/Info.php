<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    private static $info,$image,$imageNewName,$directory,$imgUrl;

    public static function saveInfo($request){
        self::$info = new Info();
        self::$info->name = $request->name;
        self::$info->surname = $request->surname;
        self::$info->designation = $request->designation;
        self::$info->birthdate = $request->birthdate;
        self::$info->email = $request->email;
        self::$info->phone = $request->phone;
        self::$info->city = $request->city;
        self::$info->degree = $request->degree;
        self::$info->freelance = $request->freelance;
        self::$info->description = $request->description;
        self::$info->image = self::getImgUrl($request);
        self::$info->save();

    }

    private static function getImgUrl($request){
        self::$image=$request->file('image');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAsset/info-image/';
        self::$imgUrl= self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function status($id){
        self::$info=Info::find($id);
        if(self::$info->status==1){
            self::$info->status = 0;
        }else{
            self::$info->status = 1;
        }
        self::$info->save();
    }

    public static function updateInfo($request){
        self::$info = Info::find($request->info_id);
        self::$info->name = $request->name;
        self::$info->surname = $request->surname;
        self::$info->designation = $request->designation;
        self::$info->birthdate = $request->birthdate;
        self::$info->email = $request->email;
        self::$info->phone = $request->phone;
        self::$info->city = $request->city;
        self::$info->degree = $request->degree;
        self::$info->freelance = $request->freelance;
        self::$info->description = $request->description;
        self::$info->image = self::getImgUrl($request);
        self::$info->save();
    }

    public static function infoDelete($request){
        self::$info = Info::find($request->info_id);
        if (self::$info->image){
            if (file_exists(self::$info->image)){
                unlink(self::$info->image);
            }
        }
        self::$info->delete();
    }
}
