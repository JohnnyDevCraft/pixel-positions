<?php

use App\Models\Employer;
use App\Models\Job;

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

