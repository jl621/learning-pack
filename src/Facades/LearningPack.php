<?php
namespace LeoKim\LearningPack\Facades;
use Illuminate\Support\Facades\Facade;
class LearningPack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'learningpack';
    }
}