<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AmbassadorProfile;

class AmbassadorProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */  public function test()
    {
        $aProfiles = 'App\Models\AmbassadorProfile'::all()->toJson(JSON_PRETTY_PRINT);
        var_dump( $aProfiles);
    }
    public function run()
    {
        //
        // Let's truncate our existing records to start from scratch.
        AmbassadorProfile::truncate();

        $strJsonFileContents = file_get_contents(__DIR__."/dummyProfiles.json");
        $array = json_decode($strJsonFileContents, true);
        if (count($array)) {
            for ($i = 0; $i < count($array); $i++) {
                AmbassadorProfile::create([
                    'fullName' => $array[$i]['fullName'],
                    'photo' => $array[$i]['photo'],
                    'star' => $array[$i]['star'],
                    'active' => $array[$i]['active'],
                    'activeText' => $array[$i]['activeText'],
                    'sport' => $array[$i]['sport'],
                    'loc' => $array[$i]['loc'],
                    'url' => $array[$i]['url'],
                ]);
            }
        }
        // var_dump( $array); // show contents
    }
}
