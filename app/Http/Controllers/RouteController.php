<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //Открывается главная страница
    public function index(){
        return view('welcome');
    }
    //Открывается страница О нас
    public function about(){
        return view('pages/about');
    }
    //Открывается личный кабинет
    public function cabinet(){
        return view('pages/cabinet');
    }
    //Открывает страница Контакты
    public function contacts(){
        return view('pages/contacts');
    }
    //Открывается страница Оформление 
    public function decor(){
        return view('pages/decor');
    }
    //Открывается страница Скидки
    public function discounts(){
        return view('pages/discounts');
    }
    //Открывается страница Избранное
    public function favorites(){
        return view('pages/favorites');
    }
    //Открывается страница Как пользоваться сайтом
    public function manual(){
        return view('pages/manual');
    }
    //Открывается страница новинок
    public function novelties(){
        return view('pages/novelties');
    }
    //Открывается страница товара
    public function product(){
        return view('pages/product');
    }
    //Открывается страница акции
    public function stock(){
        return view('pages/stock');
    }
    public function basket(){
        return view('pages/basket');
    }
}
