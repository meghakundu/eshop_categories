<form action="/allot-user" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name"/>
    <input type="email" name="email" placeholder="Enter email"/>
    <input type="password" name="password" placeholder="Enter password"/>
    <p>Choose category:</p>
    <select name="category_id">
            <option value="0">---</option>
            @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
            @endforeach
    </select>
    <input type="submit" value="Add user"/>
</form>

<p>Users associated with category:</p>
@foreach($catUsers as $ucat)
{{$ucat->name}} chose "{{$ucat['categoryUser']->cat_name}}".
@endforeach