<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class SearchFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_search_by_article_id()
    {
        // Create a sample article
        $article = Article::factory()->create();

        // Perform a search by article ID
        $response = $this->get('/article/' . $article->id);

        // Check if the response contains the article's title
        $response->assertStatus(200);
        $response->assertSee($article->title);
    }

    /** @test */
    public function it_can_search_by_category_slug()
    {
        // Create a sample category and an article belonging to it
        $category = Category::factory()->create(['name' => 'Tech News']);
        $article = Article::factory()->create(['category_id' => $category->id]);

        // Perform a search by category slug
        $response = $this->get('/category/' . $category->slug);

        // Check if the response contains the article's title
        $response->assertStatus(200);
        $response->assertSee($article->title);
    }

    /** @test */
    public function it_can_search_by_tag_slug()
    {
        // Create a sample tag and an article associated with it
        $tag = Tag::factory()->create(['name' => 'AI']);
        $article = Article::factory()->create();
        $article->tags()->attach($tag);

        // Perform a search by tag slug
        $response = $this->get('/tag/' . $tag->slug);

        // Check if the response contains the article's title
        $response->assertStatus(200);
        $response->assertSee($article->title);
    }

    /** @test */
    public function it_returns_404_for_invalid_article_id()
    {
        $response = $this->get('/article/999');
        $response->assertStatus(404);
    }

    /** @test */
    public function it_returns_404_for_non_existent_category_slug()
    {
        $response = $this->get('/category/non-existent-category');
        $response->assertStatus(404);
    }

    /** @test */
    public function it_returns_404_for_non_existent_tag_slug()
    {
        $response = $this->get('/tag/non-existent-tag');
        $response->assertStatus(404);
    }

}