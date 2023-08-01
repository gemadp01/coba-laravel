
@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Post Category : {{ $category }}</h1>

   @foreach ($posts as $post)
   <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
   </article>
    

   
   @endforeach
@endsection

{{-- Post::create([
    'title' => 'Judul Ke Kelima', 
    'slug' => 'judul-Ke-Kelima', 
    'excerpt' => 'Lorem Ipsum Kelima', 
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam! Necessitatibus vero repellat veniam, vel laborum repellendus. Suscipit, magni earum.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium fugit suscipit eaque nemo eius, tenetur libero quod harum! Magnam, error labore ad et soluta reprehenderit cupiditate inventore culpa corporis laborum, animi, tempora id ipsa molestias voluptates debitis velit. Nulla recusandae beatae corrupti. Eaque enim explicabo quidem odio, ut dolores porro exercitationem facere magni necessitatibus eligendi ea laboriosam ex, ipsum quaerat ratione totam ipsa! Delectus voluptatum voluptatem, quibusdam laboriosam totam beatae quam, blanditiis cupiditate hic nesciunt accusamus nobis dolorum dolores eveniet laborum alias modi, obcaecati iste veniam deleniti esse eos corporis. Ea nemo quis numquam sed enim earum temporibus facere</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sapiente at nihil deleniti illo magni obcaecati itaque vel non molestias quaerat odio animi, corporis totam ipsa, quidem quisquam, nesciunt perspiciatis. Dicta, ex, repellendus eum mollitia ut repellat possimus assumenda animi blanditiis id facere! Eum necessitatibus id, deleniti natus ea repellendus!</p>'
]) --}}