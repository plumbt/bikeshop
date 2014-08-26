<?php

class StartController extends BaseController {
    public function __construct() {}

    public function index() {
        if(!Schema::hasTable('migrations')) {
            Artisan::call('migrate');
            Artisan::call('db:seed');
            echo '<h1>Crux is now locked and loaded...</h1><a href="/">Return Home</a>';
            exit;
        } else {
            return Redirect::to('/');
        }
    }
}
