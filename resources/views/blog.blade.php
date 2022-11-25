@include('header')

<div class="wrapper clrfix">
    <section class="content">
        <h1>{{ ucwords(settings('website_title')) }} Blog</h1>
        <p class="blog-description">Our news, cryptocurrencies guides and tutorials</p>
        <br>
        <section class="content">
            {{-- {{ session()->get('locale') }} --}}
            <div class="blog-articles articles-news small">
                @forelse($data as $post)
                <article class="blog-post">
                    <div class="blog-post-img">
                        <a href="{{ blog_url($post->slug) }}">
                            <img src="{{ asset('blog_images/'.$post->image_thumbnail) }}" alt="">
                        </a>
                    </div>
                    <div class="blog-post-body" style="display: flex;">
                        <header class="blog-post-head">
                            <a href="{{ blog_url($post->slug) }}">
                                {{ $post->title }}
                            </a>
                            <div class="blog-time"><time timestamp="1597579200">August 16, 2020</time></div>
                        </header>
                    </div>
                </article>
                @empty
                @endforelse
            </div>
        </section>
    </section>
</div>
<style>
    @media only screen and (max-width: 760px)
    .articles-news.small .blog-post-body {
        display: block!important;
    }
</style>
@include('footer')