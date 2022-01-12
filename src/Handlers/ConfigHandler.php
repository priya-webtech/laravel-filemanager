<?php

namespace UniSharp\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return 'folderrr-'. auth()->id();
    }
}
