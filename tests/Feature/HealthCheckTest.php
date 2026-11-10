<?php

it('returns a successful response from the health endpoint', function () {
    $this->get('/up')->assertOk();
});

it('serves the intentionally empty deployment landing page', function () {
    $this->get('/')->assertOk()->assertSee('<body></body>', false);
});
