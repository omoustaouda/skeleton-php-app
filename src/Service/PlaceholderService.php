<?php

namespace CaringCircles\BaseAppSkeleton\Service;

class PlaceholderService
{
    public function sayHi(): string
    {
        $greetingText = 'Hallou from the Placeholder service';
        return $greetingText;
    }
}
