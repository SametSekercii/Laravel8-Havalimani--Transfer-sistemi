@extends('layouts.home')

@section('title',"User Profil")


@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner" style="height: 100px;">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">User Profile</li>
                    </ol>
    </section>

    <section id="aa-blog-archive">
        @include("home.flash-message")
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @include("home.usermenu")
                    <div class="col-md-9">
                        <x-app-layout>
                            <x-slot name="header">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                    {{ __('Profile') }}
                                </h2>
                            </x-slot>

                            <div>
                                <div class="max-w-7xl mx-auto py-7 sm:px-6 lg:px-8">
                                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                        @livewire('profile.update-profile-information-form')

                                        <x-jet-section-border />
                                    @endif

                                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.update-password-form')
                                        </div>

                                        <x-jet-section-border />
                                    @endif

                                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.two-factor-authentication-form')
                                        </div>

                                        <x-jet-section-border />
                                    @endif

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.logout-other-browser-sessions-form')
                                    </div>

                                    <x-jet-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </x-app-layout>

                    </div>

                </div>

            </div>
        </div>
    </section>



@endsection
@section("javascript")
    <link href="{{ asset("assets/home") }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset("assets/home") }}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="{{ asset("assets/home") }}/css/style.css" rel="stylesheet">


@endsection
