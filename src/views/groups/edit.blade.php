@extends(Config::get('backend::views.layout'))

@section('header')
    <h3>
        <i class="icon-group"></i>
        Edit "{{ $group->name }}" Group
    </h3>
@stop

@section('help')
    <p class="lead">Groups</p>
    <p>
        Users can be placed into groups to manage permissions.
    </p>
     <p class="text-info">
        For more info visit <a href="http://docs.cartalyst.com/sentry-2/permissions" target="_blank">Sentry website</a>
    </p>
@stop

@section('content')
    <div class="row">
        <div class="span12 margin-top-20">
            {{ Former::horizontal_open(route('admin.groups.update', array($group->id)))->method('PUT') }}



                    {{ Former::xlarge_text('name','Name')->value($group->name)->required() }}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <a href="{{route('admin.groups.index')}}" class="btn">Cancel</a>
                    </div>

            {{ Former::close() }}
        </div>
    </div>
@stop
