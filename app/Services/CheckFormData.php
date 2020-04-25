<?php

namespace App\Services;

// Servicesディレクトリを生成した
// ファットコントローラーを避ける為に新しく別ファイルを生成した
// 本来のコントローラファイルで使用するには使う方のファイルでuseする

class CheckFormData
{
  public static function checkGender($contact){

    if ($contact->gender === 1) {
      $gender = '男性';
    }

    if ($contact->gender === 0) {
        $gender = '女性';
    }

    return $gender;
  }

  public static function checkAge($contact){

    
    if ($contact->age === 1) {
      $age = '~19歳';
    }

    if ($contact->age === 2) {
        $age = '20~29歳';
    }

    if ($contact->age === 3) {
        $age = '30~39歳';
    }

    if ($contact->age === 4) {
        $age = '40~49歳';
    }

    if ($contact->age === 5) {
        $age = '50~59歳';
    }

    if ($contact->age === 6) {
        $age = '~60歳';
    }

    return $age;
  }
}