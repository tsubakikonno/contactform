<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JapanPostCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // storage直下に日本郵便のサイトからダウンロードしたCSVファイルを解凍して配置
        // ref: https://www.post.japanpost.jp/zipcode/dl/oogaki-zip.html
        $file = new \SplFileObject(storage_path().'/KEN_ALL.CSV');
        $japanPostcodes = collect($file)->map(function ($line) {
            $encLine = mb_convert_encoding($line, 'UTF-8', 'SJIS');
            $csvLine = str_getcsv($encLine);
            if (isset($csvLine[2]) && isset($csvLine[6]) && isset($csvLine[7]) && isset($csvLine[8])) {
                // 郵便番号, 都道府県, 市区町村, 町域すべてあるデータしか登録しない
                return [
                    'postcode' => $csvLine[2],
                    'prefecture' => $csvLine[6],
                    'city' => $csvLine[7],
                    'street' => $csvLine[8],
                ];
            }
            return null;
        })->reject(function ($value) {
            return is_null($value);
        })->toArray();

        DB::table('japan_postcodes')->insert($japanPostcodes);
    }
}