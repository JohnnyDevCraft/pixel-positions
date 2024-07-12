<?php

use App\Models\Employer;
use App\Models\Job;


test('it belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(
        [
            'employer_id' => $employer->id,
        ]
    );

    // Act & Assert
    expect($job->employer->id)->toBe($employer->id);
});

test('it fails without an employer', function () {
    $job = Job::factory()->create(
        [
            'employer_id' => null,
        ]
    );
})->throws(Exception::class);

it('can have tags', function(){
    $job = Job::factory()->create();

    $job->tag('front-end');

    expect($job->tags)->toHaveCount(1);
});
