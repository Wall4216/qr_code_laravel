<?php $gene = "tattelecom"?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('QRCODE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$gene}}</h1>
            <div class="justify-center flex  bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::encoding('UTF-8')
                    ->size(200)
                    ->generate("{{$gene}}") !!}
            </div>

        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$Wifi = 'WIFI'}}</h1>
            <div class="justify-center flex  bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {!! QrCode::size(200)->wiFi([
                    'ssid' => 'Xiaomi_026C_5G',
                    'encryption' => 'WPA2',
                    'password' => '51119035'
                ]) !!}
            </div>

        </div>
    </div>
</x-app-layout>

