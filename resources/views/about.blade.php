@for ($i = 0; $i <= 10; $i++) <h2>The number is {{ $i }}</h2>
  @endfor

  @foreach ($names as $name)
  <h2>The name is {{ $name }}</h2>
  @endforeach

  @forelse ($names as $name)
  <h2>The name is {{ $name }}</h2>
  @empty
  <h2>There are no names!</h2>
  @endforelse

  {{ $i = 0 }}
  @while ($i < 10) <h2>{{ $i }}</h2>{{ $i++ }}
    @endwhile
