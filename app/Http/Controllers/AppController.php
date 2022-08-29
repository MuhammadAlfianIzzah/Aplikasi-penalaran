<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppController extends Controller
{
    public function showPencarianKata()
    {
        return view("pages.app.pencariankata.index");
    }
    public function prosesPencarianKata(Request $request)
    {
        $attr = $request->validate([
            "text" => "required",
            "keyword" => "required"
        ]);
        $count = Str::substrCount($attr["text"], $attr["keyword"]);
        $attr["text"] = Str::replace($attr["keyword"], "<span class='text-danger'>" . $attr["keyword"] . " </span>", $attr["text"]);

        return view("pages.app.pencariankata.show", [
            "data" => $attr,
            "count" => $count
        ]);
    }

    public function showReplaceWord()
    {
        return view("pages.app.replace-word.index");
    }
    public function postReplaceWord(Request $request)
    {
        $attr = $request->validate([
            "text" => "required",
            "replace_text" => "required",
            "keyword" => "required"
        ]);

        $attr["text"] = Str::replace($attr["keyword"], "<span class='text-info'>" . $attr["replace_text"] . "</span>", $attr["text"]);
        // dd($attr);
        return view("pages.app.replace-word.show", [
            "data" => $attr,
        ]);
    }

    // public function showSortWord()
    // {
    //     $text = "hello word word word word world oke bro";
    //     $split = array_unique(explode(" ", $text));
    //     sort($split);
    //     $arrText = [];
    //     foreach ($split as $text) {
    //         $arrText[] = $text;
    //     }
    //     sort($arrText);
    //     dd($arrText);
    // }


    public function showSortWord()
    {
        return view("pages.app.sortWord.index");
    }
    public function postSortWord(Request $request)
    {
        $attr = $request->validate([
            "text" => "required",
        ]);

        $text = $attr["text"];
        $split = array_unique(explode(" ", $text));
        $arrText = [];
        foreach ($split as $text) {
            $arrText[] = Str::lower($text);
        }
        sort($arrText);
        return view("pages.app.sortWord.show", [
            "data" => $arrText
        ]);
    }
}
