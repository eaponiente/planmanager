<?php

namespace Edgar\PlanManager\Console;

class JWTGenerateCommand extends \Tymon\JWTAuth\Commands\JWTGenerateCommand
{
    public function handle()
    {
        $this->fire();
    }
}