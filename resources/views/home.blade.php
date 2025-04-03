@php
    $comics = config("comics");
@endphp
@extends('layouts.master')



@section('main')
    
    <main >
        <div class="w-full h-96 overflow-hidden">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="{{asset('assets/img/jumbotron.jpg')}}" alt="">
            </div>
        </div>
        <div class="">
            <div class="bg-amber-600">
                
                <section class="py-12 bg-[#1c1c1c]">
                    <div class="container mx-auto grid grid-cols-6">
                        @foreach ($comics as $comic)
                            <x-card>
                                <x-slot:img>{{ $comic['thumb']}}</x-slot>
                                <x-slot:title>{{ $comic['title']}}</x-slot>
                            </x-card>
                        @endforeach
                        
                    </div>
                </section>
    
                <section class="bg-[#4f82f0] h-30">
                    <div class="flex items-center h-full">
                        <div class="container mx-auto flex justify-between">
                            <div class="flex items-center gap-3">
                                <img class="h-14" src="{{asset('assets/img/buy-comics-digital-comics.png')}}" alt="">
                                <span class="text-white">DIGITAL COMICS</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <img class="h-14" src="{{asset('assets/img/buy-comics-merchandise.png')}}" alt="">
                                <span class="text-white">DC MERCHANDISE</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <img class="h-14" src="{{asset('assets/img/buy-comics-digital-comics.png')}}" alt="">
                                <span class="text-white">SUBSCRIPTION</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <img class="h-14" src="{{asset('assets/img/buy-comics-shop-locator.png')}}" alt="">
                                <span class="text-white">COMIC SHOP LOCATOR</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <img class="h-12" src="{{asset('assets/img/buy-dc-power-visa.svg')}}" alt="">
                                <span class="text-white">DC POWER VISA</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    
@endsection