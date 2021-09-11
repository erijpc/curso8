<li>{{ $sub_categories->name }}</li>
@if ($sub_categories->categories)
    <ul style="list-style-type:none">
        @if (count($sub_categories->categories) > 0)
            @foreach ($sub_categories->categories as $subCategories)
                @include('sub_categories', ['sub_categories' => $subCategories])
            @endforeach
        @endif
    </ul>
@endif





