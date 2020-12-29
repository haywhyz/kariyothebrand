@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">Categories =></a>
        <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>

        <div class="col-md-12">
            <div class="row">
            <div class="col-md-6">
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                       <div class="form-group">
                           <label for="name">Category Name</label>
                       <input type="text" name="name" class="form-control">
                    </div>
                    <button class="btn btn-primary" name="submit" type="submit">Add</button>
                   </form>

            </div>
            <div class="col-md-6">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Operation</th>

                        </tr>
                    </thead>
                    <tbody>

                        @if ($categories->count() > 0)
                                    @foreach ($categories as $categories)
                                        <tr>
                                            <td>{{$categories->name}}</td>
                                            {{-- <a href="view-book.php" class="btn btn-primary">View</a> --}}
                                        <td><form action="{{route('category.destroy', $categories->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form></td></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h2> You have zero records  </h2>
                                @endif

                    </tbody>

                </table>

         </div>


        </div>
        </div>
        {{-- <ul class="nav navbar-nav">
            @if(!empty($categories))
            @forelse($categories as $category)
                <li class="active">
                    <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
{{-- delete button --}}
                    {{-- <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>

                </li>
            @empty
                <li>No Items</li>
            @endforelse
                @endif

        </ul> --}}






    {{-- <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!} --}}


    {{--products--}}
    {{-- @if(isset($products))
<section>
    <h3>Products</h3>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Products</th>
    		</tr>
    	</thead>
    	<tbody>
@forelse($products as $product)
    <tr><td>{{$product->name}}</td></tr>
    	@empty
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
</section> --}}
    {{-- @endif --}}

@endsection


