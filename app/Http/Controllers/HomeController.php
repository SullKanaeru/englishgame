<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function openGame() {
        return view('index');
    }

    public function startGame() {
        return view('game-page');
    }

    public function startStudy() {
        return view('study-page');
    }

    public function loadGame($level) {
        if ($level === 'l1n1') {
            return view('level1-number1'); 
        } elseif ($level === 'l1n2') {
            return view('level1-number2');
        } elseif ($level === 'l1n3') {
            return view('level1-number3');
        }

        if ($level === 'l2n1') {
            return view('level2-number1'); 
        } elseif ($level === 'l2n2') {
            return view('level2-number2');
        } elseif ($level === 'l2n3') {
            return view('level2-number3');
        }
    }
}
