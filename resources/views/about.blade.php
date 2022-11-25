@include('header')

<div class="wrapper clrfix">
    <section class="content narrow">
        <h1>{{ ucwords(strtolower($data['title'])) }}</h1>
        <section class="content-box">
            <br>
            {!! $data['body'] !!}
        </section>
    </section>
</div>

@include('footer')