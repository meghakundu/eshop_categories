<form method="POST" action="/add-category">
    @csrf
    <select name="parent_id">
        <option value="0">---</option>
        @if($categories->count() > 0)
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
        @foreach($sub_categories as $subcat)
           @foreach($subcat->children as $subitem)
            @if($subitem->parent_id == $cat->id)
            <option value="{{$subitem->id}}">-{{$subitem->name}}</option>
            @endif
           @endforeach
        @endforeach
        @endforeach
        @endif 
    </select>
    <input type="text" placeholder="Enter category" name="cat_name"/>
    <input type="submit" value="Add category"/>
</form>
