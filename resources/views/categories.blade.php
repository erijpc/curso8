<ul style="list-style-type:none">
    @if (count($categories) > 0)
        @foreach ($categories as $category)
            <li>{{$category->name}}</li>
            <ul style="list-style-type:none">
            @if (count($category->childCategories))
                @foreach ($category->childCategories as $subCategories)
                    @include('sub_categories', ['sub_categories' => $subCategories])
                @endforeach
            @endif
            </ul>
        @endforeach
    @endif
</ul>












