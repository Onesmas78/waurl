<?php

namespace Tests\Unit\Controllers;

use App\Models\Url;
use App\Models\Visit;
use Tests\TestCase;

class UrlRedirectControllerTest extends TestCase
{
    /**
     * @test
     * @group u-controller
     */
    public function url_redirection()
    {
        $url = Url::factory()->create();

        $response = $this->get(route('urlhome').'/'.$url->keyword);
        $response->assertRedirect($url->long_url);
        $response->assertStatus(uHub('redirect_status_code'));

        $this->assertCount(1, Visit::all());
    }
}
