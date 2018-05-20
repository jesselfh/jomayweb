<div class="category">
    <ul class="nav nav-tabs nav-stacked">

        <li><a class="category-header"><i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;分类目录</a></li>

        @foreach($categories->getImmediateDescendants()  as $category)

        <li>
            <a data-target="#cate{{ $category->id }}" data-toggle="collapse" class="category-title">{{ $category->name }}
                <span class="glyphicon glyphicon-menu-down pull-right"></span>
            </a>

            <ol id="cate{{ $category->id }}" class="nav nav-tabs nav-stacked collapse">
                @if(!$category->isLeaf())
                    @include('libs._child_list',['childs'=>$category->getImmediateDescendants()])
                @endif
            </ol>

        </li>
        @endforeach

    </ul>
</div>


