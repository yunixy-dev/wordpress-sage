@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
    <section>
      @php dynamic_sidebar('paged-cts') @endphp
    </section>
  </div>
  <div class="col-md-4">
    @php dynamic_sidebar('sidebar-primary') @endphp
  </div>
</div>
@endsection
