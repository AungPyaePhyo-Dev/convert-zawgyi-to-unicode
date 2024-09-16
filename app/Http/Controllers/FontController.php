<?php

namespace App\Http\Controllers;

use App\Models\Font;
use App\Models\Publisher;
use App\Models\Series;
use Illuminate\Http\Request;

class FontController extends Controller
{
    public function convertForm() {
        return view('convert');
    }

    public function convert() {
        Font::where('status', 0)->chunk(100, function($fonts) {
            foreach($fonts as $font) {
                $unicodeValue = tounicode($font->zawgyi);
                Font::where('id', $font->id)->update([
                    'unicode' => $unicodeValue,
                    'status' => 1
                ]);
            }
        });
        return redirect()->route('convert.index')->with('message', 'Successfully converted from zawgyi to unicode');
    }

    public function convertSeries() {
        $fonts = \DB::table('series')->where('unicode_status', 0)->get();

        foreach($fonts as $font) {
            $unicodeValue = tounicode($font->title);
            \DB::table('series')->where('id', $font->id)->update([
                'unicode_title' => $unicodeValue,
                'unicode_status' => 1
            ]);
        }
        return redirect()->route('convert.index')->with('message', 'Successfully converted from zawgyi to unicode');
    }

    public function convertPublisher() {
        $fonts = \DB::table('publisher')->where('unicode_status', 0)->get();
        foreach($fonts as $font) {
            $unicodeValue = tounicode($font->name);
            if($font->name !== '') {
                \DB::table('publisher')->where('idx', $font->idx)->update([
                    'unicode_name' => $unicodeValue,
                    'unicode_status' => 1
                ]);
            }
        }
        return redirect()->route('convert.index')->with('message', 'Successfully converted from zawgyi to unicode');
    }

    public function convertMongoSeries() {
        $series = Series::get();
        foreach($series as $font) {
            $unicodeValue = tounicode($font->title);
            Series::where('_id', $font->_id)->update([
                'unicode_title' => $unicodeValue,
                'unicode_status' => 1
            ]);
        }
        return redirect()->route('convert.index')->with('message', 'Successfully converted from zawgyi to unicode');
    }


    public function convertMongoPublisher() {
        $publishers = Publisher::get();
        foreach($publishers as $font) {
            $unicodeValue = tounicode($font->name);
            if($font->name !== '') {
                Publisher::where('_id', $font->_id)->update([
                    'unicode_name' => $unicodeValue,
                    'unicode_status' => 1
                ]);
            }
        }
        return redirect()->route('convert.index')->with('message', 'Successfully converted from zawgyi to unicode');
    }
}
