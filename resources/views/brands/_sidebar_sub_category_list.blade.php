@foreach($childs as $child)
<li class="{{ active_class((if_route('categories.show') && if_route_param('category', $child->id) )) }}">
    <a href="{{ route('categories.show_brands', $child->id ) }}" title="">{{$child->name}}</a>
    @if(!$child->isLeaf())
        @include('brands._sidebar_sub_category_list', ['childs' => $child->getImmediateDescendants()])
    @endif
</li>
@endforeach